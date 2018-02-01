<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NumberList extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ListId', 'NLNumber',
    ];

    public function userList()
    {
        return $this->belongsTo('App\UserListDetails','ListId');
    }
}


