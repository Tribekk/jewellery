<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BlogsResource\Pages;
use App\Filament\Resources\BlogsResource\RelationManagers;
use App\Models\Blogs;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;

class BlogsResource extends Resource
{
    protected static ?string $model = Blogs::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label('Название статьи (короткое)')
                    ->required()
                    ->maxLength(255),
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
                Forms\Components\FileUpload::make('picture')
                    ->label('Картинка привью')
                    ->required()
                    ->image()
                    ->imageEditor(),
                Forms\Components\TextInput::make('uriName')
                    ->label('Название на английском без пробелов и уникальное')
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
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('descriptionSEO')
                    ->searchable(),
                Tables\Columns\TextColumn::make('titleSEO')
                    ->searchable(),
                Tables\Columns\TextColumn::make('keyWordsSEO')
                    ->searchable(),
                Tables\Columns\TextColumn::make('picture')
                    ->searchable(),
                Tables\Columns\TextColumn::make('uriName')
                    ->searchable(),
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
            'index' => Pages\ListBlogs::route('/'),
            'create' => Pages\CreateBlogs::route('/create'),
            'edit' => Pages\EditBlogs::route('/{record}/edit'),
        ];
    }
}
