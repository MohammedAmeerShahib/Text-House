<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EnterpriseAccount extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     *
     */

    public $table = 'EnterpriseAccount';

    protected $fillable = [
        'EnterpriseName', 'EnterpriseAddress','EnterpriseContactnumber','EnterpriseEmail',
    ];



    public function subUser()
    {
        return $this->hasMany('App\SubUser','EnterpriseId');
    }

    public function user()
    {
        return $this->hasMany('App\User','EnterpriseId');
    }


}

