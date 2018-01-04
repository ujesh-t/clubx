<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class EventController extends Controller
{
    public function getAllEvents(){
        $events = Event::all();
        return view('event')->with('events',$events);
    }
}
