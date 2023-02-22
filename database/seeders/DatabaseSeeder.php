<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $data = [
            [
                'name' => 'Kamar Mandi',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Kolam Renang',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Dapur',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Balkon',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Free Water',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Ruang Tamu',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'AC',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Water Heater',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];
        Tag::insert($data);
    }
}
