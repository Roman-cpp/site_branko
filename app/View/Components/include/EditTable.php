<?php

namespace App\View\Components\include;

use Illuminate\Support\Facades\Blade;
use Illuminate\View\Component;

class EditTable extends Component
{
    public $model;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($model)
    {
        $this->model = $model;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.include.edit-table');
    }

}
