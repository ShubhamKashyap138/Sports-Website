<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\people;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    public function index()
    {
        session()->put('type', 'Sign Up');
        $url = url('/register');
        $data = compact('url');
        return view('frontend.register')->with($data);
    }

    public function update()
    {
        session()->put('type', 'Update');
        $url = url('/update');
        $data = compact('url');
        return view('frontend.register')->with($data);
    }

    public function getData(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:people,email|email:rfc,dns',
            'pass' => 'required',
            'rpass' => 'required|same:pass',
        ]);
        $len = Str::length($request->pass);
        if($len<8){
            $url = url('/register');
            $data = compact('url');
            return redirect('/register')->withErrors(['password_error'=>'Password should be minimum of eight characters'])->with($data);
        }
        //Insert Query
        $people = new people();
        $people->name = strtoupper($request['name']);
        $people->email = strtolower($request['email']);
        $people->password = $request['pass'];
        $people->save();
        $request->session()->put('status', '1');
        $request->session()->put('naam', $people->name);
        $request->session()->put('mail', $people->email);
        return redirect('/');
    }

    public function updateData(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'pass' => 'required',
            'rpass' => 'required',
        ]);
        $oldPasssword = DB::table('people')
            ->where('email', $request->email)
            ->value('password');
        $len = Str::length($request->rpass);
        if($len<8){
            $url = url('/update');
            $data = compact('url');
            return redirect()->back()->withErrors(['password_error'=>'Password should be minimum of eight characters'])->with($data);
        }
        if ($oldPasssword == $request->pass) {
            DB::table('people')
                ->where('email', $request->email)
                ->update(['name' => strtoupper($request['name']), 'password' => $request['rpass']]);
            $data = DB::table('people')
                ->where('email', $request->email)
                ->value('name');
            session()->put('naam', $data);
            return redirect('/');
        } else {
            return redirect()->back()->withErrors(['msg'=>'Old Password Did Not Match']);
        }
    }
}
