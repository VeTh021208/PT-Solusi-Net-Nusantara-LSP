<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Models\Category;
use App\Models\Product;
use BackedEnum;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static BackedEnum|string|null $navigationIcon = 'heroicon-o-shopping-bag';

    protected static ?string $navigationLabel = 'Layanan / Produk';

    protected static ?string $modelLabel = 'Layanan';

    protected static ?int $navigationSort = 2;

    public static function unitOptions(): array
    {
        return [
            'bulan' => 'per bulan',
            'paket' => 'per paket',
            'instalasi' => 'sekali instalasi',
        ];
    }

    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            Section::make('Informasi Layanan')
                ->columns(2)
                ->components([
                    TextInput::make('name')
                        ->label('Nama Layanan')
                        ->placeholder('Contoh: Internet Broadband 50 Mbps')
                        ->required()
                        ->maxLength(255)
                        ->live(onBlur: true)
                        ->afterStateUpdated(fn ($state, callable $set) => $set('slug', Str::slug($state).'-'.Str::lower(Str::random(4))))
                        ->columnSpanFull(),

                    Select::make('category_id')
                        ->label('Kategori Layanan')
                        ->options(fn () => Category::query()->pluck('name', 'id'))
                        ->searchable()
                        ->native(false)
                        ->required(),

                    Select::make('unit')
                        ->label('Satuan Harga')
                        ->options(self::unitOptions())
                        ->native(false)
                        ->default('bulan')
                        ->required(),

                    TextInput::make('price')
                        ->label('Harga')
                        ->numeric()
                        ->required()
                        ->prefix('Rp'),

                    Textarea::make('description')
                        ->label('Deskripsi')
                        ->rows(3)
                        ->columnSpanFull(),

                    TextInput::make('slug')
                        ->hidden()
                        ->dehydrated(),
                ]),

            Section::make('Gambar Layanan')
                ->components([
                    FileUpload::make('image')
                        ->label('')
                        ->image()
                        ->directory('products')
                        ->disk('public')
                        ->imageEditor()
                        ->nullable()
                        ->imagePreviewHeight('180'),
                ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')
                    ->label('Gambar')
                    ->disk('public')
                    ->size('4rem')
                    ->square()
                    ->defaultImageUrl(asset('images/icons/no-image.svg')),

                TextColumn::make('name')
                    ->label('Nama Layanan')
                    ->searchable()
                    ->sortable()
                    ->weight('semibold'),

                TextColumn::make('category.name')
                    ->label('Kategori')
                    ->badge()
                    ->color('primary')
                    ->sortable(),

                TextColumn::make('price')
                    ->label('Harga')
                    ->money('IDR', locale: 'id')
                    ->sortable(),

                TextColumn::make('unit')
                    ->label('Satuan')
                    ->badge()
                    ->color('gray'),

                IconColumn::make('is_featured')
                    ->label('Unggulan')
                    ->boolean(),

                TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->dateTime('d M Y')
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                SelectFilter::make('category_id')
                    ->label('Kategori')
                    ->relationship('category', 'name'),
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
