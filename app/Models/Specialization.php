<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Specialization extends Model
{
    //
    public function employees(){
        return $this->hasMany(Employee::class);
    }
}
