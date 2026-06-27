<?php

namespace App\Filament\SuperAdmin\Resources\Modes\Pages;

use App\Filament\SuperAdmin\Resources\Modes\ModeResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewMode extends ViewRecord
{
    protected static string $resource = ModeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
