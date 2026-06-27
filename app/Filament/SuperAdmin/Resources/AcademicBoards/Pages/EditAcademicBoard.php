<?php

namespace App\Filament\SuperAdmin\Resources\AcademicBoards\Pages;

use App\Filament\SuperAdmin\Resources\AcademicBoards\AcademicBoardResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditAcademicBoard extends EditRecord
{
    protected static string $resource = AcademicBoardResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
