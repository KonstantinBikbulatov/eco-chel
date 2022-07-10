<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelObject extends Model
{
    use HasFactory;
    public $fillable = [
        'model_type_id',
        'name',
    ];
}
