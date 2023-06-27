-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2022 at 06:57 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rent_kanojo`
--

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nomor` varchar(255) NOT NULL,
  `usia` int(11) NOT NULL,
  `kanojoo` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `tempat` varchar(255) NOT NULL,
  `record` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id_pemesanan`, `nama`, `nomor`, `usia`, `kanojoo`, `tanggal`, `tempat`, `record`) VALUES
(125, 'rein', '081234567890', 19, 'Setsuna', '30 November jam 15.00', 'Depan Stasium', '2022-11-28 04:41:55'),
(126, 'rava', '081138423902', 20, 'Asuna', '1 Desember jam 10.00', 'Taman', '2022-11-28 04:42:39'),
(127, 'afif', '081231221322', 18, 'Chisato', '4 Desember jam 13.00', 'Stasiun', '2022-11-28 04:43:57'),
(128, 'rava', '081234567891', 18, 'Ayaka', '24 Desember Jam 15.00', 'Taman', '2022-11-28 05:10:42'),
(129, 'bayu', '081224586591', 19, 'Akari', '5 Desember Jam 10.00', 'Stasiun', '2022-11-28 05:10:42'),
(130, 'banzai', '081223467891', 21, 'Chisato', '2 Desember Jam 15.00', 'Terminal', '2022-11-28 05:10:42'),
(131, 'yui', '081234234561', 23, 'Setsuna', '9 Desember Jam 15.00', 'Taman', '2022-11-28 05:10:42'),
(132, 'andi', '081234342291', 23, 'Ayaka', '10 Desember Jam 15.00', 'Taman', '2022-11-28 05:10:42'),
(133, 'lia', '081238567891', 18, 'Chisato', '24 Desember Jam 18.00', 'Terminal', '2022-11-28 05:10:42'),
(134, 'teis', '081234562341', 17, 'Setsuna', '24 Desember Jam 18.00', 'Taman', '2022-11-28 05:10:42'),
(135, 'galang', '081234234323', 22, 'Aqua', '24 Desember Jam 18.00', 'Stasiun', '2022-11-28 05:10:42'),
(136, 'gura', '081238675554', 21, 'Setsuna', '4 Desember Jam 15.00', 'Taman', '2022-11-28 05:10:42'),
(137, 'tanjiro', '081234458763', 18, 'Chisato', '9 Desember Jam 15.00', 'Terminal', '2022-11-28 05:10:42'),
(138, 'kobo', '081234523940', 21, 'Aqua', '25 Desember Jam 18.00', 'Taman', '2022-11-28 05:10:42'),
(139, 'moona', '081234123471', 18, 'Ayaka', '25 Desember Jam 18.00', 'Terminal', '2022-11-28 05:10:42'),
(140, 'dafa', '081234123849', 17, 'Alice', '10 Desember Jam 15.00', 'Taman', '2022-11-28 05:10:42'),
(141, 'kipli', '082359421232', 18, 'Chisato', '10 Desember Jam 15.00', 'Taman', '2022-11-28 05:10:42'),
(142, 'kaede', '081234562234', 21, 'Chisato', '22 Desember Jam 18.00', 'Stasiun', '2022-11-28 05:10:42'),
(143, 'apip', '081234748392', 19, 'Aqua', '26 Desember Jam 18.00', 'Terminal', '2022-11-28 05:10:42'),
(144, 'sova', '081275849323', 21, 'Ayaka', '11 Desember Jam 15.00', 'Taman', '2022-11-28 05:10:42'),
(145, 'diluc', '081237584393', 18, 'Setsuna', '5 Desember Jam 18.00', 'Stasiun', '2022-11-28 05:10:42'),
(146, 'danang', '081345322556', 17, 'Chisato', '3 Desember Jam 18.00', 'Taman', '2022-11-28 05:10:42'),
(147, 'arif', '081231234135', 18, 'Asuna', '9 Desember Jam 15.00', 'Taman', '2022-11-28 05:10:42'),
(148, 'kazuya', '083456675435', 23, 'Rui', '26 Desember Jam 18.00', 'Stasiun', '2022-11-28 05:10:42'),
(149, 'keya', '081654324351', 18, 'Chisato', '1 Desember Jam 18.00', 'Terminal', '2022-11-28 05:10:42'),
(150, 'xiao', '085478930232', 23, 'Rui', '10 Desember Jam 15.00', 'Taman', '2022-11-28 05:10:42'),
(151, 'gandalf', '082489302937', 22, 'Alice', '24 Desember Jam 18.00', 'Taman', '2022-11-28 05:10:42'),
(152, 'tomo', '082748392123', 19, 'Chisato', '6 Desember Jam 15.00', 'Stasiun', '2022-11-28 05:10:42'),
(153, 'kirito', '087382901134', 17, 'Chisato', '21 Desember Jam 18.00', 'Taman', '2022-11-28 05:10:42'),
(154, 'chamber', '081743782903', 19, 'Rui', '11 Desember Jam 15.00', 'Taman', '2022-11-28 05:10:42'),
(155, 'kayaba', '087281891925', 23, 'Asuna', '24 Desember Jam 18.00', 'Stasiun', '2022-11-28 05:10:42'),
(156, 'akihiko', '081724234653', 18, 'Chisato', '30 Desember Jam 18.00', 'Taman', '2022-11-28 05:10:42'),
(157, 'nasa', '081678293234', 19, 'Rui', '9 Desember Jam 15.00', 'Terminal', '2022-11-28 05:10:42'),
(158, 'izumi', '087839215244', 17, 'Rui', '12 Desember Jam 15.00', 'Taman', '2022-11-28 05:10:42'),
(159, 'roger', '087839214231', 18, 'Chisato', '15 Desember Jam 18.00', 'Stasiun', '2022-11-28 05:10:42'),
(160, 'yanu', '081178390424', 17, 'Setsuna', '26 Desember Jam 18.00', 'Taman', '2022-11-28 05:10:42'),
(161, 'firman', '081498324134', 19, 'Chisato', '14 Desember Jam 15.00', 'Taman', '2022-11-28 05:10:42'),
(162, 'bagas', '081284930241', 19, 'Rui', '13 Desember Jam 18.00', 'Stasiun', '2022-11-28 05:10:42'),
(163, 'ito', '081229023412', 18, 'Ayaka', '5 Desember Jam 18.00', 'Terminal', '2022-11-28 05:10:42'),
(164, 'rendi', '081213489234', 22, 'Asuna', '10 Desember Jam 15.00', 'Stasiun', '2022-11-28 05:10:42'),
(165, 'zidan', '081173891421', 18, 'Chisato', '16 Desember Jam 18.00', 'Taman', '2022-11-28 05:10:42'),
(166, 'rehan', '081278193043', 22, 'Rui', '14 Desember Jam 15.00', 'Stasiun', '2022-11-28 05:10:42'),
(167, 'upi', '081781394123', 18, 'Rui', '15 Desember Jam 18.00', 'Taman', '2022-11-28 05:10:42'),
(168, 'kevin', '081218903423', 22, 'Chisato', '12 Desember Jam 18.00', 'Terminal', '2022-11-28 05:10:42');

-- --------------------------------------------------------

--
-- Table structure for table `talent`
--

CREATE TABLE `talent` (
  `id_talent` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `lahir` varchar(255) NOT NULL,
  `hobi` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `talent`
--

INSERT INTO `talent` (`id_talent`, `nama`, `lahir`, `hobi`, `keterangan`) VALUES
(116, 'Asuka', '25 Desember', 'Bermain Bass', 'Tidak aktif'),
(117, 'Ayaka', '28 September', 'Menari', 'Aktif'),
(118, 'Asuna', '30 September', 'Memasak', 'Aktif'),
(119, 'Akame', '5 Maret', 'Berkelana', 'Tidak aktif'),
(120, 'Alice', '9 April', 'Memasak', 'Aktif'),
(121, 'Akari', '24 Juli', 'Bernyanyi', 'Tidak aktif'),
(122, 'Aqua', '1 Agustus', 'Menari', 'Aktif'),
(123, 'Ayumu', '1 Maret', 'Bernyanyi', 'Aktif'),
(124, 'Chisato', '23 September', 'Memasak', 'Aktif'),
(125, 'Chizuru', '19 April', 'Akting', 'Aktif'),
(126, 'Chitoge', '7 Juli', 'Makan', 'Tidak aktif'),
(127, 'Chika', '3 Maret', 'Menari', 'Aktif'),
(128, 'Chloe', '29 Februari', 'Bernyanyi', 'Aktif'),
(129, 'Carina', '7 Maret', 'Mencuri', 'Tidak aktif'),
(130, 'Camie', '3 November', 'Memasak', 'Tidak aktif'),
(131, 'Carrot', '24 Mei', 'Makan', 'Tidak aktif'),
(132, 'Rika', '21 Mei', 'Cosplay', 'Tidak aktif'),
(133, 'Rui', '18 Desember', 'Memasak', 'Aktif'),
(134, 'Ruka', '22 November', 'Akting', 'Aktif'),
(135, 'Rias', '30 April', 'Olahraga', 'Aktif'),
(136, 'Ram', '22 September', 'Traveling', 'Tidak aktif'),
(137, 'Rem', '22 September', 'Olahraga', 'Aktif'),
(138, 'Riko', '17 Oktober', 'Bernyanyi', 'Tidak aktif'),
(139, 'Rena', '5 Maret', 'Bernyanyi', 'Tidak aktif'),
(140, 'Sinon', '5 Maret', 'Bernyanyi', 'Aktif'),
(141, 'Sakura', '10 Februari', 'Memasak', 'Tidak aktif'),
(142, 'Shinoa', '29 Agustus', 'Olahraga', 'Aktif'),
(143, 'Sagiri', '17 April', 'Menggambar', 'Tidak aktif'),
(144, 'Sayu', '20 Januari', 'Traveling', 'Aktif'),
(145, 'Setsuna', '29 Juni', 'Olahraga', 'Aktif'),
(146, 'Shion', '17 Oktober', 'Bernyanyi', 'Tidak aktif'),
(147, 'Suzuka', '5 Maret', 'Bernyanyi', 'Tidak aktif');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `level` varchar(255) DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `email`, `level`) VALUES
(117, 'aku', '$2y$10$jN8yDSOSP1GmRN97FGNhUumAgclcHVkS4Ieh2EUfu7BFgCbPcCEI.', 'aku@gmail.com', 'user'),
(118, 'Sayaorang', '$2y$10$GtZMx8U9C5g1tmpq8qWEjOYrsX9NuTTVCqvEC2BBhQjU7g.RS/5xa', 'Sayaorang@gmail.com', 'user'),
(120, 'banzai', '$2y$10$yGYOovPn4OwRwGei6HFdmORpX9R3rI./Q.Nsybv/BVxrlG/HbGSji', 'banzai@gmail.com', 'user'),
(121, 'yui', '$2y$10$eCnFUbemySNctHwg6csGYeO.HjFvEF7W0TaZ8q1sy2x5kyBeEpp2e', 'yui@gmail.com', 'user'),
(122, 'yuis', '$2y$10$pbIsOwNrYrwbMUzClutI/OGfb9n1Wy7b.ZADFVvdiDddK9PO9Asbu', 'yuis@gmail.com', 'user'),
(127, 'admin', '$2y$10$uLuH7kEED7mWQsLUKsHcg.O9l2XIUIAZt0KK2dy5RY94SJ6Aqs1wO', 'admin@gmail.com', 'admin'),
(128, 'andi', '$2y$10$aY7m.ZCAvoNUwxLQY2Ejy.RiatMnaWmj3fXKv/anBX1qJW/WKNIha', 'andi@gmail.com', 'user'),
(129, 'lia', '$2y$10$b.K5u39F./5sB2FtpaUpK.E4MbvulepOEdZIqtJF4i62ouiFSKcLG', 'lia@gmail.com', 'user'),
(130, 'teis', '$2y$10$w.Lu8WQ2sLdIjwysoPitv.MIommbw2uc0Z4c/PfrV.oD6H76AQlqG', 'teis@gmail.com', 'user'),
(131, 'bayu', '$2y$10$5/8VuanIPE0AE96.yVyPhe6MVPj17cMvqfkY.6LjOnQhzGD.T7sLm', 'bayu@gmail.com', 'user'),
(132, 'galang', '$2y$10$lAv7bmyLl69vyasXFdpeQuDydTsbqx23H0.WPmJuHVMcXKQtYO9da', 'galang@gmail.com', 'user'),
(133, 'gura', '$2y$10$HcsJDmgvstB8qqCOpq64Iea/lLnUnr3o4VclugOJqMZiJPmhpz/li', 'gura@gmail.com', 'user'),
(134, 'tanjiro', '$2y$10$a5muni7KTfzc5meTg4KIpuV6.gFVGXUq8AX5uHm1IyY5L15/hfjRK', 'tanjiro@gmail.com', 'user'),
(135, 'kobo', '$2y$10$NviRpt26YxFMCNQJdMtimufyJncqVVen1AxwJeQN0dbq4XCbzpxUq', 'kobo@gmail.com', 'user'),
(136, 'moona', '$2y$10$65/0IWrvn0nt1VkmCohUWOLF7NRppzvTtRt1zIZPCdq3118Wc0mY.', 'moona@gmail.com', 'user'),
(137, 'dafa', '$2y$10$jma2D1NYEbsFF7dH994esuIydomrSH2achmxjQiVhWUMXHGMdej42', 'dafa@gmail.com', 'user'),
(138, 'kipli', '$2y$10$fnwhytnKcx4xSx6ClyraU.d/A4icplMMLB4ClaZQTK1POb7Xt8NZm', 'kipli@gmail.com', 'user'),
(139, 'kaede', '$2y$10$w2vPv4uhd0dwI7i6vxEgJe5cZ/WtBJwwjWyCRHDdUfyZLcXfxBHDu', 'kaede@gmail.com', 'user'),
(140, 'apip', '$2y$10$o3tNkzCvBTmvhrtWp3b6xu8KWn7Btp7NOcVuVCi4bUvdduvZQaAiS', 'apip@gmail.com', 'user'),
(141, 'sova', '$2y$10$kCUhOGJXDx09QReQfTQeeua.OoOhZbb3DAVawtojRo8A3BXUZWUBC', 'sova@gmail.com', 'user'),
(142, 'diluc', '$2y$10$.Bo9wiVobXmcudlhFsGAIePF8aYq6/Eu5w/CNO87SkZAoIFRtbGBy', 'diluc@gmail.com', 'user'),
(143, 'danang', '$2y$10$AbM.2WyFvQdcVTc2JeC6quKblLxOezNVAFr3T5Ax6ZBg9AvD0pvtu', 'danang@gmail.com', 'user'),
(144, 'arif', '$2y$10$aS0voe5UoZRAli0ALPY3leN7PHgSYawDNXABZx9C/Fq.2Z04gAv0O', 'arif@gmail.com', 'user'),
(145, 'kazuya', '$2y$10$TN0vf8Ub1JT/Yzt1kZeVrez0q0ySrhDVNMh2iipsXWlfoIh6RsNHm', 'kazuya@gmail.com', 'user'),
(146, 'keya', '$2y$10$WDzY0jP4KlOi4x1iD64BDeSx6PqatbeFA16rltONMD0C30BkDS/cC', 'keya@gmail.com', 'user'),
(147, 'xiao', '$2y$10$W69SHvhYk3S47ZrlNe18XOmuhk5cQWbkxT5y2qpYP7s2y72T.7v/u', 'xiao@gmail.com', 'user'),
(148, 'gandalf', '$2y$10$2ePm/nt0ocAkTrpRoxqKt.AqMOvsszZQVRMjRFBbFtEPG70lGsX1a', 'gandalf@gmail.com', 'user'),
(149, 'tomo', '$2y$10$NaB4tqiJ3w5CyuZpKMFzUuL3B/hXwz3chblito9gQydqW.MnXNYI.', 'tomo@gmail.com', 'user'),
(150, 'tomoya', '$2y$10$rCTsfoBj6VxyXd84GE/G4OCTeVet22fygX4bv21vhaZ/J87wtUr0S', 'tomoya@gmail.com', 'user'),
(151, 'kirito', '$2y$10$lc8klFD1pDHvYEPRkzkG2Omod2gnYElJZggmFFOrL25VgT7WN7R.O', 'kirito@gmail.com', 'user'),
(152, 'chamber', '$2y$10$02ieYnnOyyYlS24yYwmY.uR5ceO5wQJi4ij.G2MGkkz/9xlqVM5Zi', 'chamber@gmail.com', 'user'),
(153, 'kayaba', '$2y$10$JPVjk8vYWm1WojyzYTT3leWiJskrcBXU5eUS0XGDiUEQ0D3h9BlAe', 'kayaba@gmail.com', 'user'),
(154, 'akihiko', '$2y$10$ZjeNiP2FnbEZz.S7z17EXe55sAU2pomzVlFxSEGjVkYNk7NF4cnia', 'akihiko@gmail.com', 'user'),
(155, 'nasa', '$2y$10$KEsYnir2nAubp2HvT9QDguZea43/vj4SheqBV8n2bcyHXDuaFoJpy', 'nasa@gmail.com', 'user'),
(156, 'rui', '$2y$10$fJAICDyCfiYOfdHBJPec/.iSk9mJSkscpJe7wXSNuOjq.jeD75JHS', 'rui@gmail.com', 'user'),
(157, 'izumi', '$2y$10$bujbw3Zn2e/tWl7t/qcs8enIEIn9SDkn9qIl7tA.e8/BBkBBOtXLa', 'izumi@gmail.com', 'user'),
(158, 'roger', '$2y$10$6WhBiJ56xfZrzZCmnB2OBOQ.C66ow2G.T9uuaM8P/HFGpsOsujXq.', 'roger@gmail.com', 'user'),
(159, 'yanu', '$2y$10$dJiho5rJa1DpDnn.rNmHG.slebQJol5ugNx3B6UnH0VWDzY6Wga1q', 'yanu@gmail.com', 'user'),
(160, 'firman', '$2y$10$zrYyrObbq6tC7kLoertC8eDT3pgU0.yOTndCyF9LyHMq7uyz9pQ7u', 'firman@gmail.com', 'user'),
(161, 'bagas', '$2y$10$isJZtol3DzHgHxAuSYhRTuuyQOzqW4RO7.K4HhfgsZPSYsRthu8JK', 'bagas@gmail.com', 'user'),
(162, 'ito', '$2y$10$mhixS0hxC1HUyqdisO29VOt/IODgstBjZotkK65BJa1zvis2.PMDO', 'ito@gmail.com', 'user'),
(163, 'rendi', '$2y$10$q/La0R1uJiNyQ5QhesSDq.0oshlAYCwsb2Jl.ctCkXFxfJfZk0z/e', 'rendi@gmail.com', 'user'),
(164, 'zidan', '$2y$10$4zMBpWmxzK1GZeFTq3SopeoS9gVxgn4RAINygtFJ1gk7p/wX/zhsq', 'zidan@gmail.com', 'user'),
(165, 'rehan', '$2y$10$L3etiYotJYtg8mtVFBnxQ./1ImIMqHQjcmj9eRpvEZLPoqfHkdEb.', 'rehan@gmail.com', 'user'),
(166, 'upi', '$2y$10$OH9r78QdsSYYPE0WOv.aiu7fohOzMHvLsZnVJhzgD8r8Fm679SnwG', 'upi@gmail.com', 'user'),
(167, 'kevin', '$2y$10$yEAzhf11OtdJUcb6C/kJGOoTS6Ko43EvpgdD6S8J4s6rGtvhO/r3O', 'kevin@gmail.com', 'user'),
(168, 'cid', '$2y$10$unngtpAMO0qwxt1PKnyf3eI2HNdN3m15H9KaIDkFtbYLdWGxZEhn6', 'cid@gmail.com', 'user'),
(169, 'kageno', '$2y$10$vUgrlgqVS9.1WMcKQoBgFegknapABVbwHQ981o7tuTY3K6BeVjOJG', 'kageno@gmail.com', 'user'),
(170, 'upin', '$2y$10$SkjZgydFL9AssnsId2n0Ru3GfHl9F0BB0HNaKEJDVO/Gcrbe/IDte', 'upin@gmail.com', 'user'),
(171, 'ipin', '$2y$10$pDM0P2UrfXI7MciViOI2FuRuFMw5OkN6oCplgSRnpunmID3ojA7VS', 'ipin@gmail.com', 'user'),
(175, 'garit', '$2y$10$x9HXmjYmxDmf4VoY9UQLe.Dh8F9QGfS1PkzeoCbqMx51QrI1NMYwa', 'garit@gmail.com', 'user'),
(176, 'manca', '$2y$10$mzMnieoK7tmghEGzU3FTV.atQJfN0C3GSq8w/N3eKq5nNV294/TPW', 'monica@gmail.com', 'user'),
(179, 'alfin', '$2y$10$lTGnySGK5lAYfw2FvYtIE.riAxvdMiSzGbFr9qFgs0C3RoKMcIZ0i', 'alfin@gmail.com', 'user'),
(180, 'ivan', '$2y$10$D/tRkLYJ1YjEcWb/2X/bzuLIV94LKq8kzXdhDs88OjDVKDjn5LRM.', 'ivan@gmail.com', 'user'),
(181, 'naruto', '$2y$10$4xXH3XqASSIERkxFUZOl/e69K9UZX7Jpb3MKVp7wZC/ya8wRlqA2O', 'naruto@gmail.com', 'user'),
(182, 'sasuke', '$2y$10$GkTzWxoCusf1YKspB7Vpkumm3LSsXRy2fgixGWvtRNwDT2O7nKOwy', 'sasuke@gmail.com', 'user'),
(183, 'goku', '$2y$10$2gghOr89l.fhiWTc.EgJ8.rjVOBpNl57FOibflpDkoT5LwfSdzZHS', 'goku@gmail.com', 'user'),
(184, 'kakashi', '$2y$10$G9cMYEblq6KB5aMT3h8gGuwFSoHtfN97B3BxkJW0Cs769PtXGnwSi', 'kakashi@gmail.com', 'user'),
(185, 'luki', '$2y$10$KSimj7lKrBfXS7yO5Mkb7OEwLRMvzpi975wjuS1N/Uk32b.K6s0Fe', 'luki@gmail.com', 'user'),
(186, 'sunari', '$2y$10$/tc4zXMVTQcClCU9rL7jSOEF9WcBHKvb2sdYcDTyWxAadoZ3Tdvo.', 'sunari@gmail.com', 'user'),
(187, 'david', '$2y$10$ZaqY1RJoUcnQ61VSvqb2TugDCh6zUHdKgT4S8HOfTIm0k5kWeir0G', 'david@gmail.com', 'user'),
(188, 'gorou', '$2y$10$W0dpB4stu7Ym.C2cClb/neWmwtrNgiRqF6o10181rOp91Oe0dfWJO', 'gorou@gmail.com', 'user'),
(189, 'bennet', '$2y$10$tbsnhXLdoqU7dNc1SUVTcusDwqBb85mPA00B9JWbTkauXfBMHjdfy', 'bennet@gmail.com', 'user'),
(190, 'denji', '$2y$10$6kErT3.JdWyaK4OwnBgavuxtxBb3Sofa4Fj1BFiujUSqGCMeAUtKO', 'denji@gmail.com', 'user'),
(191, 'senja', '$2y$10$szC0RE5tG1Z.O044O8PmL.OBUhiMqHRezoBvyvt2WfSIdZdA2xHy6', 'senja@gmail.com', 'user'),
(192, 'gojo', '$2y$10$SLTzIBPtNLDu2KRBiTzx3u5VmVqJEabUrWiPnbWa.LP0V4gHfBJI.', 'gojo@gmail.com', 'user'),
(193, 'loid', '$2y$10$3jTlpRYcMNfgLEZOZ6PWvOk2aDxYB5EMMn0LkNuML2p2tNWPERcJu', 'loid@gmail.com', 'user'),
(194, 'firza', '$2y$10$76c3OhRa8/L1iYTPxBhzbORqMmQOPRzLw.n9jmnIyz/L0zEzWhA.a', 'firza@gmail.com', 'user'),
(195, 'ariful', '$2y$10$enCVdwz1Ycc/9R6AO582auwatqwZfex.u5Jsf6iQU5IuTx365G.hO', 'ariful@gmail.com', 'user'),
(196, 'bagus', '$2y$10$dVkMbZ/dA6mkRb1pvBGxlebbiW3JBNO84zpEX5arb/IQ4EtHil9Ye', 'bagus@gmail.com', 'user'),
(197, 'rian', '$2y$10$9UwWS4kUObxslI5gDj7p.uzRLzvA4KmGK4QhnpyOHwCE8JNSRSHLa', 'rian@gmail.com', 'user'),
(198, 'jess', '$2y$10$Dl5iu8STb7CLFH02cddHNO7fD7jXif8qjCouJ8JZnG2BzWAhdImwG', 'jess@gmail.com', 'user'),
(199, 'windah', '$2y$10$CWcCaSVbzzJKjZPF5YdpyeToWUHH/PYqDNuP9NpC5hfHdlOFgUyOW', 'windah@gmail.com', 'user'),
(200, 'nakki', '$2y$10$7P7FfaemZUmEOpcCpnxbz.2/.YbK32.tgHnB1Yu5NjkGSTd/IS4d2', 'nakki@gmail.com', 'user'),
(201, 'lana', '$2y$10$Q9zimG1.BnrIRYN98zxNFeLP8zcAoW5Mg0DhGHCjNODlUfoVcch.O', 'lana@gmail.com', 'user'),
(202, 'nico', '$2y$10$OHyCrAL5GGAZDSHJ5SDJ/u8iuXjM4NYqop/YQ8oPSQbkCPMFOo5Lm', 'nico@gmail.com', 'user'),
(203, 'ayato', '$2y$10$L0HWloyx27UJg6iN3QgJBeos6gIycN/ROix5iL905YpglpU8BUFVi', 'ayato@gmail.com', 'user'),
(204, 'heizo', '$2y$10$TXI/ZcliNi1Xi.o.JoCkcuPXBMD/GF2nXeQMBqTiJSFJRaEJrZFIq', 'heizo@gmail.com', 'user'),
(205, 'scara', '$2y$10$vlQeZqREP/P9KvxaZLPAw.Gpnwe9llcUjjJj3txPJnjubc2R17rJW', 'scara@gmail.com', 'user'),
(206, 'childe', '$2y$10$BIAZqf80KF4zTl50JeCxjuA/tFAdYlip7iiG.937ESNuk/RBbzGf2', 'childe@gmail.com', 'user'),
(207, 'kalla', '$2y$10$s2De.cJ5GXLuerFb/rHADOjZ6BBxILkuDY5fY7TQ2Nmbm.UZOm27i', 'kalla@gmail.com', 'user'),
(208, 'venti', '$2y$10$/fzvlNtprX6aiaabDHOO2Oc7vtuVwq51KQsfOfeLQTR9BteauWy96', 'venti@gmail.com', 'user'),
(209, 'jojo', '$2y$10$IjMZYyXNTFCHPSJs.TO4KuMbUi7do6SFLw5L9Iod9..6nEYa1CMwW', 'jojo@gmail.com', 'user'),
(210, 'zhongli', '$2y$10$MLiQi//gQN/FbtCSW//y0O9KH9GwAK3E00o7dxJTEYs35VtP2YfXW', 'zhongli@gmail.com', 'user'),
(211, 'raka', '$2y$10$2wwjxwVzAAqT9y/530oG4OI8TvCloKKU5KXygflibA8ps6hv9Ffj6', 'raka@gmail.com', 'user'),
(212, 'gara', '$2y$10$4ST951AixSyzcqi46Kr5f.mruc.PPMT3e5v4nPPOq.ualG9x.kSbK', 'gara@gmail.com', 'user'),
(213, 'madara', '$2y$10$QRowfKzm17GuJl15LwzaQe9Zyen/qcKhcHoYny1x12SP565AoDgTS', 'madara@gmail.com', 'user'),
(214, 'nanda', '$2y$10$S9peoBLW6GMeKV1jxvp3nOrvTdm/V559IFu2eg/LV1OfJhwnfqq/2', 'nanda@gmail.com', 'user'),
(215, 'dwi', '$2y$10$czHo8dd0SfEz3FnjS78o9uwdpVtIlQwwrmcmLsUeKqP.fYfUxygbO', 'dwi@gmail.com', 'user'),
(216, 'akbar', '$2y$10$zMhBmsG4yjIV1l5/orGG3.3UXKYbDcq3oOusAmAVDbhUtWUsT82cC', 'akbar@gmail.com', 'user'),
(217, 'abi', '$2y$10$C.nf7Km4DS/0FdRgMqXZx.RXsLJt6gPYly6Lon7mvSH8eGk44g6.K', 'abi@gmail.com', 'user'),
(218, 'jaki', '$2y$10$5CSS9QofH5LfSXhFuGCKmuuz.3Pr.9kCZz4RVptzGLNNOQ2qOYHvi', 'jaki@gmail.com', 'user'),
(219, 'homa', '$2y$10$FhIpIop6P/7Ea0jgh1iuRuTSvKUkbJkAbU4CH39AkiiXo2BhjDHTy', 'homa@gmail.com', 'user'),
(220, 'minato', '$2y$10$kPSxV9vK/EIrveT0tfol3.ckV7SNSobnSDPktkZfH8W9izdKAhl.e', 'minato@gmail.com', 'user'),
(221, 'senju', '$2y$10$mGCEjZL1QTLfxcBcSsuTteF.dmP/kVCNA6iIG0lDMbEw2RasA9qpC', 'senju@gmail.com', 'user'),
(222, 'abogoboga', '$2y$10$sC1C1pEE4YOhRknwseWn.O2PFeRtNeDSKbqmvzGfKRb5GGfIau6jq', 'abogoboga@gmail.com', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`);

--
-- Indexes for table `talent`
--
ALTER TABLE `talent`
  ADD PRIMARY KEY (`id_talent`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=169;

--
-- AUTO_INCREMENT for table `talent`
--
ALTER TABLE `talent`
  MODIFY `id_talent` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=223;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
