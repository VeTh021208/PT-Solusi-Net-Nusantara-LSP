<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SubscriptionResource\Pages;
use App\Models\Subscription;
use BackedEnum;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class SubscriptionResource extends Resource
{
    protected static ?string $model = Subscription::class;

    protected static BackedEnum|string|null $navigationIcon = 'heroicon-o-clipboard-document-list';

    protected static ?string $navigationLabel = 'Pengajuan Langganan';

    protected static ?string $modelLabel = 'Pengajuan Langganan';

    protected static ?int $navigationSort = 4;

    public static function canCreate(): bool
    {
        return false;
    }

    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            TextInput::make('user.name')
                ->label('Pelanggan')
                ->disabled(),

            TextInput::make('product.name')
                ->label('Layanan')
                ->disabled(),

            TextInput::make('phone')
                ->label('Nomor Telepon')
                ->disabled(),

            Textarea::make('address')
                ->label('Alamat Pemasangan')
                ->disabled()
                ->columnSpanFull(),

            Textarea::make('notes')
                ->label('Catatan Pelanggan')
                ->disabled()
                ->columnSpanFull(),

            Select::make('status')
                ->label('Status')
                ->options([
                    'pending' => 'Menunggu Konfirmasi',
                    'approved' => 'Disetujui',
                    'rejected' => 'Ditolak',
                    'active' => 'Aktif',
                    'non_active' => 'Tidak Aktif',
                ])
                ->native(false)
                ->required(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('user.name')
                    ->label('Pelanggan')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('product.name')
                    ->label('Layanan')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('phone')
                    ->label('Telepon'),

                TextColumn::make('status')
                    ->label('Status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'approved' => 'success',
                        'rejected' => 'danger',
                        'active' => 'success',
                        'non_active' => 'secondary',
                        default => 'warning',
                    })
                    ->formatStateUsing(fn (string $state): string => match ($state) {
                        'approved' => 'Disetujui',
                        'rejected' => 'Ditolak',
                        'active' => 'Aktif',
                        'non_active' => 'Tidak Aktif',
                        default => 'Menunggu',
                    }),

                TextColumn::make('created_at')
                    ->label('Diajukan')
                    ->dateTime('d M Y')
                    ->sortable(),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                SelectFilter::make('status')
                    ->label('Status')
                    ->options([
                        'pending' => 'Menunggu Konfirmasi',
                        'approved' => 'Disetujui',
                        'rejected' => 'Ditolak',
                        'active' => 'Aktif',
                        'non_active' => 'Tidak Aktif',
                    ]),
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
            'index' => Pages\ListSubscriptions::route('/'),
            'edit' => Pages\EditSubscription::route('/{record}/edit'),
        ];
    }
}
