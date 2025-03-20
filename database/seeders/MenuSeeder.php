<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Menu::create([
            'menu_name' => 'Spaghetti Carbonara',
            'menu_price' => '12.99',
            'menu_image' => 'https://source.unsplash.com/featured/?spaghetti',
            'menu_stock' => 50,
            'menu_status' => 'available',
            'created_id' => '1',
            'updated_id' => '1',
        ]);

        Menu::create([
            'menu_name' => 'Margherita Pizza',
            'menu_price' => '10.99',
            'menu_image' => 'https://source.unsplash.com/featured/?pizza',
            'menu_stock' => 30,
            'menu_status' => 'available',
            'created_id' => '1',
            'updated_id' => '1',
        ]);

        Menu::create([
            'menu_name' => 'Caesar Salad',
            'menu_price' => '8.99',
            'menu_image' => 'https://source.unsplash.com/featured/?salad',
            'menu_stock' => 20,
            'menu_status' => 'available',
            'created_id' => '1',
            'updated_id' => '1',
        ]);
    }
}
