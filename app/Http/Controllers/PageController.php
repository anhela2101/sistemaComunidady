<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {
        return view('home');
    }

    public function project() {
        return view('project');
    }

    public function social() {
        return view('services.social');
    }

    public function associations() {
        return view('services.associations');
    }

    public function municipal() {
        return view('services.municipal');
    }

    public function tourism() {
        return view('services.tourism');
    }

    public function travel() {
        return view('services.travel');
    }

    public function contact() {
        return view('contact');
    }
}