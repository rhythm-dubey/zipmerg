<?php

namespace App\Filament\SuperAdmin\Resources\Modes;

use App\Filament\SuperAdmin\Resources\Modes\Pages\CreateMode;
use App\Filament\SuperAdmin\Resources\Modes\Pages\EditMode;
use App\Filament\SuperAdmin\Resources\Modes\Pages\ListModes;
use App\Filament\SuperAdmin\Resources\Modes\Pages\ViewMode;
use App\Filament\SuperAdmin\Resources\Modes\Schemas\ModeForm;
use App\Filament\SuperAdmin\Resources\Modes\Schemas\ModeInfolist;
use App\Filament\SuperAdmin\Resources\Modes\Tables\ModesTable;
use App\Models\Mode;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ModeResource extends Resource
{
    protected static ?string $model = Mode::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return ModeForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return ModeInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ModesTable::configure($table);
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
            'index' => ListModes::route('/'),
            'create' => CreateMode::route('/create'),
            'view' => ViewMode::route('/{record}'),
            'edit' => EditMode::route('/{record}/edit'),
        ];
    }
}
