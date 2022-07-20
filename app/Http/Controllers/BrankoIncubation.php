<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrankoIncubation extends Controller
{
    public function show() {
        return view('incubation');
    }
}
