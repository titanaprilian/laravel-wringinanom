<?php

namespace App\Filament\Resources\HistoryResource\Pages;

use App\Filament\Resources\HistoryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHistory extends EditRecord
{
    protected static string $resource = HistoryResource::class;
    protected static ?string $title = "Edit Sejarah Desa";

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
