<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Gallery;
use App\Models\Image;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Storage;


class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return view
     */
    public function index(): view
    {
        return view('edit.edit',
            [
                'name_resources' => 'image',
                'model' => Image::get(['id', 'file_name', 'gallery_id'])->toArray(),
                'columns' => ['ID', 'Путь к файлу', 'ID Категории']
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return view
     */
    public function create(): view
    {
        return view('edit.image_create', ['gallery' => Gallery::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StorePostRequest $request
     * @return RedirectResponse
     */
    public function store(StorePostRequest $request): RedirectResponse
    {
        //$validated = $request->validated();
        $file_name = $request->file('image')->store('image', 'public');
        Image::create([
            'file_name' => $file_name,
            'gallery_id' => $request->gallery_id
        ]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return view
     */
    public function edit(int $id): view
    {
        return view('edit.image_update', ['image' => Image::find($id), 'gallery' => Gallery::get(['id', 'name'])]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(Request $request, int $id): RedirectResponse
    {
        $image = Image::find($id);

        $image->file_name = $request->file_name;
        $image->gallery_id = $request->gallery_id;

        $image->save();

        return redirect()->route('image.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy(int $id): RedirectResponse
    {
        $image = Image::find($id);

        Storage::disk('public')->delete($image->file_name);

        $image->delete();

        return redirect()->route('image.index');
    }
}

