<?php

namespace App\Filament\Clusters\ScientificSchedule\Resources\CategoryPaperResource\Pages;

use App\Filament\Clusters\ScientificSchedule\Resources\CategoryPaperResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCategoryPaper extends EditRecord
{
    protected static string $resource = CategoryPaperResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}
