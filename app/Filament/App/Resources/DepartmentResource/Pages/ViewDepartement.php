<?php

namespace App\Filament\App\Resources\DepartementResource\Pages;

use App\Filament\App\Resources\DepartmentResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewDepartement extends ViewRecord
{
    protected static string $resource = DepartmentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
