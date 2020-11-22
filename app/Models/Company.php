<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function recruiters(){
        return $this->hasMany(Recruiter::class);
    }

    public function vacancies(){
        return $this->hasMany(Vacancy::class);
    }
}
