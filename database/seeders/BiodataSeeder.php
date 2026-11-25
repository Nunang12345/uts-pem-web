<?php

namespace Database\Seeders;

use App\Models\Biodata;
use Illuminate\Database\Seeder;

class BiodataSeeder extends Seeder
{
    public function run(): void
    {
        Biodata::create([
            'nama' => 'Lalu Nunang Satriawan Abdul Manaf',
            'nim' => '2201010209',
            'peran' => 'master',
            'deskripsi' => '2201010209 merupakan master dari uts ini dengan tugas membuat front-end dan mengirimkannya ke grup',
            'foto' => 'biodata/luffy.png',
        ]);

        Biodata::create([
            'nama' => 'Andi Agus Salim',
            'nim' => '12.11.6018',
            'peran' => 'pegawai',
            'deskripsi' => 'dengan NIM 12.11.6018 merupakan pegawai dan mempunyai tugas mengerjakan back-end pada UTS ini',
            'foto' => 'biodata/zoro.webp',
        ]);
    }
}
