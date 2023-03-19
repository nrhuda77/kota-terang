<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\JenisBantuan;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Kemungkinan;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create([
            'name' => 'Nur Huda',

            'email' => 'nrhuda77@gmail.com',
            'password' => bcrypt('password')
        ]);

        JenisBantuan::create([
            'jenis_bantuan' => 'sosial tunai',
        ]);
        JenisBantuan::create([
            'jenis_bantuan' => 'pangan non tunai',
        ]);

        JenisBantuan::create([
            'jenis_bantuan' => 'pendidikan',
        ]);

        JenisBantuan::create([
            'jenis_bantuan' => ' kesehatan',
        ]);

        JenisBantuan::create([
            'jenis_bantuan' => 'perumahan',
        ]);

        JenisBantuan::create([
            'jenis_bantuan' => 'modal usaha',
        ]);

        JenisBantuan::create([
            'jenis_bantuan' => 'pelatihan',
        ]);

        JenisBantuan::create([
            'jenis_bantuan' => 'urgent',
        ]);

        Kelurahan::factory(10)->create();

Kecamatan::factory(10)->create();

Kemungkinan::factory(10)->create();



    }

}
