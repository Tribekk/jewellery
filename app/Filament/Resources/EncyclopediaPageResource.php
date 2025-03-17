<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EncyclopediaPageResource\Pages;
use App\Filament\Resources\EncyclopediaPageResource\RelationManagers;
use App\Models\EncyclopediaPage;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;

class EncyclopediaPageResource extends Resource
{
    protected static ?string $model = EncyclopediaPage::class;
    protected static ?string $pluralLabel = 'Связная страница энциклопедии';

    protected static ?string $navigationIcon = 'heroicon-o-book-open';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('id_encyclopedia')
                    ->label('Связь с энциклопедией')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('name')
                    ->label('Название')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('uriName')
                    ->label('Название в адресной строке')
                    ->required()
                    ->maxLength(255),
                TinyEditor::make('dataDesktop')
                    ->label('Страница на компьютере')
                    ->required()
                    ->maxLength(65535)
                    ->columnSpanFull(),
                TinyEditor::make('dataMobile')
                    ->label('Страница на телефоне')
                    ->required()
                    ->maxLength(65535)
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
                Forms\Components\TextInput::make('keyWordsSEO')
                    ->label('Ключевые слова для СЕО')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id_encyclopedia')
                    ->label('Связь с энциклопедией')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('name')
                    ->label('Название')
                    ->searchable(),
                Tables\Columns\TextColumn::make('uriName')
                    ->label('Название в адресной строке')
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
            'index' => Pages\ListEncyclopediaPages::route('/'),
            'create' => Pages\CreateEncyclopediaPage::route('/create'),
            'edit' => Pages\EditEncyclopediaPage::route('/{record}/edit'),
        ];
    }
}
