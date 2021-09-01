<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class TextField extends Component
{
    public string $label, $placeholder, $fieldName, $type = "text";

    public function render()
    {
        return view('livewire.components.text-field');
    }
}
