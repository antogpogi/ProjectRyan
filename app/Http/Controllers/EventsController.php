<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use Session;
class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::orderBy('id','asc')->paginate(10);
        return view('events.index')->withEvents($events);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,array(
            'titleEvents' => 'required',
            'timeAmEvents' => 'required',
            'timePmEvents' => 'required',
            'slug' => 'required'
            ));

        $event = new Event;
        $event->titleEvents = $request->titleEvents;
        $event->timeAmEvents = $request->timeAmEvents;
        $event->timePmEvents = $request->timePmEvents;
        $event->dateEvents = $request->dateEvents;
        $event->slug = $request->slug;
        $event->save();
        Session::flash('success','The Event was successfully save!');
        return redirect()->route('events.show',$event->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Event::find($id);
        return view('events.show')->withEvent($event);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Event::find($id);
        return view('events.edit')->withEvent($event);
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
        $this->validate($request, array(
        'titleEvents' => 'required',
        'timeAmEvents' => 'required',
        'timePmEvents' => 'required',
        'dateEvents' => 'required'
            ));
        $event= Event::find($id);
        $event->titleEvents = $request->input('titleEvents');
        $event->timeAmEvents = $request->input('timeAmEvents');
        $event->timePmEvents = $request->input('timePmEvents');
        $event->dateEvents = $request->input('dateEvents');
        $event->save();
        Session::flash('success','This Event was successfully saved.');
        return redirect()->route('events.show',$event->id);
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
        Session::flash('success','The Event was successfully deleted');
        return redirect()->route('events.index',$event->id);
    }
}
