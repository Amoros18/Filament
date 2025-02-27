<?php

namespace App\Filament\Widgets;

use App\Models\Employee;
use App\Models\Team;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsAdminOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Users', User::query()->count())
                ->description('All users')
                ->descriptionIcon('heroicon-m-arrow-trending-up'),
            Stat::make('Teams ', Team::query()->count())
                ->description('All teams')
                ->descriptionIcon('heroicon-m-arrow-trending-down'),
            Stat::make('Employees', Employee::query()->count())
                ->description('All Employees')
                ->descriptionIcon('heroicon-m-arrow-trending-up'),
        ];
    }
}
