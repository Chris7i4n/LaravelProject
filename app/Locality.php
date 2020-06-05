<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Locality extends Model
{
    protected $fillable = [
        'locality_name'
    ];

    public function Violated(){
        return $this->hasMany(Violated::class);
    }
}
