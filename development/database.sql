-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2022 at 01:31 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `almardiy_serabut_kelapa`
--

-- --------------------------------------------------------

--
-- Table structure for table `feature`
--

CREATE TABLE `feature` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `foto` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feature`
--

INSERT INTO `feature` (`id`, `nama`, `keterangan`, `foto`, `status`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(5, 'Quality', 'We always maintain the quality of our products in order to maintain a relationship with customers.', '04c6851f1818146171d6790f96d2e114.png', 1, 1, NULL, NULL, '2022-04-08 06:33:53', NULL, NULL),
(6, 'Innovation', 'We will always look for new innovations for our products in order to benefit the lives of our people and the world.', '1f51b75cdcf762c08379a8864831d262.png', 1, 1, NULL, NULL, '2022-04-08 06:34:32', NULL, NULL),
(7, 'Integrity', 'We want to be a useful role model for the locals and the world by providing new innovations.', '8e52cb2681e83c0c8cdfe0e402c225b7.png', 1, 1, NULL, NULL, '2022-04-08 06:34:59', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `footer_sosmed`
--

CREATE TABLE `footer_sosmed` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `link` text DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `footer_sosmed`
--

INSERT INTO `footer_sosmed` (`id`, `nama`, `icon`, `link`, `status`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Facebook', 'fab fa-facebook', 'https://facebook.com/iseplutpinur7', 1, 1, NULL, NULL, '2022-03-12 16:09:04', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `foto` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0 COMMENT '0 Tidak Aktif | 1 Aktif',
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `nama`, `foto`, `status`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, NULL, '9085f7ca35f9c21cae06cdfbedef140f.jpg', 3, 1, NULL, 1, '2022-03-11 15:55:18', '2022-03-11 16:04:20', '2022-03-11 16:04:20'),
(2, 'Foto 1', 'a93b008b3394699e5780b971f5044a43.jpg', 3, 1, NULL, 1, '2022-03-11 15:58:39', '2022-03-11 16:04:29', '2022-03-11 16:04:29'),
(3, 'Foto 2', '', 3, 1, NULL, 1, '2022-03-11 16:00:05', '2022-03-11 16:04:28', '2022-03-11 16:04:28'),
(4, 'Tambah 5', '149e4e75d66d05e63b32692e7f31c62f.jpg', 3, 1, NULL, 1, '2022-03-11 16:02:03', '2022-03-11 16:04:26', '2022-03-11 16:04:26'),
(7, 'Foto 1', 'ce4a4d6e6cf7ff645a166f82a60cffb1.jpg', 0, 1, 1, NULL, '2022-03-11 16:10:37', '2022-03-11 16:14:28', NULL),
(8, 'Foto 2', '7185d70a0fca40cca41bd9b351dfbdec.jpg', 1, 1, 1, NULL, '2022-03-11 16:10:47', '2022-04-02 21:09:09', NULL),
(9, 'Foto 3', 'e1ea0d695889b1cb206aa62c9694b573.jpg', 1, 1, 1, NULL, '2022-03-11 16:11:01', '2022-04-02 21:39:05', NULL),
(10, 'Foto 4', 'bbb8ef529a644cfc54fb62c43a653f17.jpg', 1, 1, 1, NULL, '2022-03-11 16:14:57', '2022-04-02 22:04:17', NULL),
(11, 'Foto 5', 'bc9252c10be3dd91b06ac6cffeb08db1.jpg', 0, 1, 1, NULL, '2022-03-11 16:15:02', '2022-04-02 22:07:54', NULL),
(12, 'Foto 6', '6536f860dba5231b4ad7bc9e1847a570.jpg', 0, 1, 1, NULL, '2022-03-11 16:15:24', '2022-04-02 22:07:58', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `key_value`
--

CREATE TABLE `key_value` (
  `key` varchar(255) NOT NULL,
  `value1` text DEFAULT NULL,
  `value2` text DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `key_value`
--

INSERT INTO `key_value` (`key`, `value1`, `value2`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
('about', 'Tentang Kami', '                        <h3 class=\"section-title-3 pb-0\">Athena Florist</h3>\r\n                        <p>Athena Florist Bandung merupakan perusahaan yang bergerak dibidang penjualan bunga papan, berdiri sejak 2018 di Bandung.\r\n                            Perusahaan ini didirikan oleh keluarga saya pada tanggal 15 januari 2018.\r\n                            athena florist bandung - merupakan layanan toko karangan bunga online yang telah berpengalaman dan terpercaya melayani berbagai jenis rangkaiian bunga yang menarik, elegan, dan kreatif dalam segi rangkaiian yang di hasilkan. kami berpusat di kota bandung siap melayani anda 24 jam dengan senang hati, beragam jenis karangan/rangkaian bunga papan ucapan seperti Anniversry, Congratulation, duka cita, Happy Wedding, dan even even tertentu seperti Valentine, acara kantor, dll</p>', 1, 1, NULL, '2021-11-26 03:39:47', '2021-11-26 03:56:13', NULL),
('about_detail', '<p><span style=\"font-size: 14px;\">Recognizing Indonesia\'s potential as one of the world\'s leading coconut producers, we will finally start exporting coconut derivatives such as coconut and coconut coir starting in 2021. Providing service to customers is a success for us, because we think the best corporate culture is \"the one that gives more\".</span></p><p><span style=\"font-size: 14px;\">We want to inspire the world by demonstrating that it is possible to simultaneously provide long-term and sustainable happiness & well-being for customers, employees, suppliers, shareholders, and communities in the long and sustainable term.</span></p>\r\n<p style=\"text-align: left;\"><br></p><p></p>', '1', 1, 1, NULL, '2022-03-11 02:35:49', '2022-04-08 05:03:14', NULL),
('about_foto', 'b24a6794a507c0524af91a8efb7a0e64.png', '1', 1, 1, NULL, '2021-11-26 03:39:47', '2022-04-21 05:00:37', NULL),
('about_history', 'A little story about us', '<h2 class=\"section-title-large\">Our History</h2>\r\n                        <p><strong>Sejarah adanya bunga papan ucapan Bandung</strong></p>\r\n                        <p>bunga papan ini biasanya dikirimkan oleh seseorang ataupun perusahaan ketika dalam suatu acara ataupun momen tertentu, seperti misalnya acara pernikahan, peresmian, duka cita atau bahkan perayaan ulang tahun seseorang yang dianggap penting atau spesial. Anggapan kita terhadap sebuah acara atau seseorang yang banyak dikirimi karangan bunga papan maka ia adalah orang penting yang mempunyai banyak pengaruh untuk kalangan orang banyak. Biasanya semakin besar suatu acara yang diadakan maka akan semakin banyak pula kiriman karangan bunga papannya</p>\r\n                   ', 1, 1, NULL, '2021-11-26 03:38:13', '2021-11-26 03:59:15', NULL),
('about_judul', 'ABOUT US', '1', 1, 1, NULL, '2022-03-11 02:35:49', '2022-03-12 19:18:03', NULL),
('about_show', '1', NULL, 1, 1, NULL, '2022-03-11 02:35:49', '2022-03-13 00:40:04', NULL),
('contact_maps', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.6134744797523!2d107.60127411431729!3d-6.936714169829251!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e9a18575daed%3A0x9c362e4a9bbfa5a7!2sToko%20Bunga%20papan%20ucapan%20Bandung%20-%20Athena%20Florist!5e0!3m2!1sid!2sid!4v1637587340767!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', NULL, 1, 1, NULL, '2021-11-26 07:27:55', '2021-11-26 07:36:32', NULL),
('feature_judul', 'Feature', '1', 1, 1, NULL, '2022-03-11 13:32:42', '2022-04-08 06:30:03', NULL),
('feature_show', '0', NULL, 1, 1, NULL, '2022-03-11 13:32:42', '2022-04-08 12:45:26', NULL),
('feature_sub_judul', '-', '1', 1, 1, NULL, '2022-03-11 13:32:42', '2022-03-12 21:40:09', NULL),
('footer_alamat', '41 madison ave, floor 24 new work, NY 10010 1-877-932-7111, support@mail.com', '1', 1, 1, NULL, '2022-03-11 13:52:01', '2022-03-12 21:40:20', NULL),
('footer_contact', 'Info Kontak', '<p>                </p><address><span style=\"color: rgb(72, 72, 72); font-family: Poppins, sans-serif; font-size: 14px; text-align: center; background-color: rgb(255, 255, 255);\">Toko bunga papan ucapan Bandung - Pasar Bunga tegalega, Bandung</span><br>Phone: <span style=\"color: rgb(72, 72, 72); font-family: Poppins, sans-serif; font-size: 14px; text-align: center; background-color: rgb(255, 255, 255);\">081903902070</span><br>Email: athenafloristbandung@gmail.com</address>https://tokobungapapanucapanbandung.com<address><br></address><p></p>', 1, 1, NULL, '2021-11-19 17:52:48', '2022-03-10 23:10:04', NULL),
('footer_copyright', 'Copyright © ${(new Date().getFullYear())} Serabut Kelapa', '1', 1, 1, NULL, '2021-11-19 17:52:48', '2022-03-12 21:40:20', NULL),
('footer_descritpion', 'Kami menyediakan berbagai macam rangkaian bunga dengan design yang modern yang tentunya bisa anda lakukan costum baik ukuran atau jenis bunga', NULL, 1, 1, NULL, '2021-11-19 15:22:55', '2021-11-19 18:17:33', NULL),
('footer_list_head', 'Menyediakan', NULL, 1, 1, NULL, '2021-11-19 17:52:48', '2021-11-19 18:52:33', NULL),
('footer_show', '1', NULL, 1, 1, NULL, '2022-03-11 13:52:01', '2022-03-13 00:40:34', NULL),
('galeri_judul', 'GALLERY', '1', 1, 1, NULL, '2022-03-11 13:27:05', '2022-03-12 21:40:07', NULL),
('galeri_show', '1', NULL, 1, 1, NULL, '2022-03-11 13:28:10', '2022-03-13 00:40:18', NULL),
('galeri_sub_judul', 'Scelerisque duis semper vitae eget lorem vestibulum pulvinar habitant sed.', '1', 1, 1, NULL, '2022-03-11 13:27:05', '2022-03-12 21:40:07', NULL),
('home_btn_link', 'http://facebook.com', NULL, 1, 1, NULL, '2022-03-11 14:06:59', '2022-03-12 18:40:57', NULL),
('home_btn_title', '<svg                                     xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\"                                     class=\"bi bi-whatsapp\" viewBox=\"0 0 16 16\">                                     <path                                         d=\"M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z\" />                                 </svg> Pesan Sekarang', '0', 1, 1, NULL, '2022-03-11 00:53:11', '2022-03-13 00:45:22', NULL),
('home_foto_jumbotron', '39902fe1e0a1deba38e9972252d63088.png', '1', 1, 1, NULL, '2022-03-11 00:53:11', '2022-04-02 22:26:18', NULL),
('home_judul_utama', 'BEST COCONUT SUPPLIER TO THE WORLD', '1', 1, 1, NULL, '2022-03-11 00:53:11', '2022-04-08 14:18:17', NULL),
('home_logo', 'e39f438a91dab9b07580fee2a7c3a8d0.png', '1', 1, 1, NULL, '2022-03-11 00:53:11', '2022-04-08 13:52:10', NULL),
('home_show', '1', NULL, 1, 1, NULL, '2022-03-11 01:42:01', '2022-03-13 00:39:53', NULL),
('home_situs', NULL, NULL, 1, NULL, NULL, '2022-03-11 13:52:01', NULL, NULL),
('home_sub_judul', 'coconut product supplier', '1', 1, 1, NULL, '2022-03-11 00:53:11', '2022-04-08 14:18:17', NULL),
('kontak_judul', 'WHAT CAN WE DO FOR YOU', '1', 1, 1, NULL, '2022-03-12 11:39:30', '2022-04-21 06:29:40', NULL),
('kontak_koordinat', '-6.896598', '107.630872', 1, 1, NULL, '2022-03-11 13:52:01', '2022-03-12 11:51:55', NULL),
('kontak_show', '1', NULL, 1, 1, NULL, '2022-03-11 13:52:01', '2022-04-21 05:02:31', NULL),
('kontak_sub_judul', 'PLEASE TELL US WHAT IS YOUR REQUIRMENT IN DETAILS', '1', 1, 1, NULL, '2022-04-21 06:28:24', '2022-04-21 06:29:40', NULL),
('kontak_tampilan_depan', NULL, NULL, 1, NULL, NULL, '2022-03-11 13:52:01', NULL, NULL),
('logo', 'd481abc4593064169dbcee9de39c804a.png', '4707ee8ba9fff6de51d74efbe5a35ee7.png', 1, 1, NULL, '2021-11-19 15:15:03', '2022-01-22 13:06:40', NULL),
('offer', 'Terlengkap Dan Terjangkau', 'Toko Bunga Ucapan Bandung', 1, 1, NULL, '2021-11-17 21:17:10', '2021-11-17 21:55:55', NULL),
('offer2', 'Terbaik Dan Terpercaya', 'TUNGGU APA LAGI', 1, 1, NULL, '2021-11-17 22:03:28', '2021-11-17 22:06:50', NULL),
('offer_decritpion', '<p><span class=\"fw-bold\">Toko Bunga Ucapan Bandung</span> merupakan salah satu toko bunga\r\n              terbaik di <span class=\"fw-bold\">Kota Bandung</span> dengan produk kami berbagai macam\r\n              karangan bunga dan rangkaian bunga seperti :\r\n            </p>\r\n            <br>\r\n            <div class=\"container\">\r\n              <ul style=\"list-style-type: disc;\">\r\n                <li>PAPAN BUNGA Single 2in1 Steroform</li>\r\n                <li>HANDBOUQUET</li>\r\n                <li>BOUQUET ( Meja, Standing, box )</li>\r\n                <li>SALIB, KRANS DUKA</li>\r\n                <li>Bunga Semat / kantong</li>\r\n                <li>Dekorasi Bahagia, Duka</li>\r\n                <li>Parcel Buah, Cookies</li>\r\n                <li>dll.</li>\r\n              </ul>\r\n            </div>\r\n\r\n            <br>\r\n            <p>Produk yang kami sediakan menggunakan bunga yang fresh dan bermacam warna yang bisa\r\n              disesuaikan untuk moment Anda. Selain itu kami juga menggunakan bunga buatan untuk pengganti\r\n              bunga asli agar karangan bunga Anda tidak cepat layu.</p>', NULL, 1, 1, NULL, '2021-11-17 21:17:10', '2022-01-10 17:44:17', NULL),
('offer_decritpion2', '            <p>Toko Bunga Papan Ucapan Bandung menawarka proses pemesanan yang sangat mudah, tinggal\r\n              cari\r\n              produk yang Anda inginkan, atau rekomendasi produk sesuai dengan moment yang Anda\r\n              butuhkan\r\n              melalui katalog produk di website ini, maupun langsung hubungi team CS kami yang siap\r\n              membantu anda 24 jam untuk membantu pemesanan bunga secara online dan offline.\r\n            </p>', NULL, 1, 1, NULL, '2021-11-17 22:03:28', '2021-11-17 22:07:17', NULL),
('pengaturan_deskripsi', 'Deskripsi Situs', NULL, 1, 1, NULL, '2022-03-12 16:34:29', '2022-03-12 16:47:57', NULL),
('pengaturan_icon', 'e7249c85e2cbe789b84676a909b421a8.jpg', '5a4a526ee8288f89d4e9523117c0ba21.jpg', 1, 1, NULL, '2022-03-12 16:34:29', '2022-04-03 00:32:31', NULL),
('pengaturan_title', 'Serabut Kelapa', 'Serabut Kelapa', 1, 1, NULL, '2022-03-12 16:34:29', '2022-03-12 16:47:57', NULL),
('product', 'Bunga Terbaik Dari Kami', 'BUNGA APA YANG ANDA CARI HARI INI ?', 1, 1, NULL, '2021-11-18 09:59:33', '2021-11-18 09:59:52', NULL),
('product2', 'Kamu Mungkin Juga Suka', 'PRODUK LAIN KAMI', 1, 1, NULL, '2021-11-19 07:14:04', '2021-11-19 07:16:22', NULL),
('produk_judul', 'Our Product', '1', 1, 1, NULL, '2022-03-11 13:52:01', '2022-03-12 21:40:11', NULL),
('produk_show', '1', NULL, 1, 1, NULL, '2022-03-11 13:52:01', '2022-03-13 00:40:27', NULL),
('produk_sub_judul', '-', '1', 1, 1, NULL, '2022-03-11 13:52:01', '2022-03-12 21:40:11', NULL),
('team_judul', 'Our Teams', '1', 1, 1, NULL, '2022-03-11 13:34:49', '2022-03-12 21:40:16', NULL),
('team_show', '1', NULL, 1, 1, NULL, '2022-03-11 13:35:24', '2022-03-13 00:40:31', NULL),
('team_sub_judul', '-', '0', 1, 1, NULL, '2022-03-12 21:40:12', '2022-03-12 21:40:16', NULL),
('testimoni', 'Kepuasan Pelanggan adalah yang utama', 'TESTIMONI', 1, 1, NULL, '2021-11-17 22:23:33', '2021-11-17 22:29:34', NULL),
('testimoni_judul', 'Testimoni', 'on', 1, 1, NULL, '2022-03-11 13:52:01', '2022-03-11 17:45:33', NULL),
('testimoni_show', 'on', NULL, 1, 1, NULL, '2022-03-11 13:52:01', '2022-03-11 17:45:33', NULL),
('testimoni_sub_judul', '-', '0', 1, 1, NULL, '2022-03-11 13:52:01', '2022-03-11 17:45:33', NULL),
('vm_judul', 'VISION AND MISSION', '1', 1, 1, NULL, '2022-04-08 06:13:41', '2022-04-08 12:47:01', NULL),
('vm_misi', '<p style=\"text-align: center; \"><span style=\"font-weight: bolder; font-size: 24px;\">Mission</span><br></p><p style=\"text-align: center; \">1. Maintain the production of products so that the quality and quantity are in accordance with consumer demands</p><p style=\"text-align: center; \">2. Empowering farmers throughout Indonesia</p><p style=\"text-align: center; \">3. Increase product promotion through online media and other promotional media</p>', '1', 1, 1, NULL, '2022-04-08 06:13:41', '2022-04-08 14:55:54', NULL),
('vm_show', '1', NULL, 1, 1, NULL, '2022-04-08 06:13:41', '2022-04-08 06:16:24', NULL),
('vm_sub_judul', '', '1', 1, 1, NULL, '2022-04-08 06:13:41', '2022-04-08 06:15:36', NULL),
('vm_visi', '<p style=\"text-align: center; \"><span style=\"font-size: 24px;\"><b>Vision</b></span></p><p style=\"text-align: center; \">- Become a supplier of quality coconut derivative products</p><p style=\"text-align: center; \">- Become one of the largest coconut producers in Indonesia</p><p style=\"text-align: center; \">- Making our products able to compete with other products in the international market</p>', '1', 1, 1, NULL, '2022-04-08 06:13:41', '2022-04-08 14:19:23', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `lev_id` int(11) NOT NULL,
  `lev_nama` varchar(50) NOT NULL,
  `lev_keterangan` text NOT NULL,
  `lev_status` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`lev_id`, `lev_nama`, `lev_keterangan`, `lev_status`, `created_at`) VALUES
(1, 'Super Admin', 'Super Admin', 'Aktif', '2020-06-18 09:40:31');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(11) NOT NULL,
  `menu_menu_id` int(11) NOT NULL,
  `menu_nama` varchar(50) NOT NULL,
  `menu_keterangan` text NOT NULL,
  `menu_index` int(11) NOT NULL,
  `menu_icon` varchar(50) NOT NULL,
  `menu_url` varchar(100) NOT NULL,
  `menu_status` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu_id`, `menu_menu_id`, `menu_nama`, `menu_keterangan`, `menu_index`, `menu_icon`, `menu_url`, `menu_status`, `created_at`) VALUES
