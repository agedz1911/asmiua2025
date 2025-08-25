<?php

namespace App\Filament\Clusters\ScientificSchedule\Resources\CategoryPaperResource\Pages;

use App\Filament\Clusters\ScientificSchedule\Resources\CategoryPaperResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCategoryPapers extends ListRecords
{
    protected static string $resource = CategoryPaperResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
