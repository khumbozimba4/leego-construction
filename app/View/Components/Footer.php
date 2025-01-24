<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Footer extends Component
{
    public $companyName;

    /**
     * Create a new component instance.
     *
     * @param string $title
     * @param array $links
     */
    public function __construct()
    {
        $this->companyName = "Leego Construction";
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.footer');
    }
}
