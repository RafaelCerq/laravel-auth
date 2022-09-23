<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Form extends Component
{
    public $action;
    public $method;

    /**
     * Create a new component instance.
     *
     * @param  string  $action
     * @param  string  $method
     * @return void
     */
    public function __construct($action, $method)
    {
        $this->action = $action;
        $this->method = $method;
    }


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form');
    }
}
