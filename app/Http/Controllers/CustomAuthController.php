<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class CustomAuthController extends Controller
{
    public function login()
    {

        return view('backend.login');
    }
    public function dashboard()
    {
        return view('backend.index');
    }

    public function loginUser(Request $request)
    {
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:8|max:20'
        ]);
        $user = User::where('email', '=', $request->email)->first();
        if($user) {
            if(Hash::check($request->password,$user->password)){
                $request->session()->put('loginId', $user->user_id);
                return redirect('dashboard');
            }else{
                return back()->with('fail', 'Password did not match');

            }
        }else{
            return back()->with('fail', 'This email is not registered');
        }
    }

    public function register()
    {
        return view('backend.register');
    }

    public function registerUser(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:8|max:20'
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $res = $user->save();
        if($res){
            return back()->with('success', 'You have registered successfully');
        }else{
            return back()->with('fail', 'Registration Failed');

        }
    }

    public function logout()
    {

       if(session()->has('loginId')){
        session()->pull('loginId');
        return redirect('/login');
       }
    }
}
