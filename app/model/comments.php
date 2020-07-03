<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class comments extends Model
{
    //
    protected $table ='comments';

    protected $fillable = [
        'post_id', 'guest_name', 'comment',
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
