# Website Profil XI RPL - Kelompok 9

Website Profil Kelas XI Rekayasa Perangkat Lunak SMKN 1 Garut. Proyek pembelajaran kolaborasi tim menggunakan Git dan GitHub (LKPD 4).

## 📚 LKPD 4 - Kolaborasi Tim Menggunakan Git dan GitHub

### Identitas Pembelajaran
| Informasi | Detail |
|-----------|--------|
| **Satuan Pendidikan** | SMKN 1 Garut |
| **Program Keahlian** | Pengembangan Perangkat Lunak dan Gim |
| **Konsentrasi Keahlian** | Rekayasa Perangkat Lunak (RPL) |
| **Mata Pelajaran** | Dasar-Dasar Pengembangan Perangkat Lunak dan Gim |
| **Fase/Kelas** | F / XI RPL |
| **Alokasi Waktu** | 2 × 45 menit |
| **Model** | Pembelajaran Mandiri Berbasis Proyek |
| **Nomor Kelompok** | 9 |

### Tujuan Pembelajaran
Setelah menyelesaikan LKPD ini, peserta didik mampu:
1. Menjelaskan konsep kolaborasi dalam pengembangan perangkat lunak
2. Menjelaskan fungsi branch dalam Git
3. Meng-clone repository GitHub
4. Membuat dan menggunakan branch
5. Mengembangkan fitur secara terpisah dari branch utama
6. Membuat commit yang bermakna
7. Melakukan push branch ke GitHub
8. Membuat Pull Request
9. Melakukan Code Review sederhana
10. Memperbaiki kode berdasarkan hasil review
11. Melakukan merge Pull Request
12. Melakukan sinkronisasi repository menggunakan git pull
13. Mengidentifikasi konflik sederhana
14. Menyelesaikan konflik secara mandiri
15. Menerapkan etika kerja kolaboratif dalam pengembangan perangkat lunak

---

## 👥 Profil Kelas

| Informasi | Detail |
|-----------|--------|
| **Nama Kelas** | XI Rekayasa Perangkat Lunak |
| **Nama Sekolah** | SMKN 1 GARUT |
| **Program Keahlian** | Pengembangan Perangkat Lunak dan Gim |
| **Konsentrasi Keahlian** | Rekayasa Perangkat Lunak (RPL) |

### Deskripsi Kelas
Kelas XI RPL adalah kelas yang terdiri dari siswa-siswi berprestasi di bidang Teknologi Informasi. Kami pernah menjuarai **Juara 1 Teater** dan **Juara 2 Padus**. Memiliki banyak murid yang berprestasi di berbagai bidang.

### Visi Kelas
Berusaha menjadi lebih baik dan mengikuti perlombaan antar jurusan untuk menunjukkan kemampuan terbaik dari kelas XI RPL dalam bidang pengembangan perangkat lunak.

---

## 🛠️ Anggota Tim

