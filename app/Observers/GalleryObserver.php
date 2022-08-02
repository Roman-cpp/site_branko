<?php

namespace App\Observers;

use App\Models\Gallery;
use Illuminate\Support\Facades\Storage;

class GalleryObserver
{
    /**
     * Handle the Gallery "created" event.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return void
     */
    public function created(Gallery $gallery)
    {
        //
    }

    /**
     * Handle the Gallery "updated" event.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return void
     */
    public function updated(Gallery $gallery)
    {
        //
    }

    /**
     * Handle the Gallery "deleting" event.
     *
     * @param  Gallery  $gallery
     * @return void
     */
    public function deleting(Gallery $gallery)
    {
        foreach ($gallery->images as $image) {
            Storage::disk('public')->delete($image->file_name);
        }
    }

    /**
     * Handle the Gallery "deleted" event.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return void
     */
    public function deleted(Gallery $gallery)
    {
        //
    }

    /**
     * Handle the Gallery "restored" event.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return void
     */
    public function restored(Gallery $gallery)
    {
        //
    }

    /**
     * Handle the Gallery "force deleted" event.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return void
     */
    public function forceDeleted(Gallery $gallery)
    {
        //
    }
}
