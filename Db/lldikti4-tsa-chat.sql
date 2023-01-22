-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 22 Jan 2023 pada 08.02
-- Versi server: 5.7.33
-- Versi PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lldikti4-tsa-chat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `judul_berita` varchar(50) NOT NULL,
  `author` varchar(50) NOT NULL,
  `deskripsi_berita` text NOT NULL,
  `gambar` mediumtext NOT NULL,
  `id_kategori` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `judul_berita`, `author`, `deskripsi_berita`, `gambar`, `id_kategori`) VALUES
(14, 'SOSIALISASI PELAPORAN AKADEMIK MELALUI APLIKASI NE', 'Putra Baik ', 'Dalam upaya melaksanakan Pengelolaan Sistem Informasi PDDIKTI, LLDIKTI Wilayah IV bersama dengan Universitas Telkom menyelenggarakan kegiatan Sosialisasi Pelaporan Akademik Melalui Aplikasi NEO Feeder bagi Operator Perguruan Tinggi, Senin, 20 Juni 2022 secara daring menggunakan aplikasi Zoom Cloud Meeting. Kegiatan ini dihadiri oleh Dr. M. Samsuri, S.Pd.,M.T. selaku kepala LLDIKTI Wilayah IV dan Dr. Dadan Rahadian S.T., M.M. Wakil Rektor Bidang Akademik Universitas TELKOM\r\n\r\nAcara ini mengundang seluruh perguruan tinggi swasta di Jawa Barat dan Banten. Narasumber yang hadir adalah Franova Herdianto S.Kom., M.Pi. yang merupakan Sub Koordinator Data dan Teknologi Informasi Dirjen Diktiristek. Plt. Sesditjen Diktiristek, Prof. Tjitjik Sri Tjahjandarie juga hadir dan memberikan arahan pada acara ini.\r\n\r\nSamsuri hadir membuka kegiatan secara langsung. Dalam sambutannya beliau menyampaikan bahwa  dengan dilaksanakannya kegiatan ini diharapkan memberikan pemahaman admin/operator PDDIKTI meningkat juga agar Pelaporan akademik PDDIKTI dapat meningkat menjadi 100%.', 'dash5.jpg', 3),
(15, 'Penyerahan SK Jabatan Akademik Dosen Kemdikbudrist', 'Putra Lagi', 'Sehubungan dengan terbitnya Salinan Keputusan Menteri Pendidikan, Kebudayaan, Riset, dan Teknologi Republik Indonesia pada perguruan tinggi, Lembaga Layanan Pendidikan Tinggi Wilayah IV Jawa Barat dan Banten menyelenggarakan kegiatan Penyerahan Surat Keputusan Kemendikbudristek. (6/7/2022)\r\n\r\nKegiatan ini dilaksanakan di Aula Gedung A kantor LLDIKTI Wilayah IV yang mengundang beberapa badan penyelenggara dan beberapa perguruan tinggi yaitu Universitas Raharja, Universitas Swadaya Gunung Jati, Universitas Ibn Khaldun, Universitas Islam Bandung, Universitas Adhirajasa Reswara Sanjaya, Universitas Islam “45”, Universitas Telkom, Universitas Komputer Indonesia, Sekolah Tinggi Ilmu Ekonomi Ekuitas, Universitas Suryakancana, Universitas Kristen Maranatha, Institut Pendidikan Indonesia Garut, Universitas Mandiri. Kepala LLDIKTI Wilayah IV, Dr. M. Samsuri, S.Pd., M.T. hadir secara langsung dan membuka kegiatan secara resmi.', 'dash2.jpg', 1),
(16, 'Pendampingan JAD Untuk Penilai JAD Internal dan Op', 'Putra Mantap', 'LLDIKTI Wilayah IV kembali menyelenggarakan kegiatan Pendampingan Usulan Jabatan Akademik Dosen ke Perguruan Tinggi Swasta untuk Wilayah Cirebon, Indramayu, Majelengka dan Kuningan. Kegiatan kembali dilakukan dalam rangka percepatan peningkatan jumlah dosen yang memiliki Jabatan Akademik minimal Asisten Ahli serta memberikan pemahaman yang mendalam terkait usulan Jabatan Akademik Dosen berdasarakan Pedoman Operasional Tahun 2019 dan Suplemen.\r\n\r\nKegiatan diselenggarakan di Universitas Majelengka pada Rabu, 22 Juni 2022 mengundang 52  Perguruan Tinggi yang berada di wilayah Cirebon, Indramayu, Majalengka dan Kuningan.\r\n\r\nDihadiri Rektor Universitas Majalengka Dr. Indra Adi Budiman, M.Pd, kegiatan diawali laporan dari Ketua Panitia, Gina Indriani, S.Si., M.T., yang menyampaikan bahwa berdasarkan data pada laman sister.kemdikbud.go.id terdapat 10.707 dari 26.381 dosen (40,59%) di lingkungan LLDIKTI Wilayah IV yang belum memiliki Jabatan Akademik, maka hal itu yang mendorong LLDIKTI Wilayah IV untuk mengadakan berbagai kegiatan yang dapat meminimalisir jumlah dosen yang belum memiliki Jabatan Akademik dan juga meningkatkan Jabatan Akademik Dosen yang masih Asisten Ahli dalam kurun waktu yang lama, serta sejak Tahun 2019 dalam pengusulan JAD yang sudah menggunakan aplikasi  masih banyak operator yang belum paham cara pengajuannya.”\r\n\r\nKepala LLDIKTI Wilayah IV, Dr. M. Samsuri, S.Pd., M.T membuka acara secara resmi dan dalam sambutannya mengatakan bahwa kegiatan ini merupakan bagian dari LLDIKTI Wilayah IV dan bersama-sama Perguruan Tinggi untuk memiliki dan menjadi owner dalam upaya peningkatan jenjang karir dosen. Untuk menjadi Perguruan Tinggi yang berkualitas dan bermutu langkah pertama diawali dari membangun atau berinvestasi SDM, investasi SDM dalam arti kuantitas atau jumlah dosen yang mencukupi dan kualitas yang sesuai kualifikasi dan jenjang karirnya. Narasumber pada kegiatan ini yaitu Prof. Dr. Dewi Laelatul Badriah, M.Kes., AIFO dengan tema Karya Tulis Ilmiah untuk Pengusulan JAD. Dr. Wahyu Hidayat, M.Pd tema Pedoman Operasional Penilaian Angka Kredit (PO PAK) Kenaikan Jabatan Akademik Dosen Tahun 2019.', 'dash3.jpg', 3),
(17, 'Sosialisasi Jaminan Sosial Ketenagakerjaan Sesi 1 ', 'Putra Lagi', 'Dalam upaya melaksanakan Surat Edaran Mendikbudristek nomor 8 tahun 2021 tentang Peningkatan Kepatuhan Dan Kepesertaan Program Jaminan Sosial Ketenagakerjaan Pada Satuan Pendidikan Formal Dan Nonformal, LLDIKTI Wilayah IV bersama dengan BPJS Ketenagakerjaan Bekasi menyelenggarakan kegiatan Sosialisasi Jaminan Sosial Ketenagakerjaan Sesi 1 Wilayah Bekasi, Jumat, 17 Juni 2022 secara daring menggunakan aplikasi Zoom Cloud Meeting. Kegiatan ini dihadiri oleh Dr. M. Samsuri, S.Pd., M.T. selaku kepala LLDIKTI Wilayah IV dan Herry Subroto selaku Kepala Cabang BPJS Ketenagakerjaan Bekasi.\r\n\r\nAcara ini mengundang seluruh perguruan tinggi swasta yang berada di wilayah Bekasi. Narasumber yang hadir adalah Kepala Bidang Kepersertaan Korporasi dan Institusi BPJS Ketenagakerjaan Bekasi yang menyampaikan materi mengenai implementasi kebijakan kampus merdeka-merdeka belajar dengan BPJS bidang Ketenagakerjaan.\r\n\r\nSamsuri hadir membuka kegiatan secara langsung. Kegiatan ini dilaksanakan sebagai bentuk tindaklanjut penandatanganan nota kesepahaman antara LLDIKTI Wilayah IV dengan BPJS Ketenagakerjaan Provinsi Jawa Barat.', 'dash4.jpg', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_berita`
--

CREATE TABLE `kategori_berita` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori_berita`
--

INSERT INTO `kategori_berita` (`id_kategori`, `nama_kategori`) VALUES
(1, 'kocak'),
(3, 'cvcvcvcvcvcvcvc');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
--

CREATE TABLE `pesan` (
  `id_pesan` int(11) NOT NULL,
  `id_user` int(15) NOT NULL,
  `id_lawan` int(15) NOT NULL,
  `isi` text NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `id_user`, `id_lawan`, `isi`, `waktu`) VALUES
(1, 3, 2, 'test test admin ini putra\n', '2022-07-22 17:36:31'),
(2, 3, 2, 'halo min\n', '2022-07-22 18:50:25'),
(3, 3, 2, 'min\n', '2022-07-23 08:24:36'),
(4, 3, 2, 'halo min', '2022-07-23 08:24:42'),
(5, 2, 3, 'apaan put\n', '2022-07-23 08:25:08'),
(6, 2, 3, 'admin\n', '2022-07-27 03:47:55'),
(7, 2, 1, 'putra mane cool mantap', '2022-10-28 09:00:46'),
(8, 2, 3, 'puttt kenapa', '2022-10-28 09:01:00'),
(9, 3, 2, 'iya ngab\n', '2022-10-28 09:01:50'),
(10, 2, 3, 'konsol kamu\n', '2022-10-28 09:02:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `password` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `nama`, `password`) VALUES
(1, 'user', 'User', 'ee11cbb19052e40b07aac0ca060c23ee'),
(2, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(3, 'putra', 'putra', '5e0c5a0bf82decdd43b2150b622c66c5'),
(4, 'kaka', 'kaka', 'bb0ed6ad56f41c6de469776171261226'),
(5, 'test', 'test', '098f6bcd4621d373cade4e832627b4f6'),
(6, 'koko', 'koko', '37f525e2b6fc3cb4abd882f708ab80eb');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`) USING BTREE;

--
-- Indeks untuk tabel `kategori_berita`
--
ALTER TABLE `kategori_berita`
  ADD PRIMARY KEY (`id_kategori`) USING BTREE;

--
-- Indeks untuk tabel `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `kategori_berita`
--
ALTER TABLE `kategori_berita`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
