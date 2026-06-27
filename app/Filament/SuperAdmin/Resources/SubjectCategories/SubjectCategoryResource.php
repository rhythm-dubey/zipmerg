<?php

namespace App\Filament\SuperAdmin\Resources\SubjectCategories;

use App\Filament\SuperAdmin\Resources\SubjectCategories\Pages\CreateSubjectCategory;
use App\Filament\SuperAdmin\Resources\SubjectCategories\Pages\EditSubjectCategory;
use App\Filament\SuperAdmin\Resources\SubjectCategories\Pages\ListSubjectCategories;
use App\Filament\SuperAdmin\Resources\SubjectCategories\Pages\ViewSubjectCategory;
use App\Filament\SuperAdmin\Resources\SubjectCategories\Schemas\SubjectCategoryForm;
use App\Filament\SuperAdmin\Resources\SubjectCategories\Schemas\SubjectCategoryInfolist;
use App\Filament\SuperAdmin\Resources\SubjectCategories\Tables\SubjectCategoriesTable;
use App\Models\SubjectCategory;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class SubjectCategoryResource extends Resource
{
    protected static ?string $model = SubjectCategory::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return SubjectCategoryForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return SubjectCategoryInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SubjectCategoriesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListSubjectCategories::route('/'),
            'create' => CreateSubjectCategory::route('/create'),
            'view' => ViewSubjectCategory::route('/{record}'),
            'edit' => EditSubjectCategory::route('/{record}/edit'),
        ];
    }
}
