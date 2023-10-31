<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SubjectController extends Controller
{

    function subject(){
        $Subject = Subject::all();
        return view('Subject.addSubject', [
            'Subject'=> $Subject,
        ]);

    }

    function addSubject(Request $request){
        $request->validate([
            'subject_name' => ['required', 'string'],
            'about' => ['required', 'string'],
            'start' => ['required', 'string'],
            'image' => 'required|image|mimes:jpeg,jpg,png,gif,svg|max:5148',
        ]);

        $fileName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('/uploads/Subject/'), $fileName);


        Subject::insert([
            'subject_name' => $request->subject_name,
            'about' => $request->about,
            'start' => $request->start,
            'image' => $fileName,
            'created_at' => Carbon::now(),
        ]);

        return back()->with('success','Successful')->with('image',$fileName);
    }

    function editSubject($id){
        $subject = Subject::find($id);
        return view('Subject.editSubject',[
            'subject' => $subject,
        ]);
    }

    function updateSubject(Request $request){

        Subject::find($request->id)->update([
            'subject_name' => $request->subject_name,
            'about' => $request->about,
            'start' => $request->start,
            'created_at' => Carbon::now(),
        ]);

        return back()->with('success','Successfully Updated');
    }

    function SubjectImageUp(Request $request){
        $value = Subject::where('id' , $request->id)->first();

        $request->validate([
            'image' => 'image|mimes:jpeg,jpg,png,gif,svg|max:5148',
        ]);

        $delete_from = public_path('/uploads/Subject/'.$value->image);
        unlink($delete_from);

        $fileName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('/uploads/Subject/'), $fileName);

        Subject::find($request->id)->update([
            'image' => $fileName,
            'created_at' => Carbon::now(),
        ]);

        return back()->with('successImg','Successfully Updated');
    }




    function deleteSubject($id){
        $value = Subject::find($id);
        $delete_from = public_path('/uploads/Subject/'.$value->image);
        unlink($delete_from);

        Subject::find($id)->delete();
        return back()->with('delete','Category Delete Successfully');

    }



}
