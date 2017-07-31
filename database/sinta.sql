-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 31, 2017 at 02:13 
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sinta`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id` int(4) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `keahlian` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id`, `nama`, `nip`, `keahlian`) VALUES
(1, 'Selvia Lorena Br. Ginting, S.Si., MT.', '41277005003', 'Komputasi'),
(2, 'John Adler, M.Si.', '41277005007', 'Instrumentasi Dan Kontrol'),
(3, 'Usep M. Ishaq, M.Si.', '41277005008', 'Instrumentasi Dan Kontrol'),
(4, 'Dr.Wendi Zarman, M.Si.', '41277005010', 'Komputasi'),
(7, 'Hidayat, S.Kom., MT.', '41277005011', 'Instrumentasi Dan Kontrol'),
(8, 'Sri Nurhayati, S.Si., MT.', '41277005013', 'Komputasi'),
(9, 'Ir. Syahrul, MT.', '42177005016', 'Instrumantasi Dan Kontrol'),
(10, 'Agus Mulyana, S.Kom., MT.', '41277005017', 'Instrumentasi Dan Kontrol'),
(11, 'Susmini Indriani L., MT.', '41277005018', 'Komputasi Dan Jaringan'),
(12, 'Taufiq Nuzwir Nizar, M.Kom.', '41277005020', 'Instrumentasi Dan Kontrol'),
(13, 'Sri Supatmi, S.Kom., M.T', '41277005023', 'Komputasi'),
(14, 'Sutono, M.Kom.', '41277005026', 'Instrumentasi Dan Kontrol'),
(15, 'Ayub Subandi, S.Si., MT.', '41277005030', 'Instrumentasi Dan Kontrol'),
(16, 'Irfan Dwiguna Sumitra, M. Kom', '41277005031', 'Instrumentasi Dan Kontrol'),
(17, 'Aprianti Putri Sujana, S. Kom., M.T.', '41277005033', 'Komputasi Dan Jaringan'),
(18, 'Mochammad Fajar W, M. Kom', '41277005032', 'Instrumentasi Dan Kontrol');

-- --------------------------------------------------------

--
-- Table structure for table `ta`
--

CREATE TABLE `ta` (
  `id` int(4) NOT NULL,
  `judul` varchar(120) NOT NULL,
  `nim` varchar(30) NOT NULL,
  `penulis` varchar(60) NOT NULL,
  `pembimbing` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ta`
--

