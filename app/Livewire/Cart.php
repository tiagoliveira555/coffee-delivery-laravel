<?php

namespace App\Livewire;

use Livewire\Attributes\Computed;
use Livewire\Component;

class Cart extends Component
{
    public $cart = [];

    public function render()
    {
        $cart = session()->get('cart') ?? [];

        return view('livewire.cart')->with([
            $this->cart = $cart,
        ]);
    }

    public function save()
    {
        $this->dispatch('save::checkout');
    }

    public function incrementQuantity(int $id)
    {
        if ($item = collect($this->cart)->get($id)) {
            ++$item['quantity'];
            $this->cart[$id] = $item;
            session()->put('cart', $this->cart);
            $this->dispatch('count::card');
        }
    }

    public function decrementQuantity(int $id)
    {
        $item = collect($this->cart)->get($id);

        if ($item['quantity'] > 1) {
            --$item['quantity'];
            $this->cart[$id] = $item;
            session()->put('cart', $this->cart);
            $this->dispatch('count::card');
        }
    }

    public function removeItem(int $id)
    {
        unset($this->cart[$id]);
        session()->put('cart', $this->cart);
        $this->dispatch('count::card');
    }

    #[Computed()]
    public function totalItems()
    {
        return collect($this->cart)->sum(function ($item) {
            return $item['price'] * $item['quantity'];
        });
    }

    #[Computed()]
    public function total()
    {
        return collect($this->cart)->sum(function ($item) {
            return $item['price'] * $item['quantity'];
        }) + 3.5;
    }
}
