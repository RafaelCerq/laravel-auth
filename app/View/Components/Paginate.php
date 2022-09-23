<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Paginate extends Component
{
    public $search;
    public $list;

    /**
     * Create a new component instance.
     *
     * @param  string  $search
     * @param  string  $list
     * @return void
     */
    public function __construct($search, $list)
    {
        $this->search = $search;
        $this->list = $list;
    }


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.paginate');
    }
}
