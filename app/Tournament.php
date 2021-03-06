<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    protected $table = 'tournaments';

    protected $fillable = [
        'name','start', 'finish', 'points',
    ];
    public function participant(){
        return $this->hasMany('App\Participant','turn_id','id');
    }
}
