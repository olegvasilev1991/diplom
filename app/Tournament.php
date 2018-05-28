<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    protected $table = 'tournaments';

    protected $fillable = [
        'name','start', 'finish', 'points',
    ];
    public function points(){
        return $this->belongsTo('App\Points','id','turn_id');
    }
}
