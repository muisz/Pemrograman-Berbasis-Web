<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use App\Models\ActivationCode;
use App\Models\ForgotPasswordToken;
use App\Utils\Role;
use App\Utils\LocalSession;
use App\Utils\Token;
use App\Mail\ForgotPasswordEmail;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        return view('landing.login');
    }

    public function post_login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        $user = User::where('email', $email)->first();
        if (!$user || !Hash::check($password, $user->password))
        {
            return view('landing.login')->with('error', true);
        }

        LocalSession::set_user($user);
        if ($user->role == Role::$ADMIN_GUDANG)
            return redirect()->route('transactions');
        return redirect()->route('dashboard');
    }

    public function register(Request $request)
    {
        return view('landing.register');
    }

    public function post_register(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $password = $request->password;
        $activation_code = $request->activation_code;

        if (!$this->is_valid_activation_code($activation_code) || $this->is_email_exist($email))
        {
            return view('landing.register')->with('error', true);
        }

        $user = new User();
        $user->name = $name;
        $user->email = $email;
        $user->password = $password;
        $user->role = Role::$SUPER_ADMIN;
        $user->save();

        LocalSession::set_user($user);
        return redirect()->route('dashboard');
    }

    public function forgot_password(Request $request)
    {
        return view('landing.forgot-password');
    }

    public function post_forgot_password(Request $request)
    {
        $email = $request->email;
        if (!$this->is_email_exist($email))
        {
            return view('landing.forgot-password')->with('error', true);
        }
        
        $token = new ForgotPasswordToken();
        $token->destination = $email;
        $token->token = Token::generate();
        $token->save();

        Mail::to($email)->send(new ForgotPasswordEmail($email, 'http://inventaris.test/reset-password?token='.$token->token.'&email='.$email));

        return view('landing.forgot-password')->with('success', true);
    }

    public function reset_password(Request $request)
    {
        $token_code = $request->query('token');
        $email = $request->query('email');

        $token = $this->get_valid_forgot_password_token($email, $token_code);
        if (!$token)
        {
            return view('landing.reset-password')->with('error', true);
        }

        return view('landing.reset-password')->with('token_valid', $token_code)->with('email', $email);
    }

    public function post_reset_password(Request $request)
    {
        $token = $request->token;
        $new_password = $request->new_password;
        $email = $request->email;

        $token = $this->get_valid_forgot_password_token($email, $token);
        if (!$token)
        {
            return view('landing.reset-password')->with('error', true);
        }

        $user = User::where('email', $token->destination)->first();
        if (!$user)
        {
            return view('landing.reset-password')->with('error', true);
        }

        $user->password = $new_password;
        $user->save();
        $token->delete();
        return view('landing.reset-password')->with('success', true);
    }

    public function logout(Request $request)
    {
        LocalSession::clear();
        return redirect()->route('login');
    }

    
    private function is_valid_activation_code($value)
    {
        $code = ActivationCode::where('code', $value)->first();
        return $code != null;
    }

    private function is_email_exist($email)
    {
        $user = User::where('email', $email)->first();
        return $user != null;
    }

    private function get_valid_forgot_password_token($email, $token)
    {
        if ($token && $email)
        {
            $token = ForgotPasswordToken::where('token', $token)->first();
            if ($token && $token->destination == $email)
            {
                return $token;
            }
        }
        return null;
    }
}

?>