# 🚻 Checklist Kebersihan Toilet — Aplikasi Web (PROYEK UAS)

## 📌 Deskripsi Proyek

**Checklist Kebersihan Toilet** adalah aplikasi berbasis web yang dikembangkan untuk membantu petugas kebersihan dalam mencatat dan memantau aktivitas kebersihan toilet secara digital dan real-time. Aplikasi ini dirancang agar proses checklist dapat dilakukan dengan efisien, terdokumentasi, dan dapat dicetak dalam bentuk laporan.

---

## 👥 Anggota Tim & Tanggung Jawab [Kelompok 5]

| No | Nama                           | Tugas                                                                 |
|----|--------------------------------|------------------------------------------------------------------------|
| 1  | **Luthfi Fauzan**              | Pengembangan backend menggunakan CodeIgniter 4 (v2022) dan publikasi ke web hosting.|
| 2  | **Dhiyaulhaq Al Maududi**      | Perancangan basis data (ERD) dan struktur relasional database.|
| 3  | **Raditya Tansy Lizara**       | Desain antarmuka (HTML & CSS), pembuatan mockup aplikasi, serta penyusunan laporan akhir proyek.|
| 4  | **Oktavia Rizkha Kurniawati**  | Desain antarmuka (HTML & CSS), pembuatan Diagram Use Case, serta penyusunan laporan akhir proyek.|

---

## 🎯 Tujuan Proyek

- Mengganti sistem manual checklist menjadi sistem digital.
- Mempermudah pengawasan kebersihan toilet berdasarkan lokasi.
- Menyediakan laporan checklist yang dapat dicetak dalam bentuk PDF.
- Meningkatkan efisiensi dan transparansi tugas petugas kebersihan.

---

## 💡 Fitur Utama

- Login terpisah untuk **Admin** dan **Petugas**.
- Input checklist harian berdasarkan lokasi toilet.
- Tabel checklist interaktif dengan fitur pencarian dan filter.
- Cetak laporan checklist ke PDF (DomPDF).
- DataTables untuk tampilan tabel yang dinamis dan interaktif.

---

## 🧩 Desain Sistem

### 👤 Use Case

- **Admin**: mengelola data pengguna & melihat laporan.
- **Petugas**: mengisi checklist harian & mencetak laporan.

