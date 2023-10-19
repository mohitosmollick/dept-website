<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Batch;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BatchController extends Controller
{
    function batchesShow(){
        $all_category = Batch::all();
        $trash_category = Batch::onlyTrashed()->get();
        return view('dashboard.addBatch',[
            'all_category' => $all_category,
            'trash_category' => $trash_category,
        ]);
    }

    function AddBatch(Request $request){
        $request->validate([
            'batch_name'=> ['required', 'string', 'max:50','unique:batches']
        ]);

        if (
        Batch::insert([
            'user_id' => Auth::id(),
            'batch_name' => $request->batch_name,
            'batch_slug' => strtolower(str_replace(' ','-', $request->batch_name)) ,
            'created_at' => Carbon::now(),
        ])
        ){
            return back()->with('success','Added Successfully');
        }else{
            return  back()->with('fail',' Failed to add Category');
        }
    }

    public function softDelete($cat_id){
        Batch::find($cat_id)->delete();
        return back()->with('delete','Batch Delete Successfully');
    }

    public function restoreBatch($cat_id){
        Batch::onlyTrashed()->find($cat_id)->restore();
        return back();
    }

    function deleteBatch($cat_id){
        Batch::onlyTrashed()->find($cat_id)->forceDelete();
        return back();
    }

    public function editBatch($cat_id){
        $Batch = Batch::find($cat_id);
        return view('dashboard.editBatch',[
            'Batch' => $Batch,
        ]);
    }

    public function updateBatch(Request $request){
        Batch::find($request->id )->update([
            'user_id' => Auth::id(),
            'batch_name' => $request->batch_name,
            'batch_slug' => strtolower(str_replace(' ','-', $request->batch_name)) ,
            'created_at' => Carbon::now(),
        ]);
        return redirect(route('batchesShow'))->with('success', 'Category updated successfully');
    }

    function SearchBatch(){
        $all_students = User::all();
        return view('pages.BatchSearch',[
            'all_students' => $all_students,
        ]);
    }



}
