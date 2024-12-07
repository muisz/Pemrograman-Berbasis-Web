<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function index(Request $request) {
        if (!$this->is_authenticated()) {
            return redirect()->route('login');
        }

        $users = User::all();
        return view('dashboard.user.index')->with('users', $users);
    }

    public function add(Request $request) {
        return view('dashboard.user.add');
    }

    public function addUser(Request $request) {
        if (!$this->is_authenticated()) {
            return redirect()->route('login');
        }

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->role = $request->role;
        $user->save();
        return redirect()->route('users');
    }

    public function detail(Request $request) {
        if (!$this->is_authenticated()) {
            return redirect()->route('login');
        }

        $user = User::find($request->id);
        return view('dashboard.user.detail')
            ->with('user', $user)
            ->with('is_edit_mode', $request->query('edit'));
    }

    public function delete(Request $request) {
        if (!$this->is_authenticated()) {
            return redirect()->route('login');
        }

        $user = User::find($request->id);
        $user->delete();
        return redirect()->route('users');
    }

    public function edit(Request $request) {
        if (!$this->is_authenticated()) {
            return redirect()->route('login');
        }

        $user = User::find($request->id);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'password' => $request->password,
        ]);
        return redirect()->route('detail-user', ['id' => $user->id]);
    }
    
    public function myProfile() {
        if (!$this->is_authenticated()) {
            return redirect()->route('login');
        }

        $user = User::find(Session::get('authenticated_user_id'));
        return view('dashboard.user.myprofile')
            ->with('user', $user);
    }

    public function editMyProfile(Request $request) {
        if (!$this->is_authenticated()) {
            return redirect()->route('login');
        }

        $user = User::find(Session::get('authenticated_user_id'));
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'password' => $request->password,
        ]);
        return redirect()->route('my-profile');
    }

    public function is_authenticated() {
        if (Session::has('authenticated_user'))
        {
            return true;
        }
        return false;
    }
};

?>