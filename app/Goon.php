<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Goon extends Model
{
    //
    protected $fillable = ['words', 'image'];

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
