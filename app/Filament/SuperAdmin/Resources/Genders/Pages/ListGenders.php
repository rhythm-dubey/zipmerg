<?php

namespace App\Filament\SuperAdmin\Resources\Genders\Pages;

use App\Filament\SuperAdmin\Resources\Genders\GenderResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListGenders extends ListRecords
{
    protected static string $resource = GenderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
