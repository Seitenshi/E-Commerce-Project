<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class User extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'user_email',
        'user_password',
        'user_fname',
        'user_lname',
        'user_contact',
        'user_addr',
    ];
}
