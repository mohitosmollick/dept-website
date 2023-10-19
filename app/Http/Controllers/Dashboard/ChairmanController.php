<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Chairman;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ChairmanController extends Controller
{
    function About(){
        $value = Chairman::all();
        return view('dashboard.addAbout',[
            'value' => $value,
        ]);
    }

    function addAbout(Request $request){

        $request->validate([
            'chairmen_name' => ['required', 'string'],
            'about' => ['required', 'string'],
            'bio' => ['required', 'string'],
            'image' => 'required|image|mimes:jpeg,jpg,png,gif,svg|max:5148',
        ]);

        $fileName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('/uploads/Chairman/'), $fileName);


        Chairman::insert([
            'chairmen_name' => $request->chairmen_name,
            'about' => $request->about,
            'bio' => $request->bio,
            'image' => $fileName,
            'created_at' => Carbon::now(),
        ]);

        return back()->with('success','Successful')->with('image',$fileName);

    }

    function editAbout($id){
        $about = Chairman::find($id);
        return view('dashboard.updateAbout',[
            'about' => $about
        ]);
    }

    function updateChairman(Request $request){

        Chairman::find($request->id)->update([
            'chairmen_name' => $request->chairmen_name,
            'about' => $request->about,
            'bio' => $request->bio,
            'created_at' => Carbon::now(),
        ]);

        return back()->with('success','Successful');
    }

    function updatePhoto(Request $request){
        $value = Chairman::where('id' , $request->id)->first();

        $request->validate([
            'image' => 'image|mimes:jpeg,jpg,png,gif,svg|max:5148',
        ]);

        $delete_from = public_path('/uploads/Chairman/'.$value->image);
        unlink($delete_from);

        $fileName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('/uploads/Chairman/'), $fileName);

        Chairman::find($request->id)->update([
            'image' => $fileName,
            'created_at' => Carbon::now(),
        ]);

        return back()->with('successI','Successful');
    }






}
