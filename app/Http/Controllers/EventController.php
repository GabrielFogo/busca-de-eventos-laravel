<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use App\Models\Events;
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
}
