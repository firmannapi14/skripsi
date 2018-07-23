-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2018 at 04:02 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pachat`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_basispengetahuan`
--

CREATE TABLE `tbl_basispengetahuan` (
  `id_basispeng` int(11) NOT NULL,
  `kata_kunci` text NOT NULL,
  `jawaban` text NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `update_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_basispengetahuan`
--

INSERT INTO `tbl_basispengetahuan` (`id_basispeng`, `kata_kunci`, `jawaban`, `deleted_at`, `update_at`) VALUES
(1, 'matakuliah wajib', 'Matakuliah wajib dapat dilihat melalui Kode Matakuliah terkait. Sebagai contoh  C31040301 (SISTEM INFORMASI). angka pada digit ke 6 jika mengandung angka 0 maka dikatakan Matakuliah Wajib untuk diambil. namun jika terkandung angka selain 0 sebagai contoh C31042401 (EMBEDDED SYSTEM), matakuliah tersebut termasuk dalam Matakuliah Pilihan.', NULL, '2018-07-06 07:07:27'),
(2, 'matakuliah wajib semester 3', 'Matakuliah Wajib semester 3 yaitu : C31040201 (STRUKTUR DATA), C31040203 (PEMROGRAMAN VISUAL), C31040205 (SISTEM OPERASI), C31040207 (KOMUNIKASI DATA),  C31040209 (PERANGKAT LUNAK JARINGAN 1),  C31040211 (TEKNIK DIGITAL),  C31040215 (KALKULUS 2), C31040217 (FISIKA LISTRIK & MAGNET),  C31040219 (SUMBER DATA ENERGI).', NULL, '2018-07-06 07:23:00'),
(3, 'efisien isi krs', 'Waktu yang efisien dalam mengisi KRS adalah pada saat website anjungan mahasiswa sedang tidak digunakan oleh banyak mahasiswa pada waktu yang bersamaan, karena nantinya akan mengakibatkan proses yang lama dan lemot.', NULL, '2018-07-07 17:14:56'),
(4, 'krs', 'Kartu Rencana Studi (KRS) adalah kartu yang digunakan untuk merencanakan Matakuliah yang akan diambil. Di kertas KRS akan tertera Nama anda, NIM anda, Jurusan, dan jumlah semester yang yang sedang diikuti. Kartu inilah yang menjadi bukti selain Kartu Tanda Mahasiswa (KTM) merupakan bukti jika anda mahasiswa aktif studi di STT PLN Jakarta. ', NULL, NULL),
(5, 'lambat finalisasi krs', 'Jika anda terlambat melakukan finalisasi sesuai dengan jadwal yang sudah ditentukan segera menghubungi bagian BAAK untuk lebih lanjut dikarenakan sanksi ketika anda terlambat melakukan KRS adalah tidak bisa melanjutkan perkuliahan di semester yang akan datang.', NULL, '2018-07-07 04:42:32'),
(6, 'kelas penuh', 'Jika kelas yang anda pilih ketika KRS sudah penuh atau melebihi kapasitas kelas, anda dapat melakukan penghapusan kelas Matakuliah yang bersangkutan di kelas tersebut lalu memilih kelas yang masih kosong atau belum memenuhi kapasitas kelas untuk Matakuliah tersebut.', NULL, NULL),
(7, 'salah isi krs', 'Jika anda salah saat mengisi KRS, anda dapat menghapus Jadwal Matakuliah yang keliru saat anda pilih sebelumnya setelah itu anda melakukan pemilihan Jadwal Matakuliah yang sesuai kembali.', NULL, NULL),
(8, 'lambat isi krs', 'Jika anda terlambat dalam mengisi KRS sesuai jadwal tiap angkatan yang sudah ditentukan, anda dapat melakukannya kembali di KRS Bersama semua angkatan yang diadakan di akhir setelah semua angkatan telah melalukan KRS masing-masing.', NULL, NULL),
(9, 'isi krs', 'Cara mengisi KRS adalah dengan membuka terlebih dahulu website anjungan STT PLN di www.mahasiswa.sttpln.ac.id kemudian setelah masuk pada tampilan anjungan mahasiswa, kita memilih menu Kartu Rencana Studi (KRS). Cara mengisi KRS sering diajarkan oleh tiap-tiap jurusan pada saat sosialisasi KRS yang diadakan oleh jurusan dan juga oleh Himpunan Mahasiswa Jurusan (HMJ).', NULL, NULL),
(10, 'dosen matakuliah', 'Dosen akan mengajarkan Matakuliah di kampus. secara umum 1 matakuliah akan diajarkan oleh beberapa dosen sehingga Mahasiswa dapat memilih dosen mana yang cocok untuk diambil dalam memilih matakuliah ketika KRS.', NULL, NULL),
(11, 'batas isi krs', 'Batas pengisian KRS adalah 2 hari 2 malah untuk tiap angkatan dimana jadwalnya nanti akan dikeluarkan oleh Kampus STT PLN.', NULL, NULL),
(12, 'rekomendasi matakuliah semester depan', 'Untuk rekomendasi matakuliah pada semester depan adalah mengutamakan dahulu matakuliah wajibnya. kenapa harus mengutamakan matakuliah wajib agar nantinya anda dapat selalu fokus menyesaikan di tiap semesternya, setelah itu baru merancang matakuliah pilihan yang akan diambil di tiap semester.', NULL, NULL),
(13, 'semester 1 2 paket', 'Berdasarkan aturan dan regulasi dari kampus sehingga membuat Semester 1 dan 2 pasti akan dipaket. karena semester 1 dan 2 telah menjadi paket, maka nanti di semester 3 dan seterusnya baru akan dibebankan kepada mahasiswa yang bersangkutan untuk memilih dan merancang matakuliahnya masing-masing.', NULL, NULL),
(14, 'semester 1 2 paketin', 'Berdasarkan aturan dan regulasi dari kampus sehingga membuat Semester 1 dan 2 pasti akan dipaket. karena semester 1 dan 2 telah menjadi paket, maka nanti di semester 3 dan seterusnya baru akan dibebankan kepada mahasiswa yang bersangkutan untuk memilih dan merancang matakuliahnya masing-masing.', NULL, NULL),
(15, 'maksimal sks', 'Maksimal SKS yang dapat diambil adalah menyesuaikan Indeks Prestasi Semester (IPS) yang diraih oleh mahasiswa tersebut. untuk IPS < 3.00 hanya dapat mengambil maksimal 22 SKS sedangkan untuk IPS > 3.00 maka dapat mengambil sampai 24 SKS.', NULL, NULL),
(16, 'atur ambil sks sesuai ipk semester', 'Aturan dalam mengambil jumlah SKS  adalah dengan menyesuaikan Indeks Prestasi Semester (IPS) yang diraih oleh mahasiswa tersebut. untuk IPS < 3.00 hanya dapat mengambil maksimal 22 SKS sedangkan untuk IPS > 3.00 maka dapat mengambil sampai 24 SKS.', NULL, NULL),
(17, 'pilih dosen', 'Agar nantinya anda tepat dalam memilih dosen pada matakuliah yang ingin anda ambil, anda harus terlebih dahulu mengetahui dosen-dosen siapa aja yang mengajar matakuliah tersebut lalu menyesuaikan pada jadwal di Blangko RPM. untuk mengetahuinya bisa melalui jurusan masing-masing.', NULL, NULL),
(18, 'matakuliah prasyarat', 'Matakuliah Prasyarat adalah matakuliah yang jika ingin diambil diharuskan untuk lulus dalam matakuliah sebelumnya dikarenakan memiliki keterkaitan dalam segi materi pembelajaran. Matakuliah Prasyarat dapat dilihat di menu Blangko RPM. pada tabel tertera kolom Prasyarat lalu akan berisikan Kode Matakuliah yang harus lulus terlebih dahulu sebelum mengambil matakuliah tersebut. untuk setiap jurusan memiliki matakuliah prasyarat yang berbeda-beda dengan aturan yang bervariasi.', NULL, '2018-07-07 16:39:16'),
(19, 'syarat ambil matakuliah', 'Syarat-syarat dalam mengambil matakuliah adalah berstatus sebagai mahasiswa AKTIF di STT PLN, juga nantinya diwajibkan untuk melakukan pembayaran jumlah SKS yang telah diambil pada saat jadwal mengisi KRS.', NULL, NULL),
(20, 'rekomendasi matakuliah konsentrasi', 'Saat anda memilih Matakuliah Konsentrasi terlebih dahulu harus mengetahui dengan jelas dasar-dasar yang harus dipersiapkan dalam mengambil matakuliah tersebut. Matakuliah apa saja yang harus disiapkan agar nantinya tidak kesusahan dalam mempelajari Matakuliah Konsentrasi cukup penting untuk diperhatikan karena nantinya dapat berpengaruh terhadap nilai yang akan anda raih.', NULL, NULL),
(21, 'sks', 'Satuan Kredit Semester (SKS) adalah sistem yang memberikan keleluasaan kepada mahasiswa dalam memilih dan menyusun total SKS yang ingin diambil tiap semesternya. di STT PLN sendiri untuk menentukan berapa total SKS yang boleh diambil berdasarkan nilai Indeks Prestasi Semester (IPS) yang diraih pada semester terakhir.', NULL, NULL),
(22, 'blangko rpm', 'Blangko Rencana Pengambilan Matakuliah (RPM) adalah susunan jadwal Matakuliah pada Semester Genap/Ganjil setiap hari sesuai jamnya yang dikeluarkan secara resmi oleh masing-masing jurusan. Pada Blangko akan berisikan hari, jam dan kelas Matakuliah tersebut diadakan. Namun, tidak mengandung kode dari Dosen terkait yang mengajar matakuliah tersebut. Blangko RPM sangat berguna disaat pengisian KRS karena dapat membantu mahasiswa dalam menentukan jadwal yang disusun.', NULL, NULL),
(23, 'matakuliah konsentrasi', 'Matakuliah Konsentrasi adalah matakuliah yang dihadirkan oleh jurusan masing-masing untuk mendukung penjurusan mahasiswa dalam memilih bidangnya. Matakuliah Konsentrasi tidak bersifat Wajib untuk diambil namun akan sangat membantu menambah pengetahuan dan mengarahkan mahasiswa pada konsentrasi bidang yang diinginkan di masing-masing jurusan.', NULL, NULL),
(24, 'matkul wajib semester 3', 'Matakuliah Wajib semester 3 yaitu : C31040201 (STRUKTUR DATA), C31040203 (PEMROGRAMAN VISUAL), C31040205 (SISTEM OPERASI), C31040207 (KOMUNIKASI DATA), C31040209 (PERANGKAT LUNAK JARINGAN 1), C31040211 (TEKNIK DIGITAL), C31040215 (KALKULUS 2), C31040217 (FISIKA LISTRIK & MAGNET), C31040219 (SUMBER DATA ENERGI).', NULL, NULL),
(25, 'matakuliah wajib semester 4', 'belum ada isi', NULL, NULL),
(26, 'matkul wajib semester 4', 'belum ada isi ....', NULL, NULL),
(27, 'matakuliah wajib semester 5', 'belum ada jawaban ...', NULL, NULL),
(28, 'matkul wajib semester 5', 'belum ada jawaban...', NULL, NULL),
(29, 'krs lemot', 'belum ada jawaban ...', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pesan`
--

CREATE TABLE `tbl_pesan` (
  `id_pesan` int(100) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `pesan` text NOT NULL,
  `role` int(2) NOT NULL,
  `date_in` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pesan`
--

INSERT INTO `tbl_pesan` (`id_pesan`, `nama`, `pesan`, `role`, `date_in`) VALUES
(49, 'Pace', 'kapan sih kita krsan', 0, '2018-07-02 09:58:43'),
(50, 'Umar', 'Kapan kita wisuda ya ??', 0, '2018-07-02 09:59:08'),
(51, 'Malik', 'Kapan KRS', 0, '2018-07-03 14:10:47'),
(52, 'Anggo', 'Kapan ya kita krsan', 0, '2018-07-04 17:53:52'),
(53, 'bayu', 'kapan krs bro', 0, '2018-07-05 06:27:13'),
(54, 'firman', 'kapan kita wisuda', 0, '2018-07-05 06:27:44'),
(55, 'fandy', 'kapan kita krsan sih', 0, '2018-07-06 17:33:18'),
(56, 'admin', 'apasih bacot', 1, '2018-07-10 04:09:26'),
(57, 'pACE', 'sebenarnya kapan sih kita krsan', 0, '2018-07-10 08:34:29');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id_user` int(100) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(6) NOT NULL,
  `password` varchar(6) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_hp` text NOT NULL,
  `title` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id_user`, `nama_lengkap`, `email`, `username`, `password`, `alamat`, `no_hp`, `title`) VALUES
(1, 'Muhammad Iriansyah', 'pace@gmail.com', 'admin', 'admin', 'Jl. H Junib Jakarta Barat', '082248080870', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_basispengetahuan`
--
ALTER TABLE `tbl_basispengetahuan`
  ADD PRIMARY KEY (`id_basispeng`);

--
-- Indexes for table `tbl_pesan`
--
ALTER TABLE `tbl_pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_basispengetahuan`
--
ALTER TABLE `tbl_basispengetahuan`
  MODIFY `id_basispeng` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tbl_pesan`
--
ALTER TABLE `tbl_pesan`
  MODIFY `id_pesan` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id_user` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
