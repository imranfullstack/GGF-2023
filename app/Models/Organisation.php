<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organisation extends Model
{
    use HasFactory;


    public function images()
    {
        return $this->hasMany(Orgimage::class);
    }


    public function projects()
    {
        return $this->hasMany(Project::class);
    }
    
    public function event()
    {
        return $this->hasMany(Event::class);
    }

    public function recruits()
    {
        return $this->hasMany(Recruit::class);
    }
    public function events()
    {
        return $this->hasMany(Event::class);
    }
    public function lookingfor()
    {
        return $this->hasMany(Lookingfor::class);
    }

}
