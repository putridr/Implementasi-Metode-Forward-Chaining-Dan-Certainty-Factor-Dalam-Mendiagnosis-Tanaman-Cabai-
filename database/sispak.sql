-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 22 Agu 2022 pada 13.26
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sispak`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `jabatan` int(2) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `username`, `password`, `jabatan`, `status`) VALUES
(1, 'Putri Dwi Rahayu', 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, 1),
(2, 'Putri', 'putri', '202cb962ac59075b964b07152d234b70', 1, 2),
(3, 'Putri Dwi Rahayu', 'ptr', '202cb962ac59075b964b07152d234b70', 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(10) NOT NULL,
  `id_admin` int(10) NOT NULL,
  `tanggal_dibuat` varchar(100) NOT NULL,
  `tanggal_diubah` varchar(100) DEFAULT NULL,
  `judul` varchar(300) NOT NULL,
  `ringkasan` text DEFAULT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `id_admin`, `tanggal_dibuat`, `tanggal_diubah`, `judul`, `ringkasan`, `isi`, `gambar`, `status`) VALUES
(0, 1, '17 August 2022', '17 August 2022', 'Bagaimana Pencegahan Penyarangan Hama dan Penyakit Tanaman Cabai', 'Usaha petani tanaman cabai (Capsicum annuum L.) memerlukan modal besar dan keterampilan yang cukup. Tidak jarang petani cabe merugi karena abai memperhitungkan faktor cuaca, fluktuasi harga atau serangan hama dan penyakit. Oleh karena itu, segala resiko dalam budidaya tanaman cabe harus dipertimbangkan secara matang.Serangan hama dan penyakit merupakan salah satu faktor resiko yang cukup besar dalam budidaya cabe. Agar sukses menjalankan usaha tani cabe, ada baiknya kita mengenal jenis-jenis hama dan penyakit yang biasa menyerang tanaman cabe.', 'Detail serta penanganan dari hama dan penyakit yang menyerang tanaman cabai.\r\nJenis Hama Tanaman Cabai\r\na.	Hama Thrips\r\n-	Detail : Hama ini merupakan vector penyakit virus mosaic dan virus keriting. Hama ini akan sangat cepat menyerang pada saat musim kemarau. Hama thrips bersifat polifag yang dimana serangga akan menyerang pada tanaman muda atau pada fase pembibitan.\r\n-	Penanganan Fisik dan Obat: \r\n1.	Pecegahan dilakukan dengan menggunakan tanaman perangkap seperti kenikir kuning\r\n2.	Menggunakan mulsa perak\r\n3.	Sanitasi lingkungan dan pemotongan bagian tanaman yang terserang hama thrips\r\n4.	Memanfaatkan musuh alami seperti tungau\r\nb.	Lalat Buah\r\n-	Detail : Lalat buah akan menyerang secara cepat ketika musim hujan yang akan menyebabkan buah yang terserang menjadi busuk dan jatuh ke tanah,\r\n-	Penanganan:\r\n1.	Pemusnahan buah terserang \r\n2.	Pembungkusan buah \r\n3.	Rotasi tanaman \r\n4.	Pemanfaatan musuh alami seperti parasitoid larva\r\nJenis Penyakit Tanaman Cabai\r\na.	Penyakit Layu Fusarium\r\n-	Detail : Penyakit yang menyerang daun mulai dari bagian bawah menyebabkan berubah warna menjadi kuning dan melenjar ke atas ke ranting muda.\r\n-	Penanganan :\r\n1.	Sanitasi dengan mencabut dan memusnahkan tanaman terserang\r\n2.	Dianjurkan memanfaatkan agen antagonis Trichoderma spp. dan Gliocladium spp. yang di aplikasikan bersamaan dengan pemupukan dasar. \r\n3.	Penggunaan fungisida sesuai anjuran sebagai alternatif terakhir\r\nb.	Penyakit Layu Bakteri Ralstonia\r\n-	Detail: penyakit yang disebabkan oleh Pseudomonas solanacearum, bakteri yang ditularkan melalui tanah, benih, bibit, sisa-sisa tanaman, pengairan, nematode atau alat-alat pertanian.\r\n-	Penanganan :\r\n1.	Kultur teknis dengan pergiliran tanaman, penggunaan benih sehat dan sanitasi dengan mencabut dan memusnahkan tanaman sakit\r\n2.	Dianjurkan memanfaatkan agen antagonis Trichoderma spp. dan Gliocladium spp. yang diaplikasikan bersamaan dengan pemupukan dasar\r\n3.	Penggunaan bakterisida sesuai anjuran sebagai alternatif terakhir.\r\nc.	Penyakit Buah Antraknosa \r\n-	Detail : Penyakit ini menyerang bagian buah cabai, baik buah yang masih muda maupun yang sudah masak. Cendawan ini termasuk salah satu patogen yang terbawa oleh benih. Penyebaran penyakit ini terjadi melalui percikan air, baik air hujan maupun alat semprot. Suhu optimum bagi perkembangan cendawan ini berkisar antara 20–24°C.\r\n-	Penanganan :\r\n1.	Pembersihan lahan dan tanaman yang terserang agar tidak menyebar\r\n2.	Seleksi benih atau menggunakan benih cabai yang tahan terhadap penyakit ini perlu dilakukan mengingat penyakit ini termasuk patogen tular benih\r\n3.	Kultur teknis dengan pergiliran tanaman, penggunaan benih sehat dan sanitasi dengan memotong dan memusnahkan buah yang sakit\r\n4.	Penggunaan fungisida sesuai anjuran sebagai alternatif terakhir. Hindari pengguanaan alat semprot, atau lakukan sanitasi terlebih dahulu sebelum menggunakan alat semprot\r\nd.	Penyakit Virus Kuning\r\n-	Detail : Penyakit virus kuning ini sangat merugikan pada tanaman buah karena mampu mempengaruhi produksi dari buah.\r\n-	Penanganan :\r\n1.	Memanfaatkan serangga seperti kutu kebul dan memanfaatkan musuh alami predator\r\n2.	Penanaman varietas tahan seperti hotchilli\r\n3.	Melakukan sanitasi lingkungan terutama tanaman inang seperti ciplukan, terong, gulma bunga kancing\r\n4.	Pemupukan tambahan untuk meningkatkan daya tahan tanaman sehingga tanaman tetap berproduksi walaupun terserang virus kuning\r\n5.	Penanaman tanaman pembatas seperti jagung dan tagetes.', 'layu.jpg', 1),
(0, 1, '17 August 2022', '17 August 2022', 'Bagaimana Pencegahan Penyarangan Hama dan Penyakit Tanaman Cabai', 'Usaha petani tanaman cabai (Capsicum annuum L.) memerlukan modal besar dan keterampilan yang cukup. Tidak jarang petani cabe merugi karena abai memperhitungkan faktor cuaca, fluktuasi harga atau serangan hama dan penyakit. Oleh karena itu, segala resiko dalam budidaya tanaman cabe harus dipertimbangkan secara matang.Serangan hama dan penyakit merupakan salah satu faktor resiko yang cukup besar dalam budidaya cabe. Agar sukses menjalankan usaha tani cabe, ada baiknya kita mengenal jenis-jenis hama dan penyakit yang biasa menyerang tanaman cabe.', 'Detail serta penanganan dari hama dan penyakit yang menyerang tanaman cabai.\r\nJenis Hama Tanaman Cabai\r\na.	Hama Thrips\r\n-	Detail : Hama ini merupakan vector penyakit virus mosaic dan virus keriting. Hama ini akan sangat cepat menyerang pada saat musim kemarau. Hama thrips bersifat polifag yang dimana serangga akan menyerang pada tanaman muda atau pada fase pembibitan.\r\n-	Penanganan Fisik dan Obat: \r\n1.	Pecegahan dilakukan dengan menggunakan tanaman perangkap seperti kenikir kuning\r\n2.	Menggunakan mulsa perak\r\n3.	Sanitasi lingkungan dan pemotongan bagian tanaman yang terserang hama thrips\r\n4.	Memanfaatkan musuh alami seperti tungau\r\nb.	Lalat Buah\r\n-	Detail : Lalat buah akan menyerang secara cepat ketika musim hujan yang akan menyebabkan buah yang terserang menjadi busuk dan jatuh ke tanah,\r\n-	Penanganan:\r\n1.	Pemusnahan buah terserang \r\n2.	Pembungkusan buah \r\n3.	Rotasi tanaman \r\n4.	Pemanfaatan musuh alami seperti parasitoid larva\r\nJenis Penyakit Tanaman Cabai\r\na.	Penyakit Layu Fusarium\r\n-	Detail : Penyakit yang menyerang daun mulai dari bagian bawah menyebabkan berubah warna menjadi kuning dan melenjar ke atas ke ranting muda.\r\n-	Penanganan :\r\n1.	Sanitasi dengan mencabut dan memusnahkan tanaman terserang\r\n2.	Dianjurkan memanfaatkan agen antagonis Trichoderma spp. dan Gliocladium spp. yang di aplikasikan bersamaan dengan pemupukan dasar. \r\n3.	Penggunaan fungisida sesuai anjuran sebagai alternatif terakhir\r\nb.	Penyakit Layu Bakteri Ralstonia\r\n-	Detail: penyakit yang disebabkan oleh Pseudomonas solanacearum, bakteri yang ditularkan melalui tanah, benih, bibit, sisa-sisa tanaman, pengairan, nematode atau alat-alat pertanian.\r\n-	Penanganan :\r\n1.	Kultur teknis dengan pergiliran tanaman, penggunaan benih sehat dan sanitasi dengan mencabut dan memusnahkan tanaman sakit\r\n2.	Dianjurkan memanfaatkan agen antagonis Trichoderma spp. dan Gliocladium spp. yang diaplikasikan bersamaan dengan pemupukan dasar\r\n3.	Penggunaan bakterisida sesuai anjuran sebagai alternatif terakhir.\r\nc.	Penyakit Buah Antraknosa \r\n-	Detail : Penyakit ini menyerang bagian buah cabai, baik buah yang masih muda maupun yang sudah masak. Cendawan ini termasuk salah satu patogen yang terbawa oleh benih. Penyebaran penyakit ini terjadi melalui percikan air, baik air hujan maupun alat semprot. Suhu optimum bagi perkembangan cendawan ini berkisar antara 20–24°C.\r\n-	Penanganan :\r\n1.	Pembersihan lahan dan tanaman yang terserang agar tidak menyebar\r\n2.	Seleksi benih atau menggunakan benih cabai yang tahan terhadap penyakit ini perlu dilakukan mengingat penyakit ini termasuk patogen tular benih\r\n3.	Kultur teknis dengan pergiliran tanaman, penggunaan benih sehat dan sanitasi dengan memotong dan memusnahkan buah yang sakit\r\n4.	Penggunaan fungisida sesuai anjuran sebagai alternatif terakhir. Hindari pengguanaan alat semprot, atau lakukan sanitasi terlebih dahulu sebelum menggunakan alat semprot\r\nd.	Penyakit Virus Kuning\r\n-	Detail : Penyakit virus kuning ini sangat merugikan pada tanaman buah karena mampu mempengaruhi produksi dari buah.\r\n-	Penanganan :\r\n1.	Memanfaatkan serangga seperti kutu kebul dan memanfaatkan musuh alami predator\r\n2.	Penanaman varietas tahan seperti hotchilli\r\n3.	Melakukan sanitasi lingkungan terutama tanaman inang seperti ciplukan, terong, gulma bunga kancing\r\n4.	Pemupukan tambahan untuk meningkatkan daya tahan tanaman sehingga tanaman tetap berproduksi walaupun terserang virus kuning\r\n5.	Penanaman tanaman pembatas seperti jagung dan tagetes.', 'lalat buah.png', 1),
(0, 1, '17 August 2022', '17 August 2022', 'Bagaimana Pencegahan Penyarangan Hama dan Penyakit Tanaman Cabai', 'Usaha petani tanaman cabai (Capsicum annuum L.) memerlukan modal besar dan keterampilan yang cukup. Tidak jarang petani cabe merugi karena abai memperhitungkan faktor cuaca, fluktuasi harga atau serangan hama dan penyakit. Oleh karena itu, segala resiko dalam budidaya tanaman cabe harus dipertimbangkan secara matang.Serangan hama dan penyakit merupakan salah satu faktor resiko yang cukup besar dalam budidaya cabe. Agar sukses menjalankan usaha tani cabe, ada baiknya kita mengenal jenis-jenis hama dan penyakit yang biasa menyerang tanaman cabe.', 'Detail serta penanganan dari hama dan penyakit yang menyerang tanaman cabai.\r\nJenis Hama Tanaman Cabai\r\na.	Hama Thrips\r\n-	Detail : Hama ini merupakan vector penyakit virus mosaic dan virus keriting. Hama ini akan sangat cepat menyerang pada saat musim kemarau. Hama thrips bersifat polifag yang dimana serangga akan menyerang pada tanaman muda atau pada fase pembibitan.\r\n-	Penanganan Fisik dan Obat: \r\n1.	Pecegahan dilakukan dengan menggunakan tanaman perangkap seperti kenikir kuning\r\n2.	Menggunakan mulsa perak\r\n3.	Sanitasi lingkungan dan pemotongan bagian tanaman yang terserang hama thrips\r\n4.	Memanfaatkan musuh alami seperti tungau\r\nb.	Lalat Buah\r\n-	Detail : Lalat buah akan menyerang secara cepat ketika musim hujan yang akan menyebabkan buah yang terserang menjadi busuk dan jatuh ke tanah,\r\n-	Penanganan:\r\n1.	Pemusnahan buah terserang \r\n2.	Pembungkusan buah \r\n3.	Rotasi tanaman \r\n4.	Pemanfaatan musuh alami seperti parasitoid larva\r\nJenis Penyakit Tanaman Cabai\r\na.	Penyakit Layu Fusarium\r\n-	Detail : Penyakit yang menyerang daun mulai dari bagian bawah menyebabkan berubah warna menjadi kuning dan melenjar ke atas ke ranting muda.\r\n-	Penanganan :\r\n1.	Sanitasi dengan mencabut dan memusnahkan tanaman terserang\r\n2.	Dianjurkan memanfaatkan agen antagonis Trichoderma spp. dan Gliocladium spp. yang di aplikasikan bersamaan dengan pemupukan dasar. \r\n3.	Penggunaan fungisida sesuai anjuran sebagai alternatif terakhir\r\nb.	Penyakit Layu Bakteri Ralstonia\r\n-	Detail: penyakit yang disebabkan oleh Pseudomonas solanacearum, bakteri yang ditularkan melalui tanah, benih, bibit, sisa-sisa tanaman, pengairan, nematode atau alat-alat pertanian.\r\n-	Penanganan :\r\n1.	Kultur teknis dengan pergiliran tanaman, penggunaan benih sehat dan sanitasi dengan mencabut dan memusnahkan tanaman sakit\r\n2.	Dianjurkan memanfaatkan agen antagonis Trichoderma spp. dan Gliocladium spp. yang diaplikasikan bersamaan dengan pemupukan dasar\r\n3.	Penggunaan bakterisida sesuai anjuran sebagai alternatif terakhir.\r\nc.	Penyakit Buah Antraknosa \r\n-	Detail : Penyakit ini menyerang bagian buah cabai, baik buah yang masih muda maupun yang sudah masak. Cendawan ini termasuk salah satu patogen yang terbawa oleh benih. Penyebaran penyakit ini terjadi melalui percikan air, baik air hujan maupun alat semprot. Suhu optimum bagi perkembangan cendawan ini berkisar antara 20–24°C.\r\n-	Penanganan :\r\n1.	Pembersihan lahan dan tanaman yang terserang agar tidak menyebar\r\n2.	Seleksi benih atau menggunakan benih cabai yang tahan terhadap penyakit ini perlu dilakukan mengingat penyakit ini termasuk patogen tular benih\r\n3.	Kultur teknis dengan pergiliran tanaman, penggunaan benih sehat dan sanitasi dengan memotong dan memusnahkan buah yang sakit\r\n4.	Penggunaan fungisida sesuai anjuran sebagai alternatif terakhir. Hindari pengguanaan alat semprot, atau lakukan sanitasi terlebih dahulu sebelum menggunakan alat semprot\r\nd.	Penyakit Virus Kuning\r\n-	Detail : Penyakit virus kuning ini sangat merugikan pada tanaman buah karena mampu mempengaruhi produksi dari buah.\r\n-	Penanganan :\r\n1.	Memanfaatkan serangga seperti kutu kebul dan memanfaatkan musuh alami predator\r\n2.	Penanaman varietas tahan seperti hotchilli\r\n3.	Melakukan sanitasi lingkungan terutama tanaman inang seperti ciplukan, terong, gulma bunga kancing\r\n4.	Pemupukan tambahan untuk meningkatkan daya tahan tanaman sehingga tanaman tetap berproduksi walaupun terserang virus kuning\r\n5.	Penanaman tanaman pembatas seperti jagung dan tagetes.', 'layu.jpg', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `basis_pengetahuan`
--

CREATE TABLE `basis_pengetahuan` (
  `id_pengetahuan` int(10) NOT NULL,
  `id_penyakit` int(10) NOT NULL,
  `id_gejala` int(10) NOT NULL,
  `nilai_cf` float NOT NULL,
  `gambar_info` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `basis_pengetahuan`
--

INSERT INTO `basis_pengetahuan` (`id_pengetahuan`, `id_penyakit`, `id_gejala`, `nilai_cf`, `gambar_info`) VALUES
(104, 7, 1, 0.5, ''),
(105, 8, 2, 0.5, '24-hours.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gejala`
--

