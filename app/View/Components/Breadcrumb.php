<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Breadcrumb extends Component
{
    public $page;
    public $items;

    /**
     * Create a new component instance.
     *
     * @param  string  $page
     * @param  string  $items
     * @return void
     */
    public function __construct($page, $items)
    {
        $this->page = $page;
        $this->items = $items;
    }


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.breadcrumb');
    }
}
