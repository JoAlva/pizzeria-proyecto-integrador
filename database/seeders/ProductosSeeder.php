<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Producto;
use App\Models\Categoria;

class ProductosSeeder extends Seeder
{
    public function run(): void
    {
        $cat = Categoria::pluck('id_categoria', 'nombre');

        $productos = [
            // === CARNES ===
            ['nombre' => 'Ribs Rooster', 'descripcion' => 'Costillas de cerdo ahumadas', 'precio' => 8500, 'imagen' => 'assets/img/CostillaRoster.webp', 'categoria' => 'Carne', 'ingredientes' => ['Costillas de cerdo', 'Salsa BBQ ahumada', 'Especias']],
            ['nombre' => 'Ribeye Rooster', 'descripcion' => 'Corte premium de res a la parrilla', 'precio' => 12950, 'imagen' => 'assets/img/RibeyeRooster.webp', 'categoria' => 'Carne', 'ingredientes' => ['Corte Ribeye', 'Sal marina', 'Pimienta negra', 'Mantequilla de hierbas']],
            ['nombre' => 'Tenderloin Rooster', 'descripcion' => 'Lomo fino suave y jugoso', 'precio' => 10950, 'imagen' => 'assets/img/LomitoRoster.webp', 'categoria' => 'Carne', 'ingredientes' => ['Lomo fino de res', 'Ajo', 'Romero', 'Aceite de oliva']],
            ['nombre' => 'Churrasco Rooster', 'descripcion' => 'Churrasco tradicional al carbón', 'precio' => 11950, 'imagen' => 'assets/img/ChurrascoRooster.webp', 'categoria' => 'Carne', 'ingredientes' => ['Falda de res', 'Chimichurri', 'Limón', 'Sal gruesa']],

            // === SIDES ===
            ['nombre' => 'Sides Selection', 'descripcion' => 'Baked Potato, Salad, Grilled Vegetables, Mashed Potatoes, Rice, Sautéed Vegetables.', 'precio' => 2000, 'imagen' => 'assets/img/logo-rooster.webp', 'categoria' => 'Side', 'ingredientes' => ['Papa al horno', 'Ensalada fresca', 'Vegetales a la parrilla', 'Puré de papas', 'Arroz', 'Vegetales salteados']],

            // === PIZZAS ===
            ['nombre' => 'White / Red Rooster', 'descripcion' => 'Salsa roja, pollo, 3 quesos, champiñones, cebolla, chile dulce.', 'precio' => 8950, 'imagen' => 'assets/img/logo-rooster.webp', 'categoria' => 'Pizza', 'ingredientes' => ['Salsa roja', 'Pollo', '3 Quesos', 'Champiñones', 'Cebolla', 'Chile dulce']],
            ['nombre' => 'Margarita Rooster', 'descripcion' => 'Tomate fresco, albahaca y 3 tipos de queso.', 'precio' => 8500, 'imagen' => 'assets/img/margherita.webp', 'categoria' => 'Pizza', 'ingredientes' => ['Tomate fresco', 'Albahaca', 'Mozzarella', 'Parmesano', 'Gorgonzola']],
            ['nombre' => 'Ham & Mushrooms', 'descripcion' => 'Jamón y champiñones frescos.', 'precio' => 8500, 'imagen' => 'assets/img/logo-rooster.webp', 'categoria' => 'Pizza', 'ingredientes' => ['Jamón', 'Champiñones frescos', 'Queso mozzarella', 'Orégano']],
            ['nombre' => 'Brazileña Rooster', 'descripcion' => 'Carne, salami, champiñones, tomate, cebolla, chile dulce.', 'precio' => 8950, 'imagen' => 'assets/img/logo-rooster.webp', 'categoria' => 'Pizza', 'ingredientes' => ['Carne molida', 'Salami', 'Champiñones', 'Tomate', 'Cebolla', 'Chile dulce']],
            ['nombre' => 'Vegetarian Rooster', 'descripcion' => 'Berenjena, calabacín, champiñones, tomate, cebolla.', 'precio' => 8500, 'imagen' => 'assets/img/cuatro-quesos.webp', 'categoria' => 'Pizza', 'ingredientes' => ['Berenjena', 'Calabacín', 'Champiñones', 'Tomate', 'Cebolla', 'Chile dulce']],
            ['nombre' => 'Shrimp Rooster', 'descripcion' => 'Camarones, 3 quesos, cebolla, champiñones.', 'precio' => 9500, 'imagen' => 'assets/img/logo-rooster.webp', 'categoria' => 'Pizza', 'ingredientes' => ['Camarones', '3 Quesos', 'Cebolla', 'Champiñones', 'Ajo']],
            ['nombre' => 'Salami Rooster', 'descripcion' => 'Salami, cebolla y chile dulce.', 'precio' => 8500, 'imagen' => 'assets/img/logo-rooster.webp', 'categoria' => 'Pizza', 'ingredientes' => ['Salami', 'Cebolla', 'Chile dulce', 'Queso mozzarella']],
            ['nombre' => 'Prosciutto Rooster', 'descripcion' => 'Prosciutto, 3 quesos, rúcula.', 'precio' => 9500, 'imagen' => 'assets/img/ProsciuttoRooster.webp', 'categoria' => 'Pizza', 'ingredientes' => ['Prosciutto', '3 Quesos', 'Rúcula', 'Aceite de trufa']],
            ['nombre' => 'Pancetta Rooster', 'descripcion' => 'Jamón, panceta, salami, cebolla morada, tomate cherry.', 'precio' => 9500, 'imagen' => 'assets/img/logo-rooster.webp', 'categoria' => 'Pizza', 'ingredientes' => ['Jamón', 'Panceta', 'Salami', 'Cebolla morada', 'Tomate cherry']],
            ['nombre' => 'Hawaiian Rooster', 'descripcion' => 'Jamón de la casa, piña, 3 tipos de queso.', 'precio' => 8500, 'imagen' => 'assets/img/hawaiana.webp', 'categoria' => 'Pizza', 'ingredientes' => ['Jamón de la casa', 'Piña', '3 Quesos', 'Orégano']],
            ['nombre' => 'Fire Rooster', 'descripcion' => 'Carne, jamón, champiñones, chile dulce, chili, jalapeño.', 'precio' => 8950, 'imagen' => 'assets/img/logo-rooster.webp', 'categoria' => 'Pizza', 'ingredientes' => ['Carne', 'Jamón', 'Champiñones', 'Chile dulce', 'Chili', 'Jalapeño']],
            ['nombre' => 'Pepperoni Pizza', 'descripcion' => 'Pepperoni, champiñones, cebolla.', 'precio' => 8500, 'imagen' => 'assets/img/pepperoni.webp', 'categoria' => 'Pizza', 'ingredientes' => ['Pepperoni', 'Champiñones', 'Cebolla', 'Queso mozzarella']],
            ['nombre' => 'Tres Carnes', 'descripcion' => 'Prosciutto, jamón, pepperoni, chili, aceitunas negras, cebolla.', 'precio' => 9500, 'imagen' => 'assets/img/TresCarnesPizza.webp', 'categoria' => 'Pizza', 'ingredientes' => ['Prosciutto', 'Jamón', 'Pepperoni', 'Chili', 'Aceitunas negras', 'Cebolla']],
            ['nombre' => 'Tenderloin Pizza', 'descripcion' => 'Lomo fino, chili, cebolla.', 'precio' => 10500, 'imagen' => 'assets/img/LomitoRoster.webp', 'categoria' => 'Pizza', 'ingredientes' => ['Lomo fino', 'Chili', 'Cebolla caramelizada', 'Queso fundido']],

            // === PASTAS ===
            ['nombre' => 'Tenderloin/Shrimp Pink Sauce', 'descripcion' => 'Lomo o camarones con salsa rosada.', 'precio' => 8950, 'imagen' => 'assets/img/PastaLomitoCamaronesRoja.webp', 'categoria' => 'Pasta', 'ingredientes' => ['Pasta fresca', 'Lomo fino o camarones', 'Salsa rosada', 'Crema', 'Tomate']],
            ['nombre' => 'Tenderloin Mushroom Sauce', 'descripcion' => 'Lomo fino con salsa de champiñones.', 'precio' => 8500, 'imagen' => 'assets/img/PastaLomitoCamaronesBlanca.webp', 'categoria' => 'Pasta', 'ingredientes' => ['Pasta fresca', 'Lomo fino', 'Salsa de champiñones', 'Crema', 'Ajo']],
            ['nombre' => 'Chicken Pesto Pistachio', 'descripcion' => 'Pollo con pesto y pistacho.', 'precio' => 8500, 'imagen' => 'assets/img/logo-rooster.webp', 'categoria' => 'Pasta', 'ingredientes' => ['Pasta fresca', 'Pollo grillé', 'Pesto genovés', 'Pistachos', 'Parmesano']],
            ['nombre' => 'Garlic Chili Chicken', 'descripcion' => 'Pollo al ajo y chili.', 'precio' => 8500, 'imagen' => 'assets/img/logo-rooster.webp', 'categoria' => 'Pasta', 'ingredientes' => ['Pasta fresca', 'Pollo', 'Ajo picado', 'Chili flakes', 'Aceite de oliva']],
            ['nombre' => 'Arme su Pasta', 'descripcion' => 'Spaghetti/Fettuccine/Penne + Tomato/White/Pesto + Chicken/Beef/Primavera', 'precio' => 8500, 'imagen' => 'assets/img/logo-rooster.webp', 'categoria' => 'Pasta', 'ingredientes' => ['Spaghetti, Fettuccine o Penne', 'Salsa: Tomate, Blanca o Pesto', 'Proteína: Pollo, Res o Primavera']],

            // === BEBIDAS ===
            ['nombre' => 'Natural Smoothies', 'descripcion' => 'Batidos naturales de fruta de temporada.', 'precio' => 2000, 'imagen' => 'assets/img/NaturalSmoothies.webp', 'categoria' => 'Bebida', 'ingredientes' => null],
            ['nombre' => 'Pop Soda', 'descripcion' => 'Refrescos variados.', 'precio' => 1500, 'imagen' => 'assets/img/PopSoda.webp', 'categoria' => 'Bebida', 'ingredientes' => null],
            ['nombre' => 'Premium Beers', 'descripcion' => 'Selección de cervezas importadas.', 'precio' => 2300, 'imagen' => 'assets/img/PremiunBeer.webp', 'categoria' => 'Bebida', 'ingredientes' => null],
        ];

        foreach ($productos as $p) {
            Producto::create([
                'nombre' => $p['nombre'],
                'descripcion' => $p['descripcion'],
                'precio' => $p['precio'],
                'imagen' => $p['imagen'],
                'id_categoria' => $cat[$p['categoria']],
                'ingredientes' => $p['ingredientes'],
                'en_descuento' => false,
            ]);
        }
    }
}