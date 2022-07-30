<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('materials')->insert([
            [
                'name' => 'Путь джедая',
                'autor' => 'Максим Дорофеев',
                'type_id' => '1',
                'category_id' => '1'
            ],
            [
                'name' => 'Полное руководство по Yii 2.0',
                'autor' => 'Александр Макаров',
                'type_id' => '2',
                'category_id' => '2'
            ]
        ]);
    }
}
