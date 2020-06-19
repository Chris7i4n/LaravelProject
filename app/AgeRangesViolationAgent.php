<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AgeRangesViolationAgent extends Model
{
    public $timestamps = false;

    protected $fillable = [
        "age_range"
    ];

    public function Violated(){
        return $this->hasMany(ViolationAgent::class);
    }
}
