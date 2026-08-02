# Cara Pasang ke Project Laravel Kamu

Struktur file ini dibuat khusus untuk digabung ke project Laravel hasil
`composer create-project laravel/laravel .`

## Langkah-langkah

1. **Salin folder ini ke root project Laravel kamu**, timpa/gabung file yang sama:

   ```
   routes/web.php                          -> ganti isi routes/web.php kamu
   resources/views/landing.blade.php       -> tambahkan ke resources/views/
   public/images/                          -> gabungkan ke public/images/
   ```

   Kalau `routes/web.php` kamu sudah punya route lain, cukup tambahkan
   blok `Route::get('/', ...)` di bawah ini, jangan timpa seluruh file:

   ```php
   Route::get('/', function () {
       return view('landing');
   })->name('landing');
   ```

2. Jalankan server:

   ```bash
   php artisan serve
   ```

3. Buka `http://127.0.0.1:8000` — landing page Sambal Ummi Zee akan tampil
   di halaman utama.

## Catatan
- Semua gambar dipanggil pakai helper `asset('images/...')` bawaan Laravel,
  jadi otomatis mengambil dari folder `public/images/`.
- Tidak perlu install package tambahan — hanya Tailwind CDN & Google Fonts
  yang dimuat langsung dari `<head>` di `landing.blade.php`, tanpa perlu
  build asset (Vite/NPM).
