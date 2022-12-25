<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eventcat extends Model
{
    use HasFactory;



    public function eventcathave()
    {
        return $this->hasMany(Eventhavecategory::class,'event_id');
    }


}
