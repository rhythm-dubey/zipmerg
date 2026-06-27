<?php

namespace App\Filament\SuperAdmin\Resources\Institutions\Pages;

use App\Filament\SuperAdmin\Resources\Institutions\InstitutionResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewInstitution extends ViewRecord
{
    protected static string $resource = InstitutionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
