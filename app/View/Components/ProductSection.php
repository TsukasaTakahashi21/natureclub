<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ProductSection extends Component
{
    /**
     * Create a new component instance.
     */
    public string $title;
    public $products;

    public function __construct(string $title, $products)
    {
        $this->title = $title;
        $this->products = $products;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.product-section');
    }
}
