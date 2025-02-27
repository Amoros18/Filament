<?php

namespace App\Filament\App\Resources\DepartementResource\Pages;

use App\Filament\App\Resources\DepartmentResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDepartements extends ListRecords
{
    protected static string $resource = DepartmentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
