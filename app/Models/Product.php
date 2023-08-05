<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'description', 'price','offer','category_id','image'];

    // Define the inverse of the one-to-many relationship with the Category model
    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }
}
