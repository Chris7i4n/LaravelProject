<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Violated extends Model
{
    protected $fillable = [
        'name','gender_id','age','ethnicity_id','is_deficient',
        'locality_id','violation_agent_id','user_id',
    ];

    public function Gender(){
        return $this->belongsTo(Gender::class);
    }
    
    public function Ethnicity(){
        return $this->belongsTo(Ethnicity::class);
    }

    public function Locality(){
        return $this->belongsTo(Locality::class);
    }
    
    public function ViolationAgent(){
        return $this->hasOne(ViolationAgent::class);
    }

    public function User(){
        return $this->belongTo(User::Class);
    }
}
