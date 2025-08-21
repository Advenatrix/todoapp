<?php

namespace App\Filament\Resources\Todos\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class TodoForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('user_id')
                    ->relationship('user', 'name')
                    ->required(),
                Select::make('pic')
                    ->relationship('personInCharge', 'name')
                    ->required(),
                Select::make('orgs_id')
                    ->relationship('orgs', 'name')
                    ->default(null),
                Select::make('project_id')
                    ->relationship('projects', 'name')
                    ->default(null),
                TextInput::make('title')
                    ->required(),
                Textarea::make('details')
                    ->default(null)
                    ->columnSpanFull(),
                Select::make('status')
                    ->options(['pending' => 'Pending', 'in_progress' => 'In progress', 'completed' => 'Completed'])
                    ->default('pending')
                    ->required(),
            ]);
    }
}
