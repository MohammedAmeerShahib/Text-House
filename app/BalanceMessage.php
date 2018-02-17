<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BalanceMessage extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $table = 'BalanceMessage';

    protected $fillable = [
        'userId', 'DialogBalance','MobitelBalance','AirtelBalance','EtisalatBalance',
    ];


    public function user()
    {
        return $this->belongsTo('App\User','username');
    }
}
