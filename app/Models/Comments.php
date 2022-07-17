<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    use HasFactory;

    protected $table = 'Comments';
    protected $fillable = ['productId', 'userId', 'comment'];
    public $timestamps = false;
    
    public function userDetail()
    {
        return $this->belongsTo(UsersModel::class, 'userId');
    }
}
