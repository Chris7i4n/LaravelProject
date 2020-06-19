<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ViolationData extends Model
{
    protected $fillable= [
        'primary_violence','secundary_violence','other_violence','violated_id'
    ];

    public function Violated(){
        return $this->belongsTo(Violated::class);
    }

    public function Primary(){
        return $this->belongsTo('App\ViolationType','primary_violence');
    }

    public function Secundary(){
        return $this->belongsto('App\ViolationType','secundary_violence');
    }
}
