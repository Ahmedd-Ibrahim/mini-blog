<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class clinet extends Model
{
    //
    protected $table = 'clinet';

      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'name_en','name_ar','number',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
         'remember_token',
    ];
}
