<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

#[Fillable([
    'name',
    'display_name',
    'slug',
    'min_years',
    'max_years',
    'description',
    'sort_order',
    'is_active',
])]

class Experience extends Model
{
    //
}
