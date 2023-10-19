<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SliderController extends Controller
{

    function sliderShow(){
        $slider = Slider::all();
        return view('dashboard.addSlider',[
            'slider' =>$slider,
        ]);
    }

    function AddSlider(Request $request)
    {

        $request->validate([
            'image' => 'required|image|mimes:jpeg,jpg,png,gif,svg|max:5148',
        ]);

        $fileName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('/uploads/slider/'), $fileName);

            Slider::insert([
                'slides' => $fileName,
                'user_id' => Auth::id(),
                'created_at' => Carbon::now(),
            ]);
            return back()->with('success','Successful')->with('image',$fileName);


    }

    function softDelete($id){
        $slider = Slider::where('id', $id)->first();

        $delete_from = public_path('/uploads/slider/'.$slider->slides);
        unlink($delete_from);

        Slider::find($id)->delete();
        return back();
    }









}
