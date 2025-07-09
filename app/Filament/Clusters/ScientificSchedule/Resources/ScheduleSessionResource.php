<?php

namespace App\Filament\Clusters\ScientificSchedule\Resources;

use App\Filament\Clusters\ScientificSchedule;
use App\Filament\Clusters\ScientificSchedule\Resources\ScheduleSessionResource\Pages;
use App\Filament\Clusters\ScientificSchedule\Resources\ScheduleSessionResource\RelationManagers;
use App\Models\ScheduleSession;
use Filament\Forms;
use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ScheduleSessionResource extends Resource
{
    protected static ?string $model = ScheduleSession::class;

    protected static ?string $navigationIcon = 'heroicon-o-pencil-square';
    protected static ?string $label = 'Category Session';

    protected static ?string $cluster = ScientificSchedule::class;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('category_sesi')
                    ->options([
                        'Symposium' => 'Symposium',
                        'Workshop' => 'Workshop',
                        'Master Class' => 'Master Class',
                        'Scientific Competition' => 'Scientific Competition'
                    ])
                    ->native(false),
                TextInput::make('title_ses')
                    ->label('Session Title'),
                DatePicker::make('date')
                    ->native(false),
                TextInput::make('time'),
                Select::make('room')
                    ->options([
                        'Convention 2' => 'Convention 2',
                        'Ballroom 1' => 'Ballroom 1',
                        'Ballroom 2' => 'Ballroom 2',
                        'Santika 15, 16 & 17' => 'Santika 15, 16 & 17',
                        'Santika 7' => 'Santika 7',
                        'Santika 8' => 'Santika 8',
                        'Santika 5 & 6' => 'Santika 5 & 6',
                        'Santika 10 & 11' => 'Santika 10 & 11',
                        'Santika 9' => 'Santika 9',
                        'Santika 12' => 'Santika 12',
                    ]),
                TextInput::make('moderator'),
                Textarea::make('panelist'),
                TextInput::make('no_urut')
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('no_urut')
                    ->sortable(),
                TextColumn::make('room')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('title_ses')
                    ->label('Session Title'),
                TextColumn::make('date')
                    ->sortable()
                    ->date('d M Y'),
                TextColumn::make('category_sesi')
                    ->sortable()
                    ->label('Category')
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
            'index' => Pages\ListScheduleSessions::route('/'),
            'create' => Pages\CreateScheduleSession::route('/create'),
            'edit' => Pages\EditScheduleSession::route('/{record}/edit'),
        ];
    }
}
