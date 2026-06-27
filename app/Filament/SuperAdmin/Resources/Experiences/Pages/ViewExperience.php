<?php

namespace App\Filament\SuperAdmin\Resources\Experiences\Pages;

use App\Filament\SuperAdmin\Resources\Experiences\ExperienceResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewExperience extends ViewRecord
{
    protected static string $resource = ExperienceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
