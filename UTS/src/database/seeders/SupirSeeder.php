<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Supir;

class SupirSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Supir::insert([
            [
                'nama' => 'Joko Santoso',
                'nik' => '3201010101010001',
                'no_sim' => 'SIM1234567890',
                'jenis_sim' => 'A',
                'alamat' => 'Jl. Merdeka No.1',
                'no_hp' => '081234567890',
                'status' => 'Aktif',
                'tanggal_bergabung' => '2022-01-01',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Budi Hermawan',
                'nik' => '3201010101010002',
                'no_sim' => 'SIM1234567891',
                'jenis_sim' => 'B1',
                'alamat' => 'Jl. Sudirman No.2',
                'no_hp' => '082345678901',
                'status' => 'Aktif',
                'tanggal_bergabung' => '2022-06-15',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
