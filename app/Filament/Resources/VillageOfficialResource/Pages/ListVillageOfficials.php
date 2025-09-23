<?php

namespace App\Filament\Resources\VillageOfficialResource\Pages;

use App\Filament\Resources\VillageOfficialResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListVillageOfficials extends ListRecords
{
    protected static string $resource = VillageOfficialResource::class;
    protected static ?string $title = "Perangkat Desa";

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
