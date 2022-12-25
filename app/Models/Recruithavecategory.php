<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recruithavecategory extends Model
{
    use HasFactory;


 
    // This One is for ORG for frontend 
    public function recruitcats()
    {
        return $this->belongsTo(Recruitcat::class,'recruitcat_id');
    }
    // This One is for ORG dashboard 
    public function jobcat()
    {
        return $this->HasMany(Recruitcat::class,'id','recruitcat_id');
    }



}
