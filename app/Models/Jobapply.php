<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jobapply extends Model
{
    use HasFactory;


     public function job()
    {
        return $this->belongsTo(Recruit::class,'recruit_id');
    }



}
