<?php

namespace App\Utils;

use App\Models\User;
use Illuminate\Support\Facades\Session;

class LocalSession
{
    public static function set_user(User $user)
    {
        session(['authenticated_user' => $user->id]);
    }

    public static function clear()
    {
        Session::forget('authenticated_user');
    }

    public static function get_user()
    {
        if (Session::has('authenticated_user'))
            return Session::get('authenticated_user');
        return null;
    }
}

?>