### 1. Raka Raditya - Project Manager
| Detail | Informasi |
|--------|-----------|
| **Nama** | Raka Raditya |
| **Peran** | Project Manager |
| **Kelas** | XI RPL 2 |
| **Tanggal Lahir** | 07 Maret 2010 |
| **No. Telepon** | 0895-0781-8994 |
| **Email** | rakaraditya4750@gmail.com |
| **Instagram** | @akaachenn |
| **GitHub** | [rakaXPPL2](https://github.com/rakaXPPL2) |

### 2. Arkan Muhammad Nazril - Developer Profil
| Detail | Informasi |
|--------|-----------|
| **Nama** | Arkan Muhammad Nazril |
| **Peran** | Developer Profil |
| **Kelas** | XI RPL 2 |
| **Tanggal Lahir** | 07 April 2009 |
| **No. Telepon** | 0857-2494-0975 |
| **Email** | arkanmuhammadnazril@gmail.com |
| **Instagram** | @arknnzril |
| **GitHub** | [Arkannaz](https://github.com/Arkannaz) |

### 3. Radit El Adzany - Developer Anggota
| Detail | Informasi |
|--------|-----------|
| **Nama** | Radit El Adzany |
| **Peran** | Developer Anggota |
| **Kelas** | XI RPL 2 |
| **Tanggal Lahir** | 24 April 2010 |
| **No. Telepon** | 0831-6619-1424 |
| **Email** | radithyaell2@gmail.com |
| **Instagram** | @radityaaell_ |
| **GitHub** | [radithyaell](https://github.com/radithyaell) |

### 4. Adjie Noer Wahad - Developer Kontak
| Detail | Informasi |
|--------|-----------|
| **Nama** | Adjie Noer Wahad |
| **Peran** | Developer Kontak |
| **Kelas** | XI RPL 2 |
| **Tanggal Lahir** | 26 Juli 2009 |
| **No. Telepon** | 0831-8057-0306 |
| **Email** | ajieniedek@gmail.com |
| **Instagram** | @ajienrwhd |
| **GitHub** | [ajieniedek-alt](https://github.com/ajieniedek-alt) |

---

## 💻 Struktur Proyek (Laravel)

```
Website-Profil-Kelas-XI-RPL/
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       └── AnggotaController.php    # Controller utama
│   └── Models/
│       └── User.php
├── resources/
│   └── views/
│       ├── profil.blade.php             # Halaman profil kelas
│       ├── home.blade.php               # Halaman daftar anggota
│       ├── detail.blade.php             # Halaman detail anggota
│       └── welcome.blade.php            # Welcome page Laravel
├── routes/
│   └── web.php                          # Route definitions
├── database/
│   └── migrations/                      # Database migrations
├── composer.json                        # Laravel 13.x dependencies
├── package.json                         # Node.js dependencies
└── README.md                            # Dokumentasi proyek
```

---

## 🔧 Teknologi yang Digunakan

| Teknologi | Keterangan |
|-----------|------------|
| **Framework** | Laravel 13.17 |
| **PHP Version** | 8.3+ |
| **Database** | SQLite (default) |
| **Frontend** | Blade Template, Tailwind CSS, Vanilla JS |
| **Version Control** | Git & GitHub |
| **Font** | Google Fonts (Inter, JetBrains Mono) |

---

## 🔄 Alur Kerja Git & GitHub

```
Clone Repository
      ↓
Create Branch (per fitur)
      ↓
Coding pada Branch
      ↓
git add .
      ↓
git commit -m "Pesan commit yang jelas"
      ↓
git push -u origin NAMA_BRANCH
      ↓
Create Pull Request
      ↓
Code Review (Project Manager)
      ↓
Perbaikan (jika diperlukan)
      ↓
Merge Pull Request
      ↓
git switch main
      ↓
git pull origin main
```

### Pembagian Branch per Anggota

| Anggota | Branch | Fitur |
|---------|--------|-------|
| Raka Raditya | main | Project Manager, Merge & Review |
| Arkan Muhammad Nazril | fitur-profil | profil.blade.php |
| Radit El Adzany | fitur-anggota | home.blade.php, detail.blade.php |
| Adjie Noer Wahad | fitur-kontak | kontak.blade.php |

---

## 🚀 Cara Menjalankan Proyek

### Prerequisites
- PHP 8.3+
- Composer
- Node.js & npm

### Installation

```bash
# Clone repository
git clone https://github.com/rakaXPPL2/Website-Profil-Kelas-XI-RPL.git
cd Website-Profil-Kelas-XI-RPL

# Install dependencies
composer install
npm install

# Copy environment file
cp .env.example .env

# Generate application key
php artisan key:generate

# Run migrations
php artisan migrate

# Start development server
php artisan serve
```

### Routes yang Tersedia

| Route | Method | Deskripsi |
|-------|--------|-----------|
| `/` | GET | Halaman profil kelas |
| `/anggota` | GET | Halaman daftar anggota |
| `/anggota/{id}` | GET | Halaman detail anggota |

---

## 📞 Kontak

| Kontak | Informasi |
|--------|-----------|
| **Email** | rakaraditya4750@gmail.com |
| **Instagram** | @akaachenn |
| **Alamat Sekolah** | SMKN 1 Garut, Jalan Cimanuk Nomor 309A, Kelurahan Pataruman, Kecamatan Tarogong Kidul, Kabupaten Garut, Jawa Barat |

---

## 📋 Checklist Pengerjaan (LKPD 4)

### Repository
- [x] Repository Public
- [x] Nama repository: website-profil-xi-rpl-09
- [x] README tersedia
- [x] Semua anggota tercantum

### Git
- [x] Setiap anggota memiliki branch
- [x] Tidak ada pekerjaan langsung di main
- [x] Commit memiliki pesan yang jelas
- [x] Branch berhasil di-push

### GitHub
- [x] Pull Request dibuat
- [x] Pull Request direview
- [x] Ada komentar review
- [x] Pull Request di-merge

### Produk
- [x] profil.blade.php (Laravel) → Halaman Profil Kelas
- [x] home.blade.php (Laravel) → Halaman Daftar Anggota
- [x] detail.blade.php (Laravel) → Halaman Detail Anggota
- [x] kontak.blade.php (Laravel) → Halaman Kontak
- [x] README.md

### Kolaborasi
- [x] Semua anggota berkontribusi
- [x] Pembagian tugas jelas
- [x] Masalah didiskusikan

---

## 📸 BUKTI PENGERJAAN (Screenshot yang Diperlukan)

Berdasarkan LKPD 4, berikut bukti screenshot yang perlu dikumpulkan:

| No | Bukti | Screenshot yang Diperlukan |
|----|-------|---------------------------|
| 1 | **Repository GitHub** | Screenshot halaman repository di github.com |
| 2 | **Daftar Branch** | Screenshot tab "Branches" atau output `git branch` |
| 3 | **Commit** | Screenshot tab "Commits" di GitHub |
| 4 | **Pull Request** | Screenshot Pull Request yang sudah dibuat |
| 5 | **Code Review** | Screenshot komentar review di Pull Request |
| 6 | **Merge** | Screenshot Pull Request yang sudah di-merge |
| 7 | **Hasil Akhir Main** | Screenshot branch main dengan semua file sudah merge |

### Cara Mengambil Screenshot Bukti:

1. **Repository GitHub**: Buka https://github.com/rakaXPPL2/Website-Profil-Kelas-XI-RPL
2. **Daftar Branch**: Klik tab "branches" atau jalankan `git branch -a`
3. **Commit**: Klik tab "commits" di repository
4. **Pull Request**: Klik tab "Pull requests" → pilih PR yang ada
5. **Code Review**: Buka PR → lihat bagian komentar review
6. **Merge**: Buka PR yang sudah di-merge → lihat status "Merged"
7. **Hasil Akhir**: Clone/pull terbaru → jalankan `php artisan serve` → screenshot hasilnya

---

## 📖 REFLEKSI KELOMPOK

### A. Refleksi Akhir (Kelompok 9)

**1. Sebelum belajar GitHub, saya berpikir bahwa...**
> Kami berpikir bahwa GitHub hanyalah tempat menyimpan kode secara online seperti Google Drive. Kami tidak mengetahui bahwa GitHub memiliki fitur kolaborasi yang sangat powerful seperti branch, Pull Request, dan Code Review. Kami juga mengira bahwa bekerja dalam tim hanya cukup dengan membagi tugas dan menggabungkan file secara manual, tanpa perlu Version Control System.

**2. Setelah melakukan kolaborasi dengan GitHub, saya memahami bahwa...**
> Kami memahami bahwa GitHub adalah alat yang sangat penting dalam pengembangan perangkat lunak. Branch memungkinkan setiap developer bekerja secara terpisah tanpa mengganggu kode utama. Pull Request memastikan setiap perubahan direview sebelum dimerge. Code Review membantu menjaga kualitas kode. Sinkronisasi dengan `git pull` memastikan semua anggota memiliki versi kode terbaru. Kolaborasi yang terstruktur meningkatkan produktivitas dan mengurangi konflik kode.

**3. Kesalahan/error yang saya alami mengajarkan saya bahwa...**
> Kami mengalami beberapa error selama proses pembelajaran ini:
> - **Merge conflict** ketika dua branch mengubah file yang sama
> - **Push rejected** ketika branch tidak up-to-date dengan main
> - **Branch tersesat** karena lupa switch branch saat mengerjakan fitur
> 
> Dari error-error tersebut, kami belajar bahwa:
> - Selalu `git pull` sebelum mulai bekerja
> - Selalu membuat branch baru untuk setiap fitur
> - Komunikasi antar anggota sangat penting agar tidak mengedit file yang sama
> - Error bukan tanda kegagalan, melainkan kesempatan untuk belajar lebih dalam
> - Jangan pernah takut error, justru error mengajarkan kita cara kerja yang benar

**4. Jika menjadi programmer profesional, kebiasaan apa dari kegiatan ini yang akan kalian pertahankan?**
> - **Selalu menggunakan branch** untuk setiap fitur atau perbaikan
> - **Selalu melakukan commit dengan pesan yang jelas** agar history dapat dilacak
> - **Melakukan Code Review** sebelum merge untuk menjaga kualitas kode
> - **Dokumentasi proyek** yang lengkap
> - **Komunikasi aktif** dengan tim melalui Pull Request comments
> - **Menyelesaikan konflik** dengan diskusi, bukan asal pilih salah satu versi
> - **Tidak pernah push langsung ke main** tanpa proses review
> - **git pull** selalu sebelum mulai bekerja

---

### B. Pertanyaan Conflict

**1. Mengapa conflict terjadi?**
> Conflict terjadi ketika dua atau lebih branch mengubah bagian yang sama dari file yang sama. Git tidak dapat secara otomatis menentukan versi mana yang benar, sehingga memerlukan campur tangan developer untuk memutuskan. Dalam kasus kami, conflict terjadi karena kami beberapa kali mengedit file README.md secara bersamaan di branch yang berbeda.

**2. Apakah conflict berarti Git rusak?**
> Tidak, conflict **bukan berarti Git rusak**. Justru Git bekerja dengan baik dengan mendeteksi perbedaan dan memberitahu kita. Conflict adalah hal yang **normal dan wajar** dalam pengembangan perangkat lunak. Git memastikan tidak ada kode yang hilang secara otomatis - semua versi tetap tersimpan dan developer tinggal memilih versi mana yang akan digunakan.

**3. Siapa yang harus menentukan versi kode yang benar?**
> Yang menentukan versi kode yang benar adalah **developer yang terkait** (yang membuat branch) dengan **diskusi bersama tim**. Project Manager juga berperan penting dalam Code Review untuk memutuskan versi mana yang paling sesuai dengan kebutuhan proyek. Tidak boleh satu orang saja yang menentukan tanpa berkonsultasi dengan tim.

**4. Mengapa komunikasi antar programmer penting?**
> Komunikasi antar programmer sangat penting karena:
> - **Mencegah conflict** - jika saling menginfomasikan file apa yang sedang diedit
> - **Melakukan Code Review** - saling memberikan feedback untuk meningkatkan kualitas kode
> - **Pembagian tugas yang jelas** - agar tidak ada pekerjaan yang tumpang tindih
> - **Menyelesaikan konflik** - memerlukan diskusi untuk menentukan solusi terbaik
> - **Transfer knowledge** - anggota baru dapat belajar dari anggota berpengalaman
> - **Efisiensi waktu** - tidak perlu mengulang pekerjaan yang sudah dilakukan orang lain
> - **Kualitas produk** - hasil akhir lebih baik karena sudah melalui diskusi dan review

---

## 🔗 Link Repository

- **Repository Utama**: [github.com/rakaXPPL2/Website-Profil-Kelas-XI-RPL](https://github.com/rakaXPPL2/Website-Profil-Kelas-XI-RPL)
- **Repository LKPD**: [github.com/rakaXPPL2/LKPD-4](https://github.com/rakaXPPL2/LKPD-4)

---

## 💬 Pesan untuk Peserta Didik

> **"JANGAN TAKUT ERROR."**
> 
> Dalam dunia pengembangan perangkat lunak, error bukan tanda bahwa kalian gagal. Error adalah informasi. Programmer profesional tidak selalu mengetahui jawabannya. Yang membedakan programmer adalah kemampuannya untuk:
> 
> **Membaca masalah → mencari informasi → mencoba solusi → menguji → memperbaiki → mendokumentasikan.**
> 
> Hari ini kalian tidak sedang sekadar belajar GitHub. Kalian sedang berlatih cara bekerja sebagai developer dalam sebuah tim.
> 
> Selamat bekerja, berdiskusi, bereksperimen, dan memecahkan masalah.

---

*Proyek Pembelajaran - SMKN 1 Garut - Kolaborasi Tim Menggunakan Git dan GitHub*
