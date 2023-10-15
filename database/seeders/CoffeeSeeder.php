<?php

namespace Database\Seeders;

use App\Models\Coffee;
use Illuminate\Database\Seeder;

class CoffeeSeeder extends Seeder
{
    public function run(): void
    {
        $coffees = [
            [
                'tags' => '["tradicional"]',
                'name' => 'Expresso Tradicional',
                'description' => 'O tradicional café feito com água quente e grãos moídos',
                'image' => 'imgs/coffees/tradicional.png',
                'price' => 4.9,
            ],
            [
                'tags' => '["tradicional"]',
                'name' => 'Expresso Americano',
                'description' => 'Expresso diluído, menos intenso que o tradicional',
                'image' => 'imgs/coffees/americano.png',
                'price' => 5.9,
            ],
            [
                'tags' => '["tradicional"]',
                'name' => 'Expresso Cremoso',
                'description' => 'Café expresso tradicional com espuma cremosa',
                'image' => 'imgs/coffees/cremoso.png',
                'price' => 4.5,
            ],
            [
                'tags' => '["tradicional", "gelado"]',
                'name' => 'Expresso Gelado',
                'description' => 'Bebida preparada com café expresso e cubos de gelo',
                'image' => 'imgs/coffees/gelado.png',
                'price' => 6,
            ],
            [
                'tags' => '["tradicional", "com leite"]',
                'name' => 'Café com Leite',
                'description' => 'Meio a meio de expresso tradicional com leite vaporizado',
                'image' => 'imgs/coffees/leite.png',
                'price' => 8,
            ],
            [
                'tags' => '["tradicional", "com leite"]',
                'name' => 'Latte',
                'description' => 'Uma dose de café expresso com o dobro de leite e espuma cremosa',
                'image' => 'imgs/coffees/latte.png',
                'price' => 9.5,
            ],
            [
                'tags' => '["tradicional", "com leite"]',
                'name' => 'Capuccino',
                'description' => 'Bebida com canela feita de doses iguais de café, leite e espuma',
                'image' => 'imgs/coffees/capuccino.png',
                'price' => 9.9,
            ],
            [
                'tags' => '["tradicional", "com leite"]',
                'name' => 'Macchiato',
                'description' => 'Café expresso misturado com um pouco de leite quente e espuma',
                'image' => 'imgs/coffees/macchiato.png',
                'price' => 7.9,
            ],
            [
                'tags' => '["tradicional", "com leite"]',
                'name' => 'Mocaccino',
                'description' => 'Café expresso com calda de chocolate, pouco leite e espuma',
                'image' => 'imgs/coffees/mocaccino.png',
                'price' => 6.9,
            ],
            [
                'tags' => '["especial", "com leite"]',
                'name' => 'Chocolate Quente',
                'description' => 'Bebida feita com chocolate dissolvido no leite quente e café',
                'image' => 'imgs/coffees/chocolate.png',
                'price' => 5,
            ],
            [
                'tags' => '["especial", "alcoólico", "gelado"]',
                'name' => 'Cubano',
                'description' => 'Drink gelado de café expresso com rum, creme de leite e hortelã',
                'image' => 'imgs/coffees/cubano.png',
                'price' => 8.7,
            ],
            [
                'tags' => '["especial"]',
                'name' => 'Havaiano',
                'description' => 'Bebida adocicada preparada com café e leite de coco',
                'image' => 'imgs/coffees/havaiano.png',
                'price' => 9.9,
            ],
            [
                'tags' => '["especial"]',
                'name' => 'Árabe',
                'description' => 'Bebida preparada com grãos de café árabe e especiarias',
                'image' => 'imgs/coffees/arabe.png',
                'price' => 8.75,
            ],
            [
                'tags' => '["especial", "alcoólico"]',
                'name' => 'Irlandês',
                'description' => 'Bebida a base de café, uísque irlandês, açúcar e chantilly',
                'image' => 'imgs/coffees/irlandes.png',
                'price' => 9.2,
            ],
        ];

        foreach ($coffees as $coffee) {
            Coffee::query()->create($coffee);
        }
    }
}
