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
}

?>