<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Proposal;
use Illuminate\Http\Request;

class Test extends Controller
{
    public function show()
    {
        return view('form_test');
    }

    public function insert(StorePostRequest $request) {


        $flight = Proposal::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'theme' => $request->theme,
            'content' => $request->message
        ]);

        return redirect()->back();
    }
}
