<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilesCntroller extends Controller
{
    public function index()
    {
        return view('home');
    }
}
