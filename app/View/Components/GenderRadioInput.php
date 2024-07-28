<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class GenderRadioInput extends Component
{

    public $name;
    public $selected;

    /**
     * Create a new component instance.
     */
    public function __construct($name, $selected = null)
    {
        $this->name = $name;
        $this->selected =$selected;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.gender-radio-input');
    }
}
