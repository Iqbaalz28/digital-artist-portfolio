# 🎨 Digital Artist Portfolio

Aplikasi web portofolio yang dirancang khusus untuk seniman digital, ilustrator, dan desainer grafis. Dibangun menggunakan framework **CodeIgniter 3** dengan arsitektur **HMVC** (Hierarchical Model View Controller) untuk modularitas yang lebih baik.

Aplikasi ini memudahkan seniman untuk memamerkan karya (Showcase), menulis blog, dan mengelola profil profesional mereka melalui panel admin yang intuitif.

## 🚀 Fitur Utama

### 🖥️ Halaman Publik (Frontend)
* **Home & Landing Page:** Menampilkan *featured works* dan pengenalan singkat.
* **Gallery & Illustrations:** Galeri interaktif dengan fitur lightbox (Fresco) untuk menampilkan karya seni resolusi tinggi.
* **Blog:** Halaman artikel untuk berbagi proses kreatif, tutorial, atau berita.
* **About & Profile:** Informasi detail mengenai seniman, pengalaman, dan *honours* (penghargaan).
* **Contact Form:** Memudahkan klien potensial untuk menghubungi seniman.

### ⚙️ Panel Admin (Backend)
Menggunakan template **AdminLTE**, panel ini memiliki fitur manajemen konten lengkap:
* **Dashboard:** Ringkasan statistik.
* **Manajemen Karya:** CRUD (Create, Read, Update, Delete) untuk modul `Gallery` dan `Illustration`.
* **Manajemen Blog:** Editor teks (TinyMCE) untuk menulis dan mempublikasikan artikel.
* **Manajemen Pengguna:** Mengelola akun admin dan profil pengguna.
* **Data Pendukung:** Mengelola data `Client` (Testimonial), `Interview`, dan `Honour` (Penghargaan).
* **File Manager:** Upload dan manajemen aset gambar.

## 🛠️ Teknologi yang Digunakan

* **Backend:** PHP 7.x, [CodeIgniter 3](https://codeigniter.com/)
* **Arsitektur:** HMVC (menggunakan `MX extension`)
* **Database:** MySQL / MariaDB
* **Frontend Admin:** [AdminLTE 2](https://adminlte.io/), Bootstrap 3
* **Frontend Public:** Custom Template, jQuery, Owl Carousel, Fresco JS
* **Dependencies:** Dikelola via `composer.json` (jika ada update library)

## 📦 Struktur Folder

Proyek ini menggunakan struktur HMVC dimana controller, model, dan view dikelompokkan per modul:

```text
application/
├── modules/
│   ├── about/
│   ├── auth/          # Sistem Login
│   ├── blog/          # Modul Artikel
│   ├── gallery/       # Modul Galeri Foto
│   ├── illustration/  # Modul Ilustrasi
│   ├── users/         # Manajemen User
│   └── ... (modul lainnya)
├── third_party/
│   └── MX/            # Library HMVC
└── config/
```
