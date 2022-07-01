-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2022 at 09:54 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mvc_perpus`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user_id` int(2) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(15) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `gambar` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_id`, `username`, `password`, `fullname`, `gambar`) VALUES
(1, 'operator', 'operator', 'Petugas', 'gambar_admin/avatar5.png'),
(2, 'mihrawardana', 'mihrawardana', 'Mihra Wardana', 'gambar_admin/foto.jpg'),
(3, 'admin', 'admin', 'Admin PerpustakaanKU', 'gambar_admin/ssamson.jpg'),
(4, 'admin1@gmail.com', '12345', 'Admin 1', '');

-- --------------------------------------------------------

--
-- Table structure for table `data_anggota`
--

CREATE TABLE `data_anggota` (
  `id` int(4) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `password` varchar(25) NOT NULL,
  `jk` varchar(2) DEFAULT NULL,
  `kelas` varchar(5) DEFAULT NULL,
  `ttl` varchar(100) DEFAULT NULL,
  `alamat` varchar(250) DEFAULT NULL,
  `foto` varchar(75) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_anggota`
--

INSERT INTO `data_anggota` (`id`, `email`, `nama`, `password`, `jk`, `kelas`, `ttl`, `alamat`, `foto`) VALUES
(1, 'mihrawardana@gmail.com', 'Mihra Wardana', 'mihrawardana', 'P', '19', 'Kendari, 29 10 2001', 'Ranomeeto', 'gambar_anggota/fotoo.jpg'),
(2, 'anggota@gmail.com', 'anggota', 'anggota', 'P', '10', 'Konawe, 12 09 1999', 'Semarang', 'gambar_anggota/IMG-20191104-WA0043.jpg'),
(21, 'avwingsb@gmail.com', 'Dwi Hardiansyah', '12345678', 'L', '18', 'unaaha, 2001-05-05', 'kendari', ''),
(22, 'han@on.com', 'Farkhan', 'han', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `data_buku`
--

CREATE TABLE `data_buku` (
  `id` int(11) NOT NULL,
  `judul` varchar(250) NOT NULL,
  `pengarang` varchar(250) NOT NULL,
  `th_terbit` varchar(4) NOT NULL,
  `penerbit` varchar(250) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `jumlah_buku` int(2) NOT NULL,
  `gambar` text NOT NULL,
  `link_buku` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_buku`
--

INSERT INTO `data_buku` (`id`, `judul`, `pengarang`, `th_terbit`, `penerbit`, `kategori`, `jumlah_buku`, `gambar`, `link_buku`) VALUES
(1, 'Pemrograman Web Hosting', 'Mihra Wardana', '2019', '-', 'Laporan', 61, 'gambar_buku/ssamson.jpg', ''),
(8, 'Menjadi Perempuan Terdidik dan Feminisme', 'Dr. Wiyatmi, M.hum', '2013', 'UNY Press', 'Novel', 325, 'gambar_buku/18ea2ec6-87a6-4af2-ac1f-be6d89dac9c1.jpg', 'https://drive.google.com/file/d/1FtanKL1PhyffVYM0WHjKRUmy_AWeiEvU/view?usp=sharing'),
(9, 'Perempuan di titik nol', 'Nawal el - Saadawi', '1989', 'Yayasan Pustaka Obor Indonesi', 'Novel', 201, 'gambar_buku/54b21d38-348b-4a8a-890f-7eb267d692be.jpg', 'https://drive.google.com/file/d/1Fr5ajsbd_f2Tcg4mzd2gF3PXk5-30T4q/view?usp=sharing'),
(10, 'Matinya Socrates', 'Plato', '2015', 'Narasi', 'Kisah', 307, 'gambar_buku/c7001ce9-e0dc-4e86-8581-3a814bd91c23.jpg', 'https://drive.google.com/file/d/1CK0jW2bmO03-JUNRjR4YdCoUuNDGi8hD/view?usp=sharing'),
(11, 'filsafat perselingkuhan ', 'Reza A.A Wattimena', '2010', 'PT Evolireta', 'Filsafat', 160, 'gambar_buku/641d9600-0a0f-43ab-8d74-fee32cbe5dd3.jpg', 'https://drive.google.com/file/d/1Cm9dvFPs_xG6R7odecyn35UXY5sKXp0r/view?usp=sharing'),
(12, 'Perempuan Berbicara Kretek', 'Abmi Handayani, dkk', '2012', 'Indonesia Berdikari', 'Novel', 334, 'gambar_buku/a3ccaab6-0a24-4c92-bfc0-0c7e4eaf82ac.jpg', 'https://drive.google.com/file/d/1Fszlh7k9sXO_4RJMOPVbFUU1nCXRdThs/view?usp=sharing'),
(13, 'Perempuan Yang Dihapus Namanya', 'Avianti Armand', '2017', 'PT Gramedia Pustaka Utama', 'Puisi', 90, 'gambar_buku/ed7d3a96-54af-4cc4-8bb3-af2aa8877b9c.jpg', 'https://drive.google.com/file/d/1D4jjMpjGzXFEbza4Q1m46rDiyuS5MVxz/view?usp=sharing'),
(14, 'Filsafat Islam Masa Awal', 'Drs.H. Ibrahim, M.Pd', '2016', 'PKBM Rumah Buku Carabaca Makassar', 'Filsafat', 159, 'gambar_buku/89e4850b-99b0-42bb-bc54-9014ad7cb2e6.jpg', 'https://drive.google.com/file/d/1CrF90oxr8Hq4pAX54dk8wCyhWd4LNC4W/view?usp=sharing'),
(15, 'Teologi dan Falsafah Hijab', 'Murtadha Muthahhari', '2011', 'Rausyanfikr Institute', 'Filsafat', 192, 'gambar_buku/9820c58c-e249-4c99-a762-502559f74b46.jpg', 'https://drive.google.com/file/d/1DE4tr2EHw8WyoW_BEVuMcZlQLUFc1Yxg/view?usp=sharing'),
(16, 'Agama Jawa', 'Abangan, Santri, Priyayi', '2014', 'Komunitas Bambu', 'Filsafat', 640, 'gambar_buku/14e9999b-4cff-4b9a-a570-58f4e85c7942.jpg', 'https://drive.google.com/file/d/1DZkte6KAPKwfbx7nkWlgEVrnSxsPQdA7/view?usp=sharing'),
(17, 'Pulang', 'Leila S. Chudori', '2012', 'PT Gramedia Jakarta', 'Novel', 476, 'gambar_buku/fea0ab63-c12a-4ed1-9223-0022aedde99b.jpg', 'https://drive.google.com/file/d/1DPuIjYBqeysldiYjw835d6y9qNY4A6r8/view?usp=sharing'),
(18, 'Teknologi Informasi', 'Abdul Qadil & Terra Ch. Triwahyuni', '2013', 'CV. Andi Offset', 'Komputer', 26, 'gambar_buku/6c7016ba-fa2a-4c39-b553-72b6079f5810.jpg', 'https://drive.google.com/file/d/1BIh0-onGwxuhINjmmfWKa_BJ-bACIUoG/view?usp=sharing'),
(19, 'Petani dan Penguasa', 'Noer Fauzi', '1999', 'INSIST, KPA, bekerja sama dengan Pustaka Pelajar', 'Novel', 330, 'gambar_buku/88fa64d4-7641-4f42-a103-9f7286fe42f8.jpg', 'https://drive.google.com/file/d/1HGTHHlARiDkf7au0K17_rjBimSD2fex7/view?usp=sharing'),
(20, 'Perempuan Yang Mengantarkan surga', 'Haris Priyatna & Lisdy Rahayu', '2014', 'PT Mizan Pustaka', 'Novel', 278, 'gambar_buku/e6462ec0-ad5b-48c0-82f8-1998daee4e57.jpg', 'https://drive.google.com/file/d/1HMRV3bFz019hR7fGsF7A8lE3NJt4V2kc/view?usp=sharing'),
(21, 'Desain dan Pemrograman Multimedia Pembelajaran Interaktif', 'Wandah Wibawanto, S.Sn., M.Ds', '2017', 'Penerbit cerdas Ulet Kreatif', 'Komputer', 195, 'gambar_buku/37acf42b-2b3b-4fdb-a8cf-3a6c608c4d98.jpg', 'https://drive.google.com/file/d/1H8U7pVR7AKaFcjf_mlbWf54_4_MfVOp9/view?usp=sharing'),
(23, 'Covid 19 & disrupsi', 'Syafarudi, Erna Rochana, Erizal barnawi, Bagus Wardianto', '-', 'Pusaka Media', 'Umum', 0, 'gambar_buku/92fd4697-bbf3-48e0-93dd-181aa1986f88.jpg', 'https://drive.google.com/file/d/1H-o5FHjnC_CsihxKg76jGyPhKksWmo-K/view?usp=sharing'),
(24, 'Buku Pertama Belajar Pemrograman JAVA', 'Abdul Kadir', '2013', 'Mediakom', 'Komputer', 444, 'gambar_buku/IMG_20210201_210025.jpg', 'https://drive.google.com/file/d/1BMZgBjcoZlx9zdKvBrqUUxmeSihX4AxB/view?usp=sharing'),
(25, 'Sebuah Seni Untuk Bersikap Bodo Amat', 'Mark Manson', '2016', 'Gramedia Pustaka Utama', 'Kisah', 100, 'gambar_buku/Sebuah-seni-untuk-bersikap-bodoh-amat.jpg', 'https://www.google.com/aclk?sa=l&ai=DChcSEwjsprf4ytb4AhWxmGYCHY2vARgYABABGgJzbQ&sig=AOD64_0t9Sq9ytxGqOOtfYlgowi3Yhwd3Q&ctype=5&q=&ved=0ahUKEwj22rL4ytb4AhU_RmwGHeE8A5sQww8I8gY&adurl=');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_peminjaman` int(11) NOT NULL,
  `id_anggota` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id_peminjaman`, `id_anggota`, `id_buku`, `tgl_pinjam`, `tgl_kembali`, `status`) VALUES
(1, 22, 8, '2022-07-01', '2022-07-01', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `data_anggota`
--
ALTER TABLE `data_anggota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_buku`
--
ALTER TABLE `data_buku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_peminjaman`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `user_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `data_anggota`
--
ALTER TABLE `data_anggota`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `data_buku`
--
ALTER TABLE `data_buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id_peminjaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
