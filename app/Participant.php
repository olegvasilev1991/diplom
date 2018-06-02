<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{

    protected $fillable = [
        'id_card','turn_id', 'first_name', 'last_name', 'birth', 'phone', 'email', 'sex', 'photo'
    ];
    public function points(){
        return $this->hasMany('App\Points','card_id')->orderBy('kp','asc');
    }
}
