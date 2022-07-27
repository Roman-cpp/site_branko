<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
class BrankoController extends Controller
{
    public function show():View
    {
        return view('index', ['images' => Image::all()]);
    }
}
