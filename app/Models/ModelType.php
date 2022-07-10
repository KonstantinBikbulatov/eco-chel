<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelType extends Model
{
    use HasFactory;

    public $timestamps = false;
    public $fillable = [
        'model_type_id',
        'name',
    ];
}
