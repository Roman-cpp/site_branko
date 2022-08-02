<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Gallery;
use App\Models\Image;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return view
     */
    public function index(): view
    {
        return view('edit.edit', ['name_resources' => 'gallery', 'model' => Gallery::get(['id', 'name'])->toArray(), 'columns' => ['ID', 'Название']]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return view
     */
    public function create():view
    {
        return view('edit.gallery_create', ['themes' =>Gallery::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StorePostRequest $request
     * @return RedirectResponse
     */
    public function store(StorePostRequest $request): RedirectResponse
    {
        Gallery::create([
            'name' => $request->name,
        ]);
        return redirect()->route('gallery.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return view
     */
    public function edit(int $id):view
    {
        return view('edit.gallery_update', ['gallery' =>Gallery::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  StorePostRequest  $request
     * @param  int  $id
     * @return RedirectResponse
     */
    public function update(StorePostRequest $request, int $id):RedirectResponse
    {
        $gallery = Gallery::find($id);

        $gallery->name = $request->name;

        $gallery->save();

        return redirect()->route('gallery.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Gallery $gallery
     * @return RedirectResponse
     */
    public function destroy(Gallery $gallery):RedirectResponse
    {

        $gallery->delete();

        return redirect()->route('gallery.index');
    }
}
