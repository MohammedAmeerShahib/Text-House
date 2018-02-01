<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TextMessage extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'MessageReceiver', 'SentMessage',
    ];

    public function user()
    {
        return $this->belongsTo('App\User','username');
    }
}


