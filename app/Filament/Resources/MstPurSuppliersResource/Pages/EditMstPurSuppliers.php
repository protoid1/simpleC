<?php

namespace App\Filament\Resources\MstPurSuppliersResource\Pages;

use App\Filament\Resources\MstPurSuppliersResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMstPurSuppliers extends EditRecord
{
    protected static string $resource = MstPurSuppliersResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
