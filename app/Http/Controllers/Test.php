<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\ProductImages;
use App\Models\Proposal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Test extends Controller
{
    public function showForm()
    {
        return view('form_test');
    }

    public function insertProposal(StorePostRequest $request) {


        $flight = Proposal::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'theme' => $request->theme,
            'content' => $request->message
        ]);
        return redirect()->back();
    }


    public function showViewFile()
    {
        return view('form_test_file');
    }

    public function insertImg(Request $request){

        $request->file('file')->store('', 'public');
        return redirect()->back();
    }

    public function showForm2($id)
    {
        return view(route('login'));
    }
}
