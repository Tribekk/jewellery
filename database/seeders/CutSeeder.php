<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cut_stones')->insert([
            'name' => 'Кв. Кушон',
            'uriName' => 'kushon-sq'
        ]);
        DB::table('cut_stones')->insert([
            'name' => 'Кушон',
            'uriName' => 'kushon'
        ]);
        DB::table('cut_stones')->insert([
            'name' => 'Овал',
            'uriName' => 'oval'
        ]);
        DB::table('cut_stones')->insert([
            'name' => 'Радиант',
            'uriName' => 'radiant'
        ]);
        DB::table('cut_stones')->insert([
            'name' => 'Груша',
            'uriName' => 'grusha'
        ]);
        DB::table('cut_stones')->insert([
            'name' => 'Ашер',
            'uriName' => 'asher'
        ]);
        DB::table('cut_stones')->insert([
            'name' => 'serdce',
            'uriName' => 'Сердце'
        ]);
        DB::table('cut_stones')->insert([
            'name' => 'Изумрудная',
            'uriName' => 'izumrudnaya'
        ]);
        DB::table('cut_stones')->insert([
            'name' => 'Круг',
            'uriName' => 'krug'
        ]);
        DB::table('cut_stones')->insert([
            'name' => 'Триллион',
            'uriName' => 'trillion'
        ]);
        DB::table('cut_stones')->insert([
            'name' => 'Кабошон',
            'uriName' => 'kaboshon'
        ]);
    }
}
