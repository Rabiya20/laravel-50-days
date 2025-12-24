<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    // index method is the default method that is called when the controller is called
    public function index()
    {
        return "Test Controller is working";
    }

    public function show()
    {
        return "Test Controller is showing";
    }

    public function create()
    {
        return "Test Controller is creating";
    }

    public function destroy()
    {
        return "Test Controller is destroying";
    }
}
