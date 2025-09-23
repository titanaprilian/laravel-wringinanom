<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VillageOfficialResource\Pages;
use App\Filament\Resources\VillageOfficialResource\RelationManagers;
use App\Models\VillageOfficial;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class VillageOfficialResource extends Resource
{
    protected static ?string $model = VillageOfficial::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Profil Desa';

    protected static ?string $navigationLabel = 'Perangkat Desa';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->label('Nama')
                    ->required()
                    ->maxLength(255),
                TextInput::make('position')
                    ->label('Jabatan')
                    ->required()
                    ->maxLength(255),
                FileUpload::make('photo')
                    ->label('Foto Perangkat Desa (URL)')
                    ->image()
                    ->imageEditor()
                    ->directory('village_officials')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('urutan')
                    ->label('No Urut')
                    ->sortable(),
                ImageColumn::make('photo')
                    ->label('Foto'),
                TextColumn::make('name')
                    ->label('Nama')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('position')
                    ->label('Jabatan')
                    ->searchable(),
            ])
            ->reorderable('order')
            ->defaultSort('order', 'asc')
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

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListVillageOfficials::route('/'),
            'create' => Pages\CreateVillageOfficial::route('/create'),
            'edit' => Pages\EditVillageOfficial::route('/{record}/edit'),
        ];
    }
}
