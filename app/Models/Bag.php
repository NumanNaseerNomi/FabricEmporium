<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bag extends Model
{
    use HasFactory;

    protected $table = 'Bag';

    public function productDetail()
    {
        return $this->belongsTo(Products::class, 'productId');
    }
}
