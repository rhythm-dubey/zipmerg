<?php

namespace App\Filament\SuperAdmin\Resources\SubjectCategories\Pages;

use App\Filament\SuperAdmin\Resources\SubjectCategories\SubjectCategoryResource;
use Filament\Resources\Pages\CreateRecord;

class CreateSubjectCategory extends CreateRecord
{
    protected static string $resource = SubjectCategoryResource::class;
}
