<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GalleryResource\Pages;
use App\Models\Gallery;
use BackedEnum;
use Filament\Actions\{BulkActionGroup, DeleteAction, DeleteBulkAction, EditAction};
use Filament\Forms\Components\{FileUpload, Textarea, TextInput};
use Filament\Resources\Resource;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\{ImageColumn, TextColumn};
use Filament\Tables\Table;

class GalleryResource extends Resource
{
    protected static ?string $model = Gallery::class;
    protected static BackedEnum|string|null $navigationIcon = 'heroicon-o-photo';
    protected static ?string $navigationLabel = 'Galeri Perusahaan';
    protected static ?string $modelLabel = 'Galeri';
    protected static ?int $navigationSort = 3;

    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            Section::make('Informasi Galeri')->components([
                TextInput::make('title')->label('Judul')->required()->maxLength(255),
                Textarea::make('description')->label('Keterangan')->rows(3),
            ]),
            Section::make('Foto')->components([
                FileUpload::make('image')->label('Foto')->image()->directory('galleries')->disk('public')->imageEditor()->nullable(),
            ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            ImageColumn::make('image')->label('Foto')->disk('public')->square(),
            TextColumn::make('title')->label('Judul')->searchable()->sortable()->weight('semibold'),
            TextColumn::make('description')->label('Keterangan')->limit(50)->placeholder('-'),
            TextColumn::make('created_at')->label('Dibuat')->dateTime('d M Y')->sortable(),
        ])->defaultSort('created_at', 'desc')->recordActions([EditAction::make(), DeleteAction::make()])->toolbarActions([
            BulkActionGroup::make([DeleteBulkAction::make()]),
        ])
        ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return ['index' => Pages\ListGalleries::route('/'), 'create' => Pages\CreateGallery::route('/create'), 'edit' => Pages\EditGallery::route('/{record}/edit')];
    }
}
