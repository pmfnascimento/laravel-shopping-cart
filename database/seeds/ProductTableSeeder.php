<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new Product();
        $product->imagePath = 'https://canalhollywood.pt/wp-content/uploads/posters/images/hollywoodpt/poster/183362.jpg';
        $product->title = 'Harry Potter';
        $product->description = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus vitae illum molestiae';
        $product->price = 10;
        $product->save();

        $product = new Product();
        $product->imagePath = 'https://canalhollywood.pt/wp-content/uploads/posters/images/hollywoodpt/poster/183362.jpg';
        $product->title = 'Harry Potter';
        $product->description = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus vitae illum molestiae';
        $product->price = 10;
        $product->save();

        $product = new Product();
        $product->imagePath = 'https://canalhollywood.pt/wp-content/uploads/posters/images/hollywoodpt/poster/183362.jpg';
        $product->title = 'Harry Potter';
        $product->description = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus vitae illum molestiae';
        $product->price = 10;
        $product->save();

        $product = new Product();
        $product->imagePath = 'https://canalhollywood.pt/wp-content/uploads/posters/images/hollywoodpt/poster/183362.jpg';
        $product->title = 'Harry Potter';
        $product->description = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus vitae illum molestiae';
        $product->price = 10;
        $product->save();

        $product = new Product();
        $product->imagePath = 'https://canalhollywood.pt/wp-content/uploads/posters/images/hollywoodpt/poster/183362.jpg';
        $product->title = 'Harry Potter';
        $product->description = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus vitae illum molestiae';
        $product->price = 10;
        $product->save();
    }
}
