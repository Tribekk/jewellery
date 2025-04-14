<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SemiPreciousStonesResource\Pages;
use App\Filament\Resources\SemiPreciousStonesResource\RelationManagers;
use App\Models\SemiPreciousStones;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SemiPreciousStonesResource extends Resource
{
    protected static ?string $model = SemiPreciousStones::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $pluralLabel = "Полудрагоценные камни";

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('stone_type_index')
                    ->label("Тип:")
                    ->required()
                    ->relationship('typeBelongsTo', 'name'),
                Forms\Components\Select::make('stone_category_index')
                    ->required()
                    ->label("Категория")
                    ->relationship("categoryBelongsTo", 'name'),
                Forms\Components\TextInput::make('name')
                    ->label('Название')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('description')
                    ->label('Описание')
                    ->maxLength(65535)
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('origin')
                    ->label('Месторождение')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('price_per_kg')
                    ->label('Цена за кг')
                    ->required()
                    ->numeric(),
                Forms\Components\Toggle::make('visible')
                    ->label('Видимость')
                    ->required(),
                Forms\Components\TextInput::make('article')
                    ->label('Артикул')
                    ->disabled()
                    ->maxLength(255),
                Forms\Components\FileUpload::make('media')
                    ->label('Медиафайлы')
                    ->reorderable()
                    ->multiple() // Позволяет загружать несколько файлов
                    ->acceptedFileTypes(['image/*', 'video/*']), // Разрешены только фото и видео
                Forms\Components\Toggle::make('is_certified')
                    ->label('Сертифицирован')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('stone_type_index')
                    ->searchable(),
                Tables\Columns\TextColumn::make('stone_category_index')
                    ->searchable(),
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('origin')
                    ->searchable(),
                Tables\Columns\TextColumn::make('price_per_kg')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\IconColumn::make('visible')
                    ->boolean(),
                Tables\Columns\TextColumn::make('article')
                    ->searchable(),
                Tables\Columns\IconColumn::make('is_certified')
                    ->boolean(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
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
            'index' => Pages\ListSemiPreciousStones::route('/'),
            'create' => Pages\CreateSemiPreciousStones::route('/create'),
            'edit' => Pages\EditSemiPreciousStones::route('/{record}/edit'),
        ];
    }
}
