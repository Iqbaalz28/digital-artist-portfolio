-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2023 at 01:47 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digitalartist`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `foto` text DEFAULT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `slug` varchar(100) DEFAULT NULL,
  `konten` text DEFAULT NULL,
  `penulis` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `foto`, `judul`, `slug`, `konten`, `penulis`, `created_at`, `updated_at`) VALUES
(4, 'ayBTcGFjZSEg4.png', 'My Work Space! ', 'my-work-space-', '<p>Saya menyebutnya ruang&nbsp;ekspresi, karena ditempat ini saya bisa mengekspresikan diri melalui goresan-goresan pensil, kuas, maupun secara digital. Ruangan ini sendiri sebenarnya milik bibi&nbsp;saya. Dia adalah seorang illustrator buku anak kecil, dan saya juga belajar banyak darinya. Saya sering sekali untuk mampir dan singgah dirumahnya untuk ikut&nbsp;membuat sebuah gambar atau terkadang hanya sendiri ketika beliau pergi ke luar kota.</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/digitalartist/uploads/blogs/322771226.jpg\" style=\"margin:10px 0px\" /></p>\r\n\r\n<p>Pensil merupakan&nbsp;andalan saya dalam membuat goresan seni&nbsp;disertai charcoal (arang) baik yang powder atau liquid&nbsp;untuk membuat&nbsp;kontras warna dan perspektif gambar.</p>\r\n\r\n<p><br />\r\n<img alt=\"\" src=\"http://localhost/digitalartist/uploads/blogs/2096431.png\" /></p>\r\n', 1, '2023-11-11 04:11:26', '2023-11-11 04:11:26'),
(5, 'ZG9tIFJ1bWluYXRpb25zIGFib3V0IOKAmFN0eWxl4oCZ.png', 'Kenapa Seni? ', 'kenapa-seni-', '<blockquote>\r\n<h3><strong>Mengenal Diri Melalui Seni</strong></h3>\r\n</blockquote>\r\n\r\n<p>Halo teman-teman dan pencinta seni! Selamat datang kembali di blog saya yang sederhana ini. Saya sangat senang bisa berbagi kisah dan pengalaman saya dalam dunia seni, terutama kesukaan saya akan menggambar dan lukisan.</p>\r\n\r\n<p>Saya percaya bahwa setiap goresan dan warna yang kita pilih dalam sebuah karya seni mencerminkan bagian dari diri kita. Dalam setiap lukisan dan sketsa, saya menemukan ruang untuk mengekspresikan perasaan, mimpi, dan pandangan dunia saya. Seni adalah bahasa tanpa kata yang memungkinkan saya berbicara dengan dunia di sekitar saya.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<blockquote>\r\n<h3><strong>Pencarian Inspirasi di Setiap Sudut</strong></h3>\r\n</blockquote>\r\n\r\n<p>Setiap hari, saya mencari inspirasi di sekitar saya. Apakah itu melalui pemandangan di taman, wajah-wajah yang lewat di jalanan, atau melalui kisah-kisah kehidupan sehari-hari, semuanya bisa menjadi subjek yang menarik untuk diabadikan dalam kanvas atau kertas.<br />\r\n<br />\r\nDalam perjalanan seni saya, saya menemukan bahwa setiap alat memiliki keunikannya sendiri. Pensil memberikan kontrol yang luar biasa, sementara kuas memberikan keleluasaan ekspresi. Saya sering kali menggunakan campuran teknik, mencoba berbagai jenis pensil dan cat, untuk mencapai efek yang diinginkan.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<blockquote>\r\n<h3><strong>Perlahan Tapi Pasti</strong></h3>\r\n</blockquote>\r\n\r\n<p>Dalam perjalanan seni saya, saya menemukan bahwa setiap alat memiliki keunikannya sendiri. Pensil memberikan kontrol yang luar biasa, sementara kuas memberikan keleluasaan ekspresi. Saya sering kali menggunakan campuran teknik, mencoba berbagai jenis pensil dan cat, untuk mencapai efek yang diinginkan.</p>\r\n\r\n<p>Saya suka membagikan proses kreatif saya. Mungkin mulai dari sebuah sketsa kasar yang tiba-tiba menjadi inspirasi utama untuk sebuah lukisan penuh. Kegembiraan yang saya rasakan ketika melihat karya selesai adalah salah satu alasan utama saya tetap setia pada seni.&nbsp;Saya percaya bahwa seni adalah perjalanan tanpa akhir untuk belajar dan berkembang.</p>\r\n\r\n<p>Cerita&nbsp;ini tidak hanya tentang saya, tapi juga tentang Anda, para pembaca. Saya mengundang Anda untuk berbagi cerita seni Anda, pertanyaan, atau bahkan tips dan trik yang mungkin Anda miliki. Seni adalah panggilan bersama, dan saya sangat antusias untuk mendengar perspektif unik Anda.</p>\r\n\r\n<p>Terima kasih sudah membaca cerita&nbsp;sederhana ini. Saya harap kita dapat bersama-sama mengeksplorasi keindahan dunia seni dan terus menginspirasi satu sama lain.</p>\r\n', 1, '2023-11-11 04:55:16', '2023-11-11 04:55:16');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `created_at`, `updated_at`) VALUES
(5, 'Universitas Pakuan Bogor', '2023-10-31 12:42:41', '2023-10-31 12:42:41'),
(6, 'NuArt Sculpture Park Studio', '2023-10-31 12:43:20', '2023-10-31 12:43:20');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `instagram` text DEFAULT NULL,
  `linkedin` text DEFAULT NULL,
  `konten` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `instagram`, `linkedin`, `konten`) VALUES
(1, 'https://www.instagram.com/iqbaalz28/', 'https://www.linkedin.com/in/iqbal-rizky-maulana-9ab0a4250/', '<p><img alt=\"\" src=\"http://localhost/digitalartist/uploads/contact/1930837431.png\" style=\"border-style:solid; border-width:3px; height:460px; width:665px\" /><br />\n<br />\nTerima kasih telah mengunjungi ruang seni ini, Saya&nbsp;sangat menghargai waktu dan perhatian Anda. Jika Anda memiliki pertanyaan lebih lanjut atau ingin berbagi apresiasi, jangan ragu untuk menghubungi. Jika Anda memiliki pertanyaan khusus tentang acara, kerjasama, produk seni,&nbsp;atau hal lainnya, Anda dapat menghubungi saya&nbsp;di <strong>iqbalrizky160@gmail.com</strong></p>\n');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` int(11) NOT NULL,
  `img` text DEFAULT NULL,
  `uploaded_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `img`, `uploaded_at`) VALUES
(19, 'Lugu.jpg', '2023-11-10 03:50:23'),
(20, 'K.jpg', '2023-11-10 03:50:33'),
(21, 'RealiseYourBlind.jpg', '2023-11-10 03:50:42'),
(22, 'Natha.jpg', '2023-11-10 03:50:54'),
(23, 'IF.jpg', '2023-11-10 03:51:05'),
(24, 'Revina3.jpg', '2023-11-10 03:51:18'),
(25, 'Revina2.jpg', '2023-11-10 03:51:26'),
(26, 'Revina.jpg', '2023-11-10 03:51:35'),
(27, 'TwoSides.jpg', '2023-12-02 00:43:42'),
(28, 'Own.jpg', '2023-12-02 00:43:58'),
(29, 'Amartha.jpg', '2023-12-02 00:44:18'),
(30, 'Burn.jpg', '2023-12-02 00:44:30'),
(31, 'Cae.jpg', '2023-12-02 00:44:51'),
(32, 'Kad.jpg', '2023-12-02 00:45:32');

-- --------------------------------------------------------

--
-- Table structure for table `honours`
--

CREATE TABLE `honours` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `honours`
--

INSERT INTO `honours` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Best Potret - Gentra Art Show Kota Cilegon 2019', '2023-10-28 22:48:36', '2023-10-28 22:48:36'),
(3, 'Most Favorite Art - Universitas Pakuan Bogor 2017', '2023-11-11 03:53:40', '2023-11-11 03:53:40');

-- --------------------------------------------------------

--
-- Table structure for table `illustrations`
--

CREATE TABLE `illustrations` (
  `id` int(11) NOT NULL,
  `img` text DEFAULT NULL,
  `uploaded_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `illustrations`
