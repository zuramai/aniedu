<?php

namespace Database\Seeders;

use App\Models\ShopItem;
use Illuminate\Database\Seeder;

class ShopItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ShopItem::insert([
            [
                'name' => 'Nyawa',
                'max_buy' => 2,
                'price' => 200
            ],
            [
                'name' => '30s Time',
                'max_buy' => 100,
                'price' => 100
            ],
            [
                'name' => 'Avatar 1',
                'max_buy' => 1,
                'price' => 500
            ],
            [
                'name' => 'Avatar 2',
                'max_buy' => 1,
                'price' => 500
            ],
            [
                'name' => 'Avatar 3',
                'max_buy' => 1,
                'price' => 500
            ],
            [
                'name' => 'Pack 1 Sticker WA',
                'max_buy' => 1,
                'price' => 1000
            ],
        ]);
    }
}
