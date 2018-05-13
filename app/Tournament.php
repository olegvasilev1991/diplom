<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    protected $table = 'tournaments';

    protected $fillable = [
        'start', 'finish', 'points',
    ];
}
