<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // day 03
    public function index() {
        return view('user.index');   
    }

    public function print_user_name(Request $request){
        $request->validate([
            'name' => 'required|max:6|min:3',
        ]);
        $name = $request->name ?? "Guest";
        return "<h1>Hello " . $name . "</h1>";
    }

    // day 04
    public function profile($name = "Rabia") {
        $skills = ["HTML", "CSS", "JavaScript", "PHP", "Laravel"];
        $hobbies = ["Reading", "Writing", "Coding", "Travelling", "Cooking"];
        return view('profile_2', compact('name', 'skills', 'hobbies'));
    }
}
