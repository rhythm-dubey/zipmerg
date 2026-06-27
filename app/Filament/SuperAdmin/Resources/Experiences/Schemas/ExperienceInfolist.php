<?php

namespace App\Filament\SuperAdmin\Resources\Experiences\Schemas;

use App\Models\Experience;
use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class ExperienceInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('name'),
                TextEntry::make('display_name')
                    ->placeholder('-'),
                TextEntry::make('slug'),
                TextEntry::make('min_years')
                    ->numeric()
                    ->placeholder('-'),
                TextEntry::make('max_years')
                    ->numeric()
                    ->placeholder('-'),
                TextEntry::make('description')
                    ->placeholder('-')
                    ->columnSpanFull(),
                TextEntry::make('sort_order')
                    ->numeric(),
                IconEntry::make('is_active')
                    ->boolean(),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('deleted_at')
                    ->dateTime()
                    ->visible(fn (Experience $record): bool => $record->trashed()),
            ]);
    }
}
