<?php

namespace App\Filament\SuperAdmin\Resources\SubjectCategories\Pages;

use App\Filament\SuperAdmin\Resources\SubjectCategories\SubjectCategoryResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditSubjectCategory extends EditRecord
{
    protected static string $resource = SubjectCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
