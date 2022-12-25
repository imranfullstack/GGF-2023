<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producthavecategory extends Model
{
    use HasFactory;


    public function productcat()
    {
        return $this->HasMany(Productcat::class,'id','productcat_id');
    }


}
