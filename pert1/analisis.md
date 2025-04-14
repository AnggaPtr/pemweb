# Topik: Membuat Web HTML

## 1. Membuat Struktur Folder

1. Buka terminal Ubuntu (CMD) dan buat folder untuk proyek pemrograman:
   ```sh
   mkdir pemrograman
   cd pemrograman
   ```
2. Buka VS Code dengan perintah:
   ```sh
   code .
   ```
3. Buat folder baru bernama `pert1` dan di dalamnya buat folder `coding`.
4. Di dalam folder `coding`, buat dua file :

  - .env dan docker-compose.yml

5. Masuk ke folder `coding` dan buat folder `nginx` serta beberapa file berikut:

  - nginx dan buat file di dalam nginx dengan nama "nginx.conf"
   

## 2. Menulis Konfigurasi File

### `.env`
```env
COMPOSE_PROJECT_NAME=esgul  # Sesuaikan nama proyek
REPOSITORY_NAME=pemweb      # Sesuaikan dengan nama repository
IMAGE_TAG=latest
```

### `docker-compose.yml`
```yml
version: '3'

services:
  web:
    image: nginx:latest
    ports:
      - 80:80
    volumes:
      - ./nginx/nginx.conf:/etc/nginx/conf.d/default.conf
      - ./src/:/usr/share/nginx/html
```

### `nginx.conf`
```nginx
server {
    listen 80;
    server_name localhost;

    root /usr/share/nginx/html;
    index index.html index.htm;

    location / {
        try_files $uri $uri/ =404;
    }
}
```

## 3. Menjalankan Docker

1. Periksa kembali setiap file untuk memastikan tidak ada kesalahan atau typo.
2. Buka terminal, masuk ke folder `coding`, lalu jalankan perintah berikut:
   ```sh
   docker compose up -d --build
   ```
3. Pastikan aplikasi **Docker** sudah berjalan sebelum menjalankan perintah di atas.

## 4. Menambahkan File `index.html`

1. Kembali ke **VS Code**, masuk ke folder `src`, lalu buat file `index.html`.
2. Tambahkan kode berikut di dalamnya:
   ```html
   <!DOCTYPE html>
   <html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Document</title>
   </head>
   <body>
       test.
   </body>
   </html>
   ```

## 5. Menguji Hasil di Browser

1. Buka browser dan akses:
   ```
   localhost/index.html
   ```
2. Jika muncul kata **"test"** di pojok kiri atas, berarti program berjalan dengan sukses.
3. Jika muncul **"404 NOT FOUND"**, periksa kembali file dan konfigurasi yang telah dibuat, karena kemungkinan ada kesalahan ketik atau ada beberapa yang belum di tambahkan pada kode programnya.



# Analisis Website Sederhana

## Metode 5W + 1H

**What (Apa):**
Website sederhana yang terdiri dari dua halaman, yaitu `home.html` dan `profile.html`. Halaman ini berfungsi sebagai beranda dan perkenalan diri.

**Why (Mengapa):**
Website ini dibuat sebagai latihan dasar untuk memahami dan menguasai struktur HTML, seperti penggunaan tag `<a>`, `<section>`, dan `<table>`.

**Who (Siapa):**
Website ini dibuat oleh Angga Kurnia Putra, mahasiswa Universitas Esa Unggul Tangerang.

**Where (Di mana):**
Saat ini dijalankan secara lokal di komputer, namun bisa dikembangkan dan diunggah ke internet (misalnya GitHub Pages atau hosting lainnya).

**When (Kapan):**
Dibuat saat proses belajar HTML, di tahap awal pembelajaran pengembangan web (front-end).

**How (Bagaimana):**
Menggunakan tag HTML dasar, seperti heading, paragraf, tautan, tabel, dan struktur layout sederhana. Navigasi dilakukan melalui hyperlink antar halaman.

---

## Analisis SWOT

**Strength (Kekuatan):**
Website sudah memiliki struktur HTML yang baik dan menggunakan elemen yang tepat seperti section dan tabel. Navigasi antar halaman juga sudah bekerja dengan benar.

**Weakness (Kelemahan):**
Tampilan masih polos karena belum menggunakan CSS. Selain itu, belum ada fitur interaktif seperti form atau responsif untuk perangkat mobile.

**Opportunity (Peluang):**
Website ini bisa dikembangkan menjadi portofolio pribadi, ditambahkan desain menggunakan CSS, dan fitur interaktif menggunakan JavaScript.

**Threat (Ancaman):**
Jika tidak segera dikembangkan lebih lanjut, website bisa terlihat kurang menarik. Selain itu, tanpa struktur file yang jelas, proyek bisa jadi sulit dikelola ke depannya.


Dibuat oleh: **Angga Kurnia Putra**
Universitas Esa Unggul - Jurusan Informatika