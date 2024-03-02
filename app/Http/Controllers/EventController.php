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

        $event->save();
        return redirect('/');
    }
}