(2, 0, 'Pengaturan', '-', 12, 'fa fa-cogs', '#', 'Aktif', '2020-06-18 02:40:07'),
(4, 2, 'Menu', '-', 6, 'far fa-circle', 'pengaturan/menu', 'Aktif', '2020-06-18 02:40:07'),
(5, 2, 'Level', '-', 4, 'far fa-circle', 'pengaturan/level', 'Aktif', '2020-06-18 02:40:07'),
(6, 2, 'Pengguna', '-', 2, 'far fa-circle', 'pengaturan/pengguna', 'Aktif', '2020-06-18 02:40:07'),
(7, 2, 'Ganti Password', 'Ganti password', 3, 'fa fa-key', 'pengaturan/password', 'Aktif', '2021-06-28 08:34:14'),
(124, 0, 'WhatsApp', 'No whatsapp ', 3, 'fab fa-whatsapp', 'admin/whatsapp', 'Aktif', '2021-11-17 15:39:07'),
(131, 0, 'Home', '-', 2, 'fas fa-home', 'admin/home', 'Aktif', '2022-03-10 15:07:37'),
(132, 0, 'About Us', '-', 3, 'fas fa-address-card', 'admin/about', 'Aktif', '2022-03-10 15:09:53'),
(133, 0, 'Galeri', '-', 4, 'fas fa-images', 'admin/galeri', 'Aktif', '2022-03-10 15:10:59'),
(134, 0, 'Feature', '-', 5, 'fas fa-feather', 'admin/feature', 'Aktif', '2022-03-10 15:13:28'),
(136, 0, 'Testimoni', '-', 6, 'far fa-star', 'admin/testimoni', 'Aktif', '2022-03-10 15:15:13'),
(137, 0, 'Team', '-', 7, 'fas fa-user-friends', 'admin/team', 'Aktif', '2022-03-10 15:16:17'),
(138, 0, 'Kontak', '-', 8, 'fas fa-phone', 'admin/kontak', 'Aktif', '2022-03-10 15:17:30'),
(139, 0, 'Footer', '-', 9, 'far fa-file', 'admin/footer', 'Aktif', '2022-03-10 15:18:39'),
(140, 2, 'Aplikasi', '-', 0, 'far fa-circle', 'admin/pengaturan', 'Aktif', '2022-03-12 09:28:34'),
(141, 0, 'Visi dan Misi', '-', 10, 'fas fa-bullseye', 'admin/VisiMisi', 'Aktif', '2022-04-07 22:53:33'),
(142, 0, 'Produk', '-', 11, 'fas fa-store', 'admin/Produk', 'Aktif', '2022-04-08 07:22:33');

