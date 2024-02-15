<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutMeController extends Controller
{
    public function index(){
        $about = array(
            "name" => "Aleson",
            "age" => 20,
            "email" => "alesonpro@gmail.com"
        );
        return view('about_me', $about);
    }
}
