<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //relationships

    public function goon(){
        return $this->hasMany( Goon::class );
    }
}
