<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VisionMissionResource\Pages;
use App\Filament\Resources\VisionMissionResource\RelationManagers;
use App\Models\Vision;
use Filament\Forms;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class VisionMissionResource extends Resource
{
    protected static ?string $model = Vision::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Profil Desa';

    protected static ?string $navigationLabel = 'Visi & Misi';

    public static function canCreate(): bool
    {
        return !Vision::exists();
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Visi')
                    ->description('Tuliskan visi utama di sini.')
                    ->schema([
                        Textarea::make('vision')
                            ->label('Visi')
                            ->required()
                            ->rows(5)
                    ]),
                Section::make('Misi')
                    ->description('Tambahkan, hapus, atau urutkan misi di bawah ini.')
                    ->schema([
                        Repeater::make('mission')
                            ->relationship()
                            ->schema([
                                Textarea::make('mission')
                                    ->label('Deskripsi Misi')
                                    ->required()
                            ])
                            ->addActionLabel('Tambah Misi Baru')
                            ->reorderableWithButtons()
                            ->collapsible()
                            ->itemLabel(fn (array $state): ?string => $state['mission'] ?? null)
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('vision')
                    ->label('Visi')
                    ->limit(100)
                    ->wrap(),
                TextColumn::make('mission_count')
                    ->label('Jumlah Misi')
                    ->counts('mission')
                    ->sortable(),
                TextColumn::make('created_at')
                    ->label('Dibuat Pada')
                    ->dateTime('d M Y H:i')
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
            'index' => Pages\ListVisionMissions::route('/'),
            'create' => Pages\CreateVisionMission::route('/create'),
            'edit' => Pages\EditVisionMission::route('/{record}/edit'),
        ];
    }
}
