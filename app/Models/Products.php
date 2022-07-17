<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    
    protected $fillable =
    [
        "title",
        "description",
        "brand",
        "category",
        "price",
        "discount",
        "quantity",
        "status",
        "image",
    ];
    
    public $timestamps = false;
    
    public function comments()
    {
        return $this->hasMany(Comments::class, 'productId');
    }
}
