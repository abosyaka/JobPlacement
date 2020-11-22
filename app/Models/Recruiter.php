<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class Recruiter extends Authenticatable
{
    use Notifiable;

    protected $guard = 'employee';

    protected $fillable = [
        'name',
        'surname',
        'phone_num',
        'email',
        'password',
        'company_id'
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

}
