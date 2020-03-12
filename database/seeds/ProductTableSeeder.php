<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = new \App\Product([
            'imagePath' => 'https://ewedit.files.wordpress.com/2016/09/hpsorcstone.jpg?w=405',
            'title' => 'Haary Porter 1',
            'description' => 'Super cool - at least as a child',
            'price' => 12
        ]);
        $products->save();

        $products = new \App\Product([
            'imagePath' => 'https://ewedit.files.wordpress.com/2016/09/hpsorcstone.jpg?w=405',
            'title' => 'Haary Porter 2',
            'description' => 'Super cool - at least as a child',
            'price' => 10
        ]);
        $products->save();

        $products = new \App\Product([
            'imagePath' => 'https://ewedit.files.wordpress.com/2016/09/hpsorcstone.jpg?w=405',
            'title' => 'Haary Porter 3',
            'description' => 'Super cool - at least as a child',
            'price' => 8
        ]);
        $products->save();

        $products = new \App\Product([
            'imagePath' => 'https://ewedit.files.wordpress.com/2016/09/hpsorcstone.jpg?w=405',
            'title' => 'Haary Porter 4',
            'description' => 'Super cool - at least as a child',
            'price' => 6
        ]);
        $products->save();

        $products = new \App\Product([
            'imagePath' => 'https://ewedit.files.wordpress.com/2016/09/hpsorcstone.jpg?w=405',
            'title' => 'Haary Porter 5',
            'description' => 'Super cool - at least as a child',
            'price' => 4
        ]);
        $products->save();
    }
}
