<?php

namespace App\Livewire;

use App\Models\Coffee;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Home')]
class Home extends Component
{
    public array $coffees = [];

    public function render()
    {
        return view('livewire.home', [
            $this->coffees = Coffee::query()->get()->toArray(),
        ]);
    }
}
