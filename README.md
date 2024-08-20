

# Portal Desa

Portal Desa adalah aplikasi berbasis web untuk manajemen katalog desa, termasuk Bumdes dan profil desa, yang dibangun dengan Laravel.

## Prasyarat

- [Herd](https://herd.laravel.com/windows) di Windows untuk menjalankan proyek Laravel.

## Instalasi Cepat

### 0. Instal Herd

1. **Unduh dan Instal Herd:**
   - Unduh Herd dari situs resmi.
   - Instal Herd di komputer Windows kamu.

2. **Atur PHP:**
   - Buka Herd dan pergi ke bagian **PHP**.
   - Unduh **PHP 8.2** jika belum terpasang.
   - Di dashboard Herd, atur versi global PHP ke **8.2**.

3. **Buka Direktori Herd:**
   - Buka File Explorer.
   - Arahkan ke direktori Herd dengan mengetikkan ini di bilah alamat:
     ```bash
     %USERPROFILE%\Herd\
     ```

4. **Kloning Repositori:**
   - Di dalam direktori Herd, buka terminal (atau klik kanan dan pilih "Git Bash Here" jika Git sudah terinstal) dan jalankan:
     ```bash
     git clone https://github.com/KKNT-UNUSIDA-2024/PortalDesaKupang.git
     cd PortalDesaKupang
     ```

5. **Instal Dependensi:**
   - Di dalam direktori `PortalDesaKupang`, jalankan:
     ```bash
     composer install
     php artisan key:generate
     npm install
     ```

6. **Restart Herd:**
   - Tutup Herd sepenuhnya dan buka kembali untuk menerapkan perubahan.

7. **Mulai Server Pengembangan:**
   - Di terminal, jalankan:
     ```bash
     npm run dev
     ```
   - Ini akan memastikan template Flowbite berjalan dengan benar.

8. **Akses Aplikasi:**
   - Buka Herd, pergi ke **Quick Access**, dan pilih **Open Sites**.
   - Kunjungi panel admin dengan mengakses `localhost/admin` di browser kamu.
   - Gunakan kredensial berikut untuk login:
     - **Email:** me@admin.com
     - **Kata Sandi:** 123456789

---


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
