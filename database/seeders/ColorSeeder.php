<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('color_stones')->insert([
            'name' => 'Красный',
            'uriName' => 'krasnyy'
        ]);
        DB::table('color_stones')->insert([
            'name' => 'Оранжевый',
            'uriName' => 'oranzhevyy'
        ]);
        DB::table('color_stones')->insert([
            'name' => 'Желтый',
            'uriName' => 'zheltyy'
        ]);
        DB::table('color_stones')->insert([
            'name' => 'Зеленый',
            'uriName' => 'zelenyy'
        ]);
        DB::table('color_stones')->insert([
            'name' => 'Голубой',
            'uriName' => 'goluboy'
        ]);
        DB::table('color_stones')->insert([
            'name' => 'Синий',
            'uriName' => 'siniy'
        ]);
        DB::table('color_stones')->insert([
            'name' => 'Фиолетовый',
            'uriName' => 'fioletovyy'
        ]);
        DB::table('color_stones')->insert([
            'name' => 'Розовый',
            'uriName' => 'rozovyy'
        ]);
        DB::table('color_stones')->insert([
            'name' => 'Бесцветный белый',
            'uriName' => 'belyy'
        ]);
        DB::table('color_stones')->insert([
            'name' => 'Черный',
            'uriName' => 'chernyy'
        ]);
        DB::table('color_stones')->insert([
            'name' => 'Серый',
            'uriName' => 'seryy'
        ]);
        DB::table('color_stones')->insert([
            'name' => 'Коричневый',
            'uriName' => 'korichnevyy'
        ]);
        DB::table('color_stones')->insert([
            'name' => 'Многоцветный',
            'uriName' => 'mnogocvetnyy'
        ]);
        DB::table('color_stones')->insert([
            'name' => 'Эффект смены цвета',
            'uriName' => 'smena-cveta'
        ]);
    }
}
