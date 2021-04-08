<?php

namespace App\View\Components\Qiblat;

use Illuminate\View\Component;

class Promo extends Component
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
        $data = [
            'activeSlide' => 1,
            'slides' => [
                [1, 'https://images.tokopedia.net/img/cache/1208/NsjrJu/2021/4/3/09f573d0-5547-459e-b56e-869fa9527200.jpg.webp?ect=4g'],
                [2, 'https://images.tokopedia.net/img/cache/1208/NsjrJu/2021/4/3/1aa1e1a1-e0d3-4c51-a0e7-01a82fc31e99.jpg.webp?ect=4g'],
                [3, 'https://images.tokopedia.net/img/cache/1208/NsjrJu/2021/4/3/09f573d0-5547-459e-b56e-869fa9527200.jpg.webp?ect=4g'],
                [4, 'https://images.tokopedia.net/img/cache/1208/NsjrJu/2021/4/3/1aa1e1a1-e0d3-4c51-a0e7-01a82fc31e99.jpg.webp?ect=4g'],
            ]
        ];

        return view('components.qiblat.promo', ['data' => $data]);
    }
}
