<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SISAccount extends Model

{
    protected $guarded = [];


    public function Evant(){

        return $this->hasMany(Evants::class);
    }


    
}
