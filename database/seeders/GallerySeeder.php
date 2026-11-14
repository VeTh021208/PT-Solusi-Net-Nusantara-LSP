<?php

namespace Database\Seeders;

use App\Models\Gallery;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    public function run(): void
    {
        $items = [
            ['title' => 'Tim Teknisi di Lapangan', 'description' => 'Proses instalasi jaringan di lokasi pelanggan.'],
            ['title' => 'Pemasangan Kabel Fiber', 'description' => 'Pemasangan kabel fiber optic untuk layanan broadband.'],
            ['title' => 'Maintenance Rutin', 'description' => 'Pengecekan perangkat jaringan secara berkala.'],
        ];

        foreach ($items as $item) {
            Gallery::firstOrCreate(['title' => $item['title']], $item + ['image' => null]);
        }
    }
}
