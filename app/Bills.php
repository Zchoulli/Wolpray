<?php

/**
   * @name:        Bills model
   * @author:      Zaid - Patrik - Henry
   * @description: Model of table bills
   * @version:     1.0
   * @date         26/05/2020
   * @param        none
   * @return       none
   */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bills extends Model
{

    protected $table = 'bills';
    /**
     * The attributes that are mass assignable.
     * @var array
     */
     protected $fillable = [
        'nameClub','clubid', 'manager', 'year','month','balance',
    ];

    
}
