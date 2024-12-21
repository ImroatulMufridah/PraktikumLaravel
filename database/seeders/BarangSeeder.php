<?php

namespace Database\Seeders;
use App\Models\Barang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = date('y-m-d H:i:s');
        barang::insert([
            [
                'nama_barang' => 'Kursi Lipat',
                'merk' => 'Lipatku',
                'tipe' => 'Kursi Lipat tipe c',
                'satuan' => 'Unit',
                'created_at'=> $now, 'updated_at'=> $now
            ],
            [
                'nama_barang' => 'Kipas Angin',
                'merk' => 'woosh',
                'tipe' => 'Kipas angin dinding',
                'satuan' => 'Unit',
                'created_at'=> $now, 'updated_at'=> $now
            ],
        ]);
    }
}
