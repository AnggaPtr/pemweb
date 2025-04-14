belajar bootstrap

1. Struktur Umum Dokumen


<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html> menyatakan bahwa ini adalah dokumen HTML5.

<html lang="en"> menunjukkan bahwa bahasa utama dokumen adalah Inggris.


2. Bagian <head>
Berisi metadata dan pemanggilan file eksternal:


<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
charset="UTF-8" agar mendukung berbagai karakter Unicode.

viewport digunakan untuk memastikan tampilan responsif pada berbagai perangkat.

Link CSS:


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
Bootstrap 5 digunakan untuk sistem grid, komponen, dan utilitas UI.

Font Awesome digunakan untuk ikon media sosial.

Style internal:

Mengatur desain seperti card, profile-img, efek hover, dan scroll behavior yang halus.


3. Navbar

<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
Menggunakan class Bootstrap untuk membuat navbar yang responsif dan berwarna biru.

Terdapat menu navigasi seperti Home, About, Projects (dropdown), dan Contact.

Terdapat fitur pencarian di sebelah kanan.

Dropdown menu pada Projects sudah dibuat dengan benar, menggunakan komponen dropdown Bootstrap.


4. Profile Section

<img src="../assets/Mbappe.jpg" class="rounded-circle mx-auto profile-img" alt="Profile Picture">
Menampilkan gambar profil berbentuk lingkaran, dengan efek bayangan dan border putih.

Diikuti nama, jurusan, fakultas, lokasi, dan tanggal dalam bentuk tombol.

Perlu diperhatikan agar path gambar benar dan gambar tersedia agar tampil dengan baik di browser.


5. About Section

<section id="about">
Menjelaskan identitas pengguna: jurusan, hobi, tempat tinggal, dan umur.

Ditampilkan dalam card dengan desain Bootstrap yang sederhana dan terpusat.


6. Skills Section

<div class="progress-bar bg-success" style="width: 20%">20%</div>
Tiga keahlian ditampilkan: HTML, CSS, dan Bootstrap.

Menggunakan progress bar Bootstrap dengan lebar 20% sesuai tingkat kemampuan.

Progress bar memiliki warna yang berbeda untuk tiap skill.

Bagian ini dapat diperluas dengan menambahkan skill lain seperti JavaScript, PHP, atau framework lainnya.


7. Contact / Social Media Section

<section id="contact">
Bagian ini berfungsi untuk menampilkan media sosial.

Terdapat ikon globe, Instagram, dan GitHub.

Instagram dan GitHub sudah memiliki link yang aktif, sementara ikon globe belum diarahkan ke mana pun.

Disarankan untuk menghapus ikon globe jika tidak digunakan atau menggantinya dengan link ke blog atau portfolio lain.


8. Footer

<footer>
  <div class="container text-center">
    <p class="mb-0 text-muted">&copy; 2025 Angga Kurnia Putra. All Rights Reserved.</p>
  </div>
</footer>
Menampilkan informasi hak cipta di bagian bawah halaman dengan desain sederhana dan bersih.


9. Script

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
Memuat bundle Bootstrap JS untuk mendukung fitur interaktif seperti dropdown, navbar collapse, dan lainnya.


Kelebihan

-Responsif dan mobile-friendly berkat penggunaan Bootstrap.
-Desain modern dan rapi dengan efek visual yang ringan.
-Navigasi antar bagian mudah dan terintegrasi dengan baik.
-Sudah menyertakan link sosial media.
-Penggunaan class dan ID sudah sesuai standar HTML.


Kekurangan dan Saran Perbaikan

-Gambar Profil Berasal dari Path Lokal

Path: ../assets/Mbappe.jpg

➤ Gambar tidak akan muncul jika file dipindahkan ke server atau dikirim ke orang lain tanpa folder assets.

-Deskripsi "About Me" Kurang Terstruktur

➤ Kalimatnya panjang tanpa tanda baca yang jelas. Perlu dipisah jadi beberapa kalimat agar lebih mudah dibaca.

-Tidak Ada Bagian Pendidikan atau Pengalaman

➤ Untuk profil personal yang lengkap, sebaiknya ada informasi pendidikan formal dan pengalaman (magang, organisasi, proyek).

-Tidak Ada Optimasi SEO

➤ Tidak ada meta tag description, keywords, atau author di <head>, yang penting untuk pencarian Google.

-Tidak Ada Aksesibilitas Tambahan

➤ Tidak ada aria-label atau alt yang informatif pada ikon media sosial. Ini penting untuk pengguna screen reader.

Konten Statis (Hardcoded)

➤ Semua data masih ditulis manual (lokasi, tanggal, nama, skill). Untuk pengembangan lebih lanjut, akan lebih baik jika datanya dinamis atau modular.

	
Kesimpulan
Kode HTML ini sudah sangat baik dari segi struktur, desain, dan fungsionalitas dasar. Halaman cocok digunakan sebagai profil personal atau tugas portfolio. Tinggal ditingkatkan sedikit di konten dan optimasi teknis jika ingin digunakan secara profesional.

.








