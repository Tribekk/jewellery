<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EncyclopediaResource\Pages;
use App\Filament\Resources\EncyclopediaResource\RelationManagers;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;
use App\Models\Encyclopedia;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EncyclopediaResource extends Resource
{
    protected static ?string $model = Encyclopedia::class;
    protected static ?string $pluralLabel = 'Главная страница энциклопедии';

    protected static ?string $navigationIcon = 'heroicon-o-book-open';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('type_stone')
                    ->label('Тип камня')
                    ->required()
                    ->relationship('typeStones', 'name'),
                Forms\Components\FileUpload::make('picture')
                    ->label('Картинка привью')
                    ->required()
                    ->image()
                    ->imageEditor(),
                Forms\Components\TextInput::make('name')
                    ->label('Название')
                    ->required()
                    ->maxLength(255),
                TinyEditor::make('dataDesktop')
                    ->label('Страница на компьютере')
                    ->required()
                    ->columnSpanFull(),
                TinyEditor::make('dataMobile')
                    ->label('Страница на телефоне')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('descriptionSEO')
                    ->label('Описание для СЕО')
                    ->unique()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('titleSEO')
                    ->label('Заголовок браузера для СЕО')
                    ->unique()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('keyWordSEO')
                    ->label('Ключевые слова для СЕО')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('type_stone')
                    ->label('Тип камня')
                    ->searchable(),
                Tables\Columns\TextColumn::make('picture')
                    ->label('Картинка')
                    ->searchable(),
                Tables\Columns\TextColumn::make('name')
                    ->label('Название')
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
                Tables\Columns\TextColumn::make('descriptionSEO')
                    ->searchable(),
                Tables\Columns\TextColumn::make('titleSEO')
                    ->searchable(),
                Tables\Columns\TextColumn::make('keyWordsSEO')
                    ->searchable(),
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
            'index' => Pages\ListEncyclopedias::route('/'),
            'create' => Pages\CreateEncyclopedia::route('/create'),
            'edit' => Pages\EditEncyclopedia::route('/{record}/edit'),
        ];
    }
}
