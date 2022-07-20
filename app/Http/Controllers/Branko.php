<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Branko extends Controller
{
    public function show() {
        return view('index');
    }
}
