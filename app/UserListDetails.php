<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserListDetails extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'ListName', 'ListSize',
    ];

    public function numberList()
    {
        return $this->hasMany('App\NumberList','ListId');
    }

    public function user()
    {
        return $this->belongsTo('App\User','username');
    }
}
