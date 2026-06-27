<?php

namespace App\Filament\SuperAdmin\Resources\AcademicClasses;

use App\Filament\SuperAdmin\Resources\AcademicClasses\Pages\CreateAcademicClass;
use App\Filament\SuperAdmin\Resources\AcademicClasses\Pages\EditAcademicClass;
use App\Filament\SuperAdmin\Resources\AcademicClasses\Pages\ListAcademicClasses;
use App\Filament\SuperAdmin\Resources\AcademicClasses\Pages\ViewAcademicClass;
use App\Filament\SuperAdmin\Resources\AcademicClasses\Schemas\AcademicClassForm;
use App\Filament\SuperAdmin\Resources\AcademicClasses\Schemas\AcademicClassInfolist;
use App\Filament\SuperAdmin\Resources\AcademicClasses\Tables\AcademicClassesTable;
use App\Models\AcademicClass;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class AcademicClassResource extends Resource
{
    protected static ?string $model = AcademicClass::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return AcademicClassForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return AcademicClassInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AcademicClassesTable::configure($table);
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
            'index' => ListAcademicClasses::route('/'),
            'create' => CreateAcademicClass::route('/create'),
            'view' => ViewAcademicClass::route('/{record}'),
            'edit' => EditAcademicClass::route('/{record}/edit'),
        ];
    }
}