--

INSERT INTO `illustrations` (`id`, `img`, `uploaded_at`) VALUES
(5, 'Blindfold.jpg', '2023-10-30 09:31:35'),
(14, 'Anathema.jpg', '2023-11-01 09:25:41'),
(15, 'Bella.jpg', '2023-11-01 09:25:50'),
(16, 'Blushing.jpg', '2023-11-01 09:25:59'),
(17, 'Burning.jpg', '2023-11-01 09:26:09'),
(18, 'DCaprio.jpg', '2023-11-01 09:26:18'),
(19, 'Hellas.jpg', '2023-11-01 09:26:30'),
(20, 'Melankolis.jpg', '2023-11-01 09:27:16'),
(21, 'Neuroticism.jpg', '2023-11-01 09:27:25'),
(22, 'Obfuscation.jpg', '2023-11-01 09:27:37'),
(23, 'Sanguinis.jpg', '2023-11-01 09:27:59'),
(24, 'Sheol.jpg', '2023-11-01 09:28:14'),
(25, 'Sigma.jpg', '2023-11-01 09:28:24'),
(26, 'Silent.jpg', '2023-11-01 09:31:08'),
(27, 'ToMuch.jpg', '2023-11-01 09:31:18'),
(28, 'Twin.jpg', '2023-11-01 09:31:35'),
(29, 'Waste.jpg', '2023-11-01 09:31:53');

