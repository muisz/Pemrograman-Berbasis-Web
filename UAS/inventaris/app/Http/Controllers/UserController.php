<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Utils\Token;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $users = User::all();
        return view('dashboard.users.index')
            ->with('users', $users)
            ->with('user', $request->user());
    }

    public function add(Request $request)
    {
        return view('dashboard.users.add')->with('user', $request->user());
    }

    public function post_add(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $role = $request->role;
        
        $current_user = User::where('email', $email)->first();
        if ($current_user)
        {
            return view('dashboard.users.add')->with('user', $request->user())->with('error', true);
        }

        $raw_password = Token::generate();
        
        $user = new User();
        $user->name = $name;
        $user->email = $email;
        $user->password = $raw_password;
        $user->role = $role;
        $user->save();
        return redirect()->route('users');
    }

    public function edit(Request $request)
    {
        $selected_user = User::find($request->id);
        return view('dashboard.users.edit')
            ->with('selected_user', $selected_user)
            ->with('user', $request->user());
    }

    public function post_edit(Request $request)
    {
        $selected_user = User::find($request->id);
        $selected_user->update([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
        ]);

        if ($request->new_password)
        {
            $selected_user->password = $request->new_password;
        }
        $selected_user->save();
        return redirect()->route('users');
    }

    public function delete(Request $request)
    {
        $selected_user = User::find($request->id);
        $selected_user->delete();
        return redirect()->route('users')->with('user', $request->user());
    }
}

?>