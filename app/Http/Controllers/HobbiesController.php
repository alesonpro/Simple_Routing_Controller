<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HobbiesController extends Controller
{
    public function index(){
        $data = "Gym, Coding, Designing";
        return view("hobbies", ["hobby" => $data]);
    }
}
