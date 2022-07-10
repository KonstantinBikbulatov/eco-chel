<?php

namespace App\Http\Controllers;

use App\Models\ModelObject;
use App\Models\ModelType;
use Illuminate\Http\Request;

class ModelObjectController extends Controller
{
    public function getModelObjects(){
        $objects = ModelObject::all();
        $types = ModelType::all();
        $nameTypes = [];
        echo 'Таблица с объектами' . '<br><br>';
        foreach ($types as $type){
            $nameTypes[$type->model_type_id] = $type->name;
        }
        foreach ($objects as $object){
            $type = $nameTypes[$object->model_type_id];
            echo $object->id .' '. $object->name;
            echo '   '. " ($type)" . '<br>';
        }
    }
}
