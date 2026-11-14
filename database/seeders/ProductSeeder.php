<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['category' => 'Internet Rumahan', 'name' => 'Broadband Home 20 Mbps', 'price' => 199000, 'unit' => 'bulan', 'image' => 'products/broadband-20.svg', 'description' => 'Paket internet rumahan stabil untuk kebutuhan browsing, streaming, dan kerja dari rumah.'],
            ['category' => 'Internet Rumahan', 'name' => 'Broadband Home 50 Mbps', 'price' => 299000, 'unit' => 'bulan', 'image' => 'products/broadband-50.svg', 'description' => 'Kecepatan lebih tinggi untuk keluarga dengan banyak perangkat terhubung.'],
            ['category' => 'Internet Bisnis', 'name' => 'Internet Bisnis 100 Mbps', 'price' => 799000, 'unit' => 'bulan', 'image' => 'products/bisnis-100.svg', 'description' => 'Paket internet khusus kantor dan usaha dengan dukungan prioritas.'],
            ['category' => 'Instalasi Jaringan', 'name' => 'Instalasi Jaringan Baru', 'price' => 350000, 'unit' => 'instalasi', 'image' => 'products/instalasi.svg', 'description' => 'Pemasangan kabel dan perangkat jaringan baru oleh teknisi berpengalaman.'],
            ['category' => 'Maintenance', 'name' => 'Paket Maintenance Bulanan', 'price' => 150000, 'unit' => 'bulan', 'image' => 'products/maintenance.svg', 'description' => 'Pengecekan dan perawatan rutin jaringan agar tetap optimal.'],
            ['category' => 'Maintenance', 'name' => 'Perbaikan Gangguan Jaringan', 'price' => 100000, 'unit' => 'instalasi', 'image' => 'products/perbaikan.svg', 'description' => 'Penanganan cepat untuk gangguan koneksi internet di lokasi pelanggan.'],
        ];

        foreach ($data as $item) {
            $category = Category::where('name', $item['category'])->first();

            if (! $category) {
                continue;
            }

            Product::updateOrCreate(
                ['name' => $item['name']],
                [
                    'category_id' => $category->id,
                    'price' => $item['price'],
                    'unit' => $item['unit'],
                    'description' => $item['description'],
                    'is_featured' => true,
                    'image' => $item['image'],
                ]
            );
        }
    }
}
