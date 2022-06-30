<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    protected $password;
    use HasFactory;
    protected $fillable = ['email', 'firstname', 'lastname', 'password'];
}
