<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Alert extends Component
{
    public $msg;
    public $status;

    /**
     * Create a new component instance.
     *
     * @param  string  $msg
     * @param  string  $status
     * @return void
     */
    public function __construct($msg, $status)
    {
        $this->msg = $msg;
        $this->status = $status;
    }


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.alert');
    }
}
