<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];

    // Define the one-to-many relationship with the Product model
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
