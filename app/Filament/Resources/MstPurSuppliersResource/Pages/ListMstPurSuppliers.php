<?php

namespace App\Filament\Resources\MstPurSuppliersResource\Pages;

use App\Filament\Resources\MstPurSuppliersResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMstPurSuppliers extends ListRecords
{
    protected static string $resource = MstPurSuppliersResource::class;
    
    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
