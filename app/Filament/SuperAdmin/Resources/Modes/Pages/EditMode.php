<?php

namespace App\Filament\SuperAdmin\Resources\Modes\Pages;

use App\Filament\SuperAdmin\Resources\Modes\ModeResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditMode extends EditRecord
{
    protected static string $resource = ModeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
