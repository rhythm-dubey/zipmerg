<?php

namespace App\Filament\SuperAdmin\Resources\AcademicBoards\Pages;

use App\Filament\SuperAdmin\Resources\AcademicBoards\AcademicBoardResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAcademicBoards extends ListRecords
{
    protected static string $resource = AcademicBoardResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
