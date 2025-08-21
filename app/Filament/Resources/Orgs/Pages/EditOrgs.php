<?php

namespace App\Filament\Resources\Orgs\Pages;

use App\Filament\Resources\Orgs\OrgsResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditOrgs extends EditRecord
{
    protected static string $resource = OrgsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
