<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('stone_models')->insert([
            'name' => 'Уникальный зеленый сапфир 14.15 карат',
            'description' => 'Этот крупный камень - представитель благородного фантазийного сапфира, в котором одновременно сочетаются оттенки: голубой, зеленый. Под разными углами этот камень будет играть то в голубоватом, то в зеленоватом диапазоне цветов. Зеленый сапфир имеет хорошую чистоту и красивую форму кушона. Благодаря крупной массе - более 14 карат - этот экземпляр можно считать уникальным.',
            'mass' => 14.15,
            'color' => 'Сильный зелёный, Глубокий желтовато-зелёный',
            'purity' => 'визуально чистый',
            'ennoblement' => 'термообработка',
            'cut' => 'kushon',
            'height' => 13.66,
            'width' => 13.05,
            'length' => 8.24,
            'birth' => 'Шри-Ланка',
            'price' => 1280000,
            'visible' => true,
            'article' => 'fs-2303-141',
            'preview_photo' => '01JB45QX9XS3KDWWXHTTDWVGPQ.jpg',
            'next_photo' => '01JB45QXA1G793BN6CJHGJQAA2.jfif',
            'color_index' => 'zelenyy',
            'type_index' => 'sapfir'
        ]);
    }
}
