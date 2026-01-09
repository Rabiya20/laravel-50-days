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
}
