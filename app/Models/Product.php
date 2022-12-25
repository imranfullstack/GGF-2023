<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;


    public function organisation()
    {
        return $this->belongsTo(Organisation::class);
    }

    public function buy()
    {
        return $this->hasMany(Productbuy::class);
    }



        public function producthavecategory()
    {
        return $this->hasMany(Producthavecategory::class,'product_id');
    }

}
