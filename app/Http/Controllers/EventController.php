<?php

namespace App\Http\Controllers;

use App\Http\Requests\EventRequest;
use App\Models\Event;
use App\Models\Contact;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $events = Event::where('status', '1')->get(); //Consulta de post activos

        $events = Event::join('contacts', "events.contact_id" , "=", "contacts.id")
                    ->select("events.id", "events.name", "events.descrip", "events.descrip", "events.status", "contacts.frist_name", "contacts.last_name")
                    ->where('status', '1')
                    ->orderBy('id', 'desc')
                    ->get();

        // $events

        return view('eventos.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $UserId = Auth::id();
        $contacts = Contact::where('user_id', $UserId)->get();

        return view('eventos.create', compact('contacts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EventRequest $request)
    {
        $UserId = Auth::id();

        $event = Event::create([
            'user_id' => $UserId
        ] + $request->all());

        $event->save();

        return back()->with('status', 'Contacto creado con éxito');
        // dd($request);
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
    public function update(EventRequest $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::findOrFail($id);

        $event->status = 0;

        $event->save();

        return back()->with('status', 'Confirmación realizada con exito');
    }
}
