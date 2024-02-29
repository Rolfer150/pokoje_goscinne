<?php

namespace App\Filament\Resources\MainFacilityResource\Pages;

use App\Filament\Resources\MainFacilityResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageMainFacilities extends ManageRecords
{
    protected static string $resource = MainFacilityResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
