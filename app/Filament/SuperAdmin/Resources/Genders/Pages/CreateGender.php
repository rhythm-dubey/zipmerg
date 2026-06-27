<?php

namespace App\Filament\SuperAdmin\Resources\Genders\Pages;

use App\Filament\SuperAdmin\Resources\Genders\GenderResource;
use Filament\Resources\Pages\CreateRecord;

class CreateGender extends CreateRecord
{
    protected static string $resource = GenderResource::class;
}
