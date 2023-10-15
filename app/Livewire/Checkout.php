<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Checkout')]
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
