<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ["id" => 1, "name" => "Autorizaciones"],
            ["id" => 2, "name" => "Alcantarillado"],
            ["id" => 3, "name" => "Aguas subterráneas"],
            ["id" => 4, "name" => "Monitoreo"],
            ["id" => 5, "name" => "POC"],
            ["id" => 6, "name" => "Jurídico"],
            ["id" => 7, "name" => "Suelos contaminados"],
            ["id" => 8, "name" => "Minería"],
            ["id" => 9, "name" => "Hidrocarburos"],
            ["id" => 10, "name" => "Respel"],
        ];

        DB::table("groups")->insert($data);
    }
}
