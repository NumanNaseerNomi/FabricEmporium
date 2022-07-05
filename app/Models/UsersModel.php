<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersModel extends Model
{
    use HasFactory;

    protected $table = 'Users';
    protected $fillable = ['name', 'email', 'password', 'contactNumber', 'address'];
    public $timestamps = false;
}
