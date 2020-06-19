<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CaseEvolution extends Model
{
    
    protected $fillable = [ 
        'sinan_identification_form_completed',
        'sinan_identification_form_forwarded',
        'warning_conselho_tutelar',
    ];

    public function Violated(){
        return $this->belongToMany(Violated::class);
    }
}
