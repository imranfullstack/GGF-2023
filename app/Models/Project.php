<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;




    public function organisation()
    {
        return $this->belongsTo(Organisation::class);
    }


    public function projectapply()
    {
        return $this->hasMany(Projectapply::class,'project_id');
    }

    
    public function projecthavecategory()
    {
        return $this->hasMany(Projecthavecategory::class,'project_id');
    }
 

}
