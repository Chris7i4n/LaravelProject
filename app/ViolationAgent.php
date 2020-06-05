<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ViolationAgent extends Model
{
    protected $fillable = [
        'kinship','gender_id','age'
    ];


    public function Gender(){
        return $this->belongsTo(Gender::class);
    }

    public function Violated(){
        return $this->belongsTo(Violated::class);
    }
}
