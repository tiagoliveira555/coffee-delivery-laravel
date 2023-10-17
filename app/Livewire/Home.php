<?php

namespace App\Livewire;

use App\Models\Coffee;
use App\Models\Entities\ItemsCart;
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

    public function addToCart(Coffee $coffee, int $quantity)
    {
        $cart = session()->get('cart') ?? [];

        if (array_key_exists($coffee['id'] - 1, $cart)) {
            $cart[$coffee['id'] - 1]->quantity = $quantity;
        } else {
            $coffee = new ItemsCart(id: $coffee['id'], name: $coffee['name'], price: $coffee['price'], quantity: $quantity);
            $cart[] = $coffee;
        }

        session()->put('cart', $cart);
    }
}
