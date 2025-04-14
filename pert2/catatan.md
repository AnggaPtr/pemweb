# Step-by-Step Membuat Halaman Profil dengan HTML dan Bootstrap

## 1. Menyiapkan Struktur Dasar HTML
Mulailah dengan membuat file HTML dan tentukan struktur dasar HTML yang dibutuhkan.

```html
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Angga Kurnia Putra - Profile</title>
</head>
<body>
  <!-- Konten akan dimulai di sini -->
</body>
</html>

2. Menambahkan Link ke Bootstrap dan Font Awesome
Agar tampilan lebih menarik dan responsif, kita akan menggunakan Bootstrap dan Font Awesome untuk ikon.

Bootstrap: Framework CSS untuk tata letak dan desain responsif.

Font Awesome: Untuk ikon yang menarik.


<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
</head>

3. Menambahkan Navbar
Navbar digunakan untuk navigasi halaman, seperti Home, About, Skills, dan Contact.


<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
    <div class="container-fluid">
      <a class="navbar-brand fw-bold" href="#">Angga Profile</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#skills">Skills</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

4. Membuat Profil Section
Buat bagian profil dengan gambar, nama, dan informasi singkat. Tambahkan gambar dengan format round (bulat) agar terlihat menarik.


<section class="py-5">
  <div class="container text-center">
    <div class="card p-4">
      <img src="path/to/your/profile.jpg" class="rounded-circle mx-auto profile-img" alt="Profile Picture">
      <h3 class="mt-3 fw-bold">Angga Kurnia Putra</h3>
      <p class="text-muted mb-1">Fakultas Ilmu Komputer</p>
      <p class="text-muted">Teknik Informatika</p>
    </div>
  </div>
</section>

5. Menambahkan About Me Section
Buat deskripsi tentang dirimu, misalnya tentang pendidikan dan hobi.


<section id="about" class="py-5">
  <div class="container">
    <div class="card p-4">
      <h4 class="text-center mb-4 fw-semibold">About Me</h4>
      <p class="text-muted text-center">
        Saya adalah seorang mahasiswa Teknik Informatika dengan minat di bidang pengembangan web dan desain. 
        Hobi saya adalah memancing. Saya tinggal di Desa Bitung Jaya dan saat ini berusia 20 tahun.
      </p>
    </div>
  </div>
</section>

6. Membuat Skills Section
Tampilkan skill yang kamu miliki, misalnya HTML, CSS, dan Bootstrap, dengan menggunakan progress bar untuk menunjukkan tingkat kemahiran.


<section id="skills" class="py-5">
  <div class="container">
    <div class="card p-4">
      <h5 class="fw-semibold mb-4 text-center">My Skills</h5>
      <p class="mb-1">HTML</p>
      <div class="progress mb-3">
        <div class="progress-bar bg-success" style="width: 70%">70%</div>
      </div>
      <p class="mb-1">CSS</p>
      <div class="progress mb-3">
        <div class="progress-bar bg-info" style="width: 60%">60%</div>
      </div>
      <p class="mb-1">Bootstrap</p>
      <div class="progress mb-3">
        <div class="progress-bar bg-primary" style="width: 50%">50%</div>
      </div>
    </div>
  </div>
</section>

7. Menambahkan Section Kontak dengan Sosial Media
Di bagian ini, tampilkan ikon sosial media (Instagram, GitHub, dll.) dan beri tautan yang relevan.


<section id="contact" class="py-5">
    <div class="container">
      <div class="card p-4 text-center">
        <h5 class="fw-semibold mb-3">Find Me On</h5>
        <div class="social-icons">
          <a href="https://instagram.com/si_ewow" target="_blank"><i class="fab fa-instagram text-danger"></i></a>
          <a href="https://github.com/AnggaPtr" target="_blank"><i class="fab fa-github text-dark"></i></a>
        </div>
      </div>
    </div>
  </section>

8. Menambahkan Footer
Footer untuk informasi hak cipta atau informasi lainnya.


<footer>
  <div class="container text-center">
    <p class="mb-0 text-muted">&copy; 2025 Angga Kurnia Putra. All Rights Reserved.</p>
  </div>
</footer>

9. Menambahkan Script untuk Bootstrap
Tambahkan script untuk fungsi interaktif Bootstrap seperti dropdown dan collapse menu.


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>

10. Menyelesaikan Halaman Profil
Cek kembali seluruh kode untuk memastikan tidak ada tag HTML yang hilang dan semuanya berfungsi dengan baik.

Contoh Akhir Kode Profil:

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Angga Kurnia Putra - Profile</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
</head>
<body>
  <!-- NAVBAR -->
  <!-- (Navbar code here) -->

  <!-- PROFILE SECTION -->
  <!-- (Profile section code here) -->

  <!-- ABOUT SECTION -->
  <!-- (About section code here) -->

  <!-- SKILLS SECTION -->
  <!-- (Skills section code here) -->

  <!-- CONTACT SECTION -->
  <!-- (Contact section code here) -->

  <!-- FOOTER -->
  <!-- (Footer code here) -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>