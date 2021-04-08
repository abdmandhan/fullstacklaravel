<?php

namespace App\View\Components\Qiblat;

use App\Models\Food;
use Illuminate\View\Component;

use function Psy\debug;

class FoodCard extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $data = Food::limit(6)->get();

        return view('components.qiblat.food-card')->with(['data' => $data]);
    }
}
