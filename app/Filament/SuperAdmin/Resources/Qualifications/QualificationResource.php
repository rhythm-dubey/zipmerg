<?php

namespace App\Filament\SuperAdmin\Resources\Qualifications;

use App\Filament\SuperAdmin\Resources\Qualifications\Pages\CreateQualification;
use App\Filament\SuperAdmin\Resources\Qualifications\Pages\EditQualification;
use App\Filament\SuperAdmin\Resources\Qualifications\Pages\ListQualifications;
use App\Filament\SuperAdmin\Resources\Qualifications\Pages\ViewQualification;
use App\Filament\SuperAdmin\Resources\Qualifications\Schemas\QualificationForm;
use App\Filament\SuperAdmin\Resources\Qualifications\Schemas\QualificationInfolist;
use App\Filament\SuperAdmin\Resources\Qualifications\Tables\QualificationsTable;
use App\Models\Qualification;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class QualificationResource extends Resource
{
    protected static ?string $model = Qualification::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return QualificationForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return QualificationInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return QualificationsTable::configure($table);
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
            'index' => ListQualifications::route('/'),
            'create' => CreateQualification::route('/create'),
            'view' => ViewQualification::route('/{record}'),
            'edit' => EditQualification::route('/{record}/edit'),
        ];
    }
}
