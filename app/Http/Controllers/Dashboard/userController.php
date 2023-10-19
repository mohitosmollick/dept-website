<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;



class userController extends Controller
{
    public function userShow(){
        $users = User::where('id', '!=', Auth::id())->paginate(2);
        $totalUser = User::count();
        return view('dashboard.userList',[
           'users' => $users,
           'totalUser' => $totalUser
        ]);
    }


    public function userDelete($user_id){
        User::find($user_id)->delete();
        return back()->with('success','Delete successfully');
    }

    public function profile(){
//        $profile = User::find(Auth::id());
        return view('pages.Profile',[

        ]);
    }


    public function editProfile(){
        return view('pages.editProfile');
    }

    public function nameUpdate(Request $request){
        User::find(Auth::id())->update([
            'name' => $request->name,
            'updated_at' => Carbon::now(),
        ]);
        return back()->with('successN', 'Name Updated Successfully');
    }

    public function jobUpdate(Request $request){
        User::find(Auth::id())->update([
            'jobname' => $request->jobname,
            'updated_at' => Carbon::now(),
        ]);
        return back()->with('successJ', 'Name Updated Successfully');
    }

    public function passwordUpdate(Request $request){
        $request->validate([
            'old_password' => 'required',
            'password' => [
                'confirmed',
                'required',
                'min:8'
            ],
            'password_confirmation' => 'required',
        ]);

        if (Hash::check($request->old_password,Auth::user()->password)){
            if (Hash::check($request->password,Auth::user()->password)){
                return back()->with('taken_pass','This Password already taken');
            }else{
                User::find(Auth::id())->update([
                    'password' => Hash::make($request->password),
                    'updated_at' => Carbon::now(),
                ]);

                return back()->with('success_pass','Password Change successfully');
            }

        }else{
            return back()->with('wrong_pass','Please input Correct Password');
        }

    }

    public function updateProfileImage(Request $request){

        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5048',
        ]);

        $fileName = Auth::id().'_'.time().'.'. $request->image->extension();

        if (Auth::user()->image == 'default.png'){
            $request->image->move(public_path('/uploads/users/'), $fileName);
//            Image::make($upload_photo)->resize(300, 200)->save(public_path('/uploads/user/'), $fileName);
            User::find(Auth::id())->update([
                'image' => $fileName,
            ]);
            return back();
        }else{

            $delete_from = public_path('/uploads/users/'.Auth::User()->image);
            unlink($delete_from);

            $request->image->move(public_path('/uploads/users/'), $fileName);
            User::find(Auth::id())->update([
                'image' => $fileName,
            ]);
            return back();
        }



    }







}
