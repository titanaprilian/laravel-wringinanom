<?php

namespace App\Filament\Resources\VisionMissionResource\Pages;

use App\Filament\Resources\VisionMissionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditVisionMission extends EditRecord
{
    protected static string $resource = VisionMissionResource::class;
    protected static ?string $title = "Edit Visi Misi";

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
