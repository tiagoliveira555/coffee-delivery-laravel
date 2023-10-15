<?php

namespace App\Livewire;

use App\Models\Coffee;
use Livewire\Attributes\On;
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

    #[On('test::test')]
    public function addToCart()
    {
        Coffee::query()->create([
        'tags' => '["especial", "alcoólico", "gelado"]',
        'name' => 'Teste',
        'description' => 'Testando',
        'image' => 'url',
        'price' => 0]
        );
    }
}
