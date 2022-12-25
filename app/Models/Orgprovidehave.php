<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orgprovidehave extends Model
{
    use HasFactory;


    public function provide()
    {
        return $this->belongsTo(Provide::class);
    }
}
