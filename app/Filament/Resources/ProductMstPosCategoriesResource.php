<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductMstPosCategoriesResource\Pages;
use App\Filament\Resources\ProductMstPosCategoriesResource\RelationManagers;
use App\Models\MstPosCategories;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProductMstPosCategoriesResource extends Resource
{
    protected static ?string $model = MstPosCategories::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Categories';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                    TextInput::make('category_name')->columnSpan(1)->required(),
                    TextInput::make('category_description')->columnSpan(2)->required()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('category_id')->label('Category Id`s'),
                TextColumn::make('category_name')->label('Category Names'),
                TextColumn::make('category_description')->label('Category Descriptions')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageProductMstPosCategories::route('/'),
        ];
    }
}
