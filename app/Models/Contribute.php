<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contribute extends Model
{
    use HasFactory;

 

    public function keyword()
    {
        return $this->HasMany(Contributekeyword::class);
    }


}