CREATE TABLE `gejala` (
  `id_gejala` int(10) NOT NULL,
  `gejala` varchar(255) NOT NULL,
  `gambar_gejala` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gejala`
--

INSERT INTO `gejala` (`id_gejala`, `gejala`, `gambar_gejala`) VALUES
(1, 'Daun tunas menggulung ke dalam', ''),
(2, 'Terdapat bercak keperak-perakan ', ''),
(3, 'Daun berubah warna menjadi coklat tembaga', ''),
(4, 'Daun menjadi kriting / kriput sehingga menyebabkan tanaman itu mati', ''),
(5, 'Muncul benjolan seperti tumor', ''),
(49, 'Buah cabai membusuk', ''),
(50, 'Adanya bintik hitam pada pangkal buah', ''),
(51, 'Warna buah menjadi kekuningan dan busuk', ''),
(52, 'Tanaman menjadi kerdil dan tidak berubah', ''),
(55, 'Tanaman menjadi layu jika terinfeksi', ''),
(57, 'Warna jaringan akar dan batang menjadi coklat', ''),
(58, 'Buah kecil dan akan gugur', ''),
(59, 'Munculnya bercak sedikit mengkilap dan terbenam pada buah', ''),
(60, 'Buah akan berubah menjadi coklat kehitaman dan membusuk', ''),
(61, 'Daun mengecil dan berwarna kuning terang', ''),
(63, 'apa ajaaa', '4e30ccbce370f64c7f5c4b65a2e6bae0-'),
(64, 'Tess', ''),
(65, 'aappp', ''),
(66, 'adtest', ''),
(68, 'apapun', ''),
(69, 'apapunlah', '1433065219_'),
(70, 'dafasd', '1219416049_'),
(71, 'dsaf', 'sukacode.png'),
(72, 'dsafa', 'POJOKK-UNSIKAA.png'),
(73, 'sdf', 'app.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_konsultasi`
--

CREATE TABLE `hasil_konsultasi` (
  `id_hasil` int(11) NOT NULL,
  `id_konsultasi` int(11) NOT NULL,
  `id_penyakit` varchar(11) NOT NULL,
  `nilai_akurasi` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hasil_konsultasi`
--

INSERT INTO `hasil_konsultasi` (`id_hasil`, `id_konsultasi`, `id_penyakit`, `nilai_akurasi`) VALUES
(75, 75, '', ''),
(76, 77, '7', '0'),
(77, 78, '13', '1.00000'),
(78, 79, '8', '0.99627'),
(79, 80, '7', '0'),
(80, 81, '7', '1.00000'),
(81, 82, '13', '0.32000'),
(82, 83, '7', '0'),
(83, 84, '7', '0'),
(84, 85, '7', '0.60480'),
(85, 92, '7', '0'),
(86, 93, '7', '0'),
(87, 94, '7', '0'),
(88, 95, '7', '0'),
(89, 96, '7', '0'),
(90, 97, '7', '0'),
(91, 98, '7', '0'),
(92, 99, '7', '0'),
(93, 100, '7', '0'),
(94, 101, '7', '0'),
(95, 102, '7', '0'),
(96, 103, '7', '0'),
(97, 104, '7', '0'),
(98, 105, '7', '0'),
(99, 106, '7', '0'),
(100, 107, '7', '0'),
(101, 108, '7', '0'),
(102, 109, '7', '0'),
(103, 110, '7', '0'),
(104, 111, '7', '0'),
(105, 112, '7', '0'),
(106, 113, '7', '0'),
(107, 114, '7', '0'),
(108, 115, '7', '0'),
(109, 116, '7', '0'),
(110, 117, '7', '0'),
(111, 118, '7', '0'),
(112, 119, '7', '0'),
(113, 120, '7', '0'),
(114, 121, '7', '0'),
(115, 122, '7', '0'),
(116, 123, '7', '0'),
(117, 124, '7', '0'),
(118, 125, '7', '0'),
(119, 126, '7', '0'),
(120, 127, '7', '0'),
(121, 128, '7', '0'),
(122, 129, '7', '0'),
(123, 130, '7', '0'),
(124, 131, '7', '0'),
(125, 132, '7', '0'),
(126, 133, '7', '0'),
(127, 134, '7', '0'),
(128, 135, '7', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_penyakit`
--

CREATE TABLE `jenis_penyakit` (
  `id_penyakit` int(10) NOT NULL,
  `nama_penyakit` varchar(25) NOT NULL,
  `detail` varchar(255) NOT NULL,
  `saran` varchar(255) NOT NULL,
  `gambar_penyakit` text NOT NULL,
  `gambar_saran` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jenis_penyakit`
--

INSERT INTO `jenis_penyakit` (`id_penyakit`, `nama_penyakit`, `detail`, `saran`, `gambar_penyakit`, `gambar_saran`) VALUES
(7, 'Hama Thrips', 'Hama ini merupakan vector penyakit virus mosaic dan virus keriting. Hama ini akan sangat cepat menyerang pada saat musim kemarau. Hama thrips bersifat polifag yang dimana serangga akan menyerang pada tanaman muda atau pada fase pembibitan.', 'Penanganan hama Thrips dengan cara: 1.Pecegahan dilakukan dengan menggunakan tanaman perangkap seperti kenikir kuning, 2.Menggunakan mulsa perak, 3.Sanitasi lingkungan dan pemotongan bagian tanaman yang terserang hama thrips serta memanfaatkan musuh alami', '', ''),
(8, 'Hama lalat buah', 'Lalat buah akan menyerang secara cepat ketika musim hujan yang akan menyebabkan buah yang terserang menjadi busuk dan jatuh ke tanah.\r\n', 'Penanganan:\r\n1.Pemusnahan buah terserang \r\n2.Pembungkusan buah \r\n3.Rotasi tanaman \r\n4.Pemanfaatan musuh alami seperti parasitoid larva', '', ''),
(9, 'Kutu kebul', 'Kutu kebul adalah serangga berukuran kecil dan berwarna putih. Biasanya hama ini berdiam dibalik daun secara berkelompok. Hama kutu kebul memiliki efek ganda ketikan merusak tanaman.', 'Penanganan:\r\n1.Memanfaatkan musuh alami seperti predator dan pathogen serangga\r\n2.Sanitasi lingkungan \r\n3.Penggunaan perangkap kuning dapat dipadukan dengan pengendalian secara fisik atau mekanik dan penggunaan insektisida secara selektif\r\n4.Sistem pergil', '', ''),
(10, 'Penyakit layu fusarium', 'Penyakit yang menyerang daun mulai dari bagian bawah menyebabkan berubah warna menjadi kuning dan melenjar ke atas ke ranting muda.', 'Penanganan :\r\n1.Sanitasi dengan mencabut dan memusnahkan tanaman terserang,\r\n2.Dianjurkan memanfaatkan agen antagonis Trichoderma spp. dan Gliocladium spp. yang di aplikasikan bersamaan dengan pemupukan dasar,\r\n3.Penggunaan fungisida sesuai anjuran sebaga', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kondisi`
--

CREATE TABLE `kondisi` (
  `id_kondisi` int(2) NOT NULL,
  `kondisi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kondisi`
--

INSERT INTO `kondisi` (`id_kondisi`, `kondisi`) VALUES
(1, 'Tidak'),
(2, 'Sedikit Yakin'),
(3, 'Cukup Yakin'),
(4, 'Yakin'),
(5, 'Sangat Yakin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konsultasi`
--

CREATE TABLE `konsultasi` (
  `id_konsultasi` int(11) NOT NULL,
  `tanggal` varchar(50) NOT NULL,
  `penyakit` text NOT NULL,
  `gejala` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `konsultasi`
--

INSERT INTO `konsultasi` (`id_konsultasi`, `tanggal`, `penyakit`, `gejala`) VALUES
(75, '08-16-2022 21:13:19', 'a:0:{}', 'a:28:{i:1;s:1:\"3\";i:2;s:1:\"4\";i:3;s:1:\"2\";i:4;s:1:\"5\";i:5;s:1:\"4\";i:6;s:1:\"1\";i:7;s:1:\"1\";i:8;s:1:\"1\";i:9;s:1:\"1\";i:10;s:1:\"1\";i:11;s:1:\"1\";i:12;s:1:\"1\";i:13;s:1:\"1\";i:14;s:1:\"1\";i:15;s:1:\"1\";i:16;s:1:\"1\";i:17;s:1:\"1\";i:18;s:1:\"1\";i:19;s:1:\"1\";i:20;s:1:\"1\";i:21;s:1:\"1\";i:22;s:1:\"1\";i:23;s:1:\"1\";i:24;s:1:\"1\";i:25;s:1:\"1\";i:26;s:1:\"1\";i:27;s:1:\"1\";i:28;s:1:\"1\";}'),
(76, '08-16-2022 21:15:31', 'a:7:{i:7;s:1:\"0\";i:8;s:1:\"0\";i:9;s:1:\"0\";i:10;s:1:\"0\";i:11;s:1:\"0\";i:12;s:1:\"0\";i:13;s:1:\"0\";}', 'a:28:{i:1;s:1:\"3\";i:2;s:1:\"4\";i:3;s:1:\"2\";i:4;s:1:\"5\";i:5;s:1:\"4\";i:6;s:1:\"1\";i:7;s:1:\"1\";i:8;s:1:\"1\";i:9;s:1:\"1\";i:10;s:1:\"1\";i:11;s:1:\"1\";i:12;s:1:\"1\";i:13;s:1:\"1\";i:14;s:1:\"1\";i:15;s:1:\"1\";i:16;s:1:\"1\";i:17;s:1:\"1\";i:18;s:1:\"1\";i:19;s:1:\"1\";i:20;s:1:\"1\";i:21;s:1:\"1\";i:22;s:1:\"1\";i:23;s:1:\"1\";i:24;s:1:\"1\";i:25;s:1:\"1\";i:26;s:1:\"1\";i:27;s:1:\"1\";i:28;s:1:\"1\";}'),
(77, '08-16-2022 21:16:42', 'a:7:{i:7;s:1:\"0\";i:8;s:1:\"0\";i:9;s:1:\"0\";i:10;s:1:\"0\";i:11;s:1:\"0\";i:12;s:1:\"0\";i:13;s:1:\"0\";}', 'a:28:{i:1;s:1:\"3\";i:2;s:1:\"2\";i:3;s:1:\"4\";i:4;s:1:\"5\";i:5;s:1:\"3\";i:6;s:1:\"1\";i:7;s:1:\"1\";i:8;s:1:\"1\";i:9;s:1:\"1\";i:10;s:1:\"1\";i:11;s:1:\"1\";i:12;s:1:\"1\";i:13;s:1:\"1\";i:14;s:1:\"1\";i:15;s:1:\"1\";i:16;s:1:\"1\";i:17;s:1:\"1\";i:18;s:1:\"1\";i:19;s:1:\"1\";i:20;s:1:\"1\";i:21;s:1:\"1\";i:22;s:1:\"1\";i:23;s:1:\"1\";i:24;s:1:\"1\";i:25;s:1:\"1\";i:26;s:1:\"1\";i:27;s:1:\"1\";i:28;s:1:\"1\";}'),
(78, '08-17-2022 00:22:20', 'a:7:{i:13;s:7:\"1.00000\";i:8;s:7:\"0.99999\";i:9;s:7:\"0.99974\";i:7;s:7:\"0.84591\";i:10;s:1:\"0\";i:11;s:1:\"0\";i:12;s:1:\"0\";}', 'a:28:{i:1;s:1:\"2\";i:2;s:1:\"1\";i:3;s:1:\"3\";i:4;s:1:\"4\";i:5;s:1:\"3\";i:6;s:1:\"4\";i:7;s:1:\"4\";i:8;s:1:\"1\";i:9;s:1:\"3\";i:10;s:1:\"1\";i:11;s:1:\"1\";i:12;s:1:\"1\";i:13;s:1:\"1\";i:14;s:1:\"1\";i:15;s:1:\"1\";i:16;s:1:\"1\";i:17;s:1:\"1\";i:18;s:1:\"1\";i:19;s:1:\"1\";i:20;s:1:\"1\";i:21;s:1:\"1\";i:22;s:1:\"1\";i:23;s:1:\"1\";i:24;s:1:\"1\";i:25;s:1:\"4\";i:26;s:1:\"1\";i:27;s:1:\"1\";i:28;s:1:\"4\";}'),
(79, '08-17-2022 07:26:59', 'a:7:{i:8;s:7:\"0.99627\";i:13;s:7:\"0.80000\";i:7;s:7:\"0.69760\";i:9;s:7:\"0.68800\";i:10;s:7:\"0.40000\";i:11;s:1:\"0\";i:12;s:1:\"0\";}', 'a:28:{i:1;s:1:\"1\";i:2;s:1:\"1\";i:3;s:1:\"1\";i:4;s:1:\"4\";i:5;s:1:\"4\";i:6;s:1:\"2\";i:7;s:1:\"3\";i:8;s:1:\"5\";i:9;s:1:\"1\";i:10;s:1:\"3\";i:11;s:1:\"2\";i:12;s:1:\"1\";i:13;s:1:\"2\";i:14;s:1:\"1\";i:15;s:1:\"1\";i:16;s:1:\"1\";i:17;s:1:\"1\";i:18;s:1:\"1\";i:19;s:1:\"1\";i:20;s:1:\"1\";i:21;s:1:\"1\";i:22;s:1:\"1\";i:23;s:1:\"1\";i:24;s:1:\"1\";i:25;s:1:\"1\";i:26;s:1:\"1\";i:27;s:1:\"1\";i:28;s:1:\"5\";}'),
(80, '08-17-2022 07:52:32', 'a:7:{i:7;s:1:\"0\";i:8;s:1:\"0\";i:9;s:1:\"0\";i:10;s:1:\"0\";i:11;s:1:\"0\";i:12;s:1:\"0\";i:13;s:1:\"0\";}', 'a:0:{}'),
(81, '08-17-2022 07:53:23', 'a:7:{i:7;s:7:\"1.00000\";i:8;s:1:\"0\";i:9;s:1:\"0\";i:10;s:1:\"0\";i:11;s:1:\"0\";i:12;s:1:\"0\";i:13;s:1:\"0\";}', 'a:28:{i:1;s:1:\"4\";i:2;s:1:\"5\";i:3;s:1:\"2\";i:4;s:1:\"2\";i:5;s:1:\"4\";i:6;s:1:\"1\";i:7;s:1:\"1\";i:8;s:1:\"1\";i:9;s:1:\"1\";i:10;s:1:\"1\";i:11;s:1:\"1\";i:12;s:1:\"1\";i:13;s:1:\"1\";i:14;s:1:\"1\";i:15;s:1:\"1\";i:16;s:1:\"1\";i:17;s:1:\"1\";i:18;s:1:\"1\";i:19;s:1:\"1\";i:20;s:1:\"1\";i:21;s:1:\"1\";i:22;s:1:\"1\";i:23;s:1:\"1\";i:24;s:1:\"1\";i:25;s:1:\"1\";i:26;s:1:\"1\";i:27;s:1:\"1\";i:28;s:1:\"1\";}'),
(82, '08-19-2022 14:42:25', 'a:7:{i:13;s:7:\"0.32000\";i:7;s:1:\"0\";i:8;s:1:\"0\";i:9;s:1:\"0\";i:10;s:1:\"0\";i:11;s:1:\"0\";i:12;s:1:\"0\";}', 'a:28:{i:1;s:1:\"1\";i:2;s:1:\"1\";i:3;s:1:\"1\";i:4;s:1:\"1\";i:5;s:1:\"1\";i:6;s:1:\"1\";i:7;s:1:\"1\";i:8;s:1:\"1\";i:9;s:1:\"1\";i:10;s:1:\"1\";i:11;s:1:\"1\";i:12;s:1:\"1\";i:13;s:1:\"1\";i:14;s:1:\"1\";i:15;s:1:\"1\";i:16;s:1:\"1\";i:17;s:1:\"1\";i:18;s:1:\"1\";i:19;s:1:\"1\";i:20;s:1:\"1\";i:21;s:1:\"1\";i:22;s:1:\"1\";i:23;s:1:\"1\";i:24;s:1:\"1\";i:25;s:1:\"1\";i:26;s:1:\"1\";i:27;s:1:\"1\";i:28;s:1:\"2\";}'),
(83, '08-20-2022 22:42:40', 'a:7:{i:7;s:1:\"0\";i:8;s:1:\"0\";i:9;s:1:\"0\";i:10;s:1:\"0\";i:11;s:1:\"0\";i:12;s:1:\"0\";i:13;s:1:\"0\";}', 'a:17:{i:1;s:1:\"1\";i:2;s:1:\"1\";i:3;s:1:\"1\";i:4;s:1:\"1\";i:5;s:1:\"1\";i:49;s:1:\"1\";i:50;s:1:\"1\";i:51;s:1:\"1\";i:52;s:1:\"1\";i:53;s:1:\"1\";i:54;s:1:\"1\";i:55;s:1:\"1\";i:57;s:1:\"1\";i:58;s:1:\"1\";i:59;s:1:\"1\";i:60;s:1:\"1\";i:61;s:1:\"1\";}'),
(84, '08-20-2022 22:49:10', 'a:7:{i:7;s:1:\"0\";i:8;s:1:\"0\";i:9;s:1:\"0\";i:10;s:1:\"0\";i:11;s:1:\"0\";i:12;s:1:\"0\";i:13;s:1:\"0\";}', 'a:17:{i:1;s:1:\"1\";i:2;s:1:\"1\";i:3;s:1:\"1\";i:4;s:1:\"1\";i:5;s:1:\"1\";i:49;s:1:\"1\";i:50;s:1:\"1\";i:51;s:1:\"1\";i:52;s:1:\"1\";i:53;s:1:\"1\";i:54;s:1:\"1\";i:55;s:1:\"1\";i:57;s:1:\"1\";i:58;s:1:\"1\";i:59;s:1:\"1\";i:60;s:1:\"1\";i:61;s:1:\"1\";}'),
(85, '08-20-2022 22:52:01', 'a:7:{i:7;s:7:\"0.60480\";i:8;s:1:\"0\";i:9;s:1:\"0\";i:10;s:1:\"0\";i:11;s:1:\"0\";i:12;s:1:\"0\";i:13;s:1:\"0\";}', 'a:17:{i:1;s:1:\"2\";i:2;s:1:\"1\";i:3;s:1:\"1\";i:4;s:1:\"3\";i:5;s:1:\"1\";i:49;s:1:\"1\";i:50;s:1:\"1\";i:51;s:1:\"1\";i:52;s:1:\"1\";i:53;s:1:\"1\";i:54;s:1:\"1\";i:55;s:1:\"1\";i:57;s:1:\"1\";i:58;s:1:\"1\";i:59;s:1:\"1\";i:60;s:1:\"1\";i:61;s:1:\"1\";}'),
(86, '08-20-2022 23:14:34', 'a:7:{i:7;s:1:\"0\";i:8;s:1:\"0\";i:9;s:1:\"0\";i:10;s:1:\"0\";i:11;s:1:\"0\";i:12;s:1:\"0\";i:13;s:1:\"0\";}', 'a:17:{i:1;s:1:\"1\";i:2;s:1:\"1\";i:3;s:1:\"1\";i:4;s:1:\"1\";i:5;s:1:\"1\";i:49;s:1:\"1\";i:50;s:1:\"1\";i:51;s:1:\"1\";i:52;s:1:\"1\";i:53;s:1:\"1\";i:54;s:1:\"1\";i:55;s:1:\"1\";i:57;s:1:\"1\";i:58;s:1:\"1\";i:59;s:1:\"1\";i:60;s:1:\"1\";i:61;s:1:\"1\";}'),
(87, '08-20-2022 23:14:43', 'a:7:{i:7;s:1:\"0\";i:8;s:1:\"0\";i:9;s:1:\"0\";i:10;s:1:\"0\";i:11;s:1:\"0\";i:12;s:1:\"0\";i:13;s:1:\"0\";}', 'a:17:{i:1;s:1:\"1\";i:2;s:1:\"1\";i:3;s:1:\"1\";i:4;s:1:\"1\";i:5;s:1:\"1\";i:49;s:1:\"1\";i:50;s:1:\"1\";i:51;s:1:\"1\";i:52;s:1:\"1\";i:53;s:1:\"1\";i:54;s:1:\"1\";i:55;s:1:\"1\";i:57;s:1:\"1\";i:58;s:1:\"1\";i:59;s:1:\"1\";i:60;s:1:\"1\";i:61;s:1:\"1\";}'),
(88, '08-20-2022 23:21:08', 'a:7:{i:7;s:1:\"0\";i:8;s:1:\"0\";i:9;s:1:\"0\";i:10;s:1:\"0\";i:11;s:1:\"0\";i:12;s:1:\"0\";i:13;s:1:\"0\";}', 'a:17:{i:1;s:1:\"1\";i:2;s:1:\"1\";i:3;s:1:\"1\";i:4;s:1:\"1\";i:5;s:1:\"1\";i:49;s:1:\"1\";i:50;s:1:\"1\";i:51;s:1:\"1\";i:52;s:1:\"1\";i:53;s:1:\"1\";i:54;s:1:\"1\";i:55;s:1:\"1\";i:57;s:1:\"1\";i:58;s:1:\"1\";i:59;s:1:\"1\";i:60;s:1:\"1\";i:61;s:1:\"1\";}'),
(89, '08-20-2022 23:21:53', 'a:7:{i:7;s:1:\"0\";i:8;s:1:\"0\";i:9;s:1:\"0\";i:10;s:1:\"0\";i:11;s:1:\"0\";i:12;s:1:\"0\";i:13;s:1:\"0\";}', 'a:17:{i:1;s:1:\"1\";i:2;s:1:\"1\";i:3;s:1:\"1\";i:4;s:1:\"1\";i:5;s:1:\"1\";i:49;s:1:\"1\";i:50;s:1:\"1\";i:51;s:1:\"1\";i:52;s:1:\"1\";i:53;s:1:\"1\";i:54;s:1:\"1\";i:55;s:1:\"1\";i:57;s:1:\"1\";i:58;s:1:\"1\";i:59;s:1:\"1\";i:60;s:1:\"1\";i:61;s:1:\"1\";}'),
(90, '08-20-2022 23:23:35', 'a:7:{i:12;s:7:\"0.32000\";i:7;s:1:\"0\";i:8;s:1:\"0\";i:9;s:1:\"0\";i:10;s:1:\"0\";i:11;s:1:\"0\";i:13;s:1:\"0\";}', 'a:17:{i:1;s:1:\"1\";i:2;s:1:\"1\";i:3;s:1:\"1\";i:4;s:1:\"1\";i:5;s:1:\"1\";i:49;s:1:\"1\";i:50;s:1:\"1\";i:51;s:1:\"1\";i:52;s:1:\"1\";i:53;s:1:\"1\";i:54;s:1:\"1\";i:55;s:1:\"1\";i:57;s:1:\"1\";i:58;s:1:\"1\";i:59;s:1:\"1\";i:60;s:1:\"2\";i:61;s:1:\"1\";}'),
(91, '08-21-2022 10:39:51', 'a:7:{i:7;s:1:\"0\";i:8;s:1:\"0\";i:9;s:1:\"0\";i:10;s:1:\"0\";i:11;s:1:\"0\";i:12;s:1:\"0\";i:13;s:1:\"0\";}', 'a:17:{i:1;s:1:\"1\";i:2;s:1:\"1\";i:3;s:1:\"1\";i:4;s:1:\"1\";i:5;s:1:\"1\";i:49;s:1:\"1\";i:50;s:1:\"1\";i:51;s:1:\"1\";i:52;s:1:\"1\";i:53;s:1:\"1\";i:54;s:1:\"1\";i:55;s:1:\"1\";i:57;s:1:\"1\";i:58;s:1:\"1\";i:59;s:1:\"1\";i:60;s:1:\"1\";i:61;s:1:\"1\";}'),
(92, '08-21-2022 10:43:45', 'a:7:{i:7;s:1:\"0\";i:8;s:1:\"0\";i:9;s:1:\"0\";i:10;s:1:\"0\";i:11;s:1:\"0\";i:12;s:1:\"0\";i:13;s:1:\"0\";}', 'a:17:{i:1;s:1:\"1\";i:2;s:1:\"1\";i:3;s:1:\"1\";i:4;s:1:\"1\";i:5;s:1:\"1\";i:49;s:1:\"1\";i:50;s:1:\"1\";i:51;s:1:\"1\";i:52;s:1:\"1\";i:53;s:1:\"1\";i:54;s:1:\"1\";i:55;s:1:\"1\";i:57;s:1:\"1\";i:58;s:1:\"1\";i:59;s:1:\"1\";i:60;s:1:\"1\";i:61;s:1:\"1\";}'),
(93, '08-21-2022 10:45:37', 'a:7:{i:7;s:1:\"0\";i:8;s:1:\"0\";i:9;s:1:\"0\";i:10;s:1:\"0\";i:11;s:1:\"0\";i:12;s:1:\"0\";i:13;s:1:\"0\";}', 'a:17:{i:1;s:1:\"1\";i:2;s:1:\"1\";i:3;s:1:\"1\";i:4;s:1:\"1\";i:5;s:1:\"1\";i:49;s:1:\"1\";i:50;s:1:\"1\";i:51;s:1:\"1\";i:52;s:1:\"1\";i:53;s:1:\"1\";i:54;s:1:\"1\";i:55;s:1:\"1\";i:57;s:1:\"1\";i:58;s:1:\"1\";i:59;s:1:\"1\";i:60;s:1:\"1\";i:61;s:1:\"1\";}'),
(94, '08-21-2022 10:51:35', 'a:7:{i:7;s:1:\"0\";i:8;s:1:\"0\";i:9;s:1:\"0\";i:10;s:1:\"0\";i:11;s:1:\"0\";i:12;s:1:\"0\";i:13;s:1:\"0\";}', 'a:17:{i:1;s:1:\"1\";i:2;s:1:\"1\";i:3;s:1:\"1\";i:4;s:1:\"1\";i:5;s:1:\"1\";i:49;s:1:\"1\";i:50;s:1:\"1\";i:51;s:1:\"1\";i:52;s:1:\"1\";i:53;s:1:\"1\";i:54;s:1:\"1\";i:55;s:1:\"1\";i:57;s:1:\"1\";i:58;s:1:\"1\";i:59;s:1:\"1\";i:60;s:1:\"1\";i:61;s:1:\"1\";}'),
(95, '08-21-2022 16:23:16', 'a:7:{i:7;s:1:\"0\";i:8;s:1:\"0\";i:9;s:1:\"0\";i:10;s:1:\"0\";i:11;s:1:\"0\";i:12;s:1:\"0\";i:13;s:1:\"0\";}', 'a:24:{i:1;s:1:\"1\";i:2;s:1:\"1\";i:3;s:1:\"1\";i:4;s:1:\"1\";i:5;s:1:\"1\";i:49;s:1:\"1\";i:50;s:1:\"1\";i:51;s:1:\"1\";i:52;s:1:\"1\";i:55;s:1:\"1\";i:57;s:1:\"1\";i:58;s:1:\"1\";i:59;s:1:\"1\";i:60;s:1:\"1\";i:61;s:1:\"1\";i:63;s:1:\"1\";i:64;s:1:\"1\";i:65;s:1:\"1\";i:66;s:1:\"1\";i:68;s:1:\"1\";i:69;s:1:\"1\";i:70;s:1:\"1\";i:71;s:1:\"1\";i:72;s:1:\"1\";}'),
(96, '08-21-2022 16:33:47', 'a:8:{i:7;s:1:\"0\";i:8;s:1:\"0\";i:9;s:1:\"0\";i:10;s:1:\"0\";i:11;s:1:\"0\";i:12;s:1:\"0\";i:13;s:1:\"0\";i:14;s:1:\"0\";}', 'a:24:{i:1;s:1:\"1\";i:2;s:1:\"1\";i:3;s:1:\"1\";i:4;s:1:\"1\";i:5;s:1:\"1\";i:49;s:1:\"1\";i:50;s:1:\"1\";i:51;s:1:\"1\";i:52;s:1:\"1\";i:55;s:1:\"1\";i:57;s:1:\"1\";i:58;s:1:\"1\";i:59;s:1:\"1\";i:60;s:1:\"1\";i:61;s:1:\"1\";i:63;s:1:\"1\";i:64;s:1:\"1\";i:65;s:1:\"1\";i:66;s:1:\"1\";i:68;s:1:\"1\";i:69;s:1:\"1\";i:70;s:1:\"1\";i:71;s:1:\"1\";i:72;s:1:\"1\";}'),
(97, '08-21-2022 16:38:19', 'a:8:{i:7;s:1:\"0\";i:8;s:1:\"0\";i:9;s:1:\"0\";i:10;s:1:\"0\";i:11;s:1:\"0\";i:12;s:1:\"0\";i:13;s:1:\"0\";i:14;s:1:\"0\";}', 'a:24:{i:1;s:1:\"1\";i:2;s:1:\"1\";i:3;s:1:\"1\";i:4;s:1:\"1\";i:5;s:1:\"1\";i:49;s:1:\"1\";i:50;s:1:\"1\";i:51;s:1:\"1\";i:52;s:1:\"1\";i:55;s:1:\"1\";i:57;s:1:\"1\";i:58;s:1:\"1\";i:59;s:1:\"1\";i:60;s:1:\"1\";i:61;s:1:\"1\";i:63;s:1:\"1\";i:64;s:1:\"1\";i:65;s:1:\"1\";i:66;s:1:\"1\";i:68;s:1:\"1\";i:69;s:1:\"1\";i:70;s:1:\"1\";i:71;s:1:\"1\";i:72;s:1:\"1\";}'),
(98, '08-21-2022 16:39:02', 'a:8:{i:7;s:1:\"0\";i:8;s:1:\"0\";i:9;s:1:\"0\";i:10;s:1:\"0\";i:11;s:1:\"0\";i:12;s:1:\"0\";i:13;s:1:\"0\";i:14;s:1:\"0\";}', 'a:24:{i:1;s:1:\"1\";i:2;s:1:\"1\";i:3;s:1:\"1\";i:4;s:1:\"1\";i:5;s:1:\"1\";i:49;s:1:\"1\";i:50;s:1:\"1\";i:51;s:1:\"1\";i:52;s:1:\"1\";i:55;s:1:\"1\";i:57;s:1:\"1\";i:58;s:1:\"1\";i:59;s:1:\"1\";i:60;s:1:\"1\";i:61;s:1:\"1\";i:63;s:1:\"1\";i:64;s:1:\"1\";i:65;s:1:\"1\";i:66;s:1:\"1\";i:68;s:1:\"1\";i:69;s:1:\"1\";i:70;s:1:\"1\";i:71;s:1:\"1\";i:72;s:1:\"1\";}'),
(99, '08-21-2022 16:39:35', 'a:8:{i:7;s:1:\"0\";i:8;s:1:\"0\";i:9;s:1:\"0\";i:10;s:1:\"0\";i:11;s:1:\"0\";i:12;s:1:\"0\";i:13;s:1:\"0\";i:14;s:1:\"0\";}', 'a:24:{i:1;s:1:\"1\";i:2;s:1:\"1\";i:3;s:1:\"1\";i:4;s:1:\"1\";i:5;s:1:\"1\";i:49;s:1:\"1\";i:50;s:1:\"1\";i:51;s:1:\"1\";i:52;s:1:\"1\";i:55;s:1:\"1\";i:57;s:1:\"1\";i:58;s:1:\"1\";i:59;s:1:\"1\";i:60;s:1:\"1\";i:61;s:1:\"1\";i:63;s:1:\"1\";i:64;s:1:\"1\";i:65;s:1:\"1\";i:66;s:1:\"1\";i:68;s:1:\"1\";i:69;s:1:\"1\";i:70;s:1:\"1\";i:71;s:1:\"1\";i:72;s:1:\"1\";}'),
(100, '08-21-2022 16:39:52', 'a:8:{i:7;s:1:\"0\";i:8;s:1:\"0\";i:9;s:1:\"0\";i:10;s:1:\"0\";i:11;s:1:\"0\";i:12;s:1:\"0\";i:13;s:1:\"0\";i:14;s:1:\"0\";}', 'a:24:{i:1;s:1:\"1\";i:2;s:1:\"1\";i:3;s:1:\"1\";i:4;s:1:\"1\";i:5;s:1:\"1\";i:49;s:1:\"1\";i:50;s:1:\"1\";i:51;s:1:\"1\";i:52;s:1:\"1\";i:55;s:1:\"1\";i:57;s:1:\"1\";i:58;s:1:\"1\";i:59;s:1:\"1\";i:60;s:1:\"1\";i:61;s:1:\"1\";i:63;s:1:\"1\";i:64;s:1:\"1\";i:65;s:1:\"1\";i:66;s:1:\"1\";i:68;s:1:\"1\";i:69;s:1:\"1\";i:70;s:1:\"1\";i:71;s:1:\"1\";i:72;s:1:\"1\";}'),
(101, '08-22-2022 00:47:43', 'a:8:{i:7;s:1:\"0\";i:8;s:1:\"0\";i:9;s:1:\"0\";i:10;s:1:\"0\";i:11;s:1:\"0\";i:12;s:1:\"0\";i:13;s:1:\"0\";i:14;s:1:\"0\";}', 'a:24:{i:1;s:1:\"1\";i:2;s:1:\"1\";i:3;s:1:\"1\";i:4;s:1:\"1\";i:5;s:1:\"1\";i:49;s:1:\"1\";i:50;s:1:\"1\";i:51;s:1:\"1\";i:52;s:1:\"1\";i:55;s:1:\"1\";i:57;s:1:\"1\";i:58;s:1:\"1\";i:59;s:1:\"1\";i:60;s:1:\"1\";i:61;s:1:\"1\";i:63;s:1:\"1\";i:64;s:1:\"1\";i:65;s:1:\"1\";i:66;s:1:\"1\";i:68;s:1:\"1\";i:69;s:1:\"1\";i:70;s:1:\"1\";i:71;s:1:\"1\";i:72;s:1:\"1\";}'),
(102, '08-22-2022 07:43:07', 'a:8:{i:7;s:1:\"0\";i:8;s:1:\"0\";i:9;s:1:\"0\";i:10;s:1:\"0\";i:11;s:1:\"0\";i:12;s:1:\"0\";i:13;s:1:\"0\";i:14;s:1:\"0\";}', 'a:24:{i:1;s:1:\"1\";i:2;s:1:\"1\";i:3;s:1:\"1\";i:4;s:1:\"1\";i:5;s:1:\"1\";i:49;s:1:\"1\";i:50;s:1:\"1\";i:51;s:1:\"1\";i:52;s:1:\"1\";i:55;s:1:\"1\";i:57;s:1:\"1\";i:58;s:1:\"1\";i:59;s:1:\"1\";i:60;s:1:\"1\";i:61;s:1:\"1\";i:63;s:1:\"1\";i:64;s:1:\"1\";i:65;s:1:\"1\";i:66;s:1:\"1\";i:68;s:1:\"1\";i:69;s:1:\"1\";i:70;s:1:\"1\";i:71;s:1:\"1\";i:72;s:1:\"1\";}'),
(103, '08-22-2022 07:43:12', 'a:8:{i:7;s:1:\"0\";i:8;s:1:\"0\";i:9;s:1:\"0\";i:10;s:1:\"0\";i:11;s:1:\"0\";i:12;s:1:\"0\";i:13;s:1:\"0\";i:14;s:1:\"0\";}', 'a:24:{i:1;s:1:\"1\";i:2;s:1:\"1\";i:3;s:1:\"1\";i:4;s:1:\"1\";i:5;s:1:\"1\";i:49;s:1:\"1\";i:50;s:1:\"1\";i:51;s:1:\"1\";i:52;s:1:\"1\";i:55;s:1:\"1\";i:57;s:1:\"1\";i:58;s:1:\"1\";i:59;s:1:\"1\";i:60;s:1:\"1\";i:61;s:1:\"1\";i:63;s:1:\"1\";i:64;s:1:\"1\";i:65;s:1:\"1\";i:66;s:1:\"1\";i:68;s:1:\"1\";i:69;s:1:\"1\";i:70;s:1:\"1\";i:71;s:1:\"1\";i:72;s:1:\"1\";}'),
(104, '08-22-2022 07:58:08', 'a:8:{i:7;s:1:\"0\";i:8;s:1:\"0\";i:9;s:1:\"0\";i:10;s:1:\"0\";i:11;s:1:\"0\";i:12;s:1:\"0\";i:13;s:1:\"0\";i:14;s:1:\"0\";}', 'a:24:{i:1;s:1:\"1\";i:2;s:1:\"1\";i:3;s:1:\"1\";i:4;s:1:\"1\";i:5;s:1:\"1\";i:49;s:1:\"1\";i:50;s:1:\"1\";i:51;s:1:\"1\";i:52;s:1:\"1\";i:55;s:1:\"1\";i:57;s:1:\"1\";i:58;s:1:\"1\";i:59;s:1:\"1\";i:60;s:1:\"1\";i:61;s:1:\"1\";i:63;s:1:\"1\";i:64;s:1:\"1\";i:65;s:1:\"1\";i:66;s:1:\"1\";i:68;s:1:\"1\";i:69;s:1:\"1\";i:70;s:1:\"1\";i:71;s:1:\"1\";i:72;s:1:\"1\";}'),
(105, '08-22-2022 07:58:26', 'a:8:{i:7;s:1:\"0\";i:8;s:1:\"0\";i:9;s:1:\"0\";i:10;s:1:\"0\";i:11;s:1:\"0\";i:12;s:1:\"0\";i:13;s:1:\"0\";i:14;s:1:\"0\";}', 'a:24:{i:1;s:1:\"1\";i:2;s:1:\"1\";i:3;s:1:\"1\";i:4;s:1:\"1\";i:5;s:1:\"1\";i:49;s:1:\"1\";i:50;s:1:\"1\";i:51;s:1:\"1\";i:52;s:1:\"1\";i:55;s:1:\"1\";i:57;s:1:\"1\";i:58;s:1:\"1\";i:59;s:1:\"1\";i:60;s:1:\"1\";i:61;s:1:\"1\";i:63;s:1:\"1\";i:64;s:1:\"1\";i:65;s:1:\"1\";i:66;s:1:\"1\";i:68;s:1:\"1\";i:69;s:1:\"1\";i:70;s:1:\"1\";i:71;s:1:\"1\";i:72;s:1:\"1\";}'),
(106, '08-22-2022 08:02:06', 'a:8:{i:7;s:1:\"0\";i:8;s:1:\"0\";i:9;s:1:\"0\";i:10;s:1:\"0\";i:11;s:1:\"0\";i:12;s:1:\"0\";i:13;s:1:\"0\";i:14;s:1:\"0\";}', 'a:24:{i:1;s:1:\"1\";i:2;s:1:\"1\";i:3;s:1:\"1\";i:4;s:1:\"1\";i:5;s:1:\"1\";i:49;s:1:\"1\";i:50;s:1:\"1\";i:51;s:1:\"1\";i:52;s:1:\"1\";i:55;s:1:\"1\";i:57;s:1:\"1\";i:58;s:1:\"1\";i:59;s:1:\"1\";i:60;s:1:\"1\";i:61;s:1:\"1\";i:63;s:1:\"1\";i:64;s:1:\"1\";i:65;s:1:\"1\";i:66;s:1:\"1\";i:68;s:1:\"1\";i:69;s:1:\"1\";i:70;s:1:\"1\";i:71;s:1:\"1\";i:72;s:1:\"1\";}'),
(107, '08-22-2022 08:02:35', 'a:8:{i:7;s:1:\"0\";i:8;s:1:\"0\";i:9;s:1:\"0\";i:10;s:1:\"0\";i:11;s:1:\"0\";i:12;s:1:\"0\";i:13;s:1:\"0\";i:14;s:1:\"0\";}', 'a:24:{i:1;s:1:\"1\";i:2;s:1:\"1\";i:3;s:1:\"1\";i:4;s:1:\"1\";i:5;s:1:\"1\";i:49;s:1:\"1\";i:50;s:1:\"1\";i:51;s:1:\"1\";i:52;s:1:\"1\";i:55;s:1:\"1\";i:57;s:1:\"1\";i:58;s:1:\"1\";i:59;s:1:\"1\";i:60;s:1:\"1\";i:61;s:1:\"1\";i:63;s:1:\"1\";i:64;s:1:\"1\";i:65;s:1:\"1\";i:66;s:1:\"1\";i:68;s:1:\"1\";i:69;s:1:\"1\";i:70;s:1:\"1\";i:71;s:1:\"1\";i:72;s:1:\"1\";}'),
(108, '08-22-2022 08:03:52', 'a:8:{i:7;s:1:\"0\";i:8;s:1:\"0\";i:9;s:1:\"0\";i:10;s:1:\"0\";i:11;s:1:\"0\";i:12;s:1:\"0\";i:13;s:1:\"0\";i:14;s:1:\"0\";}', 'a:24:{i:1;s:1:\"1\";i:2;s:1:\"1\";i:3;s:1:\"1\";i:4;s:1:\"1\";i:5;s:1:\"1\";i:49;s:1:\"1\";i:50;s:1:\"1\";i:51;s:1:\"1\";i:52;s:1:\"1\";i:55;s:1:\"1\";i:57;s:1:\"1\";i:58;s:1:\"1\";i:59;s:1:\"1\";i:60;s:1:\"1\";i:61;s:1:\"1\";i:63;s:1:\"1\";i:64;s:1:\"1\";i:65;s:1:\"1\";i:66;s:1:\"1\";i:68;s:1:\"1\";i:69;s:1:\"1\";i:70;s:1:\"1\";i:71;s:1:\"1\";i:72;s:1:\"1\";}'),
(109, '08-22-2022 08:03:59', 'a:8:{i:7;s:1:\"0\";i:8;s:1:\"0\";i:9;s:1:\"0\";i:10;s:1:\"0\";i:11;s:1:\"0\";i:12;s:1:\"0\";i:13;s:1:\"0\";i:14;s:1:\"0\";}', 'a:24:{i:1;s:1:\"1\";i:2;s:1:\"1\";i:3;s:1:\"1\";i:4;s:1:\"1\";i:5;s:1:\"1\";i:49;s:1:\"1\";i:50;s:1:\"1\";i:51;s:1:\"1\";i:52;s:1:\"1\";i:55;s:1:\"1\";i:57;s:1:\"1\";i:58;s:1:\"1\";i:59;s:1:\"1\";i:60;s:1:\"1\";i:61;s:1:\"1\";i:63;s:1:\"1\";i:64;s:1:\"1\";i:65;s:1:\"1\";i:66;s:1:\"1\";i:68;s:1:\"1\";i:69;s:1:\"1\";i:70;s:1:\"1\";i:71;s:1:\"1\";i:72;s:1:\"1\";}'),
(110, '08-22-2022 15:06:38', 'a:8:{i:7;s:1:\"0\";i:8;s:1:\"0\";i:9;s:1:\"0\";i:10;s:1:\"0\";i:11;s:1:\"0\";i:12;s:1:\"0\";i:13;s:1:\"0\";i:14;s:1:\"0\";}', 'a:25:{i:1;s:1:\"1\";i:2;s:1:\"1\";i:3;s:1:\"1\";i:4;s:1:\"1\";i:5;s:1:\"1\";i:49;s:1:\"1\";i:50;s:1:\"1\";i:51;s:1:\"1\";i:52;s:1:\"1\";i:55;s:1:\"1\";i:57;s:1:\"1\";i:58;s:1:\"1\";i:59;s:1:\"1\";i:60;s:1:\"1\";i:61;s:1:\"1\";i:63;s:1:\"1\";i:64;s:1:\"1\";i:65;s:1:\"1\";i:66;s:1:\"1\";i:68;s:1:\"1\";i:69;s:1:\"1\";i:70;s:1:\"1\";i:71;s:1:\"1\";i:72;s:1:\"1\";i:73;s:1:\"1\";}'),
(111, '08-22-2022 15:10:27', 'a:8:{i:7;s:1:\"0\";i:8;s:1:\"0\";i:9;s:1:\"0\";i:10;s:1:\"0\";i:11;s:1:\"0\";i:12;s:1:\"0\";i:13;s:1:\"0\";i:14;s:1:\"0\";}', 'a:25:{i:1;s:1:\"1\";i:2;s:1:\"1\";i:3;s:1:\"1\";i:4;s:1:\"1\";i:5;s:1:\"1\";i:49;s:1:\"1\";i:50;s:1:\"1\";i:51;s:1:\"1\";i:52;s:1:\"1\";i:55;s:1:\"1\";i:57;s:1:\"1\";i:58;s:1:\"1\";i:59;s:1:\"1\";i:60;s:1:\"1\";i:61;s:1:\"1\";i:63;s:1:\"1\";i:64;s:1:\"1\";i:65;s:1:\"1\";i:66;s:1:\"1\";i:68;s:1:\"1\";i:69;s:1:\"1\";i:70;s:1:\"1\";i:71;s:1:\"1\";i:72;s:1:\"1\";i:73;s:1:\"1\";}'),
(112, '08-22-2022 17:24:07', 'a:8:{i:7;s:1:\"0\";i:8;s:1:\"0\";i:9;s:1:\"0\";i:10;s:1:\"0\";i:11;s:1:\"0\";i:12;s:1:\"0\";i:13;s:1:\"0\";i:14;s:1:\"0\";}', 'a:25:{i:1;s:1:\"1\";i:2;s:1:\"1\";i:3;s:1:\"1\";i:4;s:1:\"1\";i:5;s:1:\"1\";i:49;s:1:\"1\";i:50;s:1:\"1\";i:51;s:1:\"1\";i:52;s:1:\"1\";i:55;s:1:\"1\";i:57;s:1:\"1\";i:58;s:1:\"1\";i:59;s:1:\"1\";i:60;s:1:\"1\";i:61;s:1:\"1\";i:63;s:1:\"1\";i:64;s:1:\"1\";i:65;s:1:\"1\";i:66;s:1:\"1\";i:68;s:1:\"1\";i:69;s:1:\"1\";i:70;s:1:\"1\";i:71;s:1:\"1\";i:72;s:1:\"1\";i:73;s:1:\"1\";}'),
(113, '08-22-2022 17:24:11', 'a:8:{i:7;s:1:\"0\";i:8;s:1:\"0\";i:9;s:1:\"0\";i:10;s:1:\"0\";i:11;s:1:\"0\";i:12;s:1:\"0\";i:13;s:1:\"0\";i:14;s:1:\"0\";}', 'a:25:{i:1;s:1:\"1\";i:2;s:1:\"1\";i:3;s:1:\"1\";i:4;s:1:\"1\";i:5;s:1:\"1\";i:49;s:1:\"1\";i:50;s:1:\"1\";i:51;s:1:\"1\";i:52;s:1:\"1\";i:55;s:1:\"1\";i:57;s:1:\"1\";i:58;s:1:\"1\";i:59;s:1:\"1\";i:60;s:1:\"1\";i:61;s:1:\"1\";i:63;s:1:\"1\";i:64;s:1:\"1\";i:65;s:1:\"1\";i:66;s:1:\"1\";i:68;s:1:\"1\";i:69;s:1:\"1\";i:70;s:1:\"1\";i:71;s:1:\"1\";i:72;s:1:\"1\";i:73;s:1:\"1\";}'),
(114, '08-22-2022 17:24:29', 'a:8:{i:7;s:1:\"0\";i:8;s:1:\"0\";i:9;s:1:\"0\";i:10;s:1:\"0\";i:11;s:1:\"0\";i:12;s:1:\"0\";i:13;s:1:\"0\";i:14;s:1:\"0\";}', 'a:25:{i:1;s:1:\"1\";i:2;s:1:\"1\";i:3;s:1:\"1\";i:4;s:1:\"1\";i:5;s:1:\"1\";i:49;s:1:\"1\";i:50;s:1:\"1\";i:51;s:1:\"1\";i:52;s:1:\"1\";i:55;s:1:\"1\";i:57;s:1:\"1\";i:58;s:1:\"1\";i:59;s:1:\"1\";i:60;s:1:\"1\";i:61;s:1:\"1\";i:63;s:1:\"1\";i:64;s:1:\"1\";i:65;s:1:\"1\";i:66;s:1:\"1\";i:68;s:1:\"1\";i:69;s:1:\"1\";i:70;s:1:\"1\";i:71;s:1:\"1\";i:72;s:1:\"1\";i:73;s:1:\"1\";}'),
(115, '08-22-2022 17:28:21', 'a:8:{i:7;s:1:\"0\";i:8;s:1:\"0\";i:9;s:1:\"0\";i:10;s:1:\"0\";i:11;s:1:\"0\";i:12;s:1:\"0\";i:13;s:1:\"0\";i:14;s:1:\"0\";}', 'a:25:{i:1;s:1:\"1\";i:2;s:1:\"1\";i:3;s:1:\"1\";i:4;s:1:\"1\";i:5;s:1:\"1\";i:49;s:1:\"1\";i:50;s:1:\"1\";i:51;s:1:\"1\";i:52;s:1:\"1\";i:55;s:1:\"1\";i:57;s:1:\"1\";i:58;s:1:\"1\";i:59;s:1:\"1\";i:60;s:1:\"1\";i:61;s:1:\"1\";i:63;s:1:\"1\";i:64;s:1:\"1\";i:65;s:1:\"1\";i:66;s:1:\"1\";i:68;s:1:\"1\";i:69;s:1:\"1\";i:70;s:1:\"1\";i:71;s:1:\"1\";i:72;s:1:\"1\";i:73;s:1:\"1\";}'),
(116, '08-22-2022 17:28:47', 'a:8:{i:7;s:1:\"0\";i:8;s:1:\"0\";i:9;s:1:\"0\";i:10;s:1:\"0\";i:11;s:1:\"0\";i:12;s:1:\"0\";i:13;s:1:\"0\";i:14;s:1:\"0\";}', 'a:25:{i:1;s:1:\"1\";i:2;s:1:\"1\";i:3;s:1:\"1\";i:4;s:1:\"1\";i:5;s:1:\"1\";i:49;s:1:\"1\";i:50;s:1:\"1\";i:51;s:1:\"1\";i:52;s:1:\"1\";i:55;s:1:\"1\";i:57;s:1:\"1\";i:58;s:1:\"1\";i:59;s:1:\"1\";i:60;s:1:\"1\";i:61;s:1:\"1\";i:63;s:1:\"1\";i:64;s:1:\"1\";i:65;s:1:\"1\";i:66;s:1:\"1\";i:68;s:1:\"1\";i:69;s:1:\"1\";i:70;s:1:\"1\";i:71;s:1:\"1\";i:72;s:1:\"1\";i:73;s:1:\"1\";}'),
(117, '08-22-2022 17:52:56', 'a:8:{i:7;s:1:\"0\";i:8;s:1:\"0\";i:9;s:1:\"0\";i:10;s:1:\"0\";i:11;s:1:\"0\";i:12;s:1:\"0\";i:13;s:1:\"0\";i:14;s:1:\"0\";}', 'a:25:{i:1;s:1:\"1\";i:2;s:1:\"1\";i:3;s:1:\"1\";i:4;s:1:\"1\";i:5;s:1:\"1\";i:49;s:1:\"1\";i:50;s:1:\"1\";i:51;s:1:\"1\";i:52;s:1:\"1\";i:55;s:1:\"1\";i:57;s:1:\"1\";i:58;s:1:\"1\";i:59;s:1:\"1\";i:60;s:1:\"1\";i:61;s:1:\"1\";i:63;s:1:\"1\";i:64;s:1:\"1\";i:65;s:1:\"1\";i:66;s:1:\"1\";i:68;s:1:\"1\";i:69;s:1:\"1\";i:70;s:1:\"1\";i:71;s:1:\"1\";i:72;s:1:\"1\";i:73;s:1:\"1\";}'),
(118, '08-22-2022 17:55:25', 'a:8:{i:7;s:1:\"0\";i:8;s:1:\"0\";i:9;s:1:\"0\";i:10;s:1:\"0\";i:11;s:1:\"0\";i:12;s:1:\"0\";i:13;s:1:\"0\";i:14;s:1:\"0\";}', 'a:25:{i:1;s:1:\"1\";i:2;s:1:\"1\";i:3;s:1:\"1\";i:4;s:1:\"1\";i:5;s:1:\"1\";i:49;s:1:\"1\";i:50;s:1:\"1\";i:51;s:1:\"1\";i:52;s:1:\"1\";i:55;s:1:\"1\";i:57;s:1:\"1\";i:58;s:1:\"1\";i:59;s:1:\"1\";i:60;s:1:\"1\";i:61;s:1:\"1\";i:63;s:1:\"1\";i:64;s:1:\"1\";i:65;s:1:\"1\";i:66;s:1:\"1\";i:68;s:1:\"1\";i:69;s:1:\"1\";i:70;s:1:\"1\";i:71;s:1:\"1\";i:72;s:1:\"1\";i:73;s:1:\"1\";}'),
(119, '08-22-2022 17:55:33', 'a:8:{i:7;s:1:\"0\";i:8;s:1:\"0\";i:9;s:1:\"0\";i:10;s:1:\"0\";i:11;s:1:\"0\";i:12;s:1:\"0\";i:13;s:1:\"0\";i:14;s:1:\"0\";}', 'a:25:{i:1;s:1:\"1\";i:2;s:1:\"1\";i:3;s:1:\"1\";i:4;s:1:\"1\";i:5;s:1:\"1\";i:49;s:1:\"1\";i:50;s:1:\"1\";i:51;s:1:\"1\";i:52;s:1:\"1\";i:55;s:1:\"1\";i:57;s:1:\"1\";i:58;s:1:\"1\";i:59;s:1:\"1\";i:60;s:1:\"1\";i:61;s:1:\"1\";i:63;s:1:\"1\";i:64;s:1:\"1\";i:65;s:1:\"1\";i:66;s:1:\"1\";i:68;s:1:\"1\";i:69;s:1:\"1\";i:70;s:1:\"1\";i:71;s:1:\"1\";i:72;s:1:\"1\";i:73;s:1:\"1\";}'),
(120, '08-22-2022 17:56:19', 'a:8:{i:7;s:1:\"0\";i:8;s:1:\"0\";i:9;s:1:\"0\";i:10;s:1:\"0\";i:11;s:1:\"0\";i:12;s:1:\"0\";i:13;s:1:\"0\";i:14;s:1:\"0\";}', 'a:25:{i:1;s:1:\"1\";i:2;s:1:\"1\";i:3;s:1:\"1\";i:4;s:1:\"1\";i:5;s:1:\"1\";i:49;s:1:\"1\";i:50;s:1:\"1\";i:51;s:1:\"1\";i:52;s:1:\"1\";i:55;s:1:\"1\";i:57;s:1:\"1\";i:58;s:1:\"1\";i:59;s:1:\"1\";i:60;s:1:\"1\";i:61;s:1:\"1\";i:63;s:1:\"1\";i:64;s:1:\"1\";i:65;s:1:\"1\";i:66;s:1:\"1\";i:68;s:1:\"1\";i:69;s:1:\"1\";i:70;s:1:\"1\";i:71;s:1:\"1\";i:72;s:1:\"1\";i:73;s:1:\"1\";}'),
(121, '08-22-2022 17:56:39', 'a:8:{i:7;s:1:\"0\";i:8;s:1:\"0\";i:9;s:1:\"0\";i:10;s:1:\"0\";i:11;s:1:\"0\";i:12;s:1:\"0\";i:13;s:1:\"0\";i:14;s:1:\"0\";}', 'a:25:{i:1;s:1:\"1\";i:2;s:1:\"1\";i:3;s:1:\"1\";i:4;s:1:\"1\";i:5;s:1:\"1\";i:49;s:1:\"1\";i:50;s:1:\"1\";i:51;s:1:\"1\";i:52;s:1:\"1\";i:55;s:1:\"1\";i:57;s:1:\"1\";i:58;s:1:\"1\";i:59;s:1:\"1\";i:60;s:1:\"1\";i:61;s:1:\"1\";i:63;s:1:\"1\";i:64;s:1:\"1\";i:65;s:1:\"1\";i:66;s:1:\"1\";i:68;s:1:\"1\";i:69;s:1:\"1\";i:70;s:1:\"1\";i:71;s:1:\"1\";i:72;s:1:\"1\";i:73;s:1:\"1\";}'),
(122, '08-22-2022 17:56:43', 'a:8:{i:7;s:1:\"0\";i:8;s:1:\"0\";i:9;s:1:\"0\";i:10;s:1:\"0\";i:11;s:1:\"0\";i:12;s:1:\"0\";i:13;s:1:\"0\";i:14;s:1:\"0\";}', 'a:25:{i:1;s:1:\"1\";i:2;s:1:\"1\";i:3;s:1:\"1\";i:4;s:1:\"1\";i:5;s:1:\"1\";i:49;s:1:\"1\";i:50;s:1:\"1\";i:51;s:1:\"1\";i:52;s:1:\"1\";i:55;s:1:\"1\";i:57;s:1:\"1\";i:58;s:1:\"1\";i:59;s:1:\"1\";i:60;s:1:\"1\";i:61;s:1:\"1\";i:63;s:1:\"1\";i:64;s:1:\"1\";i:65;s:1:\"1\";i:66;s:1:\"1\";i:68;s:1:\"1\";i:69;s:1:\"1\";i:70;s:1:\"1\";i:71;s:1:\"1\";i:72;s:1:\"1\";i:73;s:1:\"1\";}'),
(123, '08-22-2022 17:57:34', 'a:8:{i:7;s:1:\"0\";i:8;s:1:\"0\";i:9;s:1:\"0\";i:10;s:1:\"0\";i:11;s:1:\"0\";i:12;s:1:\"0\";i:13;s:1:\"0\";i:14;s:1:\"0\";}', 'a:25:{i:1;s:1:\"1\";i:2;s:1:\"1\";i:3;s:1:\"1\";i:4;s:1:\"1\";i:5;s:1:\"1\";i:49;s:1:\"1\";i:50;s:1:\"1\";i:51;s:1:\"1\";i:52;s:1:\"1\";i:55;s:1:\"1\";i:57;s:1:\"1\";i:58;s:1:\"1\";i:59;s:1:\"1\";i:60;s:1:\"1\";i:61;s:1:\"1\";i:63;s:1:\"1\";i:64;s:1:\"1\";i:65;s:1:\"1\";i:66;s:1:\"1\";i:68;s:1:\"1\";i:69;s:1:\"1\";i:70;s:1:\"1\";i:71;s:1:\"1\";i:72;s:1:\"1\";i:73;s:1:\"1\";}'),
(124, '08-22-2022 17:58:29', 'a:8:{i:7;s:1:\"0\";i:8;s:1:\"0\";i:9;s:1:\"0\";i:10;s:1:\"0\";i:11;s:1:\"0\";i:12;s:1:\"0\";i:13;s:1:\"0\";i:14;s:1:\"0\";}', 'a:25:{i:1;s:1:\"1\";i:2;s:1:\"1\";i:3;s:1:\"1\";i:4;s:1:\"1\";i:5;s:1:\"1\";i:49;s:1:\"1\";i:50;s:1:\"1\";i:51;s:1:\"1\";i:52;s:1:\"1\";i:55;s:1:\"1\";i:57;s:1:\"1\";i:58;s:1:\"1\";i:59;s:1:\"1\";i:60;s:1:\"1\";i:61;s:1:\"1\";i:63;s:1:\"1\";i:64;s:1:\"1\";i:65;s:1:\"1\";i:66;s:1:\"1\";i:68;s:1:\"1\";i:69;s:1:\"1\";i:70;s:1:\"1\";i:71;s:1:\"1\";i:72;s:1:\"1\";i:73;s:1:\"1\";}'),
(125, '08-22-2022 17:59:18', 'a:8:{i:7;s:1:\"0\";i:8;s:1:\"0\";i:9;s:1:\"0\";i:10;s:1:\"0\";i:11;s:1:\"0\";i:12;s:1:\"0\";i:13;s:1:\"0\";i:14;s:1:\"0\";}', 'a:25:{i:1;s:1:\"1\";i:2;s:1:\"1\";i:3;s:1:\"1\";i:4;s:1:\"1\";i:5;s:1:\"1\";i:49;s:1:\"1\";i:50;s:1:\"1\";i:51;s:1:\"1\";i:52;s:1:\"1\";i:55;s:1:\"1\";i:57;s:1:\"1\";i:58;s:1:\"1\";i:59;s:1:\"1\";i:60;s:1:\"1\";i:61;s:1:\"1\";i:63;s:1:\"1\";i:64;s:1:\"1\";i:65;s:1:\"1\";i:66;s:1:\"1\";i:68;s:1:\"1\";i:69;s:1:\"1\";i:70;s:1:\"1\";i:71;s:1:\"1\";i:72;s:1:\"1\";i:73;s:1:\"1\";}'),
(126, '08-22-2022 17:59:23', 'a:8:{i:7;s:1:\"0\";i:8;s:1:\"0\";i:9;s:1:\"0\";i:10;s:1:\"0\";i:11;s:1:\"0\";i:12;s:1:\"0\";i:13;s:1:\"0\";i:14;s:1:\"0\";}', 'a:25:{i:1;s:1:\"1\";i:2;s:1:\"1\";i:3;s:1:\"1\";i:4;s:1:\"1\";i:5;s:1:\"1\";i:49;s:1:\"1\";i:50;s:1:\"1\";i:51;s:1:\"1\";i:52;s:1:\"1\";i:55;s:1:\"1\";i:57;s:1:\"1\";i:58;s:1:\"1\";i:59;s:1:\"1\";i:60;s:1:\"1\";i:61;s:1:\"1\";i:63;s:1:\"1\";i:64;s:1:\"1\";i:65;s:1:\"1\";i:66;s:1:\"1\";i:68;s:1:\"1\";i:69;s:1:\"1\";i:70;s:1:\"1\";i:71;s:1:\"1\";i:72;s:1:\"1\";i:73;s:1:\"1\";}'),
(127, '08-22-2022 18:02:31', 'a:4:{i:7;s:1:\"0\";i:8;s:1:\"0\";i:9;s:1:\"0\";i:10;s:1:\"0\";}', 'a:25:{i:1;s:1:\"1\";i:2;s:1:\"1\";i:3;s:1:\"1\";i:4;s:1:\"1\";i:5;s:1:\"1\";i:49;s:1:\"1\";i:50;s:1:\"1\";i:51;s:1:\"1\";i:52;s:1:\"1\";i:55;s:1:\"1\";i:57;s:1:\"1\";i:58;s:1:\"1\";i:59;s:1:\"1\";i:60;s:1:\"1\";i:61;s:1:\"1\";i:63;s:1:\"1\";i:64;s:1:\"1\";i:65;s:1:\"1\";i:66;s:1:\"1\";i:68;s:1:\"1\";i:69;s:1:\"1\";i:70;s:1:\"1\";i:71;s:1:\"1\";i:72;s:1:\"1\";i:73;s:1:\"1\";}'),
(128, '08-22-2022 18:04:28', 'a:4:{i:7;s:1:\"0\";i:8;s:1:\"0\";i:9;s:1:\"0\";i:10;s:1:\"0\";}', 'a:25:{i:1;s:1:\"1\";i:2;s:1:\"1\";i:3;s:1:\"1\";i:4;s:1:\"1\";i:5;s:1:\"1\";i:49;s:1:\"1\";i:50;s:1:\"1\";i:51;s:1:\"1\";i:52;s:1:\"1\";i:55;s:1:\"1\";i:57;s:1:\"1\";i:58;s:1:\"1\";i:59;s:1:\"1\";i:60;s:1:\"1\";i:61;s:1:\"1\";i:63;s:1:\"1\";i:64;s:1:\"1\";i:65;s:1:\"1\";i:66;s:1:\"1\";i:68;s:1:\"1\";i:69;s:1:\"1\";i:70;s:1:\"1\";i:71;s:1:\"1\";i:72;s:1:\"1\";i:73;s:1:\"1\";}'),
(129, '08-22-2022 18:04:52', 'a:4:{i:7;s:1:\"0\";i:8;s:1:\"0\";i:9;s:1:\"0\";i:10;s:1:\"0\";}', 'a:25:{i:1;s:1:\"1\";i:2;s:1:\"1\";i:3;s:1:\"1\";i:4;s:1:\"1\";i:5;s:1:\"1\";i:49;s:1:\"1\";i:50;s:1:\"1\";i:51;s:1:\"1\";i:52;s:1:\"1\";i:55;s:1:\"1\";i:57;s:1:\"1\";i:58;s:1:\"1\";i:59;s:1:\"1\";i:60;s:1:\"1\";i:61;s:1:\"1\";i:63;s:1:\"1\";i:64;s:1:\"1\";i:65;s:1:\"1\";i:66;s:1:\"1\";i:68;s:1:\"1\";i:69;s:1:\"1\";i:70;s:1:\"1\";i:71;s:1:\"1\";i:72;s:1:\"1\";i:73;s:1:\"1\";}'),
(130, '08-22-2022 18:06:41', 'a:4:{i:7;s:1:\"0\";i:8;s:1:\"0\";i:9;s:1:\"0\";i:10;s:1:\"0\";}', 'a:25:{i:1;s:1:\"1\";i:2;s:1:\"1\";i:3;s:1:\"1\";i:4;s:1:\"1\";i:5;s:1:\"1\";i:49;s:1:\"1\";i:50;s:1:\"1\";i:51;s:1:\"1\";i:52;s:1:\"1\";i:55;s:1:\"1\";i:57;s:1:\"1\";i:58;s:1:\"1\";i:59;s:1:\"1\";i:60;s:1:\"1\";i:61;s:1:\"1\";i:63;s:1:\"1\";i:64;s:1:\"1\";i:65;s:1:\"1\";i:66;s:1:\"1\";i:68;s:1:\"1\";i:69;s:1:\"1\";i:70;s:1:\"1\";i:71;s:1:\"1\";i:72;s:1:\"1\";i:73;s:1:\"1\";}'),
(131, '08-22-2022 18:08:57', 'a:4:{i:7;s:1:\"0\";i:8;s:1:\"0\";i:9;s:1:\"0\";i:10;s:1:\"0\";}', 'a:25:{i:1;s:1:\"1\";i:2;s:1:\"1\";i:3;s:1:\"1\";i:4;s:1:\"1\";i:5;s:1:\"1\";i:49;s:1:\"1\";i:50;s:1:\"1\";i:51;s:1:\"1\";i:52;s:1:\"1\";i:55;s:1:\"1\";i:57;s:1:\"1\";i:58;s:1:\"1\";i:59;s:1:\"1\";i:60;s:1:\"1\";i:61;s:1:\"1\";i:63;s:1:\"1\";i:64;s:1:\"1\";i:65;s:1:\"1\";i:66;s:1:\"1\";i:68;s:1:\"1\";i:69;s:1:\"1\";i:70;s:1:\"1\";i:71;s:1:\"1\";i:72;s:1:\"1\";i:73;s:1:\"1\";}'),
(132, '08-22-2022 18:09:17', 'a:4:{i:7;s:1:\"0\";i:8;s:1:\"0\";i:9;s:1:\"0\";i:10;s:1:\"0\";}', 'a:25:{i:1;s:1:\"1\";i:2;s:1:\"1\";i:3;s:1:\"1\";i:4;s:1:\"1\";i:5;s:1:\"1\";i:49;s:1:\"1\";i:50;s:1:\"1\";i:51;s:1:\"1\";i:52;s:1:\"1\";i:55;s:1:\"2\";i:57;s:1:\"1\";i:58;s:1:\"1\";i:59;s:1:\"1\";i:60;s:1:\"1\";i:61;s:1:\"1\";i:63;s:1:\"1\";i:64;s:1:\"1\";i:65;s:1:\"1\";i:66;s:1:\"1\";i:68;s:1:\"1\";i:69;s:1:\"1\";i:70;s:1:\"1\";i:71;s:1:\"1\";i:72;s:1:\"1\";i:73;s:1:\"1\";}'),
(133, '08-22-2022 18:10:06', 'a:4:{i:7;s:1:\"0\";i:8;s:1:\"0\";i:9;s:1:\"0\";i:10;s:1:\"0\";}', 'a:25:{i:1;s:1:\"1\";i:2;s:1:\"1\";i:3;s:1:\"1\";i:4;s:1:\"1\";i:5;s:1:\"1\";i:49;s:1:\"1\";i:50;s:1:\"1\";i:51;s:1:\"1\";i:52;s:1:\"1\";i:55;s:1:\"2\";i:57;s:1:\"1\";i:58;s:1:\"1\";i:59;s:1:\"1\";i:60;s:1:\"1\";i:61;s:1:\"1\";i:63;s:1:\"1\";i:64;s:1:\"1\";i:65;s:1:\"1\";i:66;s:1:\"1\";i:68;s:1:\"1\";i:69;s:1:\"1\";i:70;s:1:\"1\";i:71;s:1:\"1\";i:72;s:1:\"1\";i:73;s:1:\"1\";}'),
(134, '08-22-2022 18:16:28', 'a:4:{i:7;s:1:\"0\";i:8;s:1:\"0\";i:9;s:1:\"0\";i:10;s:1:\"0\";}', 'a:25:{i:1;s:1:\"1\";i:2;s:1:\"1\";i:3;s:1:\"1\";i:4;s:1:\"1\";i:5;s:1:\"1\";i:49;s:1:\"1\";i:50;s:1:\"1\";i:51;s:1:\"1\";i:52;s:1:\"1\";i:55;s:1:\"2\";i:57;s:1:\"1\";i:58;s:1:\"1\";i:59;s:1:\"1\";i:60;s:1:\"1\";i:61;s:1:\"1\";i:63;s:1:\"1\";i:64;s:1:\"1\";i:65;s:1:\"1\";i:66;s:1:\"1\";i:68;s:1:\"1\";i:69;s:1:\"1\";i:70;s:1:\"1\";i:71;s:1:\"1\";i:72;s:1:\"1\";i:73;s:1:\"1\";}'),
(135, '08-22-2022 18:25:18', 'a:4:{i:7;s:1:\"0\";i:8;s:1:\"0\";i:9;s:1:\"0\";i:10;s:1:\"0\";}', 'a:25:{i:1;s:1:\"1\";i:2;s:1:\"1\";i:3;s:1:\"1\";i:4;s:1:\"1\";i:5;s:1:\"1\";i:49;s:1:\"1\";i:50;s:1:\"1\";i:51;s:1:\"1\";i:52;s:1:\"1\";i:55;s:1:\"1\";i:57;s:1:\"1\";i:58;s:1:\"1\";i:59;s:1:\"1\";i:60;s:1:\"1\";i:61;s:1:\"1\";i:63;s:1:\"1\";i:64;s:1:\"1\";i:65;s:1:\"1\";i:66;s:1:\"1\";i:68;s:1:\"1\";i:69;s:1:\"1\";i:70;s:1:\"1\";i:71;s:1:\"1\";i:72;s:1:\"1\";i:73;s:1:\"1\";}');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `umur` int(5) NOT NULL,
  `jk` int(2) DEFAULT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nama`, `umur`, `jk`, `alamat`, `no_hp`) VALUES
(41, 'Hario', 16, 1, 'Telagasrai', '1312'),
(42, 'Hario Saloko', 18, 1, 'Telagasari', '081239991818'),
(43, 'Hario Saloko', 27, 1, 'Telagasari', '088488199'),
(44, 'Hario Saloko', 28, 1, 'Telagasari', '081882771'),
(45, 'Putri Dwi Rahayu', 32, 2, 'dukuh kalirau ', '0927391233'),
(46, 'Putri Dwi Rahayu', 22, 2, 'Jakarta Selatan', '082325543216'),
(47, 'Putri Dwi Rahayu', 22, 2, 'dukuh kalirau', '082325543216'),
(48, 'Putri', 32, 2, 'jakarta', '978674444'),
(49, 'Putri', 32, 2, 'asfdsg', '08976'),
(50, 'Putri', 23, 2, 'fsrhd', '87696858'),
(51, 'pi', 21, 1, 'sdsfdsff', '098797876'),
(52, 'Putri', 21, 1, 'efdf', '75443'),
(53, 'jhk', 78, 1, 'gjhkhk', '98'),
(54, 's', 3, 2, 'dfg', '23');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `basis_pengetahuan`
--
ALTER TABLE `basis_pengetahuan`
  ADD PRIMARY KEY (`id_pengetahuan`);

--
-- Indeks untuk tabel `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`id_gejala`);

--
-- Indeks untuk tabel `hasil_konsultasi`
--
ALTER TABLE `hasil_konsultasi`
  ADD PRIMARY KEY (`id_hasil`);

--
-- Indeks untuk tabel `jenis_penyakit`
--
ALTER TABLE `jenis_penyakit`
  ADD PRIMARY KEY (`id_penyakit`);

--
-- Indeks untuk tabel `kondisi`
--
ALTER TABLE `kondisi`
  ADD PRIMARY KEY (`id_kondisi`);

--
-- Indeks untuk tabel `konsultasi`
--
ALTER TABLE `konsultasi`
  ADD PRIMARY KEY (`id_konsultasi`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `basis_pengetahuan`
--
ALTER TABLE `basis_pengetahuan`
  MODIFY `id_pengetahuan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT untuk tabel `gejala`
--
ALTER TABLE `gejala`
  MODIFY `id_gejala` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT untuk tabel `hasil_konsultasi`
--
ALTER TABLE `hasil_konsultasi`
  MODIFY `id_hasil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT untuk tabel `jenis_penyakit`
--
ALTER TABLE `jenis_penyakit`
  MODIFY `id_penyakit` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `kondisi`
--
ALTER TABLE `kondisi`
  MODIFY `id_kondisi` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `konsultasi`
--
ALTER TABLE `konsultasi`
  MODIFY `id_konsultasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
