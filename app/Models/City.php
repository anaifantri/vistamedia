<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class City extends Model
{
    protected $guarded = ['id'];

    public function products(){
        return $this->hasMany(Product::class, 'city_id', 'id');
    }
}
