<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    //
    protected $table = "contact";


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'address', 'email', 'phone',
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
