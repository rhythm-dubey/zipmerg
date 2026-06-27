<?php

namespace App\Filament\SuperAdmin\Resources\Institutions;

use App\Filament\SuperAdmin\Resources\Institutions\Pages\CreateInstitution;
use App\Filament\SuperAdmin\Resources\Institutions\Pages\EditInstitution;
use App\Filament\SuperAdmin\Resources\Institutions\Pages\ListInstitutions;
use App\Filament\SuperAdmin\Resources\Institutions\Pages\ViewInstitution;
use App\Filament\SuperAdmin\Resources\Institutions\Schemas\InstitutionForm;
use App\Filament\SuperAdmin\Resources\Institutions\Schemas\InstitutionInfolist;
use App\Filament\SuperAdmin\Resources\Institutions\Tables\InstitutionsTable;
use App\Models\Institution;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class InstitutionResource extends Resource
{
    protected static ?string $model = Institution::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return InstitutionForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return InstitutionInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return InstitutionsTable::configure($table);
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
            'index' => ListInstitutions::route('/'),
            'create' => CreateInstitution::route('/create'),
            'view' => ViewInstitution::route('/{record}'),
            'edit' => EditInstitution::route('/{record}/edit'),
        ];
    }
}
