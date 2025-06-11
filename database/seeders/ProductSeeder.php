<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            [
                'name' => 'Jersey Kelfast Home 2024',
                'image' => 'https://source.unsplash.com/400x400/?jersey,soccer',
                'description' => 'Jersey resmi tim futsal Kelfast untuk laga kandang tahun 2024.',
                'price' => 200000,
                'product_category_id' => 1,
            ],
            [
                'name' => 'Jersey Kelfast Away 2024',
                'image' => 'https://source.unsplash.com/400x400/?jersey,football',
                'description' => 'Jersey tandang tim futsal Kelfast edisi 2024.',
                'price' => 200000,
                'product_category_id' => 1,
            ],
            [
                'name' => 'Training Kit Kelfast',
                'image' => 'https://source.unsplash.com/400x400/?sportswear,training',
                'description' => 'Training kit eksklusif untuk sesi latihan tim.',
                'price' => 180000,
                'product_category_id' => 1,
            ],
            [
                'name' => 'Sweater Kelfast Official',
                'image' => 'https://source.unsplash.com/400x400/?sweater,sport',
                'description' => 'Sweater hangat dengan logo Kelfast.',
                'price' => 220000,
                'product_category_id' => 1,
            ],
            [
                'name' => 'Topi Snapback Kelfast',
                'image' => 'https://source.unsplash.com/400x400/?cap,hat',
                'description' => 'Topi snapback bergaya modern dengan bordir logo tim.',
                'price' => 80000,
                'product_category_id' => 1,
            ],
            [
                'name' => 'Scarf Kelfast Fans',
                'image' => 'https://source.unsplash.com/400x400/?scarf,supporter',
                'description' => 'Scarf khusus untuk para fans Kelfast yang setia.',
                'price' => 60000,
                'product_category_id' => 1,
            ],
            [
                'name' => 'Kaos Fans Kelfast',
                'image' => 'https://source.unsplash.com/400x400/?tshirt,fan',
                'description' => 'Kaos kasual untuk para pendukung tim futsal Kelfast.',
                'price' => 100000,
                'product_category_id' => 1,
            ],
            [
                'name' => 'Water Bottle Kelfast',
                'image' => 'https://source.unsplash.com/400x400/?bottle,sport',
                'description' => 'Botol minum eksklusif tim futsal Kelfast.',
                'price' => 50000,
                'product_category_id' => 1,
            ],
            [
                'name' => 'Tas Ransel Kelfast',
                'image' => 'https://source.unsplash.com/400x400/?backpack,sport',
                'description' => 'Tas ransel praktis dan kuat berlogo Kelfast.',
                'price' => 150000,
                'product_category_id' => 1,
            ],
            [
                'name' => 'Gelang Karet Kelfast',
                'image' => 'https://source.unsplash.com/400x400/?bracelet',
                'description' => 'Gelang karet dengan warna khas Kelfast.',
                'price' => 20000,
                'product_category_id' => 1,
            ],
            [
                'name' => 'Kelfast Hoodie Limited',
                'image' => 'https://source.unsplash.com/400x400/?hoodie,sport',
                'description' => 'Hoodie terbatas dengan desain eksklusif Kelfast.',
                'price' => 250000,
                'product_category_id' => 1,
            ],
            [
                'name' => 'Kelfast Socks',
                'image' => 'https://source.unsplash.com/400x400/?socks,sport',
                'description' => 'Kaos kaki olahraga berkualitas tinggi dari Kelfast.',
                'price' => 30000,
                'product_category_id' => 1,
            ],
            [
                'name' => 'Kelfast Keychain',
                'image' => 'https://source.unsplash.com/400x400/?keychain,souvenir',
                'description' => 'Gantungan kunci dengan miniatur logo tim.',
                'price' => 15000,
                'product_category_id' => 1,
            ],
            [
                'name' => 'Kelfast Mini Ball',
                'image' => 'https://source.unsplash.com/400x400/?futsal,ball',
                'description' => 'Bola mini souvenir berlogo tim futsal Kelfast.',
                'price' => 60000,
                'product_category_id' => 1,
            ],
            [
                'name' => 'Sticker Pack Kelfast',
                'image' => 'https://source.unsplash.com/400x400/?sticker,logo',
                'description' => 'Paket stiker kreatif bertema Kelfast untuk fans.',
                'price' => 10000,
                'product_category_id' => 1,
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}