<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orgtypehave extends Model
{
    use HasFactory;

      public function ogranisationtype()
    {
        return $this->belongsTo(Ogranisationtype::class);
    }


}
