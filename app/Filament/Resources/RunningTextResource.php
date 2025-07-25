<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RunningTextResource\Pages;
use App\Filament\Resources\RunningTextResource\RelationManagers;
use App\Models\RunningText;
use Filament\Forms;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RunningTextResource extends Resource
{
    protected static ?string $model = RunningText::class;
    protected static ?string $navigationGroup = 'Section';
    protected static ?string $navigationIcon = 'heroicon-o-arrow-turn-down-right';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Textarea::make('title')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListRunningTexts::route('/'),
            'create' => Pages\CreateRunningText::route('/create'),
            'edit' => Pages\EditRunningText::route('/{record}/edit'),
        ];
    }
}
