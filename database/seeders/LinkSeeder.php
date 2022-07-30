<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('links')->insert([
            [
                'material_id' => '1',
                'name' => 'Электронная версия на lites',
                'link' => 'https://www.litres.ru/'
            ],
            [
                'material_id' => '1',
                'name' => 'Электронная версия на lites',
                'link' => 'https://www.litres.ru/'
            ]
        ]);
    }
}
