<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ViolationAgent extends Model
{
    protected $fillable = [
        'kinship_id','gender_id','age_range_id'
    ];


    public function Gender(){
        return $this->belongsTo(Gender::class);
    }

    public function Violated(){
        return $this->belongsTo(Violated::class);
    }

    public function AgeRangesViolationAgent(){
        return $this->belongsTo('App\AgeRangesViolationAgent','age_range_id');
    }

    public function Kinship(){
        return $this->belongsTo(Kinship::class);
    }
}
