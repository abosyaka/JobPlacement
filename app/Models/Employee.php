<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Employee extends Authenticatable
{
    use Notifiable;

    protected $guard = 'employee';

    protected $fillable = [
        'name',
        'surname',
        'phone_num',
        'email',
        'password',
        'avatar',
        'specialization_id'
    ];

    public function specialization(){
        return $this->belongsTo(Specialization::class);
    }
}
