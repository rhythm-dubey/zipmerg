<?php

namespace App\Filament\SuperAdmin\Resources\AcademicClasses\Pages;

use App\Filament\SuperAdmin\Resources\AcademicClasses\AcademicClassResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAcademicClasses extends ListRecords
{
    protected static string $resource = AcademicClassResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
