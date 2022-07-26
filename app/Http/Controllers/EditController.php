<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\View\View;

class EditController extends Controller
{
    public function show(string $id = null):view {
        $data = new Gallery();

        return view('edit_branko', ['images' => $data->allImg()]);
    }
}