-- --------------------------------------------------------

--
-- Table structure for table `pesan_masuk`
--

CREATE TABLE `pesan_masuk` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `subject` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesan_masuk`
--

INSERT INTO `pesan_masuk` (`id`, `first_name`, `last_name`, `subject`, `email`, `message`, `created_by`, `created_at`) VALUES
(13, 'Isep Lutpi', 'Nur', 'Testing', 'super@admin.com', 'Tes messages', NULL, '2022-04-21 06:15:03'),
(14, 'dgsgsdfg', 'sdafsadf', 'Susdfadsf', 'Email@gmail.com', 'asdfasfd', NULL, '2022-04-21 06:19:02'),
(15, 'sadfsdaf', '', 'asdfasfd', 'safsadf.co@gm.f', 'sdfaasdf', NULL, '2022-04-21 06:19:27');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `foto` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `nama`, `keterangan`, `foto`, `status`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Coconut                       Briquette Charcoal', 'Desiccated Coconut is a grated, dried (3% moisture content max.), and\r\n                      unsweetened fresh meat or kernel of a mature fruit of coconut. Desiccated\r\n                      Coconuts are graded by its cutting size, for example, fine grade and medium\r\n                      grade where fine grade is smaller particle size than the medium grade.', '3d8d948035734560f75c2f8124cc0e62.png', 0, 1, 1, NULL, '2022-03-11 17:28:12', '2022-04-02 21:07:17', NULL),
(2, 'copra', 'Copra is the dried flesh of coconuts. Every adult coconut tree bears 50-75\r\n                      nuts that can be harvested, split with machetes and left to dry in the sun.\r\n                      The copra is then scraped out of the husk and gets to dry further on racks.\r\n                      Finally, it is packed in jute bags and transported to a processing facility.', '15a930f0a7dfb3b83c7e946c71d12eda.png', 0, 1, 1, NULL, '2022-03-11 17:28:36', '2022-04-02 21:07:21', NULL),
(3, 'Cocopeat', 'Cocopeat is an organic growing medium made from the rest of the processing of cocofiber, processed from the remaining powder released by the cocofiber at the time of milling.', '2689c6482dbf572912c425062dea374c.jpg', 1, 1, 1, NULL, '2022-03-11 17:29:06', '2022-04-08 14:23:58', NULL),
(4, 'Coconut Fiber', 'Coconut fiber is fiber from coconut coir that has been milled in the shape of long hair and is generally golden yellow or brown in color.', 'cf2d70fced7a80089949d838824f5450.jpg', 1, 1, 1, NULL, '2022-03-11 17:31:04', '2022-04-08 14:23:21', NULL),
(6, 'Copra Meal', 'Coconut meal or copra meal is produced from the ripe fruit (nut) of the\r\n                      coconut palm (Cocos nucifera). The nut is split and the kernel is removed\r\n                      and dried below 6% moisture. This meal is called copra meal and still\r\n                      contains the oil.', '20fe240fbfc73bdf4bcd7b822087165c.png', 0, 1, 1, NULL, '2022-03-11 17:31:37', '2022-04-02 21:07:13', NULL),
(7, 'Coconut                       Peat Blocks', 'Cocopeat blocks are considered an ideal growing medium. The cocopeat powder\r\n                      thus obtained is sieved, washed, dried and finally compressed into blocks.\r\n                      The blocks can be used for a wide range of planting requirements. Coir is\r\n                      known for its natural rooting hormones and anti-fungal properties. We also\r\n                      ensure secure packaging of the cocopeat blocks.', '243d07c98e0131f35a1f4dd362bb59d3.png', 0, 1, 1, NULL, '2022-03-11 17:31:53', '2022-04-02 21:07:09', NULL),
(8, 'Desinccated                       Coconut', 'Desiccated Coconut is a grated, dried (3% moisture content max.), and\r\n                      unsweetened fresh meat or kernel of a mature fruit of coconut. Desiccated\r\n                      Coconuts are graded by its cutting size, for example, fine grade and medium\r\n                      grade where fine grade is smaller particle size than the medium grade.', '', 0, 1, 1, NULL, '2022-03-11 17:32:06', '2022-04-02 21:05:54', NULL),
(9, 'Virgin                       Coconut Oil', 'Virgin coconut oil is the oil extracted from coconuts without the application\r\n                      of heat. It is rapidly gaining popularity throughout the world in comparison\r\n                      to ordinary coconut oil and for a good reason. There is, in fact, a\r\n                      substance called virgin coconut oil and it differs from regular coconut oil\r\n                      in significant ways. These differences mainly lie with the source (more\r\n                      specifically, the physical form of the source), the method of extraction,\r\n                      and its subsequent benefits.', 'a8cc9786a9abe99de0fa4c8236ad976f.png', 0, 1, 1, NULL, '2022-03-11 17:32:31', '2022-04-02 21:05:43', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_aplikasi`
--

