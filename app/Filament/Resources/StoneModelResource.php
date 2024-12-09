<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StoneModelResource\Pages;
use App\Filament\Resources\StoneModelResource\RelationManagers;
use App\Models\StoneModel;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\ViewColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class StoneModelResource extends Resource
{
    protected static ?string $model = StoneModel::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('cut')
                    ->label('Огранка')
                    ->required()
                    ->relationship('cutBelongsTo', 'name'),
                Forms\Components\Select::make('color_index')
                    ->label('Цвет в фильтре')
                    ->required()
                    ->relationship('colorBelongsTo', 'name'),
                Forms\Components\Select::make('type_index')
                    ->label('Тип камня')
                    ->required()
                    ->relationship('typeBelongsTo', 'name'),
                Forms\Components\TextInput::make('name')
                    ->label('Полное название')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('description')
                    ->label('Описание')
                    ->required()
                    ->maxLength(65535)
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('mass')
                    ->label('Вес')
                    ->prefix('карат')
                    ->required()
                    ->numeric(),
                Forms\Components\Textarea::make('color')
                    ->label('Полное описание цвета')
                    ->required()
                    ->maxLength(65535)
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('purity')
                    ->label('Чистота')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('ennoblement')
                    ->label('Облагораживание')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('height')
                    ->label('Высота')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('width')
                    ->label('Ширина')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('length')
                    ->label('Длинна')
                    ->required()
                    ->numeric(),
                Forms\Components\Textarea::make('birth')
                    ->label('Месторождения')
                    ->required()
                    ->maxLength(65535)
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('price')
                    ->label('Цена')
                    ->required()
                    ->numeric()
                    ->prefix('Р.'),
                Forms\Components\Toggle::make('visible')
                    ->label('Активность')
                    ->required(),
                Forms\Components\TextInput::make('article')
                    ->label('Артикул')
                    ->disabled()
                    ->maxLength(255),
                Forms\Components\FileUpload::make('media')
                    ->label('Медиафайлы')
                    ->multiple() // Позволяет загружать несколько файлов
                    ->acceptedFileTypes(['image/*', 'video/*']), // Разрешены только фото и видео
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('cutBelongsTo.name')
                    ->label('Огранка')
                    ->searchable(),

                Tables\Columns\TextColumn::make('colorBelongsTo.name')
                    ->label('Цвет')
                    ->searchable(),

                Tables\Columns\TextColumn::make('typeBelongsTo.name')
                    ->label('Тип камня')
                    ->searchable(),

                Tables\Columns\TextColumn::make('name')
                    ->label('Название')
                    ->searchable(),

                Tables\Columns\TextColumn::make('mass')
                    ->label('Вес')
                    ->numeric()
                    ->sortable(),

                Tables\Columns\TextColumn::make('purity')
                    ->label('Чистота')
                    ->searchable(),

                Tables\Columns\TextColumn::make('ennoblement')
                    ->label('Облагораживание')
                    ->searchable(),

                Tables\Columns\TextColumn::make('height')
                    ->label('Высота')
                    ->numeric()
                    ->sortable(),

                Tables\Columns\TextColumn::make('width')
                    ->label('Ширина')
                    ->numeric()
                    ->sortable(),

                Tables\Columns\TextColumn::make('length')
                    ->label('Длина')
                    ->numeric()
                    ->sortable(),

                Tables\Columns\TextColumn::make('price')
                    ->label('Цена')
                    ->money('RUB')
                    ->sortable(),

                Tables\Columns\IconColumn::make('visible')
                    ->label('Активность')
                    ->boolean(),

                Tables\Columns\TextColumn::make('article')
                    ->label('Артикул')
                    ->searchable(),
                ImageColumn::make('media.0') // Первое фото (если есть)
                ->label('Превью')
                    ->disk('public'), // Указать диск
                ViewColumn::make('media') // Отобразить список медиа
                ->label('Медиа')
                    ->view('components.media-list'), // Пользовательский компонент для отображения медиа

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
                // добавьте фильтры, если нужно
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
            'index' => Pages\ListStoneModels::route('/'),
            'create' => Pages\CreateStoneModel::route('/create'),
            'edit' => Pages\EditStoneModel::route('/{record}/edit'),
        ];
    }
}
