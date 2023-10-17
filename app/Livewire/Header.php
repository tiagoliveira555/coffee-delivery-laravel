<?php

namespace App\Livewire;

use Livewire\Attributes\Computed;
use Livewire\Attributes\On;
use Livewire\Component;

class Header extends Component
{
    public function render()
    {
        return view('livewire.header');
    }

    #[On('count::card')]
    #[Computed()]
    public function getCountCart()
    {
        return count(session()->get('cart') ?? []);
    }
}
