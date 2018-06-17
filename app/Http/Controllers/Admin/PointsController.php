<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Points;
use App\Participant;

class PointsController extends Controller
{

    public function storePoints(Request $request){

        $data = $request->all();
        $id = optional(Participant::where('id_card',$data['card_id'])->first())->id;
        if($id == null){
            return 'error';
        }
        foreach ($data['kp'] as $kp){
            $points = new Points();
            $points->create(['card_id' => $id,'kp'=>$kp]);
        }
       return 'success';
    }

}
