-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Jul 13, 2023 at 03:56 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kelurahan`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `slug` varchar(300) NOT NULL,
  `judul` varchar(350) NOT NULL,
  `teks_pembuka` text NOT NULL,
  `konten` text NOT NULL,
  `gambar` varchar(120) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `slug`, `judul`, `teks_pembuka`, `konten`, `gambar`, `created_at`) VALUES
(10, 'kegiatan-kerja-bakti-bersama-warga-kelurahan-situdaun', 'Kegiatan Kerja Bakti Bersama Warga Kelurahan Situdaun', 'Kelurahan Situdaun, pada tanggal 8 Juli 2023, mengadakan acara pembersihan lingkungan yang melibatkan warga setempat. Acara ini diinisiasi oleh Kelura...', '{\"ops\":[{\"insert\":\"Kelurahan Situdaun, pada tanggal 8 Juli 2023, mengadakan acara pembersihan lingkungan yang melibatkan warga setempat. Acara ini diinisiasi oleh Kelurahan Situdaun sebagai bagian dari program kebersihan dan keindahan lingkungan yang bertujuan untuk menciptakan lingkungan yang bersih dan sehat bagi warganya.\n\nAcara pembersihan lingkungan dihadiri oleh lebih dari 100 warga Kelurahan Situdaun, yang terdiri dari berbagai kalangan usia. Mereka bersama-sama membersihkan area publik seperti taman, trotoar, dan area sekitar fasilitas umum. Dalam acara tersebut, warga diberikan sarana dan peralatan pembersih seperti sapu, sekop, dan alat kebersihan lainnya.\n\nSelain pembersihan, acara ini juga mengedukasi warga tentang pentingnya menjaga kebersihan lingkungan. Pada kesempatan tersebut, petugas dari Dinas Lingkungan Hidup memberikan sosialisasi tentang pengelolaan sampah yang benar, pemilahan sampah, dan penggunaan lahan hijau. Warga juga diberikan informasi tentang dampak positif dari lingkungan yang bersih terhadap kesehatan dan kenyamanan hidup.\n\nKepala Kelurahan Situdaun, Bapak Rohman, mengungkapkan kebanggaannya terhadap partisipasi aktif warga dalam acara tersebut. Ia berharap kegiatan semacam ini dapat menjadi budaya yang ditanamkan dalam masyarakat sehingga kebersihan lingkungan dapat terjaga dengan baik.\n\nAcara pembersihan lingkungan ini merupakan salah satu upaya Kelurahan Situdaun untuk meningkatkan kesadaran dan partisipasi masyarakat dalam menjaga kebersihan lingkungan. Diharapkan melalui kegiatan serupa di masa depan, Kelurahan Situdaun dapat menjadi contoh dalam menciptakan lingkungan yang indah dan nyaman untuk semua warganya.\n\"}]}', '10072023043831situdaun.jpg', '2023-07-10 02:38:31'),
(12, 'situdaun-gelar-pelatihan-kewirausahaan-untuk-meningkatkan-ekonomi-warga', 'Situdaun Gelar Pelatihan Kewirausahaan untuk Meningkatkan Ekonomi Warga', 'Situdaun, sebuah kelurahan yang berada di daerah perkotaan, mengadakan pelatihan kewirausahaan yang bertujuan untuk meningkatkan potensi ekonomi warga...', '{\"ops\":[{\"insert\":\"Situdaun, sebuah kelurahan yang berada di daerah perkotaan, mengadakan pelatihan kewirausahaan yang bertujuan untuk meningkatkan potensi ekonomi warga. Pelatihan ini diinisiasi oleh pemerintah kelurahan Situdaun sebagai upaya untuk memberikan keterampilan dan pengetahuan bisnis kepada warga guna mendorong kemandirian ekonomi.\n\nPelatihan kewirausahaan dilaksanakan selama satu minggu dengan melibatkan instruktur dan ahli bisnis lokal. Peserta pelatihan terdiri dari warga Situdaun yang memiliki minat dan potensi dalam berwirausaha. Mereka diajarkan tentang konsep dasar bisnis, perencanaan usaha, manajemen keuangan, pemasaran, dan keterampilan lain yang diperlukan untuk memulai dan mengelola usaha.\n\nSelama pelatihan, peserta juga diberikan kesempatan untuk mengembangkan ide bisnis mereka sendiri. Mereka diberikan bimbingan dan masukan dari para instruktur serta kesempatan untuk berdiskusi dan berkolaborasi dengan sesama peserta. Pada akhir pelatihan, peserta akan mempresentasikan rencana bisnis mereka kepada panel ahli yang akan memberikan masukan dan saran untuk mengembangkan ide bisnis tersebut.\n\nKepala Kelurahan Situdaun, Bu W, menyatakan harapannya bahwa melalui pelatihan kewirausahaan ini, warga Situdaun akan lebih siap dalam menghadapi tantangan dalam dunia bisnis. Ia berharap pelatihan ini dapat mendorong terciptanya lapangan kerja baru, pertumbuhan ekonomi lokal, dan peningkatan kesejahteraan masyarakat.\n\nPelatihan kewirausahaan ini merupakan salah satu upaya kelurahan Situdaun dalam mendukung potensi dan kreativitas warga dalam berwirausaha. Diharapkan dengan adanya pelatihan ini, akan lahir berbagai usaha mikro dan menengah yang dapat memberikan manfaat bagi warga Situdaun dan mendukung pertumbuhan ekonomi kelurahan secara keseluruhan.\n\"}]}', '11072023080806wirausaha_2020.jpg', '2023-07-11 06:08:06'),
(13, 'situdaun-merayakan-hari-jadi-ke-50-dengan-pameran-budaya-dan-kegiatan-komunitas', ' Situdaun Merayakan Hari Jadi ke-50 dengan Pameran Budaya dan Kegiatan Komunitas', 'Situdaun, sebuah kelurahan yang telah menjadi tempat tinggal bagi berbagai komunitas dan budaya yang beragam, merayakan hari jadinya yang ke-50 dengan...', '{\"ops\":[{\"insert\":\"Situdaun, sebuah kelurahan yang telah menjadi tempat tinggal bagi berbagai komunitas dan budaya yang beragam, merayakan hari jadinya yang ke-50 dengan pameran budaya dan berbagai kegiatan komunitas yang meriah. Acara tersebut diadakan sebagai bentuk apresiasi terhadap sejarah, keanekaragaman, dan keragaman budaya yang ada di Situdaun.\n\nPameran budaya menjadi highlight utama perayaan tersebut. Di dalam pameran ini, setiap komunitas di Situdaun memiliki stan sendiri untuk memamerkan warisan budaya mereka. Pengunjung dapat melihat pameran seni, kerajinan tangan, pakaian tradisional, serta menikmati pertunjukan musik, tari, dan teater yang dipentaskan oleh anggota komunitas tersebut.\n\nSelain pameran budaya, perayaan hari jadi ini juga menampilkan berbagai kegiatan komunitas yang beragam. Misalnya, ada lomba makanan tradisional, pertandingan sepak bola antar-komunitas, bazaar produk lokal, dan acara panggung yang menampilkan bakat-bakat lokal dalam menyanyi, menari, atau melawak.\n\nAcara ini menjadi momen yang sangat dinanti oleh warga Situdaun, baik muda maupun tua. Warga bersatu dalam semangat kebersamaan untuk merayakan perayaan bersejarah ini. Mereka berpakaian khas, saling berinteraksi, dan berbagi cerita serta kenangan mereka tentang Situdaun.\n\nKepala Kelurahan Situdaun, Bapak X, menyampaikan rasa bangganya terhadap perayaan hari jadi yang meriah ini. Ia berharap perayaan ini dapat memperkuat ikatan antarwarga Situdaun, melestarikan budaya lokal, serta menginspirasi generasi muda untuk mencintai dan menjaga warisan budaya mereka.\n\nPerayaan hari jadi ke-50 Situdaun merupakan momentum penting dalam sejarah kelurahan ini. Melalui pameran budaya dan kegiatan komunitas yang meriah, Situdaun berharap dapat mempererat kebersamaan, mempromosikan keanekaragaman budaya, dan menciptakan hubungan yang lebih erat antara warga.\n\"}]}', '11072023081029budaya.jpg', '2023-07-11 06:10:29');

-- --------------------------------------------------------

--
-- Table structure for table `penduduk`
--

CREATE TABLE `penduduk` (
  `id_penduduk` int(11) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan') NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `agama` varchar(30) NOT NULL,
  `status_perkawinan` enum('belum kawin','kawin','cerai hidup','cerai mati') NOT NULL,
  `pekerjaan` varchar(30) NOT NULL,
  `kewarganegaraan` enum('WNI','WNA') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penduduk`
