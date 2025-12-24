<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
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
}
