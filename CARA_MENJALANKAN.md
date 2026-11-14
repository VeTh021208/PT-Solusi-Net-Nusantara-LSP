# Cara Menjalankan

Proyek ini berjalan dengan PHP 8.2 dan MySQL.

## Langkah singkat

```bash
composer install          # jika folder vendor belum ada
php artisan migrate --seed
php artisan serve
```

Buka `http://127.0.0.1:8000`.

## Akun

| Peran | Email               | Kata Sandi |
|-------|---------------------|------------|
| Admin | admin@gmail.com | admin123 |

## Alamat halaman

- **Panel admin**: `/admin` — hanya akun dengan `is_admin = true`.
  - Kelola **Kategori Layanan**, **Layanan**, **Galeri Perusahaan**, **Akun Pengguna**
  - Proses **Pengajuan Langganan** dan baca **Pesan Masuk**
- **Halaman publik**: `/` (Beranda), `/profil`, `/layanan`, `/galeri`, `/kontak`
- **Akun pelanggan**: `/login`, `/register` (terpisah dari panel admin)
- **Langganan pelanggan**: ajukan dari detail layanan, pantau di `/langganan-saya`

## Konfigurasi database

Atur `DB_*` di `.env`. Contoh untuk MySQL Laragon:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=filament5
DB_USERNAME=root
DB_PASSWORD=
```

## Logo

Ganti berkas `public/images/Logo.png` untuk mengubah logo di halaman depan maupun panel admin.
