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
            ["name" => "Autorizaciones", "line_id" => 1],
            ["name" => "Alcantarillado", "line_id" => 1],
            ["name" => "Aguas subterráneas", "line_id" => 1],
            ["name" => "Monitoreo", "line_id" => 1],
            ["name" => "POC", "line_id" => 1],
            ["name" => "Jurídico", "line_id" => 1],
            ["name" => "Suelos contaminados", "line_id" => 2],
            ["name" => "Minería", "line_id" => 2],
        ];

        DB::table("groups")->insert($data);
    }
}
