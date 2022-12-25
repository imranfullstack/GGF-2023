<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projecthavecategory extends Model
{
    use HasFactory;


     public function projectcat()
    {
        return $this->HasMany(Projectcat::class,'id','productcat_id');
    }


}
