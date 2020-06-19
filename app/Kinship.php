<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kinship extends Model
{
    public $timestamps = false;
    
    protected $fillable = [
        "kingship_name"
    ];

    public function ViolationAgent(){
        return $this->hasMany(ViolationAgent::class);
    }
}
