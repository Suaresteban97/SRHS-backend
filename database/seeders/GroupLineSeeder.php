<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GroupLineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ["group_id" => 1, "line_id" => 1],
            ["group_id" => 2, "line_id" => 1],
            ["group_id" => 3, "line_id" => 1],
            ["group_id" => 4, "line_id" => 1],
            ["group_id" => 5, "line_id" => 1],
            ["group_id" => 6, "line_id" => 1],
            ["group_id" => 6, "line_id" => 2],
            ["group_id" => 6, "line_id" => 3],
            ["group_id" => 7, "line_id" => 2],
            ["group_id" => 8, "line_id" => 2],
            ["group_id" => 9, "line_id" => 1],
            ["group_id" => 9, "line_id" => 2],
            ["group_id" => 9, "line_id" => 3],
            ["group_id" => 10, "line_id" => 3],
        ];

        DB::table("groups_lines")->insert($data);
    }
}
