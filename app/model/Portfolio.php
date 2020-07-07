<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Portfolio extends Model
{
    //
    //

    use Notifiable;
    protected $table = "portfolio";


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'name_en', 'photo', 'discription_en','link','name_ar','discription_ar',
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
