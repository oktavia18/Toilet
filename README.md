# 🚻 Checklist Kebersihan Toilet — Aplikasi Web

## 📌 Deskripsi Proyek

**Checklist Kebersihan Toilet** adalah aplikasi berbasis web yang dikembangkan untuk membantu petugas kebersihan dalam mencatat dan memantau aktivitas kebersihan toilet secara digital dan real-time. Aplikasi ini dirancang agar proses checklist dapat dilakukan dengan efisien, terdokumentasi, dan dapat dicetak dalam bentuk laporan.

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

- Figma:  
  [Mockup Aplikasi](https://www.figma.com/design/ZM4oCEA9QWZoSumzUwr9zn/Mockup-Checklist-Toilet)

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


## 👥 Anggota Tim & Tanggung Jawab

| No | Nama                           | Tugas                                                                 |
|----|--------------------------------|------------------------------------------------------------------------|
| 1  | **Luthfi Fauzan**              | Backend development (CI4), deployment ke web hosting                  |
| 2  | **Dhiyaulhaq Al Maududi**      | Perancangan database (ERD), relasi antar tabel                        |
| 3  | **Raditya Tansy Lizara**       | Desain antarmuka, pembuatan mockup (Figma), dan penulisan laporan     |
| 4  | **Oktavia Rizkha Kurniawati**  | Desain UI (HTML+CSS), use case diagram, penyusunan laporan akhir      |

---

## 📷 Cuplikan Tampilan

### 🧾 DataTables Checklist
Menampilkan daftar checklist kebersihan lengkap dengan fitur search, sort, dan pagination.

![DataTables Screenshot](Gambar/image-4.png)

### 🧾 Laporan PDF
Hasil cetak laporan checklist dalam bentuk file PDF.

![Laporan PDF](Gambar/image-5.png)

---

## 📅 Tahun Akademik

**Universitas Pelita Bangsa**  
Fakultas Teknik — Teknik Informatika  
Tahun Akademik 2024/2025  

---

## 📞 Kontak Tim (Opsional)

> Hubungi kami melalui GitHub repo untuk kontribusi, pertanyaan, atau kolaborasi.

---

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

## 📅 Tahun Akademik

**Universitas Pelita Bangsa**  
Fakultas Teknik — Teknik Informatika  
Tahun Akademik 2024/2025  

## <img src="img/google-drive.png" width=20> Link Laporan Proyek

| **Keterangan**                | **Link**                                              |
|------------------------------|----------------------------------------------------|
| **Poster**            |   https://drive.google.com/file/d/1LAr2ec6YrOxuGNU3YmMtm6AoMzlNkpYm/view?usp=sharing        |
| **YouTube**         | https://youtu.be/jyC5mCBqG0o   |
| **Drive Laporan**       |          |
