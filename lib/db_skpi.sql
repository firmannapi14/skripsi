-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2018 at 04:02 AM
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
-- Database: `db_skpi`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `kode_admin` varchar(8) COLLATE latin1_general_ci NOT NULL,
  `username` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `telepon` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `gambar` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `status` enum('Aktif','Tidak Aktif') COLLATE latin1_general_ci NOT NULL DEFAULT 'Aktif'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`kode_admin`, `username`, `password`, `telepon`, `email`, `gambar`, `status`) VALUES
('ADM02', 'a', 'a', '0234567845678', 'adminbaru@yahoo.com', 'wifi.png', 'Aktif'),
('ADM03', 'array', 'array', '02345678923456', 'array@a.com', 'keys.jpg', 'Aktif'),
('ADM01', 'jokowi', 'jokowi', '021-11111111', 'presidenri@gmail.com', 'key.jpg', 'Aktif'),
('ADM18070', 'abc', 'abc', '085244746050', 'firmangirif@gmail.com', '201431291.jpg', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `tb_dataolah`
--

CREATE TABLE `tb_dataolah` (
  `kode_dataolah` int(15) NOT NULL,
  `judul_indonesia` text NOT NULL,
  `tanggal_terbit` date NOT NULL,
  `kode_klasifikasi` varchar(30) NOT NULL,
  `catatan` text NOT NULL,
  `normalisasi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_dataolah`
--

INSERT INTO `tb_dataolah` (`kode_dataolah`, `judul_indonesia`, `tanggal_terbit`, `kode_klasifikasi`, `catatan`, `normalisasi`) VALUES
(1, 'Peserta LIMA Goes To School', '2018-07-06', 'KLS1807006', 'Peserta LIMA Goes To School adalah Kejuaraan yang diikuti oleh mahasiswa dalam rangka Liga Mahasiswa', 'serta lima goes to school'),
(2, '3rd Winner in Menâ€™s Team from Binus Badminton', '2018-07-06', 'KLS1807006', '3rd Winner in Menâ€™s Team from Binus Badminton adalah kegiatan yang dilakukan oleh mahasiswa STTPLN dalam kejuaraan Badminton di Binus', '3rd winner in men s team from bus badminton'),
(3, 'Juara 2 Lomba Karya Tulis', '2018-07-06', 'KLS1807006', 'Juara 2 Lomba Karya Tulis adalah kegiatan yang dilakukan mahasiswa STTPLN untuk mendapatkan penghargaan kejuaraan dalam bidang karya tulis', 'juara 2 lomba karya tulis'),
(4, 'Perancangan  Alat Deteksi Wajah Warna Gradiasi RGB dengan Output Berupa Audio Menggunakan Metode Thresholdin', '2018-07-06', 'KLS1807005', 'Perancangan  Alat Deteksi Wajah Warna Gradiasi RGB dengan Output Berupa Audio Menggunakan Metode Thresholdin adalah sebuah tugas akhir hasil karya dari Mahasiswa Teknik Informatika', 'ancang alat deteksi wajah warna gradiasi rgb output upa audio metode thresholdin'),
(5, 'Pemetaan Perkembangan Produksi Padi dan palawija Untuk Meningkatkan Ketahanan Pangan Menggunakan Metode K-Means di Kabupaten Wonogiri', '2018-07-06', 'KLS1807005', 'Pemetaan Perkembangan Produksi Padi dan palawija Untuk Meningkatkan Ketahanan Pangan Menggunakan Metode K-Means di Kabupaten Wonogiri adalah tugas akhir yang sudah dikerjakan oleh mahasiswa Teknik Informatika', 'meta kembang produksi padi palawija tingkat tahan pangan metode k-means kabupaten wonogiri'),
(6, 'Rancang Bangun Sistem Pelacak Teknisi Lapangan Terdekat Lokasi Gangguan Dengan Realtime Menggunakan Firebase Realtime Database', '2018-07-06', 'KLS1807005', 'Rancang Bangun Sistem Pelacak Teknisi Lapangan Terdekat Lokasi Gangguan Dengan Realtime Menggunakan Firebase Realtime Database adalah skripsi yang dikerjakan oleh Mahasiswa Teknik Informatika', 'rancang bangun sistem lacak teknisi lapang dekat lokasi ganggu realtime firebase realtime database'),
(7, 'Panitia Acara Seminar Hari Listrik Nasional', '2018-07-06', 'KLS1807004', 'Panitia Acara Seminar Hari Listrik Nasional adalah sebuah acara dimana kita menjadi panita dalam kegiatan tersebut  guna menunjang pengalaman di dunia organisasi', 'panitia acara seminar hari listrik nasional'),
(8, 'Panitia Divisi Mentor : Pekan Orientasi Mahasiswa STT PLN', '2018-07-06', 'KLS1807004', 'Panitia Divisi Mentor : Pekan Orientasi Mahasiswa STT PLN adalah kegiatan pengenalan mahasiswa baru  yang berguna untuk nemabah pengalaman mahasiswa dalam mengikuti serangkaian acara dan sekaligus bisa belajar berorganisasi di kampus', 'panitia divisi mentor pekan orientasi mahasiswa stt pln'),
(9, 'Anggota Himpunan Minang', '2018-07-06', 'KLS1807004', 'Anggota Himpunan Minang adalah sebuah organisasi mahasiswa daerah yang berasal dari Minang,Sumatera Barat', 'anggota himpun mang'),
(10, 'Web Programming Training', '2018-07-06', 'KLS1807003', 'Web Programming Training adalah pelatihan tentang web agar pendidikan tentang web ini bisa dipahami oleh mahasiswa', 'web programming training'),
(11, 'Latihan Keterampilan Manajemen Mahasiswa', '2018-07-06', 'KLS1807003', 'Latihan Keterampilan Manajemen Mahasiswa adalah sebuah pelatihan untuk mengasah skill dan membentuk karakter mahasiswa agar bisa lebih mengerti lagi tentang manajemen diri', 'latih terampil manajemen mahasiswa'),
(12, 'Pelatihan Kedisiplinan Mahasiswa Baru STT-PLN', '2018-07-06', 'KLS1807003', 'Pelatihan Kedisiplinan Mahasiswa Baru STT PLN adalah kegiatan pendidikan dan membentuk karakter mahasiswa baru yang akan masuk ke dalam kampus STT-PLN', 'latih disiplin mahasiswa baru stt-pln'),
(13, 'Kunjungan Proyek Himpunan Mahasiswa Teknik Sipil', '2018-07-06', 'KLS1807002', 'Kunjungan Proyek Himpunan Mahasiswa Teknik Sipil adalah sebuah kunjungan industri yang dilakukan oleh Mahasiswa teknik sipil ', 'kunjung proyek himpun mahasiswa teknik sipil'),
(14, 'Laporan Magang : Studi Diagnosis Partisi Discharge Pada Gas Insulated Switchgear 150 kV Pulo Gadung dengan Metode Akustik', '2018-07-06', 'KLS1807002', 'Laporan Magang : Studi Diagnosis Partisi Discharge Pada Gas Insulated Switchgear 150 kV Pulo Gadung dengan Metode Akustik adalah hasil kegiatan yang dilakukan oleh mahasiswa yang siap untuk disidangkan ', 'lapor magang studi diagnosis partisi discharge gas insulated switchgear 150 kv pulo gadung metode akustik'),
(15, 'Laporan Magang : Pemeliharaan Komponen Proteksi Pemutus Tenaga Listrik pada Kubikel 20 kV', '2018-07-06', 'KLS1807002', 'Laporan Magang : Pemeliharaan Komponen Proteksi Pemutus Tenaga Listrik pada Kubikel 20 kV adalah hasil kegiatan magang mahasiswa yang siap dilaporkan dan disidangkan ', 'lapor magang pelihara komponen proteksi putus tenaga listrik kubikel 20 kv'),
(16, 'TOEFL Prediction Test', '2018-07-06', 'KLS1807001', 'TOEFL Prediction Test adalah sebuah tes TOEFL yang dimana mahasiswa pada akhirnya akan mendapatkan sebuah hasil uji dari tes tersebut', 'toefl prediction test'),
(17, 'The Basic English Communication Course', '2018-07-06', 'KLS1807001', 'The Basic English Communication Course adalah kegiatan yang dilakukan untuk menunjang bahasa internasional seorang mahasiswa', 'the basic english communication course'),
(18, 'AEC Campus TOEFL', '2018-07-06', 'KLS1807001', 'AEC Campus TOEFL adalah kegiatan yang dilakukan untuk mendapatkan predikat TOEFL', 'aec campus toefl'),
(20, 'Pelatihan Mandiri Jarak Jauh Bidang Kontruksi : Ahli Pengawas Konstruksi Bangunan Gedung', '2018-07-08', 'KLS1807002', 'Pelatihan Mandiri Jarak Jauh Bidang Kontruksi : Ahli Pengawas Konstruksi Bangunan Gedung adalah sebuah kegiatan yang dilakukan untuk mengelal tentang sebuah perusaaan  industri', 'latih mandiri jarak jauh bidang kontruksi ahli awas konstruksi bangun gedung'),
(21, 'Praktek Kerja Lapangan di PT.PLN Sektor Pembangkitan Teluk Sirih ', '2018-07-08', 'KLS1807002', 'Praktek Kerja Lapangan di PT.PLN Sektor Pembangkitan Teluk Sirih adalah kegiatan praktek kerja industri yang telah dilakukan oleh mahasiswa', 'praktek kerja lapang pt pln sektor bangkit teluk sirih'),
(22, 'Laporan Magang : PT. Telekomunikasi Indonesia, Tbk. STO Gambir Divisi TV Video Unit Legal', '2018-07-08', 'KLS1807002', 'Laporan Magang : PT. Telekomunikasi Indonesia, Tbk. STO Gambir Divisi TV Video Unit Legal adalah hasil kerja magang mahasiswa STT-PLN di Telkom Indonesia', 'lapor magang pt telekomunikasi indonesia tbk sto gambir divisi tv video unit legal'),
(23, 'Peserta : Penerapan Disiplin Ilmu Teknik Informatika di PT. PLN', '2018-07-08', 'KLS1807002', 'Peserta : Penerapan Disiplin Ilmu Teknik Informatika di PT. PLN adalah kegiatan yang dilakukan oleh mahasiswa dalam rangka memenuhi kebutuhan suatu industri', 'serta terap disiplin ilmu teknik informatika pt pln'),
(24, 'Kunjungan Industri ke PT. PJB', '2018-07-08', 'KLS1807002', 'Kunjungan Industri ke PT. PJB adalah kegiatan kunjungan indsutri yang dilakukan oleh mahasiswa ke PT.PJB ', 'kunjung industri pt pjb'),
(25, 'Surat Keterangan Magang di PT. PLN', '2018-07-08', 'KLS1807002', 'Surat Keterangan Magang di PT. PLN adalah surat keterangan yang diberikan untuk melaksanakan praktek kerja magang', 'surat terang magang pt pln'),
(26, 'Laporan Magang : Studi Diagnosis Partisi Discharge Pada Gas Insulated Switchgear 150 kV Pulo Gadung dengan Metode Akustik', '2018-07-08', 'KLS1807002', 'Laporan Magang : Studi Diagnosis Partisi Discharge Pada Gas Insulated Switchgear 150 kV Pulo Gadung dengan Metode Akustik adalah sebuah hasil kerja magang mahasiswa STT-PLN untuk diuji meja pada saat sidang magang', 'lapor magang studi diagnosis partisi discharge gas insulated switchgear 150 kv pulo gadung metode akustik'),
(27, 'Laporan Magang : Pemeliharaan Jaringan Distribusi dan Suplai Tenaga Listrik di Bandara Internasional Soekarno Hatta', '2018-07-08', 'KLS1807002', 'Laporan Magang : Pemeliharaan Jaringan Distribusi dan Suplai Tenaga Listrik di Bandara Internasional Soekarno Hatta adalah kegiatan magang yang dilakukan mahasiswa di STT-PLN', 'lapor magang pelihara jaring distribusi suplai tenaga listrik bandara internasional soekarno hatta'),
(28, 'Laporan Magang : Pemeliharaan Komponen Proteksi Pemutus Tenaga Listrik pada Kubikel 20 kV', '2018-07-08', 'KLS1807002', 'Laporan Magang : Pemeliharaan Komponen Proteksi Pemutus Tenaga Listrik pada Kubikel 20 kV adalah  kegiatan magang yang dilakukan mahasiswa STT-PLN  di bagian tenaga listrik', 'lapor magang pelihara komponen proteksi putus tenaga listrik kubikel 20 kv'),
(29, 'Kunjungan ke Tempat Pengelolaan Sampah Terpadu', '2018-07-08', 'KLS1807002', 'Kunjungan ke Tempat Pengelolaan Sampah Terpadu adalah sebuah kegiatan kunjungan industri ke tempat pengelolaan sampah di STT-PLN Jakarta', 'kunjung tempat kelola sampah padu'),
(30, 'Laporan Magang : Pemeliharaan Gardu Distribusi di PT. PLN Area Menteng', '2018-07-08', 'KLS1807002', 'Laporan Magang : Pemeliharaan Gardu Distribusi di PT. PLN Area Menteng adalah kegiatan yang dilakukan oleh mahasiswa STT-PLN untuk dapat melakukan praktek kerja magang di tempat tersebut', 'lapor magang pelihara gardu distribusi pt pln area menteng'),
(31, 'Kunjungan Industri PT. Dirgantara Indonesia & PT. Pindad', '2018-07-08', 'KLS1807002', 'Kunjungan Industri PT. Dirgantara Indonesia & PT. Pindad adalah kunjungan yang dilakukan oleh mahasiswa STT-PLN Jakarta ke daerah Pindad', 'kunjung industri pt dirgantara indonesia pt pindad'),
(32, 'Laporan Magang : Pemeliharaan FUEL GUN BURNER PLTU Banten 3 Lontar', '2018-07-08', 'KLS1807002', 'Laporan Magang : Pemeliharaan FUEL GUN BURNER PLTU Banten 3 Lontar adalah kegiatan magang yang dilakukan oleh mahasiswa di daerah Banten', 'lapor magang pelihara fuel gun burner pltu banten 3 lontar'),
(33, 'Kunjungan Industri ke UBP Kamojang', '2018-07-08', 'KLS1807002', 'Kunjungan Industri ke UBP Kamojang adalah kegiatan kunjungan yang dilakukan oleh mahasiswa STT-PLN ke UBP Kamojang untuk dapat melihat langsung proses yang terjadi disana', 'kunjung industri ubp kamojang'),
(34, 'Laporan Magang : Alignment Preheater Pump dengan Metode Dial Indicator UJP PTGU Cilegon', '2018-07-08', 'KLS1807002', 'Laporan Magang : Alignment Preheater Pump dengan Metode Dial Indicator UJP PTGU Cilegon adalah kerja magang yang diilakukan oleh mahasiswa STT-PLN di daerah Cilegon', 'lapor magang alignment preheater pump metode dial indicator ujp ptgu cilegon'),
(35, 'Laporan Magang : Assesment Boiler Unit 20 PLTU Rembang', '2018-07-08', 'KLS1807002', 'Laporan Magang : Assesment Boiler Unit 20 PLTU Rembang adalah sebuah kegiatan magang yang dilakukan mahasiswa STT-PLN Jakarta', 'lapor magang assesment boiler unit 20 pltu rembang'),
(36, 'Laporan Magang : Turbine Assesment PLTU Lontar Unit I', '2018-07-08', 'KLS1807002', 'Laporan Magang : Turbine Assesment PLTU Lontar Unit I adalah hasil kerja magang dari mahasiswa STT-PLN yang akan di presentasikan', 'lapor magang turbine assesment pltu lontar unit i'),
(37, 'Laporan Magang : Pemeliharaan Plate Heat Eschanger di PT. PJB Up', '2018-07-08', 'KLS1807002', 'Laporan Magang : Pemeliharaan Plate Heat Eschanger di PT. PJB Up adalah sebuah kegiatan magang yang dilakukan oleh mahasiswa STT-PLN', 'lapor magang pelihara plate heat eschanger pt pjb up'),
(38, 'Laporan Magang : Pengoperasian dan Pemeliharaan Reverse Osmosis di PLTU Jabar 2 Pelabuhan Ratu Balai Latihan Kerja', '2018-07-08', 'KLS1807002', 'Laporan Magang : Pengoperasian dan Pemeliharaan Reverse Osmosis di PLTU Jabar 2 Pelabuhan Ratu Balai Latihan Kerja adalah sebuah laporan magang yang dikerjakan oleh mahasiswa STT-PLN', 'lapor magang operasi pelihara reverse osmosis pltu jabar 2 labuh ratu balai latih kerja'),
(39, 'Kunjungan Industri PT PLN (Persero)', '2018-07-08', 'KLS1807002', 'Kunjungan Industri PT PLN (Persero) adalah kegiatan kunjungan industri  yang dilakukan oleh mahasiswa STTPLN ke PT PLN (Persero)', 'kunjung industri pt pln persero'),
(40, 'Kunjungan Pusat Listrik Tenaga Mikro Hidro Cinta Mekar', '2018-07-08', 'KLS1807002', 'Kunjungan Pusat Listrik Tenaga Mikro Hidro Cinta Mekar adalah sebuah Kunjungan Industri yang dilakukan  oleh Mahasiswa Teknik Sipil', 'kunjung pusat listrik tenaga mikro hidro cinta mekar'),
(41, 'Kunjungan Proyek Pembangunan Gudang FEB Kampus UHAMKA', '2018-07-08', 'KLS1807002', 'Kunjungan Proyek Pembangunan Gudang FEB Kampus UHAMKA adalah kegiatan Kunjungan Industri yang mana dilakukan oleh mahasiswa Teknik Sipil berkaitan dengan pembangunan', 'kunjung proyek bangun gudang feb kampus uhamka'),
(42, 'Kunjungan Lapangan Bendungan Juanda Bidang Konstruksi', '2018-07-08', 'KLS1807002', 'Kunjungan Lapangan Bendungan Juanda Bidang Konstruksi adalah laporan magang mahasiswa Teknik Sipil yang mana dilakukan di Bendungan Juanda', 'kunjung lapang bendung juanda bidang konstruksi'),
(43, 'Pelatihan Tata Kelola Pembangkitan dan Teknik Sipil PLTA Cirata', '2018-07-08', 'KLS1807002', 'Pelatihan Tata Kelola Pembangkitan dan Teknik Sipil PLTA Cirata adalah sebuah kegiatan yang dilakukan oleh mahasiswa Teknik Sipil dalam rangka melakukan kerja magang', 'latih tata kelola bangkit teknik sipil plta cirata'),
(44, 'Laporan Magang : Metode Pekerjaan Abument Jembatan Husein Sastranegara Proyek Jalan Tol Cengkareng â€“ Kunciran', '2018-07-08', 'KLS1807002', 'Metode Pekerjaan Abument Jembatan Husein Sastranegara Proyek Jalan Tol Cengkareng â€“ Kunciran adalah sebuah laporan magang yang dikerjakan oleh mahasiswa Teknik Sipil', 'lapor magang metode kerja abument jembatan husein sastranegara proyek jalan tol cengkareng kuncir'),
(45, 'Kunjungan Industri : PT. Indonesia Comnets Plus & PT Indo Internet', '2018-07-08', 'KLS1807002', ' PT. Indonesia Comnets Plus & PT Indo Internet adalah sebuah kunjungan ke Industri terkait untuk mendapatkan predikat Magang', 'kunjung industri pt indonesia comnets plus pt indo internet'),
(46, 'Laporan Magang : Perancangan Database Monitoring Pembayaran Rutin Kendaraan Menggunakan MS. Access', '2018-07-08', 'KLS1807002', 'Perancangan Database Monitoring Pembayaran Rutin Kendaraan Menggunakan MS. Access adalah sebuah laporan magang dibidang Teknik Informatika', 'lapor magang ancang database monitoring bayar rutin kendara ms access'),
(48, 'General Affair PLN Enjiniring, PT', '2018-07-08', 'KLS1807003', 'General Affair PLN Enjiniring, PT adalah sebuah pelatihan untuk mahasiswa STT-PLN Jakarta', 'general affair pln enjiniring pt'),
(49, 'Pelatihan Tata Kelola Pembangkitan dan Teknik Sipil PLTA', '2018-07-08', 'KLS1807003', 'Pelatihan Tata Kelola Pembangkitan dan Teknik Sipil PLTA adalah sebuah kegiatan yang mendukung mahasiswa untuk memperoleh pendidikan untuk  mengerti tentang tata kelona pembangkitan', 'latih tata kelola bangkit teknik sipil plta'),
(50, 'Pelatihan Potensi Mikro', '2018-07-08', 'KLS1807003', 'Pelatihan Potensi Mikro adalah sebuah pelatihan tentang bagaimana mahasiswa dapat mengerti tentang potensi mikro untuk meningkatkan pengetahuan yang dimiliki', 'latih potensi mikro'),
(52, 'Menajamkan Peluang Produk Hasil Inovasi Karya Mahasiswa Indonesia Unggul di Kawasan ASEAN', '2018-07-08', 'KLS1807003', 'Menajamkan Peluang Produk Hasil Inovasi Karya Mahasiswa Indonesia Unggul di Kawasan ASEAN adalah sebuah kegiatan yang akan membentuk karakter mahasiswa agar bisa memahami akan makna dari kegiatan tersebut', 'najam peluang produk hasil inovasi karya mahasiswa indonesia unggul kawasan asean'),
(53, 'Optimalisai Budaya k3 untuk Mendorong Prooduktivitas dalam Persaingan Global', '2018-07-08', 'KLS1807003', 'Optimalisai Budaya k3 untuk Mendorong Prooduktivitas dalam Persaingan Global adalah edukasi yang diberikan untuk mahasiswa agar mengetahui bagaimana kegiatan tersebut sangat bermanfaat untuk meningkatkan karakter diri mahasiswa tersebut', 'optimalisai budaya k3 dorong prooduktivitas saing global'),
(54, 'Peserta Workshop Pembuatan PLTS Skala Kecil', '2018-07-08', 'KLS1807003', 'Peserta Workshop Pembuatan PLTS Skala Kecil adalah pelatihan untuk mahasiswa agar mahasiswa dapat mengembakan skill dan meningkatkan karakter diri di bidang pembuatan PLTS', 'serta workshop buat plts skala kecil'),
(57, 'Pelatihan Autodesk Inventor', '2018-07-08', 'KLS1807003', 'Pelatihan Autodesk Inventor adalah pendidikan yanng diberikan untuk mahasiswa untuk mengerti tentang apa itu autodesk invertor', 'latih autodesk inventor'),
(58, 'Pelatihan AutoCAD untuk Desain Kelistrikan', '2018-07-08', 'KLS1807003', 'Pelatihan AutoCAD untuk Desain Kelistrikan adalah sebuah kegiatan yang akan meningkatkan kapasistas diri mahasiswa dalam bidang desain untuk menambah edukasi tentang AutoCAD', 'latih autocad desain listrik'),
(59, 'Workshop Teknologi Metode Smartphone', '2018-07-08', 'KLS1807003', 'Workshop Teknologi Metode Smartphone adalah pelatihan yang dapat memberikan informasi kepada mahasiswa tentang teknologi masa kini untuk dapat membentuk karakter mahasiswa yang taat akan menggukana smartphone', 'workshop teknologi metode smartphone'),
(60, 'Workshop Pembuatan Aplikasi Augmented Reality', '2018-07-08', 'KLS1807003', 'Workshop Pembuatan Aplikasi Augmented Reality adalah sebuah pelatihan yang mana mahasiswa akan mengerti tentang apa itu AR dan juga membuat aplikasi tersebut', 'workshop buat aplikasi augmented reality'),
(61, 'Digital Forensik : Workshop', '2018-07-08', 'KLS1807003', 'Digital Forensik : Workshop adalah pelatihan tentang digital forensik di bidang IT untuk membentuk karakter mahasiswa yang paham akan hal ini', 'digital forensik workshop'),
(62, 'Database Administration Fundamentals', '2018-07-08', 'KLS1807003', 'Database Administration Fundamentals adalah sertifikasi dibidang IT yang guna untuk meningkatkan nilai pendidikan seorang mahasiswa apabila memiliki ini', 'database administration fundamentals'),
(63, 'Latihan Dasar Kepimpinan Mahasiswa ', '2018-07-08', 'KLS1807003', 'Latihan Dasar Kepimpinan Mahasiswa  adalah kegiatan kemahasiswaan yang mana berguna untuk mahasiswa tersebut untuk dapat menjadi jajaran pengurus di organisasinya dan selain itu juga dapat membentuk karakter mahasiswa tersebut agar bisa di didik secara baik', 'latih dasar pimpin mahasiswa'),
(64, 'Workshop Teknologi Mobile Smartphone', '2018-07-08', 'KLS1807003', 'Workshop Teknologi Mobile Smartphone adalah sebuah pelatihan yang dibuat untuk mahasiswa agar mengerti tentang teknologi masa kini dan nantinya mahasiswa akan paham dan mengerti sekaligus membentuk karakter mahasiswa agar menjadi pengguna yang baik', 'workshop teknologi mobile smartphone'),
(65, 'Pelatihan Survei Tenaga Air', '2018-07-08', 'KLS1807003', 'Pelatihan Survei Tenaga Air adalah sebuah pelatihan yang diberikan kepada mahasiswa tentang mengenali survei tenaga air', 'latih survei tenaga air'),
(66, 'Junior Digital Artist', '2018-07-08', 'KLS1807003', 'Junior Digital Artist adalah sebuah pelatihan di bidang Informatika untuk dapat meningkatkan wawasan ', 'junior digital artist'),
(67, 'Public Speaking & Sharing', '2018-07-08', 'KLS1807003', 'Public Speaking & Sharing adalah sebuah pelatihan tentang bagaimana karakter mahasiswa dapat terbentuk untuk bisa percaya diri terhadap diri sendiri untuk dapat tampil di depan umum', 'public speaking sharing'),
(68, 'Pelatihan PLC Tingkat Dasar', '2018-07-08', 'KLS1807003', 'Pelatihan PLC Tingkat Dasar adalah pelatihan yang dapat meningkatkan wawasan mahasiswa di bidang PLC ', 'latih plc tingkat dasar'),
(70, 'Pelatihan Instalasi Listrik', '2018-07-08', 'KLS1807003', 'Pelatihan Instalasi Listrik adalah pendidikan yang diberikan kepada mahasiswa agar mahasiswa dapat mengerti tentang instalasi listrik yang baik dan benar', 'latih instalasi listrik'),
(74, 'Pelatihan Load Flow (ETAP) & Dialux', '2018-07-08', 'KLS1807003', 'Pelatihan Load Flow (ETAP) & Dialux adalah sebuah pelatihan untuk mengedukasi  mahasiswa tentang apa itu ETAP dan Dialux', 'latih load flow etap dialux'),
(75, 'Peserta Diskusi Panel Percepatan Listrik Pedesaan', '2018-07-08', 'KLS1807003', 'Peserta Diskusi Panel Percepatan Listrik Pedesaan adalah kegiatan yang dilakukan untuk  mengetahui bagaimana cara melakukan percepatan listrik pedesaan', 'serta diskusi panel cepat listrik desa'),
(76, 'Pelatihan Dasar Pembangkit Listrik Tenaga Surya (PLTS)', '2018-07-09', 'KLS1807003', 'Pelatihan Dasar Pembangkit Listrik Tenaga Surya (PLTS) adalah sebuah kegiatan yang dapat mengasah skill dan memberikan edukasi tentang pembangkit listrik tenaga surya', 'latih dasar bangkit listrik tenaga surya plts'),
(77, 'Pelatihan Instalasi Perancangan Gedung', '2018-07-09', 'KLS1807003', 'Pelatihan Instalasi Perancangan Gedung adalah kegiatan untuk memberikan pengetahuan tentang bagaimana cara melakukan instalasi dan perancangan gedung', 'latih instalasi ancang gedung'),
(78, 'Pelatihan Kerja Berbasis Kompetensi Bidang LasListrik', '2018-07-09', 'KLS1807003', 'Pelatihan Kerja Berbasis Kompetensi Bidang Las Listrik adalah sebuah kegiatan yang mana akan membentuk karakter mahasiswa yang ahli di dalam bidang kompetensi bidang las listrik ', 'latih kerja kompetensi bidang laslistrik'),
(79, 'Pelatihan Kerja Berbasis Kompetensi Bidang Sepeda Motor', '2018-07-09', 'KLS1807003', 'Pelatihan Kerja Berbasis Kompetensi Bidang Sepeda Motor adalah kegiatan yang dilakuka untuk melihat kemampuan mahasiswa di dalam bidang sepeda motor', 'latih kerja kompetensi bidang sepeda motor'),
(80, 'Training of Job Safety Analysis (JSA)', '2018-07-09', 'KLS1807003', 'Training of Job Safety Analysis (JSA) adalah sebuah pelatihan untuk mengasah dan membentuk karakter mahasiswa', 'training of job safety analysis jsa'),
(81, 'Pelatihan Penulisan Skripsi / Prokyek Akhir ', '2018-07-09', 'KLS1807003', 'Pelatihan Penulisan Skripsi / Prokyek Akhir  adalah kegiatan yang dilakukan untuk mengedukasi kepada mahasiswa agar paham terhadap cara-cara penulisannya', 'latih tulis skripsi prokyek akhir'),
(82, 'Pelatihan Supervisory Control and Data Acquistion', '2018-07-09', 'KLS1807003', 'Pelatihan Supervisory Control and Data Acquistion adalah sebuah pelatihan yang mana akan memberikan pengetahuan tentang kontrol data', 'latih supervisory control and data acquistion'),
(83, 'Audit Internal Sistem Manajemen Keselamatan & Kesehatan Kerja', '2018-07-09', 'KLS1807003', 'Audit Internal Sistem Manajemen Keselamatan & Kesehatan Kerja adalah pelatihan yang dilakukan untuk menjamin mutu dan sekaligus membentuk karakter mahasiswa', 'audit internal sistem manajemen selamat sehat kerja'),
(84, 'Penerapan Sistem Manajemen Keselamatan & Kesehatan Kerja', '2018-07-09', 'KLS1807003', 'Penerapan Sistem Manajemen Keselamatan & Kesehatan Kerja adalah pendidikan yang diberikan kepada mahasiwa untuk mengerti tentang  penerapan hal tersebut', 'terap sistem manajemen selamat sehat kerja'),
(85, 'Workshop : Autodesk AutoCAD for MMENE UI 2016', '2018-07-09', 'KLS1807003', 'Workshop : Autodesk AutoCAD for MMENE UI 2016 adalah sebuah pelatihan yang akan membentuk karakter mahasiswa untuk dapat memahami tentang workshop tersebut', 'workshop autodesk autocad for mmene ui 2016'),
(86, 'Workshop : Autodesk Inventor for MMENE UI 2016', '2018-07-09', 'KLS1807003', 'Workshop : Autodesk Inventor for MMENE UI 2016 adalah sebuah pelatihan yang mana dalam hal ini akan memberikan edukasi terhadap mahasiswa tentang hal tersebut', 'workshop autodesk inventor for mmene ui 2016'),
(87, 'Las Listrik Posisi 1G, 2G dan 3G', '2018-07-09', 'KLS1807003', 'Las Listrik Posisi 1G, 2G dan 3G adalah kegiatan yang memberikan pendidikan kepada mahasiswa tentang las listrik', 'las listrik posisi 1g 2g 3g'),
(88, 'Pelatihan Instalasi: Pemasangan, Pemeliharaan & Perbaikan Air Conditioning Split dengan Menggunakan Refrigeran Ramah Lingkungan', '2018-07-09', 'KLS1807003', 'Pelatihan Instalasi: Pemasangan, Pemeliharaan & Perbaikan Air Conditioning Split dengan Menggunakan Refrigeran Ramah Lingkungan adalah sebuah kegiatan yang dilakukann oleh mahasiswa agar bisa mendapatkan edukasi terkait instalasi', 'latih instalasi pasang pelihara baik air conditioning split refrigeran ramah lingkung'),
(89, 'Peserta LKMM Pra TD STT PLN 2014', '2018-07-09', 'KLS1807003', 'Peserta LKMM Pra TD STT PLN 2014 adalah Latihan Keterampilan Manajemen Mahsiswa Pra Tingkat Dasar yang dilakukan untuk mengembangkan karakter mahasiswa dalam ketermpilan dan skill di bidang manajemen diri', 'serta lkmm pra td stt pln 2014'),
(90, 'Riset Multidisiplin unutk Menunjang Pengembangan Industri Nasional ', '2018-07-09', 'KLS1807003', 'Riset Multidisiplin unutk Menunjang Pengembangan Industri Nasional  adalah sebuah kegiatan yang dilakukan oleh mahasiswa untuk membentuk karakter guna dapat mengembangkan riset dan teknologi', 'riset multidisiplin unutk tunjang kembang industri nasional'),
(91, 'Training SMK3 Awareness', '2018-07-09', 'KLS1807003', 'Training SMK3 Awareness adalah sebuah pelatihan yang dilakukan guna membentuk karakter mahasiswa untuk dapat memahami tentang SMK3', 'training smk3 awareness'),
(92, 'Training of OHSAS 18001:2008 Awareness', '2018-07-09', 'KLS1807003', 'Training of OHSAS 18001:2008 Awareness adalah sebuah pelatihan untuk mendidik mahasiswa untuk memahami tentang pelatihan tersebut', 'training of ohsas 18001 2008 awareness'),
(93, 'Pelatihan Diponegoro Muda', '2018-07-09', 'KLS1807003', 'Pelatihan Diponegoro Muda adalah kegiatan pelatihan yang dilakukan untuk mendidik mahasiswa layaknya jiwa Diponegoro Muda', 'latih diponegoro muda'),
(94, 'Kegiatan Pengenalan Umum Potensi Mikro Hidro', '2018-07-09', 'KLS1807003', 'Kegiatan Pengenalan Umum Potensi Mikro Hidro adalah kegiatan yang dilakukan untuk memberikan edukasi terkait pengenalan terhadap potensi mikro hidro', 'giat kenal umum potensi mikro hidro'),
(95, 'Lulus Ujian Praktek Keahlian Kejuruan', '2018-07-09', 'KLS1807003', 'Lulus Ujian Praktek Keahlian Kejuruan adalah sebuah pendidikan yang didapat untuk mengukur sebuah keahlian mahasiswa', 'lulus uji praktek ahli juru'),
(96, 'Professional Certification Development Programs concducted by Indonesia NEXT 2017', '2018-07-09', 'KLS1807003', 'Professional Certification Development Programs concducted by Indonesia NEXT 2017 adalah kegiatan yang dilakukan untuk membentuk karakter mahasiswa agar bisa bersaing di pengembangan program', 'professional certification development programs concducted by indonesia next 2017'),
(97, 'Microsoft Office Specialist : Official PowerPoint 2013', '2018-07-09', 'KLS1807003', 'Microsoft Office Specialist : Official PowerPoint 2013 adalah kegiatan mahasiswa untuk melakukan sertifikasi di bidang Microsoft Office yang nantinya akan dilakukan untuk membentuk karakter', 'microsoft office specialist official powerpoint 2013'),
(100, 'BPH : Anggota Bidang Politik', '2018-07-09', 'KLS1807004', 'BPH : Anggota Bidang Politik adalah sebuah pengalaman organisas yang didapat mahasiswa di bidang politik sebagai anggota', 'bph anggota bidang politik'),
(101, 'Panitia Acara Putri STT PLN dan Hari Ibu', '2018-07-09', 'KLS1807004', 'Panitia Acara Putri STT PLN dan Hari Ibu adalah sebuah acara yang guna menambah pengalaman dari kepanitiaan seorang mahasiswa', 'panitia acara putri stt pln hari ibu'),
(102, 'Anggota Departemen Keagamaan Teknik Sipil', '2018-07-09', 'KLS1807004', 'Anggota Departemen Keagamaan Teknik Sipil adalah sebuat kegiatan organisasi yang berguna untuk menunjang mahasiswa dalam bidang keagamaan', 'anggota departemen agama teknik sipil'),
(103, 'Anggota Departemen Pendidikan BPH', '2018-07-09', 'KLS1807004', 'Anggota Departemen Pendidikan BPH adalah sebuah organisasi mahasiswa tiap jurusan yang khusus menaungi bidang Pendidikan', 'anggota departemen didik bph'),
(104, 'Staff Kementerian Dalam Negeri', '2018-07-09', 'KLS1807004', 'Staff Kementerian Dalam Negeri adalah kegiatan mahasiswa yang diadakah oleh BEM STT-PLN untuk menunjang organsasi yang mahasiswa tersebut telah ikuti', 'staff menteri negeri'),
(105, 'Anggota Bidang Forteks', '2018-07-09', 'KLS1807004', 'Anggota Bidang Forteks adalah sebuah pengalaman yang didapatkan oleh mahasiswa di Organisasi Foteks', 'anggota bidang forteks'),
(106, 'Panitia Pengabdian Masyarakat STT PLN 2015', '2018-07-09', 'KLS1807004', 'Panitia Pengabdian Masyarakat STT PLN 2015 sebuah kegiatan yang dapat menambah pengalaman mahasiswa dalam membantu masyarakat dan juga membuat sesuatu yang bermanfaat buat daerah sekitar', 'panitia abdi masyarakat stt pln 2015'),
(107, 'Staff Kementerian Olahraga', '2018-07-09', 'KLS1807004', 'Staff Kementerian Olahraga merupakan suatu pekerjaan yang diemban oleh seorang mahasiswa untuk melatih diri dalam organisasi di bagian Olahraga', 'staff menteri olahraga'),
(108, 'Wakil Ketua Himpunan Teknik Mesin', '2018-07-09', 'KLS1807004', 'Wakil Ketua Himpunan Teknik Mesin adalah sebuah amanah yang diberikan kepada seorang mahasiswa Teknik Mesin untuk mengasah kemampuan Organisasi sebagai seorang pemimpin dalam Himpunan Mahasiswa Teknik Mesin', 'wakil ketua himpun teknik mesin'),
(109, 'Ready to Asean Free Trade Area', '2018-07-09', 'KLS1807004', 'Ready to Asean Free Trade Area adalah sebuah kegiatan yang menunjang dalam beroganisasi', 'ready to asean free trade area'),
(110, 'Panitia Acara : Kunjungan Industri di PT. PLN UPJP Bali', '2018-07-09', 'KLS1807004', 'Panitia Acara : Kunjungan Industri di PT. PLN UPJP Bali adalah sebuah acara yang dilakukan mahasiswa STT-PLN untuk mengambil alih dan peran dalam mencari pengalaman dalam kepanitiaan divisi acara', 'panitia acara kunjung industri pt pln upjp bal'),
(111, 'Moderator Acara Diseminasi dan Sosialisasi', '2018-07-09', 'KLS1807004', 'Moderator Acara Diseminasi dan Sosialisasi adalah sebuah pengalaman yang sangat berharga bagi seorang mahasiswa karena bisa tampil membawakan jalannya acara sebagai moderator', 'moderator acara mas sosialisasi'),
(112, 'Panitia Seminar Nasional Hologram & Augmented Reality ', '2018-07-09', 'KLS1807004', 'Panitia Seminar Nasional Hologram & Augmented Reality  adalah sebuah kegiatan dari Himpunan Mahasiswa Teknik Informatika yang mana guna dalam bidang kepanitiaan ini akan mengasah skill organisasi dari mahasiswa yang terlibat di dalam kepanitiaan ini', 'panitia seminar nasional hologram augmented reality'),
(114, 'Badan Pengurus Harian Komunikasi dan Informasi HIMAKA', '2018-07-09', 'KLS1807004', 'Badan Pengurus Harian Komunikasi dan Informasi HIMAKA adalah sebuah pengalaman organisasi yang dicapai oleh seseorang di dalam Himpunan Mahasiswa Teknik Informatika  di Bidang Komunikasi dan Informasi', 'badan urus hari komunikasi informasi himaka'),
(115, 'Panitia  Pengantar LKMM Pra â€“ TD STT PLN', '2018-07-09', 'KLS1807004', 'Panitia  Pengantar LKMM Pra â€“ TD STT PLN adalah sebuah kegiatan dari Organisasi Mahasiswa BEM STT-PLN yang mana ini merupakan sebuah kegiatan penerimaan mahasiswa baru di STT-PLN', 'panitia antar lkmm pra td stt pln'),
(116, 'Konsumsi dan Danus pada Acara Seminar dan Try Out Pegawai BUMN', '2018-07-09', 'KLS1807004', 'Konsumsi dan Danus pada Acara Seminar dan Try Out Pegawai BUMN adalah sebuah kegiatan dari Organisasi Badan Eksekutif Mahasiswa di Kementerian Pendidikan yang mengadakan event tersebut', 'konsumsi danus acara seminar try out pegawai bumn'),
(117, 'Panitia : Seminar Nasional Internet of Things & Technoprenuership', '2018-07-09', 'KLS1807004', 'Panitia : Seminar Nasional Internet of Things & Technoprenuership sebuah kegiatan mahasiswa dari Himpunan Mahasiswa Teknik Informatika di bidang panitia untuk mengasah skill organisasi', 'panitia seminar nasional internet of things technoprenuership'),
(118, 'BPH : Hubungan Alumni TI', '2018-07-09', 'KLS1807004', 'BPH : Hubungan Alumni TI adalah sebuah organisasi di Himpunan Mahasiswa Teknik Informatika yang mana mebagiani Hubungan Alumni', 'bph hubung alumni ti'),
(120, 'Perancangan Aplikasi Sistem Pengambilan Keputusan Prioritas Perbaikan Motor Induksi Tiga Fase Dengan Metode Analytical Hierarchy Proses', '2018-07-09', 'KLS1807005', 'Perancangan Aplikasi Sistem Pengambilan Keputusan Prioritas Perbaikan Motor Induksi Tiga Fase Dengan Metode Analytical Hierarchy Proses adalah skripsi yang dikerjakan oleh mahasiswa Teknik Informatika', 'ancang aplikasi sistem ambil putus prioritas baik motor induksi tiga fase metode analytical hierarchy proses'),
(121, 'Pemetaan Perkembangan Produksi Padi dan palawija Untuk Meningkatkan Ketahanan Pangan Menggunakan Metode K-Means di Kabupaten Wonogiri', '2018-07-09', 'KLS1807005', 'Pemetaan Perkembangan Produksi Padi dan palawija Untuk Meningkatkan Ketahanan Pangan Menggunakan Metode K-Means di Kabupaten Wonogiri adalah skripsi yang dikerjakan oleh mahasiswa Teknik Informatika', 'meta kembang produksi padi palawija tingkat tahan pangan metode k-means kabupaten wonogiri'),
(123, 'Analisa Efisiensi Turbin Gas Dengan Pembebanan Operasi 102 MW, 153 MW, 177 MW dan 204 MW di Unit 1 PLTGU Ciolegon ', '2018-07-09', 'KLS1807005', 'Analisa Efisiensi Turbin Gas Dengan Pembebanan Operasi 102 MW, 153 MW, 177 MW dan 204 MW di Unit 1 PLTGU Ciolegon  adalah skripsi  yang dikerjakan oleh mahasiswa Teknik Elektro', 'analisa efisiensi turbin gas beban operasi 102 mw 153 mw 177 mw 204 mw unit 1 pltgu ciolegon'),
(124, 'Perancangan Ulang Penstock Untuk Memaksimalkan Kapasitas Terpasang Pada PLTMII Plengan', '2018-07-09', 'KLS1807005', 'Perancangan Ulang Penstock Untuk Memaksimalkan Kapasitas Terpasang Pada PLTMII Plengan adalah skripsi dari mahasisw Teknik Elektro', 'ancang ulang penstock maksimal kapasitas pasang pltmii plengan'),
(125, 'Perancangan Alat Penyiraman Tanaman Otomatis Berbasis Mikrokontrorel Arduino Mega Menggunakan Sensor Soil Moisture Dengan Metode Fuzzy Tahani', '2018-07-09', 'KLS1807005', 'Perancangan Alat Penyiraman Tanaman Otomatis Berbasis Mikrokontrorel Arduino Mega Menggunakan Sensor Soil Moisture Dengan Metode Fuzzy Tahani adalah judul tugas akhir dari mahasiswa Teknik Informatika', 'ancang alat siram tanam otomatis mikrokontrorel arduino mega sensor soil moisture metode fuzzy tahan'),
(126, 'Analisis Kegagalan Material Lance Tube Tipe Long Retractable Sootblower', '2018-07-09', 'KLS1807005', 'Analisis Kegagalan Material Lance Tube Tipe Long Retractable Sootblower adalah sebuah judul tugas akhir yang di kerjakan oleh mahasiswa Teknik Sipil', 'analisis gagal material lance tube tipe long retractable sootblower'),
(127, 'Rancang Bangun Sistem Pelacak Teknisi Lapangan Terdekat Lokasi Gangguan Dengan Realtime Menggunakan Firebase Realtime Database', '2018-07-09', 'KLS1807005', 'Rancang Bangun Sistem Pelacak Teknisi Lapangan Terdekat Lokasi Gangguan Dengan Realtime Menggunakan Firebase Realtime Database adalah sebuah tugas akhir yang dikerjakan oleh mahasiswa Teknik Informatika', 'rancang bangun sistem lacak teknisi lapang dekat lokasi ganggu realtime firebase realtime database'),
(128, 'Cisco IPv6 Technologies', '2018-07-23', 'KLS1807001', 'Amerika Jepang Inggris', 'amerika jepang inggris');

-- --------------------------------------------------------

--
-- Table structure for table `tb_klasifikasi`
--

CREATE TABLE `tb_klasifikasi` (
  `kode_klasifikasi` varchar(30) NOT NULL,
  `klasifikasi` varchar(30) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_klasifikasi`
--

INSERT INTO `tb_klasifikasi` (`kode_klasifikasi`, `klasifikasi`, `deskripsi`) VALUES
('KLS1807001', 'Bahasa Internasional', 'TOEFL dan bentuk Les Bahasa Asing lainnya'),
('KLS1807002', 'Magang Industri', 'Pelatihan di Sebuah PT atau Pabrik dan lain-lain'),
('KLS1807003', 'Pendidikan Karakter ', 'Pelatihan LBB dan Sejenisnya selama masa kuliah'),
('KLS1807004', 'Pengalaman Organisasi ', 'Pernah menjabat di sebuah organisasi selama masa kuliah'),
('KLS1807005', 'Tugas Akhir / Skripsi', 'Judul Tugas Akhir / Skripsi'),
('KLS1807006', 'Penghargaan Kejuaraan ', 'Pernah mengikuti lomba');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mahasiswa`
--

CREATE TABLE `tb_mahasiswa` (
  `nim` int(11) NOT NULL,
  `nama_mahasiswa` text NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mahasiswa`
--

INSERT INTO `tb_mahasiswa` (`nim`, `nama_mahasiswa`, `jurusan`, `email`, `telepon`, `username`, `password`, `status`) VALUES
(201431290, 'Muhammad Umar Ramadhana', 'S1 Teknik Informatika', 'umar@gmail.com', '082243434444', 'umar', 'umar', 'Aktif'),
(201431291, 'Firman Giri', 'S1 Teknik Elektro', 'firmangirif@gmail.com', '085244746050', 'ir', 'ir', 'Aktif'),
(201431294, 'Rizki Nurdian Utami', 'S1 Teknik Informatika', 'dian@sttpln.ac.id', '085244002233', 'dian ', 'dian', 'Aktif'),
(201431296, 'Fahmi Roihanul Firdaus', 'S1 Teknik Informatika', 'fahmi@gmail.com', '081308130808', 'rehan', 'rehan', 'Aktif'),
(201431299, 'Muh Iriansyah', 'S1 Teknik Informatika', 'iriansyah1431299@sttpln.ac.id', '085244746050', 'pace', 'pace', 'Aktif'),
(201431300, 'Thufail Erlangga Iriandi Nuklis', 'S1 Teknik Informatika', 'thufail@gmail.com', '080890900000', 'angga', 'angga', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `tb_report`
--

CREATE TABLE `tb_report` (
  `id_report` varchar(7) NOT NULL,
  `nim` int(11) NOT NULL,
  `kode_klasifikasi` varchar(30) NOT NULL,
  `judul_indonesia` text NOT NULL,
  `judul_inggris` text NOT NULL,
  `judul_stem` text NOT NULL,
  `tgl_terbit` date NOT NULL,
  `instansi_penyelenggara` varchar(50) NOT NULL,
  `nama_kota` varchar(30) NOT NULL,
  `nama_negara` varchar(30) NOT NULL,
  `periode_awal` date NOT NULL,
  `periode_akhir` date NOT NULL,
  `status_report` int(1) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_report`
--

INSERT INTO `tb_report` (`id_report`, `nim`, `kode_klasifikasi`, `judul_indonesia`, `judul_inggris`, `judul_stem`, `tgl_terbit`, `instansi_penyelenggara`, `nama_kota`, `nama_negara`, `periode_awal`, `periode_akhir`, `status_report`, `deleted_at`) VALUES
('SRTF001', 201431299, 'KLS1807006', 'Lomba Inovasi ICON PLUS', 'Lomba Inovasi ICON PLUS', 'lomba inovasi icon plus', '2018-07-08', 'STT PLN Jakarta', 'Jakarta Barat', 'Indonesia', '2018-07-09', '2018-07-12', 1, NULL),
('SRTF002', 201431299, 'KLS1807006', 'Lomba IT Festifal Himaka STT PLN Jakarta', 'Lomba IT Festifal Himaka STT PLN Jakarta', 'lomba it festifal himaka stt pln jakarta', '2018-07-22', 'STT PLN Jakarta', 'Jakarta Barat', 'Indonesia', '2018-07-23', '2018-07-23', 2, NULL),
('SRTF003', 201431299, 'KLS1807003', 'Latihan Keterampilan Manajemen Mahasiswa S1 SIPIL', 'Latihan Keterampilan Manajemen Mahasiswa S1 SIPIL', 'latih terampil manajemen mahasiswa s1 sipil', '2018-07-16', 'STT PLN Jakarta', 'Jakarta Barat', 'Indonesia', '2018-07-01', '2018-07-31', 1, NULL),
('SRTF004', 201431299, 'KLS1807003', 'Latihan Keterampilan Manajeman Mahasiswa', 'Latihan Keterampilan Manajemen Mahasiswa', 'latih terampil manajeman mahasiswa', '2018-06-25', 'STT PLN Jakarta', 'Jakarta Timur', 'Indonesia', '2018-07-02', '2018-07-17', 0, NULL),
('SRTF005', 201431299, 'KLS1807006', 'Lomba Inovasi PLN Persero  Jakarta', 'Lomba Inovasi PLN Persero Jakarta', 'lomba inovasi pln persero jakarta', '2018-07-30', 'STT PLN Jakarta', 'Jakarta Barat', 'Indonesia', '2018-07-23', '2018-07-22', 0, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`kode_admin`);

--
-- Indexes for table `tb_dataolah`
--
ALTER TABLE `tb_dataolah`
  ADD PRIMARY KEY (`kode_dataolah`),
  ADD KEY `kode_klasifikasi` (`kode_klasifikasi`);

--
-- Indexes for table `tb_klasifikasi`
--
ALTER TABLE `tb_klasifikasi`
  ADD PRIMARY KEY (`kode_klasifikasi`);

--
-- Indexes for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `tb_report`
--
ALTER TABLE `tb_report`
  ADD PRIMARY KEY (`id_report`),
  ADD KEY `nim` (`nim`),
  ADD KEY `kode_klasifikasi` (`kode_klasifikasi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_dataolah`
--
ALTER TABLE `tb_dataolah`
  MODIFY `kode_dataolah` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_dataolah`
--
ALTER TABLE `tb_dataolah`
  ADD CONSTRAINT `tb_dataolah_ibfk_1` FOREIGN KEY (`kode_klasifikasi`) REFERENCES `tb_klasifikasi` (`kode_klasifikasi`);

--
-- Constraints for table `tb_report`
--
ALTER TABLE `tb_report`
  ADD CONSTRAINT `tb_report_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `tb_mahasiswa` (`nim`),
  ADD CONSTRAINT `tb_report_ibfk_2` FOREIGN KEY (`kode_klasifikasi`) REFERENCES `tb_klasifikasi` (`kode_klasifikasi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
