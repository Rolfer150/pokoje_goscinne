<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RoomFacilityResource\Pages;
use App\Filament\Resources\RoomFacilityResource\RelationManagers;
use App\Models\RoomFacility;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RoomFacilityResource extends Resource
{
    protected static ?string $model = RoomFacility::class;

    protected static ?string $navigationIcon = 'heroicon-o-sparkles';

    protected static ?string $navigationLabel = 'Udogodnienia w pokojach';

    protected static ?string $navigationGroup = 'Modyfikowanie danych obiektu noclegowego';

    protected static ?string $modelLabel = 'udogodnienie (pokój)';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Nazwa'),
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

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageRoomFacilities::route('/'),
        ];
    }
}
