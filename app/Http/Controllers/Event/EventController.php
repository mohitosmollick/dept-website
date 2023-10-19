<?php

namespace App\Http\Controllers\Event;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    function eventShow(){
        $all_event = Event::all();
        return view('Event.ShowEvent',[
            'all_event' => $all_event,
        ]);
    }

    function singleEvent($id){
        $single_event = Event::find($id);
        return view('Event.SingleEvent',[
            'single_event' => $single_event,
        ]);
    }


    function addEvent(){
        return view('Event.AddEvent');
    }


    function createEvent(Request $request){
        $post =  Event::insertGetId([
            'user_id' => Auth::id(),
            'title' =>$request->title,
            'slug' => strtolower(str_replace(' ','-', $request->title))  ,
            'desp_one' => $request->desp_one,
            'desp_two' => $request->desp_two,
            'event_date' => $request->event_date,
            'start' => $request->start,
            'end' => $request->end,
            'location' => $request->location,
            'created_at' => Carbon::now(),
        ]);

        $request->validate([
            'images' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10100',
        ]);

        $fileOne = time().'.'.$request->images->extension();
        $request->images->move(public_path('/dashboard/events/'), $fileOne);

        Event::find($post)->update([
            'images_one' => $fileOne,
        ]);

        return back()->with('success','Successful');
    }




}
