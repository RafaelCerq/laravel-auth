<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Search extends Component
{
    public $routeName;
    public $search;

    /**
     * Create a new component instance.
     *
     * @param  string  $routeName
     * @param  string  $search
     * @return void
     */
    public function __construct($routeName, $search)
    {
        $this->routeName = $routeName;
        $this->search = $search;
    }


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.search');
    }
}
