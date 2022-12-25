<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicehavecategory extends Model
{
    use HasFactory;

     public function servicecat()
    {
        return $this->HasMany(Servicecat::class,'id','servicecat_id');
    }
}