-- --------------------------------------------------------

--
-- Table structure for table `interviews`
--

CREATE TABLE `interviews` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` int(11) NOT NULL,
  `foto_1` text NOT NULL,
  `foto_2` text NOT NULL,
  `konten` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `foto_1`, `foto_2`, `konten`) VALUES
(1, 'MjAyMzEwMzExODU4MDk.jpg', 'MjAyMzExMDExNzU2MTM.png', '<h2><big><strong>Hello! I am Iqbal Rizky Maulana</strong></big></h2>\r\n\r\n<p>Saya adalah seorang yang lahir di bawah bayangan pensil, kuas cat, dan aroma cat minyak yang khas, di kota kecil yang dipenuhi warna dan kreativitas. Sejak saya pertama kali menyentuh kuas dan menggoreskannya di atas kertas, saya merasakan panggilan yang kuat dari dunia seni.<br />\r\n<br />\r\nSejak kecil, saya suka sekali bercerita dengan gambar dan mengisi kertas termasuk buku pelajaran sekolah dengan coretan-coretan.&nbsp;Setiap goresan, setiap warna&nbsp;adalah bagian dari diri saya yang ingin bercerita, bermimpi, dan menginspirasi. Tentunya dalam menciptakan sebuah karya lukis, saya melalui proses yang cukup panjang. Sedari kecil saya suka mengamati pemandangan yang memiliki nilai estetika bagi mata dan mencoba untuk membuatnya&nbsp;dengan goresan pensil.<br />\r\n<br />\r\nSaat ini saya tinggal di Kota Bandung, Indonesia dan sedang&nbsp;menjalani studi di jurusan Sistem Informatika, Jaringan, dan Aplikasi. Meskipun tidak sejalan dengan hobbi, saya tetap menikmati dan menjalaninya. Saya merasa seperti memiliki ilmu tambahan diluar yang saya sukai. Disisi lain saya juga masih menyempatkan untuk membuat sketsa-sketsa halus ketika merasa perlu meluapkan emosi yang dirasa.&nbsp;<br />\r\n<br />\r\n&nbsp;</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `full_name`, `image`, `description`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 'admin@mail.com', '25d55ad283aa400af464c76d713c07ad', 'Iqbal Rizky Maulana', 'Admin.JPG', 'Admin', 0, '2020-08-13 19:56:47', '2023-10-31 12:53:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `honours`
--
ALTER TABLE `honours`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `illustrations`
--
ALTER TABLE `illustrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `interviews`
--
ALTER TABLE `interviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `honours`
--
ALTER TABLE `honours`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `illustrations`
--
ALTER TABLE `illustrations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `interviews`
--
ALTER TABLE `interviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
