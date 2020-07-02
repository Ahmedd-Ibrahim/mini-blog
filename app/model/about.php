<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class about extends Model
{
    //
    protected $table = "about";


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'name', 'photo', 'discription',
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
