<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubUser extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'EnterpriseId', 'SubUserName',
    ];


    public function enterpriseAccount()
    {
        return $this->belongsTo('App\EnterpriseAccount','EnterpriseId');
    }
}

