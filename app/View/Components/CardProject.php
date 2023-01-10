<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CardProject extends Component
{
    /**
     * Create a project component instance.
     *
     * @return void
     */
    public $title;
    public $projectIds;
    public $price;
    public $address;
    public $area;
    public $time;
    public $images="";
    public function __construct($title, $projectIds,$price,$address,$area,$time,$images="")
    {
        $this->title = $title;
        $this->projectIds = $projectIds;
        $this->price = $price;
        $this->address = $address;
        $this->area = $area;
        $this->time = $time;
        $this->images = $images;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.card-project');
    }
}