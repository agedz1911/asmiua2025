<?php

namespace App\Filament\Exports;

use App\Models\SchedulePaper;
use Filament\Actions\Exports\ExportColumn;
use Filament\Actions\Exports\Exporter;
use Filament\Actions\Exports\Models\Export;

class SchedulePaperExporter extends Exporter
{
    protected static ?string $model = SchedulePaper::class;

    public static function getColumns(): array
    {
        return [
            ExportColumn::make('paperCategory.name')
                ->label('Category'),
            ExportColumn::make('code_abstract'),
            ExportColumn::make('name_participant'),
            ExportColumn::make('title'),
            ExportColumn::make('institution'),
            ExportColumn::make('country'),
            ExportColumn::make('date_presenter'),
            ExportColumn::make('time_presenter'),
            ExportColumn::make('room'),
            ExportColumn::make('is_active'),
        ];
    }

    public static function getCompletedNotificationBody(Export $export): string
    {
        $body = 'Schedule paper export completed with ' . number_format($export->successful_rows) . ' ' . str('row')->plural($export->successful_rows) . ' exported.';

        if ($failedRowsCount = $export->getFailedRowsCount()) {
            $body .= ' ' . number_format($failedRowsCount) . ' ' . str('row')->plural($failedRowsCount) . ' failed to export.';
        }

        return $body;
    }
}