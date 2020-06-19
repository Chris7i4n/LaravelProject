<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Violated extends Model
{
    protected $fillable = [
        'name','gender_id','age','ethnicity_id','is_deficient',
        'locality_id','violation_agent_id','user_id','violation_date'
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
        return $this->belongsTo(User::Class);
    }

    public function AgeRange(){
        return $this->belongsTo(Violated::class);
    }

    public function CaseEvolution(){
        return $this->belongsTo(CaseEvolution::class);
    }

    public function ViolationData(){
        return $this->hasOne(ViolationData::class);
    }
}
