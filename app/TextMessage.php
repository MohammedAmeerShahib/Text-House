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
    protected $table = 'TextMessage';
    protected $primaryKey = 'MessageId';

    protected $fillable = [
        'userId', 'MessageReceiver', 'SentMessage','Status',
    ];

    public function user()
    {
        return $this->belongsTo('App\User','id');
    }
}


