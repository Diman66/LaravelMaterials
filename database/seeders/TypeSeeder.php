<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('types')->insert([
            ['name' => 'Книга' ],
            ['name' => 'Статья'],
            ['name' => 'Видео'],
            ['name' => 'Сайт/Блог'],
            ['name' => 'Подборка'],
            ['name' => 'Ключевые идеи книги']
        ]);
    }
}
