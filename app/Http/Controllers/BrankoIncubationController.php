<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrankoIncubationController extends Controller
{
    public function show() {
        return view('incubation');
    }
}
