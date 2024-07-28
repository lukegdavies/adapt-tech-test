<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FormTextarea extends Component
{

    public $name;
    public $label;
    public $placeholder;
    public $value;
    public $type; // Optional, defaults to 'text'
    public $rows; // Default number of rows

    /**
     * Create a new component instance.
     */
    public function __construct($name, $label, $placeholder, $value = null, $rows = 3)
    {
        $this->name = $name;
        $this->label = $label;
        $this->placeholder = $placeholder;
        $this->value = $value;
        $this->rows = $rows;   
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form-textarea');
    }
}