![usecase sistem checklist toilet drawio (3)](https://github.com/user-attachments/assets/d4d8838f-c843-4736-ada5-b6f3fd39cbc0)


### 🔄 Alur Penggunaan

1. Pengguna login ke sistem.
2. Petugas mengisi form checklist kebersihan toilet.
3. Data tersimpan dan ditampilkan dalam bentuk tabel.
4. Admin mencetak laporan PDF.

### 🎨 Mockup

- Desain Tampilan :
  ![Screenshot 2025-06-29 131858](https://github.com/user-attachments/assets/8b135106-0a39-45e6-8eda-d368c87f8dca)

- Link Figma :
  https://www.figma.com/design/ZM4oCEA9QWZoSumzUwr9zn/Mockup-Checklist-Toilet
---

## 🧱 Teknologi yang Digunakan

### 💻 Front-End

- **HTML5** — struktur halaman.
- **CSS3** — styling dan layout.
- **Bootstrap 5** — komponen UI responsif.
- **JavaScript & jQuery** — interaksi dinamis.
- **DataTables** — pengelolaan tabel (search, filter, pagination).

### ⚙️ Back-End

- **PHP 8** — bahasa pemrograman.
- **CodeIgniter 4** — framework utama (MVC).
- **MySQL** — sistem basis data.
- **HeidiSQL** — pengelolaan database.
- **DomPDF** — cetak laporan ke PDF.

---

## 📂 Struktur Database

Tabel utama:

- `users` — data admin & petugas.
- `toilets` — data lokasi toilet.
- `checklist` — catatan checklist harian.
- Relasi antar tabel mendukung pelacakan berdasarkan lokasi dan user.

---

## <img src="img/google-drive.png" width=20> Link Laporan Proyek

| **Keterangan**                | **Link**                                              |
|------------------------------|----------------------------------------------------|
| **Poster**            |   [Link Poster Google Drive](https://drive.google.com/file/d/1LAr2ec6YrOxuGNU3YmMtm6AoMzlNkpYm/view?usp=sharing)        |
| **Video Demo**         | [https://youtu.be/jyC5mCBqG0o](https://youtu.be/jyC5mCBqG0o)  |
| **Drive Laporan**       |      https://drive.google.com/file/d/1HXH7MQkzaisTUVJyOtMvuCIPOARYARl-/view?usp=sharing    |

---

## 📷 Contoh Tampilan Aplikasi
Berikut ini adalah beberapa tampilan antarmuka dari aplikasi **Checklist Kebersihan Toilet** yang telah dibangun dan diuji:

### Halaman Login
Tampilan login digunakan oleh petugas dan admin untuk mengakses aplikasi. Pengguna diminta untuk memasukkan **username dan password** sebelum masuk ke halaman utama sistem.

![WhatsApp Image 2025-06-06 at 19 36 24](https://github.com/user-attachments/assets/dbe0ba54-3047-473d-9f5c-5945d4e9f9f9)

---
### Halaman Home
Setelah berhasil login, pengguna akan diarahkan ke halaman **Home**. Halaman ini menampilkan menu navigasi utama seperti checklist, data toilet, dan laporan. Desainnya sederhana dan mudah dipahami.

![image](https://github.com/user-attachments/assets/11d97eb0-3501-45c2-a519-c71638d3d0fb)

---
### Data Checklist
Halaman **Data Checklist** menampilkan daftar checklist kebersihan yang telah diisi oleh petugas. Setiap entri mencakup **tanggal, lokasi toilet, nama petugas**, dan status checklist.

![WhatsApp Image 2025-06-06 at 19 36 02](https://github.com/user-attachments/assets/9768d8f5-c848-4ccc-8ffe-ff06cd600941)

---
### Data Toilet
Tampilan ini digunakan untuk **mengelola daftar toilet** berdasarkan lokasi. Admin dapat menambahkan toilet baru atau mengedit data yang sudah ada agar sistem tetap up-to-date dengan kondisi lapangan.

![image](https://github.com/user-attachments/assets/b4006391-b6f0-47d8-b96f-6ad313e6f641)

---

### Data Inspektur
Halaman ini digunakan untuk menampilkan dan mengelola data petugas atau **inspektur kebersihan**. Data yang ditampilkan mencakup nama, username, serta akses untuk menambah atau menghapus petugas.

![image](https://github.com/user-attachments/assets/aa76c7f1-9feb-4c32-bf79-fa1dde6b80d4)

---

## ✅ Kesimpulan

Proyek aplikasi **Checklist Kebersihan Toilet** ini berhasil dibangun menggunakan framework **CodeIgniter 4**, didukung oleh **MySQL** sebagai database dan antarmuka berbasis **HTML/CSS + Bootstrap**. Fitur-fitur utama seperti input checklist harian, pengelolaan data toilet, login multiuser (admin dan petugas), serta laporan checklist dalam bentuk tabel dan PDF telah berhasil diterapkan dengan baik.

Praktikum ini memberikan pemahaman langsung tentang:

- Implementasi struktur database relasional
- Penggunaan konsep **MVC** (Model-View-Controller)
- Pengelolaan data dinamis dengan **Query Builder**
- Penerapan **validasi form**, **relasi antar tabel**, dan fitur **DataTables**
- Penerapan fitur **cetak laporan PDF** menggunakan DomPDF

---

## 🙌 Penutup

Aplikasi ini membuktikan bahwa proses digitalisasi kegiatan operasional seperti checklist kebersihan toilet dapat dilakukan dengan efektif menggunakan teknologi web. Dengan desain antarmuka yang user-friendly dan sistem backend yang terstruktur, aplikasi ini tidak hanya memudahkan petugas dalam menginput data, tetapi juga membantu admin dalam pengawasan dan pelaporan.

Semoga dokumentasi dan aplikasi ini dapat bermanfaat sebagai referensi maupun acuan dalam pengembangan proyek serupa ke depannya.

---

## 📅 Tahun Akademik

**Universitas Pelita Bangsa**  
Fakultas Teknik — Teknik Informatika  
Tahun Akademik 2024/2025
