<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recruit extends Model
{
    use HasFactory;

     public function organisation()
    {
        return $this->belongsTo(Organisation::class);
    }

     public function recruithaves()
    {
        return $this->hasMany(Recruithavecategory::class);
    }


     public function jobapply()
    {
        return $this->hasMany(Jobapply::class);
    }

    public function recruithavecategory()
    {
        return $this->hasMany(Recruithavecategory::class,'recruit_id');
    }

}
