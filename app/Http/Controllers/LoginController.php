<?php

namespace App\Http\Controllers;

use App\Models\Proposal;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function show() {
        return view('auth.login');
    }

    public function insert(Request $request) {

        $flight = Proposal::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'theme' => $request->theme,
            'content' => $request->message
        ]);
    }
}
