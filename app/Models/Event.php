<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;


      public function organisation()
    {
        return $this->belongsTo(Organisation::class);
    }


    public function eventapply()
    {
        return $this->hasMany(Eventapply::class);
    }


    public function eventhavecategory()
    {
        return $this->hasMany(Eventhavecategory::class,'event_id');
    }





}
