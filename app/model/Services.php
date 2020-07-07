<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Services extends Model
{
    //
    use Notifiable;
    protected $table = "services";


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'name_en', 'name_ar','photo', 'discription_en','discription_ar',
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
