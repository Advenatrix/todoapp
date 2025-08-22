<?php

namespace App\Filament\Resources\Users\Pages;

use app\Filament\Clusters\UserManagement\UserManagementCluster;
use App\Filament\Resources\Users\UserResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditUser extends EditRecord
{
    protected static string $resource = UserResource::class;


    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
