<?php

namespace Database\Seeders;

use App\Models\BarangMasuk;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BarangMasukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $now = date('Y-m-d H:i:s');
        BarangMasuk::insert([
            [
                'tanggal' => '2021-02-01',
                'sumber_dana' => 'Penganggaran',
                'pemasok_id' => 1,
                'karyawan_id' => 1,
                'created_at' => $now, 'updated_at' => $now
            ],
            [
                'tanggal' => '2021-02-08',
                'sumber_dana' => 'Hibah',
                'pemasok_id' => 2,
                'karyawan_id' => 1,
                'created_at' => $now, 'updated_at' => $now
            ],
            [
                'tanggal' => '2021-11-22',
                'sumber_dana' => 'Hibah',
                'pemasok_id' => 1,
                'karyawan_id' => 2,
                'created_at' => $now, 'updated_at' => $now
            ],
            [
                'tanggal' => '2024-01-13',
                'sumber_dana' => 'Hibah',
                'pemasok_id' => 2,
                'karyawan_id' => 2,
                'created_at' => $now, 'updated_at' => $now
            ],
        ]);
    }
}
