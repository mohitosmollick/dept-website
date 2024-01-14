<?php

namespace App\Http\Controllers;

use App\Models\Chairman;
use App\Models\Event;
use App\Models\Post;
use App\Models\Slider;
use App\Models\Subject;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $slider = Slider::all();
        $about = Chairman::where('id',1)->first();
        $event = Event::latest()->take(4)->get();
        $posts = Post::latest()->take(4)->get();
        $users = User::all()->count();
        $Subject = Subject::latest()->take(3)->get();
        return view('pages.index',[
            'slider' => $slider,
            'about' => $about,
            'event' => $event,
            'users' => $users,
            'Subject' =>$Subject,
            'posts' => $posts,
        ]);
    }
}
