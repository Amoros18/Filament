<?php

namespace App\Filament\Resources\EmployeeResource\Pages;

use App\Filament\Resources\EmployeeResource;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;

class CreateEmployee extends CreateRecord
{
    protected static string $resource = EmployeeResource::class;

    protected function getCreatedNotificationTitle(): ?string
    {
        return 'Employee created';
    }

    protected function getCreatedNotification(): ?Notification
    {
//        si la valeur renvoyer est null aucune notification ne sera envoyer
        return Notification::make()
            ->success()
            ->title('Employee Created.')
            ->body('The employee has been created.');
    }
}
