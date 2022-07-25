<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\View\View;

class EditController extends Controller
{
    public function show(string $id = null):view {
        return view('edit_branko', ['images' => Image::all()]);
    }
}
