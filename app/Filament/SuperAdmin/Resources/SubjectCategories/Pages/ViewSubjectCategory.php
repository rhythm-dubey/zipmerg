<?php

namespace App\Filament\SuperAdmin\Resources\SubjectCategories\Pages;

use App\Filament\SuperAdmin\Resources\SubjectCategories\SubjectCategoryResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewSubjectCategory extends ViewRecord
{
    protected static string $resource = SubjectCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
