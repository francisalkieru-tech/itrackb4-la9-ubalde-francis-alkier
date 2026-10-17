<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create(['name' => 'Piattos Cheese 85g', 'price' => 18, 'stock' => 8, 'category' => 'Snacks', 'is_available' => true, 
        'description' => 'Jack n Jill Piattos Cheese (85g) are thin, light, hexagon-shaped potato crisps']);
        
        Product::create(['name' => 'Argentina 150g', 'price' => 36, 'stock' => 40, 'category' => 'Canned Goods', 'is_available' => true,
        'description' => 'Argentina Corned Beef is deliciously flavorful, has meaty strands, and is packed with protein',]);
        
        Product::create(['name' => 'Pancit Canton', 'price' => 18, 'stock' => 35, 'category' => 'Instant Noodles', 'is_available' => true,
        'description' => 'Pancit Canton is a popular Filipino stir-fried noodle dish made from wheat-flour and egg flour stick noodles',]);
        
        Product::create(['name' => 'Coca-Cola 1.5L', 'price' => 75, 'stock' => 8, 'category' => 'Beverages', 'is_available' => true, 
        'description' => 'Classic, refreshing carbonated soft drink in a shareable 1.5-liter bottle']);
        
        Product::create(['name' => 'Red Horse 500ml', 'price' => 52, 'stock' => 10, 'category' => 'Alcoholic Beverages', 'is_available' => true,
        'description' => 'Extra strong Philippine beer with a robust, high-alcohol kick and a smooth, full-flavored taste']);
    }
}
