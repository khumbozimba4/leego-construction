<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ServicesBlocks extends Component
{
    public $services;

    public function __construct(array $services)
    {
        $this->services = $services;
    }
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.services-blocks');
    }
}
