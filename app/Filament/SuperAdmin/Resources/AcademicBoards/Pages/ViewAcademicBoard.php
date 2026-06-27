<?php

namespace App\Filament\SuperAdmin\Resources\AcademicBoards\Pages;

use App\Filament\SuperAdmin\Resources\AcademicBoards\AcademicBoardResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewAcademicBoard extends ViewRecord
{
    protected static string $resource = AcademicBoardResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
