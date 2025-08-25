<?php

namespace App\Filament\Clusters\ScientificSchedule\Resources\SchedulePaperResource\Pages;

use App\Filament\Clusters\ScientificSchedule\Resources\SchedulePaperResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSchedulePapers extends ListRecords
{
    protected static string $resource = SchedulePaperResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
