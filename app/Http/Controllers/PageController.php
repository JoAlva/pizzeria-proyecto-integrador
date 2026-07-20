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
                'name'  => 'White / Red Rooster',
                'desc'  => 'Salsa roja, pollo, 3 quesos, champiñones, cebolla, pimiento',
                'image' => 'https://mercaditoarenal.com/wp-content/uploads/2024/12/whiterooster@2x.png',
                'price_large'    => '8,950',
                'price_personal' => '6,500',
            ],
            [
                'name'  => 'Margarita Rooster',
                'desc'  => 'Tomate fresco, albahaca y 3 tipos de queso',
                'image' => 'https://mercaditoarenal.com/wp-content/uploads/2024/12/margaritarooster@2x.png',
                'price_large'    => '8,500',
                'price_personal' => '6,000',
            ],
            [
                'name'  => 'Ham & Mushrooms',
                'desc'  => 'Jamón y champiñones frescos',
                'image' => 'https://mercaditoarenal.com/wp-content/uploads/2024/12/jamonyhongos@2x.png',
                'price_large'    => '8,500',
                'price_personal' => '6,000',
            ],
            [
                'name'  => 'Brazileña Rooster',
                'desc'  => 'Carne, salami, champiñones, tomate, cebolla, pimiento',
                'image' => 'https://mercaditoarenal.com/wp-content/uploads/2024/12/brazilenarooster@2x.png',
                'price_large'    => '8,950',
                'price_personal' => '6,500',
            ],
            [
                'name'  => 'Vegetarian Rooster',
                'desc'  => 'Berenjena, calabacín, champiñones, tomate, cebolla, pimiento',
                'image' => 'https://mercaditoarenal.com/wp-content/uploads/2024/12/vegetarianarooster@2x.png',
                'price_large'    => '8,500',
                'price_personal' => '6,000',
            ],
            [
                'name'  => 'Shrimp Rooster',
                'desc'  => 'Camarones, 3 quesos, cebolla, champiñones',
                'image' => 'https://mercaditoarenal.com/wp-content/uploads/2024/12/camaronesrooster@2x.png',
                'price_large'    => '9,500',
                'price_personal' => '6,500',
            ],
            [
                'name'  => 'Salami Rooster',
                'desc'  => 'Salami, cebolla, pimiento',
                'image' => 'https://mercaditoarenal.com/wp-content/uploads/2024/12/salamerooster@2x.png',
                'price_large'    => '8,500',
                'price_personal' => '6,000',
            ],
            [
                'name'  => 'Prosciutto Rooster',
                'desc'  => 'Prosciutto, 3 quesos, rúcula',
                'image' => 'https://mercaditoarenal.com/wp-content/uploads/2024/12/proscuittorooster@2x.png',
                'price_large'    => '9,500',
                'price_personal' => '6,500',
            ],
            [
                'name'  => 'Pancetta Rooster',
                'desc'  => 'Jamón, pancetta, salami, cebolla morada, tomate cherry',
                'image' => 'https://mercaditoarenal.com/wp-content/uploads/2024/12/pancettarooster@2x.png',
                'price_large'    => '9,500',
                'price_personal' => '6,500',
            ],
            [
                'name'  => 'Hawaiian Rooster',
                'desc'  => 'Jamón de la casa, piña, 3 tipos de queso',
                'image' => 'https://mercaditoarenal.com/wp-content/uploads/2024/12/firerooster@2x.png',
                'price_large'    => '8,500',
                'price_personal' => '6,000',
            ],
            [
                'name'  => 'Fire Rooster Pizza',
                'desc'  => 'Carne, jamón, champiñones, pimiento, chile, jalapeño y chili',
                'image' => 'https://mercaditoarenal.com/wp-content/uploads/2024/12/firepizzarooster@2x.png',
                'price_large'    => '8,950',
                'price_personal' => '6,500',
            ],
            [
                'name'  => 'Pepperoni Pizza',
                'desc'  => 'Pepperoni, champiñones, cebolla',
                'image' => 'https://mercaditoarenal.com/wp-content/uploads/2024/12/pepperonirooster@2x.png',
                'price_large'    => '8,500',
                'price_personal' => '6,000',
            ],
            [
                'name'  => 'Tres Carnes Pizza',
                'desc'  => 'Prosciutto, jamón, pepperoni, chile, aceitunas negras, cebolla',
                'image' => 'https://mercaditoarenal.com/wp-content/uploads/2024/12/3carnesrooster@2x.png',
                'price_large'    => '9,500',
                'price_personal' => '6,500',
            ],
            [
                'name'  => 'Tenderloin Pizza Rooster',
                'desc'  => 'Lomo fino, chile, cebolla',
                'image' => 'https://mercaditoarenal.com/wp-content/uploads/2024/12/pizzalomitorooster@2x.png',
                'price_large'    => '10,500',
                'price_personal' => null,
            ],
        ];

        $meats = [
            [
                'name'  => 'Ribs Rooster',
                'desc'  => 'Costillas estilo Rooster',
                'image' => 'https://mercaditoarenal.com/wp-content/uploads/2024/12/costillarooster@2x.png',
                'price' => '8,500',
            ],
            [
                'name'  => 'Ribeye Rooster',
                'desc'  => 'Ribeye estilo Rooster',
                'image' => 'https://mercaditoarenal.com/wp-content/uploads/2024/12/ribeyerooster@2x.png',
                'price' => '12,950',
            ],
            [
                'name'  => 'Tenderloin Rooster',
                'desc'  => 'Lomo fino estilo Rooster',
                'image' => 'https://mercaditoarenal.com/wp-content/uploads/2024/12/lomitorooster@2x.png',
                'price' => '10,950',
            ],
            [
                'name'  => 'Churrasco Rooster',
                'desc'  => 'Churrasco estilo Rooster',
                'image' => 'https://mercaditoarenal.com/wp-content/uploads/2024/12/churrascorooster@2x.png',
                'price' => '11,950',
            ],
        ];

        $sides = ['Papa al horno', 'Ensalada', 'Verduras a la parrilla', 'Puré de papa', 'Arroz', 'Verduras salteadas'];

        $pastas = [
            [
                'name'  => 'Tenderloin / Shrimp with Pink Sauce',
                'desc'  => 'Lomo fino o camarones con salsa rosada',
                'image' => 'https://mercaditoarenal.com/wp-content/uploads/2024/12/lomitocamarones-roosterpasta@2x.png',
                'price' => '8,950',
            ],
            [
                'name'  => 'Tenderloin with Mushroom Sauce',
                'desc'  => 'Lomo fino con salsa de champiñones',
                'image' => 'https://mercaditoarenal.com/wp-content/uploads/2024/12/lomitosalsahongosroosterpastas@2x.png',
                'price' => '8,500',
            ],
            [
                'name'  => 'Chicken with Pesto and Pistachio',
                'desc'  => 'Pollo con pesto y pistachos',
                'image' => 'https://mercaditoarenal.com/wp-content/uploads/2024/12/polloalpestoroosterpastas@2x.png',
                'price' => '8,500',
            ],
            [
                'name'  => 'Garlic Chili Chicken',
                'desc'  => 'Pollo con ajo y chile',
                'image' => 'https://mercaditoarenal.com/wp-content/uploads/2024/12/polloajillochileroosterpastas@2x.png',
                'price' => '8,500',
            ],
        ];

        $pastaBuilder = [
            'Pasta'     => ['Spaghetti', 'Fettuccine', 'Penne'],
            'Salsa'     => ['Tomate', 'Blanca', 'Pesto'],
            'Proteína'  => ['Pollo', 'Carne', 'Primavera'],
        ];

        $drinks = [
            ['name' => 'Smoothie Natural (fruta de temporada)', 'price' => '2,000'],
            ['name' => 'Gaseosa (Pop Soda)', 'price' => '1,500'],
            ['name' => 'Cerveza Premium', 'price' => '2,300'],
        ];

        $features = [
            [
                'icon'  => 'chef-hat',
                'title' => 'Maestros Pizzeros',
                'desc'  => 'Chefs con certificación napolitana tradicional',
            ],
            [
                'icon'  => 'flame',
                'title' => 'Horno de Leña',
                'desc'  => 'Cocción tradicional a altas temperaturas',
            ],
            [
                'icon'  => 'heart',
                'title' => 'Pasión Italiana',
                'desc'  => 'Ingredientes frescos y recetas auténticas',
            ],
        ];

        $contactInfo = [
            [
                'icon'  => 'map-pin',
                'title' => 'Dirección',
                'lines' => ['Calle Principal 123 ', '28001 Madrid, España'],
            ],
            [
                'icon'  => 'phone',
                'title' => 'Teléfono',
                'lines' => ['(506) 88-42-15-96', ''],
            ],
            [
                'icon'  => 'clock',
                'title' => 'Horario',
                'lines' => ['Lun - Jue: 12:00 - 23:00', 'Vie - Dom: 12:00 - 00:00'],
            ],
            [
                'icon'  => 'mail',
                'title' => 'Email',
                'lines' => ['info@bellanapoli.com', 'reservas@bellanapoli.com'],
            ],
        ];

        return view('home', compact(
            'pizzas', 'meats', 'sides', 'pastas', 'pastaBuilder', 'drinks',
            'features', 'contactInfo'
        ));
    }
}
