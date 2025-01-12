<?php

namespace App\Utils;

class Token
{
    public static function generate()
    {
        return bin2hex(random_bytes(32 / 2));
    }
};

?>