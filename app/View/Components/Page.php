<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Page extends Component
{
    public $col;
    public $namepage;

    /**
     * Create a new component instance.
     *
     * @param  string  $col
     * @param  string  $namepage
     * @return void
     */
    public function __construct($col, $namepage)
    {
        $this->col = $col;
        $this->namepage = $namepage;
    }


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.page');
    }
}
