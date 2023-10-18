<?php

namespace App\Livewire;

use App\Helpers\Helper;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Home')]
class Home extends Component
{
    public array $coffees = [];

    public function render()
    {
        return view('livewire.home', [
            $this->coffees = Helper::coffees(),
        ]);
    }

    public function addToCart(int $id, int $quantity)
    {
        $cart = session()->get('cart') ?? [];

        $coffee = collect($this->coffees)->get($id - 1);

        $cart[$id] = [
            'id' => $coffee['id'],
            'name' => $coffee['name'],
            'price' => $coffee['price'],
            'image' => $coffee['image'],
            'quantity' => $quantity,
        ];

        session()->put('cart', $cart);

        $this->dispatch('count::card');
    }
}
