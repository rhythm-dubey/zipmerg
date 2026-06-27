<?php

namespace App\Filament\SuperAdmin\Resources\Genders\Pages;

use App\Filament\SuperAdmin\Resources\Genders\GenderResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditGender extends EditRecord
{
    protected static string $resource = GenderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
