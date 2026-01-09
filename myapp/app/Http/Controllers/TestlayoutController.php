<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestlayoutController extends Controller
{
    public function website_home() {
        return view('website-layout.pages.home');
    }

    public function website_about() {
        $skills = ["HTML", "CSS", "JavaScript", "PHP", "Laravel"];
        $hobbies = ["Reading", "Writing", "Coding", "Travelling", "Cooking"];
        return view('website-layout.pages.about', compact('skills', 'hobbies'));
    }

    public function website_contact() {
        return view('website-layout.pages.contact');
    }

    public function contact_submit(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required|min:10'
        ]);
        
        $name = $request->name;
        $email = $request->email;
        $message = $request->message;
        // return redirect('/website_contact')->with('success', 'Message sent successfully!');
        // return view('website-layout.pages.contact_submit', compact('name', 'email', 'message'));
        return redirect('/website_contact')->with([
            'success' => 'Message sent successfully!',
            'name' => $name,
            'email' => $email,
            'message' => $message
        ]);
        
    }
}
