<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ethnicity extends Model
{
    public $timestamps = false;
    
    protected $fillable = [
        'ethnicity'
    ];

    public function Violated(){
        return $this->hasMany(Violated::class);
    }
}
