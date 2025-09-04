<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ["id" => 1, "name" => "Hídrico"],
            ["id" => 2, "name" => "Suelos"],
            ["id" => 3, "name" => "Respel"],
        ];

        DB::table("group_lines")->insert($data);
    }
}
