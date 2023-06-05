<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{

    public function index()
    {
        $now = now()->format('Y-m-d');


        $events = Event::where('start_date', '<=', $now)
            ->where('end_date', '>=', $now)
            ->where('type', 'event')->get();

        $workshops = Event::where('start_date', '<=', $now)
            ->where('end_date', '>=', $now)->where('type', 'workshop')->get();

        return view('events.index', compact('events', 'workshops'));
    }

    public function signup(Event $event)
    {

        $validatedData = request()->validate([
            'name' => 'required|min:5|max:40',
            'phone' => 'required|min:10|max:10',
            'title' => 'required'
        ]);

        $now = now()->format('Y-m-d');
        $guestsCount = $event->guests->count();
        $phoneExist = $event->guests()->where('phone', request('phone'))->count();

        if (
            $guestsCount < $event->max_guests
            && $phoneExist === 0
            && $event->start_date <= $now
            && $event->end_date >= $now
        ) {
            $event->guests()->create(request()->all());
            return back()->with('success','تم تسجيلك!');

        } else {
            return back()->withErrors(['msg' =>
                "الرجاء التحقق من أنك لم تقم بالتسجيل مسبقا وان هذا الحدث متاح التسجيل به"]);

        }





    }







    public function show(Event $event)
    {


        $now = now()->format('Y-m-d');
        if ($event->start_date <= $now
            && $event->end_date >= $now) {
            return view('events.show', compact('event'));
        } else {
            return redirect()->route('welcome');
        }
    }


    public function edit(Event $event)
    {


    }




    public function update(Request $request, Event $event)
    {
        //
    }


    public function events(Event $events)
    {

        $now = now()->format('Y-m-d ');

        $events = Event::where('start_date', '<=', $now)
            ->where('end_date', '>=', $now)->where('type', 'event')->get();

        return view('events.events', compact('events'));


    }
}
