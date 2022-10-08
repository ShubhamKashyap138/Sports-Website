<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function index(){
        return view('frontend.login');
    }

    public function check(Request $request){
        $request->validate([
            'email' => 'required',
            'pass' => 'required',
        ]);
        $data = DB::table('people')->where('email',$request->email)->value('name');
        $oldPassword = DB::table('people')->where('email',$request->email)->value('password');

        if(is_null($data)){
            return redirect()->back()->withErrors(['error_reason'=>"Email not found"]);
        }
        else if(is_null($oldPassword) OR $oldPassword!=$request->pass){
            $request->session()->put('mail',$request->email);
            return redirect('/login')->withErrors(['error_pass'=>"Wrong Password"]);
        }
        else{
            $request->session()->put('status','1');
            $request->session()->put('naam',$data);
            $request->session()->put('mail',$request->email);
            return redirect('/');
        }
    }
}
