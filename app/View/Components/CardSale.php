<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CardSale extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $title;
    public $postIds;
    public $price;
    public $address;
    public $area;
    public $time;
    public function __construct($title, $postIds,$price,$address,$area,$time)
    {
        $this->title = $title;
        $this->postIds = $postIds;
        $this->price = $price;
        $this->address = $address;
        $this->area = $area;
        $this->time = $time;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.card-sale');
    }
}