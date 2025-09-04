<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            CitySeeder::class,
            LocationSeeder::class,
            //UpzSeeder::class,
            DocumentTypeSeeder::class,
            LineSeeder::class,
            GroupSeeder::class,
            GroupLineSeeder::class,
        ]);
    }
}
