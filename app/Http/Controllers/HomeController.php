<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function welcome()
    {
        $link = 'Documentation Custom';

        return view('welcome', compact('link'));
    }
}
