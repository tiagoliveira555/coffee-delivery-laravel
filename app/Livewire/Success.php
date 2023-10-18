<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Success')]
class Success extends Component
{
    public $finally;

    public function render()
    {
        return view('livewire.success')->with([
            $this->finally = session()->get('finally') ?? [],
        ]);
    }
}
