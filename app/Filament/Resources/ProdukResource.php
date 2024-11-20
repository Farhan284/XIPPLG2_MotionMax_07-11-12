<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProdukResource\Pages;
use App\Filament\Resources\ProdukResource\RelationManagers;
use App\Models\Produk;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProdukResource extends Resource
{
    protected static ?string $model = Produk::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama_produk'),
                Forms\Components\TextInput::make('harga'),
                Forms\Components\TextInput::make('warna'),
                Forms\Components\Select::make('foto_id')
                    ->relationship('foto', 'id')
                    ->required(),
                Forms\Components\Select::make('pelanggan_id')
                    ->relationship('pelanggan', 'nama')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_produk')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('harga')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('warna')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('foto.id')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('pelanggan.nama')->searchable()->sortable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('pelanggan_id')
                    ->relationship('pelanggan','nama'),
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
            'index' => Pages\ListProduks::route('/'),
            'create' => Pages\CreateProduk::route('/create'),
            'edit' => Pages\EditProduk::route('/{record}/edit'),
        ];
    }
}