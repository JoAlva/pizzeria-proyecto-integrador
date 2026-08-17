<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class PageController extends Controller
{
    /**
     * Página principal informativa de la pizzería.
     */
    public function home(): View
    {
        $pizzas = [
            [
                'name' => 'White / Red Rooster',
                'desc' => 'Salsa roja, pollo, 3 quesos, champiñones, cebolla, pimiento',
                'image' => '/images/whiterooster@2x.png',
                'price_large' => '8,950',
                'price_personal' => '6,500',
            ],
            [
                'name' => 'Margarita Rooster',
                'desc' => 'Tomate fresco, albahaca y 3 tipos de queso',
                'image' => '/images/margaritarooster@2x.png',
                'price_large' => '8,500',
                'price_personal' => '6,000',
            ],
            [
                'name' => 'Ham & Mushrooms',
                'desc' => 'Jamón y champiñones frescos',
                'image' => '/images/jamonyhongos@2x.png',
                'price_large' => '8,500',
                'price_personal' => '6,000',
            ],
            [
                'name' => 'Brazileña Rooster',
                'desc' => 'Carne, salami, champiñones, tomate, cebolla, pimiento',
                'image' => '/images/brazilenarooster@2x.png',
                'price_large' => '8,950',
                'price_personal' => '6,500',
            ],
            [
                'name' => 'Vegetarian Rooster',
                'desc' => 'Berenjena, calabacín, champiñones, tomate, cebolla, pimiento',
                'image' => '/images/vegetarianarooster@2x.png',
                'price_large' => '8,500',
                'price_personal' => '6,000',
            ],
            [
                'name' => 'Shrimp Rooster',
                'desc' => 'Camarones, 3 quesos, cebolla, champiñones',
                'image' => '/images/camaronesrooster@2x.png',
                'price_large' => '9,500',
                'price_personal' => '6,500',
            ],
            [
                'name' => 'Salami Rooster',
                'desc' => 'Salami, cebolla, pimiento',
                'image' => '/images/salamerooster@2x.png',
                'price_large' => '8,500',
                'price_personal' => '6,000',
            ],
            [
                'name' => 'Prosciutto Rooster',
                'desc' => 'Prosciutto, 3 quesos, rúcula',
                'image' => '/images/proscuittorooster@2x.png',
                'price_large' => '9,500',
                'price_personal' => '6,500',
            ],
            [
                'name' => 'Pancetta Rooster',
                'desc' => 'Jamón, pancetta, salami, cebolla morada, tomate cherry',
                'image' => '/images/pancettarooster@2x.png',
                'price_large' => '9,500',
                'price_personal' => '6,500',
            ],
            [
                'name' => 'Hawaiian Rooster',
                'desc' => 'Jamón de la casa, piña, 3 tipos de queso',
                'image' => '/images/firerooster@2x.png',
                'price_large' => '8,500',
                'price_personal' => '6,000',
            ],
            [
                'name' => 'Fire Rooster Pizza',
                'desc' => 'Carne, jamón, champiñones, pimiento, chile, jalapeño y chili',
                'image' => '/images/firepizzarooster@2x.png',
                'price_large' => '8,950',
                'price_personal' => '6,500',
            ],
            [
                'name' => 'Pepperoni Pizza',
                'desc' => 'Pepperoni, champiñones, cebolla',
                'image' => '/images/pepperonirooster@2x.png',
                'price_large' => '8,500',
                'price_personal' => '6,000',
            ],
            [
                'name' => 'Tres Carnes Pizza',
                'desc' => 'Prosciutto, jamón, pepperoni, chile, aceitunas negras, cebolla',
                'image' => '/images/3carnesrooster@2x.png',
                'price_large' => '9,500',
                'price_personal' => '6,500',
            ],
            [
                'name' => 'Tenderloin Pizza Rooster',
                'desc' => 'Lomo fino, chile, cebolla',
                'image' => '/images/pizzalomitorooster@2x.png',
                'price_large' => '10,500',
                'price_personal' => null,
            ],
        ];

        $meats = [
            [
                'name' => 'Ribs Rooster',
                'desc' => 'Costillas estilo Rooster',
                'image' => '/images/costillarooster@2x.png',
                'price' => '8,500',
            ],
            [
                'name' => 'Ribeye Rooster',
                'desc' => 'Ribeye estilo Rooster',
                'image' => '/images/ribeyerooster@2x.png',
                'price' => '12,950',
            ],
            [
                'name' => 'Tenderloin Rooster',
                'desc' => 'Lomo fino estilo Rooster',
                'image' => '/images/lomitorooster@2x.png',
                'price' => '10,950',
            ],
            [
                'name' => 'Churrasco Rooster',
                'desc' => 'Churrasco estilo Rooster',
                'image' => '/images/churrascorooster@2x.png',
                'price' => '11,950',
            ],
        ];

        $sides = ['Papa al horno', 'Ensalada', 'Verduras a la parrilla', 'Puré de papa', 'Arroz', 'Verduras salteadas'];

        $pastas = [
            [
                'name' => 'Tenderloin / Shrimp with Pink Sauce',
                'desc' => 'Lomo fino o camarones con salsa rosada',
                'image' => '/images/lomitocamarones-roosterpasta@2x.png',
                'price' => '8,950',
            ],
            [
                'name' => 'Tenderloin with Mushroom Sauce',
                'desc' => 'Lomo fino con salsa de champiñones',
                'image' => '/images/lomitosalsahongosroosterpastas@2x.png',
                'price' => '8,500',
            ],
            [
                'name' => 'Chicken with Pesto and Pistachio',
                'desc' => 'Pollo con pesto y pistachos',
                'image' => '/images/polloalpestoroosterpastas@2x.png',
                'price' => '8,500',
            ],
            [
                'name' => 'Garlic Chili Chicken',
                'desc' => 'Pollo con ajo y chile',
                'image' => '/images/polloajillochileroosterpastas@2x.png',
                'price' => '8,500',
            ],
        ];

        $pastaBuilder = [
            'Pasta' => ['Spaghetti', 'Fettuccine', 'Penne'],
            'Salsa' => ['Tomate', 'Blanca', 'Pesto'],
            'Proteína' => ['Pollo', 'Carne', 'Primavera'],
        ];

        $drinks = [
            ['name' => 'Smoothie Natural (fruta de temporada)', 'price' => '2,000'],
            ['name' => 'Gaseosa (Pop Soda)', 'price' => '1,500'],
            ['name' => 'Cerveza Premium', 'price' => '2,300'],

        ];

        $features = [
            [
                'icon' => 'chef-hat',
                'title' => 'Maestros Pizzeros',
                'desc' => 'Chefs con certificación napolitana tradicional',
            ],
            [
                'icon' => 'flame',
                'title' => 'Horno de Leña',
                'desc' => 'Cocción tradicional a altas temperaturas',
            ],
            [
                'icon' => 'heart',
                'title' => 'Pasión Italiana',
                'desc' => 'Ingredientes frescos y recetas auténticas',
            ],
        ];

        $contactInfo = [
            [
                'icon' => 'map-pin',
                'title' => 'Dirección',
                'lines' => ['Mercadito Arenal, 142', '700 mts de Parque La Fortuna, Alajuela, Costa Rica'],
            ],
            [
                'icon' => 'phone',
                'title' => 'Teléfono',
                'lines' => ['(506) 8842-1596', ''],
            ],
            [
                'icon' => 'clock',
                'title' => 'Horario',
                'lines' => ['Todos los días', '12 md a 10 pm'],
            ],
            [
                'icon' => 'mail',
                'title' => 'Email',
                'lines' => ['roosterbycm@gmail.com', ''],
            ],
        ];

        return view('home', compact(
            'pizzas', 'meats', 'sides', 'pastas', 'pastaBuilder', 'drinks',
            'features', 'contactInfo'
        ));

    }
}
