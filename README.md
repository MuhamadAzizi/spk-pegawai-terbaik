# SPK Pegawai Terbaik

SPK untuk memilih pegawai terbaik studi kasus pada BPS Kabupaten Serang menggunakan metode TOPSIS.

# Import Project

- Clone repositori ini kedalam folder htdocs
- Buka XAMPP (versi yang digunakan author adalah v7.4.1)
- Jalankan Apache, dan MySQL
- Buka browser dan masuk ke `localhost/phpmyadmin`
- Buat database dengan nama `spk_pegawai_terbaik` baru kemudian import file database yang ada di folder `database/spk_pegawai_terbaik.sql`
- Sistem pendukung keputusan sudah bisa digunakan dengan mengunjungi link `localhost/spk-pegawai-terbaik`

# Users

- `Kasubag TU`
  - Username: `admin`
  - Password: `admin`
  - Hak akses: `Nilai Keputusan`, `Matriks`, `Hasil`
- `Pimpinan`
  - Username: `pimpinan`
  - Password: `pimpinan`
  - Hak akses: `Alternatif`, `Kriteria`

# Fitur

## Alternatif

Daftar alternatif atau pegawai yang akan di plot terhadap perhitungan SPK TOPSIS. Di halaman ini users/pimpinan dapat:

- Menambah alternatif
- Mengedit alternatif
- Dan, Menghapus alternatif

## Kriteria

Kriteria merupakan parameter dalam mengukur perhitungan SPK. Di halaman ini users/kasubag_tu dapat menambah, mengedit, dan menghapus kriteria. Setiap kriteria memiliki bobot dan jenisnya masing-masing.

- `ID`: Sesuaikan dengan kriteria yang sudah ada, **jangan gunakan ID yang sama**
- `Kriteria`: Nama kriteria yang akan dipakai
- `Bobot`: Bobot kriteria, w > 0
- `Jenis`
  - `Benefit`: Untuk kriteria yang memiliki impact positif
  - `Cost`: Untuk kriteria yang memiliki impact negatif

## Nilai Keputusan

Mengisi nilai per kriteria pada setiap alternatif atau pegawai.

- Pilih alternatif yang mau di isi nilainya
- Isi nilai pada setiap kriteria yang ada

## Matriks

Melakukan perhitungan dan melihat hasil perhitungan SPK metode TOPSIS. Selain itu dapat juga mengubah serta menghapus nilai keputusan yang sebelumnya sudah diisi.

## Hasil

Hasil akhir dari perhitungan TOPSIS. Didalamnya berisi informasi alternatif atau pegawai yang mendapat nilai tertinggi dan juga skornya serta dapat membuat surat secara otomatis dengan mengisi form yang sudah disediakan.

**Peringatan**: Sebelum masuk ke halaman hasil, terlebih dahulu users/kasubag_tu harus masuk ke halaman `matriks` jika tidak maka akan error atau tidak muncul.

# Special Thanks

Thanks to BPS Kabupaten Serang atas kesediaan tempatnya untuk dilakukan penelitian
