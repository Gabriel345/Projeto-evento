<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('welcome', compact('events'));
    }
    public function create()
    {
        return view('events.create');
    }
    public function store(Request $request)
    {
        $event = new Event;
        $event->title = $request->title;
        $event->date= $request->date;
        $event->city = $request->city;
        $event->private = $request->private;
        $event->description = $request->description;

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $RequestImage = $request->image;
            $extension = $RequestImage->extension();
            $imagename = md5($RequestImage->getClientOriginalName() . strtotime("now") . ".");
            $imagename = time() . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('img/events'), $imagename);
            $event->image = $imagename;

        }

        $event->save();
        return redirect('/')->with('msg', 'Evento criado com sucesso!');
    }
    public function show($id)
    {
        $event = Event::findOrFail($id);
        return view('events.show', compact('event'));

    }
}
