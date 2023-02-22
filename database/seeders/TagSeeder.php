<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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
