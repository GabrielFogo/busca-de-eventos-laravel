<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use App\Models\Events;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class EventController extends Controller
{
    public function index(): View
    {
       $events = Events::all();
       return view('welcome',['events' => $events]);
    }

    public function create(): View
    {
        return view('events/create');
    }

    public function store(Request $request)
    {
        $event = new Events;
        $event->title = $request->title;
        $event->city = $request->city;
        $event->private = $request->private;
        $event->description = $request->description;

        if ($request->hasFile('image') && $request->file('image')->isValid())
        {
            $requestImage = $request->image;
            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName().strtotime('now').'.'.$extension);

            $requestImage->move(public_path('img/events'),$imageName);

            $event->image = $imageName;
        }

        $event->save();
        return redirect('/')->with('msg', 'Evento criado com sucesso');
    }

    public function show($id) :View
    {
        $event = Events::findOrFail($id);

        return view('events/show',['event'=>$event]);
    }
}
