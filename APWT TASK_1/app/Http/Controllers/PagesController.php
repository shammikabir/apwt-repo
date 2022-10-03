<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){

        return view('pages.Contact');
    }

    public function Ourteams(){

        return view('pages.Ourteams');
    }

    public function home(){

        return view('pages.homepage');
    }

    public function about(){

        return view('pages.Aboutus');
    }
}

