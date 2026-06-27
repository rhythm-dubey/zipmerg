<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

#[Fillable([
    'name',
    'code',
    'slug',
    'subject_category_id',
    'description',
    'sort_order',
    'is_active',
])]

class Subject extends Model
{
    //
}
