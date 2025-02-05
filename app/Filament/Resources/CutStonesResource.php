<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CutStonesResource\Pages;
use App\Filament\Resources\CutStonesResource\RelationManagers;
use App\Models\CutStones;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CutStonesResource extends Resource
{
    protected static ?string $model = CutStones::class;
    protected static ?string $pluralLabel = 'Виды огранки';

    protected static ?string $navigationIcon = 'heroicon-o-cube-transparent';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label('Название')
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
                    ->label('Описание')
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
            'index' => Pages\ListCutStones::route('/'),
            'create' => Pages\CreateCutStones::route('/create'),
            'edit' => Pages\EditCutStones::route('/{record}/edit'),
        ];
    }
}
