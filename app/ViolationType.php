<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ViolationType extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'violation_type'
    ];

    public function ViolationData(){
        return $this->hasMany(ViolationData::class);
    }
    
}
