<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            ['name' => 'Internet Rumahan', 'description' => 'Paket internet broadband untuk kebutuhan rumah tangga.'],
            ['name' => 'Internet Bisnis', 'description' => 'Paket internet dengan kecepatan dan stabilitas untuk kantor/usaha.'],
            ['name' => 'Instalasi Jaringan', 'description' => 'Pemasangan jaringan baru untuk rumah maupun bisnis.'],
            ['name' => 'Maintenance', 'description' => 'Pemeliharaan dan perbaikan jaringan secara berkala.'],
        ];

        foreach ($categories as $category) {
            Category::updateOrCreate(['name' => $category['name']], $category);
        }
    }
}
