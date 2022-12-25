<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eventhavecategory extends Model
{
    use HasFactory;

	public function eventcat()
	    {
	        return $this->HasMany(Eventcat::class,'id','eventcat_id');
	    }

	public function event()
	    {
	        return $this->hasMany(Event::class,'id','eventcat_id');
	    }


}
