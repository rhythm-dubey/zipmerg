<?php

namespace App\Filament\SuperAdmin\Resources\Users\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->required(),
                TextInput::make('mobile'),
                TextInput::make('gender_id')
                    ->numeric(),
                TextInput::make('avatar'),
                DateTimePicker::make('email_verified_at'),
                DateTimePicker::make('mobile_verified_at'),
                DateTimePicker::make('last_login_at'),
                TextInput::make('last_login_ip'),
                Toggle::make('is_active')
                    ->required(),
                TextInput::make('password')
                    ->password()
                    ->required(),
            ]);
    }
}
