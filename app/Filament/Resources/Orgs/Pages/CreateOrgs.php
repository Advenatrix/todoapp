<?php

namespace App\Filament\Resources\Orgs\Pages;

use App\Filament\Resources\Orgs\OrgsResource;
use Filament\Resources\Pages\CreateRecord;

class CreateOrgs extends CreateRecord
{
    protected static string $resource = OrgsResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
