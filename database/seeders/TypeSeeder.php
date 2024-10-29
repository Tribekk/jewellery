<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('type_stones')->insert([
            'name' => 'Сапфир',
            'uriName' => 'sapfir'
        ]);
        DB::table('type_stones')->insert([
            'name' => 'Турмалин',
            'uriName' => 'turmalin'
        ]);
        DB::table('type_stones')->insert([
            'name' => 'Шпинель',
            'uriName' => 'shpinel'
        ]);
    }
}
