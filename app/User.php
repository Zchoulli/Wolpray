<?php

/**
   * @name:        User model
   * @author:      Zaid - Patrik - Henry
   * @description: Model of table user
   * @version:     1.0
   * @date         26/05/2020
   * @param        none
   * @return       none
   */


namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Notifications\ResetPassword;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password','phone','role','city','streetname','streetnumber',
        'postal_code','image_profile','name','surname','birthdate',
    ];

    /**
     * The attributes that should be hidden for arrays.
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPassword($token));
    }
}
