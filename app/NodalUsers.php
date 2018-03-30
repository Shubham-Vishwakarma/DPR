<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class NodalUsers extends Authenticatable
{
    use Notifiable;

    protected $guard = 'nodal_user';

    protected $fillable = [
          'username',
          'email',
          'phase_no',
          'completed',
          'pending'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
