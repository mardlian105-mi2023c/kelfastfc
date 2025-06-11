<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\PostCategory;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categoryIds = PostCategory::pluck('id', 'name')->toArray();

        $posts = [
            // Latihan
            [
                'title' => 'Jadwal Latihan Rutin Mingguan',
                'content' => 'Latihan futsal rutin akan diadakan setiap hari Selasa dan Kamis pukul 17.00 di GOR UNESA.',
                'post_category_id' => $categoryIds['Latihan'],
                'image' => 'images/latihan1.jpg',
            ],
            [
                'title' => 'Latihan Fisik untuk Peningkatan Stamina',
                'content' => 'Tim Kelfast akan fokus pada latihan fisik minggu ini untuk meningkatkan daya tahan.',
                'post_category_id' => $categoryIds['Latihan'],
                'image' => 'images/latihan2.jpg',
            ],

            // Event
            [
                'title' => 'Turnamen Antar Fakultas 2025',
                'content' => 'Kelfast akan mengikuti turnamen antar fakultas pada tanggal 25 Juni 2025. Ayo dukung tim kita!',
                'post_category_id' => $categoryIds['Event'],
                'image' => 'images/event1.jpg',
            ],
            [
                'title' => 'Friendly Match dengan Tim Teknik',
                'content' => 'Akan diadakan pertandingan persahabatan dengan tim Teknik Informatika minggu depan.',
                'post_category_id' => $categoryIds['Event'],
                'image' => 'images/event2.jpg',
            ],

            // Pengumuman
            [
                'title' => 'Pemilihan Kapten Baru',
                'content' => 'Voting pemilihan kapten baru akan dibuka minggu ini. Semua anggota diwajibkan ikut.',
                'post_category_id' => $categoryIds['Pengumuman'],
                'image' => 'images/pengumuman1.jpg',
            ],
            [
                'title' => 'Perubahan Jadwal Latihan',
                'content' => 'Karena adanya kegiatan kampus, latihan hari Kamis diganti menjadi hari Jumat.',
                'post_category_id' => $categoryIds['Pengumuman'],
                'image' => 'images/pengumuman2.jpg',
            ],

            // Prestasi
            [
                'title' => 'Juara 1 Turnamen Futsal UNESA 2025',
                'content' => 'Tim Kelfast berhasil meraih juara 1 pada Turnamen Futsal UNESA setelah mengalahkan Tim Ekonomi.',
                'post_category_id' => $categoryIds['Prestasi'],
                'image' => 'images/prestasi1.jpg',
            ],
            [
                'title' => 'Top Skor Turnamen: Aldi Saputra',
                'content' => 'Selamat kepada Aldi Saputra yang meraih gelar top skor dengan total 12 gol.',
                'post_category_id' => $categoryIds['Prestasi'],
                'image' => 'images/prestasi2.jpg',
            ],
        ];

        while (count($posts) < 15) {
            $posts[] = [
                'title' => 'Info Tambahan Kegiatan Futsal',
                'content' => 'Pantau terus informasi kegiatan futsal Kelfast di website resmi kami.',
                'post_category_id' => $categoryIds['Pengumuman'],
                'image' => 'images/default.jpg',
            ];
        }

        foreach ($posts as $post) {
            Post::create($post);
        }
    }
}