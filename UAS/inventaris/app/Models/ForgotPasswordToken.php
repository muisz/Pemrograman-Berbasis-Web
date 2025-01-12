<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ForgotPasswordToken extends Model
{
    use HasFactory;

    protected $fillable = [
        'destination',
        'token',
    ];
}
