<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

#[Fillable([
    'name',
    'abbreviation',
    'slug',
    'description',
    'sort_order',
    'is_active',
])]

class Qualification extends Model
{
    //
}
