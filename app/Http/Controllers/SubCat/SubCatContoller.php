<?php

namespace App\Http\Controllers\SubCat;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubCatContoller extends Controller
{
    function SubCatShow(){
        $trash_subcategory = SubCategory::onlyTrashed()->get();
        $sub_category = SubCategory::all();
        $category = Category::all();
        return view('SubCat.AddSubCategory',[
            'category' => $category,
            'sub_category' => $sub_category,
            'trash_subcategory' => $trash_subcategory,
        ]);
    }

    function addSubCategory(Request $request){
        $request->validate([
            'subcategory_name'=> ['required', 'string', 'max:100','unique:sub_categories']
        ]);

        if (
        SubCategory::insert([
            'user_id' => Auth::id(),
            'category_id' => $request->category_id,
            'subcategory_name' => $request->subcategory_name,
            'subcategory_slug' => strtolower(str_replace(' ','-', $request->subcategory_name)) ,
            'created_at' => Carbon::now(),
        ])
        ){
            return back()->with('success','Added Successfully');
        }else{
            return  back()->with('fail',' Failed to add Category');
        }
    }

    function softDeleteSubCat($id){
        SubCategory::find($id)->delete();
        return back()->with('delete','SubCategory Delete Successfully');

    }

    function deleteSubcategory($id){
        SubCategory::onlyTrashed()->find($id)->forceDelete();
        return back()->with('deletes','SubCategory Delete Successfully');
    }

    function restoreSubcategory($id){
        SubCategory::onlyTrashed()->find($id)->restore();
        return back()->with('restore','SubCategory restore Successfully');
    }

    function editSubCategory($id){
        $subcat = SubCategory::find($id);
        return view('SubCat.EditSubCategory',[
            'subcat' => $subcat,
        ]);
    }

    function updateSubCategory(Request $request){
        SubCategory::find($request->id )->update([
            'user_id' => Auth::id(),
            'subcategory_name' => $request->subcategory_name,
            'subcategory_slug' => strtolower(str_replace(' ','-', $request->subcategory_name)) ,
            'created_at' => Carbon::now(),
        ]);
        return redirect(route('SubCatShow'))->with('success', 'Category updated successfully');
    }




}
