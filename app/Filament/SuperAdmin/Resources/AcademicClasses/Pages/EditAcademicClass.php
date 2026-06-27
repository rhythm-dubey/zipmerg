<?php

namespace App\Filament\SuperAdmin\Resources\AcademicClasses\Pages;

use App\Filament\SuperAdmin\Resources\AcademicClasses\AcademicClassResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditAcademicClass extends EditRecord
{
    protected static string $resource = AcademicClassResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
