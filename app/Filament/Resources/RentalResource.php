<?php

namespace App\Filament\Resources;

use App\Enums\RentalStatus;
use App\Filament\Resources\RentalResource\Pages;
use App\Filament\Resources\RentalResource\RelationManagers;
use App\Models\Rental;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RentalResource extends Resource
{
    protected static ?string $model = Rental::class;
    protected static ?string $navigationIcon = 'heroicon-o-bookmark';

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
            'index' => Pages\ManageRentals::route('/'),
        ];
    }
}
