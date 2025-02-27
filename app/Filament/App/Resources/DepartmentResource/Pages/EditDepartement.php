<?php

namespace App\Filament\App\Resources\DepartementResource\Pages;

use App\Filament\App\Resources\DepartmentResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDepartement extends EditRecord
{
    protected static string $resource = DepartmentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
