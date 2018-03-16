<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Get the Seller record associated with the user.
     */
    public function seller()
    {
        return $this->hasOne('App\Seller');
    }

    /**
     * Get the Buyer record associated with the user.
     */
    public function buyer()
    {
        return $this->hasOne('App\Buyer');
    }

    /**
     * Get the Broker record associated with the user.
     */
    public function broker()
    {
        return $this->hasOne('App\Broker');
    }
}
