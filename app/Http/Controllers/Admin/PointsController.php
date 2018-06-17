<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Points;

class PointsController extends Controller
{

    public function storePoints(Request $request){

        dump($request->all());
       $points = new Points();
       $data = $request->all();
       $points->create($data);

        dd($request->all());
    }

}
