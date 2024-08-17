# Portal Desa

Portal Desa adalah aplikasi berbasis web untuk manajemen katalog desa, termasuk Bumdes dan profil desa, yang dibangun dengan Laravel.

## Prerequisites

- [Herd](https://laravel.com/docs/herd) di Windows untuk menjalankan proyek Laravel.
- [Composer](https://getcomposer.org/) untuk mengelola dependensi PHP.
- [SQLite](https://www.sqlite.org/index.html) sebagai basis data.

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


### 1. Clone the Repository

```bash
git clone https://github.com/username/repository-name.git
cd repository-name
```

### 2. Install Dependencies

Pastikan Anda telah menginstal Composer. Kemudian, jalankan perintah berikut untuk menginstal dependensi proyek:

```bash
composer install
```

### 3. Setup Environment File

Salin file `.env.example` ke `.env`:

```bash
cp .env.example .env
```

### 4. Configure the Database

Buka file `.env` dan atur konfigurasi database SQLite:

```env
DB_CONNECTION=sqlite
DB_DATABASE=/path/to/your/database.sqlite
```

Ganti `/path/to/your/database.sqlite` dengan path yang sesuai di sistem Anda. Pastikan file SQLite dapat diakses dan ditulis oleh aplikasi.

### 5. Generate Application Key

Jalankan perintah berikut untuk menghasilkan kunci aplikasi Laravel:

```bash
php artisan key:generate
```

### 6. Migrate Database

Jalankan migrasi untuk membuat tabel di basis data:

```bash
php artisan migrate
```

### 7. Serve the Application

Gunakan Herd untuk menjalankan aplikasi Laravel. Pastikan Herd berjalan dan Anda dapat mengakses aplikasi melalui `http://localhost`.

```bash
php artisan serve
```

## Usage

Setelah aplikasi berjalan, Anda dapat mengaksesnya melalui `http://localhost`. Aplikasi ini memiliki beberapa fitur utama:

- **Katalog**: Menampilkan daftar katalog desa.
- **Bumdes**: Informasi mengenai Bumdes.
- **Profil Desa**: Informasi mengenai profil desa.

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
