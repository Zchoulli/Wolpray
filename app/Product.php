<?php

/**
   * @name:        Product model
   * @author:      Zaid - Patrik - Henry
   * @description: Model of table product
   * @version:     1.0
   * @date         26/05/2020
   * @param        none
   * @return       none
   */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

        /**
     * The attributes that are mass assignable.
     * @var array
     */
     protected $fillable = [
        'productname', 'description', 'image','price','category','clubid','status',
    ];
}
