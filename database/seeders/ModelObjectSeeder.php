<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModelObjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Model_objects')->insert([
            [ 'model_type_id'=> 1,'name' => 'Дерево 1'],
            [ 'model_type_id'=> 1,'name' => 'Дерево 2'],
            [ 'model_type_id'=> 1,'name' => 'Кустарник 1'],
            [ 'model_type_id'=> 1,'name' => 'Кустарник 2'],
            [ 'model_type_id'=> 2,'name' => 'Газон 1'],
            [ 'model_type_id'=> 2,'name' => 'Газон 2'],
            [ 'model_type_id'=> 2,'name' => 'Клумба 1'],
            [ 'model_type_id'=> 2,'name' => 'Клумба 2'],
            [ 'model_type_id'=> 3,'name' => 'Площадка для отдыха 1'],
            [ 'model_type_id'=> 3,'name' => 'Площадка для отдыха 2'],
            [ 'model_type_id'=> 3,'name' => 'Площадка для отдыха 3'],
            [ 'model_type_id'=> 4,'name' => 'Малая архитектурная форма 1'],
            [ 'model_type_id'=> 4,'name' => 'Малая архитектурная форма 2'],
            [ 'model_type_id'=> 5,'name' => 'Инженерная коммуникация 1'],
            [ 'model_type_id'=> 5,'name' => 'Инженерная коммуникация 2'],
            [ 'model_type_id'=> 5,'name' => 'Инженерная коммуникация 3'],
            [ 'model_type_id'=> 6,'name' => 'Детская площадка 1'],
            [ 'model_type_id'=> 6,'name' => 'Детская площадка 2'],
            [ 'model_type_id'=> 6,'name' => 'Детская площадка 3'],
            [ 'model_type_id'=> 7,'name' => 'Спортивная площадка 1'],
            [ 'model_type_id'=> 7,'name' => 'Спортивная площадка 2'],
            [ 'model_type_id'=> 8,'name' => 'Забор 1'],
            [ 'model_type_id'=> 8,'name' => 'Забор 2'],
            [ 'model_type_id'=> 8,'name' => 'ограждение 1'],
            [ 'model_type_id'=> 8,'name' => 'ограждение 2'],
            [ 'model_type_id'=> 9,'name' => 'Остановка 1'],
            [ 'model_type_id'=> 9,'name' => 'Остановка 2'],
            [ 'model_type_id'=> 9,'name' => 'Остановка 3'],
            [ 'model_type_id'=> 10,'name' => 'Двор 1'],
            [ 'model_type_id'=> 10,'name' => 'Двор 2'],
            [ 'model_type_id'=> 10,'name' => 'Придомовая территория 1'],
            [ 'model_type_id'=> 10,'name' => 'Придомовая территория 2'],
            [ 'model_type_id'=> 11,'name' => 'Памятник 1'],
            [ 'model_type_id'=> 11,'name' => 'Памятник 2'],
            [ 'model_type_id'=> 11,'name' => 'Памятник 3'],
            [ 'model_type_id'=> 12,'name' => 'Контейнерная площадка 1'],
            [ 'model_type_id'=> 12,'name' => 'Контейнерная площадка 2'],
            [ 'model_type_id'=> 12,'name' => 'Контейнерная площадка 3'],
            [ 'model_type_id'=> 13,'name' => 'Элемент освещения 1'],
            [ 'model_type_id'=> 13,'name' => 'Элемент освещения 2'],
            [ 'model_type_id'=> 13,'name' => 'Элемент освещения 3'],
        ]);
    }
}
