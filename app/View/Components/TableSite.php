<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TableSite extends Component
{
    public $columnList;
    public $list;
    public $routeName;

    /**
     * Create a new component instance.
     *
     * @param  string  $columnList
     * @param  string  $list
     * @param  string  $routeName
     * @return void
     */
    public function __construct($columnList, $list, $routeName)
    {
        $this->routeName = $routeName;
        $this->list = $list;
        $this->columnList = $columnList;
    }


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.table_site');
    }
}
