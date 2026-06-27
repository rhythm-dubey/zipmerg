<?php

namespace App\Filament\SuperAdmin\Resources\AcademicClasses\Pages;

use App\Filament\SuperAdmin\Resources\AcademicClasses\AcademicClassResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewAcademicClass extends ViewRecord
{
    protected static string $resource = AcademicClassResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
