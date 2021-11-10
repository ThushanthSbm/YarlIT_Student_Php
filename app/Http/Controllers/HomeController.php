<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function myInfo(){
        return 'Welcome first controller';
    }

    public function myProfile(){
        return view('profile');
    }
    public function myThushanth(){
        return view('thushanth');
    }
    public function myAbout(){
        return view('about');
    }
    public function myCondact(){
        return view('condact');
    }
    public function myFinal(){
        return view('final');
    }
}
