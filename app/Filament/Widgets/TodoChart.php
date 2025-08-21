<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Todo;

class TodoChart extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        $pending = Todo::where('status', 'pending')->count();
        $inProgress = Todo::where('status', 'in_progress')->count();
        $completed = Todo::where('status', 'completed')->count();

        return [
            Stat::make('Pending Todos', $pending)
                ->description('Live count from DB')
                ->descriptionIcon('heroicon-m-arrow-trending-up'),

            Stat::make('In Progress', $inProgress)
                ->description('Live count from DB')
                ->descriptionIcon('heroicon-m-arrow-trending-down'),

            Stat::make('Finished Todos', $completed)
                ->description('Live count from DB')
                ->descriptionIcon('heroicon-m-arrow-trending-up'),
        ];
    }
}
