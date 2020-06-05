<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    public $timestamps = false;
    
    protected $fillable = [
        'gender',
    ];

    public function ViolationAgent(){
        
        return $this->hasMany(ViolationAgent::class);
    }

    public function Violated(){
        return $this->hasMany(Violated::class);
    }

    
}
