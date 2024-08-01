<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RoomResource\Pages;
use App\Filament\Resources\RoomResource\RelationManagers;
use App\Models\Room;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class RoomResource extends Resource
{
    protected static ?string $model = Room::class;
    protected static ?string $navigationIcon = 'heroicon-o-home';

    protected static ?string $title = 'Custom Page Title';
    protected static ?string $modelLabel = 'pokój';
    protected static ?string $pluralLabel = 'Pokoje';
    protected static ?string $navigationLabel = 'Pokoje';

    protected static ?string $navigationGroup = 'Modyfikowanie danych obiektu noclegowego';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label('Nazwa')
                    ->required()
                    ->unique(ignoreRecord: true)
                    ->live(onBlur: true)
                    ->afterStateUpdated(function (string $operation, $state, Forms\Set $set) {
                        if ($operation !== 'create') return;

                        $set('slug', Str::slug($state));
                    })
                    ->maxLength(24),
                Forms\Components\TextInput::make('slug')
                    ->label('Adres URL')
                    ->required()
                    ->maxLength(48),
                Forms\Components\RichEditor::make('description')
                    ->label('Opis')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('accommodation_number')
                    ->label('Liczba łóżek')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('price')
                    ->label('Cena za dobę')
                    ->required()
                    ->numeric()
                    ->suffix('zł')
                    ->rules('regex:/^\d{1,6}(\.\d{0,2})?$/'),
                Forms\Components\CheckboxList::make('room_facilities')
                    ->relationship('roomFacilities', 'name')
                    ->label("Udogodnienia")
                    ->searchable()
                    ->columns(3)
                    ->gridDirection('column')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\FileUpload::make('image_path')
                    ->label("Zdjęcia")
                    ->multiple()
                    ->directory('room-images')
                    ->preserveFilenames()
                    ->image()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Nazwa')
                    ->searchable(),
                Tables\Columns\TextColumn::make('slug')
                    ->label('Adres URL')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('accommodation_number')
                    ->label('Liczba łóżek')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('price')
                    ->label('Cena za dobę')
                    ->suffix('zł')
                    ->sortable(),
                Tables\Columns\IconColumn::make('is_occupied')
                    ->label('Czy jest zajęte?')
                    ->icon(fn (string $state): string => match ($state) {
                        '0' => 'heroicon-o-lock-open',
                        '1' => 'heroicon-o-lock-closed',
                    })
                    ->alignCenter(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Utworzono')
                    ->dateTime('d/m/Y')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Zmodyfikowano')
                    ->dateTime('d/m/Y')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
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
            'index' => Pages\ListRooms::route('/'),
            'create' => Pages\CreateRoom::route('/create'),
            'edit' => Pages\EditRoom::route('/{record}/edit'),
        ];
    }
}
