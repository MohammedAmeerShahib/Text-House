<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'EnterpriseId','username', 'email', 'password','User_type',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function balanceMessage()
    {
        return $this->hasMany('App\BalanceMessage','userId');
    }

    public function userList()
    {
        return $this->hasMany('App\UserListDetails','userId');
    }

    public function textMessage()
    {
        return $this->hasMany('App\TextMessage','userId');
    }

    public function enterpriseAccount()
    {
        return $this->belongsTo('App\EnterpriseAccount','EnterpriseId');
    }
}
