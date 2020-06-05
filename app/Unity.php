<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unity extends Model
{
    protected $fillable = [
        'uinity_name', 'addres', 'phone_number',
    ];


    public function User(){
        return $this->hasMany(User::class);
    }
    
}
