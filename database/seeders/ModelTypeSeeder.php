<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModelTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Model_types')->insert([
            [ 'name' => 'Деревья и кустарники'],
            [ 'name' => 'Газоны и клумбы'],
            [ 'name' => 'Площадки для отдыха'],
            [ 'name' => 'Малые архитектурные формы'],
            [ 'name' => 'Инженерные коммуникации'],
            [ 'name' => 'Детские площадки'],
            [ 'name' => 'Спортивные площадки'],
            [ 'name' => 'Заборы и ограждения'],
            [ 'name' => 'Остановки'],
            [ 'name' => 'Дворы и придомовые территории'],
            [ 'name' => 'Памятники'],
            [ 'name' => 'Контейнерные площадки'],
            [ 'name' => 'Элементы освещения'],
        ]);
    }
}
