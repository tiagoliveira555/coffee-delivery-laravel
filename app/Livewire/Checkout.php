<?php

namespace App\Livewire;

use Livewire\Component;

class Checkout extends Component
{
    public function render()
    {
        return view('livewire.checkout');
    }

    public function save()
    {
        return $this->redirect('success', navigate: true);
    }
}
