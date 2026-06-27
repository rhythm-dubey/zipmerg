<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

#[Fillable([
    'name',
    'slug',
    'icon',
    'description',
    'sort_order',
    'is_active',
])]

class Mode extends Model
{
    //
}
