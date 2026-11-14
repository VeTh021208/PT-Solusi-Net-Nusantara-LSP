<?php

namespace App\Filament\Widgets;

use App\Models\Category;
use App\Models\Message;
use App\Models\Product;
use App\Models\Subscription;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class AdminStatsOverview extends BaseWidget
{
    protected ?string $heading = 'Ringkasan Data';

    protected function getStats(): array
    {
        return [
            Stat::make('Layanan', Product::count())
                ->description('Total layanan tersedia')
                ->descriptionIcon('heroicon-m-briefcase')
                ->color('primary'),

            Stat::make('Kategori Layanan', Category::count())
                ->description('Kelompok layanan')
                ->descriptionIcon('heroicon-m-tag')
                ->color('info'),

            Stat::make('Pengajuan Menunggu', Subscription::where('status', 'pending')->count())
                ->description('Perlu ditinjau admin')
                ->descriptionIcon('heroicon-m-clock')
                ->color('warning'),

            Stat::make('Pesan Belum Dibaca', Message::where('is_read', false)->count())
                ->description('Pesan dari halaman kontak')
                ->descriptionIcon('heroicon-m-envelope')
                ->color('danger'),

            Stat::make('Pelanggan', User::where('is_admin', false)->count())
                ->description('Akun pelanggan terdaftar')
                ->descriptionIcon('heroicon-m-users')
                ->color('success'),
        ];
    }
}
