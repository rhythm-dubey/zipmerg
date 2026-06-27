<?php

namespace App\Filament\SuperAdmin\Resources\Experiences\Pages;

use App\Filament\SuperAdmin\Resources\Experiences\ExperienceResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListExperiences extends ListRecords
{
    protected static string $resource = ExperienceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
