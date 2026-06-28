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
                'name'  => 'Margherita',
                'price' => '12.50',
                'desc'  => 'Salsa de tomate, mozzarella fresca, albahaca y aceite de oliva',
                'image' => 'https://mercaditoarenal.com/wp-content/uploads/2024/12/margaritarooster@2x.png',
            ],
            [
                'name'  => 'Pepperoni',
                'price' => '14.00',
                'desc'  => 'Salsa de tomate, mozzarella, pepperoni italiano y orégano',
                'image' => 'https://mercaditoarenal.com/wp-content/uploads/2024/12/jamonyhongos@2x.png',
            ],
            [
                'name'  => 'Cuatro Quesos',
                'price' => '15.50',
                'desc'  => 'Mozzarella, gorgonzola, parmesano, provolone y nueces',
                'image' => 'https://mercaditoarenal.com/wp-content/uploads/2024/12/whiterooster@2x.png',
            ],
            [
                'name'  => 'Prosciutto e Funghi',
                'price' => '14.50',
                'desc'  => 'Jamón italiano, champiñones frescos, mozzarella y tomate',
                'image' => 'https://mercaditoarenal.com/wp-content/uploads/2024/12/brazilenarooster@2x.png',
            ],
            [
                'name'  => 'Diavola',
                'price' => '13.50',
                'desc'  => 'Salami picante, jalapeños, mozzarella y salsa picante',
                'image' => 'https://mercaditoarenal.com/wp-content/uploads/2024/12/vegetarianarooster@2x.png',
            ],
            [
                'name'  => 'Vegetariana',
                'price' => '13.00',
                'desc'  => 'Pimientos, cebolla, champiñones, aceitunas, tomate cherry',
                'image' => 'https://mercaditoarenal.com/wp-content/uploads/2024/12/camaronesrooster@2x.png',
            ],
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

        return view('home', compact('pizzas', 'features', 'contactInfo'));
    }
}
