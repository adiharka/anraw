<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Cara Install

1. Download file/clone
2. Nyalakan XAMPP lalu buat database dengan nama sesuai keinginan kalian (bisa juga menggunakan db yg sudah ada)
3. Extract file yg telah diunduh
4. Cari file bernama `.env.example` lalu duplikasi file tersebut dan beri nama `.env`
5. Buka file `.env` lalu pada bagian database ganti dengan nama db kalian  
DB_CONNECTION=mysql  
DB_HOST=127.0.0.1  
DB_PORT=3306  
DB_DATABASE=laravel8_crud   <-- ini ganti dgn nama db kalian  
DB_USERNAME=root  
DB_PASSWORD=  
  
7. Paste folder vendor dari file sebelumnya ke folder laravel
8. Buka CMD, pastikan alamat cmd sudah mengarah ke folder laravel
9. Ketikkan Perintah
- `php artisan key:generate`          <-- untuk mengisi APP_KEY secara otomatis
- `php artisan migrate --seed`        <-- untuk mengisi entitas di db
- `php artisan serve`                 <-- untuk menjalankan server laravel
10. Buka browser dan ketik alamat localhost:8000/

## Cara Menjalankan Kembali
1. Tidak perlu dari awal, cukup jalankan XAMPP dan ketikkan perintah `php artisan serve` pada cmd
2. Buka browser dan ketik alamat localhost:8000/

