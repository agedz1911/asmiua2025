<?php

namespace App\Filament\Clusters\ScientificSchedule\Resources\SchedulePaperResource\Pages;

use App\Filament\Clusters\ScientificSchedule\Resources\SchedulePaperResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateSchedulePaper extends CreateRecord
{
    protected static string $resource = SchedulePaperResource::class;
}
