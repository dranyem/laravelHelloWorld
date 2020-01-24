<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class helloworldController extends Controller
{
    function showHome() {
        return view('home');
    }
    function showAboutUs() {
        return view('aboutus');
    }
    function showContactUs() {
        return view('contactus');
    }
}
