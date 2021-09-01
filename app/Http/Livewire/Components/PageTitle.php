<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class PageTitle extends Component
{
    public string $title;

    public function render()
    {
        return view('livewire.components.page-title');
    }
}
