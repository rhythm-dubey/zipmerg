<?php

namespace App\Filament\SuperAdmin\Resources\AcademicBoards;

use App\Filament\SuperAdmin\Resources\AcademicBoards\Pages\CreateAcademicBoard;
use App\Filament\SuperAdmin\Resources\AcademicBoards\Pages\EditAcademicBoard;
use App\Filament\SuperAdmin\Resources\AcademicBoards\Pages\ListAcademicBoards;
use App\Filament\SuperAdmin\Resources\AcademicBoards\Pages\ViewAcademicBoard;
use App\Filament\SuperAdmin\Resources\AcademicBoards\Schemas\AcademicBoardForm;
use App\Filament\SuperAdmin\Resources\AcademicBoards\Schemas\AcademicBoardInfolist;
use App\Filament\SuperAdmin\Resources\AcademicBoards\Tables\AcademicBoardsTable;
use App\Models\AcademicBoard;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class AcademicBoardResource extends Resource
{
    protected static ?string $model = AcademicBoard::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return AcademicBoardForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return AcademicBoardInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AcademicBoardsTable::configure($table);
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
            'index' => ListAcademicBoards::route('/'),
            'create' => CreateAcademicBoard::route('/create'),
            'view' => ViewAcademicBoard::route('/{record}'),
            'edit' => EditAcademicBoard::route('/{record}/edit'),
        ];
    }
}
