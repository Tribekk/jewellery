<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ColorStoneResource\Pages;
use App\Filament\Resources\ColorStoneResource\RelationManagers;
use App\Models\ColorStone;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ColorStoneResource extends Resource
{
    protected static ?string $model = ColorStone::class;
    protected static ?string $pluralLabel = "Цвета камней";
    protected static ?string $navigationIcon = 'heroicon-o-swatch';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label('Название цвета')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('uriName')
                    ->label('Название в адресной строке')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('picture')
                    ->label('Картинка')
                    ->maxLength(255),
                Forms\Components\Textarea::make('description')
                    ->label('Описание для цвета')
                    ->maxLength(65535)
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Название')
                    ->searchable(),
                Tables\Columns\TextColumn::make('uriName')
                    ->label('Название в адресной строке')
                    ->searchable(),
                Tables\Columns\TextColumn::make('picture')
                    ->label('Картинка')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Дата создания')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Дата обновления')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListColorStones::route('/'),
            'create' => Pages\CreateColorStone::route('/create'),
            'edit' => Pages\EditColorStone::route('/{record}/edit'),
        ];
    }
}
