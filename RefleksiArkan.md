

### 1. Apa perbedaan bekerja sendiri dengan bekerja menggunakan Git dan GitHub?

* **Bekerja sendiri:** Perubahan kode langsung disimpan di satu tempat tanpa riwayat perubahan yang detail. Jika terjadi kesalahan (error), proses *rollback* (mengembalikan ke versi sebelumnya) sangat sulit atau bahkan tidak mungkin dilakukan jika file aslinya sudah ditimpa.
* **Menggunakan Git & GitHub:** Memiliki sistem *version control* yang mencatat setiap baris perubahan (history). Memudahkan kolaborasi secara bersamaan tanpa takut kode yang dibuat oleh anggota tim lain tertimpa atau hilang, serta menyediakan cadangan (backup) secara *cloud*.

### 2. Apa manfaat branch?

* Memungkinkan kita untuk mengembangkan fitur baru atau memperbaiki bug secara terisolasi tanpa mengganggu kode utama (biasanya di branch `main` atau `master`).
* Memudahkan pengerjaan paralel, di mana setiap anggota tim bisa mengerjakan fitur masing-masing di branch yang berbeda secara bersamaan.

### 3. Mengapa Pull Request diperlukan?

* Sebagai jembatan untuk menggabungkan kode dari branch fitur ke branch utama dengan aman.
* Menjadi wadah diskusi dan pemeriksaan kode (*code review*) oleh anggota tim lain sebelum kode tersebut resmi digabungkan, sehingga meminimalisir masuknya *bug* ke sistem utama.

### 4. Apa manfaat Code Review?

* Meningkatkan kualitas kode melalui sudut pandang orang lain (bisa menemukan potensi *bug* atau celah keamanan yang tidak disadari pembuatnya).
* Menjadi sarana berbagi pengetahuan (*knowledge sharing*) antar anggota tim mengenai teknik koding yang lebih efektif atau bersih (*clean code*).

### 5. Error apa yang paling sulit kalian selesaikan?

* *Contoh jawaban:* Konflik penggabungan kode (**Merge Conflict**) yang terjadi pada file utama secara bersamaan, atau masalah *dependency mismatch* (perbedaan versi pustaka/library) antar komputer anggota tim yang menyebabkan program berjalan di satu perangkat tapi error di perangkat lain.

### 6. Bagaimana kalian menemukan solusinya?

* Membaca pesan *error* secara teliti di terminal atau konsol.
* Berdiskusi bersama anggota tim untuk mencocokkan baris kode mana yang harus dipertahankan saat terjadi konflik.
* Mencari referensi solusi melalui dokumentasi resmi atau forum diskusi seperti Stack Overflow.

### 7. Apa kontribusi terbesar kalian dalam kelompok?

* *Contoh jawaban:* Bertanggung jawab membangun fitur inti tertentu, membantu merapikan struktur folder proyek, atau aktif membantu anggota tim lain menyelesaikan *merge conflict* dan melakukan *code review*.

### 8. Jika menjadi programmer profesional, kebiasaan apa dari kegiatan ini yang akan kalian pertahankan?

* Selalu membuat *commit message* yang jelas dan deskriptif agar riwayat perubahan mudah dipahami.
* Disiplin menggunakan *branch* terpisah untuk setiap fitur baru.
* Selalu melakukan *testing* dan *code review* sebelum mempublikasikan kode ke lingkungan produksi.

---