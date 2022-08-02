<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Gallery extends Component
{

    public $images;
    public $gallery;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($gallery, $images)
    {
        $this->images = $images;
        $this->gallery = $gallery;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.gallery');
    }
}
