<?php

namespace App\Filament\Resources\Orgs\Pages;

use App\Filament\Resources\Orgs\OrgsResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListOrgs extends ListRecords
{
    protected static string $resource = OrgsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
