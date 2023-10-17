<?php

namespace App\Models\Entities;

class ItemsCart
{
    public function __construct(
        public $id,
        public $name,
        public $price,
        public $quantity
    ) {
    }
}
