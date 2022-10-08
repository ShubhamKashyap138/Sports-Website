<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\player;
use App\Models\extra_data;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PlayerRegisterController extends Controller
{
    public function player_register(){
        $url = url('/pRegister');
        session()->put('type','Player Registration');
        $data = compact('url');
        return view('frontend.player_register')->with($data);
    }

    public function player_update(){
        $url = url('/pUpdate');
        session()->put('type','Update Player');
        $data = compact('url');
        return view('frontend.player_register')->with($data);
    }

    public function saveData(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:player,email|email:rfc,dns',
            'runs' => 'required',
            'balls' => 'required',
            'fours' => 'required',
            'six' => 'required',
            'age' => 'required',
            'photo' => 'required|mimes:jpg,png,jpeg',
            'Fname' => 'required',
            'Mname' => 'required',
            'Address' => 'required',
        ]);
        if($request->state=="None"){
            return redirect()->back()->withErrors(['state_error'=>'State is required']);
        }
        if($request->gender=="None"){
            return redirect()->back()->withErrors(['gender_error'=>'Gender is required']);
        }
        $player = new player();
        $extra = new extra_data();
        $player->name = strtoupper($request['name']);
        $player->email = strtolower($request['email']);
        $player->runs = $request['runs'];
        $player->balls = $request['balls'];
        $player->sixes = $request['six'];
        $player->fours = $request['fours'];
        $player->age = $request['age'];
        $player->state = $request['state'];
        $player->gender = $request['gender'];
        $f = $request->file('photo');
        $extension = $f->getClientOriginalExtension();
        $filename = time(). "." .$extension;
        $f->move('frontend/images',$filename);
        $player->profile_pic = $filename;
        $player->save();
        $extra->email = $request['email'];
        $extra->Fname = $request['Fname'];
        $extra->Mname = $request['Mname'];
        $extra->Address = $request['Address'];
        $extra->save();
        $url = url('/pRegister');
        $msg = "Registered";
        $data = compact('url','msg');
        return redirect()->back()->with($data);
    }

    public function updateData(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|email:rfc,dns',
            'runs' => 'required',
            'balls' => 'required',
            'fours' => 'required',
            'six' => 'required',
            'age' => 'required',
            'photo' => 'required|mimes:jpg,png,jpeg',
        ]);

        $data = DB::table('player')->where('email',$request->email)->value('name');
        if(is_null($data)){
            return redirect()->back()->withErrors(['not_found','Player with this email not exist']);
        }
        else{
            $f = $request->file('photo');
            $extension = $f->getClientOriginalExtension();
            $filename = time(). "." .$extension;
            $f->move('frontend/images',$filename);
            DB::table('player')
            ->where('email', $request->email)
            ->update(['name' => strtoupper($request['name']), 'state'=>$request->state, 'gender'=>$request->gender,
            'runs'=>$request->runs,'balls'=>$request->balls,'sixes'=>$request->six,'fours'=>$request->fours,'Age'=>$request->age,'profile_pic'=>$filename]);
            $msg = "Updated";
            $data = compact('msg');
            return redirect()->back()->with($data);
        }
    }
}
