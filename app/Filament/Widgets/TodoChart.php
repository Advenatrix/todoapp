<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class TodoChart extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Pending Todos', '20')
            ->description('7 increase')
            ->descriptionIcon('heroicon-m-arrow-trending-up'),
            Stat::make('In Progress', '32')
            ->description('3 decrease')
            ->descriptionIcon('heroicon-m-arrow-trending-down'),
            Stat::make('Finished Todos', '13')
            ->description('3 increase')
            ->descriptionIcon('heroicon-m-arrow-trending-up'),
        ];
    }
}