--

INSERT INTO `penduduk` (`id_penduduk`, `nik`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `agama`, `status_perkawinan`, `pekerjaan`, `kewarganegaraan`) VALUES
(1, '1234567890123456', 'John Doe', 'Bogor', '1990-05-15', 'laki-laki', 'Jl. Raya No. 123', 'Islam', 'belum kawin', 'Pegawai Swasta', 'WNI'),
(2, '9876543210987654', 'Jane Smith', 'Bandung', '1995-08-20', 'perempuan', 'Jl. Indah No. 456', 'Kristen', 'kawin', 'Dokter', 'WNI'),
(3, '4567891230123456', 'David Johnson', 'Surabaya', '1988-03-10', 'laki-laki', 'Jl. Merdeka No. 789', 'Islam', 'kawin', 'Wiraswasta', 'WNI'),
(4, '7891234560123456', 'Sarah Lee', 'Medan', '1992-11-25', 'perempuan', 'Jl. Makmur No. 321', 'Kristen', 'belum kawin', 'Mahasiswa', 'WNI'),
(5, '6543219870123456', 'Michael Chen', 'Yogyakarta', '1991-06-05', 'laki-laki', 'Jl. Jaya No. 654', 'Buddha', 'belum kawin', 'Guru', 'WNI'),
(6, '3216549870123456', 'Emily Wang', 'Semarang', '1993-09-12', 'perempuan', 'Jl. Sejahtera No. 987', 'Hindu', 'kawin', 'Pengusaha', 'WNI'),
(7, '9871236540123456', 'Daniel Tan', 'Palembang', '1989-04-08', 'laki-laki', 'Jl. Harmoni No. 456', 'Islam', 'kawin', 'Pegawai Negeri', 'WNI'),
(8, '7894561230123456', 'Michelle Liu', 'Malang', '1994-07-17', 'perempuan', 'Jl. Raya Baru No. 123', 'Kristen', 'belum kawin', 'Dosen', 'WNI'),
(9, '6547893210123456', 'Andrew Kim', 'Denpasar', '1997-02-02', 'laki-laki', 'Jl. Damai No. 789', 'Islam', 'belum kawin', 'Mahasiswa', 'WNI'),
(10, '1237894560123456', 'Jessica Ng', 'Makassar', '1996-12-30', 'perempuan', 'Jl. Bahagia No. 456', 'Kristen', 'kawin', 'Karyawan Swasta', 'WNI'),
(11, '1111222233334444', 'Adam Smith', 'Jakarta', '1995-03-12', 'laki-laki', 'Jl. Mawar No. 456', 'Islam', 'belum kawin', 'Mahasiswa', 'WNI'),
(12, '2222333344445555', 'Sara Johnson', 'Bandung', '1992-08-18', 'perempuan', 'Jl. Melati No. 123', 'Kristen', 'kawin', 'Dosen', 'WNI'),
(13, '3333444455556666', 'Eko Pratomo', 'Surabaya', '1987-12-05', 'laki-laki', 'Jl. Anggrek No. 789', 'Islam', 'kawin', 'Pegawai Swasta', 'WNI'),
(14, '4444555566667777', 'Rina Wijaya', 'Medan', '1991-10-22', 'perempuan', 'Jl. Dahlia No. 321', 'Kristen', 'belum kawin', 'Wiraswasta', 'WNI'),
(15, '5555666677778888', 'Budi Santoso', 'Yogyakarta', '1993-07-08', 'laki-laki', 'Jl. Teratai No. 654', 'Buddha', 'belum kawin', 'Guru', 'WNI'),
(16, '6666777788889999', 'Lina Chen', 'Semarang', '1990-04-15', 'perempuan', 'Jl. Anggrek No. 987', 'Hindu', 'kawin', 'Pengusaha', 'WNI'),
(17, '7777888899990000', 'Rudi Setiawan', 'Palembang', '1988-11-30', 'laki-laki', 'Jl. Merpati No. 456', 'Islam', 'kawin', 'Pegawai Negeri', 'WNI'),
(18, '8888999900001111', 'Linda Tan', 'Malang', '1994-06-17', 'perempuan', 'Jl. Mawar Baru No. 123', 'Kristen', 'belum kawin', 'Dosen', 'WNI'),
(19, '9999000011112222', 'Doni Kim', 'Denpasar', '1998-01-02', 'laki-laki', 'Jl. Melati No. 789', 'Islam', 'belum kawin', 'Mahasiswa', 'WNI'),
(20, '1010101010101010', 'Cindy Ng', 'Makassar', '1997-09-30', 'perempuan', 'Jl. Dahlia No. 456', 'Kristen', 'kawin', 'Karyawan Swasta', 'WNI'),
(21, '1212121212121212', 'Joko Wibowo', 'Jakarta', '1990-06-15', 'laki-laki', 'Jl. Surya No. 123', 'Islam', 'belum kawin', 'Pegawai Swasta', 'WNI'),
(22, '1414141414141414', 'Anita Susanto', 'Surabaya', '1993-03-05', 'perempuan', 'Jl. Merdeka No. 789', 'Islam', 'belum kawin', 'Pegawai Swasta', 'WNI'),
(23, '1515151515151515', 'Ricky Pranata', 'Medan', '1989-11-22', 'laki-laki', 'Jl. Jaya No. 321', 'Kristen', 'kawin', 'Wiraswasta', 'WNI'),
(24, '1616161616161616', 'Siti Rahmawati', 'Yogyakarta', '1992-07-08', 'perempuan', 'Jl. Indah No. 654', 'Islam', 'belum kawin', 'Guru', 'WNI'),
(25, '1717171717171717', 'Bambang Kurniawan', 'Semarang', '1988-04-15', 'laki-laki', 'Jl. Raya Baru No. 987', 'Buddha', 'belum kawin', 'Pengusaha', 'WNI'),
(26, '1818181818181818', 'Dewi Susanti', 'Palembang', '1994-01-30', 'perempuan', 'Jl. Harmoni No. 456', 'Islam', 'kawin', 'Pegawai Negeri', 'WNI'),
(27, '1919191919191919', 'Hendrik Gunawan', 'Malang', '1991-06-17', 'laki-laki', 'Jl. Damai No. 123', 'Kristen', 'kawin', 'Dosen', 'WNI'),
(28, '2020202020202020', 'Maya Santoso', 'Denpasar', '1997-03-02', 'perempuan', 'Jl. Makmur No. 789', 'Islam', 'belum kawin', 'Mahasiswa', 'WNI'),
(29, '2121212121212121', 'Roni Wijaya', 'Makassar', '1996-11-30', 'laki-laki', 'Jl. Sejahtera No. 456', 'Kristen', 'kawin', 'Karyawan Swasta', 'WNI'),
(30, '2222222222222222', 'Lisa Anggraini', 'Jakarta', '1990-08-15', 'perempuan', 'Jl. Bahagia No. 123', 'Islam', 'belum kawin', 'Pegawai Swasta', 'WNI'),
(31, '2323232323232323', 'Fajar Setiawan', 'Bandung', '1995-05-12', 'laki-laki', 'Jl. Indah No. 456', 'Kristen', 'kawin', 'Dokter', 'WNI'),
(32, '121973917239112', 'Muhammad Rizki', 'Bogor', '2003-03-22', 'laki-laki', 'cimangu wates', 'Islam', 'belum kawin', 'Mahasiswa', 'WNI');

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan_surat`
--

CREATE TABLE `pengajuan_surat` (
  `id_pengajuan_surat` int(6) UNSIGNED ZEROFILL NOT NULL,
  `id_penduduk` int(11) NOT NULL,
  `id_surat` int(11) NOT NULL,
  `no_wa` varchar(13) NOT NULL,
  `status` enum('diproses','selesai') NOT NULL DEFAULT 'diproses',
  `keterangan` text NOT NULL DEFAULT 'Tidak ada keterangan',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengajuan_surat`
