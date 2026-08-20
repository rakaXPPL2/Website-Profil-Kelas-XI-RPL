1. **Perbedaan Bekerja Sendiri vs Bekerja Menggunakan Git & GitHub**
   * **Bekerja Sendiri (Tanpa Git):** Manajemen versi dilakukan secara manual (misal: memuat folder `project_v1`, `project_final`), risiko file tertimpa sangat tinggi, dan koordinasi tim sulit karena harus berkirim file manual.
   * **Menggunakan Git & GitHub:** Setiap perubahan tercatat otomatis (*history*), pembuatan fitur dilakukan tanpa merusak kode utama, dan banyak orang bisa bekerja bersamaan di repositori yang sama.

2. **Manfaat Branch**
   * Mengisolasi pengembangan fitur baru agar tidak mengganggu kode utama (*main*) yang sudah stabil.
   * Memungkinkan tiap anggota tim (seperti cabang `raka`, `adjie`, `Arkan`, dan `Radit`) bekerja mandiri di bagian masing-masing tanpa bentrok (*conflict*).

3. **Mengapa Pull Request (PR) Diperlukan?**
   * Sebagai mekanisme resmi untuk mengajukan penggabungan kode dari branch fitur ke branch utama.
   * Membuka ruang diskusi dan transparansi terhadap perubahan kode sebelum disatukan.
   * Mencegah *bug* atau kode rusak langsung masuk ke cabang utama.

4. **Manfaat Code Review**
   * **Meningkatkan Kualitas Kode:** Membantu menemukan kesalahan atau *bug* yang terlewat oleh pembuat kode.
   * **Transfer Pengetahuan:** Membantu anggota tim saling belajar *best practice* dan gaya penulisan kode.
   * **Menjaga Standar:** Memastikan penulisan kode konsisten sesuai standar proyek.

5. **Error yang Paling Sulit Diselesaikan**
   * Error otentikasi saat push (`Invalid username or token / Password authentication is not supported`) serta error struktur branch seperti `src refspec main does not match any` dan penolakan *non-fast-forward*. karna saya menggunakan LINUX
   

6. **Cara Menemukan Solusinya**
   * Membaca dan memahami pesan error yang tampil di terminal.
   * Mengetahui bahwa GitHub mewajibkan Personal Access Token (PAT) sebagai pengganti password.
   * Melakukan eksekusi perintah Git secara runtut (`git add`, `git commit`, `git branch -m`, hingga `git push --force`) untuk menyelaraskan repository lokal dan remote.

7. **Kontribusi Terbesar dalam Kelompok**
   * Menyiapkan inisialisasi awal repositori, mengatur dan membagi struktur branch tim (`raka`, `adjie`, `Arkan`, `Radit`), serta mengatasi kendala kendali versi/push di terminal agar seluruh anggota tim siap bekerja.

8. **Kebiasaan yang Akan Dipertahankan Saat Menjadi Programmer Profesional**
   * **Penerapan *Workflow* Git yang Rapi:** Selalu membuat branch terpisah untuk fitur baru dan rajin melakukan *commit* dengan pesan yang jelas.
   * **Manajemen Kredensial Aman:** Menggunakan Personal Access Token atau SSH Key untuk otentikasi.
   * **Kolaborasi Terstruktur:** Selalu melalui tahap *Pull Request* dan *Code Review* sebelum menggabungkan kode ke cabang *production*.