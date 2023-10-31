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
        $also_event = Event::where('id','!=',$id)->get();
        return view('Event.SingleEvent',[
            'single_event' => $single_event,
            'also_event' => $also_event,
        ]);
    }


    function addEvent(){
        $event = Event::all();
        return view('Event.AddEvent',[
            'event' => $event
        ]);
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

    function editEvent($id){
        $event = Event::find($id);
        return view('Event.EditEvent',[
            'event' => $event,
        ]);
    }

    function updateEvent(Request $request){

        Event::find($request->id)->update([
            'user_id' => Auth::id(),
            'title' =>$request->title,
            'slug' => strtolower(str_replace(' ','-', $request->title))  ,
            'desp_one' => $request->desp_one,
            'desp_two' => $request->desp_two,
            'location' => $request->location,
            'created_at' => Carbon::now(),
        ]);

        return back()->with('success','Successfully Updated');
    }

    function updateEventImg(Request $request){
        $value = Event::where('id' , $request->id)->first();


        $request->validate([
            'image' => 'image|mimes:jpeg,jpg,png,gif,svg|max:5148',
        ]);

        $delete_from = public_path('/dashboard/events/'.$value->images_one);
        unlink($delete_from);

        $fileOne = time().'.'.$request->images->extension();
        $request->images->move(public_path('/dashboard/events/'), $fileOne);

        Event::find($request->id)->update([
            'images_one' => $fileOne,
            'created_at' => Carbon::now(),
        ]);

        return back()->with('successImg','Successfully Updated');
    }

    function deleteEvent($id){
        $value = Event::find($id);
        $delete_from = public_path('/dashboard/events/'.$value->image);
        unlink($delete_from);

        Event::find($id)->delete();
        return back()->with('delete','Category Delete Successfully');
    }






}
