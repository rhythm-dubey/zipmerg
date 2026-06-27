<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

#[Fillable([
    'name',
    'slug',
    'description',
    'sort_order',
    'is_active',
])]

class SubjectCategory extends Model
{
    //
}
