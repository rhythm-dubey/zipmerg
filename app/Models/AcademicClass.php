<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

#[Fillable([
    'name',
    'display_name',
    'slug',
    'level',
    'academic_board_id',
    'description',
    'sort_order',
    'is_active',
])]

#[Table('classes')]

class AcademicClass extends Model
{
    //
}
