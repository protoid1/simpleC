<?php

namespace App\Filament\Resources\ProductMstPosCategoriesResource\Pages;

use App\Filament\Resources\ProductMstPosCategoriesResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageProductMstPosCategories extends ManageRecords
{
    protected static string $resource = ProductMstPosCategoriesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->label('Add Categories'),
        ];
    }

    
}
