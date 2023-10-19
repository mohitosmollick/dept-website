<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{

    public function category(){
        $trash_category = Category::onlyTrashed()->get();
        $all_category = Category::all();
        return view('dashboard.addCategory',[
            'all_category' => $all_category,
            'trash_category' => $trash_category
        ]);
    }

    public function AddCategory(Request $request){
        $request->validate([
            'category_name'=> ['required', 'string', 'max:100','unique:categories']
        ]);

        if (
            Category::insert([
                'user_id' => Auth::id(),
                'category_name' => $request->category_name,
                'category_slug' => strtolower(str_replace(' ','-', $request->category_name)) ,
                'created_at' => Carbon::now(),
            ])
        ){
            return back()->with('success','Added Successfully');
        }else{
            return  back()->with('fail',' Failed to add Category');
        }


    }

    public function softDelete($cat_id){
        Category::find($cat_id)->delete();
        return back()->with('delete','Category Delete Successfully');
    }

    public function editCategory($cat_id){
        $Categories = Category::find($cat_id);
        return view('dashboard.editCategory',[
            'Categories' => $Categories
        ]);
    }

    public function updateCategory(Request $request){
        Category::find($request->id )->update([
            'user_id' => Auth::id(),
            'category_name' => $request->category_name,
            'category_slug' => strtolower(str_replace(' ','-', $request->category_name)) ,
            'created_at' => Carbon::now(),
        ]);
        return redirect(route('category.show'))->with('success', 'Category updated successfully');
    }

    public function restoreCategory($cat_id){
        Category::onlyTrashed()->find($cat_id)->restore();
        return back();
    }

    function deleteCategory($cat_id){
        Category::onlyTrashed()->find($cat_id)->forceDelete();
        return back();
    }



}
