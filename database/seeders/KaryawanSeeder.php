<?php

namespace Database\Seeders;

use App\Models\Karyawan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = date('y-m-d H:i:s');
        Karyawan::insert([
            [
                'nama_karyawan' => 'Ratna',
                'nomor_hp' => '081099087631',
                'alamat' => 'Bandung',
                'created_at'=> $now, 'updated_at'=> $now
            ],
            [
                'nama_karyawan' => 'Dodi',
                'nomor_hp' => '083290192812',
                'alamat' => 'Bogor',
                'created_at'=> $now, 'updated_at'=> $now
            ],
        ]);
    }
}
