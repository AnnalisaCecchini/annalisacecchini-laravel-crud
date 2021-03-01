<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPageController extends Controller
{
    // HOME PAGE
    public function home() {

        return view('home');
    }

    // ABOUT PAGE
    public function about() {

        return view('about');
    }

    // PROJECTS PAGE
    public function projects() {

        return view('projects');
    }

    // DOWNLOAD PAGE
    public function download() {

        return view('download');
    }
}
