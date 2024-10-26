<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('menus')->insert([
            'name' => 'Каталог камней',
            'href' => '/stone/',
            'class' => 'menu',
        ]);
        DB::table('menus')->insert([
            'name' => 'Камни и украшения',
            'href' => '/stone-and-decorations/',
            'class' => 'menu',
        ]);
        DB::table('menus')->insert([
            'name' => 'Каталог ювелирных изделий',
            'href' => '/catalog-jeweller/',
            'class' => 'menu',
        ]);
        DB::table('menus')->insert([
            'name' => 'О нас',
            'href' => '/about/',
            'class' => 'menu',
        ]);
        DB::table('menus')->insert([
            'name' => 'Блог',
            'href' => '/blog/',
            'class' => 'menu',
        ]);
        DB::table('menus')->insert([
            'name' => 'Энциклопедия',
            'href' => '/encyclopedia/',
            'class' => 'menu',
        ]);
    }
}
