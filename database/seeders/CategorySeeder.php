<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['name' => 'Деловые/Бизнес-процессы' ],
            ['name' => 'Деловые/Найм'],
            ['name' => 'Деловые/Реклама'],
            ['name' => 'Деловые/Управление бизнесом'],
            ['name' => 'Деловые/Управление людьми'],
            ['name' => 'Деловые/Управление проектами'],
            ['name' => 'Детские/Воспитание'],
            ['name' => 'Дизайн/Общее'],
            ['name' => 'Дизайн/Logo'],
            ['name' => 'Дизайн/Web дизайн'],
            ['name' => 'Разработка/PHP'],
            ['name' => 'Разработка/HTML и CSS'],
            ['name' => 'Разработка/Проектирование'],
        ]);
    }
}
