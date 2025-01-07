<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MstPurSuppliersResource\Pages;
use App\Filament\Resources\MstPurSuppliersResource\RelationManagers;
use App\Models\MstPurSuppliers;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MstPurSuppliersResource extends Resource
{
    protected static ?string $model = MstPurSuppliers::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('supplier_name')->columnSpan(1)->required(),
                TextInput::make('contact_name')->columnSpan(2)->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMstPurSuppliers::route('/'),
            'create' => Pages\CreateMstPurSuppliers::route('/create'),
            'edit' => Pages\EditMstPurSuppliers::route('/{record}/edit'),
        ];
    }
}
