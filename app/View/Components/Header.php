<?php

namespace App\View\Components;

use App\Models\Setting;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Header extends Component
{

    public $data;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        // Fetch settings and store them in $data
        $this->data = [
            'primary_phone_number' => Setting::where('key', 'primary_phone_number')->value('value'),
            'primary_email_address' => Setting::where('key', 'primary_email_address')->value('value'),
            'address' => Setting::where('key', 'address')->value('value'),
        ];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.header', ['data' => $this->data]);
    }
}
