<?php

namespace App\Filament\Resources\Orgs;

use App\Filament\Resources\Orgs\Pages\CreateOrgs;
use App\Filament\Resources\Orgs\Pages\EditOrgs;
use App\Filament\Resources\Orgs\Pages\ListOrgs;
use App\Filament\Resources\Orgs\Schemas\OrgsForm;
use App\Filament\Resources\Orgs\Tables\OrgsTable;
use App\Models\Orgs;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class OrgsResource extends Resource
{
    protected static ?string $model = Orgs::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return OrgsForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return OrgsTable::configure($table);
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
            'index' => ListOrgs::route('/'),
            'create' => CreateOrgs::route('/create'),
            'edit' => EditOrgs::route('/{record}/edit'),
        ];
    }
}
