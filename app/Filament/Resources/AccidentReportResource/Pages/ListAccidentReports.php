<?php

namespace App\Filament\Resources\AccidentReportResource\Pages;

use App\Filament\Resources\AccidentReportResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAccidentReports extends ListRecords
{
    protected static string $resource = AccidentReportResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
