<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $chupaImage = \App\Miosk\Manager\ImageManager::copyImage(storage_path() . '/seed_images/chupa_chup.png');
        $colaImage = \App\Miosk\Manager\ImageManager::copyImage(storage_path() . '/seed_images/cola.png');
        $fantaImage = \App\Miosk\Manager\ImageManager::copyImage(storage_path() . '/seed_images/fanta.png');
        $knoppersImage = \App\Miosk\Manager\ImageManager::copyImage(storage_path() . '/seed_images/knoppers.png');
        $lemonImage = \App\Miosk\Manager\ImageManager::copyImage(storage_path() . '/seed_images/lemon.png');
        $ovoImage = \App\Miosk\Manager\ImageManager::copyImage(storage_path() . '/seed_images/ovo.png');
        $peachImage = \App\Miosk\Manager\ImageManager::copyImage(storage_path() . '/seed_images/peach.png');
        $rivellaImage = \App\Miosk\Manager\ImageManager::copyImage(storage_path() . '/seed_images/rivella.png');
        $rivellaRhabarberImage = \App\Miosk\Manager\ImageManager::copyImage(storage_path() . '/seed_images/rivella_rhabarber.png');
        $snickersImage = \App\Miosk\Manager\ImageManager::copyImage(storage_path() . '/seed_images/snickers.png');
        $spitzbubImage = \App\Miosk\Manager\ImageManager::copyImage(storage_path() . '/seed_images/spitzbub.png');
        $trojkaEnergyImage = \App\Miosk\Manager\ImageManager::copyImage(storage_path() . '/seed_images/trojka_energy.png');

        DB::table('products')->insert([
            'name' => "Nestea Lemon",
            'description' => 'Icea Tea Lemon 0.5l Flasche',
            'price' => 2.5,
            'sale_price' => 2,
            'image_path' => $lemonImage,
            'quantity' => 1
        ]);
        DB::table('products')->insert([
            'name' => "Nestea Peach",
            'description' => 'Icea Tea Peach 0.5l Flasche',
            'price' => 2.5,
            'sale_price' => 2,
            'image_path' => $peachImage,
            'quantity' => 1
        ]);
        DB::table('products')->insert([
            'name' => "Coca Cola",
            'description' => 'Coca Cola 0.5l Flasche',
            'price' => 2.5,
            'sale_price' => null,
            'image_path' => $colaImage,
            'quantity' => 0
        ]);
        DB::table('products')->insert([
            'name' => "Fanta",
            'description' => 'Fanta 0.5l Flasche',
            'price' => 2.5,
            'sale_price' => null,
            'image_path' => $fantaImage,
            'quantity' => 1
        ]);
        DB::table('products')->insert([
            'name' => "Rivella",
            'description' => 'Rivella 0.5l Flasche',
            'price' => 2.5,
            'sale_price' => null,
            'image_path' => $rivellaImage,
            'quantity' => 1
        ]);
        DB::table('products')->insert([
            'name' => "Rivella Rhabarber",
            'description' => 'Rivella Rhabarber 0.5l Flasche',
            'price' => 2.5,
            'sale_price' => null,
            'image_path' => $rivellaRhabarberImage,
            'quantity' => 1
        ]);
        DB::table('products')->insert([
            'name' => "Trojka Energy",
            'description' => 'Trojka Energy Drink 0.5l Dose',
            'price' => 3,
            'sale_price' => null,
            'image_path' => $trojkaEnergyImage,
            'quantity' => 0
        ]);
        DB::table('products')->insert([
            'name' => "Ovo Drink",
            'description' => 'Ovo Drink 0.5l Flasche',
            'price' => 3.5,
            'sale_price' => null,
            'image_path' => $ovoImage,
            'quantity' => 1
        ]);
        DB::table('products')->insert([
            'name' => "Spitzbub",
            'description' => 'Berger Spitzbub',
            'price' => 2.5,
            'sale_price' => null,
            'image_path' => $spitzbubImage,
            'quantity' => 1
        ]);
        DB::table('products')->insert([
            'name' => "Chupa Chups",
            'description' => 'Chupa Chups in den Geschmäckern Cola, Kirsche & Orange',
            'price' => 0.5,
            'sale_price' => null,
            'image_path' => $chupaImage,
            'quantity' => 1
        ]);
        DB::table('products')->insert([
            'name' => "Snickers",
            'description' => '50g Snickers Riegel',
            'price' => 1.5,
            'sale_price' => null,
            'image_path' => $snickersImage,
            'quantity' => 1
        ]);
        DB::table('products')->insert([
            'name' => "Knoppers",
            'description' => '50g Crispy Knoppers',
            'price' => 2.5,
            'sale_price' => null,
            'image_path' => $knoppersImage,
            'quantity' => 1
        ]);
    }
}