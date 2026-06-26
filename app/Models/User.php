<?php

namespace App\Models;

use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
// use Spatie\Permission\Traits\HasRoles;

#[Fillable([
    'name',
    'email',
    'mobile',
    'gender_id',
    'avatar',
    'password',
    'email_verified_at',
    'mobile_verified_at',
    'last_login_at',
    'last_login_ip',
    'is_active',
])]

#[Hidden([
    'password',
    'remember_token',
])]
class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasFactory;
    use Notifiable;
    use SoftDeletes;
    // use HasRoles;

    /**
     * Attribute casting.
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'mobile_verified_at' => 'datetime',
            'last_login_at'      => 'datetime',

            'is_active' => 'boolean',

            'password' => 'hashed',
        ];
    }

    /**
     * Virtual "name" attribute for Filament and other packages.
     */
    // protected function name(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn () => trim("{$this->first_name} {$this->last_name}")
    //     );
    // }

    /**
     * Gender relationship.
     */
    public function gender()
    {
        return $this->belongsTo(Gender::class);
    }
}