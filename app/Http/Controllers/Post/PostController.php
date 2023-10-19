<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\SubCategory;
use App\Models\Tag;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    function postCreate(){
        $category = Category::all();
        return view('Posts.AddPost',[
            'category' => $category,
        ]);
    }

    function AddPost(Request $request){



//        $request->validate([
//            'title' => ['required', 'string'],
//            'images_one' => 'image|mimes:jpeg,jpg,png,gif,svg|max:5148',
//            'desp_one' => ['required', 'string'],
//            'desp_two' => ['required', 'string'],
//            'images_two' => 'image|mimes:jpeg,jpg,png,gif,svg|max:5148',
//            'desp_three' => 'string',
//            'tag' => 'required',
//        ]);


        $post =  Post::insertGetId([
            'user_id' => Auth::id(),
            'category_id' => $request->category_id,
            'subcategory_id' => $request->subcategory_id,
            'title' =>$request->title,
            'slug' => strtolower(str_replace(' ','-', $request->title))  ,
            'desp_one' => $request->desp_one,
            'desp_two' => $request->desp_two,
            'desp_three' => $request->desp_three,
            'created_at' => Carbon::now(),
        ]);

        $request->validate([
            'product_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10100',
        ]);

        $fileOne = time() . '.' . $request->images_one->extension();
        $request->images_one->move(public_path('/uploads/Posts/'), $fileOne);

        Post::find($post)->update([
            'images_one' => $fileOne,
        ]);

        $fileTwo = time() .'2'.'.' . $request->images_two->extension();
        $request->images_two->move(public_path('/uploads/Posts/'), $fileTwo);

        Post::find($post)->update([
            'images_two' => $fileTwo,
        ]);

//        $loop = 1;
//        $thumbnails = $request->tag;
//        foreach ($thumbnails as $thumb){
//
//            Tag::insert([
//                'post_id'=> $post,
//                'tag' => $thumb,
//                'created_at' => Carbon::now(),
//            ]);
//            $loop++;
//        }

        return back()->with('success','Successful');


    }

    function addSubCategory(Request $request){
        $subcategories =  SubCategory::where('category_id', $request->category_id)->get();
        $str = ' <option value="">Select SubCategory</option>';
        foreach ($subcategories as $subcat){
            $str .= ' <option value="'.$subcat->id .'">'.$subcat->subcategory_name.'</option>';
        }
        echo $str;
    }



    function postPage(){
        $posts = Post::all();
        $category = Category::all();
        $new_arrival = Post::latest()->take(4)->get();
        return view('Posts.PostPage',[
            'posts' => $posts,
            'category' => $category,
            'new_arrival' => $new_arrival,
        ]);
    }

    function singlePost($id){
        $single_post = Post::find($id);
        return view('Posts.SinglePost',[
            'single_post' => $single_post
        ]);
    }

    function categoryPost($id){
        $cat_post = Post::where('category_id',$id)->take(6)->get();
        $category = Category::all();
        $new_arrival = Post::latest()->take(4)->get();

        return view('Posts.CategoryPost',[
            'cat_post' => $cat_post,
            'category' =>$category,
            'new_arrival' => $new_arrival,
        ]);
    }






}
