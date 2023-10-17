<?php

namespace App\Livewire;

use Livewire\Component;

class Cart extends Component
{
    public $cart;

    public function render()
    {
        return view('livewire.cart');
    }

    public function save()
    {
        return $this->redirect('success', navigate: true);
    }
}
