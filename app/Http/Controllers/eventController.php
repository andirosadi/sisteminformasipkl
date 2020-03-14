<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Event;
use Auth;

class eventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $event = new Event();
        $event->user_id = Auth::user()->id;
        $event->role_id = Auth::user()->role_id;
        $event->divisi_id = Auth::user()->divisi_id;
        $event->priority = $request->priority;
        $event->tanggal = $request->tanggal;
        $event->lokasi = $request->lokasi;
        $event->agenda = $request->agenda;
        $event->save();
        return redirect()->back()->with('message', 'Event berhasil ditambah');
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $event = Event::findOrFail($request->event_id);
        $this->validate(request(),[
            'lokasi'=>'required',
            'tanggal'=>'required',
            'agenda'=>'required',
            'priority'=>'required',
        ]);
        $event->lokasi = $request->lokasi;
        $event->tanggal = $request->tanggal;
        $event->agenda = $request->agenda;
        $event->priority = $request->priority;
        $event->update();
        return back()->with('message', 'Event berhasil ditambah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::find($id);
        $event->delete();
        return back()->with('message', 'Event telah terlaksana');
    }
}