--

INSERT INTO `pengajuan_surat` (`id_pengajuan_surat`, `id_penduduk`, `id_surat`, `no_wa`, `status`, `keterangan`, `created_at`) VALUES
(000001, 1, 5, '08123456789', 'selesai', 'testing', '2023-07-07 01:53:54'),
(000002, 1, 7, '08121111', 'selesai', '', '2023-07-12 10:28:39'),
(000005, 2, 12, '08123445677', 'selesai', 'tes', '2023-07-12 10:40:28');

-- --------------------------------------------------------

--
-- Table structure for table `surat`
--

CREATE TABLE `surat` (
  `id_surat` int(11) NOT NULL,
  `nama_surat` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `surat`
--

INSERT INTO `surat` (`id_surat`, `nama_surat`) VALUES
(1, 'Surat Keterangan Belum Menikah, Duda/Janda'),
(2, 'Surat Keterangan Boro Kerja'),
(3, 'Surat Keterangan Domisili Tempat Usaha'),
(4, 'Surat Keterangan Kelahiran'),
(5, 'Surat Keterangan Kematian'),
(6, 'Surat Keterangan Tidak Mampu untuk Pengajuan Keringanan Biaya Sekolah/Pengajuan Beasiswa'),
(7, 'Surat Keterangan Wali Nikah'),
(8, 'Surat Pengantar Calon Tenaga Kerja Indonesia (TKI/TKW)'),
(9, 'Surat Pengantar Nikah, Talak, Cerai, Rujuk (NTCR)'),
(10, 'Surat Pengantar Pembuatan Dispensasi Nikah Mendadak'),
(11, 'Surat Pengantar Pembuatan Konversi Tanah'),
(12, 'Surat Pengantar Pembuatan Pernyataan Ahli Waris'),
(13, 'Surat Pengantar Pembuatan Surat Pindah'),
(14, 'Surat Pengantar Penerbitan Duplikat Surat Nikah'),
(15, 'Surat Pengantar Penerbitan Kartu Keluarga (KK)'),
(16, 'Surat Pengantar Penerbitan Kartu Tanda Penduduk (KTP)'),
(17, 'Surat Pengantar Pengambilan Uang di Bank/Lembaga Lain'),
(18, 'Surat Pengantar pembuatan Surat Keterangan Catatan Kepolisian (SKCK)'),
(19, 'Surat Rekomendasi Ijin Kegiatan/Keramaian'),
(20, 'Surat Pengantar Kartu Indonesia Pintar'),
(21, 'Surat Pengantar BPJS');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`id_penduduk`),
  ADD UNIQUE KEY `nik` (`nik`);

--
-- Indexes for table `pengajuan_surat`
--
ALTER TABLE `pengajuan_surat`
  ADD PRIMARY KEY (`id_pengajuan_surat`),
  ADD KEY `id penduduk` (`id_penduduk`),
  ADD KEY `id surat` (`id_surat`);

--
-- Indexes for table `surat`
--
ALTER TABLE `surat`
  ADD PRIMARY KEY (`id_surat`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `penduduk`
--
ALTER TABLE `penduduk`
  MODIFY `id_penduduk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `pengajuan_surat`
--
ALTER TABLE `pengajuan_surat`
  MODIFY `id_pengajuan_surat` int(6) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `surat`
--
ALTER TABLE `surat`
  MODIFY `id_surat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pengajuan_surat`
--
ALTER TABLE `pengajuan_surat`
  ADD CONSTRAINT `id penduduk` FOREIGN KEY (`id_penduduk`) REFERENCES `penduduk` (`id_penduduk`),
  ADD CONSTRAINT `id surat` FOREIGN KEY (`id_surat`) REFERENCES `surat` (`id_surat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