INSERT INTO `ta` (`id`, `judul`, `nim`, `penulis`, `pembimbing`) VALUES
(1, 'Puzzle Elektronik Untuk Edukasi Anak-Anak ', '10208108', 'Asep Sunandar', 'Hidayat, S.Kom., MT.'),
(2, 'Sistem Keamanan Perumahan Berbasis Smartphone Android ', '10209125', 'Asep Koswata ', 'Ir. Syahrul, MT.'),
(3, 'Analisis Metode Deteksi Tepi Untuk Mengindentifikasi Pola Ukiran perisai Dayak ', '10208092', 'Noviyana Sudrajat ', 'Ayub Subandi, S.Si., MT.'),
(4, 'Alat Bantu Penyandang Tunanetra Menggunakan Sensor Ultrasonic ', '10209035', 'Ramdhani Aprianto ', 'Yeffry Putra Handoko'),
(5, 'Rancang Bangun Alat Uji Kebocoran Pada Botol Air Mineral Berbasis Mikrokontroler ', '10208110', 'Herman Adi Prasetya', 'Sutono, M.Kom.'),
(6, 'Rancangan Bangun Sistem Kelistrikan Dan Sistem Manajemen Baterai Pada Kendaraan Listrik ', '10209076', 'Henri Wijaksana', 'Sutono, M.Kom.'),
(7, 'Menentukan Golongan Mobil Di gerbang Tol Secara Otomatis Dengan Mekannisme Pemetaan Jumlah Ban ', '10210060', 'Rizki Pratomo Adi Sucipto ', 'Sutono, M.Kom.'),
(8, 'Rancang Bangun Sistem Aeroponik Secaras Otomatis Budidaya Beberapa Sayuran ', '10208070', 'Muhammad Widodo', 'Sutono, M.Kom.'),
(9, 'Aplikasi Try Out Ujian Nasional Tingkat SMA Menggunakan PHP ', '10209087', 'Muhamad Iqbal ', 'Hidayat, S.Kom., MT.'),
(10, 'Sistem E-Voting Dengan Memanfaatkan Tag RFID Sebagai Login ', '10210140', 'Prengky Perto ', 'Sri Nurhayati, S.Si., MT.'),
(11, 'Dispenser Pintar Berbasis Mikrokontroler AVRATMEGA8535 ', '10210032', 'Rinaldias Dimastaputra ', 'Sutono, M.Kom.'),
(12, 'Penerapan Embedded Webserver Pada Perancangan Sistem kendali Lampu Lalu Lintas ', '10210141', 'Mukmin Maulana Latin ', 'Agus Mulyana, S.Kom., MT.'),
(13, 'Rancangan Bangun Pemantauan Bawah Permukaan Tanah Menggunakan Metoda Geolistrik Berbasis Mikrokontroller ', '10208707', 'Aldi Akhbar ', 'Sutono, M.Kom.'),
(14, 'Alat Ukur Parameter Tanah Dan Lingkungan Berbasis Smartphone ', '10208109', 'Syam Sofyan Nurdin ', 'Agus Mulyana, S.Kom., MT.'),
(15, 'Puzzle Elektronik Al-Qur\'an Untuk Anak-Anak ', '10209012', 'Mustopa Nur Hayat ', 'Hidayat, S.Kom., MT.'),
(16, 'Aplikasi Untuk Mendiagnosa Penyakit Epilepsi Menggunakan Metode Case Base Reasoning Berbasis Web ', '10209120', 'Realdo Meyantoro ', 'Selvia Lorena Br. Ginting, S.Si., MT.'),
(17, 'Implementasi Augmented Reality Pada Aplikasi Pemandu Kota Menggunakan Metode Location Based Service Berbasis Android ', '10208053', 'Imron Hamzah ', 'Selvia Lorena Br. Ginting, S.Si., MT.'),
(18, 'Perancangan dan Pembuatan Sistem Keamanan Rumah Berbasis Website dan SMS sebagai Media Informasi ', '10211710', 'Rahadian Djati Pramono', 'Ir. Syahrul, MT.'),
(19, 'Implementasi Algoritma Knuth-Morris-Pratt dalam Aplikasi untuk Penerjemahan Idiom Bahasa Inggris ', '10210124', 'Irvan Kurniawan ', 'Selvia Lorena Br. Ginting, S.Si., MT.'),
(20, 'Otomatisasi Sistem Pencarian Laci Penyimpanan Obat pada Apotek Menggunakan Mikrokontroler \r\n', '10210068', 'Ahmad Karrubi ', 'Ir. Syahrul, MT.'),
(21, 'Membangun Sistem Keamanan Jaringan Wireless untuk Mencegah ARP Poisoning Menggunakan Metode Isolation User', '10210722', 'Rickardo Pandiangan ', 'Yeffry Putra Handoko'),
(22, 'Perancangan Alat Pengamanan Perjalanan Model Kereta Api', '10210100', 'Ardy Sandry Singgalen ', 'Ayub Subandi, S.Si., MT.'),
(23, 'Sistem Pemupukan Otomatis Berdasarkan Kandungan Unsur Hara Dari Tingkat Kelembaban Tanah ', '10211703', 'Aulia Arip Rakhman ', 'Ayub Subandi, S.Si., MT.'),
(24, 'Perancangan IDS dengan Teknik HIDS (Host Based Intrusion Detection System) Menggunakan Software OSSEC ', '10210077', 'Reza Aulia Yulnandi ', 'Susmini Indriani Lestariningati, MT.'),
(25, 'Perancangan Sistem Kontrol untuk Mengatasi Efek Contra-Rotating pada Roket Motor Elektrik ', '10210150', 'Lutfi Abdussalam ', 'Ayub Subandi, S.Si., MT.'),
(26, 'Perancangan On-Board Data Handling untuk Roket EDF (Electric Ducted Fan) ', '10210105', 'Garry Afrialdi ', 'Agus Mulyana, S.Kom., MT.'),
(27, 'Sistem Pendeteksian dan Perhitungan Score Tembakan pada Latihan Menembak Berbasis Matlab ', '10210063', 'Firdaus Puji Anshari ', 'John Adler, M.Si.'),
(28, 'Perancangan Aplikasi Pengolahan Citra Untuk mendiagnosa penyakit Ikan Kakap berbasis Android ', '10210016', 'Ignas Widyatama N', 'Sri Nurhayati, S.Si., MT.'),
(29, 'Sistem Monitoring Dan Kendali Perubahan Kualitas Air Pada Budidaya Ikan Hias Air tawar Berbasis Mikrokontroler ', '10210125', 'Daud Jhoni ', 'Ir. Syahrul, MT.'),
(30, 'Sistem Pemantauan Kincir Angin Berbasis Mikrokontroler dan Website ', '10210169', 'Eko Prabowo N', 'Ayub Subandi, S.Si., MT.'),
(31, 'Sistem Pendeteksi Objek Menggunakan Metode Deteksi Ciri Sift Pada Robowaiter DRU99RUNE-V14 ', '10210055', 'Achmad Ari Wibowo', 'Taufiq Nuzwir Nizar, M.Kom.'),
(32, 'Perancangan Alat Kontrol Larutan Penyangga \r\n', '10210053', 'Azi Izmail Maulana ', 'Ir. Syahrul, MT.'),
(33, 'Perancangan Monitoring Rumah Sebagai Pendeteksi Keamanan Secara Online \r\n', '10208048', 'Ryan Zulmi ', 'Ir. Syahrul, MT.'),
(34, 'Sistem Monitoring Distribusi Bantuan Bencana Alam Berbasis Website Menggunakan Metode Algoritma First Fit \r\n', '10209100', 'Juliza Dofa Elena', 'Sri Nurhayati, S.Si., MT.'),
(35, 'Alat Pengukur Kadar oksigen pada Tubuh Manusia \r\n', '10209050', 'Fathur Rahman ', 'Ir. Syahrul, MT.'),
(46, 'Percobaan Rossi', '10200046', 'Valentino Rossi', 'Sutono M.Kom');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(4) NOT NULL,
  `nama` varchar(70) NOT NULL,
  `nim` varchar(8) NOT NULL,
  `email` varchar(60) NOT NULL,
  `tanggal` varchar(30) NOT NULL,
  `pass` varchar(60) NOT NULL,
  `hp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `nim`, `email`, `tanggal`, `pass`, `hp`) VALUES
(2, 'Nanra Sukedy', '10214117', 'sukedynanra@gmail.com', '7 April, 1993', 'nanra', '0878-2127-2711'),
(3, 'Arif Rakhman', '10214114', 'arifrakhman1309@gmail.com', '13 September, 1995', 'arif', '0879-6544-2222'),
(5, 'Dindin Mahpudien', '10214118', 'dindin@gmail.com', '8 June, 1995', 'dindin', '0876-5432-1112'),
(6, 'Raka Maulana', '10214111', 'raka@gmail.com', '1 June, 2005', 'raka', '0876-5422-2222'),
(7, 'Syapta Hariadi Ade', '10214112', 'ade@gmail.com', '1 June, 1992', 'ade', '0876-5432-1233'),
(8, 'Melissa', '10214555', 'mels@gmail.com', '17 October, 1995', 'melissa', '0897-6534-2518'),
(9, 'Fitrah', '10215333', 'fitrah@gmail.com', '7 June, 1995', 'fitrah', '0876-5543-6272'),
(10, 'Risma', '10215666', 'risma@gmail.com', '3 June, 1997', 'risma', '0876-5434-2617'),
(12, 'Kresnamal Yuda', '10214069', 'yuda@gmail.com', '19 July, 1996', 'yuda', '0823-4561-7822'),
(13, 'Valentino Rossi', '10214046', 'rossi@gmail.com', '7 April, 1987', 'rossi', '0975-5436-7788');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ta`
--
ALTER TABLE `ta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `ta`
--
ALTER TABLE `ta`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
