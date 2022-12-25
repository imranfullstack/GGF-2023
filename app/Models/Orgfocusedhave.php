<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orgfocusedhave extends Model
{
    use HasFactory;

      public function Focused()
    {
        return $this->belongsTo(Focused::class);
    }


}
