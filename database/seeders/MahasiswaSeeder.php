<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'nim' => 20102113,
                'nama' => 'Panca Wibawa',
                'email' => '20102113@ittelkom-pwt.ac.id',
                'no_hp' => '089530226331',
                'ipk' => 3.95,
            ],
            [
                'nim' => 20102114,
                'nama' => 'Nabila Asshafa Putri',
                'email' => '20102114@ittelkom-pwt.ac.id',
                'no_hp' => '085709910669',
                'ipk' => 3.80,
            ],
            [
                'nim' => 20102115,
                'nama' => 'Rizky Kurniawan',
                'email' => '20102115@ittelkom-pwt.ac.id',
                'no_hp' => '085123456789',
                'ipk' => 3.70,
            ],
            [
                'nim' => 20102116,
                'nama' => 'Dinda Permata',
                'email' => '20102116@ittelkom-pwt.ac.id',
                'no_hp' => '081234567890',
                'ipk' => 3.85,
            ],
            [
                'nim' => 20102117,
                'nama' => 'Budi Santoso',
                'email' => '20102117@ittelkom-pwt.ac.id',
                'no_hp' => '087654321098',
                'ipk' => 3.75,
            ],
            [
                'nim' => 20102118,
                'nama' => 'Anisa Putri',
                'email' => '20102118@ittelkom-pwt.ac.id',
                'no_hp' => '089876543210',
                'ipk' => 3.90,
            ],
            [
                'nim' => 20102119,
                'nama' => 'Andi Wijaya',
                'email' => '20102119@ittelkom-pwt.ac.id',
                'no_hp' => '081234567890',
                'ipk' => 3.65,
            ],
            [
                'nim' => 20102120,
                'nama' => 'Siti Aminah',
                'email' => '20102120@ittelkom-pwt.ac.id',
                'no_hp' => '087654321098',
                'ipk' => 3.80,
            ],
            [
                'nim' => 20102121,
                'nama' => 'Eko Prasetyo',
                'email' => '20102121@ittelkom-pwt.ac.id',
                'no_hp' => '089876543210',
                'ipk' => 3.75,
            ],
            [
                'nim' => 20102122,
                'nama' => 'Rina Fitriani',
                'email' => '20102122@ittelkom-pwt.ac.id',
                'no_hp' => '081234567890',
                'ipk' => 3.85,
            ],
        ];

        foreach ($data as $key => $d) {
            Mahasiswa::create($d);
        }
    }
}
