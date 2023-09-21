<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'name',
        'desc',
        'price',
        'stock',
        "category_id",
        "user_id"
    ];

    //^ Products & Categories => One to Many 
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    //^ Products & Users => One to Many (with the user who created the product)
    public function userInventor()
    {
        return $this->belongsTo(User::class);
    }

    //* Products & Users => Many to Many (with the users who Buy the products)
    //? PIVOT => Paniers
    public function userProducts()
    {
        return $this->belongsToMany(User::class, "paniers");
    }
}
