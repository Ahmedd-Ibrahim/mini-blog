<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class posts_en extends Model
{
    //
    protected $table = 'posts_en';


    protected $fillable = [
        'id','title', 'content','photo',
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

