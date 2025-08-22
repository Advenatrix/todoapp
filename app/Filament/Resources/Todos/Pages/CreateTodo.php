<?php

namespace App\Filament\Resources\Todos\Pages;

use app\Filament\Clusters\UserManagement\UserManagementCluster;
use App\Filament\Resources\Todos\TodoResource;
use Filament\Resources\Pages\CreateRecord;

class CreateTodo extends CreateRecord
{
    protected static string $resource = TodoResource::class;


    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
