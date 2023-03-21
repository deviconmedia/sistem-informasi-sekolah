## Tentang MySchool

MySchool adalah aplikasi manajemen sekolah berbasis website yang di bangun dan di kembangkan dengan Framework Laravel. Fitur-fitur pada aplikasi MySchool antara lain :

- Website Sekolah (Done)
- PPDB (Done)
- Perpustakaan (Done)
- Sistem Pembayaran Sekolah SPP (Done)
- Alumni

## Installation

* Install [Composer](https://getcomposer.org/download) and [Npm](https://nodejs.org/en/download)
* Clone the repository: `git clone https://github.com/andes2912/sekolahku`
* Install dependencies: `composer install ; npm install ; npm run dev`
* Run `cp .env.example .env` for create .env file
* Run `php artisan migrate --seed` for migration database
* Run `php artisan storage:link` for create folder storage

## Penggunaan
* Login sebagai Admin email: kepsek@sch.id & pw: Bismillah
* Login sebagai PPDB, Perpustakaan, Staf, Pengajar dengan password 12345678

## Package
- [IndoBank](https://github.com/andes2912/indobank) package Laravel untuk menyimpan data Nama Bank yang ada di Indonesia

## Log Update

Catatan pengembangan aplikasi
* 21/03/2023 - Modul Perpustakaan
    - Konfigurasi Dashboard
    - Konfirgurasi Menu
    - Konfigurasi Halaman per Menu
* 21/03/2023 - Modul Pengajar
    - Konfigurasi tampilan Dashboard

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
