<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;



    public function organisation()
    {
        return $this->belongsTo(Organisation::class);
    }


    public function serviceapply()
    {
        return $this->hasMany(Serviceapply::class);
    }


    public function servicehavecategory()
    {
        return $this->hasMany(Servicehavecategory::class,'service_id');
    }


}
