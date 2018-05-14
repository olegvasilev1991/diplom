<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Tournament;


class IndexController extends Controller
{
    public function index() {
        $data = Tournament::all();

        $time_start = strtotime($data[0]->start)-strtotime(now());
        $time_finish = strtotime($data[0]->finish)-strtotime(now());
        if($time_finish < 0){
            $data['time'] = 0;
            return view('index', $data);
        }else if($time_start < 0){
            $data['time'] = $time_finish;
            $data['active'] = true;
        } else{
            $data['time'] = $time_start;
        }
        //dd($data);
      return view('admin.index',$data);
    }
}
