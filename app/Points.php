<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Points extends Model
{
    protected $fillable = [
        'card_id', 'turn_id', 'kp'
    ];

/*    public function participant(){
        return $this->hasOne('App\Participant','id','card_id');
    }*/

}
