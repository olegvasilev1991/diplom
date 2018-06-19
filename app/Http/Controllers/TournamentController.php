<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tournament;
use App\Participant;
use App\Rules\Captcha;
use Illuminate\Support\Facades\Validator;

class TournamentController extends Controller
{

    public function Index()
    {
        $data = Tournament::get()->last();

        $time_start = strtotime($data->start)-strtotime(now());
        $time_finish = strtotime($data->finish)-strtotime(now());
        if($time_finish < 0){
            $data['time'] = 0;
            return view('index', $data);
        }else if($time_start < 0){
            $data['time'] = $time_finish;
            $data['active'] = true;
        } else{
            $data['time'] = $time_start;
        }
        //dd($data,now());
        return view('index', $data);
    }

    public function storeParticipant(Request $request){

        $data = $request->all();

        Validator::make($request->all(), [
            'g-recaptcha-response' => new Captcha(),
        ])->validate();
        $data['turn_id'] = Tournament::get()->last()->id;
        //dd($data);
        $participant = new Participant();
        $participant->create($data);
        return redirect()->back()->with('message', 'success');
    }
}
