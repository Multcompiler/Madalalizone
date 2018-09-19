<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'users';


    protected $fillable = [
         'email','role','password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function isDalali() {
        return $this->role === 'loan';
    }

    public function isLoan() {
        return $this->role === 'loan';
    }
}
