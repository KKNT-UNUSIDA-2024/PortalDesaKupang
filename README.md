# Portal Desa

Portal Desa adalah aplikasi berbasis web untuk manajemen katalog desa, termasuk Bumdes dan profil desa, yang dibangun dengan Laravel.

## Prerequisites

- [Herd](https://herd.laravel.com/windows) di Windows untuk menjalankan proyek Laravel.

## Quick Installation

### 0. Install

Install Herd 

lalu buka Herd ke PHP 

download PHP 8.2

lalu ke dashboard, di global php version, set php ke 8.2

lalu buka explorer
```bash
%USERPROFILE%\Herd\
```
lalu
```bash
git clone https://github.com/KKNT-UNUSIDA-2024/PortalDesaKupang.git
cd PortalDesaKupang
```
lalu install dependencies
```bash
composer install
php artisan key:generate
npm install
```
jika sudah
restart Herd(Exit and relaunch)

akses bisa di lihat di Menu Herd lalu Quick access lalu open sites

localhost/admin
me@admin.com
123456789

## Routes

- **Home**: `http://localhost/`
- **Katalog**: `http://localhost/katalog`
- **Bumdes**: `http://localhost/bumdes`
- **Profil Desa**: `http://localhost/profil-desa`

## Contributing

Jika Anda ingin berkontribusi pada proyek ini, silakan buka [issues](https://github.com/username/repository-name/issues) dan kirimkan pull request. Pastikan untuk mengikuti pedoman kontribusi yang telah ditentukan.

## License

Proyek ini dilisensikan di bawah [MIT License](LICENSE).

```

Ganti `https://github.com/username/repository-name.git` dengan URL repositori GitHub Anda dan sesuaikan informasi lain sesuai kebutuhan. Jika Anda memiliki file lisensi khusus atau pedoman kontribusi, tambahkan informasi tersebut ke dalam README sesuai kebutuhan.
