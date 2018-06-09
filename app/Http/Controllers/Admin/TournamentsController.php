<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tournament;
use App\Points;
use App\Participant;


class TournamentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['tournaments'] = Tournament::all();

        return view('admin.tournaments.index',['page_title' => 'Турніри'])->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'name' =>  'required',
                'start' => 'required',
                'finish' => 'required|numeric',
                'points' => 'required|numeric',
            ]
        );
        $test = $request->all();

        $test['finish'] = date('Y-m-d H:i:s',strtotime($request->start) + 50*60);

        $data = new Tournament();


        $data->create($test);

        return redirect('/admin/tournaments');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Tournament::find($id)->with('participant.points')->first();

        //dd($part->points($id)->get()/*[1]->participant*/,$data->points()->get());
       // dd($data->with('participant.points')->get());
       /* for($i=0; $i<$data['points']){
            if($po->participant[0]->points->where('kp',$i))
        }*/

        /*foreach ($data->participant as $po){

            dump($po->points->firstWhere('kp', 3));
        }
        dd( 'stop');*/
       // dd($data);
        return view('admin.tournaments.show-table',[
            'page_title' => 'Турнірна таблиця',
            'data' =>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        Tournament::destroy($id);

        return redirect()->back();
    }
}
