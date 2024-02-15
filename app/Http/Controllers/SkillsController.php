<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillsController extends Controller
{
      public function index(){
        $skills = array(
            "skill_one" => "Designing Websites",
            "skill_two" => "Coding",
            "skill_three" => "Lifting Weights"
        );
        return view('skills', $skills);
    }
}
