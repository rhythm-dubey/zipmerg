<?php

namespace App\Filament\SuperAdmin\Resources\Modes\Pages;

use App\Filament\SuperAdmin\Resources\Modes\ModeResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListModes extends ListRecords
{
    protected static string $resource = ModeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
