<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class StarRating extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        // Визначаємо необов'язкову кластивість читання типу float, означає що це не буде змінено
        public readonly ?float $rating
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.star-rating');
    }
}
