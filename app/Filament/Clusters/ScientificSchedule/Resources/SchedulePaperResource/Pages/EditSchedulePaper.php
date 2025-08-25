<?php

namespace App\Filament\Clusters\ScientificSchedule\Resources\SchedulePaperResource\Pages;

use App\Filament\Clusters\ScientificSchedule\Resources\SchedulePaperResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSchedulePaper extends EditRecord
{
    protected static string $resource = SchedulePaperResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}
