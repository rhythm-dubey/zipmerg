<?php

namespace App\Filament\SuperAdmin\Resources\SubjectCategories\Pages;

use App\Filament\SuperAdmin\Resources\SubjectCategories\SubjectCategoryResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListSubjectCategories extends ListRecords
{
    protected static string $resource = SubjectCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
