<?php

/**
   * @name:        Invoice model
   * @author:      Zaid - Patrik - Henry
   * @description: Model of table invoice
   * @version:     1.0
   * @date         26/05/2020
   * @param        none
   * @return       none
   */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    //
    protected $table = 'invoices';

        /**
     * The attributes that are mass assignable.
     * @var array
     */
     protected $fillable = [
        'clubid','userid','productid','totalprice',
    ];
}
