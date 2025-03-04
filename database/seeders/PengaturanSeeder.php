<?php

namespace Database\Seeders;

use App\Models\Pengaturan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PengaturanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pengaturan::create([
            'name' => 'VokasiTera',
<<<<<<< HEAD
            'logo' => 'assets/img//bg/bg1-removebg-preview.png'
=======
            'logo' => 'assets/img/Logovokasi.png'
>>>>>>> cb0191d309aa5db057211c6eb8edc7a52fbf993b
        ]);
    }
}
