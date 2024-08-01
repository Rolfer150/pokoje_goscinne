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
use Guava\FilamentIconPicker\Forms\IconPicker;
use Guava\FilamentIconPicker\Tables\IconColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RoomFacilityResource extends Resource
{
    protected static ?string $model = RoomFacility::class;

    protected static ?string $navigationIcon = 'heroicon-o-sparkles';

    protected static ?string $navigationLabel = 'Udogodnienia w pokojach';

    protected static ?string $navigationGroup = 'Modyfikowanie danych obiektu noclegowego';

    protected static ?string $pluralModelLabel = 'udogodnienia (pokój)';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                ->label('Nazwa udogodnienia'),
                IconPicker::make('icon')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Nazwa')
                    ->searchable(),
                IconColumn::make('icon')
                    ->label('Ikonka')
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
