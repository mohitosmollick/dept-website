<?php

namespace App\Http\Controllers\Notice;

use App\Http\Controllers\Controller;
use App\Models\Notice;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NoticeController extends Controller
{
    function addNotice(){
        $all_notice = Notice::all();
        return view('Notice.AddNotice',[
            'all_notice' => $all_notice
        ]);
    }

    function showNotice(){
        $all_notice = Notice::all();
        return view('Notice.ShowNotice',[
            'all_notice' => $all_notice,
        ]);
    }

    function createNotice(Request $request){

        $request->validate([
            'images' => 'required|image|mimes:jpeg,jpg,png,gif,svg|max:5148',
        ]);

        $fileName = time() . '.' . $request->images->extension();
        $request->images->move(public_path('/uploads/Notice/'), $fileName);

        Notice::insert([
            'image' => $fileName,
            'user_id' => Auth::id(),
            'title' => $request->title,
            'created_at' => Carbon::now(),
        ]);
        return back()->with('success','Successful');
    }

    function editNotice($id){
        $notice = Notice::find($id);
        return view('Notice.UpdateNotice',[
            'notice' => $notice
        ]);
    }

    function updateNotice(Request $request){

        Notice::find($request->id)->update([
            'user_id' => Auth::id(),
            'title' => $request->title,
            'created_at' => Carbon::now(),
        ]);

        return back()->with('success','Successfully Updated');
    }


    function updateNoticeImg(Request $request){
        $value = Notice::where('id' , $request->id)->first();

        $request->validate([
            'image' => 'image|mimes:jpeg,jpg,png,gif,svg|max:5148',
        ]);


        $delete_from = public_path('/uploads/Notice/'.$value->image);
        unlink($delete_from);

        $fileName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('/uploads/Notice/'), $fileName);

        Notice::find($request->id)->update([
            'user_id' => Auth::id(),
            'image' => $fileName,
            'created_at' => Carbon::now(),
        ]);

        return back()->with('successImg','Successfully updated');
    }

    function deleteNotice($id){
        $value = Notice::find($id);
        $delete_from = public_path('/uploads/Notice/'.$value->image);
        unlink($delete_from);

        Notice::find($id)->delete();
        return back()->with('delete','Category Delete Successfully');

    }



}
