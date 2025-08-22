<?php

namespace App\Filament\Resources\Users\Pages;

use app\Filament\Clusters\UserManagement\UserManagementCluster;
use App\Filament\Resources\Users\UserResource;
use Filament\Resources\Pages\CreateRecord;

class CreateUser extends CreateRecord
{
    protected static string $resource = UserResource::class;

}
