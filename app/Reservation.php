<?php

/**
   * @name:        Reservation model
   * @author:      Zaid - Patrik - Henry
   * @description: Model of table reservation
   * @version:     1.0
   * @date         26/05/2020
   * @param        none
   * @return       none
   */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    //
    protected $table = 'reservation';

        /**
     * The attributes that are mass assignable.
     * @var array
     */
     protected $fillable = [
        'numbertab', 'description', 'userid','clubid', 'date'
    ];
}

