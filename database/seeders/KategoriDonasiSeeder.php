<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\KategoriDonasi;

class KategoriDonasiSeeder extends Seeder
{
    public function run(): void
    {
        KategoriDonasi::create(['nama_kategori' => 'Pendidikan']);
        KategoriDonasi::create(['nama_kategori' => 'Kesehatan']);
        KategoriDonasi::create(['nama_kategori' => 'Bencana Alam']);
        KategoriDonasi::create(['nama_kategori' => 'Sosial']);
    }
}