CREATE TABLE `role_aplikasi` (
  `rola_id` int(11) NOT NULL,
  `rola_menu_id` int(11) NOT NULL,
  `rola_lev_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role_aplikasi`
--

INSERT INTO `role_aplikasi` (`rola_id`, `rola_menu_id`, `rola_lev_id`, `created_at`) VALUES
(234, 6, 1, '2021-10-28 22:24:57'),
(235, 7, 1, '2021-10-28 22:25:00'),
(236, 5, 1, '2021-10-28 22:25:01'),
(238, 4, 1, '2021-10-28 22:25:03'),
(239, 2, 1, '2021-10-28 22:25:10'),
(242, 1, 127, '2021-10-28 23:56:31'),
(244, 117, 1, '2021-11-14 15:59:39'),
(245, 116, 1, '2021-11-14 15:59:40'),
(248, 120, 1, '2021-11-15 14:55:54'),
(249, 121, 1, '2021-11-15 14:55:55'),
(250, 122, 1, '2021-11-15 14:55:56'),
(251, 123, 1, '2021-11-15 14:55:56'),
(252, 124, 1, '2021-11-17 15:39:14'),
(254, 127, 1, '2021-11-19 08:07:42'),
(255, 128, 1, '2021-11-19 08:08:51'),
(256, 129, 1, '2021-11-24 15:45:20'),
(257, 130, 1, '2021-11-25 21:01:35'),
(258, 115, 1, '2022-03-10 15:19:22'),
(259, 132, 1, '2022-03-10 15:19:23'),
(260, 134, 1, '2022-03-10 15:19:24'),
(261, 136, 1, '2022-03-10 15:19:25'),
(262, 138, 1, '2022-03-10 15:19:25'),
(263, 139, 1, '2022-03-10 15:19:26'),
(264, 137, 1, '2022-03-10 15:19:27'),
(265, 135, 1, '2022-03-10 15:19:27'),
(266, 133, 1, '2022-03-10 15:19:28'),
(272, 131, 1, '2022-03-10 16:16:12'),
(273, 140, 1, '2022-03-12 09:28:45'),
(274, 141, 1, '2022-04-07 22:54:55'),
(275, 142, 1, '2022-04-08 07:22:39');

-- --------------------------------------------------------

--
-- Table structure for table `role_users`
--

CREATE TABLE `role_users` (
  `role_id` int(11) NOT NULL,
  `role_user_id` int(11) NOT NULL,
  `role_lev_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role_users`
--

INSERT INTO `role_users` (`role_id`, `role_user_id`, `role_lev_id`, `created_at`) VALUES
(1, 1, 1, '2020-06-18 09:39:26');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `jabatan` text DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `foto` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `nama`, `jabatan`, `keterangan`, `foto`, `status`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Ben Folklore', 'Photographer / Model', 'In hac habitasse platea dictumst. Suspendisse non tellus ligula. Morbi\r\n                      molestie feugiat tortor a hendrerit.', '510aee7ff2f737623538becbf3305692.png', 1, 1, 1, NULL, '2022-03-11 19:59:58', '2022-03-11 20:01:13', NULL),
(2, 'Julio', 'Founder', 'Our faith is the substance of our future. There is no big success without big\r\n                      sacrifice.', '13fa2294dde195bb40ca4947bc398343.png', 1, 1, 1, NULL, '2022-03-11 20:01:02', '2022-03-11 20:01:32', NULL),
(3, 'Alhafis Wijaya', 'Co-Founder', 'Many of life\'s failures are people who did not realize how close they were to\r\n                      success when they gave up.', '530ba89542510fff2df228fe42491918.png', 1, 1, NULL, NULL, '2022-03-11 20:02:13', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `testimoni`
--

CREATE TABLE `testimoni` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `jabatan` text DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `nilai` int(11) NOT NULL DEFAULT 0,
  `foto` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimoni`
--

INSERT INTO `testimoni` (`id`, `nama`, `jabatan`, `keterangan`, `nilai`, `foto`, `status`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Goria Coast', 'Digital Marketing Executive', 'Human coronaviruses are\r\n                    common and are typically associated with mild illnesses, similar to the common\r\n                    cold.', 5, '9a35817082cdf4e6008b645275ca9761.png', 1, 1, 1, NULL, '2022-03-11 17:47:39', '2022-03-11 17:47:51', NULL),
(2, 'Thomas Smith', 'Digital Marketing Executive', 'Human coronaviruses are\r\n                    common and are typically associated with mild illnesses, similar to the common\r\n                    cold.', 4, '236a9a7ab1643bec2ec5ba6382a84609.png', 1, 1, NULL, NULL, '2022-03-11 17:57:47', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `id_partner` int(11) DEFAULT NULL,
  `nik` varchar(30) DEFAULT NULL,
  `user_nama` varchar(50) NOT NULL,
  `user_tgl_lahir` date DEFAULT NULL,
  `user_jk` enum('Laki-Laki','Perempuan') DEFAULT NULL COMMENT 'Jenis Kelamin',
  `user_password` varchar(100) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_email_status` enum('0','1') NOT NULL DEFAULT '0' COMMENT '0 Belum Diverifikasi | 1 Sudah Diverifikasi',
  `user_phone` varchar(15) NOT NULL,
  `user_foto` varchar(255) DEFAULT NULL,
  `user_status` int(1) NOT NULL DEFAULT 0 COMMENT '0 Tidak Aktif | 1 Aktif | 2 Pendding | 3 deleted',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `id_partner`, `nik`, `user_nama`, `user_tgl_lahir`, `user_jk`, `user_password`, `user_email`, `user_email_status`, `user_phone`, `user_foto`, `user_status`, `created_at`, `updated_at`) VALUES
(1, NULL, '1', 'Administrator', NULL, NULL, '$2y$10$34NjNNzrzOHiYA/Wc54tt.n3TB9abQUM065ZueEMd/LDw2NewOFoG', 'administrator@gmail.com', '1', '08123123', NULL, 1, '2020-06-18 09:39:08', '2020-06-18 09:39:08');

-- --------------------------------------------------------

--
-- Table structure for table `whatsapp`
--

CREATE TABLE `whatsapp` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text NOT NULL,
  `number` varchar(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 0 COMMENT '0 Tidak aktif, 1 aktif',
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `whatsapp`
--

INSERT INTO `whatsapp` (`id`, `name`, `description`, `number`, `status`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Bayu Aji', 'Admin WA', '81313585759', 1, 1, 1, NULL, '2021-11-18 00:58:52', '2022-04-08 15:36:31', NULL),
(4, 'Nomor 2', 'Tes dua', '858578996321', 3, 1, 1, 1, '2021-11-18 01:05:30', '2021-11-24 22:05:59', '2021-11-24 22:05:59'),
(5, 'no 3', '', '123', 3, 1, 1, 1, '2021-11-18 01:15:56', '2021-11-24 22:06:04', '2021-11-24 22:06:04'),
(6, 'Isep Lutpi Nur', 'Tes', '85798132505', 0, 1, NULL, NULL, '2022-03-10 23:08:47', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feature`
--
ALTER TABLE `feature`
  ADD PRIMARY KEY (`id`),
  ADD KEY `created_by` (`created_by`),
  ADD KEY `updated_by` (`updated_by`),
  ADD KEY `deleted_by` (`deleted_by`);

--
-- Indexes for table `footer_sosmed`
--
ALTER TABLE `footer_sosmed`
  ADD PRIMARY KEY (`id`),
  ADD KEY `created_by` (`created_by`),
  ADD KEY `updated_by` (`updated_by`),
  ADD KEY `deleted_by` (`deleted_by`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`),
  ADD KEY `created_by` (`created_by`),
  ADD KEY `updated_by` (`updated_by`),
  ADD KEY `deleted_by` (`deleted_by`);

--
-- Indexes for table `key_value`
--
ALTER TABLE `key_value`
  ADD PRIMARY KEY (`key`),
  ADD KEY `created_by` (`created_by`),
  ADD KEY `updated_by` (`updated_by`),
  ADD KEY `deleted_by` (`deleted_by`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`lev_id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `pesan_masuk`
--
ALTER TABLE `pesan_masuk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `created_by` (`created_by`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `created_by` (`created_by`),
  ADD KEY `updated_by` (`updated_by`),
  ADD KEY `deleted_by` (`deleted_by`);

--
-- Indexes for table `role_aplikasi`
--
ALTER TABLE `role_aplikasi`
  ADD PRIMARY KEY (`rola_id`);

--
-- Indexes for table `role_users`
--
ALTER TABLE `role_users`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`),
  ADD KEY `created_by` (`created_by`),
  ADD KEY `updated_by` (`updated_by`),
  ADD KEY `deleted_by` (`deleted_by`);

--
-- Indexes for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id`),
  ADD KEY `created_by` (`created_by`),
  ADD KEY `updated_by` (`updated_by`),
  ADD KEY `deleted_by` (`deleted_by`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- Indexes for table `whatsapp`
--
ALTER TABLE `whatsapp`
  ADD PRIMARY KEY (`id`),
  ADD KEY `created_by` (`created_by`),
  ADD KEY `updated_by` (`updated_by`),
  ADD KEY `deleted_by` (`deleted_by`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feature`
--
ALTER TABLE `feature`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `footer_sosmed`
--
ALTER TABLE `footer_sosmed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `lev_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;

--
-- AUTO_INCREMENT for table `pesan_masuk`
--
ALTER TABLE `pesan_masuk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `role_aplikasi`
--
ALTER TABLE `role_aplikasi`
  MODIFY `rola_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=276;

--
-- AUTO_INCREMENT for table `role_users`
--
ALTER TABLE `role_users`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `whatsapp`
--
ALTER TABLE `whatsapp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `feature`
--
ALTER TABLE `feature`
  ADD CONSTRAINT `feature_ibfk_1` FOREIGN KEY (`created_by`) REFERENCES `users` (`user_id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `feature_ibfk_2` FOREIGN KEY (`updated_by`) REFERENCES `users` (`user_id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `feature_ibfk_3` FOREIGN KEY (`deleted_by`) REFERENCES `users` (`user_id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `footer_sosmed`
--
ALTER TABLE `footer_sosmed`
  ADD CONSTRAINT `footer_sosmed_ibfk_1` FOREIGN KEY (`created_by`) REFERENCES `users` (`user_id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `footer_sosmed_ibfk_2` FOREIGN KEY (`updated_by`) REFERENCES `users` (`user_id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `footer_sosmed_ibfk_3` FOREIGN KEY (`deleted_by`) REFERENCES `users` (`user_id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `galeri`
--
ALTER TABLE `galeri`
  ADD CONSTRAINT `galeri_ibfk_1` FOREIGN KEY (`created_by`) REFERENCES `users` (`user_id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `galeri_ibfk_2` FOREIGN KEY (`updated_by`) REFERENCES `users` (`user_id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `galeri_ibfk_3` FOREIGN KEY (`deleted_by`) REFERENCES `users` (`user_id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `key_value`
--
ALTER TABLE `key_value`
  ADD CONSTRAINT `key_value_ibfk_2` FOREIGN KEY (`created_by`) REFERENCES `users` (`user_id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `key_value_ibfk_3` FOREIGN KEY (`updated_by`) REFERENCES `users` (`user_id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `key_value_ibfk_4` FOREIGN KEY (`deleted_by`) REFERENCES `users` (`user_id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `pesan_masuk`
--
ALTER TABLE `pesan_masuk`
  ADD CONSTRAINT `pesan_masuk_ibfk_1` FOREIGN KEY (`created_by`) REFERENCES `users` (`user_id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`created_by`) REFERENCES `users` (`user_id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `produk_ibfk_2` FOREIGN KEY (`updated_by`) REFERENCES `users` (`user_id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `produk_ibfk_3` FOREIGN KEY (`deleted_by`) REFERENCES `users` (`user_id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `team`
--
ALTER TABLE `team`
  ADD CONSTRAINT `team_ibfk_1` FOREIGN KEY (`created_by`) REFERENCES `users` (`user_id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `team_ibfk_2` FOREIGN KEY (`updated_by`) REFERENCES `users` (`user_id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `team_ibfk_3` FOREIGN KEY (`deleted_by`) REFERENCES `users` (`user_id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD CONSTRAINT `testimoni_ibfk_1` FOREIGN KEY (`created_by`) REFERENCES `users` (`user_id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `testimoni_ibfk_2` FOREIGN KEY (`updated_by`) REFERENCES `users` (`user_id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `testimoni_ibfk_3` FOREIGN KEY (`deleted_by`) REFERENCES `users` (`user_id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `whatsapp`
--
ALTER TABLE `whatsapp`
  ADD CONSTRAINT `whatsapp_ibfk_2` FOREIGN KEY (`created_by`) REFERENCES `users` (`user_id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `whatsapp_ibfk_3` FOREIGN KEY (`updated_by`) REFERENCES `users` (`user_id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `whatsapp_ibfk_4` FOREIGN KEY (`deleted_by`) REFERENCES `users` (`user_id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;
