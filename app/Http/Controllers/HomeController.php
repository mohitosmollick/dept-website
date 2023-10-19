<?php

namespace App\Http\Controllers;

use App\Models\Chairman;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $slider = Slider::all();
        $about = Chairman::where('id',1)->first();
        return view('pages.index',[
            'slider' => $slider,
            'about' => $about,
        ]);
    }
}
