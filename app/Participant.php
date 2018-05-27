<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{

    protected $fillable = [
        'id_card', 'first_name', 'last_name', 'birth', 'phone', 'email', 'sex', 'photo'
    ];
    public function participant(){
        return $this->hasOne('App\Points');
    }
}
