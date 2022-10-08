<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class logoutController extends Controller
{
    //
    public function index(){
        session()->flush();
        return redirect('/');
    }
}
