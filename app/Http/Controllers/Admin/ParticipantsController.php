<?php

namespace App\Http\Controllers\Admin;

use App\Tournament;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Participant;
use Illuminate\Support\Facades\Storage;

class ParticipantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['participants'] = Participant::all();

        //dd($data['participants'][0]['sex']);
        return view('admin.participants.index',['page_title' => 'Учасники'])->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = new Participant();
        //dd($data);
        return view('admin.participants.create_edit',[
            'page_title' => 'Зареєструвати учасника',
            'participant' => $data
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $participant = new Participant();
        $id = 1;
        if(Participant::count()!=0){
            $id = $participant->get()->last()->id + 1;
        }

        $data = $request->all();
        Storage::put(
            'public/avatars/'.$id.'.img',
            file_get_contents($request->file('photo')->getRealPath())
        );
        $data['photo'] = Storage::url('public/avatars/'.$id.'.img');
        $data['turn_id'] = Tournament::get()->last()->id;
        $participant->create($data);

        return redirect('/admin/participants');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Participant::find($id);
        //dd($data);
        return view('admin.participants.create_edit',[
            'page_title' => 'Редагування учасника',
            'participant' => $data]);
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
        $participant = Participant::find($id);
        $data = $request->all();
        $file = $request->file('photo');

        Storage::put(
            'public/avatars/'.$id.'.img',
            file_get_contents($request->file('photo')->getRealPath())
        );
        $data['photo'] = Storage::url('public/avatars/'.$id.'.img');
        $participant->update($data);
        return redirect('/admin/participants');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
