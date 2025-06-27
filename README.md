<<<<<<< HEAD
## 👥 Anggota Kelompok

| **Nama**                      | **NIM**       | **Peran**                                              |
|------------------------------|---------------|--------------------------------------------------------|
| **Luthfi Fauzan**        | 312310497     |    Code PHP(codelgniter 4) dan Publikasi ke Web Hosting           |
| **Dhiyaulhaq Al Maudidi**     | 312310508     | Basis Data ERD         |
| **Raditya Tansy Lizara**    | 312310454     |  Front End Design HTML CSS dan Laporan            |
| **Oktavia Rizkha Kurniawati**| 312310509     |    Front End Design HTML CSS dan Laporan      |

# 📋 Sistem Checklist Kebersihan Toilet

**Sistem Checklist Kebersihan Toilet** adalah aplikasi web berbasis PHP dan MySQL yang dirancang untuk membantu pengelola fasilitas dalam memantau dan mengelola kebersihan toilet secara efisien. Aplikasi ini mencatat aktivitas kebersihan, mendukung pelaporan rutin, dan memberikan transparansi dalam manajemen toilet.

---

## 🎯 Tujuan Sistem

Sistem ini bertujuan menyediakan platform digital untuk:
- Melakukan checklist kebersihan toilet secara sistematis.
- Mengelola data fasilitas toilet.
- Menghasilkan laporan sebagai bahan evaluasi kebersihan.

---

## 🔐 Login dan Manajemen Pengguna

- Autentikasi pengguna dengan fitur **Login dan Registrasi**.
- Role-based access:
  - **Admin**: Mengelola data toilet, melihat laporan, memverifikasi checklist.
  - **Petugas**: Melakukan checklist toilet harian berdasarkan tanggung jawabnya.

---

## 📊 Dashboard Utama

- Menampilkan ringkasan kondisi kebersihan toilet.
- Visualisasi status terkini berdasarkan data checklist.
- Memberikan overview cepat untuk evaluasi harian.

---

## 🧼 Modul Manajemen Toilet

CRUD (Create, Read, Update, Delete) untuk data toilet:

- **Daftar Toilet**: Menampilkan semua data toilet, lokasi, dan kontrol edit/hapus.
- **Tambah Toilet**: Menambahkan data toilet baru (nama, lokasi, item kebersihan).
- **Ubah Toilet**: Mengedit data toilet yang sudah ada.
- **Hapus Toilet**: Menghapus toilet dari database.

---

## ✅ Modul Checklist Kebersihan

Fitur utama untuk pencatatan aktivitas kebersihan:

- **Pemilihan Toilet dan Tanggal**: Petugas memilih toilet dan tanggal sebelum checklist.
- **Checklist Item Kebersihan**:
  - Lantai
  - Dinding
  - Kloset
  - Wastafel
  - Kaca
  - Bau ruangan
  - Stok sabun
- Checklist dicatat dengan nama petugas, tanggal, dan waktu.

---

## 📄 Modul Pelaporan

Menampilkan dan mencetak laporan kebersihan:

- **Checklist Berdasarkan Tanggal**: Menampilkan data checklist sesuai tanggal yang dipilih.
- **Laporan Belum Diperiksa**: Daftar toilet yang checklist-nya belum diverifikasi.
- **Laporan Toilet Rusak/Kotor**: Daftar toilet yang membutuhkan perhatian lebih berdasarkan hasil checklist.

---


## 🛠️ Teknologi yang Digunakan

- **Bahasa Pemrograman**: PHP
- **Framework**: CodeIgniter 4 (opsional)
- **Database**: MySQL
- **Frontend**: HTML, CSS, JavaScript (Bootstrap untuk UI)

---

## 🚀 Manfaat Sistem

- Meningkatkan efisiensi pemantauan kebersihan toilet.
- Meningkatkan transparansi dan akuntabilitas petugas kebersihan.
- Menyediakan dokumentasi checklist yang terstruktur dan mudah diakses.
- Mempermudah pelaporan kondisi toilet kepada manajemen.

---

## 📌 Catatan Tambahan

- Pastikan server Apache dan MySQL aktif saat menjalankan aplikasi.
- Aplikasi dapat dikembangkan lebih lanjut untuk integrasi mobile atau notifikasi otomatis.

---

## 📷 Contoh Tampilan (Opsional)

### Halaman Login
![WhatsApp Image 2025-06-06 at 19 36 24](https://github.com/user-attachments/assets/dbe0ba54-3047-473d-9f5c-5945d4e9f9f9)

### Halaman Home
![image](https://github.com/user-attachments/assets/11d97eb0-3501-45c2-a519-c71638d3d0fb)

### Data Checklist
![WhatsApp Image 2025-06-06 at 19 36 02](https://github.com/user-attachments/assets/9768d8f5-c848-4ccc-8ffe-ff06cd600941)

### Data Toilet
![image](https://github.com/user-attachments/assets/b4006391-b6f0-47d8-b96f-6ad313e6f641)

### Data Inspektur
![image](https://github.com/user-attachments/assets/aa76c7f1-9feb-4c32-bf79-fa1dde6b80d4)

---

## <img src="img/google-drive.png" width=20> Link Laporan Proyek


=======
# CodeIgniter 4 Framework

## What is CodeIgniter?

CodeIgniter is a PHP full-stack web framework that is light, fast, flexible and secure.
More information can be found at the [official site](https://codeigniter.com).

This repository holds the distributable version of the framework.
It has been built from the
[development repository](https://github.com/codeigniter4/CodeIgniter4).

More information about the plans for version 4 can be found in [CodeIgniter 4](https://forum.codeigniter.com/forumdisplay.php?fid=28) on the forums.

You can read the [user guide](https://codeigniter.com/user_guide/)
corresponding to the latest version of the framework.

## Important Change with index.php

`index.php` is no longer in the root of the project! It has been moved inside the *public* folder,
for better security and separation of components.

This means that you should configure your web server to "point" to your project's *public* folder, and
not to the project root. A better practice would be to configure a virtual host to point there. A poor practice would be to point your web server to the project root and expect to enter *public/...*, as the rest of your logic and the
framework are exposed.

**Please** read the user guide for a better explanation of how CI4 works!

## Repository Management

We use GitHub issues, in our main repository, to track **BUGS** and to track approved **DEVELOPMENT** work packages.
We use our [forum](http://forum.codeigniter.com) to provide SUPPORT and to discuss
FEATURE REQUESTS.

This repository is a "distribution" one, built by our release preparation script.
Problems with it can be raised on our forum, or as issues in the main repository.

## Contributing

We welcome contributions from the community.

Please read the [*Contributing to CodeIgniter*](https://github.com/codeigniter4/CodeIgniter4/blob/develop/CONTRIBUTING.md) section in the development repository.

## Server Requirements

PHP version 8.1 or higher is required, with the following extensions installed:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)

> [!WARNING]
> - The end of life date for PHP 7.4 was November 28, 2022.
> - The end of life date for PHP 8.0 was November 26, 2023.
> - If you are still using PHP 7.4 or 8.0, you should upgrade immediately.
> - The end of life date for PHP 8.1 will be December 31, 2025.

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php) if you plan to use MySQL
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library
480f04d (Toisys)
