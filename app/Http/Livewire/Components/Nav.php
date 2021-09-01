<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class Nav extends Component
{
    public array $links = [
        'home',
        'login',
        'register'
    ];
    public function render()
    {
        return view('livewire.components.nav');
    }
}
