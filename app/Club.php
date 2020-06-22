<?php

/**
   * @name:        Club model
   * @author:      Zaid - Patrik - Henry
   * @description: Model of table club
   * @version:     1.0
   * @date         26/05/2020
   * @param        none
   * @return       none
   */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Club extends Model
{

    protected $table = 'clubs';
    /**
     * The attributes that are mass assignable.
     * @var array
     */
     protected $fillable = [
        'clubname', 'dress_code', 'ambience','phone','description','city','streetname','streetnumber',
        'postal_code','cover_url','userid','opening_time','closing_time','lat','lng',
    ];

    /**
     * The attributes that should be hidden for arrays.
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
