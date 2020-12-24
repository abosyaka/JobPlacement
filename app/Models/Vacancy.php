<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function specialization() {
        return $this->belongsTo(Specialization::class);
    }
}
