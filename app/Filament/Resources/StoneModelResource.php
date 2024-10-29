<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StoneModelResource\Pages;
use App\Filament\Resources\StoneModelResource\RelationManagers;
use App\Models\StoneModel;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
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
                Forms\Components\TextInput::make('cut')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('color_index')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('type_index')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('description')
                    ->required()
                    ->maxLength(65535)
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('mass')
                    ->required()
                    ->numeric(),
                Forms\Components\Textarea::make('color')
                    ->required()
                    ->maxLength(65535)
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('purity')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('ennoblement')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('height')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('width')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('length')
                    ->required()
                    ->numeric(),
                Forms\Components\Textarea::make('birth')
                    ->required()
                    ->maxLength(65535)
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('price')
                    ->required()
                    ->numeric()
                    ->prefix('$'),
                Forms\Components\Toggle::make('visible')
                    ->required(),
                Forms\Components\TextInput::make('article')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('preview_photo')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('next_photo')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('cut')
                    ->searchable(),
                Tables\Columns\TextColumn::make('color_index')
                    ->searchable(),
                Tables\Columns\TextColumn::make('type_index')
                    ->searchable(),
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('mass')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('purity')
                    ->searchable(),
                Tables\Columns\TextColumn::make('ennoblement')
                    ->searchable(),
                Tables\Columns\TextColumn::make('height')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('width')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('length')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('price')
                    ->money()
                    ->sortable(),
                Tables\Columns\IconColumn::make('visible')
                    ->boolean(),
                Tables\Columns\TextColumn::make('article')
                    ->searchable(),
                Tables\Columns\TextColumn::make('preview_photo')
                    ->searchable(),
                Tables\Columns\TextColumn::make('next_photo')
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
            'index' => Pages\ListStoneModels::route('/'),
            'create' => Pages\CreateStoneModel::route('/create'),
            'edit' => Pages\EditStoneModel::route('/{record}/edit'),
        ];
    }
}
