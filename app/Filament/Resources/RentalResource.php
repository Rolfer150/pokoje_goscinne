<?php

namespace App\Filament\Resources;

use App\Enums\RentalStatus;
use App\Filament\Resources\RentalResource\Pages;
use App\Filament\Resources\RentalResource\RelationManagers;
use App\Models\Rental;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RentalResource extends Resource
{
    protected static ?string $model = Rental::class;
    protected static ?string $navigationIcon = 'heroicon-o-bookmark';
    protected static ?string $modelLabel = 'rezerwacja';
    protected static ?string $pluralModelLabel = 'rezerwacje';
    protected static ?string $navigationLabel = 'Rezerwacje';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('status')
                    ->options(RentalStatus::class)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Imię i nazwisko')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->label('Adres e-mail')
                    ->searchable(),
                Tables\Columns\TextColumn::make('phone_number')
                    ->label('Numer telefonu')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Data wysłania rezerwacji')
                    ->dateTime('d/m/Y', 'GMT+2')
                    ->sortable(),
                Tables\Columns\TextColumn::make('room.name')
                    ->label('Pokój'),
                Tables\Columns\TextColumn::make('rental_start')
                    ->label('Początek pobytu')
                    ->dateTime('d/m/Y', 'GMT+2')
                    ->sortable(),
                Tables\Columns\TextColumn::make('rental_end')
                    ->label('Zakończenie pobytu')
                    ->dateTime('d/m/Y', 'GMT+2')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('status')
                    ->label('Status rezerwacji')
                    ->sortable()
                    ->badge(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                TextEntry::make('name')
                    ->label('Imię i nazwisko'),
                TextEntry::make('room.name')
                    ->label('Nazwa pokoju'),
                TextEntry::make('email')
                    ->label('Adres e-mail'),
                TextEntry::make('phone_number')
                    ->label('Numer telefonu'),
                TextEntry::make('comments')
                    ->label('Zapytania/uwagi')
                    ->columnSpanFull(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageRentals::route('/'),
//            'view' => Pages\ViewRental::route('/{record}'),
        ];
    }

    public static function canCreate(): bool
    {
        return false;
    }
}
