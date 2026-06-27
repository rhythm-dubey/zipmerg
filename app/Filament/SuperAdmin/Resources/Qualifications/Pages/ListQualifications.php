<?php

namespace App\Filament\SuperAdmin\Resources\Qualifications\Pages;

use App\Filament\SuperAdmin\Resources\Qualifications\QualificationResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListQualifications extends ListRecords
{
    protected static string $resource = QualificationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
