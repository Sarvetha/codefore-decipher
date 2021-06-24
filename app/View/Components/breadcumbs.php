<?php

namespace App\View\Components;

use Illuminate\View\Component;

class breadcumbs extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $title;
    public $subTitle;

    public function __construct($title,$subTitle)
    {
        $this->title=$title;
        $this->subTitle=$subTitle;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.breadcumbs');
    }
}
