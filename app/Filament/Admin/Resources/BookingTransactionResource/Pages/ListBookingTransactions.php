<?php

namespace App\Filament\Admin\Resources\BookingTransactionResource\Pages;

use App\Filament\Admin\Resources\BookingTransactionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBookingTransactions extends ListRecords
{
    protected static string $resource = BookingTransactionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
