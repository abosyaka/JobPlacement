<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Employee extends Authenticatable
{
    use Notifiable;

    protected $guard = 'recruiter';

    protected $fillable = [
        'name',
        'surname',
        'phone_num',
        'email',
        'password',
        'avatar',
        'specialization_id'
    ];

    public function specialization()
    {
        return $this->belongsTo(Specialization::class);
    }

    public function cv(){
        return $this->hasOne(CV::class);
    }
}
