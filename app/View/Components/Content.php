<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\Blade;

class Content extends Component
{
    public $type;
    public $img;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type, $images)
    {
        $this->img = $images;
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.content');
    }

    public function boot()
    {
        Blade::componentNamespace('Nightshade\\Views\\Components', 'nightshade');
    }
}
