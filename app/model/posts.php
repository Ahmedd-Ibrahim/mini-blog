<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class posts extends Model
{
    //
    protected $table = "posts";

    protected $fillable = [
        'title', 'content', 
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
