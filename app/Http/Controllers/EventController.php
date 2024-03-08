<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\View;
use App\Models\Events;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class EventController extends Controller
{
    public function index(): View
    {
        $search = request('search');
        if ($search) {
            $events = Events::where([['title', 'like', "%$search%"]])->get();
        } else {
            $events = Events::all();
        }
        return view('welcome', ['events' => $events, 'search' => $search]);
    }

    public function create(): View
    {
        return view('events/create');
    }

    public function store(Request $request)
    {
        $event = new Events;
        $event->title = $request->title;
        $event->date = $request->date;
        $event->city = $request->city;
        $event->private = $request->private;
        $event->description = $request->description;
        $event->items = $request->items;

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $requestImage = $request->image;
            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime('now') . '.' . $extension);

            $requestImage->move(public_path('img/events'), $imageName);

            $event->image = $imageName;
        }

        $user = auth()->user();
        $event->user_id = $user->id;
        $event->save();
        return redirect('/')->with('msg', 'Evento criado com sucesso');
    }

    public function show($id): View
    {
        $event = Events::findOrFail($id);
        $eventOwner = User::where('id', $event->user_id)->first()->toArray();
        return view('events/show', ['event' => $event, 'eventOwner' => $eventOwner]);
    }

    public function dashboard() : View
    {
        $authUser = auth()->user();
        $eventsUser = $authUser->events;
        return view('events/dashboard',['eventsUser'=>$eventsUser]);
    }
}
