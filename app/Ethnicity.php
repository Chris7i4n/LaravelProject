<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ethnicity extends Model
{
    protected $fillable = [
        'ethnicity'
    ];

    public function Violated(){
        return $this->hasMany(Violated::class);
    }
}
