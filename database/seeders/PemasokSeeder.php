<?php

namespace Database\Seeders;
use App\Models\Pemasok;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PemasokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = date('y-m-d H:i:s');
        pemasok::insert([
            [
                'nama_pemasok' => 'CV Jayagu',
                'nama_kontak' => 'Mba Ina',
                'nomor_hp' => '080098394823',
                'alamat' => 'Banjarbaru',
                'created_at'=> $now, 'updated_at'=> $now
            ],
            [
                'nama_pemasok' => 'CV Kuku',
                'nama_kontak' => 'Mba Kia',
                'nomor_hp' => '080098394829',
                'alamat' => 'Banjarmasin',
                'created_at'=> $now, 'updated_at'=> $now
            ],
        ]);
    }
}
