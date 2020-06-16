<?php

namespace App\View\Components;

use Illuminate\View\Component;

class table extends Component
{
    public $title;

    public $headers;

    public $resource;

    public $items;

    public $relations;


    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $headers, $resource, $items, $relations= [])
    {
        $this->title = $title;

        $this->headers = $headers;

        $this->resource = $resource;

        $this->items = $items;

        $this->relations = $relations;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.table');
    }
}
