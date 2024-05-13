<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PilihJenisModel;

class PilihJenisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data =[
            [
                'nama_jenis' => 'Bangun Baru',
                'gambar_jenis' => 'D:\SEMESTER 8 SKRIPSI\Tukang-server\tukang-server\public\img_pilihJenis\OIP.jpeg',
            ]
        ];

        // Insert data ke tabel
        PilihJenisModel::insert($data);
    }
}
