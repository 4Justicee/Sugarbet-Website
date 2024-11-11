-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Waktu pembuatan: 18 Jan 2024 pada 06.11
-- Versi server: 10.11.6-MariaDB-cll-lve
-- Versi PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u208589352_sb781`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `cuid` int(11) NOT NULL,
  `bonusregister` int(11) NOT NULL DEFAULT 0,
  `mindepo` int(11) NOT NULL DEFAULT 20000,
  `maxdepo` int(11) NOT NULL DEFAULT 100000000,
  `minwede` int(11) NOT NULL DEFAULT 20000,
  `maxwede` int(11) NOT NULL DEFAULT 100000000,
  `komaff` varchar(11) NOT NULL DEFAULT '0.15',
  `maxkomaff` int(11) NOT NULL DEFAULT 100000000,
  `komrolling` varchar(11) NOT NULL DEFAULT '0.08',
  `maxkomrolling` int(11) NOT NULL DEFAULT 100000000,
  `komcashback` varchar(11) NOT NULL DEFAULT '0.10',
  `maxkomcashback` int(11) NOT NULL DEFAULT 100000000,
  `haribonus` int(11) NOT NULL DEFAULT 1,
  `ratepulsa` varchar(11) NOT NULL DEFAULT '0.75',
  `rateusd` int(11) NOT NULL DEFAULT 13000,
  `rateusdt` int(11) NOT NULL DEFAULT 12000,
  `rateethereum` int(11) NOT NULL DEFAULT 20000000,
  `ratebitcoin` int(11) NOT NULL DEFAULT 300000000,
  `ratewdpulsa` varchar(11) NOT NULL DEFAULT '1.25',
  `ratewdusd` int(11) NOT NULL DEFAULT 16000,
  `ratewdusdt` int(11) NOT NULL DEFAULT 15000,
  `ratewdethereum` int(11) NOT NULL DEFAULT 39000000,
  `ratewdbitcoin` int(11) NOT NULL DEFAULT 490000000
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`cuid`, `bonusregister`, `mindepo`, `maxdepo`, `minwede`, `maxwede`, `komaff`, `maxkomaff`, `komrolling`, `maxkomrolling`, `komcashback`, `maxkomcashback`, `haribonus`, `ratepulsa`, `rateusd`, `rateusdt`, `rateethereum`, `ratebitcoin`, `ratewdpulsa`, `ratewdusd`, `ratewdusdt`, `ratewdethereum`, `ratewdbitcoin`) VALUES
(1, 0, 20000, 100000000, 50000, 100000000, '0', 100000000, '0.01', 100000000, '0.01', 100000000, 1, '0.75', 13000, 12000, 20000000, 300000000, '1.25', 16000, 15000, 40000000, 500000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_backup`
--

CREATE TABLE `tb_backup` (
  `cuid` int(11) NOT NULL,
  `file_name` text NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_balance`
--

CREATE TABLE `tb_balance` (
  `cuid` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `active` text NOT NULL,
  `pending` text NOT NULL,
  `transfer` text NOT NULL,
  `payout` text NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_balance`
--

INSERT INTO `tb_balance` (`cuid`, `userID`, `active`, `pending`, `transfer`, `payout`, `created_date`) VALUES
(1, 87, '46095', '0', '0', '990000', '2024-01-16 00:49:35'),
(2, 88, '61062', '0', '0', '0', '2024-01-16 21:50:24'),
(3, 89, '82', '0', '0', '0', '2024-01-16 21:55:02'),
(4, 90, '61', '0', '0', '0', '2024-01-16 22:30:10'),
(5, 91, '308', '0', '0', '26000', '2024-01-17 00:27:32'),
(6, 92, '0', '0', '0', '0', '2024-01-17 20:39:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_bank`
--

CREATE TABLE `tb_bank` (
  `cuid` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `akun` text NOT NULL,
  `pemilik` text NOT NULL,
  `no_rek` text NOT NULL,
  `status` int(2) NOT NULL,
  `userID` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_bank`
--

INSERT INTO `tb_bank` (`cuid`, `image`, `akun`, `pemilik`, `no_rek`, `status`, `userID`) VALUES
(10, 'pay_DANA.jpeg', 'DANA', 'RM BUNDA', 'SCAN QRIS', 1, 1),
(2, '', 'DANA', 'Syah Erika', '082172114653', 1, 87),
(3, 'pay_QRIS.jpeg', 'QRIS', 'RM BUNDA', 'SCAN QRIS', 1, 1),
(4, 'pay_OVO.jpeg', 'OVO', 'RM BUNDA', 'SCAN QRIS', 1, 1),
(5, '', 'DANA', 'Testeran', '09187171717171', 1, 88),
(6, '', 'DANA', 'Akun', '082172114655', 1, 89),
(7, '', 'DANA', 'Akun dana', '082172114651', 1, 90),
(8, '', 'DANA', 'Akun dana', '082172114650', 1, 91),
(9, '', 'BANK BCA', 'KONTOL', '856596', 1, 92),
(11, 'pay_GOPAY.jpeg', 'GOPAY', 'RM BUNDA', 'SCAN QRIS', 1, 1),
(12, 'pay_LINKAJA.jpeg', 'LINKAJA', 'RM BUNDA', 'SCAN QRIS', 1, 1),
(14, 'pay_SHOPEEPAY.jpeg', 'SHOPEEPAY', 'RM BUNDA', 'SCAN QRIS', 1, 1),
(15, 'pay_BCA.png', 'BCA', 'AGUS KAMIZAR', '0223137676', 1, 1),
(16, 'pay_BRI.png', 'BRI', 'M RAFIQ', '110701010725500', 1, 1),
(17, 'pay_BNI.png', 'BNI', 'ARIF HIZBULLAH', '1788725194', 1, 1),
(18, 'pay_MANDIRI.png', 'MANDIRI', 'ARKAN ASJAD', '1050019445182', 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_banner`
--

CREATE TABLE `tb_banner` (
  `cuid` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `status` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_banner`
--

INSERT INTO `tb_banner` (`cuid`, `image`, `content`, `status`) VALUES
(1, 'brands.webp', '<h4>SURGABET781</h4>\r\n<p>SITUS SLOT TERGACOR & AMANAH DI DUNIA</p>\r\n<p></p>\r\n<p>NEW MEMBER AKAN MENERIMA TAMBAHAN SALDO 30% DARI NOMINAL DEPOSIT </p>', 'true');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_chat`
--

CREATE TABLE `tb_chat` (
  `cuid` int(255) NOT NULL,
  `sessionid` varchar(100) NOT NULL,
  `ipaddress` text NOT NULL,
  `userid` text NOT NULL,
  `adminid` text NOT NULL,
  `content` text NOT NULL,
  `created_date` datetime NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_chat_respon`
--

CREATE TABLE `tb_chat_respon` (
  `cuid` int(255) NOT NULL,
  `sessionid` varchar(100) NOT NULL,
  `ipaddress` text NOT NULL,
  `userid` text NOT NULL,
  `content` text NOT NULL,
  `jenis` int(2) NOT NULL,
  `created_date` datetime NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_game`
--

CREATE TABLE `tb_game` (
  `cuid` int(255) NOT NULL,
  `title` text NOT NULL,
  `price` text NOT NULL,
  `diskon` text NOT NULL,
  `min_bet` int(15) NOT NULL,
  `max_bet` int(15) NOT NULL,
  `satuan` int(2) NOT NULL,
  `parent` int(2) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_game`
--

INSERT INTO `tb_game` (`cuid`, `title`, `price`, `diskon`, `min_bet`, `max_bet`, `satuan`, `parent`, `status`) VALUES
(1, '4D/3D/2D', '0', '66', 1000, 1000000, 0, 0, 0),
(2, '4D', '3000', '66', 1000, 1000000, 0, 1, 0),
(3, '3D', '400', '59', 1000, 1000000, 0, 1, 0),
(4, '2D', '70', '29', 1000, 1000000, 0, 1, 0),
(5, 'COLOK BEBAS', '1.2', '4', 10000, 1000000, 0, 0, 0),
(6, 'COLOK BEBAS 2D', '5.3', '8', 10000, 1000000, 0, 0, 0),
(7, 'COLOK NAGA', '14', '8', 10000, 1000000, 0, 0, 0),
(8, 'COLOK JITU', '0', '4', 10000, 1000000, 0, 0, 0),
(9, 'TENGAH', '0', '1', 10000, 1000000, 1, 0, 0),
(11, 'TEPI', '-4', '1', 10000, 1000000, 1, 9, 0),
(12, 'TENGAH', '-3', '1', 10000, 1000000, 1, 9, 0),
(13, 'DASAR', '0', '1', 10000, 1000000, 1, 0, 0),
(14, 'GANJIL', '-23', '1', 10000, 1000000, 1, 13, 0),
(15, 'GENAP', '6', '1', 10000, 1000000, 1, 13, 0),
(16, 'BESAR', '-23', '1', 10000, 1000000, 1, 13, 0),
(17, 'KECIL', '6', '1', 10000, 1000000, 1, 13, 0),
(18, 'AS', '6', '4', 10000, 1000000, 1, 8, 0),
(19, 'KOP', '6', '4', 10000, 1000000, 1, 8, 0),
(20, 'KEPALA', '7', '4', 10000, 1000000, 1, 8, 0),
(22, 'SHIO', '9', '3', 10000, 1000000, 0, 0, 0),
(23, 'SILANG - HOMO', '0', '1', 10000, 1000000, 1, 0, 0),
(24, 'SILANG - DEPAN', '-2.3', '1', 10000, 1000000, 1, 23, 0),
(25, 'SILANG - TENGAH', '-2.3', '1', 10000, 1000000, 1, 23, 0),
(26, 'SILANG - BELAKANG', '-2.3', '1', 10000, 1000000, 1, 23, 0),
(27, 'HOMO - DEPAN', '-2.3', '1', 10000, 1000000, 1, 23, 0),
(28, 'HOMO - TENGAH', '-2.3', '1', 10000, 1000000, 1, 23, 0),
(29, 'HOMO - BELAKANG', '-2.3', '1', 10000, 1000000, 1, 23, 0),
(30, 'KEMBANG', '0', '1', 10000, 1000000, 1, 0, 0),
(31, 'KEMBANG - DEPAN', '-2.5', '1', 10000, 1000000, 1, 30, 0),
(32, 'KEMBANG - TENGAH', '-2.5', '1', 10000, 1000000, 1, 30, 0),
(33, 'KEMBANG - BELAKANG', '-2.5', '1', 10000, 1000000, 1, 30, 0),
(34, 'KEMPIS - DEPAN', '-2.5', '1', 10000, 1000000, 1, 30, 0),
(35, 'KEMPIS - TENGAH', '-2.5', '1', 10000, 1000000, 1, 30, 0),
(36, 'KEMPIS - BELAKANG', '-2.5', '1', 10000, 1000000, 1, 30, 0),
(37, 'KEMBAR - DEPAN', '-2.5', '1', 10000, 1000000, 1, 30, 0),
(38, 'KEMBAR - TENGAH', '-2.5', '1', 10000, 1000000, 1, 30, 0),
(39, 'KEMBAR - BELAKANG', '-2.5', '1', 10000, 1000000, 1, 30, 0),
(40, 'EKOR', '7', '4', 10000, 1000000, 1, 8, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_gamelist`
--

CREATE TABLE `tb_gamelist` (
  `cuid` int(255) NOT NULL,
  `provider` text NOT NULL,
  `image` text NOT NULL,
  `gameidnumeric` longtext NOT NULL,
  `gameid` text NOT NULL,
  `gamename` text NOT NULL,
  `gametypeid` text NOT NULL,
  `category` text NOT NULL,
  `technology` text NOT NULL,
  `platform` text NOT NULL,
  `demogame` text NOT NULL,
  `aspectratio` text NOT NULL,
  `technologyid` text NOT NULL,
  `jurisdictions` text NOT NULL,
  `frbavailable` text NOT NULL,
  `datatype` text NOT NULL,
  `features` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_gamelist`
--

INSERT INTO `tb_gamelist` (`cuid`, `provider`, `image`, `gameidnumeric`, `gameid`, `gamename`, `gametypeid`, `category`, `technology`, `platform`, `demogame`, `aspectratio`, `technologyid`, `jurisdictions`, `frbavailable`, `datatype`, `features`) VALUES
(1, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20olympgate.png', '1605284987', 'vs20olympgate', 'Gates of Olympus', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'RS,X1,IT,UA,MT,RO,EE,DE,IM,GR,LV,GG,ZA,99,UK,CO,BG,ES,NL,LT,DK,SE,PT,66,CH,IE,ON,BY,CZ,NO,AT,BE', '1', 'RNG', 'ANTE,BUY'),
(2, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vswaysdogs.png', '1588845613', 'vswaysdogs', 'The Dog House Megaways', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'MT,IT,SE,GG,ES,LT,RS,UK,DK,EE,PT,99,LV,DE,CO,GR,BG,RO,IM,ZA,66,X1,UA,NL,CH,IE,CZ,BY,ON,AT,BE', '1', 'RNG', 'BUY'),
(3, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20starlight.png', '1625837214', 'vs20starlight', 'Starlight Princess', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'IM,RO,66,RS,UA,DE,GR,LT,PT,99,EE,GG,IT,UK,DK,CO,X1,LV,ZA,MT,SE,ES,BG,IE,BY,ON,NL,AT,NO,BE', '1', 'RNG', 'ANTE,BUY'),
(4, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20tweethouse.png', '1631597776', 'vs20tweethouse', 'The Tweety House', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '99', '1', 'RNG', ''),
(5, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20fruitsw.png', '1551185482', 'vs20fruitsw', 'Sweet Bonanza', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'DE,GR,EE,UK,IM,LT,RS,MT,DK,IT,LV,99,PT,RO,ES,SE,BY,GG,BG,ZA,CO,X1,UA,NL,66,CH,IE,ON,CZ,NO,AT,BE', '1', 'RNG', 'ANTE,BUY'),
(6, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs40wildwest.png', '1579880805', 'vs40wildwest', 'Wild West Gold', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'LT,DK,RO,SE,LV,CO,PT,IT,99,GG,MT,BG,RS,ES,EE,IM,UK,DE,GR,NL,ZA,X1,UA,66,CH,IE,ON,BY,CZ,AT,BE', '1', 'RNG', 'BUY'),
(7, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vswayslions.png', '1613654675', 'vswayslions', '5 Lions Megaways', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'BG,ES,DK,LV,PT,IT,SE,X1,LT,CO,ZA,99,RS,IM,RO,UK,EE,MT,GR,66,DE,GG,UA,IE,BY,ON,NL,BE', '1', 'RNG', 'ANTE,BUY'),
(8, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20doghouse.png', '1547739735', 'vs20doghouse', 'The Dog House', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'GR,DE,IM,SE,99,EE,BG,ES,UK,RS,DK,IT,PT,LV,BY,GG,MT,LT,RO,ZA,UA,NL,66,CH,IE,ON,CZ,NO,X1,AT,BE', '1', 'RNG', ''),
(9, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20sbxmas.png', '1570610572', 'vs20sbxmas', 'Sweet Bonanza Xmas', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'GR,DE,BG,99,DK,RO,PT,SE,GG,CO,EE,LV,IT,ES,MT,IM,UK,RS,LT,ZA,X1,UA,NL,66,CH,IE,CZ,BY,ON,BE', '1', 'RNG', 'ANTE,BUY'),
(10, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs5aztecgems.png', '1516626484', 'vs5aztecgems', 'Aztec Gems', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'EE,IT,SE,RO,LV,PT,BG,99,GG,ES,LT,IM,RS,CO,MT,UK,ZA,X1,UA,66,IE,BY,BE', '1', 'RNG', ''),
(11, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs25pandagold.png', '1505815201', 'vs25pandagold', 'Panda&apos;s Fortune', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'BG,RS,ES,CO,IT,GG,RO,LT,PT,IM,UK,EE,SE,99,LV,MT,ZA,X1,UA,66,IE,BE', '1', 'RNG', ''),
(12, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vswaysrhino.png', '1582290630', 'vswaysrhino', 'Great Rhino Megaways', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'IM,GG,99,SE,LT,GR,RO,RS,IT,MT,LV,UK,EE,ES,DE,CO,PT,BG,DK,NL,ZA,66,X1,UA,CH,IE,BY,ON,CZ,BE', '1', 'RNG', 'ANTE,BUY'),
(13, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20pbonanza.png', '1628690435', 'vs20pbonanza', 'Pyramid Bonanza', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '99', '1', 'RNG', 'ANTE,BUY'),
(14, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vswayshammthor.png', '1606496748', 'vswayshammthor', 'Power of Thor Megaways', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'NL,DK,SE,PT,ES,LT,BG,UA,66,CO,X1,IT,99,MT,EE,DE,GR,LV,RO,UK,ZA,GG,IM,RS,CH,IE,ON,BY,CZ,BE', '1', 'RNG', 'BUY'),
(15, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs243lionsgold.png', '1551174315', 'vs243lionsgold', '5 Lions Gold', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'ES,PT,UK,LV,GG,SE,IM,IT,99,MT,DK,EE,LT,RO,RS,CO,BG,ZA,X1,UA,66,IE,BY,NL,BE', '1', 'RNG', ''),
(16, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs5joker.png', '1519119693', 'vs5joker', 'Joker&apos;s Jewels', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'RO,DE,GR,ES,DK,GG,SE,IT,EE,CO,99,RS,BY,MT,UK,LT,LV,BG,IM,PT,NL,ZA,X1,UA,66,CH,IE,ON,CZ,BE', '1', 'RNG', ''),
(17, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20amuleteg.png', '1626782528', 'vs20amuleteg', 'Fortune of Giza', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'CO,LT,X1,DE,LV,ES,IT,DK,BG,66,99,EE,GG,GR,IM,MT,RO,RS,UA,UK,ZA,PT,SE,IE,NL,ON,BY,BE', '1', 'RNG', ''),
(18, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20midas.png', '1599482900', 'vs20midas', 'The Hand of Midas', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'LT,DK,PT,CO,BG,RO,EE,GG,RS,MT,UK,ZA,IM,LV,GR,99,DE,SE,IT,ES,X1,UA,NL,66,CH,IE,CZ,BY,ON,BE', '1', 'RNG', 'ANTE,BUY'),
(19, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs243caishien.png', '1549294581', 'vs243caishien', 'Caishen&apos;s Cash', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'LT,PT,BG,ES,IM,GG,RS,LV,EE,IT,DK,99,CO,UK,SE,MT,RO,ZA,X1,GR,DE,UA,66,IE,BE', '1', 'RNG', ''),
(20, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs25hotfiesta.png', '1612433442', 'vs25hotfiesta', 'Hot Fiesta', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'SE,DK,PT,LT,UA,EE,GG,UK,GR,IM,MT,99,DE,66,ZA,RS,LV,RO,X1,BG,CO,ES,IT,IE,NL,BE', '1', 'RNG', 'ANTE,BUY'),
(21, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vswayswildwest.png', '1643285988', 'vswayswildwest', 'Wild West Gold Megaways', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '66,99,DE,EE,GG,GR,IE,IM,RO,RS,UA,UK,ZA,MT,NL,SE,PT,IT,X1,LT,CO,ON,DK,LV,ES,BG,BY,BE', '1', 'RNG', 'ANTE,FREE_BONUS_FEATURE,BUY'),
(22, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs12bbb.png', '1622710851', 'vs12bbb', 'Bigger Bass Bonanza', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'ES,SE,PT,LV,X1,BG,IT,LT,CO,RS,GG,GR,UK,EE,UA,MT,IM,RO,ZA,66,DE,99,DK,IE,BY,ON,NL,AT,BE', '1', 'RNG', ''),
(23, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vswaysbufking.png', '1610109843', 'vswaysbufking', 'Buffalo King Megaways', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'NL,BG,X1,CO,IT,PT,SE,UA,LT,LV,ES,GG,RS,66,EE,GR,UK,MT,RO,ZA,99,IM,DE,DK,CH,IE,ON,CZ,BY,AT,BE', '1', 'RNG', 'ANTE,BUY'),
(24, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs10floatdrg.png', '1608220623', 'vs10floatdrg', 'Floating Dragon', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'UA,LT,DK,ZA,99,GG,66,DE,RS,EE,MT,RO,UK,IM,LV,GR,CO,X1,BG,ES,PT,SE,IT,IE,BY,ON,NL,AT,BE', '1', 'RNG', ''),
(25, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vswayssamurai.png', '1617195325', 'vswayssamurai', 'Rise of Samurai Megaways', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '66,GG,99,LV,PT,ES,UA,EE,LT,GR,IT,SE,RO,DE,IM,MT,RS,BG,ZA,DK,UK,IE,ON,BE', '1', 'RNG', 'ANTE,BUY'),
(26, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs9aztecgemsdx.png', '1587971999', 'vs9aztecgemsdx', 'Aztec Gems Deluxe', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'CO,ES,GG,BG,LT,PT,EE,UK,LV,RO,IT,SE,MT,RS,99,DK,IM,GR,DE,NL,ZA,66,X1,UA,CH,IE,BY,CZ,BE', '1', 'RNG', ''),
(27, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs4096bufking.png', '1570091142', 'vs4096bufking', 'Buffalo King', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'IM,EE,GR,RO,RS,DK,GG,BG,PT,LT,IT,LV,UK,DE,SE,CO,MT,99,ES,NL,ZA,X1,UA,66,CH,IE,CZ,ON,BY,BE', '1', 'RNG', ''),
(28, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs25pandatemple.png', '1611673947', 'vs25pandatemple', 'Panda Fortune 2', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'EE,RO,LV,ZA,IM,RS,GG,UK,66,99,MT,DE,GR,UA,ES,X1,SE,IT,LT,CO,PT,DK,BG,IE,BE', '1', 'RNG', ''),
(29, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs10chkchase.png', '1629126516', 'vs10chkchase', 'Chicken Chase', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'UK,DE,PT,LT,UA,99,IT,X1,ZA,DK,EE,BG,GG,RO,ES,GR,RS,66,IE,LV,MT,IM,NL,CO,SE,BY,BE', '1', 'RNG', ''),
(30, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20mustanggld2.png', '1635781496', 'vs20mustanggld2', 'Clover Gold', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'GR,ES,IT,BG,NL,66,99,DE,EE,GG,IE,IM,LV,MT,RO,RS,UA,UK,ZA,LT,CO,DK,SE,X1,PT,BY,BE', '1', 'RNG', ''),
(31, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20drtgold.png', '1639576365', 'vs20drtgold', 'Drill That Gold', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'DK,IE,RO,DE,IM,GG,CO,RS,EE,IT,LT,99,NL,BG,GR,LV,MT,PT,ZA,SE,UK,66,UA,X1,ES,BY,BE', '1', 'RNG', 'ANTE,FREE_BONUS_FEATURE'),
(32, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs10spiritadv.png', '1640357295', 'vs10spiritadv', 'Spirit of Adventure', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'IT,PT,NL,SE,LT,LV,BG,ON,ES,GR,DK,X1,CO,66,99,DE,EE,GG,IE,IM,MT,RO,RS,UA,UK,ZA,BY,BE', '1', 'RNG', 'BUY'),
(33, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs10firestrike2.png', '1642089410', 'vs10firestrike2', 'Fire Strike 2', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'ON,SE,GR,LT,ES,BG,IT,NL,CO,DK,X1,PT,66,99,DE,EE,GG,IE,IM,LV,MT,RO,RS,UA,UK,ZA,BY,BE', '1', 'RNG', 'FREE_BONUS_FEATURE'),
(34, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs40cleoeye.png', '1629274598', 'vs40cleoeye', 'Eye of Cleopatra', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'DK,ES,SE,X1,CO,66,99,DE,EE,GG,GR,IE,IM,LV,MT,RO,RS,UA,UK,ZA,LT,ON,IT,BG,NL,PT,BY,BE', '1', 'RNG', ''),
(35, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20hburnhs.png', '1607600080', 'vs20hburnhs', 'Hot to Burn Hold and Spin', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'IT,UA,BG,DK,LT,CO,SE,PT,X1,ES,NL,EE,LV,MT,99,GG,GR,IM,UK,DE,RO,RS,ZA,66,CH,IE,CZ,BE', '1', 'RNG', ''),
(36, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs10bxmasbnza.png', '1629217485', 'vs10bxmasbnza', 'Christmas Big Bass Bonanza', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '66,DK,GR,PT,RO,ZA,IM,RS,EE,99,LV,MT,DE,GG,UA,UK,IT,NL,SE,IE,X1,CO,LT,BG,ES,ON,BE', '1', 'RNG', 'BUY'),
(37, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vswaysmadame.png', '1604413074', 'vswaysmadame', 'Madame Destiny Megaways', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'PT,BG,CO,IT,NL,GR,MT,ZA,UK,IM,99,DE,LV,GG,RO,RS,EE,LT,ES,SE,DK,66,X1,UA,CH,IE,BY,CZ,ON,AT,BE', '1', 'RNG', 'ANTE,BUY'),
(38, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs4096magician.png', '1622711664', 'vs4096magician', 'Magician&apos;s Secrets', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'BY,CO,IT,X1,DK,ES,IE,66,99,DE,EE,GG,GR,IM,LV,MT,RO,RS,UA,UK,ZA,NL,PT,SE,BG,LT,BE', '1', 'RNG', 'BUY'),
(39, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20farmfest.png', '1636618208', 'vs20farmfest', 'Barn Festival', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'UK,EE,IT,PT,GR,RO,SE,ZA,99,BG,GG,IE,NL,X1,66,DE,ES,DK,RS,LV,IM,CO,MT,LT,UA,BY,BE', '1', 'RNG', 'BUY'),
(40, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs243queenie.png', '1635519094', 'vs243queenie', 'Queenie', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'BY,SE,UK,X1,PT,CO,BG,66,99,DE,EE,GG,GR,IE,IM,MT,RO,RS,UA,ZA,DK,LT,IT,NL,ES,LV,ON,BE', '1', 'RNG', ''),
(41, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs243discolady.png', '1639484771', 'vs243discolady', 'Disco Lady', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '99', '1', 'RNG', 'FREE_BONUS_FEATURE'),
(42, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs10tictac.png', '1636445187', 'vs10tictac', 'Tic Tac Take', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'SE,CO,LV,BG,PT,X1,66,99,DE,EE,GG,GR,IE,IM,MT,RO,RS,UA,UK,ZA,DK,LT,IT,ES,NL,BE', '1', 'RNG', 'BUY'),
(43, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20rainbowg.png', '1640249257', 'vs20rainbowg', 'Rainbow Gold', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'PT,DK,UK,IT,RO,BG,ES,LT,LV,RS,SE,GR,MT,EE,IM,DE,CO,GG,IE,ZA,X1,NL,UA,66,99,BE', '1', 'RNG', 'ANTE'),
(44, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs10snakeladd.png', '1636465504', 'vs10snakeladd', 'Snakes and Ladders Megadice', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'BY,DE,LV,GG,IE,EE,GR,99,66,UK,ZA,IM,MT,RO,RS,UA,BG,CO,LT,X1,IT,DK,ES,PT,NL,SE,BE', '1', 'RNG', ''),
(45, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs50mightra.png', '1625598783', 'vs50mightra', 'Might of Ra', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'BY,99,IE,ES,X1,CO,66,DE,EE,GG,GR,IM,LV,MT,RO,RS,UA,UK,ZA,IT,PT,SE,BG,DK,NL,LT,BE', '1', 'RNG', ''),
(46, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs10firestrike.png', '1563973373', 'vs10firestrike', 'Fire Strike', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'PT,LT,RO,GG,MT,SE,99,LV,IT,IM,RS,GR,DK,EE,ES,CO,UK,BY,BG,DE,ZA,X1,UA,NL,66,CH,IE,CZ,BE', '1', 'RNG', ''),
(47, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20xmascarol.png', '1598517644', 'vs20xmascarol', 'Christmas Carol Megaways', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'ZA,GR,DE,99,MT,EE,RS,IM,GG,LV,UK,LT,RO,SE,ES,DK,IT,CO,BG,PT,X1,NL,UA,66,CH,IE,CZ,BY,ON,BE', '1', 'RNG', 'ANTE,BUY'),
(48, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs7776aztec.png', '1573553476', 'vs7776aztec', 'Aztec Bonanza', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'UK,RS,LT,IT,99,MT,DK,LV,GG,ES,IM,CO,PT,EE,BG,RO,GR,DE,ZA,X1,UA,66,IE,BY,BE', '1', 'RNG', ''),
(49, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vswaysxjuicy.png', '1627560139', 'vswaysxjuicy', 'Extra Juicy Megaways', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'BY,LV,DK,IT,SE,ES,66,99,DE,EE,GG,GR,IE,IM,MT,RO,RS,UA,UK,ZA,X1,CO,NL,BG,LT,PT,BE', '1', 'RNG', 'ANTE,BUY'),
(50, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20goldfever.png', '1595225976', 'vs20goldfever', 'Gems Bonanza', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'IT,EE,GG,IM,RS,DK,RO,DE,GR,99,MT,SE,UK,CO,ZA,BG,ES,LT,LV,PT,X1,UA,NL,66,CH,IE,BY,ON,CZ,BE', '1', 'RNG', 'BUY'),
(51, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs25scarabqueen.png', '1558530830', 'vs25scarabqueen', 'John Hunter and the Tomb of the Scarab Queen', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'IT,BG,RS,DK,MT,DE,ES,EE,IM,RO,99,BY,LV,SE,GG,GR,UK,LT,PT,CO,ZA,X1,UA,NL,66,CH,IE,ON,CZ,BE,AT', '1', 'RNG', ''),
(52, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs10returndead.png', '1596025317', 'vs10returndead', 'Return of the Dead', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'DK,99,CO,IT,SE,EE,RO,ES,MT,LV,UK,GG,IM,LT,PT,BG,RS,ZA,DE,GR,X1,UA,66,IE,BE', '1', 'RNG', ''),
(53, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vswayslight.png', '1613724310', 'vswayslight', 'Lucky Lightning', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'X1,CO,DK,PT,BG,SE,EE,GG,MT,IM,RO,99,RS,ZA,DE,GR,UA,UK,66,ES,LV,LT,IT,IE,BY,ON,BE', '1', 'RNG', 'BUY'),
(54, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20trsbox.png', '1619783650', 'vs20trsbox', 'Treasure Wild', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'GR,UK,IM,99,GG,RS,66,DE,RO,ZA,MT,UA,EE,ES,PT,BG,DK,LV,CO,X1,IT,LT,SE,IE,BY,ON,NL,BE', '1', 'RNG', 'BUY'),
(55, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs25goldparty.png', '1621807754', 'vs25goldparty', 'Gold Party', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'BY,99,PT,IT,LV,ES,LT,X1,CO,IE,BG,DK,SE,NL,66,DE,EE,GG,GR,IM,MT,RO,RS,UA,UK,ZA,ON,BE', '1', 'RNG', 'BUY'),
(56, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs243lions.png', '1520439412', 'vs243lions', '5 Lions', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '99,IT,UK,SE,RO,GG,CO,BG,EE,IM,LT,LV,RS,MT,PT,DK,ES,ZA,DE,GR,X1,UA,66,IE,BE', '1', 'RNG', ''),
(57, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vswaysyumyum.png', '1617894269', 'vswaysyumyum', 'Yum Yum Powerways', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'DE,MT,66,DK,RS,UK,EE,GG,RO,ZA,GR,99,IM,UA,CO,SE,X1,PT,BG,ES,IT,LT,LV,IE,ON,BE', '1', 'RNG', 'BUY'),
(58, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs25copsrobbers.png', '1627630162', 'vs25copsrobbers', 'Cash Patrol', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'UA,EE,RS,GG,66,RO,UK,ON,LV,MT,99,IM,ZA,X1,IT,LT,CO,ES,DK,DE,BG,GR,SE,PT,IE,NL,BY,BE', '1', 'RNG', ''),
(59, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs5ultra.png', '1591953815', 'vs5ultra', 'Ultra Hold and Spin', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '99,EE,GR,RS,GG,LT,SE,LV,PT,MT,DE,BG,RO,DK,IM,ES,CO,UK,IT,ZA,X1,UA,NL,66,CH,IE,BY,CZ,BE', '1', 'RNG', ''),
(60, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20rhinoluxe.png', '1587642556', 'vs20rhinoluxe', 'Great Rhino Deluxe', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'IT,SE,RO,EE,IM,BG,LT,GR,MT,DK,DE,GG,99,PT,RS,CO,UK,ES,LV,ZA,X1,UA,66,IE,BY,BE', '1', 'RNG', ''),
(61, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs15diamond.png', '1503317712', 'vs15diamond', 'Diamond Strike', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'ES,CO,IM,GG,PT,SE,RS,DK,LT,IT,MT,BG,DE,LV,GR,UK,99,EE,RO,ZA,X1,UA,NL,66,CH,IE,BY,CZ,ON,BE', '1', 'RNG', ''),
(62, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs10bbbonanza.png', '1599738017', 'vs10bbbonanza', 'Big Bass Bonanza', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'CO,DE,EE,LV,RS,UK,99,MT,GR,IM,ZA,RO,GG,SE,IT,PT,BG,ES,DK,LT,X1,UA,NL,66,CH,IE,BY,ON,CZ,AT,BE,NO', '1', 'RNG', ''),
(63, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20terrorv.png', '1611330460', 'vs20terrorv', 'Cash Elevator', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'UA,66,LV,IM,GG,ZA,EE,MT,GR,RS,UK,DE,99,SE,BG,LT,PT,DK,IT,RO,ES,CO,X1,IE,BY,BE', '1', 'RNG', ''),
(64, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs243empcaishen.png', '1628355239', 'vs243empcaishen', 'Emperor Caishen', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '99', '1', 'RNG', ''),
(65, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs10nudgeit.png', '1616059826', 'vs10nudgeit', 'Rise of Giza PowerNudge', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'CO,X1,LT,DK,BG,SE,UK,LV,EE,MT,RO,GG,IM,ZA,RS,DE,GR,UA,66,PT,ES,IT,99,IE,ON,BY,BE', '1', 'RNG', 'BUY'),
(66, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vswayselements.png', '1633098228', 'vswayselements', 'Elemental Gems Megaways', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'BY,UA,99,66,GG,DE,MT,ZA,RO,EE,GR,IM,LV,RS,IE,UK,ES,BG,DK,SE,NL,LT,PT,IT,X1,CO,BE', '1', 'RNG', ''),
(67, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs10amm.png', '1611903197', 'vs10amm', 'Amazing Money Machine', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'LT,UA,IT,PT,BG,DK,SE,X1,CO,ES,NL,LV,RS,UK,66,99,GR,ZA,IM,DE,MT,EE,RO,GG,CH,IE,BY,CZ,ON,BE', '1', 'RNG', ''),
(68, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20bchprty.png', '1634131757', 'vs20bchprty', 'Wild Beach Party', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '66,99,DE,EE,GG,GR,IE,NL,DK,IT,ES,PT,SE,IM,MT,RO,RS,UA,UK,ZA,CO,LV,LT,BG,X1,BY,BE', '1', 'RNG', ''),
(69, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs10egyptcls.png', '1537863475', 'vs10egyptcls', 'Ancient Egypt Classic', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'GR,DE,ES,IM,EE,LT,GG,BG,SE,DK,LV,RS,RO,PT,CO,MT,99,IT,UK,ZA,X1,UA,66,IE,BY,BE', '1', 'RNG', ''),
(70, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20santawonder.png', '1631020967', 'vs20santawonder', 'Santa&apos;s Wonderland', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'IE,SE,DK,GR,BG,ES,X1,EE,PT,IT,99,DE,IM,RS,UA,LT,LV,MT,UK,ZA,66,GG,NL,CO,RO,BE', '1', 'RNG', 'BUY'),
(71, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20rhino.png', '1521189220', 'vs20rhino', 'Great Rhino', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'DE,GR,IM,IT,GG,BY,CO,RS,99,DK,LT,UK,LV,BG,SE,MT,PT,RO,EE,ES,ZA,X1,UA,NL,66,CH,IE,ON,CZ,BE', '1', 'RNG', ''),
(72, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20superx.png', '1623763257', 'vs20superx', 'Super X', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'IE,GG,RS,PT,DK,99,BG,CO,RO,ZA,IT,66,SE,MT,GR,UA,UK,DE,IM,LV,X1,BY,EE,ES,LT,NL,BE', '1', 'RNG', 'SUPER_SPIN'),
(73, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs40pirate.png', '1545310716', 'vs40pirate', 'Pirate Gold', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'MT,EE,IM,99,IT,LT,RS,DE,LV,RO,PT,BY,DK,GG,ES,GR,SE,BG,UK,NL,ZA,UA,66,CH,IE,CZ,BE', '1', 'RNG', ''),
(74, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs10fruity2.png', '1540818802', 'vs10fruity2', 'Extra Juicy', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'BG,UK,GG,ES,SE,LV,DK,MT,LT,IM,DE,EE,RS,GR,IT,99,PT,RO,ZA,UA,NL,66,CH,IE,BY,ON,CZ,BE', '1', 'RNG', ''),
(75, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20fparty2.png', '1617348645', 'vs20fparty2', 'Fruit Party 2', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'ZA,GG,GR,UK,IM,66,RO,EE,RS,99,DE,MT,UA,ES,DK,PT,IT,LT,CO,X1,LV,BG,SE,IE,ON,BY,NL,BE', '1', 'RNG', 'BUY'),
(76, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vswayscryscav.png', '1628587072', 'vswayscryscav', 'Crystal Caverns Megaways', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'IE,BY,66,PT,UK,IT,IM,NL,99,DK,MT,DE,ES,LV,RS,SE,BG,UA,ZA,CO,EE,GG,GR,LT,RO,X1,BE', '1', 'RNG', 'BUY'),
(77, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs10cowgold.png', '1597301701', 'vs10cowgold', 'Cowboys Gold', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'EE,99,LV,RO,RS,UK,GG,IM,MT,ZA,ES,LT,DE,GR,DK,SE,IT,CO,BG,PT,X1,UA,NL,66,CH,IE,BY,CZ,BE', '1', 'RNG', ''),
(78, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs7fire88.png', '1516798686', 'vs7fire88', 'Fire 88', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'IM,CO,BG,LV,LT,ES,MT,PT,RO,IT,GG,99,UK,RS,SE,EE,NL,ZA,X1,UA,66,CH,IE,BY,BE', '1', 'RNG', ''),
(79, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs50juicyfr.png', '1606463130', 'vs50juicyfr', 'Juicy Fruits', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'NL,PT,EE,ZA,DE,IM,UK,RS,RO,GR,LV,GG,MT,BG,CO,X1,IT,UA,ES,LT,DK,66,SE,99,CH,IE,ON,BY,CZ,BE', '1', 'RNG', 'ANTE,BUY'),
(80, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20ultim5.png', '1634561519', 'vs20ultim5', 'The Ultimate 5', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'BY,GG,RO,GR,IM,99,MT,DE,UK,EE,66,IE,LV,RS,UA,ZA,SE,ES,X1,CO,PT,LT,DK,BG,IT,NL,BE', '1', 'RNG', ''),
(81, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs10eyestorm.png', '1602151278', 'vs10eyestorm', 'Eye of the Storm', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'SE,DK,CO,ES,IT,BG,PT,LT,EE,MT,UK,GR,RS,RO,IM,LV,ZA,GG,DE,99,X1,UA,NL,66,CH,IE,CZ,BE', '1', 'RNG', ''),
(82, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs243mwarrior.png', '1553615521', 'vs243mwarrior', 'Monkey Warrior', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '99,GG,PT,IM,EE,BG,CO,ES,UK,IT,MT,RO,LV,LT,RS,ZA,X1,UA,66,IE,BE', '1', 'RNG', ''),
(83, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs25mustang.png', '1535445127', 'vs25mustang', 'Mustang Gold', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'RS,BG,MT,SE,LT,DK,BY,PT,99,RO,LV,CO,GG,UK,ES,IM,IT,EE,DE,GR,ZA,X1,UA,NL,66,CH,IE,ON,CZ,BE,AT', '1', 'RNG', ''),
(84, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vswaysstrwild.png', '1650031167', 'vswaysstrwild', 'Candy Stars', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '66,99,DE,DK,EE,GG,GR,IE,IM,LT,LV,NL,PT,RO,RS,SE,UA,UK,ZA,MT,CO,IT,ON,BG,ES,BE', '1', 'RNG', 'FREE_BONUS_FEATURE,BUY'),
(85, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs576treasures.png', '1590589403', 'vs576treasures', 'Wild Wild Riches', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'DK,MT,UK,IM,CO,LV,LT,GG,GR,RS,IT,99,PT,DE,BG,EE,SE,ES,RO,NL,ZA,X1,UA,66,CH,IE,ON,CZ,BY,BE', '1', 'RNG', 'ANTE'),
(86, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs5drhs.png', '1611758020', 'vs5drhs', 'Dragon Hot Hold & Spin', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'IT,PT,X1,CO,RO,ZA,66,UK,GG,RS,EE,GR,IM,MT,UA,99,LV,DE,SE,BG,ES,DK,LT,IE,BE', '1', 'RNG', ''),
(87, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20kraken.png', '1562244428', 'vs20kraken', 'Release the Kraken', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'LV,RS,BG,EE,CO,LT,ES,SE,IM,GG,PT,MT,GR,DK,DE,UK,RO,IT,99,ZA,X1,UA,66,IE,BY,ON,NL,BE', '1', 'RNG', 'BUY'),
(88, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20phoenixf.png', '1612429795', 'vs20phoenixf', 'Phoenix Forge', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'PT,SE,LT,IM,LV,GG,RS,UK,MT,RO,EE,DE,66,GR,ZA,99,UA,ES,NL,X1,DK,CO,BG,IT,CH,IE,BY,CZ,BE', '1', 'RNG', ''),
(89, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20rockvegas.png', '1629122638', 'vs20rockvegas', 'Rock Vegas', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'BY,PT,IT,LT,ES,IE,X1,CO,BG,SE,DK,NL,66,99,DE,EE,GG,GR,IM,LV,MT,RO,RS,UA,UK,ZA,BE', '1', 'RNG', ''),
(90, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs1024temuj.png', '1607697052', 'vs1024temuj', 'Temujin Treasures', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'X1,SE,PT,UA,DK,BG,RS,DE,RO,UK,99,GG,ZA,IM,EE,GR,MT,ES,IT,CO,LT,66,LV,IE,ON,BE', '1', 'RNG', 'BUY'),
(91, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs10runes.png', '1628164192', 'vs10runes', 'Gates of Valhalla', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'BY,ES,66,99,DE,EE,GG,GR,IM,MT,RO,RS,UA,UK,ZA,IE,CO,SE,X1,PT,BG,DK,LT,LV,IT,NL,BE', '1', 'RNG', 'BUY'),
(92, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs1dragon8.png', '1493812996', 'vs1dragon8', '888 Dragons', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'RS,GG,UK,EE,MT,IM,SE,LV,99,IT,RO,ZA,UA,66,IE,BE', '1', 'RNG', ''),
(93, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs25chilli.png', '1513769922', 'vs25chilli', 'Chilli Heat', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'RO,GG,UK,DE,BY,LT,99,MT,ES,IM,DK,BG,SE,LV,GR,EE,IT,CO,RS,PT,ZA,X1,NL,UA,66,CH,IE,ON,CZ,BE', '1', 'RNG', ''),
(94, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vswaysrabbits.png', '1666863473', 'vswaysrabbits', '5 Rabbits Megaways', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '99', '1', 'RNG', 'ANTE,BUY'),
(95, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs25kfruit.png', '1650618938', 'vs25kfruit', 'Aztec Blaze', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '66,99,DE,EE,GG,IE,IM,LV,MT,RO,RS,UA,UK,ZA,PT,LT,GR,ES,BG,CO,NL,IT,ON,SE,DK,BE', '1', 'RNG', 'ANTE,FREE_BONUS_FEATURE,BUY'),
(96, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs10bbkir.png', '1655131213', 'vs10bbkir', 'Big Bass Bonanza - Keeping it Reel', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'LV,SE,IT,NL,ON,PT,LT,GR,CO,BG,DK,ES,66,99,DE,EE,GG,IE,IM,MT,RO,RS,UA,UK,ZA,BE', '1', 'RNG', 'ANTE,FREE_BONUS_FEATURE,BUY'),
(97, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs12bbbxmas.png', '1658214381', 'vs12bbbxmas', 'Bigger Bass Blizzard - Christmas Catch', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'RO,RS,UA,UK,ZA,LV,NL,DK,ON,IT,PT,SE,CO,LT,GR,66,99,DE,EE,GG,IE,IM,MT,ES,BG,BE', '1', 'RNG', 'ANTE,FREE_BONUS_FEATURE,BUY'),
(98, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20trswild2.png', '1647530068', 'vs20trswild2', 'Black Bull', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'NL,X1,CO,LT,DK,ON,66,99,DE,EE,GG,GR,IE,IM,MT,RO,RS,UA,UK,ZA,LV,PT,SE,ES,BG,IT,BY,BE', '1', 'RNG', 'FREE_BONUS_FEATURE,BUY'),
(99, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs25bomb.png', '1642081790', 'vs25bomb', 'Bomb Bonanza', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'DK,ES,PT,SE,66,99,DE,EE,GG,GR,IE,IM,LT,MT,RO,RS,UA,UK,ZA,LV,IT,NL,CO,X1,BG,ON,BE', '1', 'RNG', 'FREE_BONUS_FEATURE'),
(100, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs10tut.png', '1654176306', 'vs10tut', 'Book Of Tut Respin', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'SE,BG,NL,ES,IT,PT,GR,CO,LT,LV,66,99,DE,DK,EE,GG,IE,IM,MT,ON,RO,RS,UA,UK,ZA,BE', '1', 'RNG', 'FREE_BONUS_FEATURE,BUY'),
(101, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vswaysbook.png', '1647515448', 'vswaysbook', 'Book of Golden Sands', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '66,99,DE,EE,GG,IE,IM,MT,RO,RS,UA,UK,ZA,SE,IT,ON,NL,LT,LV,BG,CO,X1,DK,GR,PT,ES,BE', '1', 'RNG', 'FREE_BONUS_FEATURE,BUY'),
(102, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs243ckemp.png', '1658909395', 'vs243ckemp', 'Cheeky Emperor', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '99', '1', 'RNG', ''),
(103, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs12tropicana.png', '1660891115', 'vs12tropicana', 'Club Tropicana', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'BG,LV,BE,DK,LT,CO,GR,ES,66,99,DE,EE,GG,IE,IM,MT,RO,RS,UA,UK,ZA,IT,NL,ON,PT,SE', '1', 'RNG', 'ANTE,FREE_BONUS_FEATURE,BUY'),
(104, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs40cosmiccash.png', '1646930177', 'vs40cosmiccash', 'Cosmic Cash', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'ON,ES,DK,66,99,DE,EE,GG,GR,IE,IM,MT,RO,RS,UA,UK,ZA,PT,IT,LV,NL,SE,CO,X1,LT,BG,CH,BY,BE', '1', 'RNG', 'BUY'),
(105, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vswaysultrcoin.png', '1667822006', 'vswaysultrcoin', 'Cowboy Coins', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '66,99,DE,EE,GG,IE,IM,LV,MT,RO,RS,UA,UK,ZA', '1', 'RNG', 'FREE_BONUS_FEATURE,BUY'),
(106, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs10crownfire.png', '1653920247', 'vs10crownfire', 'Crown of Fire', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '66,99,LT,EE,GG,IE,IM,MT,RO,RS,UA,UK,ZA,GR,DK,BG,CO,X1,LV,IT,NL,ON,PT,SE,DE,ES,BE', '1', 'RNG', ''),
(107, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20underground.png', '1648559965', 'vs20underground', 'Down the Rails', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '99,GG,UK,66,DE,EE,IE,IM,MT,RO,RS,UA,ZA,PT,SE,DK,LT,LV,ON,IT,NL,X1,CO,ES,BG,GR,BE', '1', 'RNG', 'FREE_BONUS_FEATURE'),
(108, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20drgbless.png', '1666854917', 'vs20drgbless', 'Dragon Hero', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'BG,66,99,DE,EE,GG,IE,IM,MT,RO,RS,UA,UK,ZA,DK,GR,LT,ES,IT,ON,PT,SE,CO,NL,LV,BE', '1', 'RNG', 'FREE_BONUS_FEATURE,BUY'),
(109, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs25archer.png', '1662032319', 'vs25archer', 'Fire Archer', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'BG,BE,IT,LV,NL,GR,CO,DK,LT,ES,66,99,DE,EE,GG,IE,IM,MT,RO,RS,UA,UK,ZA,ON,PT,SE', '1', 'RNG', 'FREE_BONUS_FEATURE,BUY'),
(110, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs100firehot.png', '1648120006', 'vs100firehot', 'Fire Hot 100', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'IT,ES,66,99,DE,EE,GG,IE,IM,MT,RO,RS,UA,UK,ZA,ON,GR,BG,CO,DK,X1,LT,LV,NL,PT,SE,BE', '1', 'RNG', ''),
(111, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20fh.png', '1647872051', 'vs20fh', 'Fire Hot 20', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'IT,66,99,DE,EE,GG,IE,IM,MT,RO,RS,UA,UK,ZA,ES,ON,CO,DK,LT,X1,GR,BG,LV,NL,PT,SE,BE', '1', 'RNG', ''),
(112, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs40firehot.png', '1648470786', 'vs40firehot', 'Fire Hot 40', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'SE,IT,66,99,DE,EE,GG,IE,IM,MT,RO,RS,UA,UK,ZA,ES,ON,X1,DK,BG,CO,LT,GR,LV,NL,PT,BE', '1', 'RNG', ''),
(113, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs5firehot.png', '1647595145', 'vs5firehot', 'Fire Hot 5', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'NL,PT,SE,IT,66,99,DE,EE,GG,IE,IM,MT,RO,RS,UA,UK,ZA,ON,ES,LT,X1,CO,GR,BG,DK,LV,BE', '1', 'RNG', ''),
(114, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vswaysconcoll.png', '1655736970', 'vswaysconcoll', 'Firebird Spirit - Connect & Collect', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'IT,NL,BG,ON,LV,PT,SE,ES,GR,66,99,DE,EE,GG,IE,IM,MT,RO,RS,UA,UK,ZA,LT,DK,CO,BE', '1', 'RNG', 'FREE_BONUS_FEATURE,BUY'),
(115, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs10fisheye.png', '1663793834', 'vs10fisheye', 'Fish Eye', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '66,99,DE,EE,GG,IE,IM,MT,RO,RS,UA,UK,ZA,DK,IT,BE,ES,CO,GR,LT,LV,NL,ON,PT,SE,BG', '1', 'RNG', 'ANTE,FREE_BONUS_FEATURE,BUY'),
(116, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vswaysfltdrg.png', '1654619004', 'vswaysfltdrg', 'Floating Dragon Hold & Spin Megaways', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '99,LV,NL,ON,IT,PT,SE,LT,ES,BG,GR,CO,BY,66,DE,EE,GG,IE,IM,MT,RO,RS,UA,UK,ZA,DK,BE', '1', 'RNG', 'FREE_BONUS_FEATURE,BUY'),
(117, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vswaysfuryodin.png', '1658907845', 'vswaysfuryodin', 'Fury of Odin Megaways', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'DK,BG,BE,CO,GR,LT,ES,66,99,DE,EE,GG,IE,IM,IT,LV,MT,ON,PT,RO,RS,SE,UA,UK,X1,ZA,NL', '1', 'RNG', 'ANTE,FREE_BONUS_FEATURE,BUY'),
(118, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20aztecgates.png', '1671197044', 'vs20aztecgates', 'Gates of Aztec', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '99', '1', 'RNG', 'ANTE,BUY'),
(119, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20gatotgates.png', '1664453812', 'vs20gatotgates', 'Gates of Gatot Kaca', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '99', '1', 'RNG', 'ANTE,BUY'),
(120, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20gatotfury.png', '1670316344', 'vs20gatotfury', 'Gatot Kaca&apos;s Fury', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '99', '1', 'RNG', 'ANTE,BUY'),
(121, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20lcount.png', '1649059371', 'vs20lcount', 'Gems of Serengeti', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '66,99,DE,EE,GG,IE,IM,MT,RO,RS,UA,UK,ZA,ON,GR,DK,CO,LV,NL,PT,SE,IT,LT,BG,ES,BE', '1', 'RNG', 'FREE_BONUS_FEATURE'),
(122, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs1024gmayhem.png', '1645783969', 'vs1024gmayhem', 'Gorilla Mayhem', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'PT,LV,DK,SE,IT,NL,CO,X1,BG,MT,66,99,DE,EE,GG,GR,IE,IM,RO,RS,UA,UK,ZA,ON,LT,ES,BY,BE', '1', 'RNG', 'BUY'),
(123, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20wolfie.png', '1649884522', 'vs20wolfie', 'Greedy Wolf', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'SE,CO,X1,LT,DK,BG,66,99,DE,EE,GG,GR,IE,IM,MT,RO,RS,UA,UK,ZA,LV,NL,ES,ON,IT,PT,BY,BE', '1', 'RNG', 'ANTE'),
(124, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs40mstrwild.png', '1649403727', 'vs40mstrwild', 'Happy Hooves', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'SE,66,99,DE,EE,GG,IE,IM,MT,RO,RS,UA,UK,ZA,IT,LV,NL,ON,PT,ES,CO,LT,X1,BG,BY,DK,GR,BE', '1', 'RNG', 'FREE_BONUS_FEATURE,BUY'),
(125, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20dugems.png', '1654681279', 'vs20dugems', 'Hot Pepper', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'IT,NL,ON,PT,SE,BG,LT,DK,CO,GR,ES,66,99,DE,EE,GG,IE,IM,LV,MT,RO,RS,UA,UK,ZA,BE', '1', 'RNG', 'FREE_BONUS_FEATURE,BUY'),
(126, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs40hotburnx.png', '1650461546', 'vs40hotburnx', 'Hot To Burn Extreme', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'PT,NL,SE,DK,X1,LT,CO,BG,ON,IT,LV,ES,66,99,DE,EE,GG,GR,IE,IM,MT,RO,RS,UA,UK,ZA,BY,BE', '1', 'RNG', 'FREE_BONUS_FEATURE,BUY'),
(127, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20mvwild.png', '1654091720', 'vs20mvwild', 'Jasmine Dreams', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '66,99,DE,EE,GG,IE,IM,MT,RO,RS,UA,UK,ZA,BE', '1', 'RNG', 'FREE_BONUS_FEATURE'),
(128, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20asgard.png', '1662996634', 'vs20asgard', 'Kingdom of Asgard', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '99', '1', 'RNG', 'FREE_BONUS_FEATURE'),
(129, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs243koipond.png', '1632121425', 'vs243koipond', 'Koi Pond', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '99', '1', 'RNG', ''),
(130, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vswayslofhero.png', '1655895863', 'vswayslofhero', 'Legend of Heroes', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '99', '1', 'RNG', 'BUY'),
(131, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vswaysluckyfish.png', '1666863578', 'vswaysluckyfish', 'Lucky Fishing', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '99', '1', 'RNG', 'BUY'),
(132, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs25tigeryear.png', '1638970408', 'vs25tigeryear', 'Lucky New Year - Tiger Treasures', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '99', '1', 'RNG', ''),
(133, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs10mmm.png', '1648833669', 'vs10mmm', 'Magic Money Maze', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '66,99,DE,EE,GG,GR,IE,IM,MT,RO,RS,UA,UK,ZA,CO,DK,X1,ON,LT,BG,NL,PT,SE,LV,IT,ES,BE', '1', 'RNG', 'BUY'),
(134, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20mammoth.png', '1664173161', 'vs20mammoth', 'Mammoth Gold Megaways', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '66,99,DE,EE,GG,IE,IM,MT,RO,RS,UA,UK,ZA,DK,LV,NL,ON,PT,SE,ES,GR,IT,CO,LT,BG,BE', '1', 'RNG', 'FREE_BONUS_FEATURE,BUY'),
(135, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20superlanche.png', '1665130261', 'vs20superlanche', 'Monster Superlanche', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'PT,LT,CO,ES,DK,66,99,DE,EE,GG,IE,IM,MT,NL,RO,RS,SE,UA,UK,ZA,IT,LV,ON,GR,BG,BE', '1', 'RNG', 'ANTE,FREE_BONUS_FEATURE,BUY'),
(136, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20muertos.png', '1657890717', 'vs20muertos', 'Muertos Multiplier Megaways', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '66,99,DE,EE,GG,IE,IM,MT,RO,RS,UA,UK,ZA,GR,LV,ON,SE,LT,CO,IT,NL,PT,ES,BG,DK,BE', '1', 'RNG', 'FREE_BONUS_FEATURE,BUY'),
(137, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vswaysmorient.png', '1668582966', 'vswaysmorient', 'Mystery of the Orient', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '66,99,DE,EE,GG,IE,IM,LV,MT,RO,RS,UA,UK,ZA,BE,NL,GR,IT,LT,ON,PT,SE,DK', '1', 'RNG', 'FREE_BONUS_FEATURE,BUY'),
(138, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20octobeer.png', '1650009032', 'vs20octobeer', 'Octobeer Fortunes', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '66,99,DE,EE,GG,IE,IM,MT,RO,RS,UA,UK,ZA,LV,IT,NL,ON,PT,SE,X1,CO,GR,ES,BG,LT,DK,BE', '1', 'RNG', 'BUY'),
(139, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vswaysoldminer.png', '1644856286', 'vswaysoldminer', 'Old Gold Miner Megaways', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '99,MT,RO,UK,NL,ON,BE', '1', 'RNG', 'ANTE,BUY'),
(140, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vswayspizza.png', '1664288098', 'vswayspizza', 'PIZZA PIZZA PIZZA', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '66,99,DE,EE,GG,IE,IM,LV,MT,RO,RS,UA,UK,ZA,GR,SE,BG,ES,BE,ON,IT,NL,PT,CO,DK,LT', '1', 'RNG', 'ANTE,FREE_BONUS_FEATURE,BUY'),
(141, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20ltng.png', '1654505839', 'vs20ltng', 'Pinup Girls', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'PT,SE,DK,NL,66,99,DE,EE,GG,IE,IM,MT,RO,RS,UA,UK,ZA,IT,LV,LT,ES,GR,CO,ON,BG,BE', '1', 'RNG', 'FREE_BONUS_FEATURE,BUY'),
(142, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20mtreasure.png', '1645198209', 'vs20mtreasure', 'Pirate Golden Age', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'SE,BG,GR,ES,PT,CO,LT,IT,66,99,DE,EE,GG,IE,IM,MT,RO,RS,UA,UK,ZA,DK,LV,NL,ON,BE', '1', 'RNG', 'FREE_BONUS_FEATURE'),
(143, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20goldclust.png', '1669900144', 'vs20goldclust', 'Rabbit Garden', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '99', '1', 'RNG', 'FREE_BONUS_FEATURE,BUY'),
(144, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs25rlbank.png', '1657027833', 'vs25rlbank', 'Reel Banks', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'UK,99,66,DE,EE,GG,IE,IM,MT,RO,RS,UA,ZA,SE,BE,LT,LV,NL,ON,PT,DK,GR,CO,ES,IT,BG', '1', 'RNG', 'FREE_BONUS_FEATURE,BUY'),
(145, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20kraken2.png', '1657867870', 'vs20kraken2', 'Release the Kraken 2', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'CO,66,99,DE,EE,GG,IE,IM,MT,RO,RS,UA,UK,ZA,IT,LV,NL,ON,PT,SE,BG,ES,DK,GR,LT,BE', '1', 'RNG', 'ANTE,FREE_BONUS_FEATURE,BUY'),
(146, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20porbs.png', '1659687509', 'vs20porbs', 'Santa&apos;s Great Gifts', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '66,99,DE,EE,GG,IE,IM,MT,RO,RS,UA,UK,ZA,IT,LV,NL,ON,PT,SE,ES,BG,GR,CO,DK,LT,BE', '1', 'RNG', 'ANTE,FREE_BONUS_FEATURE,BUY'),
(147, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs25spgldways.png', '1663758009', 'vs25spgldways', 'Secret City Gold', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'DK,IT,LV,NL,ON,BE,PT,SE,ES,LT,GR,CO,66,99,DE,EE,GG,IE,IM,MT,RO,RS,UA,UK,ZA,BG', '1', 'RNG', 'FREE_BONUS_FEATURE,BUY'),
(148, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20sparta.png', '1654691367', 'vs20sparta', 'Shield Of Sparta', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'CO,LT,BG,GR,ES,66,99,DE,EE,GG,IE,IM,MT,RO,RS,UA,UK,ZA,DK,LV,ON,PT,SE,IT,NL,BE', '1', 'RNG', 'FREE_BONUS_FEATURE'),
(149, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs100sh.png', '1644586301', 'vs100sh', 'Shining Hot 100', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'LT,BG,ON,66,99,DE,EE,GG,GR,IE,IM,MT,RO,RS,UA,UK,ZA,ES,IT,LV,NL,PT,SE,X1,DK,CO,BY,BE', '1', 'RNG', ''),
(150, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20sh.png', '1643976929', 'vs20sh', 'Shining Hot 20', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'LT,ON,BG,66,99,DE,EE,GG,GR,IE,IM,MT,RO,RS,UA,UK,ZA,ES,IT,LV,NL,PT,SE,X1,DK,CO,BY,BE', '1', 'RNG', ''),
(151, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs40sh.png', '1642592904', 'vs40sh', 'Shining Hot 40', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'LT,BG,ON,66,99,DE,EE,GG,GR,IE,IM,MT,RO,RS,UA,UK,ZA,IT,LV,NL,PT,SE,ES,X1,DK,CO,BY,BE', '1', 'RNG', ''),
(152, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs5sh.png', '1644228406', 'vs5sh', 'Shining Hot 5', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'LT,ON,BG,66,99,DE,EE,GG,GR,IE,IM,MT,RO,RS,UA,UK,ZA,IT,LV,NL,PT,SE,ES,X1,CO,DK,BY,BE', '1', 'RNG', ''),
(153, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs10snakeeyes.png', '1653393645', 'vs10snakeeyes', 'Snakes & Ladders - Snake Eyes', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'GG,99,UK,GR,ON,DK,CO,LT,LV,NL,PT,SE,IT,BG,66,DE,EE,IE,IM,MT,RO,RS,UA,ZA,ES,BE', '1', 'RNG', 'FREE_BONUS_FEATURE'),
(154, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vswaysfrywld.png', '1657201370', 'vswaysfrywld', 'Spin & Score Megaways', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'CO,66,99,DE,EE,GG,IE,IM,MT,RO,RS,UA,UK,ZA,IT,NL,ON,PT,SE,BG,ES,LV,GR,DK,LT,BE', '1', 'RNG', 'BUY'),
(155, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20schristmas.png', '1666862661', 'vs20schristmas', 'Starlight Christmas', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '66,EE,GG,IE,IM,LV,MT,RO,RS,UA,ZA,99,UK,BE', '1', 'RNG', 'ANTE,BUY'),
(156, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs5strh.png', '1651661433', 'vs5strh', 'Striking Hot 5', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '66,99,DE,EE,GG,IE,IM,MT,RO,RS,UA,UK,ZA,NL,ON,PT,IT,LV,ES,CO,LT,X1,SE,BG,DK,GR,BE', '1', 'RNG', ''),
(157, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20sugarrush.png', '1646488614', 'vs20sugarrush', 'Sugar Rush', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'X1,CO,ON,ES,LT,IM,RS,DK,GG,IT,NL,EE,UK,LV,ZA,GR,MT,DE,PT,UA,99,66,IE,SE,RO,BG,BY,AT,NO,BE', '1', 'RNG', 'BUY'),
(158, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20clspwrndg.png', '1661154054', 'vs20clspwrndg', 'Sweet Powernudge', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'LV,DK,LT,CO,BG,NL,ON,ES,66,99,DE,EE,GG,IE,IM,MT,RO,RS,UA,UK,ZA,BE,PT,SE,GR,IT', '1', 'RNG', 'ANTE,FREE_BONUS_FEATURE,BUY'),
(159, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20swordofares.png', '1657802275', 'vs20swordofares', 'Sword of Ares', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'IT,NL,ON,PT,SE,66,99,DE,EE,GG,IE,IM,LV,MT,RO,RS,UA,UK,ZA,BG,ES,DK,CO,LT,GR,BE', '1', 'RNG', 'FREE_BONUS_FEATURE,BUY'),
(160, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20doghousemh.png', '1671616840', 'vs20doghousemh', 'The Dog House Multihold', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'BE,IT,PT,SE,66,99,DE,EE,GG,IE,IM,LV,MT,RO,RS,UA,UK,ZA,NL,ON', '1', 'RNG', 'FREE_BONUS_FEATURE,BUY'),
(161, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20sknights.png', '1666631946', 'vs20sknights', 'The Knight King', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '99', '1', 'RNG', 'FREE_BONUS_FEATURE,BUY'),
(162, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20theights.png', '1650457777', 'vs20theights', 'Towering Fortunes', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'CO,LT,BG,66,99,DE,EE,GG,IE,IM,MT,RO,RS,UA,UK,ZA,GR,ES,DK,LV,ON,PT,SE,IT,NL,BE', '1', 'RNG', 'FREE_BONUS_FEATURE'),
(163, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vswaysjkrdrop.png', '1646656358', 'vswaysjkrdrop', 'Tropical Tiki', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'BG,DK,CO,X1,66,99,DE,EE,GG,GR,IE,IM,MT,RO,RS,UA,UK,ZA,IT,LV,NL,PT,SE,ES,ON,LT,BY,BE', '1', 'RNG', 'FREE_BONUS_FEATURE,BUY'),
(164, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20mparty.png', '1651051209', 'vs20mparty', 'Wild Hop & Drop', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '66,99,DE,EE,LT,GR,DK,BG,CO,X1,SE,LV,GG,IE,IM,MT,RO,RS,UA,UK,ZA,IT,NL,ON,PT,ES,BE', '1', 'RNG', 'FREE_BONUS_FEATURE,BUY'),
(165, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20pistols.png', '1658782771', 'vs20pistols', 'Wild West Duels', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '66,99,DE,EE,GG,IE,IM,LV,MT,RO,RS,UA,UK,ZA,IT,NL,ON,CO,PT,SE,BE,GR,LT,DK', '1', 'RNG', 'FREE_BONUS_FEATURE,BUY'),
(166, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vswayswwhex.png', '1655994486', 'vswayswwhex', 'Wild Wild Bananas', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'GG,CO,DK,GR,LT,PT,SE,UK,66,99,DE,EE,IE,IM,MT,RO,RS,UA,ZA,IT,LV,NL,ON,BE,BG,ES', '1', 'RNG', 'ANTE,FREE_BONUS_FEATURE'),
(167, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vswayswwriches.png', '1663938013', 'vswayswwriches', 'Wild Wild Riches Megaways', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'GG,IM,UK,BE,66,99,DE,EE,IE,MT,RO,RS,UA,ZA,IT,LV,PT,SE,CO,DK,GR,LT,NL,ON,ES,BG', '1', 'RNG', 'FREE_BONUS_FEATURE,BUY'),
(168, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs40spartaking.png', '1597399279', 'vs40spartaking', 'Spartan King', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'CO,ES,IT,RS,GG,LV,99,IM,RO,EE,GR,UK,DE,LT,MT,ZA,BG,PT,SE,X1,UA,66,IE,BE', '1', 'RNG', ''),
(169, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/bjmb.png', '1510756997', 'bjmb', 'American Blackjack', 'bj', 'Blackjack', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'UK,IT,IM,SE,MT,EE,CO,RO,DK,99,GG,RS,ZA,UA,PT,66,IE,BE', '0', 'LC', '');
INSERT INTO `tb_gamelist` (`cuid`, `provider`, `image`, `gameidnumeric`, `gameid`, `gamename`, `gametypeid`, `category`, `technology`, `platform`, `demogame`, `aspectratio`, `technologyid`, `jurisdictions`, `frbavailable`, `datatype`, `features`) VALUES
(170, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vswaysaztecking.png', '1623317373', 'vswaysaztecking', 'Aztec King Megaways', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '99', '1', 'RNG', 'ANTE,BUY'),
(171, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/cs5moneyroll.png', '1507188401', 'cs5moneyroll', 'Money Roll', 'cs', 'Classic Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '99', '0', 'RNG', ''),
(172, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs5ultrab.png', '1584361706', 'vs5ultrab', 'Ultra Burn', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'EE,UK,MT,IM,LV,GR,DK,IT,GG,BG,99,CO,ES,RS,RO,LT,PT,DE,SE,NL,ZA,X1,UA,66,CH,IE,CZ,BY,BE', '1', 'RNG', ''),
(173, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20emptybank.png', '1617603300', 'vs20emptybank', 'Empty the Bank', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'EE,IM,GG,UK,RO,ZA,GR,MT,DE,UA,99,66,RS,BG,IT,X1,CO,LT,DK,PT,ES,SE,LV,IE,ON,BE', '1', 'RNG', 'ANTE,BUY'),
(174, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs243chargebull.png', '1622189972', 'vs243chargebull', 'Raging Bull', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '99', '1', 'RNG', ''),
(175, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs25btygold.png', '1622215011', 'vs25btygold', 'Bounty Gold', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'GG,RS,EE,UA,99,UK,66,IM,RO,DE,ZA,MT,GR,DK,SE,PT,LV,IE,CO,ES,IT,LT,X1,BG,NL,BE', '1', 'RNG', ''),
(176, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs25gldox.png', '1605616608', 'vs25gldox', 'Golden Ox', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '99', '1', 'RNG', ''),
(177, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20eightdragons.png', '1495539348', 'vs20eightdragons', '8 Dragons', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'LV,UK,99,GG,IM,EE,RS,MT,IT,ZA,UA,66,IE,RO,BE', '1', 'RNG', ''),
(178, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs1money.png', '1580468307', 'vs1money', 'Money Money Money', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '99', '1', 'RNG', ''),
(179, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs25mmouse.png', '1574083679', 'vs25mmouse', 'Money Mouse', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'LT,IT,PT,RO,CO,GG,RS,ES,LV,UK,MT,EE,99,BG,SE,IM,DE,GR,ZA,X1,UA,66,IE,BY,BE', '1', 'RNG', ''),
(180, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs25rio.png', '1616072367', 'vs25rio', 'Heart of Rio', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'EE,MT,66,ZA,UA,GG,IT,99,ES,IM,SE,RO,RS,DE,PT,UK,LT,GR,LV,DK,CO,X1,BG,IE,BY,ON,BE', '1', 'RNG', ''),
(181, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs75bronco.png', '1581319336', 'vs75bronco', 'Bronco Spirit', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'BG,RS,LV,GR,MT,PT,ES,RO,EE,UK,GG,99,LT,DE,IM,SE,IT,CO,DK,ZA,X1,UA,66,IE,BY,BE', '1', 'RNG', ''),
(182, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20bermuda.png', '1622797439', 'vs20bermuda', 'Bermuda Riches', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'IM,MT,RO,RS,ZA,UA,GR,99,66,UK,EE,DE,GG,LT,CO,X1,DK,LV,BG,SE,ES,PT,IT,IE,BY,NL,BE', '1', 'RNG', 'BUY'),
(183, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs40bigjuan.png', '1627046307', 'vs40bigjuan', 'Big Juan', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'DK,GG,RO,GR,LV,ZA,MT,EE,PT,IM,DE,UK,66,RS,SE,UA,99,IT,IE,X1,ES,BG,CO,LT,ON,BE', '1', 'RNG', 'BUY'),
(184, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vswayschilheat.png', '1617610052', 'vswayschilheat', 'Chilli Heat Megaways', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'DK,IM,ZA,GG,MT,RS,UA,ES,GR,DE,RO,66,99,EE,UK,LT,IT,PT,SE,BG,LV,X1,CO,IE,ON,BY,NL,BE', '1', 'RNG', 'ANTE,BUY'),
(185, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs243fortseren.png', '1562750191', 'vs243fortseren', 'Greek Gods', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'ES,DE,RO,IT,LT,SE,LV,CO,GR,99,EE,GG,IM,RS,MT,UK,BG,PT,ZA,X1,UA,66,IE,BE', '1', 'RNG', ''),
(186, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs10bookazteck.png', '1644420346', 'vs10bookazteck', 'Book of Aztec King', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '99', '1', 'RNG', 'BUY'),
(187, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs1024lionsd.png', '1591365456', 'vs1024lionsd', '5 Lions Dance', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'LT,CO,BG,GG,UK,IM,PT,SE,RS,LV,EE,99,RO,IT,DK,ES,MT,ZA,DE,GR,X1,UA,66,IE,BE', '1', 'RNG', ''),
(188, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20chickdrop.png', '1619768910', 'vs20chickdrop', 'Chicken Drop', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'ZA,DE,GR,UK,99,GG,MT,RO,IM,RS,66,EE,UA,ES,DK,CO,X1,IT,LT,LV,BG,PT,SE,IE,BY,ON,NL,BE', '1', 'RNG', 'BUY'),
(189, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs576hokkwolf.png', '1620375335', 'vs576hokkwolf', 'Hokkaido Wolf', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '99', '1', 'RNG', 'ANTE'),
(190, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs75empress.png', '1573481798', 'vs75empress', 'Golden Beauty', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'RO,ES,DE,SE,IM,LT,BG,MT,LV,CO,99,DK,GR,RS,PT,IT,EE,UK,GG,ZA,X1,UA,66,IE,BY,BE', '1', 'RNG', ''),
(191, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs1600drago.png', '1573809698', 'vs1600drago', 'Drago - Jewels of Fortune', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'GR,DE,ES,RS,IM,GG,LT,99,IT,EE,LV,RO,MT,PT,UK,BG,CO,DK,SE,ZA,X1,UA,66,IE,BE', '1', 'RNG', 'BUY'),
(192, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs1fortunetree.png', '1559907578', 'vs1fortunetree', 'Tree of Riches', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'BG,RS,CO,LV,IT,RO,MT,PT,GG,LT,EE,DE,DK,ES,GR,IM,UK,99,SE,ZA,X1,UA,66,IE,BE', '1', 'RNG', ''),
(193, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/cs5triple8gold.png', '1484225848', 'cs5triple8gold', '888 Gold', 'cs', 'Classic Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '99', '0', 'RNG', ''),
(194, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs10bblpop.png', '1631598049', 'vs10bblpop', 'Bubble Pop', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '99', '1', 'RNG', ''),
(195, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs25pyramid.png', '1582874025', 'vs25pyramid', 'Pyramid King', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '99,LV,RO,MT,UK,DK,IT,GG,CO,GR,LT,EE,SE,BG,DE,IM,PT,ES,RS,ZA,X1,UA,66,IE,BY,BE', '1', 'RNG', ''),
(196, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20vegasmagic.png', '1525426594', 'vs20vegasmagic', 'Vegas Magic', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'RO,CO,UK,LT,RS,LV,ES,BG,PT,IT,EE,99,IM,MT,GG,SE,ZA,X1,UA,66,IE,BE', '1', 'RNG', ''),
(197, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/bjma.png', '1455872782', 'bjma', 'Multihand Blackjack', 'bj', 'Blackjack', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'CO,99,IM,GG,SE,MT,RO,DK,RS,IT,EE,UK,ZA,UA,PT,66,IE,BE', '0', 'LC', ''),
(198, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vswaysbbb.png', '1628177246', 'vswaysbbb', 'Big Bass Bonanza Megaways', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'UA,UK,GR,MT,EE,DE,GG,RS,66,ZA,RO,IM,99,IE,DK,LT,BG,ES,LV,SE,BY,CO,PT,X1,IT,NL,BE', '1', 'RNG', ''),
(199, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs432congocash.png', '1598948184', 'vs432congocash', 'Congo Cash', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'CO,NL,DK,RO,DE,SE,IM,GR,IT,LT,LV,GG,BG,99,UK,ZA,PT,MT,EE,RS,ES,X1,UA,66,CH,IE,BY,CZ,ON,BE', '1', 'RNG', ''),
(200, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20colcashzone.png', '1630654866', 'vs20colcashzone', 'Colossal Cash Zone', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'BY,ES,66,99,DE,EE,GG,GR,IM,LV,MT,RO,RS,UA,UK,ZA,BG,IE,X1,PT,CO,SE,LT,DK,IT,NL,BE', '1', 'RNG', ''),
(201, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs243dancingpar.png', '1574956138', 'vs243dancingpar', 'Dance Party', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'DE,GR,UK,RO,SE,DK,BG,CO,RS,IM,99,LV,IT,MT,LT,GG,EE,ES,PT,ZA,X1,UA,66,IE,BE', '1', 'RNG', ''),
(202, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs25goldpig.png', '1546428971', 'vs25goldpig', 'Golden Pig', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '99', '1', 'RNG', ''),
(203, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs40wanderw.png', '1625224653', 'vs40wanderw', 'Wild Depths', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'IT,ES,IE,CO,X1,SE,NL,BG,PT,DE,GR,99,LV,UA,ZA,RS,DK,IM,MT,GG,LT,RO,UK,EE,66,BE', '1', 'RNG', ''),
(204, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs1masterjoker.png', '1576066858', 'vs1masterjoker', 'Master Joker', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'RO,MT,GG,SE,LV,UK,BG,IT,IM,99,GR,ES,EE,DE,DK,CO,LT,PT,RS,ZA,X1,UA,NL,66,CH,IE,CZ,BY,BE', '1', 'RNG', ''),
(205, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs243fortune.png', '1496240977', 'vs243fortune', 'Caishen&apos;s Gold', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'IM,CO,BG,UK,IT,99,GG,ES,RS,MT,LV,PT,RO,DK,EE,LT,ZA,DE,GR,X1,UA,66,SE,IE,BY,BE', '1', 'RNG', ''),
(206, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs9piggybank.png', '1620304691', 'vs9piggybank', 'Piggy Bank Bills', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'LT,CO,BG,X1,UA,UK,GG,ZA,EE,RS,DE,66,99,GR,RO,MT,IM,ES,LV,PT,SE,DK,IT,IE,BY,BE', '1', 'RNG', ''),
(207, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs25wolfgold.png', '1487350061', 'vs25wolfgold', 'Wolf Gold', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'BY,SE,99,BG,UK,GR,LV,IT,RS,RO,EE,MT,ES,DE,DK,LT,GG,CO,IM,PT,ZA,X1,UA,NL,66,CH,IE,CZ,ON,BE,AT', '1', 'RNG', ''),
(208, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/bca.png', '1455872785', 'bca', 'Baccarat', 'bc', 'Baccarat', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'MT,99,CO,RS,GG,IT,IM,DK,RO,EE,UK,SE,ZA,UA,66,IE,BE', '0', 'LC', ''),
(209, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20wildboost.png', '1608204824', 'vs20wildboost', 'Wild Booster', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'DK,99,ES,SE,IT,BG,LV,EE,UK,GG,GR,66,MT,RO,DE,IM,ZA,RS,CO,PT,LT,X1,NL,UA,CH,IE,CZ,BE', '1', 'RNG', 'BUY'),
(210, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vswayswerewolf.png', '1589544488', 'vswayswerewolf', 'Curse of the Werewolf Megaways', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'LT,BG,PT,IT,IM,UK,LV,SE,CO,ES,99,RS,GG,DK,EE,RO,MT,DE,GR,NL,ZA,66,X1,UA,CH,IE,CZ,ON,BE', '1', 'RNG', 'BUY'),
(211, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs25wildspells.png', '1499775857', 'vs25wildspells', 'Wild Spells', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'ES,RS,MT,EE,99,IM,LT,IT,RO,LV,GG,PT,BG,SE,CO,UK,DK,ZA,DE,GR,X1,UA,66,IE,BY,BE', '1', 'RNG', ''),
(212, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs5super7.png', '1573127688', 'vs5super7', 'Super 7s ', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'CO,ES,UK,BG,99,SE,DE,MT,IT,RO,GG,LT,GR,EE,LV,IM,RS,PT,DK,NL,ZA,X1,UA,66,CH,IE,CZ,BY,BE', '1', 'RNG', ''),
(213, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs10bookoftut.png', '1582290405', 'vs10bookoftut', 'Book of Tut', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'BG,DE,EE,MT,ES,IM,LT,CO,GR,RS,LV,GG,DK,UK,99,IT,RO,PT,SE,ZA,X1,UA,NL,66,CH,IE,CZ,BY,ON,AT,BE', '1', 'RNG', 'BUY'),
(214, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs10luckcharm.png', '1614601142', 'vs10luckcharm', 'Lucky, Grace & Charm', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'BG,PT,ES,LT,DK,IT,SE,DE,RO,UA,EE,CO,GG,LV,UK,66,IM,MT,RS,X1,ZA,GR,99,IE,BE', '1', 'RNG', ''),
(215, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs40pirgold.png', '1596114870', 'vs40pirgold', 'Pirate Gold Deluxe', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'LV,IT,ES,BG,PT,EE,RO,RS,ZA,MT,GG,IM,GR,99,DE,UK,CO,DK,LT,SE,UA,66,IE,BE', '1', 'RNG', 'BUY'),
(216, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs1tigers.png', '1513070130', 'vs1tigers', 'Triple Tigers', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'MT,IT,IM,EE,RO,GG,99,LV,RS,SE,UK,ZA,UA,66,IE,BE', '1', 'RNG', ''),
(217, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs10wildtut.png', '1599212816', 'vs10wildtut', 'Mysterious Egypt', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'CO,MT,RO,RS,EE,UK,DE,LV,99,GR,IM,GG,ZA,LT,SE,PT,BG,DK,IT,ES,X1,UA,66,IE,ON,BE', '1', 'RNG', 'BUY'),
(218, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs25newyear.png', '1511857851', 'vs25newyear', 'Lucky New Year', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'EE,99,RS,CO,MT,IT,RO,GG,IM,UK,SE,LV,ZA,X1,UA,66,IE,BE', '1', 'RNG', ''),
(219, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vswayswest.png', '1619447303', 'vswayswest', 'Mystic Chief', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'DK,PT,CO,IT,LV,X1,LT,BG,ES,99,RS,RO,DE,UA,GG,EE,ZA,IM,UK,66,GR,MT,SE,IE,BY,ON,BE', '1', 'RNG', ''),
(220, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs25tigerwar.png', '1589357657', 'vs25tigerwar', 'The Tiger Warrior', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '99', '1', 'RNG', ''),
(221, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs25peking.png', '1529399160', 'vs25peking', 'Peking Luck', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '99,PT,BG,LT,LV,GG,MT,RO,ES,CO,EE,IM,IT,UK,RS,SE,ZA,DE,GR,X1,UA,66,IE,BE', '1', 'RNG', ''),
(222, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs1024dtiger.png', '1592569000', 'vs1024dtiger', 'The Dragon Tiger', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'DK,SE,EE,LV,GG,IM,LT,RS,99,MT,RO,UK,CO,ZA,ES,BG,IT,DE,GR,PT,X1,UA,66,IE,BE', '1', 'RNG', ''),
(223, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20smugcove.png', '1626269940', 'vs20smugcove', 'Smugglers Cove', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'BG,IE,LT,CO,X1,IT,DK,EE,IM,RS,ZA,SE,UK,66,RO,DE,GG,LV,UA,99,GR,MT,NL,ES,PT,BE', '1', 'RNG', 'ANTE'),
(224, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs25asgard.png', '1523960262', 'vs25asgard', 'Asgard', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'IM,SE,LV,IT,BG,UK,MT,CO,GG,PT,RO,LT,ES,99,RS,EE,ZA,X1,UA,66,IE,BE', '1', 'RNG', ''),
(225, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs25goldrush.png', '1507726919', 'vs25goldrush', 'Gold Rush', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'GR,DE,BG,RS,MT,DK,CO,LT,IT,UK,EE,PT,ES,LV,RO,IM,GG,SE,99,ZA,X1,UA,66,IE,BE', '1', 'RNG', ''),
(226, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs5spjoker.png', '1564667918', 'vs5spjoker', 'Super Joker', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'MT,PT,EE,99,SE,BG,UK,GR,LT,ES,LV,RO,DK,CO,GG,IM,DE,IT,RS,NL,ZA,X1,UA,66,CH,IE,CZ,BY,BE', '1', 'RNG', ''),
(227, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs1024butterfly.png', '1524579919', 'vs1024butterfly', 'Jade Butterfly', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'RO,IM,GG,SE,RS,EE,99,LT,ES,MT,BG,UK,PT,LV,IT,ZA,UA,66,IE,BE', '0', 'RNG', ''),
(228, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs5hotburn.png', '1578498329', 'vs5hotburn', 'Hot to Burn', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'MT,IM,CO,ES,LT,GG,LV,UK,EE,99,IT,RO,DK,PT,SE,RS,BG,DE,GR,NL,ZA,UA,66,CH,IE,BY,CZ,BE', '1', 'RNG', ''),
(229, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs10mayangods.png', '1594304610', 'vs10mayangods', 'John Hunter And The Mayan Gods', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'CO,MT,LV,RO,GG,IM,ZA,EE,RS,UK,GR,99,DE,DK,IT,SE,LT,BG,ES,PT,X1,UA,NL,66,CH,IE,CZ,BY,BE', '1', 'RNG', ''),
(230, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs10madame.png', '1524489855', 'vs10madame', 'Madame Destiny', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'DK,MT,GG,EE,PT,99,IT,IM,DE,RO,ES,BG,UK,RS,LT,GR,LV,CO,SE,ZA,X1,UA,66,IE,BE', '1', 'RNG', ''),
(231, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/bnadvanced.png', '1545750248', 'bnadvanced', 'Dragon Bonus Baccarat', 'bn', 'Baccarat New', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '99', '0', 'LC', ''),
(232, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20daydead.png', '1625747556', 'vs20daydead', 'Day of Dead', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'LV,UA,UK,99,MT,GG,RO,CO,DK,GR,LT,66,IT,DE,PT,RS,X1,EE,ZA,IM,SE,BG,ES,IE,BY,NL,BE', '1', 'RNG', 'BUY'),
(233, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs25samurai.png', '1590072949', 'vs25samurai', 'Rise of Samurai', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '99', '1', 'RNG', ''),
(234, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs25vegas.png', '1498044866', 'vs25vegas', 'Vegas Nights', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'IT,IM,UK,RO,EE,RS,MT,BG,LT,99,GG,SE,PT,ES,LV,ZA,UA,66,IE,BE', '1', 'RNG', ''),
(235, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vswayshive.png', '1590991956', 'vswayshive', 'Star Bounty', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'GG,BG,RO,LT,UK,DK,LV,IM,CO,ES,IT,99,MT,PT,EE,SE,RS,ZA,DE,GR,66,X1,UA,IE,BE', '1', 'RNG', 'BUY'),
(236, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs25jokerking.png', '1603968551', 'vs25jokerking', 'Joker King', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'LT,IT,ES,SE,NL,CO,DK,PT,BG,99,EE,GG,MT,IM,LV,DE,UK,ZA,GR,RO,RS,X1,UA,66,CH,IE,CZ,BE', '1', 'RNG', ''),
(237, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs1fufufu.png', '1587098558', 'vs1fufufu', 'Fu Fu Fu', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '99', '1', 'RNG', ''),
(238, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs10threestar.png', '1581497589', 'vs10threestar', 'Three Star Fortune', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'IT,ES,RO,LV,GG,LT,BG,GR,EE,MT,RS,SE,CO,UK,99,PT,IM,DE,ZA,X1,UA,66,IE,BE', '1', 'RNG', ''),
(239, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs40voodoo.png', '1597418564', 'vs40voodoo', 'Voodoo Magic', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'PT,CO,99,LT,MT,EE,LV,RO,RS,SE,ZA,DE,GG,IM,GR,UK,IT,ES,BG,UA,66,IE,BE', '1', 'RNG', 'BUY'),
(240, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs25dragonkingdom.png', '1478788538', 'vs25dragonkingdom', 'Dragon Kingdom', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'GR,DE,99,IM,EE,RS,IT,ES,GG,LV,PT,BG,CO,RO,MT,SE,UK,DK,ZA,X1,UA,66,IE,BY,BE', '1', 'RNG', ''),
(241, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs1ball.png', '1573134508', 'vs1ball', 'Lucky Dragon Ball', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '99', '1', 'RNG', ''),
(242, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs25kingdoms.png', '1489503590', 'vs25kingdoms', '3 Kingdoms - Battle of Red Cliffs', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'IM,LV,BG,RO,ES,MT,RS,EE,UK,99,LT,PT,GG,ZA,UA,66,IE,BE', '1', 'RNG', ''),
(243, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs10goldfish.png', '1606314731', 'vs10goldfish', 'Fishin Reels', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'IM,UK,EE,GR,GG,RS,ZA,99,DE,LV,MT,RO,PT,LT,SE,X1,IT,UA,BG,CO,ES,DK,NL,66,CH,IE,BY,CZ,ON,BE', '1', 'RNG', ''),
(244, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20hercpeg.png', '1562075684', 'vs20hercpeg', 'Hercules and Pegasus', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'DE,GR,UK,GG,RO,IT,RS,BG,LT,DK,SE,PT,EE,CO,MT,IM,99,ES,LV,ZA,X1,UA,66,IE,BE', '1', 'RNG', ''),
(245, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20egypttrs.png', '1536585008', 'vs20egypttrs', 'Egyptian Fortunes', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'SE,DK,EE,RS,GG,BG,99,MT,IT,RO,LT,IM,PT,ES,CO,LV,UK,ZA,DE,GR,X1,UA,66,IE,BE', '1', 'RNG', ''),
(246, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs50safariking.png', '1537433259', 'vs50safariking', 'Safari King', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '99,MT,SE,CO,DK,LV,PT,IT,UK,BG,LT,GG,IM,EE,RS,ES,RO,ZA,X1,UA,66,IE,BE', '1', 'RNG', ''),
(247, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs50pixie.png', '1496932177', 'vs50pixie', 'Pixie Wings', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'MT,DK,CO,UK,PT,BG,RO,GG,IM,LV,EE,LT,SE,IT,RS,99,ES,ZA,X1,UA,66,IE,BE', '1', 'RNG', ''),
(248, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20ekingrr.png', '1601366016', 'vs20ekingrr', 'Emerald King Rainbow Road', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'DK,BG,ZA,EE,GR,LV,MT,RS,UK,99,GG,IT,DE,RO,IM,PT,LT,SE,ES,CO,X1,UA,66,IE,BE', '1', 'RNG', ''),
(249, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs88hockattack.png', '1628247387', 'vs88hockattack', 'Hockey Attack', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '99', '1', 'RNG', ''),
(250, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vswaysbankbonz.png', '1624007316', 'vswaysbankbonz', 'Cash Bonanza', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'PT,DK,LV,DE,IM,EE,RO,RS,UK,GR,MT,UA,GG,ZA,66,99,LT,IT,ES,BG,X1,CO,SE,IE,ON,BY,BE', '1', 'RNG', ''),
(251, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20honey.png', '1560171048', 'vs20honey', 'Honey Honey Honey', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'SE,GG,BG,RO,IM,IT,EE,LV,PT,DK,CO,RS,99,MT,LT,UK,ES,ZA,X1,UA,66,IE,BE', '1', 'RNG', ''),
(252, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/rla.png', '1455872890', 'rla', 'Roulette', 'rl', 'Roulette', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'RS,CO,SE,99,RO,MT,DK,IT,ES,EE,UK,IM,GG,ZA,X1,UA,PT,66,IE,BE', '0', 'RNG', ''),
(253, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20santa.png', '1507812581', 'vs20santa', 'Santa', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'ES,BG,DK,CO,GG,MT,LT,LV,SE,RS,PT,RO,UK,EE,IM,99,IT,ZA,GR,DE,X1,UA,66,IE,BE', '1', 'RNG', ''),
(254, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20wildpix.png', '1536841004', 'vs20wildpix', 'Wild Pixies', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'ES,SE,99,IT,IM,BG,LT,RO,GG,MT,CO,EE,LV,PT,RS,UK,ZA,UA,66,IE,BE', '1', 'RNG', ''),
(255, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs18mashang.png', '1538387434', 'vs18mashang', 'Treasure Horse', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'RS,IM,IT,GG,DK,EE,ES,RO,PT,MT,99,UK,LT,BG,SE,LV,ZA,UA,66,IE,BE', '1', 'RNG', ''),
(256, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs9madmonkey.png', '1511957943', 'vs9madmonkey', 'Monkey Madness', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'RS,IT,EE,ES,RO,GG,LV,UK,PT,LT,SE,MT,99,BG,IM,ZA,66,UA,IE,BE', '1', 'RNG', ''),
(257, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs40madwheel.png', '1556892148', 'vs40madwheel', 'The Wild Machine', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'EE,RS,RO,IM,UK,GG,99,SE,IT,PT,DE,MT,LV,CO,DK,BG,ES,GR,LT,ZA,X1,UA,66,IE,BE', '1', 'RNG', ''),
(258, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20leprexmas.png', '1539081379', 'vs20leprexmas', 'Leprechaun Carol', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'IM,BG,GG,ES,LT,EE,SE,99,DK,LV,IT,PT,MT,CO,RO,RS,UK,ZA,DE,GR,X1,UA,66,IE,BE', '1', 'RNG', ''),
(259, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs9hotroll.png', '1560415906', 'vs9hotroll', 'Hot Chilli', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'EE,99,PT,SE,IM,RS,GG,UK,IT,ES,LT,LV,BG,CO,MT,RO,ZA,66,X1,UA,IE,BE', '1', 'RNG', ''),
(260, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20chicken.png', '1550648841', 'vs20chicken', 'The Great Chicken Escape', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'LV,SE,BG,CO,DK,RS,GG,PT,IT,EE,LT,RO,UK,ES,MT,99,IM,ZA,X1,UA,66,IE,BY,NL,BE', '1', 'RNG', ''),
(261, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs10starpirate.png', '1623297136', 'vs10starpirate', 'Star Pirates Code', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'CO,LT,X1,BG,ES,66,UA,GG,99,GR,DE,ZA,UK,EE,RO,MT,RS,IM,DK,SE,PT,IT,LV,IE,NL,BE', '1', 'RNG', ''),
(262, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/cs3w.png', '1455872761', 'cs3w', 'Diamonds are Forever 3 Lines', 'cs', 'Classic Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '99', '0', 'RNG', ''),
(263, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs9chen.png', '1532961240', 'vs9chen', 'Master Chen&apos;s Fortune', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'ES,MT,99,PT,IM,RO,IT,SE,RS,LT,UK,GG,EE,BG,LV,ZA,66,UA,IE,BE', '1', 'RNG', ''),
(264, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20eking.png', '1595853176', 'vs20eking', 'Emerald King', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'SE,CO,PT,BG,99,EE,RO,IT,RS,GG,DK,MT,UK,LT,IM,ES,LV,ZA,GR,DE,X1,UA,66,IE,BE', '1', 'RNG', ''),
(265, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs50hercules.png', '1477914757', 'vs50hercules', 'Hercules Son of Zeus', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'IT,EE,LV,RO,RS,MT,IM,PT,99,UK,SE,ES,GG,ZA,UA,66,IE,BE', '1', 'RNG', ''),
(266, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs25davinci.png', '1519836742', 'vs25davinci', 'Da Vinci&apos;s Treasure', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'DK,GG,LV,LT,UK,PT,CO,ES,MT,SE,EE,RO,IT,99,BG,IM,RS,NL,ZA,GR,DE,X1,UA,66,CH,IE,BE', '1', 'RNG', ''),
(267, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20magicpot.png', '1613144805', 'vs20magicpot', 'The Magic Cauldron', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'RO,LV,66,MT,DE,IM,GG,RS,EE,GR,ZA,UA,IT,LT,SE,DK,ES,BG,99,UK,PT,X1,CO,IE,BY,ON,BE', '1', 'RNG', ''),
(268, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs15fairytale.png', '1515507828', 'vs15fairytale', 'Fairytale Fortune', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'LT,SE,IT,UK,RS,EE,BG,GG,RO,MT,LV,PT,99,IM,ES,ZA,UA,66,IE,BE', '1', 'RNG', ''),
(269, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs25journey.png', '1464092888', 'vs25journey', 'Journey to the West', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'IT,PT,SE,UK,ES,IM,99,LV,CO,MT,EE,GG,RO,RS,ZA,X1,UA,66,IE,BE', '1', 'RNG', ''),
(270, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20godiva.png', '1455872846', 'vs20godiva', 'Lady Godiva', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'RS,IM,MT,RO,EE,SE,IT,LV,UK,GG,99,PH,ZA,UA,66,IE,BE', '1', 'RNG', ''),
(271, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs40frrainbow.png', '1579613180', 'vs40frrainbow', 'Fruit Rainbow', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'GR,LT,DK,99,RS,EE,ES,CO,GG,BG,RO,IM,LV,SE,PT,DE,UK,IT,MT,ZA,X1,UA,66,IE,BE', '1', 'RNG', ''),
(272, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs5drmystery.png', '1599640357', 'vs5drmystery', 'Dragon Kingdom - Eyes of Fire', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'SE,PT,CO,ES,DK,IT,BG,99,DE,LV,RS,RO,ZA,IM,MT,GG,UK,GR,EE,LT,X1,UA,66,IE,BE', '1', 'RNG', ''),
(273, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs50chinesecharms.png', '1461317789', 'vs50chinesecharms', 'Lucky Dragons', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'IT,IM,SE,GG,EE,99,LV,RS,RO,UK,MT,ZA,UA,66,IE,BE', '1', 'RNG', ''),
(274, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/cs3irishcharms.png', '1487083475', 'cs3irishcharms', 'Irish Charms', 'cs', 'Classic Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '99', '0', 'RNG', ''),
(275, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs3train.png', '1492772366', 'vs3train', 'Gold Train', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'GG,IM,UK,EE,MT,LV,RS,99,RO,ZA,UA,66,IE,BE', '1', 'RNG', ''),
(276, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs4096mystery.png', '1576682710', 'vs4096mystery', 'Mysterious', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'LV,DK,CO,RS,EE,UK,ES,LT,MT,99,DE,BG,IT,RO,SE,IM,GR,GG,PT,ZA,X1,UA,66,IE,BE', '1', 'RNG', ''),
(277, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs25safari.png', '1457774328', 'vs25safari', 'Hot Safari', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'PT,SE,EE,UK,RO,MT,GG,99,RS,CO,PH,BG,IT,IM,ES,LV,ZA,X1,UA,66,IE,BE', '1', 'RNG', ''),
(278, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs7776secrets.png', '1550843208', 'vs7776secrets', 'Aztec Treasure', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'GG,LT,DK,EE,IM,LV,SE,ES,PT,99,RO,CO,BG,MT,RS,IT,UK,GR,DE,ZA,X1,UA,66,IE,BE', '1', 'RNG', ''),
(279, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs25queenofgold.png', '1486107537', 'vs25queenofgold', 'Queen of Gold', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'RS,MT,RO,BG,EE,99,CO,IT,SE,UK,ES,LV,IM,GG,PT,ZA,GR,DE,X1,UA,66,IE,BE', '1', 'RNG', ''),
(280, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs7pigs.png', '1499426883', 'vs7pigs', '7 Piggies', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'IT,LV,GG,EE,BG,RO,SE,99,IM,PT,UK,MT,ES,LT,RS,ZA,UA,66,IE,BE', '1', 'RNG', ''),
(281, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs25sea.png', '1455872798', 'vs25sea', 'Great Reef', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '99,PH', '1', 'RNG', ''),
(282, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs50aladdin.png', '1478694817', 'vs50aladdin', '3 Genie Wishes', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'IT,SE,99,DK,GG,BG,CO,UK,LV,PT,EE,MT,RS,IM,ES,RO,ZA,X1,UA,66,IE,BE', '1', 'RNG', ''),
(283, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs8magicjourn.png', '1571239142', 'vs8magicjourn', 'Magic Journey', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'LT,IM,CO,EE,MT,IT,LV,RS,PT,BG,SE,ES,RO,UK,99,GG,ZA,X1,UA,66,IE,BE', '1', 'RNG', ''),
(284, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs10vampwolf.png', '1560406594', 'vs10vampwolf', 'Vampires vs Wolves', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'MT,PT,LV,IT,RS,UK,IM,ES,99,SE,CO,RO,DK,GG,LT,BG,EE,ZA,GR,DE,X1,UA,66,IE,BE', '1', 'RNG', ''),
(285, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs25walker.png', '1593692685', 'vs25walker', 'Wild Walker', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'LV,GG,UK,CO,BG,DK,IT,ES,RS,EE,PT,LT,MT,IM,RO,99,SE,ZA,DE,GR,X1,UA,66,IE,BE', '1', 'RNG', ''),
(286, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs50kingkong.png', '1455872792', 'vs50kingkong', 'Mighty Kong', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'SE,99,CO,MT,RO,RS,IT,LV,UK,EE,PH,GG,IM,ZA,X1,UA,66,IE,BE', '1', 'RNG', ''),
(287, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs40streetracer.png', '1582626160', 'vs40streetracer', 'Street Racer', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'EE,UK,LT,RS,IT,GG,DK,BG,99,LV,CO,GR,IM,ES,SE,PT,DE,RO,MT,ZA,X1,UA,66,IE,BE', '1', 'RNG', ''),
(288, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs5trdragons.png', '1536668671', 'vs5trdragons', 'Triple Dragons', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'IM,GG,BG,LT,SE,MT,PT,99,ES,EE,LV,UK,RS,IT,RO,ZA,UA,66,IE,BE', '1', 'RNG', ''),
(289, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/bndt.png', '1546961175', 'bndt', 'Dragon Tiger', 'bn', 'Baccarat New', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '99', '0', 'LC', ''),
(290, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20leprechaun.png', '1524466813', 'vs20leprechaun', 'Leprechaun Song', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'GG,BG,CO,DK,PT,ES,SE,MT,LV,IM,EE,99,IT,UK,RS,LT,RO,ZA,X1,UA,66,IE,BE', '1', 'RNG', ''),
(291, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20aladdinsorc.png', '1562328986', 'vs20aladdinsorc', 'Aladdin and the Sorcerer', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'MT,CO,99,LT,GG,EE,PT,RS,ES,SE,UK,IT,LV,BG,RO,IM,ZA,X1,UA,66,IE,BE', '1', 'RNG', ''),
(292, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs25gladiator.png', '1502116141', 'vs25gladiator', 'Wild Gladiator', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'RS,IT,ES,PT,DK,EE,SE,99,MT,CO,LV,GG,RO,UK,IM,ZA,X1,UA,66,IE,BE', '1', 'RNG', ''),
(293, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20bl.png', '1455872868', 'vs20bl', 'Busy Bees', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '99', '1', 'RNG', ''),
(294, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs10egypt.png', '1512131581', 'vs10egypt', 'Ancient Egypt', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'EE,IM,LT,MT,SE,BG,RO,GG,ES,UK,RS,DK,LV,99,PT,IT,ZA,UA,66,IE,BE', '1', 'RNG', ''),
(295, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20gorilla.png', '1586253637', 'vs20gorilla', 'Jungle Gorilla', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'CO,IM,LT,BG,EE,RS,99,IT,GR,ES,DK,MT,DE,UK,GG,PT,RO,LV,ZA,X1,UA,66,IE,BE', '1', 'RNG', ''),
(296, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs25dwarves_new.png', '1461241564', 'vs25dwarves_new', 'Dwarven Gold Deluxe', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'SE,IT,IM,ES,RO,99,LV,MT,PT,UK,GG,RS,EE,ZA,UA,66,IE,BE', '1', 'RNG', ''),
(297, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs7monkeys.png', '1455872791', 'vs7monkeys', '7 Monkeys', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'IM,EE,RS,SE,GG,PH,LV,RO,UK,BG,MT,IT,ZA,UA,66,99,IE,BY,BE', '1', 'RNG', ''),
(298, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs13g.png', '1455872880', 'vs13g', 'Devil&apos;s 13', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '99', '1', 'RNG', ''),
(299, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/scpandai.png', '1521805857', 'scpandai', 'Panda Gold 50,000', 'sc', 'Scratch card', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '99', '1', 'RNG', ''),
(300, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/scgoldrushai.png', '1521805713', 'scgoldrushai', 'Gold Rush 500,000', 'sc', 'Scratch card', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '99', '1', 'RNG', ''),
(301, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/1301.png', '1301', '1301', 'Live - Spaceman', 'lg', 'Live games', 'html5', 'MOBILE,DOWNLOAD,WEB', '0', '16:9', 'H5', 'IE,99,MT,NL,EE,SE,ZA,GG,UK,ON,UA,RS,IT,BY,IM,LV,RO,CO,GR,X1,CH,NO', '0', 'LC', ''),
(302, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/1101.png', '1101', '1101', 'Live - Sweet Bonanza CandyLand', 'lg', 'Live games', 'html5', 'MOBILE,DOWNLOAD,WEB', '0', '16:9', 'H5', '99,EE,GG,GR,IM,MT,RS,UK,IE,ON,DE,LT,BY,LV,NL,UA,BG,CO,IT,RO,X1,ZA', '0', 'LC', ''),
(303, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/402.png', '402', '402', 'Speed Baccarat 1', 'lg', 'Live games', 'html5', 'MOBILE,DOWNLOAD,WEB', '0', '16:9', 'H5', 'IT,IM,99,UK,MT,DK,SE,RO,GG,RS,ZA,GR,EE,CO,X1,66,BG,ON,CH,IE,LT,NL,DE,LV,BY,UA', '0', 'LC', ''),
(304, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/701.png', '701', '701', 'Live - Mega Sic Bo', 'lg', 'Live games', 'html5', 'MOBILE,DOWNLOAD,WEB', '0', '16:9', 'H5', 'SE,MT,UK,99,IM,IT,EE,GG,RS,GR,ZA,X1,66,BG,CH,IE,ON,NL,UA,LV,LT,DE,CO,BY', '0', 'LC', ''),
(305, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/801.png', '801', '801', 'Live - Mega Wheel', 'lg', 'Live games', 'html5', 'MOBILE,DOWNLOAD,WEB', '0', '16:9', 'H5', '99,IM,IT,MT,UK,RS,EE,ZA,GG,GR,BG,66,X1,CH,IE,ON,NL,UA,DE,LV,CO,LT,BY', '0', 'LC', ''),
(306, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/204.png', '204', '204', 'Live - Mega Roulette', 'lg', 'Live games', 'html5', 'MOBILE,DOWNLOAD,WEB', '0', '16:9', 'H5', '99,BG,CO,DK,IM,IT,MT,SE,UK,EE,RO,RS,BY,ZA,X1,66,ON,CH,IE,GG,GR,LV,DE,NL,UA,LT', '0', 'LC', ''),
(307, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/401.png', '401', '401', 'Baccarat 1', 'lg', 'Live games', 'html5', 'MOBILE,DOWNLOAD,WEB', '0', '16:9', 'H5', 'RO,DK,UK,IT,99,IM,SE,MT,GG,GR,ZA,RS,EE,CO,BG,X1,66,ON,CH,IE,LT,DE,LV,UA,BY,NL', '0', 'LC', ''),
(308, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/901.png', '901', '901', 'Live - ONE Blackjack', 'lg', 'Live games', 'html5', 'MOBILE,DOWNLOAD,WEB', '0', '16:9', 'H5', '99,IT,RO,GG,DK,RS,EE,MT,ZA,GR,IM,UK,SE,CO,BG,66,X1,CH,IE,ON,BY,UA,DE,LT,LV,NL', '0', 'LC', ''),
(309, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/203.png', '203', '203', 'Speed Roulette 1', 'lg', 'Live games', 'html5', 'MOBILE,DOWNLOAD,WEB', '0', '16:9', 'H5', 'IM,SE,DK,UK,IT,MT,RO,99,EE,ZA,GG,RS,GR,CO,BG,66,X1,ON,CH,IE,UA,NL,BY,DE,LT,LV', '0', 'LC', ''),
(310, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/1001.png', '1001', '1001', 'Live - Dragon Tiger', 'lg', 'Live games', 'html5', 'MOBILE,DOWNLOAD,WEB', '0', '16:9', 'H5', 'UA,NL,DE,LT,LV,CO,GG,GR,IT,RO,IM,UK,MT,RS,BG,ZA,99,EE,SE,X1,66,IE,ON,BY,CH', '0', 'LC', ''),
(311, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/201.png', '201', '201', 'Roulette 2', 'lg', 'Live games', 'html5', 'MOBILE,DOWNLOAD,WEB', '0', '16:9', 'H5', 'RO,SE,99,MT,IT,DK,IM,UK,ZA,RS,GR,GG,EE,CO,BG,66,X1,ON,CH,IE,UA,DE,LT,NL,BY,LV', '0', 'LC', ''),
(312, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/1024.png', '1024', '1024', 'Live - Andar Bahar', 'lg', 'Live games', 'html5', 'MOBILE,DOWNLOAD,WEB', '0', '16:9', 'H5', 'BY,DE,CO,NL,X1,ZA,IT,UA,LT,LV,BG,RO,99,EE,GG,GR,IM,MT,RS,SE,UK,CH,IE,ON', '0', 'LC', ''),
(313, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/902.png', '902', '902', 'Live - ONE Blackjack 2 - Ruby', 'lg', 'Live games', 'html5', 'MOBILE,DOWNLOAD,WEB', '0', '16:9', 'H5', 'DK,UK,EE,SE,GR,IM,MT,99,GG,RO,RS,IE,ON,LT,NL,X1,CO,IT,LV,ZA,BG,BY,UA', '0', 'LC', ''),
(314, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/225.png', '225', '225', 'Auto-Roulette 1', 'lg', 'Live games', 'html5', 'MOBILE,DOWNLOAD,WEB', '0', '16:9', 'H5', 'IT,MT,UK,99,SE,DK,RO,IM,EE,RS,GG,GR,ZA,CO,X1,66,BG,ON,CH,IE,LV,BY,DE,LT,UA,NL', '0', 'LC', ''),
(315, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/229.png', '229', '229', 'Live - Roulette 8 - Indian', 'lg', 'Live games', 'html5', 'MOBILE,DOWNLOAD,WEB', '0', '16:9', 'H5', 'ON,BG,CO,IT,99,ZA,GR,MT,EE,UK,GG,IM,DK,RO,RS,X1,SE,CH,IE,NL,BY,UA,LT', '0', 'LC', ''),
(316, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/545.png', '545', '545', 'Live - The Club Roulette', 'lg', 'Live games', 'html5', 'MOBILE,DOWNLOAD,WEB', '0', '16:9', 'H5', 'CH,BG,DK,MT,99,CO,EE,GG,X1,SE,RO,UK,ZA,IM,IT,GR,RS,IE,ON,BY,LV,LT,NL,DE', '0', 'LC', ''),
(317, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/303.png', '303', '303', 'Blackjack 14', 'lg', 'Live games', 'html5', 'MOBILE,DOWNLOAD,WEB', '0', '16:9', 'H5', 'MT,SE,IM,99,DK,IT,RO,UK,ZA,GG,GR,EE,RS,CO,BG,66,X1,ON,CH,IE,BY,UA,LT,NL,DE,LV', '0', 'LC', ''),
(318, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/111.png', '111', '111', 'Live - Other Promos', 'lg', 'Live games', 'html5', 'MOBILE,DOWNLOAD,WEB', '0', '16:9', 'H5', '99,DK,EE,GG,GR,IM,MT,RS,UK,RO,IE,ON,BY,DE,LT,LV,NL,UA', '0', 'LC', ''),
(319, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs25kingdomsnojp.png', '1495185205', 'vs25kingdomsnojp', '3 Kingdoms - Battle of Red Cliffs', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '99,IT', '1', 'RNG', ''),
(320, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/sc7piggiesai.png', '1521800031', 'sc7piggiesai', '7 Piggies 25,000', 'sc', 'Scratch card', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '99', '1', 'RNG', ''),
(321, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/sc7piggies.png', '1508836715', 'sc7piggies', '7 Piggies 5,000', 'sc', 'Scratch card', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '99,RS,LV,EE,UK,GG,RO,IM,MT,ZA,66,IE,UA,BY,BE', '1', 'RNG', ''),
(322, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs25aztecking.png', '1621500658', 'vs25aztecking', 'Aztec King', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '99', '1', 'RNG', ''),
(323, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs10txbigbass.png', '1644578872', 'vs10txbigbass', 'Big Bass Splash', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'ON,BG,LV,DK,LT,ES,CO,X1,66,99,DE,EE,GG,GR,IE,IM,MT,RO,RS,UA,UK,ZA,IT,NL,PT,SE,BY,AT,BE', '1', 'RNG', 'FREE_BONUS_FEATURE,BUY'),
(324, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs25bkofkngdm.png', '1598017285', 'vs25bkofkngdm', 'Book Of Kingdoms', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'LT,SE,LV,UK,GG,IM,RO,RS,99,MT,EE,ES,ZA,DE,GR,IT,DK,CO,PT,BG,NL,UA,66,CH,IE,CZ,BE', '1', 'RNG', ''),
(325, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs10bookfallen.png', '1631697713', 'vs10bookfallen', 'Book of Fallen', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'IE,DE,GR,66,BY,NL,PT,ZA,IM,LT,ON,GG,LV,SE,EE,ES,UA,IT,DK,MT,99,RO,X1,CO,RS,BG,UK,AT,BE', '1', 'RNG', 'SUPER_SPIN,BUY'),
(326, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs10bookviking.png', '1597743733', 'vs10bookviking', 'Book of Vikings', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'BG,GG,RO,EE,RS,IM,DE,GR,MT,UK,99,LT,LV,SE,PT,CO,IT,DK,X1,UA,ES,66,IE,BY,ON,ZA,BE', '1', 'RNG', 'BUY'),
(327, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20cleocatra.png', '1639648701', 'vs20cleocatra', 'Cleocatra', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '66,99,DE,EE,GG,GR,IE,IM,RO,RS,UA,UK,ZA,LV,NL,SE,MT,IT,PT,CO,X1,LT,ON,DK,BG,ES,BY,BE', '1', 'RNG', 'BUY'),
(328, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs15b.png', '1455872873', 'vs15b', 'Crazy 7s', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '99', '1', 'RNG', ''),
(329, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vpdt11.png', '1644584790', 'vpdt11', 'Darts', 'rgs-vsb', 'RGS - VSB', 'html5', 'MOBILE,DOWNLOAD,WEB', '0', '16:9', 'H5', 'CO,EE,IE,MT,RO,RS,SE,UA,UK,99,BY', '0', 'VSB', ''),
(330, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/scdiamond.png', '1508836171', 'scdiamond', 'Diamond Strike 100,000', 'sc', 'Scratch card', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'IM,LV,EE,RS,99,RO,UK,GG,MT,ZA,66,IE,UA,BY,BE', '1', 'RNG', ''),
(331, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/scdiamondai.png', '1521805477', 'scdiamondai', 'Diamond Strike 250,000', 'sc', 'Scratch card', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '99', '1', 'RNG', ''),
(332, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vplfl6.png', '1582273352', 'vplfl6', 'Fantastic League Football', 'rgs-vsb', 'RGS - VSB', 'html5', 'MOBILE,DOWNLOAD,WEB', '0', '16:9', 'H5', '99,MT,UK,IE,EE,RO,RS,SE,UA,CO,BY', '0', 'VSB', ''),
(333, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vpfh3.png', '1584109543', 'vpfh3', 'Flat Horse Racing', 'rgs-vsb', 'RGS - VSB', 'html5', 'MOBILE,DOWNLOAD,WEB', '0', '16:9', 'H5', '99,UK,MT,IE,EE,RO,RS,SE,UA,CO,BY', '0', 'VSB', ''),
(334, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vpmr9.png', '1618816543', 'vpmr9', 'Force 1 Racing', 'rgs-vsb', 'RGS - VSB', 'html5', 'MOBILE,DOWNLOAD,WEB', '0', '16:9', 'H5', '99,IE,MT,EE,RO,RS,SE,UA,CO,BY', '0', 'VSB', ''),
(335, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20fruitparty.png', '1581677875', 'vs20fruitparty', 'Fruit Party', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'MT,CO,DK,RO,IT,LV,IM,99,ES,PT,SE,DE,UK,EE,GG,LT,GR,RS,BG,ZA,X1,UA,NL,66,CH,IE,BY,CZ,ON,AT,NO,BE', '1', 'RNG', 'BUY'),
(336, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs25h.png', '1455872806', 'vs25h', 'Fruity Blast', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '99', '1', 'RNG', ''),
(337, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20gobnudge.png', '1643373167', 'vs20gobnudge', 'Goblin Heist Powernudge', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'CO,X1,BG,66,99,DE,EE,GG,IE,IM,MT,RO,RS,UA,UK,ZA,GR,LT,NL,ON,ES,SE,DK,PT,IT,LV,BY,AT,BE', '1', 'RNG', 'ANTE,FREE_BONUS_FEATURE,BUY'),
(338, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/scgoldrush.png', '1508842495', 'scgoldrush', 'Gold Rush 250,000', 'sc', 'Scratch card', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'RS,UK,MT,99,GG,LV,EE,IM,RO,ZA,66,IE,UA,BY,BE', '1', 'RNG', ''),
(339, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vpdr7.png', '1597653695', 'vpdr7', 'Greyhound Racing', 'rgs-vsb', 'RGS - VSB', 'html5', 'MOBILE,DOWNLOAD,WEB', '0', '16:9', 'H5', '99,MT,UK,IE,EE,RO,RS,SE,UA,CO,BY', '0', 'VSB', ''),
(340, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20hockey.png', '1455872843', 'vs20hockey', 'Hockey League', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '99,PH', '1', 'RNG', ''),
(341, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs9hockey.png', '1455889237', 'vs9hockey', 'Hockey League Wild Match', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '99', '1', 'RNG', ''),
(342, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/scsafari.png', '1508834908', 'scsafari', 'Hot Safari 50,000', 'sc', 'Scratch card', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'EE,LV,RO,IM,GG,UK,99,RS,MT,ZA,66,IE,UA,BY,BE', '1', 'RNG', ''),
(343, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/scsafariai.png', '1521806186', 'scsafariai', 'Hot Safari 75,000', 'sc', 'Scratch card', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '99', '1', 'RNG', ''),
(344, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs15ktv.png', '1455872871', 'vs15ktv', 'KTV', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '99,PH', '1', 'RNG', ''),
(345, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs5littlegem.png', '1643379569', 'vs5littlegem', 'Little Gem Hold and Spin', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'NL,SE,IT,PT,LV,X1,CO,ES,DK,LT,ON,BG,66,99,DE,EE,GG,GR,IE,IM,MT,RO,RS,UA,UK,ZA,BE', '1', 'RNG', ''),
(347, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/1401.png', '1401', '1401', 'Live - BOOM CITY', 'lg', 'Live games', 'html5', 'MOBILE,DOWNLOAD,WEB', '0', '16:9', 'H5', '99,MT,GG,IE,IM,ON,UA,IT,CH,NL,LT,CO,BY,EE,LV,RS,SE,UK,GR', '0', 'LC', ''),
(348, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/110.png', '110', '110', 'Live - D&W', 'lg', 'Live games', 'html5', 'MOBILE,DOWNLOAD,WEB', '0', '16:9', 'H5', '99,DK,EE,GG,GR,IM,MT,RS,UK,RO,IE,ON,BY,DE,LT,LV,NL,UA', '0', 'LC', ''),
(349, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/108.png', '108', '108', 'Live - Dragon Tiger', 'lg', 'Live games', 'html5', 'MOBILE,DOWNLOAD,WEB', '0', '16:9', 'H5', '99,EE,GG,GR,IM,MT,RS,SE,UK,CH,IE,ON,BY,DE,LT,LV,NL,UA', '0', 'LC', ''),
(350, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/105.png', '105', '105', 'Live - GAMESHOWS', 'lg', 'Live games', 'html5', 'MOBILE,DOWNLOAD,WEB', '0', '16:9', 'H5', 'UA,DE,LT,LV,NL,EE,IT,RO,99,DK,SE,ZA,UK,MT,RS,GR,IM,GG,66,BG,X1,CO,IE,ON,BY,CH', '0', 'LC', ''),
(351, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/101.png', '101', '101', 'Live - Lobby', 'lg', 'Live games', 'html5', 'MOBILE,DOWNLOAD,WEB', '0', '16:9', 'H5', 'NL,UA,LT,LV,DE,RO,UK,MT,99,DK,IM,IT,SE,GR,ZA,RS,EE,GG,CO,BG,66,X1,IE,ON,BY,CH', '0', 'LC', ''),
(352, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/103.png', '103', '103', 'Live - Lobby BJ', 'lg', 'Live games', 'html5', 'MOBILE,DOWNLOAD,WEB', '0', '16:9', 'H5', 'DE,UA,NL,LV,LT,MT,SE,99,RO,IM,DK,IT,UK,EE,ZA,GG,GR,RS,CO,66,BG,X1,IE,ON,BY,CH', '0', 'LC', ''),
(353, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/104.png', '104', '104', 'Live - Lobby Baccarat', 'lg', 'Live games', 'html5', 'MOBILE,DOWNLOAD,WEB', '0', '16:9', 'H5', 'LT,LV,DE,NL,UA,99,IM,MT,RO,IT,SE,DK,UK,GR,EE,RS,ZA,GG,CO,BG,66,X1,IE,ON,BY,CH', '0', 'LC', ''),
(354, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/102.png', '102', '102', 'Live - Lobby Roulette', 'lg', 'Live games', 'html5', 'MOBILE,DOWNLOAD,WEB', '0', '16:9', 'H5', 'NL,UA,LT,LV,DE,DK,UK,99,IT,MT,SE,RO,IM,GG,GR,RS,ZA,EE,CO,BG,66,X1,IE,ON,BY,CH', '0', 'LC', ''),
(355, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/240.png', '240', '240', 'Live - PowerUp Roulette', 'lg', 'Live games', 'html5', 'MOBILE,DOWNLOAD,WEB', '0', '16:9', 'H5', 'BG,EE,MT,SE,ZA,99,CO,LV,RS,IT,RO,IM,NL,BY,X1,GG,CH,GR,LT,UA,DK,ON,UK,IE,DE', '0', 'LC', ''),
(356, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/230.png', '230', '230', 'Live - Roulette 10 - Ruby', 'lg', 'Live games', 'html5', 'MOBILE,DOWNLOAD,WEB', '0', '16:9', 'H5', 'ON,BG,MT,UA,EE,LV,NL,X1,BY,CO,LT,GR,RO,99,CH,DK,IT,SE,GG,UK,ZA,DE,IM,RS,IE', '0', 'LC', ''),
(357, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/107.png', '1531471148', '107', 'Live - Sic Bo', 'lg', 'Live games', 'html5', 'MOBILE,DOWNLOAD,WEB', '0', '16:9', 'H5', 'CO,DE,LT,99,DK,EE,GG,GR,IM,MT,RS,SE,UK,IE,ON,BY,LV,NL,UA', '0', 'LC', '');
INSERT INTO `tb_gamelist` (`cuid`, `provider`, `image`, `gameidnumeric`, `gameid`, `gamename`, `gametypeid`, `category`, `technology`, `platform`, `demogame`, `aspectratio`, `technologyid`, `jurisdictions`, `frbavailable`, `datatype`, `features`) VALUES
(358, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/109.png', '109', '109', 'Live - Sic Bo & Dragon Tiger', 'lg', 'Live games', 'html5', 'MOBILE,DOWNLOAD,WEB', '0', '16:9', 'H5', '99,DK,EE,GG,GR,IM,MT,RS,SE,UK,IE,ON,BY,DE,LT,LV,NL,UA', '0', 'LC', ''),
(359, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/1302.png', '1302', '1302', 'Live - Spaceman', 'lg', 'Live games', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'LV,BG,IT,CO,NL,RS,CH,ON,GR,99,DE,X1,IM,EE,GG,MT,RO,UK,ZA,BY,DK,UA,SE,NO', '0', 'LC', ''),
(360, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs1024mahjpanda.png', '1640010384', 'vs1024mahjpanda', 'Mahjong Panda', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '99', '1', 'RNG', 'FREE_BONUS_FEATURE'),
(361, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs50northgard.png', '1641470156', 'vs50northgard', 'North Guardians', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'IT,NL,PT,SE,LV,GR,LT,BG,ON,ES,66,99,DE,EE,GG,IE,IM,MT,RO,RS,UA,UK,ZA,DK,CO,X1,BY,BE', '1', 'RNG', 'FREE_BONUS_FEATURE,BUY'),
(362, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/scpanda.png', '1508841864', 'scpanda', 'Panda Gold 10,000', 'sc', 'Scratch card', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'RS,MT,EE,RO,UK,99,IM,LV,GG,ZA,66,IE,UA,BY,BE', '1', 'RNG', ''),
(363, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vppso4.png', '1582273067', 'vppso4', 'Penalty Shootout', 'rgs-vsb', 'RGS - VSB', 'html5', 'MOBILE,DOWNLOAD,WEB', '0', '16:9', 'H5', '99,UK,MT,IE,EE,RO,RS,SE,UA,CO,BY', '0', 'VSB', ''),
(364, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs10egrich.png', '1640785834', 'vs10egrich', 'Queen of Gods', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '66,99,DE,EE,GG,GR,IE,IM,LV,MT,RO,RS,UA,UK,ZA,BG,PT,ON,SE,DK,LT,ES,CO,X1,IT,NL,BY,BE', '1', 'RNG', ''),
(365, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/scqogai.png', '1521806036', 'scqogai', 'Queen of Gold 100,000', 'sc', 'Scratch card', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '99', '1', 'RNG', ''),
(366, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/scqog.png', '1508830808', 'scqog', 'Queen of Gold 100,000', 'sc', 'Scratch card', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'IM,GG,UK,99,RO,EE,LV,MT,RS,ZA,66,IE,UA,BY,BE', '1', 'RNG', ''),
(367, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs25romeoandjuliet.png', '1458728713', 'vs25romeoandjuliet', 'Romeo and Juliet', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '99', '1', 'RNG', ''),
(368, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20gg.png', '1455872848', 'vs20gg', 'Spooky Fortune', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '99', '1', 'RNG', ''),
(369, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs117649starz.png', '1577112971', 'vs117649starz', 'Starz Megaways', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'CO,RS,LV,ES,PT,RO,LT,GR,GG,DK,BG,UK,DE,EE,IT,99,SE,MT,IM,ZA,X1,UA,66,IE,BY,NL,BE', '1', 'RNG', ''),
(370, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vpsc10.png', '1644584646', 'vpsc10', 'Steeplechase', 'rgs-vsb', 'RGS - VSB', 'html5', 'MOBILE,DOWNLOAD,WEB', '0', '16:9', 'H5', '99,EE,RO,RS,SE,UA,IE,MT,CO,BY', '0', 'VSB', ''),
(371, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20cms.png', '1455872860', 'vs20cms', 'Sugar Rush Summer Time', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '99,PH', '1', 'RNG', ''),
(372, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20cmv.png', '1455872858', 'vs20cmv', 'Sugar Rush Valentine&apos;s Day', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '99,PH', '1', 'RNG', ''),
(373, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20cw.png', '1455872855', 'vs20cw', 'Sugar Rush Winter', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '99', '1', 'RNG', ''),
(374, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs9catz.png', '1455872789', 'vs9catz', 'The Catfather', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '99,PH', '1', 'RNG', ''),
(375, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs30catz.png', '1474540498', 'vs30catz', 'The Catfather Part II', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '99', '1', 'RNG', ''),
(376, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20stickysymbol.png', '1642096017', 'vs20stickysymbol', 'The Great Stick-up', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '66,99,DE,EE,GG,IE,IM,LV,MT,RO,RS,UA,UK,ZA,PT,SE,IT,X1,CO,LT,ON,GR,DK,NL,BG,ES,BE', '1', 'RNG', 'FREE_BONUS_FEATURE'),
(377, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vplobby.png', '1618816510', 'vplobby', 'Virtual Sports Lobby', 'rgs-vsb', 'RGS - VSB', 'html5', 'MOBILE,DOWNLOAD,WEB', '0', '16:9', 'H5', '99,MT,UK,IE,EE,RO,RS,SE,UA,CO,BY', '0', 'VSB', ''),
(378, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/scwolfgold.png', '1508829900', 'scwolfgold', 'Wolf Gold 1 Million', 'sc', 'Scratch card', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'EE,UK,GG,MT,99,RO,IM,LV,RS,ZA,66,IE,UA,BY,BE', '1', 'RNG', ''),
(379, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/scwolfgoldai.png', '1521806288', 'scwolfgoldai', 'Wolf Gold 1,000,000', 'sc', 'Scratch card', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '99', '1', 'RNG', ''),
(380, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs25wolfjpt.png', '1615460266', 'vs25wolfjpt', 'Wolf Gold Power Jackpot', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '0', '16:9', 'H5', 'NL,99,GG,IE,IM,LV,MT,RO,UK,DK,SE,UA,EE,BE', '1', 'RNG', ''),
(381, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vswayszombcarn.png', '1647605861', 'vswayszombcarn', 'Zombie Carnival', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '66,99,DE,EE,GG,GR,IE,IM,MT,RO,RS,UA,UK,ZA,ON,BG,ES,NL,LT,DK,IT,LV,PT,SE,CO,X1,BY,BE', '1', 'RNG', 'FREE_BONUS_FEATURE,BUY'),
(1112, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20procount.png', '1669113323', 'vs20procount', 'Wisdom of Athena', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '66,99,BE,DE,EE,GG,IE,IM,LV,MT,RO,RS,UA,UK,ZA,PT,SE,IT,ON,LT,ES,AT,CO,DK,NL,CH,GR,HR,BG', '1', 'RNG', 'NEW'),
(1113, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs15godsofwar.png', '1675166732', 'vs15godsofwar', 'Zeus vs Hades - Gods of War', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '66,99,BE,DE,EE,GG,IE,IM,LV,MT,RO,RS,UA,UK,ZA,DK,CO,CH,ES,NL,ON,SE,GR,IT,PT,LT,BG,AT,HR', '1', 'RNG', 'NEW'),
(1114, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs10trail.png', '1669125739', 'vs10trail', 'Mustang Trail', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'PT,NL,ON,CO,DK,ES,LT,66,99,BE,DE,EE,GG,IE,IM,LV,MT,RO,RS,UA,UK,ZA,IT,SE,BG,HR', '1', 'RNG', 'NEW'),
(1115, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vswaysrockblst.png', '1669113535', 'vswaysrockblst', 'Rocket Blast Megaways', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'CH,66,99,BE,DE,EE,GG,IE,IM,LV,MT,RO,RS,UA,UK,ZA,NL,PT,SE,IT,ON,CO,ES,LT,GR,BG,HR,DK', '1', 'RNG', 'NEW'),
(1116, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs50dmdcascade.png', '1669113371', 'vs50dmdcascade', 'Diamond Cascade', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'CH,GR,66,99,BE,DE,EE,GG,IE,IM,LV,MT,RO,RS,UA,UK,ZA,NL,PT,SE,LT,IT,ON,CO,DK,ES,BG,HR', '1', 'RNG', 'NEW'),
(1117, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20wildparty.png', '1669125655', 'vs20wildparty', '3 Buzzing Wilds', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '66,99,BE,DE,EE,GG,IE,IM,LV,MT,RO,RS,UA,UK,ZA,BG,HR,NL,PT,DK,IT,ON,CO,LT,ES,SE,GR,CH', '1', 'RNG', 'NEW'),
(1118, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20starlightx.png', '1681814579', 'vs20starlightx', 'Starlight Princess 1000', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '99', '1', 'RNG', 'NEW'),
(1119, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vswayspowzeus.png', '1673461044', 'vswayspowzeus', 'Power of Merlin Megaways', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'LV,SE,66,99,BE,DE,EE,GG,IE,IM,MT,RO,RS,UA,UK,ZA,IT,NL,ES,ON,LT,PT,CH,CO,DK,BG,HR,GR', '1', 'RNG', 'NEW'),
(1120, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20splmystery.png', '1669030482', 'vs20splmystery', 'Spellbinding Mystery', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '66,99,BE,DE,EE,GG,IE,IM,LV,MT,RO,RS,UA,UK,ZA,PT,SE,IT,NL,ON,LT,ES,CO,DK,BG,CH,GR,HR', '1', 'RNG', 'NEW'),
(1121, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20cashmachine.png', '1673613168', 'vs20cashmachine', 'Cash Box', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '66,99,BE,DE,EE,GG,IE,IM,LV,MT,RO,RS,UA,UK,ZA,HR,ON,PT,SE,NL,IT,DK,CO,ES,GR,LT,BG,CH', '1', 'RNG', 'NEW'),
(1122, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs50jucier.png', '1675759130', 'vs50jucier', 'Sky Bounty', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'IT,PT,SE,ES,CO,DK,LT,BG,CH,GR,HR,66,99,BE,DE,EE,GG,IE,IM,MT,RO,RS,UA,UK,ZA,LV,NL,ON', '1', 'RNG', 'NEW'),
(1123, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs243nudge4gold.png', '1669113390', 'vs243nudge4gold', 'Hellvis Wild', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '66,99,BE,DE,EE,GG,IE,IM,MT,RO,RS,UA,UK,ZA,LV,PT,ES,SE,CO,DK,IT,NL,CH,LT,ON,GR,BG,HR', '1', 'RNG', 'NEW'),
(1124, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs25jokrace.png', '1685696006', 'vs25jokrace', 'Joker Race', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '99', '1', 'RNG', 'NEW'),
(1125, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs10bbextreme.png', '1675790139', 'vs10bbextreme', 'Big Bass Amazon Xtreme', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'DK,ON,PT,SE,LT,NL,CO,CH,ES,IT,66,99,BE,DE,EE,GG,IE,IM,LV,MT,RO,RS,UA,UK,ZA,AT,BG,GR,HR', '1', 'RNG', 'NEW'),
(1126, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20hstgldngt.png', '1670342250', 'vs20hstgldngt', 'Heist for the Golden Nuggets', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '66,99,BE,DE,EE,GG,IE,IM,LV,MT,RO,RS,UA,UK,ZA,IT,NL,ON,PT,SE,LT,ES,CO,DK,GR,HR,BG,CH', '1', 'RNG', 'NEW'),
(1127, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20beefed.png', '1665995534', 'vs20beefed', 'Fat Panda', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '66,99,BE,DE,EE,GG,IE,IM,LV,MT,RO,RS,UA,UK,ZA,IT,NL,PT,SE,CO,LT,DK,ES,ON,CH,GR,HR,BG', '1', 'RNG', 'NEW'),
(1128, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20jewelparty.png', '1676465236', 'vs20jewelparty', 'Jewel Rush', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'PT,SE,IT,NL,ON,CH,BG,66,99,BE,DE,EE,GG,IE,IM,LV,MT,RO,RS,UA,UK,ZA,ES,LT,GR,CO,DK,AT,HR', '1', 'RNG', 'NEW'),
(1129, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs9outlaw.png', '1676244176', 'vs9outlaw', 'Pirates Pub', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'NL,PT,SE,CO,IT,CH,BG,LT,DK,66,99,BE,DE,EE,GG,IE,IM,LV,MT,RO,RS,UA,UK,ZA,ON,ES,GR,HR', '1', 'RNG', 'NEW'),
(1130, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vswaysfrbugs.png', '1684152622', 'vswaysfrbugs', 'Frogs & Bugs', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '99', '1', 'RNG', 'NEW'),
(1131, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20lampinf.png', '1670862500', 'vs20lampinf', 'Lamp Of Infinity', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'NL,CO,66,99,BE,DE,EE,GG,IE,IM,IT,LV,MT,RO,RS,SE,UA,UK,ZA,ON,GR,ES,LT,PT,BG,CH,AT,DK,HR', '1', 'RNG', 'NEW'),
(1132, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs4096robber.png', '1684153529', 'vs4096robber', 'Robber Strike', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '99', '1', 'RNG', 'NEW'),
(1133, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs10fdrasbf.png', '1675238133', 'vs10fdrasbf', 'Floating Dragon - Dragon Boat Festival', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'PT,SE,ON,IT,LT,CH,BG,CO,66,99,BE,DE,EE,GG,IE,IM,MT,RO,RS,UA,UK,ZA,LV,NL,DK,ES,GR,HR', '1', 'RNG', 'NEW'),
(1134, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20clustwild.png', '1675373353', 'vs20clustwild', 'Sticky Bees', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'CO,DK,ES,ON,66,99,BE,DE,EE,GG,IE,IM,LV,MT,RO,RS,UA,ZA,NL,PT,SE,IT,LT,BG,CH,UK,GR,HR', '1', 'RNG', 'NEW'),
(1135, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs25spotz.png', '1650532347', 'vs25spotz', 'Knight Hot Spotz', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '66,99,BE,DE,EE,GG,IE,IM,LV,MT,RO,RS,UA,UK,ZA,BG,CH,CO,DK,LT,ES,GR,IT,NL,ON,PT,SE,HR', '1', 'RNG', 'NEW'),
(1136, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20excalibur.png', '1655733735', 'vs20excalibur', 'Excalibur Unleashed', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '66,99,BE,DE,EE,GG,IE,IM,LV,MT,RO,RS,UA,UK,ZA,CO,BG,GR,ES,IT,ON,PT,SE,DK,LT,NL,HR', '1', 'RNG', 'NEW'),
(1137, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20stickywild.png', '1668035456', 'vs20stickywild', 'Wild Bison Charge', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '66,99,BE,DE,EE,GG,IE,IM,LT,LV,MT,RO,RS,UA,UK,ZA,GR,NL,ON,PT,SE,DK,CO,ES,IT,BG,HR', '1', 'RNG', 'NEW'),
(1138, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vswayseternity.png', '1654612832', 'vswayseternity', 'Diamonds of Egypt', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '99,LV,MT,UA,NL,IT,ON,DK,BG,CH,LT,GR,CO,ES,66,BE,DE,EE,GG,IE,IM,PT,RO,RS,SE,UK,ZA,HR', '1', 'RNG', 'NEW'),
(1139, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs25holiday.png', '1682404061', 'vs25holiday', 'Holiday Ride', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '99', '1', 'RNG', 'NEW'),
(1140, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs10kingofdth.png', '1669644165', 'vs10kingofdth', 'Kingdom of the Dead', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'IT,ON,PT,SE,BG,GR,LT,CO,DK,66,99,BE,DE,EE,GG,IE,IM,LV,MT,RO,RS,UA,UK,ZA,NL,ES,AT,HR', '1', 'RNG', 'NEW'),
(1141, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs10jnmntzma.png', '1674550572', 'vs10jnmntzma', 'Jane Hunter and the Mask of Montezuma', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '66,99,BE,DE,EE,GG,IE,IM,LV,MT,RO,RS,UA,UK,ZA,ON,DK,BG,IT,CO,GR,LT,ES,PT,SE,NL,HR', '1', 'RNG', 'NEW'),
(1142, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs10gizagods.png', '1672327068', 'vs10gizagods', 'Gods of Giza', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'ES,BG,DK,NL,ON,GR,LT,CO,66,99,BE,DE,EE,GG,IE,IM,LV,MT,RO,RS,UA,UK,ZA,IT,PT,SE,HR', '1', 'RNG', 'NEW'),
(1143, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vswaysrsm.png', '1670344599', 'vswaysrsm', 'Wild Celebrity Bus Megaways', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'IT,ON,PT,SE,BG,CO,66,99,BE,DE,EE,GG,IE,IM,LV,MT,RO,RS,UA,UK,ZA,NL,DK,ES,LT,GR,HR', '1', 'RNG', 'NEW'),
(1144, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vswaysmonkey.png', '1672214925', 'vswaysmonkey', '3 Dancing Monkeys', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'IT,ON,PT,SE,BG,CO,66,99,BE,DE,EE,GG,IE,IM,LV,MT,RO,RS,UA,UK,ZA,NL,DK,ES,GR,LT,HR', '1', 'RNG', 'NEW'),
(1145, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20hotzone.png', '1669710633', 'vs20hotzone', 'African Elephant', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'UK,66,99,BE,DE,EE,ES,GG,IE,IM,LV,MT,RO,RS,UA,ZA,BG,NL,ON,DK,LT,CO,GR,IT,PT,SE,HR', '1', 'RNG', 'NEW'),
(1146, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs10bbhas.png', '1667809978', 'vs10bbhas', 'Big Bass - Hold & Spinner', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'ES,GR,LT,DK,BG,66,99,BE,DE,EE,GG,IE,IM,LV,MT,ON,RO,RS,UA,UK,ZA,IT,NL,PT,SE,CO,CH,HR', '1', 'RNG', 'NEW'),
(1147, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs1024moonsh.png', '1678701284', 'vs1024moonsh', 'Moonshot', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '99', '1', 'RNG', 'NEW'),
(1148, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vswaysredqueen.png', '1659963005', 'vswaysredqueen', 'The Red Queen', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'ES,LT,IT,NL,BG,66,99,BE,DE,EE,GG,IE,IM,LV,MT,PT,RO,RS,SE,UA,UK,ZA,ON,GR,DK,CO,HR', '1', 'RNG', 'NEW'),
(1149, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20framazon.png', '1678459801', 'vs20framazon', 'Fruits of the Amazon', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '99', '1', 'RNG', 'NEW'),
(1150, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs10powerlines.png', '1663361031', 'vs10powerlines', 'Peak Power', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'DK,NL,PT,SE,CO,BE,GR,LT,66,99,DE,EE,GG,IE,IM,MT,RO,RS,UA,UK,ZA,IT,LV,ON,ES,BG,X1,HR', '1', 'RNG', 'NEW'),
(1151, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20mochimon.png', '1666007660', 'vs20mochimon', 'Mochimon', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'BG,IT,LV,CO,DK,GR,LT,ES,66,99,DE,EE,GG,IE,IM,MT,ON,RO,RS,UA,UK,ZA,NL,PT,SE,BE,X1,CH,HR', '1', 'RNG', 'NEW'),
(1152, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vswaysstrlght.png', '1656870892', 'vswaysstrlght', 'Fortunes of Aztec', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '99,HR', '1', 'RNG', 'NEW'),
(1153, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/1601.png', '1601', '1601', 'Snake & Ladders Live', 'lg', 'Live games', 'html5', 'MOBILE,DOWNLOAD,WEB', '0', '16:9', 'H5', '99,BG,BY,CH,CO,DE,EE,GG,IE,IM,IT,LT,LV,MT,NL,ON,RS,SE,UA,UK,ZA,BE', '1', 'LC', 'NEW'),
(1154, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20candyblitz.png', '1669113459', 'vs20candyblitz', 'Candy Blitz', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '66,99,BE,DE,EE,GG,IE,IM,LV,MT,RO,RS,UA,UK,ZA,PT,SE,HR', '1', 'RNG', 'NEW'),
(1155, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20earthquake.png', '1669125514', 'vs20earthquake', 'Cyclops Smash', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '66,99,BE,DE,EE,GG,IE,IM,LV,MT,RO,RS,UA,UK,ZA,IT,NL,ON,PT,SE,HR', '1', 'RNG', 'NEW'),
(1156, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vsprg10bbbnza.png', '1675943163', 'vsprg10bbbnza', 'Big Bass Bonanza Jackpot Play', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '0', '16:9', 'H5', 'ON,UK,LV,MT,99,RO,BG,PT,SE,X1,ES,CH,DK,NL,CO,IT,BE,EE,GR,HR,RS,UA', '1', 'RNG', 'NEW'),
(1157, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vsprg10bigbass.png', '1675947806', 'vsprg10bigbass', 'Big Bass Splash Jackpot Play', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '0', '16:9', 'H5', 'ON,UK,LV,MT,99,RO,BG,PT,SE,X1,ES,CH,DK,NL,CO,IT,BE,EE,GR,HR,RS,UA', '1', 'RNG', 'NEW'),
(1158, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vsprg10booktut.png', '1676026531', 'vsprg10booktut', 'Book of Tut Jackpot Play', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '0', '16:9', 'H5', '99,RO,LV,MT,ON,UK,BG,PT,SE,X1,ES,CH,DK,NL,CO,IT,BE,EE,GR,HR,RS,UA', '1', 'RNG', 'NEW'),
(1159, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20mysteryst.png', '1675154690', 'vs20mysteryst', 'Country Farming', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'NL,ON,PT,SE,CO,IT,CH,BG,LT,DK,66,99,BE,DE,EE,GG,IE,IM,LV,MT,RO,RS,UA,UK,ZA,ES,GR,HR', '1', 'RNG', 'NEW'),
(1160, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vsprg20fruitpty.png', '1676023218', 'vsprg20fruitpty', 'Fruit Party Jackpot Play', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '0', '16:9', 'H5', '99,RO,LV,MT,ON,UK,BG,PT,SE,X1,ES,CH,DK,NL,CO,IT,BE,EE,GR,HR,RS,UA', '1', 'RNG', 'NEW'),
(1161, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vsprg20olympus.png', '1605284988', 'vsprg20olympus', 'Gates of Olympus Jackpot Play', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '0', '16:9', 'H5', '99,RO,LV,MT,ON,UK,BG,PT,SE,X1,CH,DK,NL,ES,CO,IT,BE,EE,GR,HR,RS,UA', '1', 'RNG', 'NEW'),
(1162, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vsprg20starpr.png', '1677060186', 'vsprg20starpr', 'Starlight Princess Jackpot Play', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '0', '16:9', 'H5', '99,RO,LV,MT,ON,UK,BG,PT,SE,X1,CH,DK,NL,ES,CO,IT,BE,EE,UA,GR,HR,RS', '1', 'RNG', 'NEW'),
(1163, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vsprg20sugarush.png', '1675941517', 'vsprg20sugarush', 'Sugar Rush Jackpot Play', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '0', '16:9', 'H5', '99,RO,LV,MT,ON,UK,BG,PT,SE,X1,CH,DK,NL,ES,CO,IT,BE,EE,UA,GR,HR,RS,ZA', '1', 'RNG', 'NEW'),
(1164, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vsprg20fruitsw.png', '1675939736', 'vsprg20fruitsw', 'Sweet Bonanza Jackpot Play', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '0', '16:9', 'H5', '99,RO,LV,MT,ON,UK,DK,NL,X1,CH,CO,ES,BG,PT,SE,IT,BE,EE,GR,HR,RS,UA,ZA', '1', 'RNG', 'NEW'),
(1165, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vsprg20doghouse.png', '1676021706', 'vsprg20doghouse', 'The Dog House Jackpot Play', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '0', '16:9', 'H5', '99,RO,LV,MT,ON,UK,DK,NL,X1,CO,CH,ES,BG,PT,SE,IT,BE,EE,GR,HR,RS,UA', '1', 'RNG', 'NEW'),
(1166, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vsprgwaysdogs.png', '1676014510', 'vsprgwaysdogs', 'The Dog House Megaways Jackpot Play', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '0', '16:9', 'H5', '99,RO,LV,MT,ON,UK,DK,NL,X1,CH,CO,ES,BG,PT,SE,IT,BE,EE,UA,GR,HR,RS', '1', 'RNG', 'NEW'),
(1167, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20piggybank.png', '1676495799', 'vs20piggybank', 'Piggy Bankers', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'CH,HR,66,99,BE,DE,EE,GG,IE,IM,LV,MT,RO,RS,UA,UK,ZA,IT,PT,SE,ON,NL,CO,DK,GR,LT,ES,BG', '1', 'RNG', 'NEW'),
(1168, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20forge.png', '1684154584', 'vs20forge', 'Forge of Olympus', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'LT,BG,CH,CO,DK,ES,66,99,BE,DE,EE,GG,IE,IM,MT,RO,RS,UA,UK,ZA,LV,IT,NL,ON,PT,SE,HR', '1', 'RNG', 'NEW'),
(1169, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20lvlup.png', '1669113480', 'vs20lvlup', 'Pub Kings', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'DK,GR,CO,BG,CH,IT,SE,66,99,BE,DE,EE,GG,IE,IM,LV,MT,RO,RS,UA,UK,ZA,ON,ES,LT,NL,PT,HR', '1', 'RNG', 'NEW'),
(1170, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vswaysbbhas.png', '1677746008', 'vswaysbbhas', 'Big Bass Hold & Spinner Megaways', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '66,99,BE,DE,EE,GG,IE,IM,LV,MT,RO,RS,UA,UK,ZA,NL,IT,ON,PT,SE,LT,HR,BG,CH,CO,DK,ES', '1', 'RNG', 'NEW'),
(1171, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vswaystut.png', '1669114477', 'vswaystut', 'Book of Tut Megaways', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '99,HR', '1', 'RNG', 'NEW'),
(1172, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vswaysftropics.png', '1669113366', 'vswaysftropics', 'Frozen Tropics', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'HR,66,99,BE,DE,EE,GG,IE,IM,LV,MT,RO,RS,UA,UK,ZA', '1', 'RNG', 'NEW'),
(1173, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs1024mahjwins.png', '1683032826', 'vs1024mahjwins', 'Mahjong Wins', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '99', '1', 'RNG', 'NEW'),
(1174, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/114.png', '114', '114', 'Asian Games', 'lg', 'Live games', 'html5', 'MOBILE,DOWNLOAD,WEB', '0', '16:9', 'H5', 'GG,IM,SE,X1,CO,GR,BG,ZA,EE,MT,99,RS,DK,NL,RO,IT,UK,IE,ON,BY,UA', '1', 'LC', 'NEW'),
(1175, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/1320.png', '1320', '1320', 'Big Bass Crash', 'lg', 'Live games', 'html5', 'MOBILE,DOWNLOAD,WEB', '0', '16:9', 'H5', '99,BG,BY,CH,CO,DE,DK,EE,GG,GR,IE,IM,IT,LT,LV,MT,NL,ON,RO,RS,SE,UA,UK,X1,ZA', '1', 'LC', 'NEW'),
(1176, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/902a9.png', '1673423574', '902a9', 'ONE Blackjack 2', 'lg', 'Live games', 'html5', 'MOBILE,DOWNLOAD,WEB', '0', '16:9', 'H5', 'DK,LT,GR,GG,NL,CH,IT,LV,BG,ZA,99,X1,RO,SE,IM,EE,RS,CO,UA,MT,UK,BY,DE,ON,IE', '1', 'LC', 'NEW'),
(1177, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/230a20.png', '1673428444', '230a20', 'Roulette 10', 'lg', 'Live games', 'html5', 'MOBILE,DOWNLOAD,WEB', '0', '16:9', 'H5', 'EE,MT,UK,CO,GR,BG,DK,ON,RO,99,CH,X1,BY,NL,UA,RS,DE,IT,LV,LT,ZA,GG,SE,IM', '1', 'LC', 'NEW'),
(1178, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20lobcrab.png', '1676979119', 'vs20lobcrab', 'Lobster Bob&apos;s Crazy Crab Shack', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'SE,CO,DK,LT,ES,GR,AT,BG,CH,IT,66,99,BE,DE,EE,GG,IE,IM,LV,MT,RO,RS,UA,UK,ZA,NL,ON,PT,HR', '1', 'RNG', 'NEW'),
(1179, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vswaysincwnd.png', '1669113470', 'vswaysincwnd', 'Gold Oasis', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '99,DK,HU,LT,66,BE,DE,EE,GG,IE,IM,MT,ON,RO,RS,UA,UK,ZA,LV,NL,IT,PT,SE,CH,ES,HR', '1', 'RNG', 'NEW'),
(1180, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20saiman.png', '1678869198', 'vs20saiman', 'Saiyan Mania', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '99', '1', 'RNG', 'NEW'),
(1181, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs10gdchalleng.png', '1682352098', 'vs10gdchalleng', '8 Golden Dragon Challenge', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '66,99,BE,DE,EE,GG,IE,IM,LV,MT,RO,RS,UA,UK,ZA,HU,LT,PT,IT,NL,ON,SE,BG,CH,GR,HR,CO,ES,DK', '1', 'RNG', 'NEW'),
(1182, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20yisunshin.png', '1689101826', 'vs20yisunshin', 'Yi Sun Shin', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '99', '1', 'RNG', 'NEW'),
(1183, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20candyblitz.png', '1669113459', 'vs20candyblitz', 'Candy Blitz', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '66,99,BE,DE,EE,GG,IE,IM,LV,MT,RO,RS,UA,UK,ZA,AT,ES,NL,ON,CH,PT,IT,SE,BG,CO,LT,DK,HU,HR,GR,SK', '1', 'RNG', 'NEW'),
(1184, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs40infwild.png', '1676969184', 'vs40infwild', 'Infective Wild', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'PT,AT,IT,NL,ON,CO,DK,LT,ES,CH,GR,66,99,BE,DE,EE,GG,HU,IE,IM,LV,MT,RO,RS,SE,UA,UK,ZA,BG,HR', '1', 'RNG', 'NEW'),
(1185, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20gravity.png', '1669114371', 'vs20gravity', 'Gravity Bonanza', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'HU,NL,ON,PT,SE,66,99,BE,DE,EE,GG,IE,IM,LV,MT,RO,RS,UA,UK,ZA,CO,DK,LT,ES,GR,IT,BG,CH,HR', '1', 'RNG', 'NEW'),
(1186, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vswaysraghex.png', '1669115722', 'vswaysraghex', 'Tundra Fortune', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'IT,NL,ON,SE,CO,DK,LT,ES,66,99,BE,DE,EE,GG,HU,IE,IM,LV,MT,RO,RS,UA,UK,ZA,BG,CH,GR,PT,HR', '1', 'RNG', 'NEW'),
(1187, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20maskgame.png', '1669125641', 'vs20maskgame', 'Cash Chips', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'HR,PT,CO,66,99,BE,DE,EE,GG,HU,IE,IM,LV,MT,RO,RS,UA,UK,ZA,AT,DK,SE,CH,GR,BG,ES,IT,NL,ON,LT', '1', 'RNG', 'NEW'),
(1188, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs5gemstone.png', '1682428533', 'vs5gemstone', 'Gemstone', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '99', '1', 'RNG', 'NEW'),
(1189, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20bnnzdice.png', '1664443408', 'vs20bnnzdice', 'Sweet Bonanza Dice', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'MT,RS,BE,EE,LV,HU,99,UA,BY,HR', '1', 'RNG', 'NEW'),
(1190, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs40rainbowr.png', '1669114334', 'vs40rainbowr', 'Rainbow Reels', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '66,99,BE,DE,EE,GG,IE,IM,LV,MT,RO,RS,UA,UK,ZA,PT,HU,LT,IT,NL,ON,SE,BG,GR,HR,CO,ES,CH,DK', '1', 'RNG', 'NEW'),
(1191, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs10bhallbnza.png', '1685517121', 'vs10bhallbnza', 'Big Bass Halloween', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '99,CO,LT,RS,HU,IT,LV,NL,BG,GR,AT,ON,PT,SE,ES,66,BE,DE,EE,GG,IE,IM,MT,RO,UA,UK,ZA,CH,DK,HR', '1', 'RNG', 'NEW'),
(1192, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vswaysmoneyman.png', '1687421415', 'vswaysmoneyman', 'The Money Men Megaways', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'ES,66,99,BE,DE,EE,GG,HU,IE,IM,LV,MT,RO,RS,UA,UK,ZA,CO,LT,IT,NL,ON,PT,SE,DK,GR,HR,CH,BG', '1', 'RNG', 'NEW'),
(1193, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs40demonpots.png', '1681222876', 'vs40demonpots', 'Demon Pots', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '66,99,BE,DE,EE,GG,HU,IE,IM,LV,MT,RO,RS,UA,UK,ZA,NL,CO,DK,BG,CH,PT,SE,GR,ES,IT,ON,LT,HR', '1', 'RNG', 'NEW'),
(1194, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs243goldfor.png', '1689687924', 'vs243goldfor', '888 Bonanza', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '99', '1', 'RNG', 'NEW'),
(1195, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20olympgrace.png', '1678706901', 'vs20olympgrace', 'Grace of Ebisu', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '99', '1', 'RNG', 'NEW'),
(1196, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20sugarnudge.png', '1688982740', 'vs20sugarnudge', 'Sugar Supreme Powernudge', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '99,IT,NL,ON,PT,66,BE,DE,EE,GG,HU,IE,IM,LV,MT,RO,RS,UA,UK,ZA,SE,AT,ES,CO,DK,LT,BG,CH,GR,HR', '1', 'RNG', 'NEW'),
(1197, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20sugarcoins.png', '1669125819', 'vs20sugarcoins', 'Viking Forge', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '66,99,BE,DE,EE,GG,IE,IM,MT,RO,RS,UA,UK,ZA,NL,PT,IT,SE,ON,HU,LV,AT,ES,LT,BG,CH,CO,DK,GR,HR', '1', 'RNG', 'NEW'),
(1198, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20rujakbnz.png', '1695194754', 'vs20rujakbnz', 'Rujak Bonanza', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '99', '1', 'RNG', 'NEW'),
(1199, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vswayscfglory.png', '1687495088', 'vswayscfglory', 'Chase For Glory', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'LT,CO,DK,ES,HR,66,99,BE,DE,EE,GG,HU,IE,IM,IT,LV,MT,NL,ON,PT,RO,RS,SE,UA,UK,ZA', '1', 'RNG', 'NEW'),
(1200, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs5jokerdice.png', '1664444143', 'vs5jokerdice', 'Joker Jewel Dice', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'MT,RS,BE,EE,LV,HU,99,UA,HR', '1', 'RNG', 'NEW'),
(1201, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vswaystimber.png', '1675242511', 'vswaystimber', 'Timber Stacks', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', 'CH,ES,IT,NL,ON,SE,PT,66,99,BE,DE,EE,GG,HU,IE,IM,LV,MT,RO,RS,UA,UK,ZA,DK,CO,LT,BG,HR', '1', 'RNG', 'NEW'),
(1202, 'PragmaticPlay', 'upload/game_pic/pragmaticplay/vs20dhcluster.png', '1669114360', 'vs20dhcluster', 'Twilight Princess', 'vs', 'Video Slots', 'html5', 'MOBILE,DOWNLOAD,WEB', '1', '16:9', 'H5', '99,HU,NL,ON,PT,SE,66,BE,DE,EE,GG,IE,IM,LV,MT,RO,RS,UA,UK,ZA,CO,DK,LT,ES,GR,IT,BG,CH,HR', '1', 'RNG', 'NEW');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_gamenew`
--

CREATE TABLE `tb_gamenew` (
  `cuid` int(11) NOT NULL,
  `game_code` varchar(200) NOT NULL,
  `game_name` varchar(200) NOT NULL,
  `game_provider` varchar(200) NOT NULL,
  `game_category` varchar(200) NOT NULL,
  `game_image` varchar(200) NOT NULL,
  `game_url` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_gamenew`
--

INSERT INTO `tb_gamenew` (`cuid`, `game_code`, `game_name`, `game_provider`, `game_category`, `game_image`, `game_url`) VALUES
(2999, 'vs243mwarrior', 'Monkey Warrior', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs243mwarrior.png', ''),
(3000, 'vs20doghouse', 'The Dog House', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs20doghouse.png', ''),
(3001, 'vs40pirate', 'Pirate Gold', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs40pirate.png', ''),
(3002, 'vs20rhino', 'Great Rhino', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs20rhino.png', ''),
(3003, 'vs25pandagold', 'Panda Fortune', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs25pandagold.png', ''),
(3004, 'vs4096bufking', 'Buffalo King', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs4096bufking.png', ''),
(3005, 'vs25pyramid', 'Pyramid King', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs25pyramid.png', ''),
(3006, 'vs5ultrab', 'Ultra Burn', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs5ultrab.png', ''),
(3007, 'vs5ultra', 'Ultra Hold and Spin', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs5ultra.png', ''),
(3008, 'vs25jokerking', 'Joker King', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs25jokerking.png', ''),
(3009, 'vs10returndead', 'Return of the Dead', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs10returndead.png', ''),
(3010, 'vs10madame', 'Madame Destiny', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs10madame.png', ''),
(3011, 'vs15diamond', 'Diamond Strike', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs15diamond.png', ''),
(3012, 'vs25aztecking', 'Aztec King', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs25aztecking.png', ''),
(3013, 'vs25wildspells', 'Wild Spells', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs25wildspells.png', ''),
(3014, 'vs10bbbonanza', 'Big Bass Bonanza', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs10bbbonanza.png', ''),
(3015, 'vs10cowgold', 'Cowboys Gold', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs10cowgold.png', ''),
(3016, 'vs25tigerwar', 'The Tiger Warrior', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs25tigerwar.png', ''),
(3017, 'vs25mustang', 'Mustang Gold', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs25mustang.png', ''),
(3018, 'vs25hotfiesta', 'Hotfiesta', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs25hotfiesta.png', ''),
(3019, 'vs243dancingpar', 'Dance Party', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs243dancingpar.png', ''),
(3020, 'vs576treasures', 'Wild Wild Riches', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs576treasures.png', ''),
(3021, 'vs20hburnhs', 'Hot to Burn Hold and Spin', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs20hburnhs.png', ''),
(3022, 'vs20emptybank', 'Empty the Bank', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs20emptybank.png', ''),
(3023, 'vs20midas', 'The Hand of Midas', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs20midas.png', ''),
(3024, 'vs20olympgate', 'Gates of Olympus', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs20olympgate.png', ''),
(3025, 'vswayslight', 'Lucky Lightning', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vswayslight.png', ''),
(3026, 'vs20vegasmagic', 'Vegas Magic', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs20vegasmagic.png', ''),
(3027, 'vs20fruitparty', 'Fruit Party', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs20fruitparty.png', ''),
(3028, 'vs20fparty2', 'Fruit Party 2', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs20fparty2.png', ''),
(3029, 'vswaysdogs', 'The Dog House Megaways', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vswaysdogs.png', ''),
(3030, 'vs50juicyfr', 'Juicy Fruits', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs50juicyfr.png', ''),
(3031, 'vs25pandatemple', 'Panda Fortune 2', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs25pandatemple.png', ''),
(3032, 'vswaysbufking', 'Buffalo King Megaways', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vswaysbufking.png', ''),
(3033, 'vs40wildwest', 'Wild West Gold', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs40wildwest.png', ''),
(3034, 'vs20chickdrop', 'Chicken Drop', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs20chickdrop.png', ''),
(3035, 'vs40spartaking', 'Spartan King', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs40spartaking.png', ''),
(3036, 'vswaysrhino', 'Great Rhino Megaways', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vswaysrhino.png', ''),
(3037, 'vs20sbxmas', 'Sweet Bonanza Xmas', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs20sbxmas.png', ''),
(3038, 'vs10fruity2', 'Extra Juicy', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs10fruity2.png', ''),
(3039, 'vs10egypt', 'Ancient Egypt', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs10egypt.png', ''),
(3040, 'vs5drhs', 'Dragon Hot Hold and Spin', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs5drhs.png', ''),
(3041, 'vs12bbb', 'Bigger Bass Bonanza', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs12bbb.png', ''),
(3042, 'vs20tweethouse', 'The Tweety House', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs20tweethouse.png', ''),
(3043, 'vswayslions', '5 Lions Megaways', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vswayslions.png', ''),
(3044, 'vswayssamurai', 'Rise of Samurai Megaways', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vswayssamurai.png', ''),
(3045, 'vs50pixie', 'Pixie Wings', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs50pixie.png', ''),
(3046, 'vs10floatdrg', 'Floating Dragon', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs10floatdrg.png', ''),
(3047, 'vs20fruitsw', 'Sweet Bonanza', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs20fruitsw.png', ''),
(3048, 'vs20rhinoluxe', 'Great Rhino Deluxe', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs20rhinoluxe.png', ''),
(3049, 'vswaysmadame', 'Madame Destiny Megaways', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vswaysmadame.png', ''),
(3050, 'vs1024temuj', 'Temujin Treasures', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs1024temuj.png', ''),
(3051, 'vs40pirgold', 'Pirate Gold Deluxe', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs40pirgold.png', ''),
(3052, 'vs25mmouse', 'Money Mouse', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs25mmouse.png', ''),
(3053, 'vs10threestar', 'Three Star Fortune', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs10threestar.png', ''),
(3054, 'vs1ball', 'Lucky Dragon Ball', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs1ball.png', ''),
(3055, 'vs243lionsgold', '5 Lions', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs243lionsgold.png', ''),
(3056, 'vs10egyptcls', 'Ancient Egypt Classic', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs10egyptcls.png', ''),
(3057, 'vs25davinci', 'Da Vinci Treasure', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs25davinci.png', ''),
(3058, 'vs7776secrets', 'Aztec Treasure', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs7776secrets.png', ''),
(3059, 'vs25wolfgold', 'Wolf Gold', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs25wolfgold.png', ''),
(3060, 'vs50safariking', 'Safari King', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs50safariking.png', ''),
(3061, 'vs25peking', 'Peking Luck', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs25peking.png', ''),
(3062, 'vs25asgard', 'Asgard', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs25asgard.png', ''),
(3063, 'vs25vegas', 'Vegas Nights', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs25vegas.png', ''),
(3064, 'vs25scarabqueen', 'John Hunter and the Tomb of the Scarab Queen', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs25scarabqueen.png', ''),
(3065, 'vs20starlight', 'Starlight Princess', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs20starlight.png', ''),
(3066, 'vs10bookoftut', 'John Hunter and the Book of Tut', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs10bookoftut.png', ''),
(3067, 'vs9piggybank', 'Piggy Bank Bills', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs9piggybank.png', ''),
(3068, 'vs5drmystery', 'Dragon Kingdom Mystery', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs5drmystery.png', ''),
(3069, 'vs20eightdragons', 'Eight Dragons', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs20eightdragons.png', ''),
(3070, 'vs1024lionsd', '5 Lions Dance', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs1024lionsd.png', ''),
(3071, 'vs25rio', 'Heart of Rio', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs25rio.png', ''),
(3072, 'vs10nudgeit', 'Rise of Giza PowerNudge', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs10nudgeit.png', ''),
(3073, 'vs10bxmasbnza', 'Christmas Big Bass Bonanza', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs10bxmasbnza.png', ''),
(3074, 'vs10bblpop', 'Bubble Pop', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs10bblpop.png', ''),
(3075, 'vs25btygold', 'Bounty Gold', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs25btygold.png', ''),
(3076, 'vs88hockattack', 'Hockey Attack       ', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs88hockattack.png', ''),
(3077, 'vswaysbbb', 'Big Bass Bonanza Megaways       ', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vswaysbbb.png', ''),
(3078, 'vs10bookfallen', 'Book of the Fallen', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs10bookfallen.png', ''),
(3079, 'vs40bigjuan', 'Big Juan', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs40bigjuan.png', ''),
(3080, 'vs20bermuda', 'John Hunter and the Quest for Bermuda Riches', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs20bermuda.png', ''),
(3081, 'vs10starpirate', 'Star Pirates Code', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs10starpirate.png', ''),
(3082, 'vswayswest', 'Mystic Chief', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vswayswest.png', ''),
(3083, 'vs20daydead', 'Day of Dead', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs20daydead.png', ''),
(3084, 'vs20candvil', 'Candy Village', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs20candvil.png', ''),
(3085, 'vs20wildboost', 'Wild Booster', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs20wildboost.png', ''),
(3086, 'vswayshammthor', 'Power of Thor Megaways', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vswayshammthor.png', ''),
(3087, 'vs243lions', '5 Lions', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs243lions.png', ''),
(3088, 'vs5super7', 'Super 7s', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs5super7.png', ''),
(3089, 'vs1masterjoker', 'Master Joker', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs1masterjoker.png', ''),
(3090, 'vs20kraken', 'Release the Kraken', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs20kraken.png', ''),
(3091, 'vs10firestrike', 'Fire Strike', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs10firestrike.png', ''),
(3092, 'vs20aladdinsorc', 'Aladdin and the Sorcerrer', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs20aladdinsorc.png', ''),
(3093, 'vs243fortseren', 'Greek Gods', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs243fortseren.png', ''),
(3094, 'vs25chilli', 'Chilli Heat', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs25chilli.png', ''),
(3095, 'vs8magicjourn', 'Magic Journey', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs8magicjourn.png', ''),
(3096, 'vs20leprexmas', 'Leprechaun Carol', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs20leprexmas.png', ''),
(3097, 'vs7pigs', '7 Piggies', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs7pigs.png', ''),
(3098, 'vs25gladiator', 'Wild Gladiator', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs25gladiator.png', ''),
(3099, 'vs25goldpig', 'Golden Pig', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs25goldpig.png', ''),
(3100, 'vs25goldrush', 'Gold Rush', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs25goldrush.png', ''),
(3101, 'vs25dragonkingdom', 'Dragon Kingdom', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs25dragonkingdom.png', ''),
(3102, 'vs1dragon8', '888 Dragons', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs1dragon8.png', ''),
(3103, 'vs5aztecgems', 'Aztec Gems', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs5aztecgems.png', ''),
(3104, 'vs20hercpeg', 'Hercules and Pegasus', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs20hercpeg.png', ''),
(3105, 'vs7fire88', 'Fire 88', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs7fire88.png', ''),
(3106, 'vs20honey', 'Honey Honey Honey', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs20honey.png', ''),
(3107, 'vs25safari', 'Hot Safari', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs25safari.png', ''),
(3108, 'vs25journey', 'Journey to the West', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs25journey.png', ''),
(3109, 'vs20chicken', 'The Great Chicken Escape', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs20chicken.png', ''),
(3110, 'vs1fortunetree', 'Tree of Riches', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs1fortunetree.png', ''),
(3111, 'vs20wildpix', 'Wild Pixies', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs20wildpix.png', ''),
(3112, 'vs15fairytale', 'Fairytale Fortune', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs15fairytale.png', ''),
(3113, 'vs20santa', 'Santa', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs20santa.png', ''),
(3114, 'vs10vampwolf', 'Vampires vs Wolves', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs10vampwolf.png', ''),
(3115, 'vs50aladdin', '3 Genie Wishes', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs50aladdin.png', ''),
(3116, 'vs50hercules', 'Hercules Son of Zeus', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs50hercules.png', ''),
(3117, 'vs7776aztec', 'Aztec Bonanza', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs7776aztec.png', ''),
(3118, 'vs5trdragons', 'Triple Dragons', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs5trdragons.png', ''),
(3119, 'vs40madwheel', 'The Wild Machine', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs40madwheel.png', ''),
(3120, 'vs25newyear', 'Lucky New Year', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs25newyear.png', ''),
(3121, 'vs40frrainbow', 'Fruit Rainbow', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs40frrainbow.png', ''),
(3122, 'vs50kingkong', 'Mighty Kong', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs50kingkong.png', ''),
(3123, 'vs20godiva', 'Lady Godiva', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs20godiva.png', ''),
(3124, 'vs9madmonkey', 'Monkey Madness', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs9madmonkey.png', ''),
(3125, 'vs1tigers', 'Triple Tigers', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs1tigers.png', ''),
(3126, 'vs5hotburn', 'Hot to burn', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs5hotburn.png', ''),
(3127, 'vs25dwarves_new', 'Dwarven Gold Deluxe', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs25dwarves_new.png', ''),
(3128, 'vs25sea', 'Great Reef', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs25sea.png', ''),
(3129, 'vs20leprechaun', 'Leprechaun Song', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs20leprechaun.png', ''),
(3130, 'vs7monkeys', '7 Monkeys', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs7monkeys.png', ''),
(3131, 'vs50chinesecharms', 'Lucky Dragons', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs50chinesecharms.png', ''),
(3132, 'vs18mashang', 'Treasure Horse', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs18mashang.png', ''),
(3133, 'vs5spjoker', 'Super Joker', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs5spjoker.png', ''),
(3134, 'vs20egypttrs', 'Egyptian Fortunes', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs20egypttrs.png', ''),
(3135, 'vs25queenofgold', 'Queen of Gold', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs25queenofgold.png', ''),
(3136, 'vs9hotroll', 'Hot Chilli', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs9hotroll.png', ''),
(3137, 'vs4096jurassic', 'Jurassic Giants', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs4096jurassic.png', ''),
(3138, 'vs3train', 'Gold Train', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs3train.png', ''),
(3139, 'vs40beowulf', 'Beowulf', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs40beowulf.png', ''),
(3140, 'vs20bl', 'Busy Bees', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs20bl.png', ''),
(3141, 'vs1money', 'Money Money Money', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs1money.png', ''),
(3142, 'vs1600drago', 'Drago - Jewels of Fortune', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs1600drago.png', ''),
(3143, 'vs1fufufu', 'Fu Fu Fu', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs1fufufu.png', ''),
(3144, 'vs40streetracer', 'Street Racer', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs40streetracer.png', ''),
(3145, 'vs9aztecgemsdx', 'Aztec Gems Deluxe', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs9aztecgemsdx.png', ''),
(3146, 'vs20gorilla', 'Jungle Gorilla', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs20gorilla.png', ''),
(3147, 'vswayswerewolf', 'Curse of the Werewolf Megaways', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vswayswerewolf.png', ''),
(3148, 'vswayshive', 'Star Bounty', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vswayshive.png', ''),
(3149, 'vs25samurai', 'Rise of Samurai', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs25samurai.png', ''),
(3150, 'vs25walker', 'Wild Walker', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs25walker.png', ''),
(3151, 'vs20goldfever', 'Gems Bonanza', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs20goldfever.png', ''),
(3152, 'vs25bkofkngdm', 'Book of Kingdoms', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs25bkofkngdm.png', ''),
(3153, 'vs10goldfish', 'Fishin Reels', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs10goldfish.png', ''),
(3154, 'vs1024dtiger', 'The Dragon Tiger', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs1024dtiger.png', ''),
(3155, 'vs20xmascarol', 'Christmas Carol Megaways', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs20xmascarol.png', ''),
(3156, 'vs10mayangods', 'John Hunter and the Mayan Gods', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs10mayangods.png', ''),
(3157, 'vs20bonzgold', 'Bonanza Gold', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs20bonzgold.png', ''),
(3158, 'vs40voodoo', 'Voodoo Magic', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs40voodoo.png', ''),
(3159, 'vs25gldox', 'Golden Ox', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs25gldox.png', ''),
(3160, 'vs10wildtut', 'Mysterious Egypt', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs10wildtut.png', ''),
(3161, 'vs10eyestorm', 'Eye of the Storm', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs10eyestorm.png', ''),
(3162, 'vs117649starz', 'Starz Megaways', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs117649starz.png', ''),
(3163, 'vs10amm', 'The Amazing Money Machine', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs10amm.png', ''),
(3164, 'vs20magicpot', 'The Magic Cauldron - Enchanted Brew', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs20magicpot.png', ''),
(3165, 'vswayselements', 'Elemental Gems Megaways', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vswayselements.png', ''),
(3166, 'vswayschilheat', 'Chilli Heat Megaways', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vswayschilheat.png', ''),
(3167, 'vs10luckcharm', 'Lucky Grace And Charm', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs10luckcharm.png', ''),
(3168, 'vswaysaztecking', 'Aztec King Megaways', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vswaysaztecking.png', ''),
(3169, 'vs20phoenixf', 'Phoenix Forge', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs20phoenixf.png', ''),
(3170, 'vs576hokkwolf', 'Hokkaido Wolf', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs576hokkwolf.png', ''),
(3171, 'vs20trsbox', 'Treasure Wild', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs20trsbox.png', ''),
(3172, 'vs243chargebull', 'Raging Bull', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs243chargebull.png', ''),
(3173, 'vswaysbankbonz', 'Cash Bonanza', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vswaysbankbonz.png', ''),
(3174, 'vs20pbonanza', 'Pyramid Bonanza', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs20pbonanza.png', ''),
(3175, 'vs243empcaishen', 'Emperor Caishen', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs243empcaishen.png', ''),
(3176, 'vs25tigeryear', 'New Year Tiger Treasures        ', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs25tigeryear.png', ''),
(3177, 'vs20amuleteg', 'Fortune of Giza       ', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs20amuleteg.png', ''),
(3178, 'vs10runes', 'Gates of Valhalla       ', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs10runes.png', ''),
(3179, 'vs25goldparty', 'Gold Party    ', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs25goldparty.png', ''),
(3180, 'vswaysxjuicy', 'Extra Juicy Megaways       ', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vswaysxjuicy.png', ''),
(3181, 'vs40wanderw', 'Wild Depths       ', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs40wanderw.png', ''),
(3182, 'vs20smugcove', 'Smugglers Cove       ', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs20smugcove.png', ''),
(3183, 'vswayscryscav', 'Crystal Caverns Megaways       ', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vswayscryscav.png', ''),
(3184, 'vs20superx', 'Super X       ', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs20superx.png', ''),
(3185, 'vs20rockvegas', 'Rock Vegas Mega Hold & Spin', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs20rockvegas.png', ''),
(3186, 'vs25copsrobbers', 'Cash Patrol', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs25copsrobbers.png', ''),
(3187, 'vs20colcashzone', 'Colossal Cash Zone', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs20colcashzone.png', ''),
(3188, 'vs20ultim5', 'The Ultimate 5', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs20ultim5.png', ''),
(3189, 'vs20bchprty', 'Wild Beach Party', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs20bchprty.png', ''),
(3190, 'vs10bookazteck', 'Book of Aztec King', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs10bookazteck.png', ''),
(3191, 'vs50mightra', 'Might of Ra', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs50mightra.png', ''),
(3192, 'vs25bullfiesta', 'Bull Fiesta', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs25bullfiesta.png', ''),
(3193, 'vs20rainbowg', 'Rainbow Gold', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs20rainbowg.png', ''),
(3194, 'vs10tictac', 'Tic Tac Take', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs10tictac.png', ''),
(3195, 'vs243discolady', 'Disco Lady', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs243discolady.png', ''),
(3196, 'vs243queenie', 'Queenie', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs243queenie.png', ''),
(3197, 'vs20farmfest', 'Barn Festival', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs20farmfest.png', ''),
(3198, 'vs10chkchase', 'Chicken Chase', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs10chkchase.png', ''),
(3199, 'vswayswildwest', 'Wild West Gold Megaways', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vswayswildwest.png', ''),
(3200, 'vs20mustanggld2', 'Clover Gold', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs20mustanggld2.png', ''),
(3201, 'vs20drtgold', 'Drill That Gold', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs20drtgold.png', ''),
(3202, 'vs10spiritadv', 'Spirit of Adventure', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs10spiritadv.png', ''),
(3203, 'vs10firestrike2', 'Fire Strike 2', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs10firestrike2.png', ''),
(3204, 'vs40cleoeye', 'Eye of Cleopatra', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs40cleoeye.png', ''),
(3205, 'vs20gobnudge', 'Goblin Heist Powernudge', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs20gobnudge.png', ''),
(3206, 'vs20stickysymbol', 'The Great Stick-up', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs20stickysymbol.png', ''),
(3207, 'vswayszombcarn', 'Zombie Carnival', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vswayszombcarn.png', ''),
(3208, 'vs50northgard', 'North Guardians', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs50northgard.png', ''),
(3209, 'vs20sugarrush', 'Sugar Rush', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs20sugarrush.png', ''),
(3210, 'vs20cleocatra', 'Cleocatra', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs20cleocatra.png', ''),
(3211, 'vs5littlegem', 'Little Gem Hold and Spin', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs5littlegem.png', ''),
(3212, 'vs10egrich', 'Queen of Gods', 'PRAGMATIC', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs10egrich.png', ''),
(3213, 'vs243koipond', 'Koi Pond', 'PRAGMATIC', 'slots', 'https://api-sg57.ppgames.net/game_pic/rec/325/vs243koipond.png', ''),
(3214, 'vs40samurai3', 'Rise of Samurai 3', 'PRAGMATIC', 'slots', 'https://api-sg57.ppgames.net/game_pic/rec/325/vs40samurai3.png', ''),
(3215, 'vs40cosmiccash', 'Cosmic Cash', 'PRAGMATIC', 'slots', 'https://api-sg57.ppgames.net/game_pic/rec/325/vs40cosmiccash.png', ''),
(3216, 'vs25bomb', 'Bomb Bonanza', 'PRAGMATIC', 'slots', 'https://api-sg57.ppgames.net/game_pic/rec/325/vs25bomb.png', ''),
(3217, 'vs1024mahjpanda', 'Mahjong Panda', 'PRAGMATIC', 'slots', 'https://api-sg57.ppgames.net/game_pic/rec/325/vs1024mahjpanda.png', ''),
(3218, 'vs10coffee', 'Coffee Wild', 'PRAGMATIC', 'slots', 'https://api-sg57.ppgames.net/game_pic/rec/325/vs10coffee.png', ''),
(3219, 'vs100sh', 'Shining Hot 100', 'PRAGMATIC', 'slots', 'https://api-sg57.ppgames.net/game_pic/rec/325/vs100sh.png', ''),
(3220, 'vs20sh', 'Shining Hot 20', 'PRAGMATIC', 'slots', 'https://api-sg57.ppgames.net/game_pic/rec/325/vs20sh.png', ''),
(3221, 'vs40sh', 'Shining Hot 40', 'PRAGMATIC', 'slots', 'https://api-sg57.ppgames.net/game_pic/rec/325/vs40sh.png', ''),
(3222, 'vs5sh', 'Shining Hot 5', 'PRAGMATIC', 'slots', 'https://api-sg57.ppgames.net/game_pic/rec/325/vs5sh.png', ''),
(3223, 'vswaysjkrdrop', 'Tropical Tiki', 'PRAGMATIC', 'slots', 'https://api-sg57.ppgames.net/game_pic/rec/325/vswaysjkrdrop.png', ''),
(3224, 'vs243ckemp', 'Cheeky Emperor', 'PRAGMATIC', 'slots', 'https://api-sg57.ppgames.net/game_pic/rec/325/vs243ckemp.png', ''),
(3225, 'vs40hotburnx', 'Hot To Burn Extreme', 'PRAGMATIC', 'slots', 'https://api-sg57.ppgames.net/game_pic/rec/325/vs40hotburnx.png', ''),
(3226, 'vs1024gmayhem', 'Gorilla Mayhem', 'PRAGMATIC', 'slots', 'https://api-sg57.ppgames.net/game_pic/rec/325/vs1024gmayhem.png', ''),
(3227, 'vs20octobeer', 'Octobeer Fortunes', 'PRAGMATIC', 'slots', 'https://api-sg57.ppgames.net/game_pic/rec/325/vs20octobeer.png', ''),
(3228, 'vs10txbigbass', 'Big Bass Splash', 'PRAGMATIC', 'slots', 'https://api-sg57.ppgames.net/game_pic/rec/325/vs10txbigbass.png', ''),
(3229, 'vs100firehot', 'Fire Hot 100', 'PRAGMATIC', 'slots', 'https://api-sg57.ppgames.net/game_pic/rec/325/vs100firehot.png', ''),
(3230, 'vs20fh', 'Fire Hot 20', 'PRAGMATIC', 'slots', 'https://api-sg57.ppgames.net/game_pic/rec/325/vs20fh.png', ''),
(3231, 'vs40firehot', 'Fire Hot 40', 'PRAGMATIC', 'slots', 'https://api-sg57.ppgames.net/game_pic/rec/325/vs40firehot.png', ''),
(3232, 'vs5firehot', 'Fire Hot 5', 'PRAGMATIC', 'slots', 'https://api-sg57.ppgames.net/game_pic/rec/325/vs5firehot.png', ''),
(3233, 'vs20wolfie', 'Greedy Wolf', 'PRAGMATIC', 'slots', 'https://api-sg57.ppgames.net/game_pic/rec/325/vs20wolfie.png', ''),
(3234, 'vs20underground', 'Down the Rails', 'PRAGMATIC', 'slots', 'https://api-sg57.ppgames.net/game_pic/rec/325/vs20underground.png', ''),
(3235, 'vs10mmm', 'Magic Money Maze', 'PRAGMATIC', 'slots', 'https://api-sg57.ppgames.net/game_pic/rec/325/vs10mmm.png', ''),
(3236, 'vswaysfltdrg', 'Floating Dragon Hold & Spin Megaways', 'PRAGMATIC', 'slots', 'https://api-sg57.ppgames.net/game_pic/rec/325/vswaysfltdrg.png', ''),
(3237, 'vs20trswild2', 'Black Bull', 'PRAGMATIC', 'slots', 'https://api-sg57.ppgames.net/game_pic/rec/325/vs20trswild2.png', ''),
(3238, 'vswaysstrwild', 'Candy Stars', 'PRAGMATIC', 'slots', 'https://api-sg57.ppgames.net/game_pic/rec/325/vswaysstrwild.png', ''),
(3239, 'vs10crownfire', 'Crown of Fire', 'PRAGMATIC', 'slots', 'https://api-sg57.ppgames.net/game_pic/rec/325/vs10crownfire.png', ''),
(3240, 'vs20muertos', 'Muertos Multiplier Megaways', 'PRAGMATIC', 'slots', 'https://api-sg57.ppgames.net/game_pic/rec/325/vs20muertos.png', ''),
(3241, 'vswayslofhero', 'Legend of Heroes', 'PRAGMATIC', 'slots', 'https://api-sg57.ppgames.net/game_pic/rec/325/vswayslofhero.png', ''),
(3242, 'vs5strh', 'Striking Hot 5', 'PRAGMATIC', 'slots', 'https://api-sg57.ppgames.net/game_pic/rec/325/vs5strh.png', ''),
(3243, 'vs10snakeeyes', 'Snakes & Ladders - Snake Eyes', 'PRAGMATIC', 'slots', 'https://api-sg57.ppgames.net/game_pic/rec/325/vs10snakeeyes.png', ''),
(3244, 'vswaysbook', 'Book of Golden Sands', 'PRAGMATIC', 'slots', 'https://api-sg57.ppgames.net/game_pic/rec/325/vswaysbook.png', ''),
(3245, 'vs20mparty', 'Wild Hop and Drop', 'PRAGMATIC', 'slots', 'https://api-sg57.ppgames.net/game_pic/rec/325/vs20mparty.png', ''),
(3246, 'vs20swordofares', 'Sword of Ares', 'PRAGMATIC', 'slots', 'https://api-sg57.ppgames.net/game_pic/rec/325/vs20swordofares.png', ''),
(3247, 'vswaysfrywld', 'Spin & Score Megaways', 'PRAGMATIC', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/ppNew/14187.png', ''),
(3248, 'vswaysconcoll', 'Sweet PowerNudge       ', 'PRAGMATIC', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/ppNew/14240.jpg', ''),
(3249, 'vs20lcount', 'Gems of Serengeti       ', 'PRAGMATIC', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/ppNew/14257.jpg', ''),
(3250, 'vs20sparta', 'Shield of Sparta', 'PRAGMATIC', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/ppNew/14259.jpg', ''),
(3251, 'vs10bbkir', 'Big Bass Bonanza Keeping it Reel', 'PRAGMATIC', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/ppNew/14275.jpg', ''),
(3252, 'vswayspizza', 'Pizza Pizza Pizza', 'PRAGMATIC', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/ppNew/14324.jpg', ''),
(3253, 'vs20dugems', 'Hot Pepper       ', 'PRAGMATIC', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/ppNew/14327.jpg', ''),
(3254, 'vs20clspwrndg', 'Sweet PowerNudge', 'PRAGMATIC', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/ppNew/14328.jpg', ''),
(3255, 'vswaysfuryodin', 'Fury of Odin Megaways       ', 'PRAGMATIC', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/ppNew/14337.jpg', ''),
(3256, 'vs20sugarcoins', 'Viking Forge', 'PRAGMATIC', 'slots', 'https://api-2103.ppgames.net/game_pic/square/200/vs20sugarcoins.png', ''),
(3257, 'vs20olympgrace', 'Grace of Ebisu', 'PRAGMATIC', 'slots', 'https://api-2103.ppgames.net/game_pic/square/200/vs20olympgrace.png', ''),
(3258, 'vs20starlightx', 'Starlight Princess 1000', 'PRAGMATIC', 'slots', 'https://api-2103.ppgames.net/game_pic/square/200/vs20starlightx.png', ''),
(3259, 'vswaysmoneyman', 'The Money Men Megaways', 'PRAGMATIC', 'slots', 'https://api-2103.ppgames.net/game_pic/square/200/vswaysmoneyman.png', ''),
(3260, 'vs40demonpots', 'Demon Pots', 'PRAGMATIC', 'slots', 'https://api-2103.ppgames.net/game_pic/square/200/vs40demonpots.png', ''),
(3261, 'vswaystut', 'John Hunter and the Book of Tut Megaways', 'PRAGMATIC', 'slots', 'https://api-2103.ppgames.net/game_pic/square/200/vswaystut.png', ''),
(3262, 'vs10gdchalleng', '8 Golden Dragon Challenge', 'PRAGMATIC', 'slots', 'https://api-2103.ppgames.net/game_pic/square/200/vs10gdchalleng.png', ''),
(3263, 'vs20yisunshin', 'Yi Sun Shin', 'PRAGMATIC', 'slots', 'https://api-2103.ppgames.net/game_pic/square/200/vs20yisunshin.png', ''),
(3264, 'vs20candyblitz', 'Candy Blitz', 'PRAGMATIC', 'slots', 'https://api-2103.ppgames.net/game_pic/square/200/vs20candyblitz.png', ''),
(3265, 'vswaysstrlght', 'Fortunes of Aztec', 'PRAGMATIC', 'slots', 'https://api-2103.ppgames.net/game_pic/square/200/vswaysstrlght.png', ''),
(3266, 'vs40infwild', 'Infective Wild', 'PRAGMATIC', 'slots', 'https://api-2103.ppgames.net/game_pic/square/200/vs40infwild.png', ''),
(3267, 'vs20gravity', 'Gravity Bonanza', 'PRAGMATIC', 'slots', 'https://api-2103.ppgames.net/game_pic/square/200/vs20gravity.png', ''),
(3268, 'vs40rainbowr', 'Rainbow Reels', 'PRAGMATIC', 'slots', 'https://api-2103.ppgames.net/game_pic/square/200/vs40rainbowr.png', ''),
(3269, 'vs20bnnzdice', 'Sweet Bonanza Dice', 'PRAGMATIC', 'slots', 'https://api-2103.ppgames.net/game_pic/square/200/vs20bnnzdice.png', ''),
(3270, 'vs10bhallbnza', 'Big Bass Halloween', 'PRAGMATIC', 'slots', 'https://api-2103.ppgames.net/game_pic/square/200/vs10bhallbnza.png', ''),
(3271, 'vs20maskgame', 'Cash Chips', 'PRAGMATIC', 'slots', 'https://api-2103.ppgames.net/game_pic/square/200/vs20maskgame.png', ''),
(3272, 'vs5gemstone', 'Gemstone', 'PRAGMATIC', 'slots', 'https://api-2103.ppgames.net/game_pic/square/200/vs5gemstone.png', ''),
(3273, 'vs1024mahjwins', 'Mahjong Wins', 'PRAGMATIC', 'slots', 'https://api-2103.ppgames.net/game_pic/square/200/vs1024mahjwins.png', ''),
(3274, 'vs20procount', 'Wisdom of Athena', 'PRAGMATIC', 'slots', 'https://api-2103.ppgames.net/game_pic/square/200/vs20procount.png', ''),
(3275, 'vs20forge', 'Forge of Olympus', 'PRAGMATIC', 'slots', 'https://api-2103.ppgames.net/game_pic/square/200/vs20forge.png', ''),
(3276, 'vswaysbbhas', 'Big Bass Hold & Spinner Megaways', 'PRAGMATIC', 'slots', 'https://api-2103.ppgames.net/game_pic/square/200/vswaysbbhas.png', ''),
(3277, 'vs20earthquake', 'Cyclops Smash', 'PRAGMATIC', 'slots', 'https://api-2103.ppgames.net/game_pic/square/200/vs20earthquake.png', ''),
(3278, 'vs20saiman', 'Saiyan Mania', 'PRAGMATIC', 'slots', 'https://api-2103.ppgames.net/game_pic/square/200/vs20saiman.png', ''),
(3279, 'vs20piggybank', 'Piggy Bankers', 'PRAGMATIC', 'slots', 'https://api-2103.ppgames.net/game_pic/square/200/vs20piggybank.png', ''),
(3280, 'vs20lvlup', 'Pub Kings', 'PRAGMATIC', 'slots', 'https://api-2103.ppgames.net/game_pic/square/200/vs20lvlup.png', ''),
(3281, 'vs10trail', 'Mustang Trail', 'PRAGMATIC', 'slots', 'https://api-2103.ppgames.net/game_pic/square/200/vs10trail.png', ''),
(3282, 'vs20supermania', 'Supermania', 'PRAGMATIC', 'slots', 'https://api-2103.ppgames.net/game_pic/square/200/vs20supermania.png', ''),
(3283, 'vs50dmdcascade', 'Diamond Cascade', 'PRAGMATIC', 'slots', 'https://api-2103.ppgames.net/game_pic/square/200/vs50dmdcascade.png', ''),
(3284, 'vs20wildparty', '3 Buzzing Wilds', 'PRAGMATIC', 'slots', 'https://api-2103.ppgames.net/game_pic/square/200/vs20wildparty.png', ''),
(3285, 'vs20doghousemh', 'The Dog House Multihold', 'PRAGMATIC', 'slots', 'https://api-2103.ppgames.net/game_pic/square/200/vs20doghousemh.png', ''),
(3286, 'vs20splmystery', 'Spellbinding Mystery', 'PRAGMATIC', 'slots', 'https://api-2103.ppgames.net/game_pic/square/200/vs20splmystery.png', ''),
(3287, 'vs20cashmachine', 'Cash Box', 'PRAGMATIC', 'slots', 'https://api-2103.ppgames.net/game_pic/square/200/vs20cashmachine.png', ''),
(3288, 'vs50jucier', 'Sky Bounty', 'PRAGMATIC', 'slots', 'https://api-2103.ppgames.net/game_pic/square/200/vs50jucier.png', ''),
(3289, 'vs243nudge4gold', 'Hellvis Wild', 'PRAGMATIC', 'slots', 'https://api-2103.ppgames.net/game_pic/square/200/vs243nudge4gold.png', ''),
(3290, 'vs25jokrace', 'Joker Race', 'PRAGMATIC', 'slots', 'https://api-2103.ppgames.net/game_pic/square/200/vs25jokrace.png', ''),
(3291, 'vs20hstgldngt', 'Heist for the Golden Nuggets', 'PRAGMATIC', 'slots', 'https://api-2103.ppgames.net/game_pic/square/200/vs20hstgldngt.png', ''),
(3292, 'vs20beefed', 'Fat Panda', 'PRAGMATIC', 'slots', 'https://api-2103.ppgames.net/game_pic/square/200/vs20beefed.png', ''),
(3293, 'vs20jewelparty', 'Jewel Rush', 'PRAGMATIC', 'slots', 'https://api-2103.ppgames.net/game_pic/square/200/vs20jewelparty.png', ''),
(3294, 'vs9outlaw', 'Pirates Pub', 'PRAGMATIC', 'slots', 'https://api-2103.ppgames.net/game_pic/square/200/vs9outlaw.png', ''),
(3295, 'vswaysfrbugs', 'Frogs & Bugs', 'PRAGMATIC', 'slots', 'https://api-2103.ppgames.net/game_pic/square/200/vswaysfrbugs.png', ''),
(3296, 'vs20lampinf', 'Lamp Of Infinity', 'PRAGMATIC', 'slots', 'https://api-2103.ppgames.net/game_pic/square/200/vs20lampinf.png', ''),
(3297, 'vs4096robber', 'Robber Strike', 'PRAGMATIC', 'slots', 'https://api-2103.ppgames.net/game_pic/square/200/vs4096robber.png', ''),
(3298, 'vs10fdrasbf', 'Floating Dragon - Dragon Boat Festival', 'PRAGMATIC', 'slots', 'https://api-2103.ppgames.net/game_pic/square/200/vs10fdrasbf.png', ''),
(3299, 'vs20clustwild', 'Sticky Bees', 'PRAGMATIC', 'slots', 'https://api-2103.ppgames.net/game_pic/square/200/vs20clustwild.png', ''),
(3300, 'vs25spotz', 'Knight Hot Spotz', 'PRAGMATIC', 'slots', 'https://api-2103.ppgames.net/game_pic/square/200/vs25spotz.png', ''),
(3301, 'vs20excalibur', 'Excalibur Unleashed', 'PRAGMATIC', 'slots', 'https://api-2103.ppgames.net/game_pic/square/200/vs20excalibur.png', ''),
(3302, 'vs20stickywild', 'Wild Bison Charge', 'PRAGMATIC', 'slots', 'https://api-2103.ppgames.net/game_pic/square/200/vs20stickywild.png', ''),
(3303, 'vs25holiday', 'Holiday Ride', 'PRAGMATIC', 'slots', 'https://api-2103.ppgames.net/game_pic/square/200/vs25holiday.png', ''),
(3304, 'vs20mvwild', 'Jasmine Dreams', 'PRAGMATIC', 'slots', 'https://api-2103.ppgames.net/game_pic/square/200/vs20mvwild.png', ''),
(3305, 'vs10kingofdth', 'Kingdom of the Dead', 'PRAGMATIC', 'slots', 'https://api-2103.ppgames.net/game_pic/square/200/vs10kingofdth.png', ''),
(3306, 'vswaysultrcoin', 'Cowboy Coins', 'PRAGMATIC', 'slots', 'https://api-2103.ppgames.net/game_pic/square/200/vswaysultrcoin.png', ''),
(3307, 'vs10gizagods', 'Gods of Giza', 'PRAGMATIC', 'slots', 'https://api-2103.ppgames.net/game_pic/square/200/vs10gizagods.png', ''),
(3308, 'vswaysrsm', 'Wild Celebrity Bus Megaways', 'PRAGMATIC', 'slots', 'https://api-2103.ppgames.net/game_pic/square/200/vswaysrsm.png', ''),
(3309, 'vswaysmonkey', '3 Dancing Monkeys', 'PRAGMATIC', 'slots', 'https://api-2103.ppgames.net/game_pic/square/200/vswaysmonkey.png', ''),
(3310, 'vs20hotzone', 'African Elephant', 'PRAGMATIC', 'slots', 'https://api-2103.ppgames.net/game_pic/square/200/vs20hotzone.png', ''),
(3311, 'vs10bbhas', 'Big Bass - Hold & Spinner', 'PRAGMATIC', 'slots', 'https://api-2103.ppgames.net/game_pic/square/200/vs10bbhas.png', ''),
(3312, 'vs1024moonsh', 'Moonshot', 'PRAGMATIC', 'slots', 'https://api-2103.ppgames.net/game_pic/square/200/vs1024moonsh.png', ''),
(3313, 'vswaysredqueen', 'The Red Queen', 'PRAGMATIC', 'slots', 'https://api-2103.ppgames.net/game_pic/square/200/vswaysredqueen.png', ''),
(3314, 'vs20framazon', 'Fruits of the Amazon', 'PRAGMATIC', 'slots', 'https://api-2103.ppgames.net/game_pic/square/200/vs20framazon.png', ''),
(3315, 'vs20sknights', 'The Knight King', 'PRAGMATIC', 'slots', 'https://api-2103.ppgames.net/game_pic/square/200/vs20sknights.png', ''),
(3316, 'vs20goldclust', 'Rabbit Garden', 'PRAGMATIC', 'slots', 'https://api-2103.ppgames.net/game_pic/square/200/vs20goldclust.png', ''),
(3317, 'vswaysmorient', 'Mystery of the Orient', 'PRAGMATIC', 'slots', 'https://api-2103.ppgames.net/game_pic/square/200/vswaysmorient.png', ''),
(3318, 'vs10powerlines', 'Peak Power', 'PRAGMATIC', 'slots', 'https://api-2103.ppgames.net/game_pic/square/200/vs10powerlines.png', ''),
(3319, 'vs12tropicana', 'Club Tropicana', 'PRAGMATIC', 'slots', 'https://api-2103.ppgames.net/game_pic/square/200/vs12tropicana.png', ''),
(3320, 'vs25archer', 'Fire Archer', 'PRAGMATIC', 'slots', 'https://api-2103.ppgames.net/game_pic/square/200/vs25archer.png', ''),
(3321, 'vs20mochimon', 'Mochimon', 'PRAGMATIC', 'slots', 'https://api-2103.ppgames.net/game_pic/square/200/vs20mochimon.png', ''),
(3322, 'vs10fisheye', 'Fish Eye', 'PRAGMATIC', 'slots', 'https://api-2103.ppgames.net/game_pic/square/200/vs10fisheye.png', ''),
(3323, 'vs20superlanche', 'Monster Superlanche', 'PRAGMATIC', 'slots', 'https://api-2103.ppgames.net/game_pic/square/200/vs20superlanche.png', ''),
(3324, 'vswaysftropics', 'Frozen Tropics', 'PRAGMATIC', 'slots', 'https://api-2103.ppgames.net/game_pic/square/200/vswaysftropics.png', ''),
(3325, 'vswaysincwnd', 'Gold Oasis', 'PRAGMATIC', 'slots', 'https://api-2103.ppgames.net/game_pic/square/200/vswaysincwnd.png', ''),
(3326, 'vs25spgldways', 'Secret City Gold', 'PRAGMATIC', 'slots', 'https://api-2103.ppgames.net/game_pic/square/200/vs25spgldways.png', ''),
(3327, 'vswayswwhex', 'Wild Wild Bananas', 'PRAGMATIC', 'slots', 'https://api-2103.ppgames.net/game_pic/square/200/vswayswwhex.png', ''),
(3328, 'SGReturnToTheFeature', 'Return to the Future', 'HABANERO', 'slots', 'https://app-b.insvr.com/img/s/300/SGReturnToTheFeature_ko-KR.png', ''),
(3329, 'SGTabernaDeLosMuertosUltra', 'Tevena de los Muirtos Ultra', 'HABANERO', 'slots', 'https://app-b.insvr.com/img/s/300/SGTabernaDeLosMuertosUltra_ko-KR.png', ''),
(3330, 'SGTotemTowers', 'Totem towers', 'HABANERO', 'slots', 'https://app-b.insvr.com/img/s/300/SGTotemTowers_ko-KR.png', ''),
(3331, 'SGChristmasGiftRush', 'Christmas Kipoot Rush', 'HABANERO', 'slots', 'https://app-b.insvr.com/img/s/300/SGChristmasGiftRush_ko-KR.png', ''),
(3332, 'SGOrbsOfAtlantis', 'Overs of Atlantis', 'HABANERO', 'slots', 'https://app-b.insvr.com/img/s/300/SGOrbsOfAtlantis_ko-KR.png', ''),
(3333, 'SGBeforeTimeRunsOut', 'Before Time Runner Out', 'HABANERO', 'slots', 'https://app-b.insvr.com/img/s/300/SGBeforeTimeRunsOut_ko-KR.png', ''),
(3334, 'SGTechnoTumble', 'Techno tumble', 'HABANERO', 'slots', 'https://app-b.insvr.com/img/s/300/SGTechnoTumble_ko-KR.png', ''),
(3335, 'SGWealthInn', 'Wells Inn', 'HABANERO', 'slots', 'https://app-b.insvr.com/img/s/300/SGWealthInn_ko-KR.png', ''),
(3336, 'SGHappyApe', 'Happy ape', 'HABANERO', 'slots', 'https://app-b.insvr.com/img/s/300/SGHappyApe_ko-KR.png', ''),
(3337, 'SGTabernaDeLosMuertos', 'Tevena di los Muertos', 'HABANERO', 'slots', 'https://app-b.insvr.com/img/s/300/SGTabernaDeLosMuertos_ko-KR.png', ''),
(3338, 'SGNaughtySanta', 'Notty Santa', 'HABANERO', 'slots', 'https://app-b.insvr.com/img/s/300/SGNaughtySanta_ko-KR.png', ''),
(3339, 'SGFaCaiShenDeluxe', 'Pakai Sen Deluxe', 'HABANERO', 'slots', 'https://app-b.insvr.com/img/s/300/SGFaCaiShenDeluxe_ko-KR.png', ''),
(3340, 'SGHeySushi', 'Hey sushi', 'HABANERO', 'slots', 'https://app-b.insvr.com/img/s/300/SGHeySushi_ko-KR.png', ''),
(3341, 'SGKnockoutFootballRush', 'Knockout football rush', 'HABANERO', 'slots', 'https://app-b.insvr.com/img/s/300/SGKnockoutFootballRush_ko-KR.png', ''),
(3342, 'SGColossalGems', 'Closal Gems', 'HABANERO', 'slots', 'https://app-b.insvr.com/img/s/300/SGColossalGems_ko-KR.png', ''),
(3343, 'SGHotHotHalloween', 'hot hot halloween', 'HABANERO', 'slots', 'https://app-b.insvr.com/img/s/300/SGHotHotHalloween_ko-KR.png', ''),
(3344, 'SGLuckyFortuneCat', 'Lucky fortune cat', 'HABANERO', 'slots', 'https://app-b.insvr.com/img/s/300/SGLuckyFortuneCat_ko-KR.png', ''),
(3345, 'SGHotHotFruit', 'hot hot fruit', 'HABANERO', 'slots', 'https://app-b.insvr.com/img/s/300/SGHotHotFruit_ko-KR.png', ''),
(3346, 'SGMountMazuma', 'Mount Majuma', 'HABANERO', 'slots', 'https://app-b.insvr.com/img/s/300/SGMountMazuma_ko-KR.png', ''),
(3347, 'SGWildTrucks', 'Wild Trucks', 'HABANERO', 'slots', 'https://app-b.insvr.com/img/s/300/SGWildTrucks_ko-KR.png', ''),
(3348, 'SGLuckyLucky', 'Lucky Lucky', 'HABANERO', 'slots', 'https://app-b.insvr.com/img/s/300/SGLuckyLucky_ko-KR.png', ''),
(3349, 'SGKnockoutFootball', 'Knockout football', 'HABANERO', 'slots', 'https://app-b.insvr.com/img/s/300/SGKnockoutFootball_ko-KR.png', ''),
(3350, 'SGJump', 'Jump!', 'HABANERO', 'slots', 'https://app-b.insvr.com/img/s/300/SGJump_ko-KR.png', ''),
(3351, 'SGPumpkinPatch', 'Pumpkin patch', 'HABANERO', 'slots', 'https://app-b.insvr.com/img/s/300/SGPumpkinPatch_ko-KR.png', ''),
(3352, 'SGWaysOfFortune', 'Way of Fortune', 'HABANERO', 'slots', 'https://app-b.insvr.com/img/s/300/SGWaysOfFortune_ko-KR.png', ''),
(3353, 'SGFourDivineBeasts', 'For Devine Beasts', 'HABANERO', 'slots', 'https://app-b.insvr.com/img/s/300/SGFourDivineBeasts_ko-KR.png', ''),
(3354, 'SGPandaPanda', 'Panda panda', 'HABANERO', 'slots', 'https://app-b.insvr.com/img/s/300/SGPandaPanda_ko-KR.png', ''),
(3355, 'SGScruffyScallywags', 'Scruffy Skellywex', 'HABANERO', 'slots', 'https://app-b.insvr.com/img/s/300/SGScruffyScallywags_ko-KR.png', '');
INSERT INTO `tb_gamenew` (`cuid`, `game_code`, `game_name`, `game_provider`, `game_category`, `game_image`, `game_url`) VALUES
(3356, 'SGNuwa', 'Nuwa', 'HABANERO', 'slots', 'https://app-b.insvr.com/img/s/300/SGNuwa_ko-KR.png', ''),
(3357, 'SGTheKoiGate', 'Koi gate', 'HABANERO', 'slots', 'https://app-b.insvr.com/img/s/300/SGTheKoiGate_ko-KR.png', ''),
(3358, 'SGFaCaiShen', 'Pacaishen', 'HABANERO', 'slots', 'https://app-b.insvr.com/img/s/300/SGFaCaiShen_ko-KR.png', ''),
(3359, 'SG12Zodiacs', '12 zodiacs', 'HABANERO', 'slots', 'https://app-b.insvr.com/img/s/300/SG12Zodiacs_ko-KR.png', ''),
(3360, 'SGFireRooster', 'Fire rooster', 'HABANERO', 'slots', 'https://app-b.insvr.com/img/s/300/SGFireRooster_ko-KR.png', ''),
(3361, 'SGFenghuang', 'Phoenix', 'HABANERO', 'slots', 'https://app-b.insvr.com/img/s/300/SGFenghuang_ko-KR.png', ''),
(3362, 'SGBirdOfThunder', 'Bird of Thunder', 'HABANERO', 'slots', 'https://app-b.insvr.com/img/s/300/SGBirdOfThunder_ko-KR.png', ''),
(3363, 'SGTheDeadEscape', 'The Dead Escape', 'HABANERO', 'slots', 'https://app-b.insvr.com/img/s/300/SGTheDeadEscape_ko-KR.png', ''),
(3364, 'SGBombsAway', 'Bombs Away', 'HABANERO', 'slots', 'https://app-b.insvr.com/img/s/300/SGBombsAway_ko-KR.png', ''),
(3365, 'SGGoldRush', 'Gold rush', 'HABANERO', 'slots', 'https://app-b.insvr.com/img/s/300/SGGoldRush_ko-KR.png', ''),
(3366, 'SGRuffledUp', 'Ruffled up', 'HABANERO', 'slots', 'https://app-b.insvr.com/img/s/300/SGRuffledUp_ko-KR.png', ''),
(3367, 'SGRomanEmpire', 'Roman empire', 'HABANERO', 'slots', 'https://app-b.insvr.com/img/s/300/SGRomanEmpire_ko-KR.png', ''),
(3368, 'SGCoyoteCrash', 'Coyote crash', 'HABANERO', 'slots', 'https://app-b.insvr.com/img/s/300/SGCoyoteCrash_ko-KR.png', ''),
(3369, 'SGWickedWitch', 'Wickt Location', 'HABANERO', 'slots', 'https://app-b.insvr.com/img/s/300/SGWickedWitch_ko-KR.png', ''),
(3370, 'SGBuggyBonus', 'Buggy bonus', 'HABANERO', 'slots', 'https://app-b.insvr.com/img/s/300/SGBuggyBonus_ko-KR.png', ''),
(3371, 'SGGlamRock', 'Glam rock', 'HABANERO', 'slots', 'https://app-b.insvr.com/img/s/300/SGGlamRock_ko-KR.png', ''),
(3372, 'SGSuperTwister', 'Super twister', 'HABANERO', 'slots', 'https://app-b.insvr.com/img/s/300/SGSuperTwister_ko-KR.png', ''),
(3373, 'SGKanesInferno', 'Keynes Inferno', 'HABANERO', 'slots', 'https://app-b.insvr.com/img/s/300/SGKanesInferno_ko-KR.png', ''),
(3374, 'SGTreasureTomb', 'Treasure Tomb', 'HABANERO', 'slots', 'https://app-b.insvr.com/img/s/300/SGTreasureTomb_ko-KR.png', ''),
(3375, 'SGJugglenaut', 'Jugglenut', 'HABANERO', 'slots', 'https://app-b.insvr.com/img/s/300/SGJugglenaut_ko-KR.png', ''),
(3376, 'SGGalacticCash', 'Glactic Cash', 'HABANERO', 'slots', 'https://app-b.insvr.com/img/s/300/SGGalacticCash_ko-KR.png', ''),
(3377, 'SGZeus2', 'Zeus 2', 'HABANERO', 'slots', 'https://app-b.insvr.com/img/s/300/SGZeus2_ko-KR.png', ''),
(3378, 'SGTheDragonCastle', 'Dragon castle', 'HABANERO', 'slots', 'https://app-b.insvr.com/img/s/300/SGTheDragonCastle_ko-KR.png', ''),
(3379, 'SGKingTutsTomb', 'King Teeth Tomb', 'HABANERO', 'slots', 'https://app-b.insvr.com/img/s/300/SGKingTutsTomb_ko-KR.png', ''),
(3380, 'SGCarnivalCash', 'Carnival cash', 'HABANERO', 'slots', 'https://app-b.insvr.com/img/s/300/SGCarnivalCash_ko-KR.png', ''),
(3381, 'SGTreasureDiver', 'Treasure diver', 'HABANERO', 'slots', 'https://app-b.insvr.com/img/s/300/SGTreasureDiver_ko-KR.png', ''),
(3382, 'SGLittleGreenMoney', 'Little Green Money', 'HABANERO', 'slots', 'https://app-b.insvr.com/img/s/300/SGLittleGreenMoney_ko-KR.png', ''),
(3383, 'SGMonsterMashCash', 'Monster Mash Cash', 'HABANERO', 'slots', 'https://app-b.insvr.com/img/s/300/SGMonsterMashCash_ko-KR.png', ''),
(3384, 'SGShaolinFortunes100', 'Xiaolin Fortune 100', 'HABANERO', 'slots', 'https://app-b.insvr.com/img/s/300/SGShaolinFortunes100_ko-KR.png', ''),
(3385, 'SGShaolinFortunes243', 'Xiaolin Fortune', 'HABANERO', 'slots', 'https://app-b.insvr.com/img/s/300/SGShaolinFortunes243_ko-KR.png', ''),
(3386, 'SGWeirdScience', 'Weird Science', 'HABANERO', 'slots', 'https://app-b.insvr.com/img/s/300/SGWeirdScience_ko-KR.png', ''),
(3387, 'SGBlackbeardsBounty', 'Blackbeards Bounty', 'HABANERO', 'slots', 'https://app-b.insvr.com/img/s/300/SGBlackbeardsBounty_ko-KR.png', ''),
(3388, 'SGDrFeelgood', 'Dr. Feelgood', 'HABANERO', 'slots', 'https://app-b.insvr.com/img/s/300/SGDrFeelgood_ko-KR.png', ''),
(3389, 'SGVikingsPlunder', 'Vikings plunder', 'HABANERO', 'slots', 'https://app-b.insvr.com/img/s/300/SGVikingsPlunder_ko-KR.png', ''),
(3390, 'SGDoubleODollars', 'Double O Dollars', 'HABANERO', 'slots', 'https://app-b.insvr.com/img/s/300/SGDoubleODollars_ko-KR.png', ''),
(3391, 'SGSpaceFortune', 'Space fortune', 'HABANERO', 'slots', 'https://app-b.insvr.com/img/s/300/SGSpaceFortune_ko-KR.png', ''),
(3392, 'SGPamperMe', 'Pamper me', 'HABANERO', 'slots', 'https://app-b.insvr.com/img/s/300/SGPamperMe_ko-KR.png', ''),
(3393, 'SGZeus', 'Zeus', 'HABANERO', 'slots', 'https://app-b.insvr.com/img/s/300/SGZeus_ko-KR.png', ''),
(3394, 'SGSOS', 'S.O.S.!', 'HABANERO', 'slots', 'https://app-b.insvr.com/img/s/300/SGSOS_ko-KR.png', ''),
(3395, 'SGPoolShark', 'Full shark', 'HABANERO', 'slots', 'https://app-b.insvr.com/img/s/300/SGPoolShark_ko-KR.png', ''),
(3396, 'SGEgyptianDreams', 'Egyptian Dreams', 'HABANERO', 'slots', 'https://app-b.insvr.com/img/s/300/SGEgyptianDreams_ko-KR.png', ''),
(3397, 'SGBarnstormerBucks', 'Barnstormer Bucks', 'HABANERO', 'slots', 'https://app-b.insvr.com/img/s/300/SGBarnstormerBucks_ko-KR.png', ''),
(3398, 'SGSuperStrike', 'Super strike', 'HABANERO', 'slots', 'https://app-b.insvr.com/img/s/300/SGSuperStrike_ko-KR.png', ''),
(3399, 'SGJungleRumble', 'Jungle rumble', 'HABANERO', 'slots', 'https://app-b.insvr.com/img/s/300/SGJungleRumble_ko-KR.png', ''),
(3400, 'SGArcticWonders', 'Arctic Wonders', 'HABANERO', 'slots', 'https://app-b.insvr.com/img/s/300/SGArcticWonders_ko-KR.png', ''),
(3401, 'SGTowerOfPizza', 'Tower of Pizza', 'HABANERO', 'slots', 'https://app-b.insvr.com/img/s/300/SGTowerOfPizza_ko-KR.png', ''),
(3402, 'SGMummyMoney', 'Mummy money', 'HABANERO', 'slots', 'https://app-b.insvr.com/img/s/300/SGMummyMoney_ko-KR.png', ''),
(3403, 'SGBikiniIsland', 'bikini island', 'HABANERO', 'slots', 'https://app-b.insvr.com/img/s/300/SGBikiniIsland_ko-KR.png', ''),
(3404, 'SGQueenOfQueens1024', 'Queen of Queens II', 'HABANERO', 'slots', 'https://app-b.insvr.com/img/s/300/SGQueenOfQueens1024_ko-KR.png', ''),
(3405, 'SGAllForOne', 'All for one', 'HABANERO', 'slots', 'https://app-b.insvr.com/img/s/300/SGAllForOne_ko-KR.png', ''),
(3406, 'SGFlyingHigh', 'Flying high', 'HABANERO', 'slots', 'https://app-b.insvr.com/img/s/300/SGFlyingHigh_ko-KR.png', ''),
(3407, 'SGMrBling', 'Mr. Bling', 'HABANERO', 'slots', 'https://app-b.insvr.com/img/s/300/SGMrBling_ko-KR.png', ''),
(3408, 'SGMysticFortune', 'Mystic Fortune', 'HABANERO', 'slots', 'https://app-b.insvr.com/img/s/300/SGMysticFortune_ko-KR.png', ''),
(3409, 'SGPuckerUpPrince', 'Funker up prince', 'HABANERO', 'slots', 'https://app-b.insvr.com/img/s/300/SGPuckerUpPrince_ko-KR.png', ''),
(3410, 'SGSirBlingalot', 'Bring it all', 'HABANERO', 'slots', 'https://app-b.insvr.com/img/s/300/SGSirBlingalot_ko-KR.png', ''),
(3411, 'SGCashReef', 'Cash leaf', 'HABANERO', 'slots', 'https://app-b.insvr.com/img/s/300/SGCashReef_ko-KR.png', ''),
(3412, 'SGQueenOfQueens243', 'Queen of queens', 'HABANERO', 'slots', 'https://app-b.insvr.com/img/s/300/SGQueenOfQueens243_ko-KR.png', ''),
(3413, 'SGRideEmCowboy', 'Lytham Cowboy (Pick Game)', 'HABANERO', 'slots', 'https://app-b.insvr.com/img/s/300/SGRideEmCowboy_ko-KR.png', ''),
(3414, 'SGGrapeEscape', 'The Graph Escape', 'HABANERO', 'slots', 'https://app-b.insvr.com/img/s/300/SGGrapeEscape_ko-KR.png', ''),
(3415, 'SGGoldenUnicorn', 'Golden unicorn', 'HABANERO', 'slots', 'https://app-b.insvr.com/img/s/300/SGGoldenUnicorn_ko-KR.png', ''),
(3416, 'SGFrontierFortunes', 'Frontier Fortune', 'HABANERO', 'slots', 'https://app-b.insvr.com/img/s/300/SGFrontierFortunes_ko-KR.png', ''),
(3417, 'SGIndianCashCatcher', 'Indian Cash Catcher', 'HABANERO', 'slots', 'https://app-b.insvr.com/img/s/300/SGIndianCashCatcher_ko-KR.png', ''),
(3418, 'SGTheBigDeal', 'The Big Deal', 'HABANERO', 'slots', 'https://app-b.insvr.com/img/s/300/SGTheBigDeal_ko-KR.png', ''),
(3419, 'SGCashosaurus', 'Cashosaurus', 'HABANERO', 'slots', 'https://app-b.insvr.com/img/s/300/SGCashosaurus_ko-KR.png', ''),
(3420, 'SGDiscoFunk', 'Disco funk', 'HABANERO', 'slots', 'https://app-b.insvr.com/img/s/300/SGDiscoFunk_ko-KR.png', ''),
(3421, 'SGCalaverasExplosivas', 'Calaveras Explociba', 'HABANERO', 'slots', 'https://app-b.insvr.com/img/s/300/SGCalaverasExplosivas_ko-KR.png', ''),
(3422, 'SGNewYearsBash', 'New Year Bessie', 'HABANERO', 'slots', 'https://app-b.insvr.com/img/s/300/SGNewYearsBash_ko-KR.png', ''),
(3423, 'SGNineTails', 'Nine Tales', 'HABANERO', 'slots', 'https://app-b.insvr.com/img/s/300/SGNineTails_ko-KR.png', ''),
(3424, 'SGMysticFortuneDeluxe', 'Mystic Fortune Deluxe', 'HABANERO', 'slots', 'https://app-b.insvr.com/img/s/300/SGMysticFortuneDeluxe_ko-KR.png', ''),
(3425, 'SGLuckyDurian', 'Lucky durian', 'HABANERO', 'slots', 'https://app-b.insvr.com/img/s/300/SGLuckyDurian_ko-KR.png', ''),
(3426, 'SGDiscoBeats', 'Disco beat', 'HABANERO', 'slots', 'https://app-b.insvr.com/img/s/300/SGDiscoBeats_ko-KR.png', ''),
(3427, 'SGLanternLuck', 'Lantern lucky', 'HABANERO', 'slots', 'https://app-b.insvr.com/img/s/300/SGLanternLuck_ko-KR.png', ''),
(3428, 'SGBombRunner', 'Boom runner', 'HABANERO', 'slots', 'https://app-b.insvr.com/img/s/300/SGBombRunner_ko-KR.png', ''),
(3429, 'sun_of_egypt', 'SUN OF EGYPT', 'BOOONGO', 'slots', 'https://cdn46952.bngsrv.com/games/banner_173_en.jpe?ts=1573550830337', ''),
(3430, 'sun_of_egypt_2', 'SUN OF EGYPT 2', 'BOOONGO', 'slots', 'https://cdn46952.bngsrv.com/games/banner_202_en.jpg?ts=1602582288012', ''),
(3431, 'happy_fish', 'HAPPY FISH', 'BOOONGO', 'slots', 'https://cdn46952.bngsrv.com/games/banner_261_en.jpg?ts=1644912611364', ''),
(3432, 'queen_of_the_sun', 'QUEEN OF THE SUN', 'BOOONGO', 'slots', 'https://cdn46952.bngsrv.com/games/banner_256_en.jpg?ts=1643099409287', ''),
(3433, 'tiger_jungle', 'TIGER JUNGLE', 'BOOONGO', 'slots', 'https://cdn46952.bngsrv.com/games/banner_242_en.jpg?ts=1630999887216', ''),
(3434, 'black_wolf', 'BLACK WOLF', 'BOOONGO', 'slots', 'https://cdn46952.bngsrv.com/games/banner_254_en.jpg?ts=1637589465054', ''),
(3435, 'hit_the_gold', 'HIT THE GOLD', 'BOOONGO', 'slots', 'https://cdn46952.bngsrv.com/games/banner_228_en.jpg?ts=1621873173151', ''),
(3436, 'candy_boom', 'CANDY BOOM', 'BOOONGO', 'slots', 'https://cdn46952.bngsrv.com/games/banner_250_en.jpg?ts=1635783617393', ''),
(3437, 'scarab_riches', 'SCARAB RICHES', 'BOOONGO', 'slots', 'https://cdn46952.bngsrv.com/games/banner_168_en.jpe?ts=1568115171958', ''),
(3438, 'golden_dancing_lion', 'GOLDEN DANCING LION', 'BOOONGO', 'slots', 'https://cdn46952.bngsrv.com/games/banner_252_en.jpg?ts=1637050697146', ''),
(3439, 'dragon_pearls', 'DRAGON PEARLS', 'BOOONGO', 'slots', 'https://cdn46952.bngsrv.com/games/banner_151_en.jpeg?ts=1551785453936', ''),
(3440, '3_coins', '3 COINS', 'BOOONGO', 'slots', 'https://cdn46952.bngsrv.com/games/banner_212_en.jpg?ts=1610363762913', ''),
(3441, 'super_rich_god', 'SUPER RICH GOD', 'BOOONGO', 'slots', 'https://cdn46952.bngsrv.com/games/banner_217_en.jpg?ts=1614080397964', ''),
(3442, '15_dragon_pearls', '15 DRAGON PEARLS', 'BOOONGO', 'slots', 'https://cdn46952.bngsrv.com/games/banner_197_en.jpeg?ts=1597062411022', ''),
(3443, 'aztec_sun', 'AZTEC SUN', 'BOOONGO', 'slots', 'https://cdn46952.bngsrv.com/games/banner_187_en.jpe?ts=1591699656458', ''),
(3444, 'scarab_temple', 'SCARAB TEMPLE', 'BOOONGO', 'slots', 'https://cdn46952.bngsrv.com/games/banner_201_en.jpeg?ts=1601369529833', ''),
(3445, 'gods_temple_deluxe', 'GODS TEMPLE DELUXE', 'BOOONGO', 'slots', 'https://cdn46952.bngsrv.com/static/games/banner_86_en.png', ''),
(3446, 'book_of_sun', 'BOOK OF SUN', 'BOOONGO', 'slots', 'https://cdn46952.bngsrv.com/static/games/banner_139_en.jpg', ''),
(3447, '777_gems', '777 GEMS', 'BOOONGO', 'slots', 'https://cdn46952.bngsrv.com/games/banner_148_en.jpeg', ''),
(3448, 'book_of_sun_multichance', 'BOOK OF SUN MULTICHANCE', 'BOOONGO', 'slots', 'https://cdn46952.bngsrv.com/games/banner_157_en.jpg?ts=1557834927593', ''),
(3449, 'olympian_gods', 'OLYMPIAN GODS', 'BOOONGO', 'slots', 'https://cdn46952.bngsrv.com/games/banner_166_en.jpeg?ts=1565181937129', ''),
(3450, '777_gems_respin', '777 GEMS RESPIN', 'BOOONGO', 'slots', 'https://cdn46952.bngsrv.com/games/banner_175_en.jpg?ts=1575289527907', ''),
(3451, 'tigers_gold', 'TIGERS GOLD', 'BOOONGO', 'slots', 'https://cdn46952.bngsrv.com/games/banner_178_en.jpe?ts=1580204919370', ''),
(3452, 'moon_sisters', 'MOON SISTERS', 'BOOONGO', 'slots', 'https://cdn46952.bngsrv.com/games/banner_183_en.jpg?ts=1589276977044', ''),
(3453, 'book_of_sun_choice', 'BOOK OF SUN CHOICE', 'BOOONGO', 'slots', 'https://cdn46952.bngsrv.com/games/banner_184_en.jpg?ts=1586766763403', ''),
(3454, 'super_marble', 'SUPER MARBLE', 'BOOONGO', 'slots', 'https://cdn46952.bngsrv.com/games/banner_189_en.jpg?ts=1592834985255', ''),
(3455, 'buddha_fortune', 'BUDDHA FORTUNE', 'BOOONGO', 'slots', 'https://cdn46952.bngsrv.com/games/banner_190_en.jpg?ts=1594723112381', ''),
(3456, 'great_panda', 'GREAT PANDA', 'BOOONGO', 'slots', 'https://cdn46952.bngsrv.com/games/banner_181_en.jpg?ts=1583843045334', ''),
(3457, '15_golden_eggs', '15 GOLDEN EGGS', 'BOOONGO', 'slots', 'https://cdn46952.bngsrv.com/static/games/banner_14_en.png', ''),
(3458, 'thunder_of_olympus', 'THUNDER OF OLYMPUS', 'BOOONGO', 'slots', 'https://cdn46952.bngsrv.com/games/banner_200_en.jpe?ts=1599463031466', ''),
(3459, 'eye_of_gold', 'EYE OF GOLD', 'BOOONGO', 'slots', 'https://cdn46952.bngsrv.com/games/banner_204_en.jpg?ts=1607423095999', ''),
(3460, 'tiger_stone', 'TIGER STONE', 'BOOONGO', 'slots', 'https://cdn46952.bngsrv.com/games/banner_209_en.jpg?ts=1604945706164', ''),
(3461, 'magic_apple', 'MAGIC APPLE', 'BOOONGO', 'slots', 'https://cdn46952.bngsrv.com/games/banner_219_en.jpg?ts=1615278797585', ''),
(3462, 'wolf_saga', 'WOLF SAGA', 'BOOONGO', 'slots', 'https://cdn46952.bngsrv.com/games/banner_216_en.png?ts=1612371564816', ''),
(3463, 'magic_ball', 'MAGIC BALL', 'BOOONGO', 'slots', 'https://cdn46952.bngsrv.com/games/banner_223_en.jpg?ts=1618214765589', ''),
(3464, 'scarab_boost', 'SCARAB BOOST', 'BOOONGO', 'slots', 'https://cdn46952.bngsrv.com/games/banner_231_en.jpg?ts=1623137017503', ''),
(3465, 'wukong', 'WUKONG', 'BOOONGO', 'slots', 'https://cdn46952.bngsrv.com/games/banner_233_en.jpg?ts=1624348278790', ''),
(3466, 'pearl_diver', 'PEARL DIVER', 'BOOONGO', 'slots', 'https://cdn46952.bngsrv.com/games/banner_232_en.jpg?ts=1624952929307', ''),
(3467, '3_coins_egypt', '3 COINS EGYPT', 'BOOONGO', 'slots', 'https://cdn46952.bngsrv.com/games/banner_236_en.jpg?ts=1626173501198', ''),
(3468, 'ganesha_boost', 'GANESHA BOOST', 'BOOONGO', 'slots', 'https://cdn46952.bngsrv.com/games/banner_240_en.jpg?ts=1629708978121', ''),
(3469, 'wolf_night', 'WOLF NIGHT', 'BOOONGO', 'slots', 'https://cdn46952.bngsrv.com/games/banner_237_en.jpg?ts=1628583185745', ''),
(3470, 'book_of_wizard', 'BOOK OF WIZARD', 'BOOONGO', 'slots', 'https://cdn46952.bngsrv.com/games/banner_244_en.jpg?ts=1632823480279', ''),
(3471, 'lord_fortune_2', 'LORD FORTUNE 2', 'BOOONGO', 'slots', 'https://cdn46952.bngsrv.com/games/banner_245_en.jpg?ts=1633430937520', ''),
(3472, 'gold_express', 'GOLD EXPRESS', 'BOOONGO', 'slots', 'https://cdn46952.bngsrv.com/games/banner_249_en.jpg?ts=1634629019700', ''),
(3473, 'book_of_wizard_crystal', 'BOOK OF WIZARD CRYSTAL', 'BOOONGO', 'slots', 'https://cdn46952.bngsrv.com/games/banner_255_en.jpg?ts=1641895746148', ''),
(3474, 'pearl_diver_2', 'PEARL DIVER 2', 'BOOONGO', 'slots', 'https://cdn46952.bngsrv.com/games/banner_259_en.jpg?ts=1645521353434', ''),
(3475, 'sun_of_egypt_3', 'SUN OF EGYPT 3', 'BOOONGO', 'slots', 'https://cdn46952.bngsrv.com/games/banner_262_en.jpg?ts=1646655112312', ''),
(3476, 'caishen_wealth', 'CAISHEN WEALTH', 'BOOONGO', 'slots', 'https://cdn46952.bngsrv.com/games/banner_265_en.jpg?ts=1649711719448', ''),
(3477, 'aztec_fire', 'AZTEC FIRE', 'BOOONGO', 'slots', 'https://cdn46952.bngsrv.com/games/banner_272_en.jpg?ts=1658177726858', ''),
(3478, 'hand_of_gold', 'HAND OF GOLD', 'PLAYSON', 'slots', 'https://cdn46952.bngsrv.com/games/banner_220_en.png?ts=1618995876889', ''),
(3479, 'legend_of_cleopatra', 'LEGEND OF CLEOPATRA', 'PLAYSON', 'slots', 'https://cdn46952.bngsrv.com/static/games/banner_69_en.jpg', ''),
(3480, '40_joker_staxx', '40 JOKER STAXX', 'PLAYSON', 'slots', 'https://cdn46952.bngsrv.com/games/banner_96_en.png?ts=1616657514396', ''),
(3481, 'burning_wins', 'BURNING WINS', 'PLAYSON', 'slots', 'https://cdn46952.bngsrv.com/games/banner_102_en.png?ts=1575280724870', ''),
(3482, 'book_of_gold', 'BOOK OF GOLD', 'PLAYSON', 'slots', 'https://cdn46952.bngsrv.com/games/banner_133_en.png?ts=1575280724870', ''),
(3483, '100_joker_staxx', '100 JOKER STAXX', 'PLAYSON', 'slots', 'https://cdn46952.bngsrv.com/games/banner_144_en.png?ts=1575280724870', ''),
(3484, 'book_of_gold_classic', 'BOOK OF GOLD CLASSIC', 'PLAYSON', 'slots', 'https://cdn46952.bngsrv.com/games/banner_159_en.png?ts=1575280724870', ''),
(3485, 'book_of_gold_multichance', 'BOOK OF GOLD MULTICHANCE', 'PLAYSON', 'slots', 'https://cdn46952.bngsrv.com/games/banner_199_en.png?ts=1575280724870', ''),
(3486, 'buffalo_xmas', 'BUFFALO XMAS', 'PLAYSON', 'slots', 'https://cdn46952.bngsrv.com/games/banner_248_en.png?ts=1575280724870', ''),
(3487, '67', 'Golden eggs', 'CQ9', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/cq/en/67_EN.png', ''),
(3488, '161', 'Hercules', 'CQ9', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/cq/en/161_EN.png', ''),
(3489, '16', 'Super 5', 'CQ9', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/cq/en/16_EN.png', ''),
(3490, '72', 'Happy Rich Year', 'CQ9', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/cq/en/72_EN.png', ''),
(3491, '1', 'Fruit King', 'CQ9', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/cq/en/1_EN.png', ''),
(3492, '163', 'Neja Advent', 'CQ9', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/cq/en/163_EN.png', ''),
(3493, '26', '777', 'CQ9', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/cq/en/26_EN.png', ''),
(3494, '50', 'Good fortune', 'CQ9', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/cq/en/50_EN.png', ''),
(3495, '31', 'God of war', 'CQ9', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/cq/en/31_EN.png', ''),
(3496, '64', 'Zeus', 'CQ9', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/cq/en/64_EN.png', ''),
(3497, '69', 'Pasaycen', 'CQ9', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/cq/en/69_EN.png', ''),
(3498, '89', 'Thor', 'CQ9', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/cq/en/89_EN.png', ''),
(3499, '46', 'Wolf moon', 'CQ9', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/cq/en/46_EN.png', ''),
(3500, '139', 'Fire chibi', 'CQ9', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/cq/en/139_EN.png', ''),
(3501, '15', 'Gu Gu Gu', 'CQ9', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/cq/en/15_EN.png', ''),
(3502, '140', 'Fire Chibi 2', 'CQ9', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/cq/en/140_EN.png', ''),
(3503, '8', 'So Sweet', 'CQ9', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/cq/en/8_EN.png', ''),
(3504, '147', 'Flower fortune', 'CQ9', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/cq/en/147_EN.png', ''),
(3505, '113', 'Flying Kai Shen', 'CQ9', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/cq/en/113_EN.png', ''),
(3506, '58', 'Gu Gu Gu 2', 'CQ9', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/cq/en/58_EN.png', ''),
(3507, '128', 'Wheel money', 'CQ9', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/cq/en/128_EN.png', ''),
(3508, '5', 'Mr Rich', 'CQ9', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/cq/en/5_EN.png', ''),
(3509, '180', 'Gu Gu Gu 3', 'CQ9', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/cq/en/9835.png', ''),
(3510, '118', 'SkullSkull', 'CQ9', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/cq/en/118_EN.png', ''),
(3511, '148', 'Fortune totem', 'CQ9', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/cq/en/148_EN.png', ''),
(3512, '144', 'Diamond treasure', 'CQ9', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/cq/en/144_EN.png', ''),
(3513, '19', 'Hot spin', 'CQ9', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/cq/en/19_EN.png', ''),
(3514, '112', 'Pyramid radar', 'CQ9', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/cq/en/112_EN.png', ''),
(3515, '160', 'Pa Kai Shen2', 'CQ9', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/cq/en/160_EN.png', ''),
(3516, '132', 'Miou', 'CQ9', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/cq/en/132_EN.png', ''),
(3517, '47', 'Pharaoh gold', 'CQ9', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/cq/en/47_EN.png', ''),
(3518, '13', 'Sakura legend', 'CQ9', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/cq/en/13_EN.png', ''),
(3519, '59', 'Summer mood', 'CQ9', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/cq/en/59_EN.png', ''),
(3520, '76', 'Won won won', 'CQ9', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/cq/en/76_EN.png', ''),
(3521, '95', 'Football boots', 'CQ9', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/cq/en/95_EN.png', ''),
(3522, '57', 'The Beast War', 'CQ9', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/cq/en/57_EN.png', ''),
(3523, '17', 'Great lion', 'CQ9', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/cq/en/17_EN.png', ''),
(3524, '20', '888', 'CQ9', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/cq/en/20_EN.png', ''),
(3525, '182', 'Thor 2', 'CQ9', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/cq/en/10044.png', ''),
(3526, '66', 'Fire 777', 'CQ9', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/cq/en/66_EN.png', ''),
(3527, '2', 'God of Chess', 'CQ9', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/cq/en/2_EN.png', ''),
(3528, '21', 'Big wolf', 'CQ9', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/cq/en/21_EN.png', ''),
(3529, '208', 'Money tree', 'CQ9', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/cq/en/11593.png', ''),
(3530, '212', 'Burning Si-Yow', 'CQ9', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/cq/en/11805.png', ''),
(3531, '214', 'Ninja raccoon', 'CQ9', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/cq/en/11806.png', ''),
(3532, '218', 'Dollar night', 'CQ9', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/cq/en/12141.png', ''),
(3533, 'greatwall', 'The Great Wall Treasure', 'EVOPLAY', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/evoplay/The_Great_Wall_Treasures_Thumbnail_360x360.png', ''),
(3534, 'chinesenewyear', 'Chinese New Year', 'EVOPLAY', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/evoplay/Chinese_New_Year_Thumbnail_360x360.png', ''),
(3535, 'jewellerystore', 'Jewelry store', 'EVOPLAY', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/evoplay/Jewellery_Store_Thumbnail_360x360.png', ''),
(3536, 'redcliff', 'Red cliff', 'EVOPLAY', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/evoplay/Red_Cliff_360x340.png', ''),
(3537, 'ElvenPrincesses', 'Elven Princess', 'EVOPLAY', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/evoplay/Elven_Princesses_Thumbnail_360x360.png', ''),
(3538, 'robinzon', 'Robinson', 'EVOPLAY', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/evoplay/Robinson_Thumbnail_360x360.png', ''),
(3539, 'aeronauts', 'Aeronauts', 'EVOPLAY', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/evoplay/Aeronauts_Thumbnail_360x360.png', ''),
(3540, 'monsterlab', 'Monster rap', 'EVOPLAY', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/evoplay/Monste_-Lab_Thumbnail_360x360.png', ''),
(3541, 'TriptotheFuture', 'Trip to the Future', 'EVOPLAY', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/evoplay/Trip to the future 360x360 ENG.jpg', ''),
(3542, 'NukeWorld', 'Nook World', 'EVOPLAY', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/evoplay/9102.jpg', ''),
(3543, 'legendofkaan', 'Legend of Khan', 'EVOPLAY', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/evoplay/10033.png', ''),
(3544, 'LivingTales', 'Night of the Living Tales', 'EVOPLAY', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/evoplay/11292.jpg', ''),
(3545, 'IceMania', 'Ice mania', 'EVOPLAY', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/evoplay/11384.jpg', ''),
(3546, 'ValleyOfDreams', 'Valley of Dreams', 'EVOPLAY', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/evoplay/11427.png', ''),
(3547, 'FruitNova', 'Fruit Nova', 'EVOPLAY', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/evoplay/11428.jpg', ''),
(3548, 'TreeOfLight', 'Tree of light', 'EVOPLAY', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/evoplay/11503.png', ''),
(3549, 'TempleOfDead', 'Temple of the dead', 'EVOPLAY', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/evoplay/11604.png', ''),
(3550, 'RunesOfDestiny', 'Runes of Destiny', 'EVOPLAY', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/evoplay/11728.png', ''),
(3551, 'EllensFortune', 'Ellen Fortune', 'EVOPLAY', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/evoplay/11729.jpg', ''),
(3552, 'UnlimitedWishes', 'Unlimited Wishes', 'EVOPLAY', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/evoplay/11807.jpg', ''),
(3553, 'FoodFeast', 'Food fist', 'EVOPLAY', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/evoplay/11808.jpg', ''),
(3554, 'EpicLegends', 'Epic legends', 'EVOPLAY', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/evoplay/11810.jpg', ''),
(3555, 'SweetSugar', 'Sweet sugar', 'EVOPLAY', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/evoplay/11811.png', ''),
(3556, 'CycleofLuck', 'Cycle of Luck', 'EVOPLAY', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/evoplay/12054.jpg', ''),
(3557, 'GangsterNight', 'Gangster night', 'EVOPLAY', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/evoplay/12057.jpg', ''),
(3558, 'GoldOfSirens', 'Gold of sirens', 'EVOPLAY', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/evoplay/12058.jpg', ''),
(3559, 'BloodyBrilliant', 'Bloody brilliant', 'EVOPLAY', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/evoplay/12059.jpg', ''),
(3560, 'TempleOfDeadBonusBuy', 'Temple of the Dead BB', 'EVOPLAY', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/evoplay/12133.jpg', ''),
(3561, 'ShadowOfLuxor', 'Shadow of Luxor', 'EVOPLAY', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/evoplay/12134.jpg', ''),
(3562, 'CycleofLuckBonusBuy', 'Cycle of Luck BB', 'EVOPLAY', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/evoplay/12170.jpg', ''),
(3563, 'AnubisMoon', 'Anubis moon', 'EVOPLAY', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/evoplay/12171.jpg', ''),
(3564, 'FruitDisco', 'Fruit disco', 'EVOPLAY', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/evoplay/12172.jpg', ''),
(3565, 'FruitSuperNova30', 'Fruit Super Nova 30', 'EVOPLAY', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/evoplay/12173.jpg', ''),
(3566, 'CurseOfThePharaoh', 'Curse of the Pharaoh', 'EVOPLAY', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/evoplay/12174.jpg', ''),
(3567, 'GoldOfSirensBonusBuy', 'Gold of Sirens BB', 'EVOPLAY', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/evoplay/12226.jpg', ''),
(3568, 'FruitSuperNova60', 'Fruit Super Nova 60', 'EVOPLAY', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/evoplay/12227.jpg', ''),
(3569, 'CurseofthePharaohBonusBuy', 'Curse of the Pharaoh BB', 'EVOPLAY', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/evoplay/12228.jpg', ''),
(3570, 'FruitSuperNova100', 'Fruit Super Nova 100', 'EVOPLAY', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/evoplay/12256.jpg', ''),
(3571, 'ChristmasReach', 'Christmas lychee', 'EVOPLAY', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/evoplay/12269.jpg', ''),
(3572, 'FruitSuperNova80', 'Whoft Super Nova 80', 'EVOPLAY', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/evoplay/12326.jpg', ''),
(3573, 'ChristmasReachBonusBuy', 'Christmas Riti BB', 'EVOPLAY', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/evoplay/12329.jpg', ''),
(3574, 'WildOverlords', 'Wild overlord', 'EVOPLAY', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/evoplay/12329.jpg', ''),
(3575, 'BudaiReels', 'Budai reels', 'EVOPLAY', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/evoplay/12381.jpg', ''),
(3576, 'MoneyMinter', 'Money minter', 'EVOPLAY', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/evoplay/12575_.jpeg', ''),
(3577, 'JuicyGems', 'Watch gem', 'EVOPLAY', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/evoplay/12895.jpg', ''),
(3578, 'JuicyGemsBB', 'Watch Gem BB', 'EVOPLAY', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/evoplay/12896.jpg', ''),
(3579, 'TheGreatestCatch', 'The Greatest Catch', 'EVOPLAY', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/evoplay/12892.jpg', ''),
(3580, 'TheGreatestCatchBonusBuy', 'The Greatest Catch BB', 'EVOPLAY', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/evoplay/12893.jpg', ''),
(3581, 'TreeOfLightBB', 'Tree of Light BB', 'EVOPLAY', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/evoplay/12899.jpg', ''),
(3582, 'WolfHiding', 'Wolf Hiding', 'EVOPLAY', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/evoplay/12953.jpg', ''),
(3583, 'CaminoDeChili', 'Camino de Chili', 'EVOPLAY', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/evoplay/12902.jpg', ''),
(3584, 'CandyDreamsSweetPlanet', 'candy dreams', 'EVOPLAY', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/evoplay/12902.jpg', ''),
(3585, 'WildOverlordsBonusBuy', 'Wild Overlord BB', 'EVOPLAY', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/evoplay/12890.jpg', ''),
(3586, 'TempleOfThunder', 'Temple of Thunder', 'EVOPLAY', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/evoplay/12891.jpg', ''),
(3587, 'WildTriads', 'WildTriads', 'TOPTREND', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/ttg/WildTriads.png', ''),
(3588, 'GoldenDragon', 'Golden Dragon', 'TOPTREND', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/ttg/GoldenDragon.png', ''),
(3589, 'ReelsOfFortune', 'Reels Of Fortune', 'TOPTREND', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/ttg/ReelsOfFortune.png', ''),
(3590, 'GoldenAmazon', 'Golden Amazon', 'TOPTREND', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/ttg/GoldenAmazon.png', ''),
(3591, 'MonkeyLuck', 'MonkeyLuck', 'TOPTREND', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/ttg/MonkeyLuck.png', ''),
(3592, 'LeagueOfChampions', 'League Of Champions', 'TOPTREND', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/ttg/LeagueOfChampions.png', ''),
(3593, 'MadMonkeyH5', 'MadMonkey', 'TOPTREND', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/ttg/MadMonkeyH5.png', ''),
(3594, 'DynastyEmpire', 'Dynasty Empire', 'TOPTREND', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/ttg/DynastyEmpire.png', ''),
(3595, 'SuperKids', 'SuperKids', 'TOPTREND', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/ttg/SuperKids.png', ''),
(3596, 'HotVolcanoH5', 'HotVolcano', 'TOPTREND', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/ttg/HotVolcano.png', ''),
(3597, 'Huluwa', 'Huluwa', 'TOPTREND', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/ttg/Huluwa.png', ''),
(3598, 'LegendOfLinkH5', 'LegendOfLink', 'TOPTREND', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/ttg/LegendOfLinkH5.png', ''),
(3599, 'DetectiveBlackCat', 'DetectiveBlackCat', 'TOPTREND', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/ttg/DetectiveBlackcat.png', ''),
(3600, 'ChilliGoldH5', 'Chilli Gold', 'TOPTREND', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/ttg/ChiliGoldH5.png', ''),
(3601, 'SilverLionH5', 'Silver Lion', 'TOPTREND', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/ttg/SilverLionH5.png', ''),
(3602, 'ThunderingZeus', 'ThunderingZeus', 'TOPTREND', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/ttg/ThunderingZeus.png', ''),
(3603, 'DragonPalaceH5', 'Dragon Palace', 'TOPTREND', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/ttg/11658.png', ''),
(3604, 'MadMonkey2', 'MadMonkey', 'TOPTREND', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/ttg/11660.png', ''),
(3605, 'MedusaCurse', 'Medusa Curse', 'TOPTREND', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/ttg/11661.png', ''),
(3606, 'BattleHeroes', 'Battle Heroes', 'TOPTREND', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/ttg/11662.png', ''),
(3607, 'NeptunesGoldH5', 'Neptunes Gold', 'TOPTREND', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/ttg/11664.png', ''),
(3608, 'HeroesNeverDie', 'Heroes Never Die', 'TOPTREND', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/ttg/11665.png', ''),
(3609, 'WildWildWitch', 'Wild Wild Witch', 'TOPTREND', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/ttg/11666.png', ''),
(3610, 'WildKartRacers', 'Wild Kart Racers', 'TOPTREND', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/ttg/11667.png', ''),
(3611, 'KingDinosaur', 'KingDinosaur', 'TOPTREND', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/ttg/11668.png', ''),
(3612, 'GoldenGenie', 'GoldenGenie', 'TOPTREND', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/ttg/11669.png', ''),
(3613, 'UltimateFighter', 'UltimateFighter', 'TOPTREND', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/ttg/11672.png', ''),
(3614, 'EverlastingSpins', 'EverlastingSpins', 'TOPTREND', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/ttg/11673.png', ''),
(3615, 'Zoomania', 'Zoomania', 'TOPTREND', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/ttg/11676.png', ''),
(3616, 'LaserCats', 'Laser Cats', 'TOPTREND', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/ttg/11679.png', ''),
(3617, 'DiamondFortune', 'DiamondFortune', 'TOPTREND', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/ttg/11682.png', ''),
(3618, 'GoldenClaw', 'GoldenClaw', 'TOPTREND', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/ttg/11685.png', ''),
(3619, 'PandaWarrior', 'PandaWarrior', 'TOPTREND', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/ttg/11687.png', ''),
(3620, 'RoyalGoldenDragon', 'RoyalGoldenDragon', 'TOPTREND', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/ttg/11690.png', ''),
(3621, 'MegaMaya', 'MegaMaya', 'TOPTREND', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/ttg/11697.png', ''),
(3622, 'MegaPhoenix', 'MegaPhoenix', 'TOPTREND', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/ttg/11864.png', ''),
(3623, 'DolphinGoldH5', 'DolphinGold', 'TOPTREND', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/ttg/DolphinGoldH5.png', ''),
(3624, 'DragonKingH5', 'DragonKing', 'TOPTREND', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/ttg/DragonKingH5.png', ''),
(3625, 'LuckyPandaH5', 'LuckyPanda', 'TOPTREND', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/ttg/LuckyPanda.png', ''),
(3626, 'btball5x20', 'Crazy Basketball', 'DREAMTECH', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/dtech/021.Crazy Basketball.png', ''),
(3627, 'dnp', 'DragonPhoenix Prosper', 'DREAMTECH', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/dtech/022.DragonPhoenix Prosper.png', ''),
(3628, 'crystal', 'Glory of Heroes', 'DREAMTECH', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/dtech/023.Glory of Heroes.png', ''),
(3629, 'fls', 'FULUSHOU', 'DREAMTECH', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/dtech/025.FULUSHOU.png', ''),
(3630, 'fourss', 'Four Holy Beasts', 'DREAMTECH', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/dtech/026.Four Holy Beasts.png', ''),
(3631, 'casino', '3D Slot', 'DREAMTECH', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/dtech/028.3D Slot.png', ''),
(3632, 'crazy5x243', 'Crazy GO GO GO', 'DREAMTECH', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/dtech/029.Crazy GO GO GO.png', ''),
(3633, 'rocknight', 'RocknRoll Night', 'DREAMTECH', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/dtech/031.RocknRoll Night.png', ''),
(3634, 'bluesea', 'Blue Sea', 'DREAMTECH', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/dtech/032.Blue Sea.png', ''),
(3635, 'circus', 'Crazy Circus', 'DREAMTECH', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/dtech/034.Crazy Circus.png', ''),
(3636, 'bikini', 'Bikini Party', 'DREAMTECH', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/dtech/037.Bikini Party.png', ''),
(3637, 'foryouth5x25', 'SO YOUNG', 'DREAMTECH', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/dtech/045.SO YOUNG.png', ''),
(3638, 'fourbeauty', 'Four Beauties', 'DREAMTECH', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/dtech/046.Four Beauties.png', ''),
(3639, 'sweethouse', 'Candy House', 'DREAMTECH', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/dtech/047.Candy House.png', ''),
(3640, 'legend5x25', 'Legend of the King', 'DREAMTECH', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/dtech/048.Legend of the King.png', ''),
(3641, 'opera', 'Beijing opera', 'DREAMTECH', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/dtech/051.Beijing opera.jpeg', ''),
(3642, 'bigred', 'Big Red', 'DREAMTECH', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/dtech/055.Big Red.jpeg', ''),
(3643, 'wrathofthor', 'Wrath of Thor', 'DREAMTECH', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/dtech/056.Wrath of Thor.png', ''),
(3644, 'boxingarena', 'Boxing Arena', 'DREAMTECH', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/dtech/059.Boxing Arena.jpeg', ''),
(3645, 'fantasyforest', 'Elf Kingdom', 'DREAMTECH', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/dtech/061.Elf Kingdom.png', ''),
(3646, 'egyptian', 'Egyptian Empire', 'DREAMTECH', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/dtech/063.Egyptian Empire.png', ''),
(3647, 'hotpotfeast', 'Hotpot Feast', 'DREAMTECH', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/dtech/064.Hotpot Feast.png', ''),
(3648, 'magician', 'Magician', 'DREAMTECH', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/dtech/065.Magician.png', ''),
(3649, 'galaxywars', 'Galaxy Wars', 'DREAMTECH', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/dtech/068.Galaxy Wars.png', ''),
(3650, 'easyrider', 'Easy Rider', 'DREAMTECH', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/dtech/069.Easy Rider.png', ''),
(3651, 'goldjade5x50', 'Jin Yu Man Tang', 'DREAMTECH', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/dtech/072.Jin Yu Man Tang.png', ''),
(3652, 'shokudo', 'shokudo', 'DREAMTECH', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/dtech/073.shokudo.jpeg', ''),
(3653, 'train', 'Treasure Hunt Trip', 'DREAMTECH', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/dtech/074.Treasure Hunt Trip.png', ''),
(3654, 'lovefighters', 'Love Fighters', 'DREAMTECH', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/dtech/077.Love Fighters.png', ''),
(3655, 'garden', 'Little Big Garden', 'DREAMTECH', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/dtech/079.Little Big Garden.png', ''),
(3656, 'alchemist', 'Crazy Alchemist', 'DREAMTECH', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/dtech/084.Crazy Alchemist.png', ''),
(3657, 'dinosaur5x25', 'Dinosaur World', 'DREAMTECH', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/dtech/089.Dinosaur World.png', ''),
(3658, 'tombshadow', 'Tomb Shadow', 'DREAMTECH', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/dtech/086.Tomb Shadow.png', ''),
(3659, 'clash', 'Clash of Three kingdoms', 'DREAMTECH', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/dtech/088.Clash of Three kingdoms.png', ''),
(3660, 'magicbean', 'Magic Bean Legend', 'DREAMTECH', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/dtech/097.Magic Bean Legend.png', ''),
(3661, 'secretdate', 'Secret Date', 'DREAMTECH', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/dtech/104.Secret Date.png', ''),
(3662, 'bacteria', 'Germ Lab', 'DREAMTECH', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/dtech/106.GermLab.png', ''),
(3663, 'baseball', 'Baseball Frenzy', 'DREAMTECH', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/dtech/108.BaseballFrenzy.png', ''),
(3664, 'museum', 'Wondrous Museum', 'DREAMTECH', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/dtech/110.WondrousMuseum.png', ''),
(3665, 'mysticalstones', 'Mystical Stones', 'DREAMTECH', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/dtech/111.MysticalStones.png', ''),
(3666, 'sincity', 'Sin City', 'DREAMTECH', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/dtech/113.SinCity.png', ''),
(3667, 'wheel', 'Secrets of The Pentagram', 'DREAMTECH', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/dtech/114.Secretsofthe pentagram.png', ''),
(3668, 'westwild', 'West Wild', 'DREAMTECH', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/dtech/116.WestWild.png', ''),
(3669, 'halloween', 'Witch Winnings', 'DREAMTECH', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/dtech/115.WitchWinnings.png', ''),
(3670, 'bloodmoon', 'Blood Wolf legend', 'DREAMTECH', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/dtech/118.BloodWolf.png', ''),
(3671, 'dragonball2', 'Heroes of the East', 'DREAMTECH', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/dtech/121.HeroesofTheEast.png', ''),
(3672, 'muaythai', 'Muaythai', 'DREAMTECH', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/dtech/_9659.png', ''),
(3673, 'sailor', 'Sailor Princess', 'DREAMTECH', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/dtech/_9660.png', ''),
(3674, 'nightclub', 'Infinity Club', 'DREAMTECH', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/dtech/_9661.png', ''),
(3675, 'nezha', 'Nezha Legend', 'DREAMTECH', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/dtech/_9662.png', ''),
(3676, 'bird', 'Bird Island', 'DREAMTECH', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/dtech/10900.png', ''),
(3677, 'honor', 'Field Of Honor', 'DREAMTECH', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/dtech/10902.png', ''),
(3678, 'train2', 'Treasure Hunt Trip 2', 'DREAMTECH', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/dtech/10904.png', ''),
(3679, 'shiningstars', 'ShiningStars', 'DREAMTECH', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/dtech/11268.png', ''),
(3680, 'tgow2plus', 'Cai Shen Dao Plus', 'DREAMTECH', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/dtech/11555.png', ''),
(3681, 'peeping', 'Peeping', 'DREAMTECH', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/dtech/11556.png', ''),
(3682, 'piggy-gold', 'Piggy Gold', 'PGSOFT', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/pgsoft/11334.png', ''),
(3683, 'ganesha-gold', 'Ganesha Gold', 'PGSOFT', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/pgsoft/11337.png', ''),
(3684, 'jungle-delight', 'Jungle Delight', 'PGSOFT', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/pgsoft/11339.png', ''),
(3685, 'double-fortune', 'Double Fortune', 'PGSOFT', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/pgsoft/11341.png', ''),
(3686, 'the-great-icescape', 'The Great Icescape', 'PGSOFT', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/pgsoft/11343.png', ''),
(3687, 'leprechaun-riches', 'Leprechaun Riches', 'PGSOFT', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/pgsoft/11347.png', ''),
(3688, 'mahjong-ways', 'Mahjong Ways', 'PGSOFT', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/pgsoft/11352.png', ''),
(3689, 'fortune-mouse', 'Fortune Mouse', 'PGSOFT', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/pgsoft/11354.png', ''),
(3690, 'gem-saviour-conquest', 'Gem Saviour Conquest', 'PGSOFT', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/pgsoft/11356.png', ''),
(3691, 'candy-burst', 'Candy Burst', 'PGSOFT', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/pgsoft/11359.png', ''),
(3692, 'bikini-paradise', 'Bikini Paradise', 'PGSOFT', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/pgsoft/11360.png', ''),
(3693, 'mahjong-ways2', 'Mahjong Ways 2', 'PGSOFT', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/pgsoft/11361.png', ''),
(3694, 'ganesha-fortune', 'Ganesha Fortune', 'PGSOFT', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/pgsoft/11363.png', ''),
(3695, 'phoenix-rises', 'Phoenix Rises', 'PGSOFT', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/pgsoft/11365.png', ''),
(3696, 'wild-fireworks', 'Wild Fireworks', 'PGSOFT', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/pgsoft/11369.png', ''),
(3697, 'treasures-aztec', 'Treasures of Aztec', 'PGSOFT', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/pgsoft/11372.png', ''),
(3698, 'queen-bounty', 'Queen of Bounty', 'PGSOFT', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/pgsoft/11610.jpg', ''),
(3699, 'jewels-prosper', 'Jewels of Prosperity', 'PGSOFT', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/pgsoft/11611.jpg', ''),
(3700, 'galactic-gems', 'Galactic Gems', 'PGSOFT', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/pgsoft/11614.png', ''),
(3701, 'gdn-ice-fire', 'Guardians of Ice and Fire', 'PGSOFT', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/pgsoft/11615.png', ''),
(3702, 'fortune-ox', 'Fortune Ox', 'PGSOFT', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/pgsoft/11617.png', ''),
(3703, 'wild-bandito', 'Wild Bandito', 'PGSOFT', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/pgsoft/11855.jpg', ''),
(3704, 'candy-bonanza', 'Candy Bonanza', 'PGSOFT', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/pgsoft/11854.jpg', ''),
(3705, 'majestic-ts', 'Majestic Treasures', 'PGSOFT', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/pgsoft/11853.jpg', ''),
(3706, 'sprmkt-spree', 'Supermarket Spree', 'PGSOFT', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/pgsoft/12207.png', ''),
(3707, 'lgd-monkey-kg', 'Legendary Monkey King', 'PGSOFT', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/pgsoft/12209.png', ''),
(3708, 'spirit-wonder', 'Spirited Wonders', 'PGSOFT', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/pgsoft/12306.jpg', ''),
(3709, 'emoji-riches', 'Emoji Riches', 'PGSOFT', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/pgsoft/12308.png', ''),
(3710, 'fortune-tiger', 'Fortune Tiger', 'PGSOFT', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/pgsoft/12503.jpg', ''),
(3711, 'garuda-gems', 'Garuda Gems', 'PGSOFT', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/pgsoft/12504.png', ''),
(3712, 'dest-sun-moon', 'Destiny of Sun & Moon', 'PGSOFT', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/pgsoft/12505.png', ''),
(3713, 'btrfly-blossom', 'Butterfly Blossom', 'PGSOFT', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/pgsoft/12569.jpeg', ''),
(3714, 'rooster-rbl', 'Rooster Rumble', 'PGSOFT', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/pgsoft/12594.jpg', ''),
(3715, 'battleground', 'Battleground Royale', 'PGSOFT', 'slots', 'https://resource.fdsigaming.com/thumbnail/slot/pgsoft/12633.jpg', ''),
(3716, 'prosper-ftree', 'Prosperity Fortune Tree', 'PGSOFT', 'slots', 'https://vedaimg.enjoycx.com/img/game/pg soft/1312883.png', ''),
(3717, 'fortune-rabbit', 'Fortune Rabbit', 'PGSOFT', 'slots', 'https://assets.bet4wins.net/img/pgsoft/fortune-rabbit/banner.jpg', ''),
(3718, 'vs5ultrab', 'Ultra Burn', 'REELKINGDOM', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs5ultrab.png', ''),
(3719, 'vs5ultra', 'Ultra Hold and Spin', 'REELKINGDOM', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs5ultra.png', ''),
(3720, 'vs10returndead', 'Return of the Dead', 'REELKINGDOM', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs10returndead.png', ''),
(3721, 'vs10bbbonanza', 'Big Bass Bonanza', 'REELKINGDOM', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs10bbbonanza.png', ''),
(3722, 'vs20hburnhs', 'Hot to Burn Hold and Spin', 'REELKINGDOM', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs20hburnhs.png', ''),
(3723, 'vswayslight', 'Lucky Lightning', 'REELKINGDOM', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vswayslight.png', ''),
(3724, 'vs12bbb', 'Bigger Bass Bonanza', 'REELKINGDOM', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs12bbb.png', ''),
(3725, 'vs10floatdrg', 'Floating Dragon', 'REELKINGDOM', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs10floatdrg.png', ''),
(3726, 'vs1024temuj', 'Temujin Treasures', 'REELKINGDOM', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs1024temuj.png', ''),
(3727, 'vs10bxmasbnza', 'Christmas Big Bass Bonanza', 'REELKINGDOM', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs10bxmasbnza.png', ''),
(3728, 'vswaysbbb', 'Big Bass Bonanza Megaways       ', 'REELKINGDOM', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vswaysbbb.png', ''),
(3729, 'vs40bigjuan', 'Big Juan', 'REELKINGDOM', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs40bigjuan.png', ''),
(3730, 'vs10starpirate', 'Star Pirates Code', 'REELKINGDOM', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs10starpirate.png', ''),
(3731, 'vs5hotburn', 'Hot to burn', 'REELKINGDOM', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs5hotburn.png', ''),
(3732, 'vs25bkofkngdm', 'Book of Kingdoms', 'REELKINGDOM', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs25bkofkngdm.png', ''),
(3733, 'vs10eyestorm', 'Eye of the Storm', 'REELKINGDOM', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs10eyestorm.png', ''),
(3734, 'vs10amm', 'The Amazing Money Machine', 'REELKINGDOM', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs10amm.png', '');
INSERT INTO `tb_gamenew` (`cuid`, `game_code`, `game_name`, `game_provider`, `game_category`, `game_image`, `game_url`) VALUES
(3735, 'vs10luckcharm', 'Lucky Grace And Charm', 'REELKINGDOM', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs10luckcharm.png', ''),
(3736, 'vs25goldparty', 'Gold Party    ', 'REELKINGDOM', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs25goldparty.png', ''),
(3737, 'vs20rockvegas', 'Rock Vegas Mega Hold & Spin', 'REELKINGDOM', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs20rockvegas.png', ''),
(3738, 'vs10tictac', 'Tic Tac Take', 'REELKINGDOM', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs10tictac.png', ''),
(3739, 'vs243queenie', 'Queenie', 'REELKINGDOM', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs243queenie.png', ''),
(3740, 'vs10spiritadv', 'Spirit of Adventure', 'REELKINGDOM', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs10spiritadv.png', ''),
(3741, 'vs5littlegem', 'Little Gem Hold and Spin', 'REELKINGDOM', 'slots', 'https://solawins-sg0.pragmaticplay.net/game_pic/rec/325/vs5littlegem.png', ''),
(3742, '100', 'Baccarat', 'EZUGI', 'casino', 'https://ezugi.bet4wins.net/assets/banner/BaccaratLobby.webp', ''),
(3743, '102', 'Fortune Baccarat', 'EZUGI', 'casino', 'https://ezugi.bet4wins.net/assets/banner/SpeedFortuneBaccarat.webp', ''),
(3744, '105', 'Speed Fortune Baccarat', 'EZUGI', 'casino', 'https://ezugi.bet4wins.net/assets/banner/SpeedFortuneBaccarat.webp', ''),
(3745, '106', 'VIP Fortune Baccarat', 'EZUGI', 'casino', 'https://ezugi.bet4wins.net/assets/banner/VIPFortuneBaccarat.webp', ''),
(3746, '107', 'Italian Baccarat', 'EZUGI', 'casino', 'https://ezugi.bet4wins.net/assets/banner/ItalianBaccarat.webp', ''),
(3747, '120', 'Knockout Baccarat', 'EZUGI', 'casino', 'https://ezugi.bet4wins.net/assets/banner/GoldenBaccaratKnockOut.webp', ''),
(3748, '130', 'Super 6 Baccarat', 'EZUGI', 'casino', 'https://ezugi.bet4wins.net/assets/banner/GoldenBaccaratSuperSix.webp', ''),
(3749, '150', 'Dragon Tiger', 'EZUGI', 'casino', 'https://ezugi.bet4wins.net/assets/banner/DragonTiger.webp', ''),
(3750, '170', 'No Commission Baccarat', 'EZUGI', 'casino', 'https://ezugi.bet4wins.net/assets/banner/NoCommissionBaccarat.webp', ''),
(3751, '171', 'VIP No Commission Speed Cricket Baccarat', 'EZUGI', 'casino', 'https://ezugi.bet4wins.net/assets/banner/VIPNoCommissionSpeedCricketBaccarat.webp', ''),
(3752, '1000', 'Italian Roulette', 'EZUGI', 'casino', 'https://ezugi.bet4wins.net/assets/banner/RouletteGold2.webp', ''),
(3753, '5001', 'Auto Roulette', 'EZUGI', 'casino', 'https://ezugi.bet4wins.net/assets/banner/AutomaticRoulette1.webp', ''),
(3754, '32100', 'Casino Marina Baccarat 1', 'EZUGI', 'casino', 'https://ezugi.bet4wins.net/assets/banner/CasinoMarinaBaccarat1.webp', ''),
(3755, '32101', 'Casino Marina Baccarat 2', 'EZUGI', 'casino', 'https://ezugi.bet4wins.net/assets/banner/CasinoMarinaBaccarat2.webp', ''),
(3756, '32102', 'Casino Marina Baccarat 3', 'EZUGI', 'casino', 'https://ezugi.bet4wins.net/assets/banner/CasinoMarinaBaccarat3.webp', ''),
(3757, '32103', 'Casino Marina Baccarat 4', 'EZUGI', 'casino', 'https://ezugi.bet4wins.net/assets/banner/CasinoMarinaBaccarat4.webp', ''),
(3758, '221000', 'Speed Roulette', 'EZUGI', 'casino', 'https://ezugi.bet4wins.net/assets/banner/SpeedRoulette.webp', ''),
(3759, '221002', 'Speed Auto Roulette', 'EZUGI', 'casino', 'https://ezugi.bet4wins.net/assets/banner/SpeedAutoRoulette.webp', ''),
(3760, '221003', 'Diamond Roulette', 'EZUGI', 'casino', 'https://ezugi.bet4wins.net/assets/banner/DiamondRoulette.webp', ''),
(3761, '221004', 'Prestige Auto Roulette', 'EZUGI', 'casino', 'https://ezugi.bet4wins.net/assets/banner/AutomaticRoulette1.webp', ''),
(3762, '221005', 'Namaste Roulette', 'EZUGI', 'casino', 'https://ezugi.bet4wins.net/assets/banner/NamasteRoulette.webp', ''),
(3763, '224100', 'Ultimate Sic Bo', 'EZUGI', 'casino', 'https://ezugi.bet4wins.net/assets/banner/UltimateSicBo.webp', ''),
(3764, '228000', 'Andar Bahar', 'EZUGI', 'casino', 'https://ezugi.bet4wins.net/assets/banner/AndarBahar.webp', ''),
(3765, '228001', 'Lucky 7', 'EZUGI', 'casino', 'https://ezugi.bet4wins.net/assets/banner/Lucky7.webp', ''),
(3766, '228100', 'Ultimate Andar Bahar', 'EZUGI', 'casino', 'https://ezugi.bet4wins.net/assets/banner/UltimateAndarBahar.webp', ''),
(3767, '321000', 'Casino Marina Roulette 1', 'EZUGI', 'casino', 'https://ezugi.bet4wins.net/assets/banner/CasinoMarinaRoulette1.webp', ''),
(3768, '321001', 'Casino Marina Roulette 2', 'EZUGI', 'casino', 'https://ezugi.bet4wins.net/assets/banner/CasinoMarinaRoulette2.webp', ''),
(3769, '411000', 'Spanish Roulette', 'EZUGI', 'casino', 'https://ezugi.bet4wins.net/assets/banner/CumbiaRuleta1.webp', ''),
(3770, '431000', 'Ruleta del Sol', 'EZUGI', 'casino', 'https://ezugi.bet4wins.net/assets/banner/RuletadelSol.webp', ''),
(3771, '481002', 'EZ Dealer Roulette Japanese', 'EZUGI', 'casino', 'https://ezugi.bet4wins.net/assets/banner/EZDealerRouletteJapanese.webp', ''),
(3772, '481003', 'EZ Dealer Roulette Mandarin', 'EZUGI', 'casino', 'https://ezugi.bet4wins.net/assets/banner/EZDealerRouletteMandarin.webp', ''),
(3773, '501000', 'Turkish Roulette', 'EZUGI', 'casino', 'https://ezugi.bet4wins.net/assets/banner/TurkishRoulette.webp', ''),
(3774, '541000', 'Ultimate Roulette', 'EZUGI', 'casino', 'https://ezugi.bet4wins.net/assets/banner/UltimateRoulette.webp', ''),
(3775, '601000', 'Russian Roulette', 'EZUGI', 'casino', 'https://ezugi.bet4wins.net/assets/banner/RouletteGold3.webp', ''),
(3776, '611000', 'Portomaso Roulette 2', 'EZUGI', 'casino', 'https://ezugi.bet4wins.net/assets/banner/PortomasoCasinoRoulette.webp', ''),
(3777, '611001', 'Oracle Real Roulette', 'EZUGI', 'casino', 'https://ezugi.bet4wins.net/assets/banner/OracleCasinoRoulette.webp', ''),
(3778, '611003', 'Oracle 360 Roulette', 'EZUGI', 'casino', 'https://ezugi.bet4wins.net/assets/banner/OracleCasinoRoulette360.webp', ''),
(3779, 'DoubleBallRou001', 'Double Ball Roulette', 'EVOLUTION', 'casino', 'https://evolution.bet4wins.net/assets/banner/double_ball.webp', ''),
(3780, 'AndarBahar000001', 'Super Andar Bahar', 'EVOLUTION', 'casino', 'https://evolution.bet4wins.net/assets/banner/SuperAndarBahar.webp', ''),
(3781, 'BacBo00000000001', 'Bac Bo', 'EVOLUTION', 'casino', 'https://evolution.bet4wins.net/assets/banner/BacBo.webp', ''),
(3782, 'PTBaccarat000001', 'Prosperity Tree Baccarat', 'EVOLUTION', 'casino', 'https://evolution.bet4wins.net/assets/banner/ProsperityTreeBaccarat.webp', ''),
(3783, 'lr6t4k3lcd4qgyrk', 'Grand Casino Roulette', 'EVOLUTION', 'casino', 'https://evolution.bet4wins.net/assets/banner/grand_casino.webp', ''),
(3784, 'TopDice000000001', 'Football Studio Dice', 'EVOLUTION', 'casino', 'https://evolution.bet4wins.net/assets/banner/FootballStudioDice.webp', ''),
(3785, 'Monopoly00000001', 'MONOPOLY Live', 'EVOLUTION', 'casino', 'https://evolution.bet4wins.net/assets/banner/monopoly.webp', ''),
(3786, 'ovu5cwp54ccmymck', 'Speed Baccarat L', 'EVOLUTION', 'casino', 'https://evolution.bet4wins.net/assets/banner/speed_baccaratl.webp', ''),
(3787, 'ovu5h6b3ujb4y53w', 'No Commission Speed Baccarat C', 'EVOLUTION', 'casino', 'https://evolution.bet4wins.net/assets/banner/nocomm_speed_baccaratc.webp', ''),
(3788, 'ndgv45bghfuaaebf', 'Speed Baccarat E', 'EVOLUTION', 'casino', 'https://evolution.bet4wins.net/assets/banner/speed_baccarate.webp', ''),
(3789, 'lv2kzclunt2qnxo5', 'Speed Baccarat B', 'EVOLUTION', 'casino', 'https://evolution.bet4wins.net/assets/banner/speed_baccaratb.webp', ''),
(3790, 'qsf63ownyvbqnz33', 'Speed Baccarat Z', 'EVOLUTION', 'casino', 'https://evolution.bet4wins.net/assets/banner/speed_baccaratz.webp', ''),
(3791, 'leqhceumaq6qfoug', 'Speed Baccarat A', 'EVOLUTION', 'casino', 'https://evolution.bet4wins.net/assets/banner/speed_baccarata.webp', ''),
(3792, 'DragonTiger00001', 'Dragon Tiger', 'EVOLUTION', 'casino', 'https://evolution.bet4wins.net/assets/banner/dragon_tiger.webp', ''),
(3793, 'nmwde3fd7hvqhq43', 'Speed Baccarat F', 'EVOLUTION', 'casino', 'https://evolution.bet4wins.net/assets/banner/speed_baccaratf.webp', ''),
(3794, 'qgqrrnuqvltnvejx', 'Speed Baccarat V', 'EVOLUTION', 'casino', 'https://evolution.bet4wins.net/assets/banner/speed_baccaratv.webp', ''),
(3795, 'nmwdzhbg7hvqh6a7', 'Speed Baccarat G', 'EVOLUTION', 'casino', 'https://evolution.bet4wins.net/assets/banner/speed_baccaratg.webp', ''),
(3796, '48z5pjps3ntvqc1b', 'Auto-Roulette', 'EVOLUTION', 'casino', 'https://evolution.bet4wins.net/assets/banner/auto_la_partage.webp', ''),
(3797, 'SpeedAutoRo00001', 'Speed Auto Roulette', 'EVOLUTION', 'casino', 'https://evolution.bet4wins.net/assets/banner/speed_auto_roulette.webp', ''),
(3798, 'GoldVaultRo00001', 'Gold Vault Roulette', 'EVOLUTION', 'casino', 'https://evolution.bet4wins.net/assets/banner/GoldVaultRoulette.webp', ''),
(3799, 'o4kyj7tgpwqqy4m4', 'Speed Baccarat Q', 'EVOLUTION', 'casino', 'https://evolution.bet4wins.net/assets/banner/speed_baccaratq.webp', ''),
(3800, 'TRPTable00000001', 'Triple Card Poker', 'EVOLUTION', 'casino', 'https://evolution.bet4wins.net/assets/banner/triple_card.webp', ''),
(3801, 'peekbaccarat0001', 'Peek Baccarat', 'EVOLUTION', 'casino', 'https://evolution.bet4wins.net/assets/banner/PeekBaccarat.webp', ''),
(3802, 'qgonc7t4ucdiel4o', 'Speed Baccarat T', 'EVOLUTION', 'casino', 'https://evolution.bet4wins.net/assets/banner/speed_baccaratt.webp', ''),
(3803, 'k2oswnib7jjaaznw', 'Baccarat Control Squeeze', 'EVOLUTION', 'casino', 'https://evolution.bet4wins.net/assets/banner/baccarat_controlled.webp', ''),
(3804, 'ovu5fzje4ccmyqnr', 'Speed Baccarat P', 'EVOLUTION', 'casino', 'https://evolution.bet4wins.net/assets/banner/speed_baccaratp.webp', ''),
(3805, 'BonsaiBacc000003', 'Bonsai Speed Baccarat C', 'EVOLUTION', 'casino', 'https://evolution.bet4wins.net/assets/banner/BonsaiSpeedBaccaratC.webp', ''),
(3806, 'LightningTable01', 'Lightning Roulette', 'EVOLUTION', 'casino', 'https://evolution.bet4wins.org/assets/banner/lightning_roulette.webp', ''),
(3807, 'CrazyTime0000002', 'Crazy Time A', 'EVOLUTION', 'casino', 'https://evolution.bet4wins.net/assets/banner/crazytimea.webp', ''),
(3808, 'NoCommBac0000001', 'No Commission Baccarat', 'EVOLUTION', 'casino', 'https://evolution.bet4wins.net/assets/banner/super_six.webp', ''),
(3809, 'XxxtremeLigh0001', 'XXXtreme Lightning Roulette', 'EVOLUTION', 'casino', 'https://evolution.bet4wins.net/assets/banner/XXXTremeLightningRoulette.webp', ''),
(3810, 'teenpattitable01', 'Teen Patti', 'EVOLUTION', 'casino', 'https://evolution.bet4wins.net/assets/banner/TeenPatti.webp', ''),
(3811, 'ndgvwvgthfuaad3q', 'Speed Baccarat C', 'EVOLUTION', 'casino', 'https://evolution.bet4wins.net/assets/banner/speed_baccaratc.webp', ''),
(3812, 'nxpkul2hgclallno', 'Speed Baccarat I', 'EVOLUTION', 'casino', 'https://evolution.bet4wins.net/assets/banner/speed_baccarati.webp', ''),
(3813, 'SBCTable00000001', 'Side Bet City', 'EVOLUTION', 'casino', 'https://evolution.bet4wins.net/assets/banner/sidebetcity.webp', ''),
(3814, 'ndgvs3tqhfuaadyg', 'Baccarat C', 'EVOLUTION', 'casino', 'https://evolution.bet4wins.net/assets/banner/baccarat_c.webp', ''),
(3815, 'obj64qcnqfunjelj', 'Speed Baccarat J', 'EVOLUTION', 'casino', 'https://evolution.bet4wins.net/assets/banner/speed_baccaratj.webp', ''),
(3816, 'rep5aor7nyjl7qli', 'Speed Baccarat 6', 'EVOLUTION', 'casino', 'https://evolution.bet4wins.net/assets/banner/SpeedBaccarat6.webp', ''),
(3817, '7nyiaws9tgqrzaz3', 'Football Studio Roulette', 'EVOLUTION', 'casino', 'https://evolution.bet4wins.net/assets/banner/FootballStudioRoulette.webp', ''),
(3818, 'ndgvz5mlhfuaad6e', 'Speed Baccarat D', 'EVOLUTION', 'casino', 'https://evolution.bet4wins.net/assets/banner/speed_baccaratd.webp', ''),
(3819, 'ovu5dsly4ccmynil', 'Speed Baccarat M', 'EVOLUTION', 'casino', 'https://evolution.bet4wins.net/assets/banner/speed_baccaratm.webp', ''),
(3820, 'rep5ca4ynyjl7wdw', 'Speed Baccarat 7', 'EVOLUTION', 'casino', 'https://evolution.bet4wins.net/assets/banner/SpeedBaccarat7.webp', ''),
(3821, 'TopCard000000001', 'Football Studio', 'EVOLUTION', 'casino', 'https://evolution.bet4wins.net/assets/banner/top_card.webp', ''),
(3822, '7x0b1tgh7agmf6hv', 'Immersive Roulette', 'EVOLUTION', 'casino', 'https://evolution.bet4wins.net/assets/banner/immersive_roulette.webp', ''),
(3823, 'qgqrucipvltnvnvq', 'Speed Baccarat W', 'EVOLUTION', 'casino', 'https://evolution.bet4wins.net/assets/banner/speed_baccaratw.webp', ''),
(3824, 'ovu5fbxm4ccmypmb', 'Speed Baccarat O', 'EVOLUTION', 'casino', 'https://evolution.bet4wins.net/assets/banner/speed_baccarato.webp', ''),
(3825, 'vctlz20yfnmp1ylr', 'Roulette', 'EVOLUTION', 'casino', 'https://evolution.bet4wins.net/assets/banner/roulette.webp', ''),
(3826, 'ocye5hmxbsoyrcii', 'No Commission Speed Baccarat B', 'EVOLUTION', 'casino', 'https://evolution.bet4wins.net/assets/banner/nocomm_speed_baccaratb.webp', ''),
(3827, '60i0lcfx5wkkv3sy', 'Baccarat B', 'EVOLUTION', 'casino', 'https://evolution.bet4wins.net/assets/banner/baccarat_b.webp', ''),
(3828, 'BonsaiBacc000001', 'Bonsai Speed Baccarat A', 'EVOLUTION', 'casino', 'https://evolution.bet4wins.net/assets/banner/BonsaiSpeedBaccaratA.webp', ''),
(3829, '01rb77cq1gtenhmo', 'Auto-Roulette VIP', 'EVOLUTION', 'casino', 'https://evolution.bet4wins.net/assets/banner/auto_roulette_vip.webp', ''),
(3830, 'CrazyTime0000001', 'Crazy Time', 'EVOLUTION', 'casino', 'https://evolution.bet4wins.net/assets/banner/crazytime.webp', ''),
(3831, 'lkcbrbdckjxajdol', 'Speed Roulette', 'EVOLUTION', 'casino', 'https://evolution.bet4wins.net/assets/banner/speed_roulette.webp', ''),
(3832, 'AmericanTable001', 'American Roulette', 'EVOLUTION', 'casino', 'https://evolution.bet4wins.net/assets/banner/americanroulette.webp', ''),
(3833, 'qsf7bpfvyvbqolwp', 'Speed Baccarat 3', 'EVOLUTION', 'casino', 'https://evolution.bet4wins.net/assets/banner/speed_baccarat_3.webp', ''),
(3834, 'qsf7alptyvbqohva', 'Speed Baccarat 2', 'EVOLUTION', 'casino', 'https://evolution.bet4wins.net/assets/banner/speed_baccarat_2.webp', ''),
(3835, 'nxpj4wumgclak2lx', 'Speed Baccarat H', 'EVOLUTION', 'casino', 'https://evolution.bet4wins.net/assets/banner/speed_baccarath.webp', ''),
(3836, 'ndgv76kehfuaaeec', 'No Commission Speed Baccarat A', 'EVOLUTION', 'casino', 'https://evolution.bet4wins.net/assets/banner/nocomm_speed_baccarat.webp', ''),
(3837, 'BonsaiBacc000002', 'Bonsai Speed Baccarat B', 'EVOLUTION', 'casino', 'https://evolution.bet4wins.net/assets/banner/BonsaiSpeedBaccaratB.webp', ''),
(3838, 'qsf65xtoyvbqoaop', 'Speed Baccarat 1', 'EVOLUTION', 'casino', 'https://evolution.bet4wins.net/assets/banner/speed_baccarat_1.webp', ''),
(3839, 'oytmvb9m1zysmc44', 'Baccarat A', 'EVOLUTION', 'casino', 'https://evolution.bet4wins.net/assets/banner/baccarat_a.webp', ''),
(3840, 'zixzea8nrf1675oh', 'Baccarat Squeeze', 'EVOLUTION', 'casino', 'https://evolution.bet4wins.net/assets/banner/baccarat_squeeze.webp', ''),
(3841, 'LightningBac0001', 'Lightning Baccarat', 'EVOLUTION', 'casino', 'https://evolution.bet4wins.org/assets/banner/lightning_baccarat.webp', ''),
(3842, 'ocye2ju2bsoyq6vv', 'Speed Baccarat K', 'EVOLUTION', 'casino', 'https://evolution.bet4wins.net/assets/banner/speed_baccaratk.webp', ''),
(3843, 'FanTan0000000001', 'Fan Tan', 'EVOLUTION', 'casino', 'https://evolution.bet4wins.net/assets/banner/fan_tan.webp', ''),
(3844, 'CSPTable00000001', 'Caribbean Stud Poker', 'EVOLUTION', 'casino', 'https://evolution.bet4wins.net/assets/banner/stud_poker.webp', ''),
(3845, 'SuperSicBo000001', 'Super Sic Bo', 'EVOLUTION', 'casino', 'https://evolution.bet4wins.net/assets/banner/super_sicbo.webp', ''),
(3846, 'o4kymodby2fa2c7g', 'Speed Baccarat S', 'EVOLUTION', 'casino', 'https://evolution.bet4wins.net/assets/banner/speed_baccarats.webp', ''),
(3847, 'MOWDream00000001', 'Dream Catcher', 'EVOLUTION', 'casino', 'https://evolution.bet4wins.net/assets/banner/dream_catcher.webp', ''),
(3848, 'qgqrhfvsvltnueqf', 'Speed Baccarat U', 'EVOLUTION', 'casino', 'https://evolution.bet4wins.net/assets/banner/speed_baccaratu.webp', ''),
(3849, 'LightningDice001', 'Lightning Dice', 'EVOLUTION', 'casino', 'https://evolution.bet4wins.org/assets/banner/lightningdice.webp', ''),
(3850, 'MonBigBaller0001', 'MONOPOLY Big Baller', 'EVOLUTION', 'casino', 'https://evolution.bet4wins.org/assets/banner/MonopolyBigBaller.webp', ''),
(3851, 'o4kylkahpwqqy57w', 'Speed Baccarat R', 'EVOLUTION', 'casino', 'https://evolution.bet4wins.net/assets/banner/speed_baccaratr.webp', ''),
(3852, 'f1f4rm9xgh4j3u2z', 'Auto-Roulette La Partage', 'EVOLUTION', 'casino', 'https://evolution.bet4wins.net/assets/banner/auto_roulette.webp', ''),
(3853, 'qgqrv4asvltnvuty', 'Speed Baccarat X', 'EVOLUTION', 'casino', 'https://evolution.bet4wins.net/assets/banner/speed_baccaratx.webp', ''),
(3854, 'ovu5eja74ccmyoiq', 'Speed Baccarat N', 'EVOLUTION', 'casino', 'https://evolution.bet4wins.net/assets/banner/speed_baccaratn.webp', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_konfirmasi`
--

CREATE TABLE `tb_konfirmasi` (
  `cuid` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `paymentID` varchar(25) NOT NULL,
  `kd_transaksi` varchar(25) NOT NULL,
  `image` varchar(255) NOT NULL,
  `tanggal` datetime NOT NULL,
  `bank_tujuan` text NOT NULL,
  `total` int(11) NOT NULL,
  `metode` varchar(25) NOT NULL DEFAULT 'transfer',
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_livechat`
--

CREATE TABLE `tb_livechat` (
  `cuid` int(255) NOT NULL,
  `lc_js` text NOT NULL,
  `lc_mobile` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_livechat`
--

INSERT INTO `tb_livechat` (`cuid`, `lc_js`, `lc_mobile`) VALUES
(1, '', 'https://direct.lc.chat/17038203/');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_notif`
--

CREATE TABLE `tb_notif` (
  `cuid` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `note` text NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_page`
--

CREATE TABLE `tb_page` (
  `cuid` int(11) NOT NULL,
  `slug` text NOT NULL,
  `nama_page` text NOT NULL,
  `content` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL,
  `created_date` date NOT NULL,
  `last_update` date NOT NULL,
  `user` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_page`
--

INSERT INTO `tb_page` (`cuid`, `slug`, `nama_page`, `content`, `image`, `video`, `created_date`, `last_update`, `user`) VALUES
(4, 'kebijakan', 'Kebijakan', '<h2>Privacy Policy Kincai Group (EN)</h2>\r\n<p>At Kincai Group, accessible from https://kincai77.com, one of our main priorities is the privacy of our visitors. This Privacy Policy document contains types of information that is collected and recorded by Kincai Group and how we use it. </p>\r\n<p> If you have additional questions or require more information about our Privacy Policy, do not hesitate to contact us. </p>\r\n<p> This Privacy Policy applies only to our online activities and is valid for visitors to our website with regards to the information that they shared and/or collect in Kincai Group. This policy is not applicable to any information collected offline or via channels other than this website.</p>\r\n<h2>Consent</h2>\r\n<p> By using our website, you hereby consent to our Privacy Policy and agree to its terms. </p>\r\n<h2> Information we collect </h2>\r\n<p> The personal information that you are asked to provide, and the reasons why you are asked to provide it, will be made clear to you at the point we ask you to provide your personal information. </p>\r\n<p> If you contact us directly, we may receive additional information about you such as your name, email address, phone number, the contents of the message and/or attachments you may send us, and any other information you may choose to provide. </p>\r\n<p> When you register for an Account, we may ask for your contact information, including items such as name, company name, address, email address, and telephone number. </p>\r\n<h2> How we use your information </h2>\r\n<p> We use the information we collect in various ways, including to: </p>\r\n<ul>\r\n    <li>Provide, operate, and maintain our website</li>\r\n    <li>Improve, personalize, and expand our website</li>\r\n    <li>Understand and analyze how you use our website</li>\r\n    <li>Develop new products, services, features, and functionality</li>\r\n    <li>Communicate with you, either directly or through one of our partners, including for customer service, to provide you with updates and other information relating to the website, and for marketing and promotional purposes</li>\r\n    <li>Send you emails</li>\r\n    <li>Find and prevent fraud</li>\r\n</ul>\r\n<h2> Log Files </h2>\r\n<p> Kincai Group follows a standard procedure of using log files. These files log visitors when they visit websites. All hosting companies do this and a part of hosting services analytics. The information collected by log files include internet protocol (IP) addresses, browser type, Internet Service Provider (ISP), date and time stamp, referring/exit pages, and possibly the number of clicks. These are not linked to any information that is personally identifiable. The purpose of the information is for analyzing trends, administering the site, tracking users movement on the website, and gathering demographic information. </p>\r\n<h2> Cookies and Web Beacons </h2>\r\n<p> Like any other website, Kincai Group uses \"cookies\". These cookies are used to store information including visitors preferences, and the pages on the website that the visitor accessed or visited. The information is used to optimize the users experience by customizing our web page content based on visitors browser type and/or other information. </p>\r\n<h2> Google DoubleClick DART Cookie </h2>\r\n<p> Google is one of a third-party vendor on our site. It also uses cookies, known as DART cookies, to serve ads to our site visitors based upon their visit to www.website.com and other sites on the internet. However, visitors may choose to decline the use of DART cookies by visiting the Google ad and content network Privacy Policy at the following URL - <a href=\"https://policies.google.com/technologies/ads\">https://policies.google.com/technologies/ads</a> </p>\r\n<h2> Our Advertising Partners </h2>\r\n<p> Some of advertisers on our site may use cookies and web beacons. Our advertising partners are listed below. Each of our advertising partners has their own Privacy Policy for their policies on user data. For easier access, we hyperlinked to their Privacy Policies below. </p>\r\n<ul> <li> Google: <a href=\"https://policies.google.com/technologies/ads\">https://policies.google.com/technologies/ads</a> </li> </ul>\r\n<h2> Advertising Partners Privacy Policies </h2>\r\n<p> You may consult this list to find the Privacy Policy for each of the advertising partners of Kincai Group. </p>\r\n<p> Third-party ad servers or ad networks uses technologies like cookies, JavaScript, or Web Beacons that are used in their respective advertisements and links that appear on Kincai Group, which are sent directly to users browser. They automatically receive your IP address when this occurs. These technologies are used to measure the effectiveness of their advertising campaigns and/or to personalize the advertising content that you see on websites that you visit. </p>\r\n<p> Note that Kincai Group has no access to or control over these cookies that are used by third-party advertisers. </p>\r\n<h2> Third Party Privacy Policies </h2>\r\n<p> Kincai Group&apos;s Privacy Policy does not apply to other advertisers or websites. Thus, we are advising you to consult the respective Privacy Policies of these third-party ad servers for more detailed information. It may include their practices and instructions about how to opt-out of certain options. </p>\r\n<p> You can choose to disable cookies through your individual browser options. To know more detailed information about cookie management with specific web browsers, it can be found at the browsers respective websites. </p>\r\n<h2> CCPA Privacy Rights (Do Not Sell My Personal Information) </h2>\r\n<p> Under the CCPA, among other rights, California consumers have the right to: </p>\r\n<p> Request that a business that collects a consumer&apos;s personal data disclose the categories and specific pieces of personal data that a business has collected about consumers. </p>\r\n<p> Request that a business delete any personal data about the consumer that a business has collected. </p>\r\n<p> Request that a business that sells a consumer&apos;s personal data, not sell the consumer&apos;s personal data. </p>\r\n<p> If you make a request, we have one month to respond to you. If you would like to exercise any of these rights, please contact us. </p>\r\n<h2> GDPR Data Protection Rights </h2>\r\n<p> We would like to make sure you are fully aware of all of your data protection rights. Every user is entitled to the following: </p>\r\n<p> The right to access - You have the right to request copies of your personal data. We may charge you a small fee for this service. </p>\r\n<p> The right to rectification - You have the right to request that we correct any information you believe is inaccurate. You also have the right to request that we complete the information you believe is incomplete. </p>\r\n<p> The right to erasure - You have the right to request that we erase your personal data, under certain conditions. </p>\r\n<p> The right to restrict processing - You have the right to request that we restrict the processing of your personal data, under certain conditions. </p>\r\n<p> The right to object to processing - You have the right to object to our processing of your personal data, under certain conditions. </p>\r\n<p> The right to data portability - You have the right to request that we transfer the data that we have collected to another organization, or directly to you, under certain conditions. </p>\r\n<p> If you make a request, we have one month to respond to you. If you would like to exercise any of these rights, please contact us. Our privacy policy was created with the help of the <a href=\"https://webtool.seosecret.id/privacy-policy-generator\">Privacy Policy Generator</a>.</p>\r\n<h2> Children&apos;s Information </h2>\r\n<p> Another part of our priority is adding protection for children while using the internet. We encourage parents and guardians to observe, participate in, and/or monitor and guide their online activity. </p>\r\n<p> Kincai Group does not knowingly collect any Personal Identifiable Information from children under the age of 13. If you think that your child provided this kind of information on our website, we strongly encourage you to contact us immediately and we will do our best efforts to promptly remove such information from our records. </p>\r\n<hr>\r\n<h2>Kebijakan Privasi Kincai Group (ID)</h2>\r\n<p>Di Kincai Group, dapat diakses dari https://kincai77.com, salah satu prioritas utama kami adalah privasi pengunjung kami. Dokumen Kebijakan Privasi ini berisi jenis informasi yang dikumpulkan dan dicatat oleh Kincai Group dan bagaimana kami menggunakannya. </p>\r\n<p> Jika Anda memiliki pertanyaan tambahan atau memerlukan informasi lebih lanjut tentang Kebijakan Privasi kami, jangan ragu untuk menghubungi kami. </p>\r\n<p> Kebijakan Privasi ini hanya berlaku untuk aktivitas online kami dan berlaku untuk pengunjung situs web kami sehubungan dengan informasi yang mereka bagikan dan/atau kumpulkan di Kincai Group. Kebijakan ini tidak berlaku untuk informasi apa pun yang dikumpulkan secara offline atau melalui saluran selain situs web ini.</p>\r\n<h2>Izin</h2>\r\n<p> Dengan menggunakan situs web kami, Anda dengan ini menyetujui Kebijakan Privasi kami dan menyetujui persyaratannya. </p>\r\n<h2> Informasi yang kami kumpulkan </h2>\r\n<p> Informasi pribadi yang diminta untuk Anda berikan, dan alasan mengapa Anda diminta untuk memberikannya, akan dijelaskan kepada Anda pada saat kami meminta Anda untuk memberikan informasi pribadi Anda. </p>\r\n<p> Jika Anda menghubungi kami secara langsung, kami dapat menerima informasi tambahan tentang Anda seperti nama, alamat email, nomor telepon, isi pesan dan/atau lampiran yang mungkin Anda kirimkan kepada kami, dan informasi lain yang mungkin Anda pilih untuk diberikan. </p>\r\n<p> Saat Anda mendaftar Akun, kami mungkin meminta informasi kontak Anda, termasuk hal-hal seperti nama, nama perusahaan, alamat, alamat email, dan nomor telepon. </p>\r\n<h2> Bagaimana kami menggunakan informasi Anda </h2>\r\n<p> Kami menggunakan informasi yang kami kumpulkan dengan berbagai cara, termasuk untuk: </p>\r\n<ul>\r\n    <li>Menyediakan, mengoperasikan, dan memelihara situs web kami</li>\r\n    <li>Tingkatkan, sesuaikan, dan perluas situs web kami</li>\r\n    <li>Pahami dan analisis bagaimana Anda menggunakan situs web kami</li>\r\n    <li>Kembangkan produk, layanan, fitur, dan fungsionalitas baru</li>\r\n    <li>Berkomunikasi dengan Anda, baik secara langsung atau melalui salah satu mitra kami, termasuk untuk layanan pelanggan, untuk memberi Anda pembaruan dan informasi lain yang berkaitan dengan situs web, dan untuk tujuan pemasaran dan promosi</li>\r\n    <li>Kirimi Anda email</li>\r\n    <li>Temukan dan cegah penipuan</li>\r\n</ul>\r\n<h2> File Log </h2>\r\n<p> Kincai Group mengikuti prosedur standar menggunakan file log. File-file ini mencatat pengunjung ketika mereka mengunjungi situs web. Semua perusahaan hosting melakukan ini dan merupakan bagian dari analitik layanan hosting. Informasi yang dikumpulkan oleh file log termasuk alamat protokol internet (IP), jenis browser, Penyedia Layanan Internet (ISP), stempel tanggal dan waktu, halaman rujukan/keluar, dan mungkin jumlah klik. Ini tidak terkait dengan informasi apa pun yang dapat diidentifikasi secara pribadi. Tujuan dari informasi tersebut adalah untuk menganalisis tren, mengelola situs, melacak pergerakan pengguna di situs web, dan mengumpulkan informasi demografis. </p>\r\n<h2> Cookie dan Beacons Web </h2>\r\n<p> Seperti situs web lainnya, Kincai Group menggunakan \"cookies\". Cookie ini digunakan untuk menyimpan informasi termasuk preferensi pengunjung, dan halaman di situs web yang diakses atau dikunjungi pengunjung. Informasi tersebut digunakan untuk mengoptimalkan pengalaman pengguna dengan menyesuaikan konten halaman web kami berdasarkan jenis browser pengunjung dan/atau informasi lainnya. </p>\r\n<h2> Cookie Google DoubleClick DART </h2>\r\n<p> Google adalah salah satu vendor pihak ketiga di situs kami. Itu juga menggunakan cookie, yang dikenal sebagai cookie DART, untuk menayangkan iklan kepada pengunjung situs kami berdasarkan kunjungan mereka ke www.website.com dan situs lain di internet. Namun, pengunjung dapat memilih untuk menolak penggunaan cookie DART dengan mengunjungi iklan Google dan Kebijakan Privasi jaringan konten di URL berikut - <a href=\"https://policies.google.com/technologies/ads\">https://policies.google.com/technologies/ads</a> </p>\r\n<h2> Mitra Iklan Kami </h2>\r\n<p> Beberapa pengiklan di situs kami mungkin menggunakan cookies dan web beacon. Mitra periklanan kami tercantum di bawah ini. Setiap mitra periklanan kami memiliki Kebijakan Privasi sendiri untuk kebijakan mereka tentang data pengguna. Untuk akses yang lebih mudah, kami menautkan ke Kebijakan Privasi mereka di bawah ini. </p>\r\n<ul> <li> Google: <a href=\"https://policies.google.com/technologies/ads\">https://policies.google.com/technologies/ads</a> </li> </ul>\r\n<h2> Kebijakan Privasi Mitra Periklanan </h2>\r\n<p> Anda dapat berkonsultasi daftar ini untuk menemukan Kebijakan Privasi untuk masing-masing mitra periklanan Kincai Group. </p>\r\n<p> Server iklan atau jaringan iklan pihak ketiga menggunakan teknologi seperti cookie, JavaScript, atau Web Beacon yang digunakan dalam iklan masing-masing dan tautan yang muncul di Kincai Group, yang dikirim langsung ke browser pengguna. Mereka secara otomatis menerima alamat IP Anda saat ini terjadi. Teknologi ini digunakan untuk mengukur keefektifan kampanye iklan mereka dan/atau untuk mempersonalisasi konten iklan yang Anda lihat di situs web yang Anda kunjungi. </p>\r\n<p> Perhatikan bahwa Kincai Group tidak memiliki akses atau kontrol terhadap cookie yang digunakan oleh pengiklan pihak ketiga ini. </p>\r\n<h2> Kebijakan Privasi Pihak Ketiga </h2>\r\n<p> Kebijakan Privasi Kincai Group tidak berlaku untuk pengiklan atau situs web lain. Karenanya, kami menyarankan Anda untuk berkonsultasi dengan Kebijakan Privasi masing-masing dari server iklan pihak ketiga ini untuk informasi lebih rinci. Ini mungkin termasuk praktik dan instruksi mereka tentang cara menyisih dari opsi tertentu. </p>\r\n<p> Anda dapat memilih untuk menonaktifkan cookie melalui opsi browser individual Anda. Untuk mengetahui informasi lebih rinci tentang manajemen cookie dengan browser web tertentu, dapat ditemukan di situs web masing-masing browser. </p>\r\n<h2> Hak Privasi CCPA (Do Not Sell My Personal Information) </h2>\r\n<p> Di bawah CCPA, di antara hak lainnya, konsumen California memiliki hak untuk: </p>\r\n<p> Meminta agar bisnis yang mengumpulkan data pribadi konsumen mengungkapkan kategori dan bagian spesifik dari data pribadi yang telah dikumpulkan bisnis tentang konsumen. </p>\r\n<p> Meminta agar bisnis menghapus data pribadi apa pun tentang konsumen yang telah dikumpulkan bisnis. </p>\r\n<p> Minta agar bisnis yang menjual data pribadi konsumen, bukan menjual data pribadi konsumen. </p>\r\n<p> Jika Anda mengajukan permintaan, kami memiliki waktu satu bulan untuk menanggapi Anda. Jika Anda ingin menggunakan hak-hak ini, silakan hubungi kami. </p>\r\n<h2> Hak Perlindungan Data GDPR </h2>\r\n<p> Kami ingin memastikan bahwa Anda sepenuhnya mengetahui semua hak perlindungan data Anda. Setiap pengguna berhak atas hal-hal berikut: </p>\r\n<p> Hak untuk mengakses - Anda memiliki hak untuk meminta salinan data pribadi Anda. Kami mungkin mengenakan sedikit biaya untuk layanan ini. </p>\r\n<p> Hak atas pembetulan - Anda memiliki hak untuk meminta agar kami mengoreksi setiap informasi yang Anda yakini tidak akurat. Anda juga berhak meminta kami melengkapi informasi yang Anda yakini tidak lengkap. </p>\r\n<p> Hak untuk menghapus - Anda memiliki hak untuk meminta kami menghapus data pribadi Anda, dalam kondisi tertentu. </p>\r\n<p> Hak untuk membatasi pemrosesan - Anda berhak meminta kami membatasi pemrosesan data pribadi Anda, dalam kondisi tertentu. </p>\r\n<p> Hak untuk menolak pemrosesan - Anda memiliki hak untuk menolak pemrosesan data pribadi Anda oleh kami, dalam kondisi tertentu. </p>\r\n<p> Hak portabilitas data - Anda berhak meminta kami mentransfer data yang telah kami kumpulkan ke organisasi lain, atau langsung kepada Anda, dalam kondisi tertentu. </p>\r\n<p> Jika Anda mengajukan permintaan, kami memiliki waktu satu bulan untuk menanggapi Anda. Jika Anda ingin menggunakan hak-hak ini, silakan hubungi kami. Kebijakan privasi kami dibuat dengan <a href=\"https://webtool.seosecret.id/privacy-policy-generator\">Generator Kebijakan Privasi</a>.</p>\r\n<h2> Informasi Anak </h2>\r\n<p> Bagian lain dari prioritas kami adalah menambahkan perlindungan untuk anak-anak saat menggunakan internet. Kami mendorong orang tua dan wali untuk mengamati, berpartisipasi, dan/atau memantau dan membimbing aktivitas online mereka. </p>\r\n<p> Kincai Group tidak dengan sengaja mengumpulkan Informasi Identifikasi Pribadi apa pun dari anak-anak di bawah usia 13 tahun. Jika menurut Anda anak Anda memberikan informasi semacam ini di situs web kami, kami sangat menganjurkan Anda untuk segera menghubungi kami dan kami akan melakukan upaya terbaik kami untuk segera menghapus informasi tersebut dari catatan kami. </p>', '', '', '2023-07-03', '2023-08-03', 'mimintop'),
(2, 'pertanyaan', 'Pertanyaan', '<h2>1. Bagaimana membuat akun?</h2><p>Cara membuat akun di Kincai Group sangat mudah, silahkan klik tombol \"Daftar\" yang terletak di bagian kanan atas pada halaman utama Kincai Group. Lalu isi semua informasi yang dibutuhkan secara tepat dan benar. Anda harus mengkonfirmasi bahwa anda setidaknya berusia 18 tahun untuk melengkapi pendaftaran anda.</p><p>Kolom nama belakang anda tidak dapat dikosongkan. Jika anda tidak memiliki nama belakang (nama keluarga), maka anda dapat mengulang penulisan nama depan anda. Cotoh: Andi Andi.</p><h2>2. Mata uang apa yang diterima?</h2><p>Dibawah ini adalah daftar semua mata uang yang diterima oleh Kincai Group:</p><p>Rupiah (IDR).*</p><p>Catatan:</p><p>1 unit Rupiah (IDR) di Kincai Group akan mewakili Rp. 1.000.</p><h2>3. Bagaimana deposit dana ke akun?</h2><p>Sebelum anda dapat bertaruh, anda perlu melakukan deposit dana ke akun anda menggunakan salah satu opsi deposit berikut ini:</p><ul><li>Bank Lokal.</li><li>Emoney.</li><li>Online Deposit.</li></ul><h2>4. Adakah batasan betting?</h2><p>Setiap permainan yang disediakan oleh Kincai Group memiliki taruhan minimal sesuai permainan yang dipilih. Semua informasi tersedia ketika member sudah masuk ke dalam permainan.</p><h2>5. Apakah situs ini terpercaya?</h2><p>Situs kami merupakan situs resmi yang berkantor di Manila, Filipina, dan Malaysia dimana sebelum kami beroperasi kami sudah mendapatkan lisensi PACGOR sebagai tanda bahwa kami web terpercaya. Seluruh transaksi data keuangan dan privasi anda menjadi salah satu prioritas kami dan tidak ada satupun member kami yang tidak dibayar kemenangannya.</p>', '', '', '2023-07-03', '2023-08-03', 'mimintop'),
(1, 'tentang-kami', 'Tentang Kami', '<h2>Apa itu Kincai Group?</h2><p>Situs slot gacor Kincai Group memudahkan pemain untuk memenangkan scatter max win, dan mendapatkan jackpot di multi server. Kincai Group memiliki winrate tertinggi yang terintegrasi dengan provider pragmatic play global.</p><p>Situs slot gacor Kincai Group.com adalah situs taruhan online terbesar yang telah menjadi situs slot tepercaya di antara para pemain dan petaruh profesional.</p><p>Kincai Group adalah situs permainan taruhan olahraga hingga kasino terkemuka dan terpercaya di Asia, Kincai Group menawarkan pengalaman judi online terbaik dengan berbagai variasi permainan kasino &amp; sportsbook yang dapat dipilih dengan odds paling kompetitif dalam dunia judi sepak bola. Kami menawarkan rata-rata 10.000 permainan olahraga yang berbeda setiap bulan dan berbagai kompetisi di seluruh dunia dalam Kincai Group Sportsbook, sementara total lebih dari 100 permainan kasino dari variasi bakarat, slot, roulette dan permainan kasino lainnya dapat dimainkan di Kincai Group Casino.<br></p><h2>Keunggulan Produk</h2><p><b>1. SLOTS BETTING</b></p><p>Slot pro multi server memudahkan player mendapatkan scatter max win dan daily jackpot. Situs slot gacor Kincai Group memiliki winrate tertinggi yang terintegrasi dengan pragmatic play.</p><p><b>2. LIVE CASINO BETTING</b></p><p>Live casino dengan performa multi server membantu pemain mendapatkan pengalaman terbaik, dengan pilihan variasi game casino terlengkap saat ini, Kincai Group selalu memberi yang terbaik.</p><p><b>3. SPORTS BETTING</b></p><p>Sportsbook platform menawarkan banyak games, odds lebih tinggi, dan pilihan yang beragam. Kincai Group adalah situs yang tepat bagi pemula maupun profesional. Maksimalkan kemenangan!</p><p><b>4. TOGEL BETTING</b></p><p>Situs togel terpercaya dari perusahaan terbaik dunia, menawarkan hadiah kemenangan besar dan cepat cair. Dengan kualitas yang tinggi, Kincai Group juga menerapkan potongan biaya yang rendah.</p><h3>Bonus Member</h3><ol><li>Bonus Demo New Member 1 Juta</li><li>Bonus Deposit New Member 50%</li><li>Bonus Referral New Member 15%</li><li>Bonus Rolling Mingguan 0.8%</li><li>Bonus Cashback Mingguan 10%</li></ol><h4>Keamanan Sistem</h4><p>Domain aman dan privat serta integritas produk kami adalah poros fundamental dari pengalaman taruhan online di Kincai Group. Kami selalu mengutamakan keamanan tercanggih dan memperbaharui semua permainan serta proses-proses kami secara berkala, demi memastikan pengalaman permainan online Anda 100% aman dan adil. Kami selalu mengutamakan menjaga kerahasiaan informasi Anda, dan kami tidak akan pernah membagikannya ataupun menjualnya ke pihak ketiga, kecuali diharuskan sesuai dengan yang disebutkan di Kebijakan Privasi kami.</p><h4>Layanan Pelanggan</h4><p>Didukung layanan pelanggan 24 jam, yang tersedia 7 hari seminggu, staf kami yang ramah dan profesional akan memastikan bahwa semua masalah yang Anda hadapi akan ditangani dengan cepat, efisien, dan secara ramah. Kami memberikan prioritas tinggi untuk memastikan sistem pembayaran yang aman dan memberikan kerahasiaan informasi pribadi.</p><p>Misi utama kami adalah selalu memberikan pengalaman taruhan online terbaik bagi pemain yang bertanggung jawab. Silahkan hubungi kami melalui Livechat dan Whatsapp, dengan saran dan komentar Anda.</p><p>Kami memilki beberapa metode pembayaran yang mudah dan aman, demi kenyamanan Anda. Kami mengikuti kebijakan kenali pelanggan Anda (KYC) dan anti-pencucian uang (AML), dan kami bekerja sama dengan badan keuangan serta badan pengatur demi memastikan ketaatan berstandar tertinggi pada hukum dan peraturan.</p><h4>Program &amp; Hiburan</h4><p>Di Kincai Group, kami berusaha untuk memberikan yang terbaik dalam permainan dan layanan online untuk menawarkan pengalaman unik &amp; terbaik bagi pelanggan kami. Kami memiliki beberapa program berhadiah, yang memberikan pelanggan kami berbagai hadiah yang benar-benar layak untuk para pemain. Bermain di Kincai Group tidak hanya menyenangkan dan menghibur, tetapi juga sangat menguntungkan!</p><p>Apakah Anda sedang mencari web slot terbaik dan terpercaya? Provider game slot online dari Kincai Group adalah salah satu solusinya. Dengan multi server kami menyediakan platform game slot, casino live, dan togel online. Anda serta pemain game online lainnya tidak perlu khawatir tentang apapun. Sebagai situs dengan winrate tertinggi, slot gacor kami menawarkan berbagai layanan mulai dari deposit minimal Rp 20.000. Saat Anda bertaruh atau berpartisipasi dalam slot online di situs milik Kincai Group, Anda mendapatkan peluang kemenangan lebih besar dari umumnya platform lain di Indonesia. Bahkan jika Anda terdaftar sebagai pemain atau petaruh, kami memiliki situs slot dengan RTP tercepat dan peluang jackpot termudah.</p><p>Dengan situs slot Kincai Group, Anda tidak akan kecewa karena dengan permainan judi online kami, ada banyak pilihan game slot dan casino yang dapat dimainkan. Pemain atau petaruh hanya membutuhkan deposit minimum, dan Anda dapat memainkan slot, casino, dan togel dari penyedia slot teratas seperti Pragmatic Play, PG Soft, Playstar dan Habanero, serta Toptrend Gaming lainnya. Situs slot baru dari Kincai Group menawarkan berbagai jenis permainan mulai dari slot, casino, togel, sport, egames, dan fishing. Anda tidak perlu khawatir tentang keamanan. Kami dapat diandalkan sebagai portal slot online yang sempurna.</p><p>Situs slot gacor Kincai Group memudahkan pemain mendapatkan scatter max win dan memenangkan jackpot dengan RTP tertinggi. Dapatkan kemenangan dengan RTP tercepat</p>', '', '', '2023-07-03', '2023-08-03', 'mimintop'),
(3, 'ketentuan', 'Ketentuan', '<h2>Ketentuan Umum</h2>\r\n<ol><li>Pendaftar harus berusia 17 tahun keatas.</li><li>Anda wajib memberikan data informasi dengan lengkap dalam formulir yang tersedia (Nomor telepon, Nomor dan Nama Rekening)</li><li>Proses Transaksi hanya bisa dilakukan pada jam bank online.</li><li>Proses Pemindahan saldo hanya dapat dilakukan sebanyak 2 kali dalam sehari.</li><li>Proses Deposit dilakukan melalui Mesin ATM, Internet banking, dan sms (Diluar dari ini, kami menolak untuk melakukan proses deposit).</li><li>Kami berhak menolak proses setiap member yang memanipulasi atau mencurigakan.</li><li>Peringatan keras bagi bonus hunter / player hantu / betting syndicate tidak terima disini. Jika terindikasi adanya keganjilan dalam betlist maka kami berhak menutup akun dan menyita seluruh kredit yang ada</li><li>Kami melarang keras penggunaan perangkat, software, \"bots\", program atau metode apapun yang diaplikasikan untuk menghasilkan taruhan yang tidak wajar dan merugikan pihak kami. Penutupan account akan dilakukan tanpa adanya pemberitahuan terlebih dahulu dan semua kemenangan dari taruhan yang dilakukan akan dibatalkan dan sisa saldo akan dihanguskan.</li><li>Kami tidak menerima komplain atas Void dan Reject dalam permainan, Sebab itu diluar tanggung jawab kami.</li><li>Kami tidak menerima pendaftaran apabila anda menggunakan IP Address Luar Negeri (Malaysia, Singapore, Hongkong, Cambodia, China).</li><li>Proses Withdraw atau penarikan tidak dapat dilakukan apabila informasi rekening tertuju berbeda seperti informasi rekening pada database kami.</li></ol>\r\n<h2><b>Terms and Conditions</b> (EN)</h2>\r\n<p>Welcome to Kincai Group! These terms and conditions outline the rules and regulations for the use of Kincai Group&apos;s Website, located at https://kincai77.com.</p>\r\n<p>By accessing this website we assume you accept these terms and conditions. Do not continue to use Kincai Group if you do not agree to take all of the terms and conditions stated on this page.</p>\r\n<p>The following terminology applies to these Terms and Conditions, Privacy Statement and Disclaimer Notice and all Agreements: \"Client\", \"You\" and \"Your\" refers to you, the person log on this website and compliant to the Company&apos;s terms and conditions. \"The Company\", \"Ourselves\", \"We\", \"Our\" and \"Us\", refers to our Company. \"Party\", \"Parties\", or \"Us\", refers to both the Client and ourselves. All terms refer to the offer, acceptance and consideration of payment necessary to undertake the process of our assistance to the Client in the most appropriate manner for the express purpose of meeting the Client&apos;s needs in respect of provision of the Company&apos;s stated services, in accordance with and subject to, prevailing law of Netherlands. Any use of the above terminology or other words in the singular, plural, capitalization and/or he/she or they, are taken as interchangeable and therefore as referring to same.</p>\r\n<h3><b>Cookies</b></h3>\r\n<p>We employ the use of cookies. By accessing Kincai Group, you agreed to use cookies in agreement with the Kincai Group&apos;s Privacy Policy.</p>\r\n<p>Most interactive websites use cookies to let us retrieve the user&apos;s details for each visit. Cookies are used by our website to enable the functionality of certain areas to make it easier for people visiting our website. Some of our affiliate/advertising partners may also use cookies.</p>\r\n<h3><b>License</b></h3>\r\n<p>Unless otherwise stated, Kincai Group and/or its licensors own the intellectual property rights for all material on Kincai Group. All intellectual property rights are reserved. You may access this from Kincai Group for your own personal use subjected to restrictions set in these terms and conditions.</p>\r\n<p>You must not:</p>\r\n<ul>\r\n    <li>Republish material from Kincai Group</li>\r\n    <li>Sell, rent or sub-license material from Kincai Group</li>\r\n    <li>Reproduce, duplicate or copy material from Kincai Group</li>\r\n    <li>Redistribute content from Kincai Group</li>\r\n</ul>\r\n<p>This Agreement shall begin on the date hereof.</p>\r\n<p>Parts of this website offer an opportunity for users to post and exchange opinions and information in certain areas of the website. Kincai Group does not filter, edit, publish or review Comments prior to their presence on the website. Comments do not reflect the views and opinions of Kincai Group, its agents and/or affiliates. Comments reflect the views and opinions of the person who post their views and opinions. To the extent permitted by applicable laws, Kincai Group shall not be liable for the Comments or for any liability, damages or expenses caused and/or suffered as a result of any use of and/or posting of and/or appearance of the Comments on this website.</p>\r\n<p>Kincai Group reserves the right to monitor all Comments and to remove any Comments which can be considered inappropriate, offensive or causes breach of these Terms and Conditions.</p>\r\n<p>You warrant and represent that:</p>\r\n<ul>\r\n    <li>You are entitled to post the Comments on our website and have all necessary licenses and consents to do so;</li>\r\n    <li>The Comments do not invade any intellectual property right, including without limitation copyright, patent or trademark of any third party;</li>\r\n    <li>The Comments do not contain any defamatory, libelous, offensive, indecent or otherwise unlawful material which is an invasion of privacy</li>\r\n    <li>The Comments will not be used to solicit or promote business or custom or present commercial activities or unlawful activity.</li>\r\n</ul>\r\n<p>You hereby grant Kincai Group a non-exclusive license to use, reproduce, edit and authorize others to use, reproduce and edit any of your Comments in any and all forms, formats or media.</p>\r\n<h3><b>Hyperlinking to our Content</b></h3>\r\n<p>The following organizations may link to our Website without prior written approval:</p>\r\n<ul>\r\n    <li>Government agencies;</li>\r\n    <li>Search engines;</li>\r\n    <li>News organizations;</li>\r\n    <li>Online directory distributors may link to our Website in the same manner as they hyperlink to the Websites of other listed businesses; and</li>\r\n    <li>System wide Accredited Businesses except soliciting non-profit organizations, charity shopping malls, and charity fundraising groups which may not hyperlink to our Web site.</li>\r\n</ul>\r\n<p>These organizations may link to our home page, to publications or to other Website information so long as the link: (a) is not in any way deceptive; (b) does not falsely imply sponsorship, endorsement or approval of the linking party and its products and/or services; and (c) fits within the context of the linking party&apos;s site.</p>\r\n<p>We may consider and approve other link requests from the following types of organizations:</p>\r\n<ul>\r\n    <li>commonly-known consumer and/or business information sources;</li>\r\n    <li>dot.com community sites;</li>\r\n    <li>associations or other groups representing charities;</li>\r\n    <li>online directory distributors;</li>\r\n    <li>internet portals;</li>\r\n    <li>accounting, law and consulting firms; and</li>\r\n    <li>educational institutions and trade associations.</li>\r\n</ul>\r\n<p>We will approve link requests from these organizations if we decide that: (a) the link would not make us look unfavorably to ourselves or to our accredited businesses; (b) the organization does not have any negative records with us; (c) the benefit to us from the visibility of the hyperlink compensates the absence of Kincai Group; and (d) the link is in the context of general resource information.</p>\r\n<p>These organizations may link to our home page so long as the link: (a) is not in any way deceptive; (b) does not falsely imply sponsorship, endorsement or approval of the linking party and its products or services; and (c) fits within the context of the linking party&apos;s site.</p>\r\n<p>If you are one of the organizations listed in paragraph 2 above and are interested in linking to our website, you must inform us by sending an e-mail to Kincai Group. Please include your name, your organization name, contact information as well as the URL of your site, a list of any URLs from which you intend to link to our Website, and a list of the URLs on our site to which you would like to link. Wait 2-3 weeks for a response.</p>\r\n<p>Approved organizations may hyperlink to our Website as follows:</p>\r\n<ul>\r\n    <li>By use of our corporate name; or</li>\r\n    <li>By use of the uniform resource locator being linked to; or</li>\r\n    <li>By use of any other description of our Website being linked to that makes sense within the context and format of content on the linking party&apos;s site.</li>\r\n</ul>\r\n<p>No use of Kincai Group&apos;s logo or other artwork will be allowed for linking absent a trademark license agreement.</p>\r\n<h3><b>iFrames</b></h3>\r\n<p>Without prior approval and written permission, you may not create frames around our Webpages that alter in any way the visual presentation or appearance of our Website.</p>\r\n<h3><b>Content Liability</b></h3>\r\n<p>We shall not be hold responsible for any content that appears on your Website. You agree to protect and defend us against all claims that is rising on your Website. No link(s) should appear on any Website that may be interpreted as libelous, obscene or criminal, or which infringes, otherwise violates, or advocates the infringement or other violation of, any third party rights.</p>\r\n<h3><b>Your Privacy</b></h3>\r\n<p>Please read our Privacy Policy</p>\r\n<h3><b>Reservation of Rights</b></h3>\r\n<p>We reserve the right to request that you remove all links or any particular link to our Website. You approve to immediately remove all links to our Website upon request. We also reserve the right to amend these terms and conditions and it&apos;s linking policy at any time. By continuously linking to our Website, you agree to be bound to and follow these linking terms and conditions.</p>\r\n<h3><b>Removal of links from our website</b></h3>\r\n<p>If you find any link on our Website that is offensive for any reason, you are free to contact and inform us any moment. We will consider requests to remove links but we are not obligated to or so or to respond to you directly.</p>\r\n<p>We do not ensure that the information on this website is correct, we do not warrant its completeness or accuracy; nor do we promise to ensure that the website remains available or that the material on the website is kept up to date. This Agreement shall begin on the date hereof. Our Terms and Conditions were created with the help of the <a href=\"https://webtool.seosecret.id/terms-and-condition-generator\">Terms and Conditions Generator</a>.</p>\r\n<h3><b>Disclaimer</b></h3>\r\n<p>To the maximum extent permitted by applicable law, we exclude all representations, warranties and conditions relating to our website and the use of this website. Nothing in this disclaimer will:</p>\r\n<ul>\r\n    <li>limit or exclude our or your liability for death or personal injury;</li>\r\n    <li>limit or exclude our or your liability for fraud or fraudulent misrepresentation;</li>\r\n    <li>limit any of our or your liabilities in any way that is not permitted under applicable law; or</li>\r\n    <li>exclude any of our or your liabilities that may not be excluded under applicable law.</li>\r\n</ul>\r\n<p>The limitations and prohibitions of liability set in this Section and elsewhere in this disclaimer: (a) are subject to the preceding paragraph; and (b) govern all liabilities arising under the disclaimer, including liabilities arising in contract, in tort and for breach of statutory duty.</p>\r\n<p>As long as the website and the information and services on the website are provided free of charge, we will not be liable for any loss or damage of any nature.</p>\r\n<hr>\r\n<h2><b>Syarat dan Ketentuan</b> (ID)</h2>\r\n<p>Selamat datang di Kincai Group! Syarat dan ketentuan ini menguraikan peraturan dan ketentuan untuk penggunaan Situs Web Kincai Group, yang terletak di https://kincai77.com.</p>\r\n<p>Dengan mengakses situs web ini kami menganggap Anda menerima syarat dan ketentuan ini. Jangan terus menggunakan Kincai Group jika Anda tidak setuju untuk mengambil semua syarat dan ketentuan yang tercantum di halaman ini.</p>\r\n<p>Terminologi berikut berlaku untuk Syarat dan Ketentuan ini, Pernyataan Privasi dan Pemberitahuan Penafian dan semua Perjanjian: \"Klien\", \"Anda\" dan \"Milik Anda\" mengacu pada Anda, orang yang masuk ke situs web ini dan mematuhi syarat dan ketentuan Perusahaan. \"Perusahaan\", \"Diri Kita\", \"Kita\", \"Kita\" dan \"Kita\", mengacu pada Perusahaan kita. \"Pihak\", \"Pihak\", atau \"Kami\", mengacu pada Klien dan diri kami sendiri. Semua istilah mengacu pada penawaran, penerimaan, dan pertimbangan pembayaran yang diperlukan untuk melakukan proses bantuan kami kepada Klien dengan cara yang paling tepat untuk tujuan yang jelas dalam memenuhi kebutuhan Klien sehubungan dengan penyediaan layanan yang dinyatakan Perusahaan, sesuai dengan dan tunduk pada, hukum yang berlaku di Belanda. Setiap penggunaan terminologi di atas atau kata-kata lain dalam bentuk tunggal, jamak, kapitalisasi dan/atau dia, dianggap dapat dipertukarkan dan oleh karena itu mengacu pada hal yang sama.</p>\r\n<h3><b>Cookie</b></h3>\r\n<p>Kami menggunakan penggunaan cookie. Dengan mengakses Kincai Group, Anda setuju untuk menggunakan cookie sesuai dengan Kebijakan Privasi Kincai Group.</p>\r\n<p>Sebagian besar situs web interaktif menggunakan cookie agar kami dapat mengambil detail pengguna untuk setiap kunjungan. Cookie digunakan oleh situs web kami untuk mengaktifkan fungsionalitas area tertentu agar lebih mudah bagi orang yang mengunjungi situs web kami. Beberapa mitra afiliasi/periklanan kami juga dapat menggunakan cookie.</p>\r\n<h3><b>Lisensi</b></h3>\r\n<p>Kecuali dinyatakan lain, Kincai Group dan/atau pemberi lisensinya memiliki hak kekayaan intelektual untuk semua materi di Kincai Group. Semua hak kekayaan intelektual dilindungi undang-undang. Anda dapat mengakses ini dari Kincai Group untuk penggunaan pribadi Anda dengan tunduk pada batasan yang ditetapkan dalam syarat dan ketentuan ini.</p>\r\n<p>Anda dilarang:</p>\r\n<ul>\r\n    <li>Publikasikan ulang materi dari Kincai Group</li>\r\n    <li>Menjual, menyewakan, atau mensublisensikan materi dari Kincai Group</li>\r\n    <li>Reproduksi, duplikat, atau salin materi dari Kincai Group</li>\r\n    <li>Mendistribusikan ulang konten dari Kincai Group</li>\r\n</ul>\r\n<p>Perjanjian ini akan dimulai pada tanggal perjanjian ini.</p>\r\n<p>Bagian dari situs web ini menawarkan kesempatan bagi pengguna untuk memposting dan bertukar pendapat dan informasi di area situs web tertentu. Kincai Group tidak memfilter, mengedit, menerbitkan, atau meninjau Komentar sebelum kehadirannya di situs web. Komentar tidak mencerminkan pandangan dan pendapat Kincai Group, agen dan/atau afiliasinya. Komentar mencerminkan pandangan dan pendapat orang yang memposting pandangan dan pendapat mereka. Sejauh diizinkan oleh undang-undang yang berlaku, Kincai Group tidak akan bertanggung jawab atas Komentar atau atas tanggung jawab, kerusakan, atau pengeluaran apa pun yang disebabkan dan/atau diderita sebagai akibat dari penggunaan dan/atau pengeposan dan/atau tampilan Komentar pada ini situs web.</p>\r\n<p>Kincai Group berhak memantau semua Komentar dan menghapus Komentar apa pun yang dianggap tidak pantas, menyinggung, atau menyebabkan pelanggaran terhadap Syarat dan Ketentuan ini.</p>\r\n<p>Anda menjamin dan menyatakan bahwa:</p>\r\n<ul>\r\n    <li>Anda berhak memposting Komentar di situs web kami dan memiliki semua lisensi dan persetujuan yang diperlukan untuk melakukannya;</li>\r\n    <li>Komentar tidak melanggar hak kekayaan intelektual apa pun, termasuk namun tidak terbatas pada hak cipta, paten, atau merek dagang pihak ketiga mana pun;</li>\r\n    <li>Komentar tidak mengandung materi yang memfitnah, memfitnah, menyinggung, tidak senonoh atau melanggar hukum yang merupakan pelanggaran privasi</li>\r\n    <li>Komentar tidak akan digunakan untuk meminta atau mempromosikan bisnis atau kebiasaan atau menampilkan aktivitas komersial atau aktivitas yang melanggar hukum.</li>\r\n</ul>\r\n<p>Anda dengan ini memberi Kincai Group lisensi non-eksklusif untuk menggunakan, mereproduksi, mengedit, dan mengizinkan orang lain untuk menggunakan, mereproduksi, dan mengedit Komentar Anda dalam segala bentuk, format, atau media.</p>\r\n<h3><b>Hyperlink ke Konten kami</b></h3>\r\n<p>Organisasi berikut dapat menautkan ke Situs Web kami tanpa persetujuan tertulis sebelumnya:</p>\r\n<ul>\r\n    <li>Agensi pemerintahan;</li>\r\n    <li>Mesin pencari;</li>\r\n    <li>Organisasi berita;</li>\r\n    <li>Distributor direktori online dapat menautkan ke Situs Web kami dengan cara yang sama seperti hyperlink ke Situs Web bisnis terdaftar lainnya; Dan</li>\r\n    <li>Bisnis Terakreditasi di seluruh sistem kecuali meminta organisasi nirlaba, pusat perbelanjaan amal, dan kelompok penggalangan dana amal yang mungkin tidak hyperlink ke situs Web kami.</li>\r\n</ul>\r\n<p>Organisasi-organisasi ini dapat menautkan ke beranda kami, ke publikasi atau ke informasi Situs Web lainnya selama tautan tersebut: (a) sama sekali tidak menipu; (b) tidak menyiratkan sponsor, dukungan, atau persetujuan yang salah dari pihak yang menghubungkan dan produk dan/atau layanannya; dan (c) sesuai dengan konteks situs pihak yang menautkan.</p>\r\n<p>Kami dapat mempertimbangkan dan menyetujui permintaan tautan lain dari jenis organisasi berikut:</p>\r\n<ul>\r\n    <li>sumber informasi konsumen dan/atau bisnis yang umum dikenal;</li>\r\n    <li>situs komunitas dot.com;</li>\r\n    <li>asosiasi atau kelompok lain yang mewakili badan amal;</li>\r\n    <li>distributor direktori online;</li>\r\n    <li>portal internet;</li>\r\n    <li>firma akuntansi, hukum dan konsultasi; Dan</li>\r\n    <li>lembaga pendidikan dan asosiasi perdagangan.</li>\r\n</ul>\r\n<p>Kami akan menyetujui permintaan tautan dari organisasi ini jika kami memutuskan bahwa: (a) tautan tersebut tidak akan membuat kami memandang diri kami sendiri atau bisnis terakreditasi kami secara tidak baik; (b) organisasi tidak memiliki catatan negatif dengan kami; (c) manfaat bagi kami dari visibilitas hyperlink mengkompensasi ketiadaan Kincai Group; dan (d) tautannya ada dalam konteks informasi sumber daya umum.</p>\r\n<p>Organisasi-organisasi ini dapat menautkan ke beranda kami selama tautan tersebut: (a) sama sekali tidak menipu; (b) tidak menyiratkan sponsor, dukungan, atau persetujuan yang salah dari pihak yang menghubungkan dan produk atau layanannya; dan (c) sesuai dengan konteks situs pihak yang menautkan.</p>\r\n<p>Jika Anda adalah salah satu organisasi yang tercantum dalam paragraf 2 di atas dan tertarik untuk menautkan ke situs web kami, Anda harus memberi tahu kami dengan mengirimkan email ke Kincai Group. Harap sertakan nama Anda, nama organisasi Anda, informasi kontak, serta URL situs Anda, daftar URL apa pun yang ingin Anda tautkan ke Situs Web kami, dan daftar URL di situs kami yang Anda inginkan tautan. Tunggu 2-3 minggu untuk tanggapan.</p>\r\n<p>Organisasi yang disetujui dapat melakukan hyperlink ke Situs Web kami sebagai berikut:</p>\r\n<ul>\r\n    <li>Dengan menggunakan nama perusahaan kami; atau</li>\r\n    <li>Dengan menggunakan pencari sumber daya seragam yang ditautkan ke; atau</li>\r\n    <li>Dengan menggunakan deskripsi lain apa pun dari situs web kami yang ditautkan yang masuk akal dalam konteks dan format konten di situs pihak yang menautkan.</li>\r\n</ul>\r\n<p>Penggunaan logo Kincai Group atau karya seni lainnya tidak akan diizinkan untuk menghubungkan jika tidak ada perjanjian lisensi merek dagang.</p>\r\n<h3><b>iFrame</b></h3>\r\n<p>Tanpa persetujuan sebelumnya dan izin tertulis, Anda tidak boleh membuat bingkai di sekitar Halaman Web kami yang dengan cara apa pun mengubah presentasi visual atau tampilan Situs Web kami.</p>\r\n<h3><b>Kewajiban Konten</b></h3>\r\n<p>Kami tidak akan bertanggung jawab atas konten apa pun yang muncul di Situs Web Anda. Anda setuju untuk melindungi dan membela kami dari semua klaim yang muncul di Situs Web Anda. Tidak boleh ada tautan(-tautan) yang muncul di Situs Web mana pun yang dapat ditafsirkan sebagai fitnah, cabul, atau kriminal, atau yang melanggar, sebaliknya melanggar, atau mendukung pelanggaran atau pelanggaran lain terhadap, hak pihak ketiga mana pun.</p>\r\n<h3><b>Privasi Anda</b></h3>\r\n<p>Silakan baca Kebijakan Privasi kami</p>\r\n<h3><b>Reservasi Hak</b></h3>\r\n<p>Kami berhak untuk meminta Anda menghapus semua tautan atau tautan tertentu apa pun ke Situs Web kami. Anda menyetujui untuk segera menghapus semua tautan ke Situs Web kami berdasarkan permintaan. Kami juga berhak mengubah syarat dan ketentuan ini dan kebijakan penautannya kapan saja. Dengan terus menautkan ke Situs Web kami, Anda setuju untuk terikat dan mengikuti syarat dan ketentuan penautan ini.</p>\r\n<h3><b>Penghapusan tautan dari situs web kami</b></h3>\r\n<p>Jika Anda menemukan tautan apa pun di Situs Web kami yang menyinggung karena alasan apa pun, Anda bebas menghubungi dan memberi tahu kami kapan saja. Kami akan mempertimbangkan permintaan untuk menghapus tautan tetapi kami tidak berkewajiban atau lebih atau menanggapi Anda secara langsung.</p>\r\n<p>Kami tidak memastikan bahwa informasi di situs web ini benar, kami tidak menjamin kelengkapan atau keakuratannya; kami juga tidak berjanji untuk memastikan bahwa situs web tetap tersedia atau materi di situs web selalu diperbarui. Perjanjian ini akan dimulai pada tanggal perjanjian ini. Syarat dan Ketentuan kami dibuat dengan bantuan <a href=\"https://webtool.seosecret.id/terms-and-condition-generator\">Generator Terms and Conditions</a>.</p>\r\n<h3><b>Disclaimer</b></h3>\r\n<p>Sejauh diizinkan oleh undang-undang yang berlaku, kami mengecualikan semua representasi, jaminan, dan ketentuan yang berkaitan dengan situs web kami dan penggunaan situs web ini. Tidak ada dalam penafian ini yang akan:</p>\r\n<ul>\r\n    <li>membatasi atau mengecualikan tanggung jawab kami atau Anda atas kematian atau cedera pribadi;</li>\r\n    <li>membatasi atau mengecualikan tanggung jawab kami atau Anda atas penipuan atau pernyataan keliru yang menipu;</li>\r\n    <li>membatasi kewajiban kami atau Anda dengan cara apa pun yang tidak diizinkan berdasarkan hukum yang berlaku; atau</li>\r\n    <li>mengecualikan kewajiban kami atau Anda yang mungkin tidak dikecualikan berdasarkan hukum yang berlaku.</li>\r\n</ul>\r\n<p>Batasan dan larangan tanggung jawab yang diatur dalam Bagian ini dan di tempat lain dalam penafian ini: (a) tunduk pada paragraf sebelumnya; dan (b) mengatur semua kewajiban yang timbul berdasarkan penafian, termasuk kewajiban yang timbul dalam kontrak, gugatan, dan pelanggaran kewajiban hukum.</p>\r\n<p>Selama situs web dan informasi serta layanan di situs web disediakan secara gratis, kami tidak akan bertanggung jawab atas kehilangan atau kerusakan apa pun.</p>', '', '', '2023-07-03', '2023-08-03', 'mimintop');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pasaran`
--

CREATE TABLE `tb_pasaran` (
  `cuid` int(11) NOT NULL,
  `title` text NOT NULL,
  `code` text NOT NULL,
  `time_result` time NOT NULL,
  `time_open` time NOT NULL,
  `close_result` time NOT NULL,
  `step_periode` int(11) NOT NULL,
  `website` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_pasaran`
--

INSERT INTO `tb_pasaran` (`cuid`, `title`, `code`, `time_result`, `time_open`, `close_result`, `step_periode`, `website`, `status`) VALUES
(1, 'SINGAPORE', 'SGP', '11:50:00', '00:00:00', '22:35:00', 1, 'https://www.singaporepools.com.sg', 0),
(2, 'CAMBODIA', 'CB', '17:40:00', '00:00:00', '17:30:00', 1, 'http://68.183.180.117', 0),
(3, 'SYDNEY', 'SYD', '17:50:00', '00:00:00', '17:35:00', 1, 'https://sydney.pools', 0),
(4, 'HONGKONG', 'HK', '23:00:00', '00:00:00', '22:45:00', 1, 'https://hongkong.pools', 0),
(5, 'CHINA', 'CH', '17:35:00', '00:00:00', '17:15:00', 1, 'https://www.chinapools.asia', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pasaran_result`
--

CREATE TABLE `tb_pasaran_result` (
  `cuid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `gameid` int(11) NOT NULL,
  `periode` int(11) NOT NULL,
  `p_result` text NOT NULL,
  `posisi` text NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_pasaran_result`
--

INSERT INTO `tb_pasaran_result` (`cuid`, `pid`, `gameid`, `periode`, `p_result`, `posisi`, `created_date`) VALUES
(1, 2, 1, 1, '1943', '4D', '2024-01-17 16:36:42'),
(2, 2, 1, 1, '943', '3D', '2024-01-17 16:36:42'),
(3, 2, 1, 1, '43', '2D', '2024-01-17 16:36:42'),
(4, 2, 5, 1, '1', 'COLOK BEBAS', '2024-01-17 16:36:42'),
(5, 2, 5, 1, '9', 'COLOK BEBAS', '2024-01-17 16:36:42'),
(6, 2, 5, 1, '4', 'COLOK BEBAS', '2024-01-17 16:36:42'),
(7, 2, 5, 1, '3', 'COLOK BEBAS', '2024-01-17 16:36:42'),
(8, 2, 6, 1, '19', 'COLOK BEBAS 2D', '2024-01-17 16:36:42'),
(9, 2, 6, 1, '14', 'COLOK BEBAS 2D', '2024-01-17 16:36:42'),
(10, 2, 6, 1, '13', 'COLOK BEBAS 2D', '2024-01-17 16:36:42'),
(11, 2, 6, 1, '91', 'COLOK BEBAS 2D', '2024-01-17 16:36:42'),
(12, 2, 6, 1, '94', 'COLOK BEBAS 2D', '2024-01-17 16:36:42'),
(13, 2, 6, 1, '93', 'COLOK BEBAS 2D', '2024-01-17 16:36:42'),
(14, 2, 6, 1, '41', 'COLOK BEBAS 2D', '2024-01-17 16:36:42'),
(15, 2, 6, 1, '49', 'COLOK BEBAS 2D', '2024-01-17 16:36:42'),
(16, 2, 6, 1, '43', 'COLOK BEBAS 2D', '2024-01-17 16:36:42'),
(17, 2, 6, 1, '31', 'COLOK BEBAS 2D', '2024-01-17 16:36:42'),
(18, 2, 6, 1, '39', 'COLOK BEBAS 2D', '2024-01-17 16:36:42'),
(19, 2, 6, 1, '34', 'COLOK BEBAS 2D', '2024-01-17 16:36:42'),
(20, 2, 8, 1, '1', 'AS', '2024-01-17 16:36:42'),
(21, 2, 8, 1, '9', 'KOP', '2024-01-17 16:36:42'),
(22, 2, 8, 1, '4', 'KEPALA', '2024-01-17 16:36:42'),
(23, 2, 8, 1, '3', 'EKOR', '2024-01-17 16:36:42'),
(24, 2, 9, 1, 'TENGAH', 'TENGAH', '2024-01-17 16:36:42'),
(25, 2, 13, 1, 'GANJIL', 'DASAR', '2024-01-17 16:36:42'),
(26, 2, 13, 1, 'BESAR', 'DASAR', '2024-01-17 16:36:42'),
(27, 2, 22, 1, '7', 'Tikus', '2024-01-17 16:36:42'),
(28, 2, 23, 1, 'HOMO', 'DEPAN', '2024-01-17 16:36:42'),
(29, 2, 23, 1, 'SILANG', 'TENGAH', '2024-01-17 16:36:42'),
(30, 2, 23, 1, 'SILANG', 'BELAKANG', '2024-01-17 16:36:42'),
(31, 2, 30, 1, 'KEMBANG', 'DEPAN', '2024-01-17 16:36:42'),
(32, 2, 30, 1, 'KEMPIS', 'TENGAH', '2024-01-17 16:36:42'),
(33, 2, 30, 1, 'KEMPIS', 'BELAKANG', '2024-01-17 16:36:42'),
(34, 3, 1, 1, '0311', '4D', '2024-01-17 16:36:42'),
(35, 3, 1, 1, '311', '3D', '2024-01-17 16:36:42'),
(36, 3, 1, 1, '11', '2D', '2024-01-17 16:36:42'),
(37, 3, 5, 1, '0', 'COLOK BEBAS', '2024-01-17 16:36:42'),
(38, 3, 5, 1, '3', 'COLOK BEBAS', '2024-01-17 16:36:42'),
(39, 3, 5, 1, '1', 'COLOK BEBAS', '2024-01-17 16:36:42'),
(40, 3, 5, 1, '1', 'COLOK BEBAS', '2024-01-17 16:36:42'),
(41, 3, 6, 1, '03', 'COLOK BEBAS 2D', '2024-01-17 16:36:42'),
(42, 3, 6, 1, '01', 'COLOK BEBAS 2D', '2024-01-17 16:36:42'),
(43, 3, 6, 1, '01', 'COLOK BEBAS 2D', '2024-01-17 16:36:42'),
(44, 3, 6, 1, '30', 'COLOK BEBAS 2D', '2024-01-17 16:36:42'),
(45, 3, 6, 1, '31', 'COLOK BEBAS 2D', '2024-01-17 16:36:42'),
(46, 3, 6, 1, '31', 'COLOK BEBAS 2D', '2024-01-17 16:36:42'),
(47, 3, 6, 1, '10', 'COLOK BEBAS 2D', '2024-01-17 16:36:42'),
(48, 3, 6, 1, '13', 'COLOK BEBAS 2D', '2024-01-17 16:36:42'),
(49, 3, 6, 1, '11', 'COLOK BEBAS 2D', '2024-01-17 16:36:42'),
(50, 3, 6, 1, '10', 'COLOK BEBAS 2D', '2024-01-17 16:36:42'),
(51, 3, 6, 1, '13', 'COLOK BEBAS 2D', '2024-01-17 16:36:42'),
(52, 3, 6, 1, '11', 'COLOK BEBAS 2D', '2024-01-17 16:36:42'),
(53, 3, 8, 1, '0', 'AS', '2024-01-17 16:36:42'),
(54, 3, 8, 1, '3', 'KOP', '2024-01-17 16:36:42'),
(55, 3, 8, 1, '1', 'KEPALA', '2024-01-17 16:36:42'),
(56, 3, 8, 1, '1', 'EKOR', '2024-01-17 16:36:42'),
(57, 3, 9, 1, 'TEPI', 'TENGAH', '2024-01-17 16:36:42'),
(58, 3, 13, 1, 'GENAP', 'DASAR', '2024-01-17 16:36:42'),
(59, 3, 13, 1, 'KECIL', 'DASAR', '2024-01-17 16:36:42'),
(60, 3, 22, 1, '7', 'Tikus', '2024-01-17 16:36:42'),
(61, 3, 23, 1, 'SILANG', 'DEPAN', '2024-01-17 16:36:42'),
(62, 3, 23, 1, 'HOMO', 'TENGAH', '2024-01-17 16:36:42'),
(63, 3, 23, 1, 'HOMO', 'BELAKANG', '2024-01-17 16:36:42'),
(64, 3, 30, 1, 'KEMBANG', 'DEPAN', '2024-01-17 16:36:42'),
(65, 3, 30, 1, 'KEMPIS', 'TENGAH', '2024-01-17 16:36:42'),
(66, 3, 30, 1, 'KEMBAR', 'BELAKANG', '2024-01-17 16:36:42'),
(67, 5, 1, 1, '8653', '4D', '2024-01-17 16:36:42'),
(68, 5, 1, 1, '653', '3D', '2024-01-17 16:36:42'),
(69, 5, 1, 1, '53', '2D', '2024-01-17 16:36:42'),
(70, 5, 5, 1, '8', 'COLOK BEBAS', '2024-01-17 16:36:42'),
(71, 5, 5, 1, '6', 'COLOK BEBAS', '2024-01-17 16:36:42'),
(72, 5, 5, 1, '5', 'COLOK BEBAS', '2024-01-17 16:36:42'),
(73, 5, 5, 1, '3', 'COLOK BEBAS', '2024-01-17 16:36:42'),
(74, 5, 6, 1, '86', 'COLOK BEBAS 2D', '2024-01-17 16:36:42'),
(75, 5, 6, 1, '85', 'COLOK BEBAS 2D', '2024-01-17 16:36:42'),
(76, 5, 6, 1, '83', 'COLOK BEBAS 2D', '2024-01-17 16:36:42'),
(77, 5, 6, 1, '68', 'COLOK BEBAS 2D', '2024-01-17 16:36:42'),
(78, 5, 6, 1, '65', 'COLOK BEBAS 2D', '2024-01-17 16:36:42'),
(79, 5, 6, 1, '63', 'COLOK BEBAS 2D', '2024-01-17 16:36:42'),
(80, 5, 6, 1, '58', 'COLOK BEBAS 2D', '2024-01-17 16:36:42'),
(81, 5, 6, 1, '56', 'COLOK BEBAS 2D', '2024-01-17 16:36:42'),
(82, 5, 6, 1, '53', 'COLOK BEBAS 2D', '2024-01-17 16:36:42'),
(83, 5, 6, 1, '38', 'COLOK BEBAS 2D', '2024-01-17 16:36:42'),
(84, 5, 6, 1, '36', 'COLOK BEBAS 2D', '2024-01-17 16:36:42'),
(85, 5, 6, 1, '35', 'COLOK BEBAS 2D', '2024-01-17 16:36:42'),
(86, 5, 8, 1, '8', 'AS', '2024-01-17 16:36:42'),
(87, 5, 8, 1, '6', 'KOP', '2024-01-17 16:36:42'),
(88, 5, 8, 1, '5', 'KEPALA', '2024-01-17 16:36:42'),
(89, 5, 8, 1, '3', 'EKOR', '2024-01-17 16:36:42'),
(90, 5, 9, 1, 'TENGAH', 'TENGAH', '2024-01-17 16:36:42'),
(91, 5, 13, 1, 'GENAP', 'DASAR', '2024-01-17 16:36:42'),
(92, 5, 13, 1, 'BESAR', 'DASAR', '2024-01-17 16:36:42'),
(93, 5, 22, 1, '5', 'Harimau', '2024-01-17 16:36:42'),
(94, 5, 23, 1, 'HOMO', 'DEPAN', '2024-01-17 16:36:42'),
(95, 5, 23, 1, 'SILANG', 'TENGAH', '2024-01-17 16:36:42'),
(96, 5, 23, 1, 'HOMO', 'BELAKANG', '2024-01-17 16:36:42'),
(97, 5, 30, 1, 'KEMPIS', 'DEPAN', '2024-01-17 16:36:42'),
(98, 5, 30, 1, 'KEMPIS', 'TENGAH', '2024-01-17 16:36:42'),
(99, 5, 30, 1, 'KEMPIS', 'BELAKANG', '2024-01-17 16:36:42'),
(100, 1, 1, 1, '1881', '4D', '2024-01-17 16:36:42'),
(101, 1, 1, 1, '881', '3D', '2024-01-17 16:36:42'),
(102, 1, 1, 1, '81', '2D', '2024-01-17 16:36:42'),
(103, 1, 5, 1, '1', 'COLOK BEBAS', '2024-01-17 16:36:42'),
(104, 1, 5, 1, '8', 'COLOK BEBAS', '2024-01-17 16:36:42'),
(105, 1, 5, 1, '8', 'COLOK BEBAS', '2024-01-17 16:36:42'),
(106, 1, 5, 1, '1', 'COLOK BEBAS', '2024-01-17 16:36:42'),
(107, 1, 6, 1, '18', 'COLOK BEBAS 2D', '2024-01-17 16:36:42'),
(108, 1, 6, 1, '18', 'COLOK BEBAS 2D', '2024-01-17 16:36:42'),
(109, 1, 6, 1, '11', 'COLOK BEBAS 2D', '2024-01-17 16:36:42'),
(110, 1, 6, 1, '81', 'COLOK BEBAS 2D', '2024-01-17 16:36:42'),
(111, 1, 6, 1, '88', 'COLOK BEBAS 2D', '2024-01-17 16:36:42'),
(112, 1, 6, 1, '81', 'COLOK BEBAS 2D', '2024-01-17 16:36:42'),
(113, 1, 6, 1, '81', 'COLOK BEBAS 2D', '2024-01-17 16:36:42'),
(114, 1, 6, 1, '88', 'COLOK BEBAS 2D', '2024-01-17 16:36:42'),
(115, 1, 6, 1, '81', 'COLOK BEBAS 2D', '2024-01-17 16:36:42'),
(116, 1, 6, 1, '11', 'COLOK BEBAS 2D', '2024-01-17 16:36:42'),
(117, 1, 6, 1, '18', 'COLOK BEBAS 2D', '2024-01-17 16:36:42'),
(118, 1, 6, 1, '18', 'COLOK BEBAS 2D', '2024-01-17 16:36:42'),
(119, 1, 8, 1, '1', 'AS', '2024-01-17 16:36:42'),
(120, 1, 8, 1, '8', 'KOP', '2024-01-17 16:36:42'),
(121, 1, 8, 1, '8', 'KEPALA', '2024-01-17 16:36:42'),
(122, 1, 8, 1, '1', 'EKOR', '2024-01-17 16:36:42'),
(123, 1, 9, 1, 'TEPI', 'TENGAH', '2024-01-17 16:36:42'),
(124, 1, 13, 1, 'GANJIL', 'DASAR', '2024-01-17 16:36:42'),
(125, 1, 13, 1, 'BESAR', 'DASAR', '2024-01-17 16:36:42'),
(126, 1, 22, 1, '9', 'Anjing', '2024-01-17 16:36:42'),
(127, 1, 23, 1, 'SILANG', 'DEPAN', '2024-01-17 16:36:42'),
(128, 1, 23, 1, 'HOMO', 'TENGAH', '2024-01-17 16:36:42'),
(129, 1, 23, 1, 'SILANG', 'BELAKANG', '2024-01-17 16:36:42'),
(130, 1, 30, 1, 'KEMBANG', 'DEPAN', '2024-01-17 16:36:42'),
(131, 1, 30, 1, 'KEMBAR', 'TENGAH', '2024-01-17 16:36:42'),
(132, 1, 30, 1, 'KEMPIS', 'BELAKANG', '2024-01-17 16:36:42'),
(133, 4, 1, 1, '5702', '4D', '2024-01-17 16:36:42'),
(134, 4, 1, 1, '702', '3D', '2024-01-17 16:36:42'),
(135, 4, 1, 1, '02', '2D', '2024-01-17 16:36:42'),
(136, 4, 5, 1, '5', 'COLOK BEBAS', '2024-01-17 16:36:42'),
(137, 4, 5, 1, '7', 'COLOK BEBAS', '2024-01-17 16:36:42'),
(138, 4, 5, 1, '0', 'COLOK BEBAS', '2024-01-17 16:36:42'),
(139, 4, 5, 1, '2', 'COLOK BEBAS', '2024-01-17 16:36:42'),
(140, 4, 6, 1, '57', 'COLOK BEBAS 2D', '2024-01-17 16:36:42'),
(141, 4, 6, 1, '50', 'COLOK BEBAS 2D', '2024-01-17 16:36:42'),
(142, 4, 6, 1, '52', 'COLOK BEBAS 2D', '2024-01-17 16:36:42'),
(143, 4, 6, 1, '75', 'COLOK BEBAS 2D', '2024-01-17 16:36:42'),
(144, 4, 6, 1, '70', 'COLOK BEBAS 2D', '2024-01-17 16:36:42'),
(145, 4, 6, 1, '72', 'COLOK BEBAS 2D', '2024-01-17 16:36:42'),
(146, 4, 6, 1, '05', 'COLOK BEBAS 2D', '2024-01-17 16:36:42'),
(147, 4, 6, 1, '07', 'COLOK BEBAS 2D', '2024-01-17 16:36:42'),
(148, 4, 6, 1, '02', 'COLOK BEBAS 2D', '2024-01-17 16:36:42'),
(149, 4, 6, 1, '25', 'COLOK BEBAS 2D', '2024-01-17 16:36:42'),
(150, 4, 6, 1, '27', 'COLOK BEBAS 2D', '2024-01-17 16:36:42'),
(151, 4, 6, 1, '20', 'COLOK BEBAS 2D', '2024-01-17 16:36:42'),
(152, 4, 8, 1, '5', 'AS', '2024-01-17 16:36:42'),
(153, 4, 8, 1, '7', 'KOP', '2024-01-17 16:36:42'),
(154, 4, 8, 1, '0', 'KEPALA', '2024-01-17 16:36:42'),
(155, 4, 8, 1, '2', 'EKOR', '2024-01-17 16:36:42'),
(156, 4, 9, 1, 'TEPI', 'TENGAH', '2024-01-17 16:36:42'),
(157, 4, 13, 1, 'GENAP', 'DASAR', '2024-01-17 16:36:42'),
(158, 4, 13, 1, 'KECIL', 'DASAR', '2024-01-17 16:36:42'),
(159, 4, 22, 1, '9', 'Anjing', '2024-01-17 16:36:42'),
(160, 4, 23, 1, 'HOMO', 'DEPAN', '2024-01-17 16:36:42'),
(161, 4, 23, 1, 'SILANG', 'TENGAH', '2024-01-17 16:36:42'),
(162, 4, 23, 1, 'HOMO', 'BELAKANG', '2024-01-17 16:36:42'),
(163, 4, 30, 1, 'KEMBANG', 'DEPAN', '2024-01-17 16:36:42'),
(164, 4, 30, 1, 'KEMPIS', 'TENGAH', '2024-01-17 16:36:42'),
(165, 4, 30, 1, 'KEMBANG', 'BELAKANG', '2024-01-17 16:36:42'),
(166, 2, 1, 2, '0177', '4D', '1970-01-01 00:00:00'),
(167, 2, 1, 2, '177', '3D', '1970-01-01 00:00:00'),
(168, 2, 1, 2, '77', '2D', '1970-01-01 00:00:00'),
(169, 2, 5, 2, '0', 'COLOK BEBAS', '1970-01-01 00:00:00'),
(170, 2, 5, 2, '1', 'COLOK BEBAS', '1970-01-01 00:00:00'),
(171, 2, 5, 2, '7', 'COLOK BEBAS', '1970-01-01 00:00:00'),
(172, 2, 5, 2, '7', 'COLOK BEBAS', '1970-01-01 00:00:00'),
(173, 2, 6, 2, '01', 'COLOK BEBAS 2D', '1970-01-01 00:00:00'),
(174, 2, 6, 2, '07', 'COLOK BEBAS 2D', '1970-01-01 00:00:00'),
(175, 2, 6, 2, '07', 'COLOK BEBAS 2D', '1970-01-01 00:00:00'),
(176, 2, 6, 2, '10', 'COLOK BEBAS 2D', '1970-01-01 00:00:00'),
(177, 2, 6, 2, '17', 'COLOK BEBAS 2D', '1970-01-01 00:00:00'),
(178, 2, 6, 2, '17', 'COLOK BEBAS 2D', '1970-01-01 00:00:00'),
(179, 2, 6, 2, '70', 'COLOK BEBAS 2D', '1970-01-01 00:00:00'),
(180, 2, 6, 2, '71', 'COLOK BEBAS 2D', '1970-01-01 00:00:00'),
(181, 2, 6, 2, '77', 'COLOK BEBAS 2D', '1970-01-01 00:00:00'),
(182, 2, 6, 2, '70', 'COLOK BEBAS 2D', '1970-01-01 00:00:00'),
(183, 2, 6, 2, '71', 'COLOK BEBAS 2D', '1970-01-01 00:00:00'),
(184, 2, 6, 2, '77', 'COLOK BEBAS 2D', '1970-01-01 00:00:00'),
(185, 2, 8, 2, '0', 'AS', '1970-01-01 00:00:00'),
(186, 2, 8, 2, '1', 'KOP', '1970-01-01 00:00:00'),
(187, 2, 8, 2, '7', 'KEPALA', '1970-01-01 00:00:00'),
(188, 2, 8, 2, '7', 'EKOR', '1970-01-01 00:00:00'),
(189, 2, 9, 2, 'TEPI', 'TENGAH', '1970-01-01 00:00:00'),
(190, 2, 13, 2, 'GANJIL', 'DASAR', '1970-01-01 00:00:00'),
(191, 2, 13, 2, 'BESAR', 'DASAR', '1970-01-01 00:00:00'),
(192, 2, 22, 2, '5', 'Harimau', '1970-01-01 00:00:00'),
(193, 2, 23, 2, 'SILANG', 'DEPAN', '1970-01-01 00:00:00'),
(194, 2, 23, 2, 'HOMO', 'TENGAH', '1970-01-01 00:00:00'),
(195, 2, 23, 2, 'HOMO', 'BELAKANG', '1970-01-01 00:00:00'),
(196, 2, 30, 2, 'KEMBANG', 'DEPAN', '1970-01-01 00:00:00'),
(197, 2, 30, 2, 'KEMBANG', 'TENGAH', '1970-01-01 00:00:00'),
(198, 2, 30, 2, 'KEMBAR', 'BELAKANG', '1970-01-01 00:00:00'),
(199, 3, 1, 2, '1173', '4D', '1970-01-01 00:00:00'),
(200, 3, 1, 2, '173', '3D', '1970-01-01 00:00:00'),
(201, 3, 1, 2, '73', '2D', '1970-01-01 00:00:00'),
(202, 3, 5, 2, '1', 'COLOK BEBAS', '1970-01-01 00:00:00'),
(203, 3, 5, 2, '1', 'COLOK BEBAS', '1970-01-01 00:00:00'),
(204, 3, 5, 2, '7', 'COLOK BEBAS', '1970-01-01 00:00:00'),
(205, 3, 5, 2, '3', 'COLOK BEBAS', '1970-01-01 00:00:00'),
(206, 3, 6, 2, '11', 'COLOK BEBAS 2D', '1970-01-01 00:00:00'),
(207, 3, 6, 2, '17', 'COLOK BEBAS 2D', '1970-01-01 00:00:00'),
(208, 3, 6, 2, '13', 'COLOK BEBAS 2D', '1970-01-01 00:00:00'),
(209, 3, 6, 2, '11', 'COLOK BEBAS 2D', '1970-01-01 00:00:00'),
(210, 3, 6, 2, '17', 'COLOK BEBAS 2D', '1970-01-01 00:00:00'),
(211, 3, 6, 2, '13', 'COLOK BEBAS 2D', '1970-01-01 00:00:00'),
(212, 3, 6, 2, '71', 'COLOK BEBAS 2D', '1970-01-01 00:00:00'),
(213, 3, 6, 2, '71', 'COLOK BEBAS 2D', '1970-01-01 00:00:00'),
(214, 3, 6, 2, '73', 'COLOK BEBAS 2D', '1970-01-01 00:00:00'),
(215, 3, 6, 2, '31', 'COLOK BEBAS 2D', '1970-01-01 00:00:00'),
(216, 3, 6, 2, '31', 'COLOK BEBAS 2D', '1970-01-01 00:00:00'),
(217, 3, 6, 2, '37', 'COLOK BEBAS 2D', '1970-01-01 00:00:00'),
(218, 3, 8, 2, '1', 'AS', '1970-01-01 00:00:00'),
(219, 3, 8, 2, '1', 'KOP', '1970-01-01 00:00:00'),
(220, 3, 8, 2, '7', 'KEPALA', '1970-01-01 00:00:00'),
(221, 3, 8, 2, '3', 'EKOR', '1970-01-01 00:00:00'),
(222, 3, 9, 2, 'TENGAH', 'TENGAH', '1970-01-01 00:00:00'),
(223, 3, 13, 2, 'GANJIL', 'DASAR', '1970-01-01 00:00:00'),
(224, 3, 13, 2, 'KECIL', 'DASAR', '1970-01-01 00:00:00'),
(225, 3, 22, 2, '1', 'Kuda', '1970-01-01 00:00:00'),
(226, 3, 23, 2, 'HOMO', 'DEPAN', '1970-01-01 00:00:00'),
(227, 3, 23, 2, 'HOMO', 'TENGAH', '1970-01-01 00:00:00'),
(228, 3, 23, 2, 'HOMO', 'BELAKANG', '1970-01-01 00:00:00'),
(229, 3, 30, 2, 'KEMBAR', 'DEPAN', '1970-01-01 00:00:00'),
(230, 3, 30, 2, 'KEMBANG', 'TENGAH', '1970-01-01 00:00:00'),
(231, 3, 30, 2, 'KEMPIS', 'BELAKANG', '1970-01-01 00:00:00'),
(232, 5, 1, 2, '1046', '4D', '1970-01-01 00:00:00'),
(233, 5, 1, 2, '046', '3D', '1970-01-01 00:00:00'),
(234, 5, 1, 2, '46', '2D', '1970-01-01 00:00:00'),
(235, 5, 5, 2, '1', 'COLOK BEBAS', '1970-01-01 00:00:00'),
(236, 5, 5, 2, '0', 'COLOK BEBAS', '1970-01-01 00:00:00'),
(237, 5, 5, 2, '4', 'COLOK BEBAS', '1970-01-01 00:00:00'),
(238, 5, 5, 2, '6', 'COLOK BEBAS', '1970-01-01 00:00:00'),
(239, 5, 6, 2, '10', 'COLOK BEBAS 2D', '1970-01-01 00:00:00'),
(240, 5, 6, 2, '14', 'COLOK BEBAS 2D', '1970-01-01 00:00:00'),
(241, 5, 6, 2, '16', 'COLOK BEBAS 2D', '1970-01-01 00:00:00'),
(242, 5, 6, 2, '01', 'COLOK BEBAS 2D', '1970-01-01 00:00:00'),
(243, 5, 6, 2, '04', 'COLOK BEBAS 2D', '1970-01-01 00:00:00'),
(244, 5, 6, 2, '06', 'COLOK BEBAS 2D', '1970-01-01 00:00:00'),
(245, 5, 6, 2, '41', 'COLOK BEBAS 2D', '1970-01-01 00:00:00'),
(246, 5, 6, 2, '40', 'COLOK BEBAS 2D', '1970-01-01 00:00:00'),
(247, 5, 6, 2, '46', 'COLOK BEBAS 2D', '1970-01-01 00:00:00'),
(248, 5, 6, 2, '61', 'COLOK BEBAS 2D', '1970-01-01 00:00:00'),
(249, 5, 6, 2, '60', 'COLOK BEBAS 2D', '1970-01-01 00:00:00'),
(250, 5, 6, 2, '64', 'COLOK BEBAS 2D', '1970-01-01 00:00:00'),
(251, 5, 8, 2, '1', 'AS', '1970-01-01 00:00:00'),
(252, 5, 8, 2, '0', 'KOP', '1970-01-01 00:00:00'),
(253, 5, 8, 2, '4', 'KEPALA', '1970-01-01 00:00:00'),
(254, 5, 8, 2, '6', 'EKOR', '1970-01-01 00:00:00'),
(255, 5, 9, 2, 'TENGAH', 'TENGAH', '1970-01-01 00:00:00'),
(256, 5, 13, 2, 'GANJIL', 'DASAR', '1970-01-01 00:00:00'),
(257, 5, 13, 2, 'KECIL', 'DASAR', '1970-01-01 00:00:00'),
(258, 5, 22, 2, '10', 'Ayam', '1970-01-01 00:00:00'),
(259, 5, 23, 2, 'SILANG', 'DEPAN', '1970-01-01 00:00:00'),
(260, 5, 23, 2, 'HOMO', 'TENGAH', '1970-01-01 00:00:00'),
(261, 5, 23, 2, 'HOMO', 'BELAKANG', '1970-01-01 00:00:00'),
(262, 5, 30, 2, 'KEMPIS', 'DEPAN', '1970-01-01 00:00:00'),
(263, 5, 30, 2, 'KEMBANG', 'TENGAH', '1970-01-01 00:00:00'),
(264, 5, 30, 2, 'KEMBANG', 'BELAKANG', '1970-01-01 00:00:00'),
(265, 1, 1, 2, '0344', '4D', '1970-01-01 00:00:00'),
(266, 1, 1, 2, '344', '3D', '1970-01-01 00:00:00'),
(267, 1, 1, 2, '44', '2D', '1970-01-01 00:00:00'),
(268, 1, 5, 2, '0', 'COLOK BEBAS', '1970-01-01 00:00:00'),
(269, 1, 5, 2, '3', 'COLOK BEBAS', '1970-01-01 00:00:00'),
(270, 1, 5, 2, '4', 'COLOK BEBAS', '1970-01-01 00:00:00'),
(271, 1, 5, 2, '4', 'COLOK BEBAS', '1970-01-01 00:00:00'),
(272, 1, 6, 2, '03', 'COLOK BEBAS 2D', '1970-01-01 00:00:00'),
(273, 1, 6, 2, '04', 'COLOK BEBAS 2D', '1970-01-01 00:00:00'),
(274, 1, 6, 2, '04', 'COLOK BEBAS 2D', '1970-01-01 00:00:00'),
(275, 1, 6, 2, '30', 'COLOK BEBAS 2D', '1970-01-01 00:00:00'),
(276, 1, 6, 2, '34', 'COLOK BEBAS 2D', '1970-01-01 00:00:00'),
(277, 1, 6, 2, '34', 'COLOK BEBAS 2D', '1970-01-01 00:00:00'),
(278, 1, 6, 2, '40', 'COLOK BEBAS 2D', '1970-01-01 00:00:00'),
(279, 1, 6, 2, '43', 'COLOK BEBAS 2D', '1970-01-01 00:00:00'),
(280, 1, 6, 2, '44', 'COLOK BEBAS 2D', '1970-01-01 00:00:00'),
(281, 1, 6, 2, '40', 'COLOK BEBAS 2D', '1970-01-01 00:00:00'),
(282, 1, 6, 2, '43', 'COLOK BEBAS 2D', '1970-01-01 00:00:00'),
(283, 1, 6, 2, '44', 'COLOK BEBAS 2D', '1970-01-01 00:00:00'),
(284, 1, 8, 2, '0', 'AS', '1970-01-01 00:00:00'),
(285, 1, 8, 2, '3', 'KOP', '1970-01-01 00:00:00'),
(286, 1, 8, 2, '4', 'KEPALA', '1970-01-01 00:00:00'),
(287, 1, 8, 2, '4', 'EKOR', '1970-01-01 00:00:00'),
(288, 1, 9, 2, 'TENGAH', 'TENGAH', '1970-01-01 00:00:00'),
(289, 1, 13, 2, 'GENAP', 'DASAR', '1970-01-01 00:00:00'),
(290, 1, 13, 2, 'BESAR', 'DASAR', '1970-01-01 00:00:00'),
(291, 1, 22, 2, '8', 'Babi', '1970-01-01 00:00:00'),
(292, 1, 23, 2, 'SILANG', 'DEPAN', '1970-01-01 00:00:00'),
(293, 1, 23, 2, 'SILANG', 'TENGAH', '1970-01-01 00:00:00'),
(294, 1, 23, 2, 'HOMO', 'BELAKANG', '1970-01-01 00:00:00'),
(295, 1, 30, 2, 'KEMBANG', 'DEPAN', '1970-01-01 00:00:00'),
(296, 1, 30, 2, 'KEMBANG', 'TENGAH', '1970-01-01 00:00:00'),
(297, 1, 30, 2, 'KEMBAR', 'BELAKANG', '1970-01-01 00:00:00'),
(298, 4, 1, 2, '6376', '4D', '1970-01-01 00:00:00'),
(299, 4, 1, 2, '376', '3D', '1970-01-01 00:00:00'),
(300, 4, 1, 2, '76', '2D', '1970-01-01 00:00:00'),
(301, 4, 5, 2, '6', 'COLOK BEBAS', '1970-01-01 00:00:00'),
(302, 4, 5, 2, '3', 'COLOK BEBAS', '1970-01-01 00:00:00'),
(303, 4, 5, 2, '7', 'COLOK BEBAS', '1970-01-01 00:00:00'),
(304, 4, 5, 2, '6', 'COLOK BEBAS', '1970-01-01 00:00:00'),
(305, 4, 6, 2, '63', 'COLOK BEBAS 2D', '1970-01-01 00:00:00'),
(306, 4, 6, 2, '67', 'COLOK BEBAS 2D', '1970-01-01 00:00:00'),
(307, 4, 6, 2, '66', 'COLOK BEBAS 2D', '1970-01-01 00:00:00'),
(308, 4, 6, 2, '36', 'COLOK BEBAS 2D', '1970-01-01 00:00:00'),
(309, 4, 6, 2, '37', 'COLOK BEBAS 2D', '1970-01-01 00:00:00'),
(310, 4, 6, 2, '36', 'COLOK BEBAS 2D', '1970-01-01 00:00:00'),
(311, 4, 6, 2, '76', 'COLOK BEBAS 2D', '1970-01-01 00:00:00'),
(312, 4, 6, 2, '73', 'COLOK BEBAS 2D', '1970-01-01 00:00:00'),
(313, 4, 6, 2, '76', 'COLOK BEBAS 2D', '1970-01-01 00:00:00'),
(314, 4, 6, 2, '66', 'COLOK BEBAS 2D', '1970-01-01 00:00:00'),
(315, 4, 6, 2, '63', 'COLOK BEBAS 2D', '1970-01-01 00:00:00'),
(316, 4, 6, 2, '67', 'COLOK BEBAS 2D', '1970-01-01 00:00:00'),
(317, 4, 8, 2, '6', 'AS', '1970-01-01 00:00:00'),
(318, 4, 8, 2, '3', 'KOP', '1970-01-01 00:00:00'),
(319, 4, 8, 2, '7', 'KEPALA', '1970-01-01 00:00:00'),
(320, 4, 8, 2, '6', 'EKOR', '1970-01-01 00:00:00'),
(321, 4, 9, 2, 'TEPI', 'TENGAH', '1970-01-01 00:00:00'),
(322, 4, 13, 2, 'GENAP', 'DASAR', '1970-01-01 00:00:00'),
(323, 4, 13, 2, 'KECIL', 'DASAR', '1970-01-01 00:00:00'),
(324, 4, 22, 2, '4', 'Kelinci', '1970-01-01 00:00:00'),
(325, 4, 23, 2, 'SILANG', 'DEPAN', '1970-01-01 00:00:00'),
(326, 4, 23, 2, 'HOMO', 'TENGAH', '1970-01-01 00:00:00'),
(327, 4, 23, 2, 'SILANG', 'BELAKANG', '1970-01-01 00:00:00'),
(328, 4, 30, 2, 'KEMPIS', 'DEPAN', '1970-01-01 00:00:00'),
(329, 4, 30, 2, 'KEMBANG', 'TENGAH', '1970-01-01 00:00:00'),
(330, 4, 30, 2, 'KEMPIS', 'BELAKANG', '1970-01-01 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_periode`
--

CREATE TABLE `tb_periode` (
  `cuid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `no` int(11) NOT NULL,
  `code` text NOT NULL,
  `created` date NOT NULL,
  `result` text NOT NULL,
  `created_date` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_periode`
--

INSERT INTO `tb_periode` (`cuid`, `pid`, `no`, `code`, `created`, `result`, `created_date`, `status`) VALUES
(1, 2, 1, 'CB', '2024-01-17', '1943', '2024-01-17 16:36:42', 0),
(2, 3, 1, 'SYD', '2024-01-17', '0311', '2024-01-17 16:36:42', 0),
(3, 5, 1, 'CH', '2024-01-17', '8653', '2024-01-17 16:36:42', 0),
(4, 1, 1, 'SGP', '2024-01-17', '1881', '2024-01-17 16:36:42', 0),
(5, 4, 1, 'HK', '2024-01-17', '5702', '2024-01-17 16:36:42', 0),
(6, 2, 2, 'CB', '2024-01-17', '0177', '1970-01-01 00:00:00', 0),
(7, 3, 2, 'SYD', '2024-01-17', '1173', '1970-01-01 00:00:00', 0),
(8, 5, 2, 'CH', '2024-01-17', '1046', '1970-01-01 00:00:00', 0),
(9, 1, 2, 'SGP', '2024-01-17', '0344', '1970-01-01 00:00:00', 0),
(10, 4, 2, 'HK', '2024-01-17', '6376', '1970-01-01 00:00:00', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_popup`
--

CREATE TABLE `tb_popup` (
  `cuid` int(11) NOT NULL,
  `ip` text NOT NULL,
  `date` date NOT NULL,
  `status` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_popup`
--

INSERT INTO `tb_popup` (`cuid`, `ip`, `date`, `status`) VALUES
(1, '104.28.245.126', '2023-12-31', '0'),
(2, '103.219.251.246', '2023-12-31', '0'),
(3, '182.2.165.206', '2023-12-31', '0'),
(4, '213.180.203.135', '2023-12-31', '0'),
(5, '87.250.224.46', '2023-12-31', '0'),
(6, '43.134.89.111', '2023-12-31', '0'),
(7, '213.180.203.221', '2023-12-31', '0'),
(8, '66.249.79.230', '2023-12-31', '0'),
(9, '66.249.79.229', '2023-12-31', '0'),
(10, '123.60.68.42', '2023-12-31', '0'),
(11, '222.124.100.43', '2024-01-01', '1'),
(12, '43.159.129.209', '2024-01-01', '0'),
(13, '67.220.86.160', '2024-01-01', '0'),
(14, '45.62.164.18', '2024-01-01', '0'),
(15, '213.180.203.186', '2024-01-01', '0'),
(16, '5.255.231.66', '2024-01-01', '0'),
(17, '104.28.213.127', '2024-01-01', '0'),
(18, '104.28.213.125', '2024-01-01', '0'),
(19, '5.133.192.187', '2024-01-01', '0'),
(20, '87.250.224.17', '2024-01-01', '0'),
(21, '5.255.231.23', '2024-01-01', '0'),
(22, '182.42.105.144', '2024-01-01', '0'),
(23, '95.108.213.80', '2024-01-01', '0'),
(24, '13.57.205.110', '2024-01-01', '0'),
(25, '87.250.224.223', '2024-01-01', '0'),
(26, '104.28.213.124', '2024-01-01', '0'),
(27, '43.133.66.151', '2024-01-01', '0'),
(28, '66.249.79.231', '2024-01-01', '0'),
(29, '5.255.231.186', '2024-01-01', '0'),
(30, '185.45.92.158', '2024-01-01', '0'),
(31, '43.153.110.177', '2024-01-01', '0'),
(32, '182.3.51.89', '2024-01-01', '0'),
(33, '165.232.163.242', '2024-01-01', '0'),
(34, '104.28.245.125', '2024-01-01', '0'),
(35, '80.120.129.210', '2024-01-01', '0'),
(36, '104.28.245.124', '2024-01-01', '0'),
(37, '185.253.96.15', '2024-01-01', '0'),
(38, '162.142.125.220', '2024-01-01', '0'),
(39, '167.94.138.124', '2024-01-01', '0'),
(40, '104.28.213.126', '2024-01-01', '0'),
(41, '77.111.244.45', '2024-01-01', '0'),
(42, '38.109.113.154', '2024-01-01', '0'),
(43, '182.42.110.255', '2024-01-01', '0'),
(44, '3.15.161.230', '2024-01-01', '0'),
(45, '170.106.101.31', '2024-01-01', '0'),
(46, '18.202.78.101', '2024-01-01', '0'),
(47, '51.222.253.15', '2024-01-01', '0'),
(48, '43.159.128.68', '2024-01-02', '0'),
(49, '128.199.14.245', '2024-01-02', '0'),
(50, '3.255.76.180', '2024-01-02', '0'),
(51, '3.79.116.55', '2024-01-02', '0'),
(52, '91.92.242.66', '2024-01-02', '0'),
(53, '170.106.159.160', '2024-01-02', '0'),
(54, '202.43.172.4', '2024-01-02', '0'),
(55, '43.131.44.218', '2024-01-02', '0'),
(56, '222.79.104.23', '2024-01-02', '0'),
(57, '35.230.123.153', '2024-01-02', '0'),
(58, '170.64.153.181', '2024-01-02', '0'),
(59, '5.255.231.124', '2024-01-02', '0'),
(60, '182.44.10.67', '2024-01-02', '0'),
(61, '213.180.203.20', '2024-01-02', '0'),
(62, '95.161.221.32', '2024-01-02', '0'),
(63, '95.108.213.111', '2024-01-02', '0'),
(64, '87.250.224.49', '2024-01-02', '0'),
(65, '5.255.231.50', '2024-01-02', '0'),
(66, '66.249.73.35', '2024-01-02', '0'),
(67, '34.222.29.72', '2024-01-02', '0'),
(68, '35.92.110.210', '2024-01-02', '0'),
(69, '35.90.121.234', '2024-01-02', '0'),
(70, '18.246.215.170', '2024-01-02', '0'),
(71, '66.249.73.37', '2024-01-02', '0'),
(72, '199.45.154.16', '2024-01-02', '0'),
(73, '5.255.231.43', '2024-01-02', '0'),
(74, '213.180.203.82', '2024-01-02', '0'),
(75, '170.106.171.77', '2024-01-02', '0'),
(76, '199.45.155.19', '2024-01-03', '0'),
(77, '66.249.73.36', '2024-01-03', '0'),
(78, '170.106.82.193', '2024-01-03', '0'),
(79, '87.250.224.202', '2024-01-03', '0'),
(80, '158.69.247.77', '2024-01-03', '0'),
(81, '189.41.163.150', '2024-01-03', '0'),
(82, '176.53.223.120', '2024-01-03', '0'),
(83, '43.128.68.127', '2024-01-03', '0'),
(84, '195.201.41.238', '2024-01-03', '0'),
(85, '43.157.40.112', '2024-01-03', '0'),
(86, '3.252.191.169', '2024-01-03', '0'),
(87, '52.212.220.87', '2024-01-03', '0'),
(88, '170.64.137.230', '2024-01-03', '0'),
(89, '170.64.137.230', '2024-01-03', '0'),
(90, '95.177.163.4', '2024-01-03', '0'),
(91, '167.172.53.115', '2024-01-03', '0'),
(92, '43.135.149.154', '2024-01-03', '0'),
(93, '111.207.155.211', '2024-01-03', '0'),
(94, '89.104.110.16', '2024-01-03', '0'),
(95, '15.204.182.106', '2024-01-03', '0'),
(96, '178.128.26.136', '2024-01-03', '0'),
(97, '43.159.128.149', '2024-01-03', '0'),
(98, '106.119.167.146', '2024-01-03', '0'),
(99, '164.52.36.218', '2024-01-03', '0'),
(100, '20.229.51.198', '2024-01-03', '0'),
(101, '104.28.213.128', '2024-01-03', '0'),
(102, '104.28.245.127', '2024-01-03', '0'),
(103, '104.28.159.130', '2024-01-03', '0'),
(104, '139.99.4.107', '2024-01-03', '0'),
(105, '87.236.176.168', '2024-01-03', '0'),
(106, '152.228.231.151', '2024-01-03', '0'),
(107, '5.164.29.116', '2024-01-03', '0'),
(108, '129.153.125.162', '2024-01-03', '0'),
(109, '198.13.62.122', '2024-01-03', '0'),
(110, '35.184.245.213', '2024-01-03', '0'),
(111, '45.56.71.92', '2024-01-03', '0'),
(112, '23.111.114.116', '2024-01-03', '0'),
(113, '149.50.210.216', '2024-01-03', '0'),
(114, '211.176.125.70', '2024-01-03', '0'),
(115, '51.159.103.13', '2024-01-03', '0'),
(116, '45.90.62.239', '2024-01-03', '0'),
(117, '8.41.221.49', '2024-01-03', '0'),
(118, '112.30.180.142', '2024-01-03', '0'),
(119, '87.236.176.85', '2024-01-03', '0'),
(120, '72.44.41.245', '2024-01-03', '0'),
(121, '106.202.38.124', '2024-01-03', '0'),
(122, '223.113.128.172', '2024-01-03', '0'),
(123, '176.53.216.23', '2024-01-03', '0'),
(124, '52.80.214.58', '2024-01-03', '0'),
(125, '27.47.24.80', '2024-01-03', '0'),
(126, '23.95.156.237', '2024-01-03', '0'),
(127, '68.183.179.149', '2024-01-03', '0'),
(128, '180.242.69.82', '2024-01-03', '0'),
(129, '104.28.157.198', '2024-01-03', '0'),
(130, '91.92.241.173', '2024-01-03', '0'),
(131, '51.254.199.11', '2024-01-03', '0'),
(132, '119.12.167.135', '2024-01-03', '0'),
(133, '45.139.36.142', '2024-01-03', '0'),
(134, '3.87.59.44', '2024-01-03', '0'),
(135, '43.131.248.209', '2024-01-03', '0'),
(136, '173.255.236.99', '2024-01-03', '0'),
(137, '146.70.132.4', '2024-01-03', '0'),
(138, '109.69.66.101', '2024-01-03', '0'),
(139, '34.94.89.222', '2024-01-03', '0'),
(140, '159.138.11.130', '2024-01-03', '0'),
(141, '176.9.17.6', '2024-01-03', '0'),
(142, '163.172.166.36', '2024-01-03', '0'),
(143, '46.4.33.48', '2024-01-03', '0'),
(144, '51.15.208.37', '2024-01-03', '0'),
(145, '34.222.23.24', '2024-01-03', '0'),
(146, '51.75.141.254', '2024-01-03', '0'),
(147, '103.55.39.189', '2024-01-03', '0'),
(148, '104.244.209.74', '2024-01-03', '0'),
(149, '35.180.11.33', '2024-01-03', '0'),
(150, '3.76.208.251', '2024-01-03', '0'),
(151, '172.241.131.137', '2024-01-03', '0'),
(152, '193.239.84.60', '2024-01-03', '0'),
(153, '15.160.46.143', '2024-01-03', '0'),
(154, '176.53.220.110', '2024-01-03', '0'),
(155, '146.190.197.169', '2024-01-03', '0'),
(156, '164.90.241.135', '2024-01-03', '0'),
(157, '38.132.118.70', '2024-01-03', '0'),
(158, '203.33.203.148', '2024-01-03', '0'),
(159, '218.95.234.229', '2024-01-03', '0'),
(160, '123.158.50.91', '2024-01-04', '0'),
(161, '45.87.249.1', '2024-01-04', '0'),
(162, '104.28.158.134', '2024-01-04', '0'),
(163, '43.133.77.230', '2024-01-04', '0'),
(164, '121.5.231.252', '2024-01-04', '0'),
(165, '193.148.19.3', '2024-01-04', '0'),
(166, '180.242.69.48', '2024-01-04', '0'),
(167, '54.36.149.59', '2024-01-04', '0'),
(168, '54.36.149.9', '2024-01-04', '0'),
(169, '20.89.240.158', '2024-01-04', '0'),
(170, '104.28.156.226', '2024-01-04', '0'),
(171, '59.13.123.221', '2024-01-04', '0'),
(172, '66.249.71.2', '2024-01-04', '0'),
(173, '66.249.79.205', '2024-01-04', '0'),
(174, '66.249.71.3', '2024-01-04', '0'),
(175, '66.249.79.206', '2024-01-04', '0'),
(176, '66.249.79.192', '2024-01-04', '0'),
(177, '140.213.13.174', '2024-01-04', '0'),
(178, '140.213.5.196', '2024-01-04', '0'),
(179, '180.242.70.103', '2024-01-04', '0'),
(180, '34.203.193.48', '2024-01-04', '0'),
(181, '110.138.95.168', '2024-01-04', '0'),
(182, '176.53.222.97', '2024-01-04', '0'),
(183, '144.217.135.230', '2024-01-04', '0'),
(184, '149.56.150.51', '2024-01-04', '0'),
(185, '144.217.135.153', '2024-01-04', '0'),
(186, '205.169.39.185', '2024-01-04', '0'),
(187, '65.154.226.166', '2024-01-04', '0'),
(188, '34.118.123.93', '2024-01-04', '0'),
(189, '34.123.170.104', '2024-01-04', '0'),
(190, '34.116.147.48', '2024-01-04', '0'),
(191, '108.53.213.37', '2024-01-04', '0'),
(192, '176.53.217.76', '2024-01-04', '0'),
(193, '222.232.53.133', '2024-01-04', '0'),
(194, '149.248.58.43', '2024-01-04', '0'),
(195, '149.56.15.153', '2024-01-04', '0'),
(196, '104.197.69.115', '2024-01-04', '0'),
(197, '45.90.60.210', '2024-01-04', '0'),
(198, '152.39.145.82', '2024-01-04', '0'),
(199, '152.39.232.249', '2024-01-04', '0'),
(200, '193.187.172.24', '2024-01-04', '0'),
(201, '50.116.48.10', '2024-01-04', '0'),
(202, '88.0.90.25', '2024-01-04', '0'),
(203, '43.135.181.13', '2024-01-04', '0'),
(204, '45.90.60.160', '2024-01-04', '0'),
(205, '8.41.221.56', '2024-01-04', '0'),
(206, '64.184.109.228', '2024-01-04', '0'),
(207, '223.113.128.224', '2024-01-04', '0'),
(208, '52.81.82.2', '2024-01-04', '0'),
(209, '180.242.71.26', '2024-01-04', '0'),
(210, '52.81.67.84', '2024-01-04', '0'),
(211, '27.98.228.232', '2024-01-04', '0'),
(212, '66.249.79.237', '2024-01-04', '0'),
(213, '199.244.88.230', '2024-01-04', '0'),
(214, '106.75.143.72', '2024-01-04', '0'),
(215, '106.75.167.183', '2024-01-04', '0'),
(216, '168.151.118.52', '2024-01-04', '0'),
(217, '168.151.97.195', '2024-01-04', '0'),
(218, '153.246.135.238', '2024-01-04', '0'),
(219, '199.192.18.45', '2024-01-04', '0'),
(220, '168.196.242.158', '2024-01-04', '0'),
(221, '44.192.97.111', '2024-01-04', '0'),
(222, '34.203.33.197', '2024-01-04', '0'),
(223, '52.90.67.56', '2024-01-04', '0'),
(224, '167.88.60.236', '2024-01-04', '0'),
(225, '103.55.39.190', '2024-01-04', '0'),
(226, '185.253.96.56', '2024-01-04', '0'),
(227, '159.203.53.95', '2024-01-04', '0'),
(228, '146.190.13.187', '2024-01-04', '0'),
(229, '140.224.64.215', '2024-01-04', '0'),
(230, '34.162.92.230', '2024-01-05', '0'),
(231, '111.47.230.65', '2024-01-05', '0'),
(232, '124.221.247.200', '2024-01-05', '0'),
(233, '136.243.220.209', '2024-01-05', '0'),
(234, '176.53.221.188', '2024-01-05', '0'),
(235, '51.174.65.41', '2024-01-05', '0'),
(236, '65.21.29.87', '2024-01-05', '0'),
(237, '60.13.138.124', '2024-01-05', '0'),
(238, '95.177.180.85', '2024-01-05', '0'),
(239, '34.31.215.237', '2024-01-05', '0'),
(240, '104.164.173.101', '2024-01-05', '0'),
(241, '154.28.229.152', '2024-01-05', '0'),
(242, '104.164.173.250', '2024-01-05', '0'),
(243, '104.164.173.45', '2024-01-05', '0'),
(244, '159.203.44.43', '2024-01-05', '0'),
(245, '164.90.222.93', '2024-01-05', '0'),
(246, '195.211.77.140', '2024-01-05', '0'),
(247, '164.90.184.41', '2024-01-05', '0'),
(248, '51.81.245.138', '2024-01-05', '0'),
(249, '195.211.77.142', '2024-01-05', '0'),
(250, '68.235.43.173', '2024-01-05', '0'),
(251, '34.42.160.178', '2024-01-05', '0'),
(252, '205.169.39.238', '2024-01-05', '0'),
(253, '205.169.39.64', '2024-01-05', '0'),
(254, '34.72.247.76', '2024-01-05', '0'),
(255, '146.70.225.7', '2024-01-05', '0'),
(256, '185.242.7.134', '2024-01-05', '0'),
(257, '161.35.246.138', '2024-01-05', '1'),
(258, '68.235.36.209', '2024-01-05', '0'),
(259, '156.146.63.154', '2024-01-05', '0'),
(260, '88.99.26.177', '2024-01-05', '0'),
(261, '86.106.177.52', '2024-01-05', '0'),
(262, '213.188.66.169', '2024-01-05', '0'),
(263, '203.78.172.230', '2024-01-05', '0'),
(264, '80.94.92.37', '2024-01-05', '0'),
(265, '89.104.110.187', '2024-01-05', '0'),
(266, '110.138.90.243', '2024-01-05', '1'),
(267, '103.175.82.68', '2024-01-05', '0'),
(268, '173.252.111.4', '2024-01-05', '0'),
(269, '173.252.127.13', '2024-01-05', '0'),
(270, '173.252.111.6', '2024-01-05', '0'),
(271, '69.63.184.2', '2024-01-05', '0'),
(272, '66.220.149.9', '2024-01-05', '0'),
(273, '31.13.115.1', '2024-01-05', '0'),
(274, '31.13.115.10', '2024-01-05', '0'),
(275, '31.13.127.3', '2024-01-05', '0'),
(276, '31.13.127.8', '2024-01-05', '0'),
(277, '31.13.103.10', '2024-01-05', '0'),
(278, '65.154.226.169', '2024-01-05', '0'),
(279, '65.154.226.168', '2024-01-05', '0'),
(280, '34.248.137.227', '2024-01-05', '0'),
(281, '34.217.24.49', '2024-01-05', '0'),
(282, '182.43.70.143', '2024-01-05', '0'),
(283, '91.92.245.178', '2024-01-05', '0'),
(284, '45.79.221.160', '2024-01-05', '0'),
(285, '146.70.29.186', '2024-01-05', '0'),
(286, '192.3.20.58', '2024-01-05', '0'),
(287, '165.231.253.216', '2024-01-05', '0'),
(288, '193.36.118.218', '2024-01-05', '0'),
(289, '86.181.211.244', '2024-01-05', '0'),
(290, '172.111.197.4', '2024-01-05', '0'),
(291, '185.156.172.173', '2024-01-05', '0'),
(292, '68.183.245.101', '2024-01-05', '0'),
(293, '203.128.73.166', '2024-01-05', '0'),
(294, '137.226.113.44', '2024-01-05', '0'),
(295, '176.53.217.157', '2024-01-05', '0'),
(296, '45.90.61.208', '2024-01-05', '0'),
(297, '180.242.69.19', '2024-01-05', '0'),
(298, '131.153.240.162', '2024-01-05', '0'),
(299, '131.153.142.170', '2024-01-05', '0'),
(300, '131.153.143.50', '2024-01-05', '0'),
(301, '131.153.240.178', '2024-01-05', '0'),
(302, '47.242.224.70', '2024-01-05', '0'),
(303, '103.189.123.6', '2024-01-05', '0'),
(304, '149.154.161.217', '2024-01-05', '0'),
(305, '36.72.120.120', '2024-01-05', '0'),
(306, '222.249.228.245', '2024-01-05', '0'),
(307, '129.226.158.26', '2024-01-05', '0'),
(308, '103.55.39.187', '2024-01-05', '0'),
(309, '67.21.32.153', '2024-01-05', '0'),
(310, '89.149.24.155', '2024-01-05', '0'),
(311, '47.89.193.162', '2024-01-05', '0'),
(312, '47.89.195.210', '2024-01-05', '0'),
(313, '47.88.90.156', '2024-01-05', '0'),
(314, '47.254.85.182', '2024-01-05', '0'),
(315, '47.88.94.161', '2024-01-05', '0'),
(316, '47.88.94.28', '2024-01-05', '0'),
(317, '34.94.202.129', '2024-01-05', '0'),
(318, '182.42.111.213', '2024-01-05', '0'),
(319, '176.53.223.137', '2024-01-05', '0'),
(320, '43.130.32.224', '2024-01-05', '0'),
(321, '104.196.70.29', '2024-01-05', '0'),
(322, '34.241.27.229', '2024-01-05', '0'),
(323, '89.104.101.234', '2024-01-05', '0'),
(324, '104.28.156.221', '2024-01-05', '0'),
(325, '50.18.103.201', '2024-01-06', '0'),
(326, '89.104.101.96', '2024-01-06', '0'),
(327, '45.90.63.34', '2024-01-06', '0'),
(328, '43.159.141.180', '2024-01-06', '0'),
(329, '43.131.62.4', '2024-01-06', '0'),
(330, '43.159.128.172', '2024-01-06', '0'),
(331, '89.104.100.103', '2024-01-06', '0'),
(332, '129.226.146.179', '2024-01-06', '0'),
(333, '216.251.130.74', '2024-01-06', '0'),
(334, '43.130.7.211', '2024-01-06', '0'),
(335, '34.222.11.197', '2024-01-06', '0'),
(336, '104.28.157.199', '2024-01-06', '0'),
(337, '89.248.168.222', '2024-01-06', '0'),
(338, '182.3.42.156', '2024-01-06', '1'),
(339, '124.223.193.173', '2024-01-06', '0'),
(340, '176.53.221.140', '2024-01-06', '0'),
(341, '176.53.216.172', '2024-01-06', '0'),
(342, '199.45.154.51', '2024-01-06', '0'),
(343, '72.14.177.23', '2024-01-06', '0'),
(344, '51.222.253.4', '2024-01-06', '0'),
(345, '51.222.253.16', '2024-01-06', '0'),
(346, '93.158.91.11', '2024-01-06', '0'),
(347, '81.161.59.17', '2024-01-06', '0'),
(348, '87.236.176.242', '2024-01-06', '0'),
(349, '199.45.155.16', '2024-01-06', '0'),
(350, '176.53.219.134', '2024-01-06', '0'),
(351, '89.104.110.204', '2024-01-06', '0'),
(352, '34.221.211.142', '2024-01-06', '0'),
(353, '89.104.111.22', '2024-01-06', '0'),
(354, '87.236.176.86', '2024-01-06', '0'),
(355, '125.94.144.102', '2024-01-06', '0'),
(356, '185.220.101.188', '2024-01-06', '0'),
(357, '45.90.63.255', '2024-01-06', '0'),
(358, '72.13.62.27', '2024-01-06', '0'),
(359, '176.53.220.200', '2024-01-07', '0'),
(360, '184.94.240.88', '2024-01-07', '0'),
(361, '185.246.188.74', '2024-01-07', '0'),
(362, '192.42.116.23', '2024-01-07', '0'),
(363, '128.90.144.150', '2024-01-07', '0'),
(364, '93.158.90.43', '2024-01-07', '0'),
(365, '45.90.62.175', '2024-01-07', '0'),
(366, '43.135.129.233', '2024-01-07', '0'),
(367, '178.151.245.174', '2024-01-07', '0'),
(368, '94.73.41.170', '2024-01-07', '0'),
(369, '43.130.37.62', '2024-01-07', '0'),
(370, '45.90.62.184', '2024-01-07', '0'),
(371, '64.227.111.135', '2024-01-07', '0'),
(372, '176.53.217.191', '2024-01-07', '0'),
(373, '45.90.62.197', '2024-01-07', '0'),
(374, '101.91.148.219', '2024-01-07', '0'),
(375, '150.255.180.227', '2024-01-07', '0'),
(376, '66.249.79.238', '2024-01-07', '0'),
(377, '124.220.171.34', '2024-01-07', '0'),
(378, '34.81.16.175', '2024-01-07', '0'),
(379, '104.248.54.46', '2024-01-07', '0'),
(380, '198.147.22.226', '2024-01-07', '0'),
(381, '45.88.97.30', '2024-01-07', '0'),
(382, '84.252.95.137', '2024-01-07', '0'),
(383, '46.246.122.122', '2024-01-07', '0'),
(384, '206.189.131.95', '2024-01-07', '0'),
(385, '45.90.60.40', '2024-01-07', '0'),
(386, '52.36.80.127', '2024-01-07', '0'),
(387, '124.153.19.3', '2024-01-07', '0'),
(388, '223.113.128.210', '2024-01-07', '0'),
(389, '52.81.208.25', '2024-01-07', '0'),
(390, '123.145.14.238', '2024-01-07', '0'),
(391, '159.223.67.8', '2024-01-07', '0'),
(392, '193.23.253.132', '2024-01-07', '0'),
(393, '66.249.71.4', '2024-01-07', '0'),
(394, '66.249.65.105', '2024-01-07', '0'),
(395, '97.107.133.47', '2024-01-07', '0'),
(396, '135.148.195.12', '2024-01-07', '0'),
(397, '49.51.179.103', '2024-01-07', '0'),
(398, '147.182.242.207', '2024-01-07', '0'),
(399, '124.221.186.82', '2024-01-08', '0'),
(400, '124.226.222.66', '2024-01-08', '0'),
(401, '44.234.19.83', '2024-01-08', '0'),
(402, '212.143.94.254', '2024-01-08', '0'),
(403, '18.196.63.180', '2024-01-08', '0'),
(404, '193.36.118.231', '2024-01-08', '0'),
(405, '87.101.94.205', '2024-01-08', '0'),
(406, '103.55.39.186', '2024-01-08', '0'),
(407, '13.38.77.0', '2024-01-08', '1'),
(408, '202.43.6.44', '2024-01-08', '0'),
(409, '192.3.20.55', '2024-01-08', '0'),
(410, '23.27.254.40', '2024-01-08', '0'),
(411, '34.67.45.49', '2024-01-08', '0'),
(412, '54.66.55.193', '2024-01-08', '0'),
(413, '89.252.132.28', '2024-01-08', '0'),
(414, '179.61.240.120', '2024-01-08', '0'),
(415, '139.99.170.109', '2024-01-08', '0'),
(416, '106.161.65.206', '2024-01-08', '1'),
(417, '149.102.239.74', '2024-01-08', '0'),
(418, '206.189.247.132', '2024-01-08', '1'),
(419, '96.9.249.42', '2024-01-08', '0'),
(420, '83.97.115.35', '2024-01-08', '0'),
(421, '66.115.176.25', '2024-01-08', '0'),
(422, '149.40.50.74', '2024-01-08', '0'),
(423, '103.28.53.162', '2024-01-08', '0'),
(424, '96.9.249.36', '2024-01-08', '0'),
(425, '185.65.135.246', '2024-01-08', '0'),
(426, '18.133.78.181', '2024-01-08', '0'),
(427, '54.202.221.195', '2024-01-08', '0'),
(428, '218.232.76.190', '2024-01-08', '0'),
(429, '197.242.157.235', '2024-01-08', '0'),
(430, '92.62.120.51', '2024-01-08', '0'),
(431, '104.129.56.84', '2024-01-08', '0'),
(432, '31.94.26.194', '2024-01-08', '0'),
(433, '84.17.42.14', '2024-01-08', '0'),
(434, '154.30.17.13', '2024-01-08', '0'),
(435, '54.224.216.52', '2024-01-08', '0'),
(436, '5.161.125.225', '2024-01-08', '0'),
(437, '5.161.154.23', '2024-01-08', '0'),
(438, '178.255.148.173', '2024-01-08', '0'),
(439, '49.106.202.12', '2024-01-08', '0'),
(440, '222.94.163.113', '2024-01-08', '0'),
(441, '43.157.66.187', '2024-01-08', '0'),
(442, '61.5.47.104', '2024-01-08', '0'),
(443, '3.135.206.131', '2024-01-08', '0'),
(444, '176.53.220.237', '2024-01-08', '0'),
(445, '192.53.173.154', '2024-01-08', '0'),
(446, '20.86.19.250', '2024-01-08', '0'),
(447, '177.234.143.138', '2024-01-08', '0'),
(448, '176.53.222.133', '2024-01-08', '0'),
(449, '191.101.126.222', '2024-01-08', '0'),
(450, '199.45.154.49', '2024-01-08', '0'),
(451, '139.177.207.127', '2024-01-08', '0'),
(452, '104.28.158.133', '2024-01-08', '0'),
(453, '104.28.245.128', '2024-01-08', '0'),
(454, '103.171.182.12', '2024-01-08', '1'),
(455, '36.71.142.154', '2024-01-08', '0'),
(456, '94.46.167.216', '2024-01-08', '0'),
(457, '94.46.167.73', '2024-01-08', '0'),
(458, '2404:c0:1c20::4cc:5526', '2024-01-15', '0'),
(459, '193.17.44.106', '2024-01-15', '0'),
(460, '114.122.6.223', '2024-01-16', '0'),
(461, '2a02:4780:6:1258:0:c6e:d228:2', '2024-01-16', '0'),
(462, '52.16.245.145', '2024-01-16', '0'),
(463, '154.28.229.249', '2024-01-16', '0'),
(464, '154.28.229.172', '2024-01-16', '0'),
(465, '2a01:4f8:10a:2d6::2', '2024-01-16', '0'),
(466, '2404:c0:1c20::4cc:cacc', '2024-01-16', '0'),
(467, '114.122.5.199', '2024-01-16', '0'),
(468, '185.67.34.68', '2024-01-16', '0'),
(469, '133.242.174.119', '2024-01-16', '0'),
(470, '157.119.232.164', '2024-01-16', '0'),
(471, '64.74.160.211', '2024-01-16', '0'),
(472, '107.172.22.119', '2024-01-16', '0'),
(473, '2600:3c03::f03c:94ff:fe60:ab98', '2024-01-16', '0'),
(474, '171.244.43.14', '2024-01-16', '0'),
(475, '2600:3c03::f03c:94ff:fe60:57a8', '2024-01-16', '0'),
(476, '104.166.80.239', '2024-01-16', '0'),
(477, '104.166.80.5', '2024-01-16', '0'),
(478, '193.32.127.231', '2024-01-16', '0'),
(479, '2a02:4780:6:c0de::10', '2024-01-16', '0'),
(480, '185.213.154.213', '2024-01-16', '0'),
(481, '3.19.232.22', '2024-01-16', '0'),
(482, '209.127.104.237', '2024-01-16', '0'),
(483, '209.127.106.19', '2024-01-16', '0'),
(484, '47.251.14.232', '2024-01-16', '0'),
(485, '47.88.93.234', '2024-01-16', '0'),
(486, '47.251.13.32', '2024-01-16', '0'),
(487, '149.56.150.232', '2024-01-16', '0'),
(488, '144.217.135.199', '2024-01-16', '0'),
(489, '149.56.150.155', '2024-01-16', '0'),
(490, '159.203.118.28', '2024-01-16', '0'),
(491, '3.132.212.254', '2024-01-16', '0'),
(492, '87.236.176.13', '2024-01-16', '0'),
(493, '111.7.100.21', '2024-01-16', '0'),
(494, '111.7.100.22', '2024-01-16', '0'),
(495, '162.19.25.94', '2024-01-16', '0'),
(496, '199.244.88.220', '2024-01-16', '0'),
(497, '43.134.37.211', '2024-01-16', '0'),
(498, '2001:4ba0:cafe:c13::1', '2024-01-16', '0'),
(499, '2404:c0:1c20::4d1:37f4', '2024-01-16', '0'),
(500, '114.122.7.91', '2024-01-16', '0'),
(501, '159.69.69.113', '2024-01-16', '0'),
(502, '87.236.176.22', '2024-01-16', '0'),
(503, '2404:c0:1c10::16d1:ca38', '2024-01-16', '0'),
(504, '14.215.163.132', '2024-01-16', '0'),
(505, '114.122.5.223', '2024-01-16', '0'),
(506, '43.135.166.178', '2024-01-16', '0'),
(507, '114.5.144.197', '2024-01-16', '0'),
(508, '87.236.176.233', '2024-01-16', '0'),
(509, '114.122.7.127', '2024-01-16', '0'),
(510, '94.139.58.68', '2024-01-16', '0'),
(511, '188.240.49.196', '2024-01-16', '0'),
(512, '2404:c0:1c20::4d9:5022', '2024-01-16', '0'),
(513, '3.94.171.0', '2024-01-17', '0'),
(514, '87.236.176.129', '2024-01-17', '0'),
(515, '135.148.195.7', '2024-01-17', '0'),
(516, '139.99.237.35', '2024-01-17', '0'),
(517, '176.53.223.128', '2024-01-17', '0'),
(518, '18.213.107.7', '2024-01-17', '0'),
(519, '103.139.48.235', '2024-01-17', '0'),
(520, '34.72.176.129', '2024-01-17', '0'),
(521, '34.122.147.229', '2024-01-17', '0'),
(522, '34.116.248.31', '2024-01-17', '0'),
(523, '205.169.39.236', '2024-01-17', '0'),
(524, '114.122.10.79', '2024-01-17', '0'),
(525, '183.129.153.157', '2024-01-17', '0'),
(526, '2404:c0:1c10::16de:dd1c', '2024-01-17', '0'),
(527, '18.232.127.136', '2024-01-17', '0'),
(528, '54.145.77.120', '2024-01-17', '0'),
(529, '2600:3c00::f03c:94ff:fe60:e1ec', '2024-01-17', '0'),
(530, '176.53.216.212', '2024-01-17', '0'),
(531, '3.71.21.58', '2024-01-17', '0'),
(532, '193.36.118.219', '2024-01-17', '0'),
(533, '188.165.87.102', '2024-01-17', '0'),
(534, '154.30.116.246', '2024-01-17', '0'),
(535, '92.17.137.103', '2024-01-17', '0'),
(536, '2404:c0:1c10::16e3:d664', '2024-01-17', '0'),
(537, '37.187.215.241', '2024-01-17', '0'),
(538, '2a01:4f8:1c1c:e9fa::1', '2024-01-17', '0'),
(539, '51.254.49.107', '2024-01-17', '0'),
(540, '8.138.110.149', '2024-01-17', '0'),
(541, '45.87.212.59', '2024-01-17', '0'),
(542, '185.253.96.13', '2024-01-17', '0'),
(543, '3.79.106.245', '2024-01-17', '0'),
(544, '37.187.215.253', '2024-01-17', '0'),
(545, '34.106.10.20', '2024-01-17', '0'),
(546, '51.254.49.110', '2024-01-17', '0'),
(547, '157.37.215.100', '2024-01-17', '0'),
(548, '35.90.52.181', '2024-01-17', '0'),
(549, '51.254.49.106', '2024-01-17', '0'),
(550, '51.195.232.197', '2024-01-17', '0'),
(551, '37.187.215.246', '2024-01-17', '0'),
(552, '93.158.90.40', '2024-01-17', '0'),
(553, '123.187.240.242', '2024-01-17', '0'),
(554, '103.77.42.106', '2024-01-17', '0'),
(555, '18.201.254.237', '2024-01-17', '0'),
(556, '172.252.89.39', '2024-01-17', '0'),
(557, '89.104.101.243', '2024-01-17', '0'),
(558, '34.118.13.130', '2024-01-17', '0'),
(559, '204.217.147.121', '2024-01-17', '0'),
(560, '35.172.234.250', '2024-01-17', '0'),
(561, '44.200.17.54', '2024-01-17', '0'),
(562, '38.154.186.240', '2024-01-17', '0'),
(563, '191.102.187.210', '2024-01-17', '0'),
(564, '122.176.197.3', '2024-01-17', '0'),
(565, '34.102.115.168', '2024-01-17', '0'),
(566, '43.153.93.68', '2024-01-17', '0'),
(567, '209.127.252.181', '2024-01-17', '0'),
(568, '2804:1e68:c221:724a:7140:c3ee:d21e:51e6', '2024-01-17', '0'),
(569, '20.172.154.149', '2024-01-17', '0'),
(570, '2404:c0:1c20::4d6:bc6a', '2024-01-17', '0'),
(571, '114.122.5.123', '2024-01-17', '0'),
(572, '114.122.4.147', '2024-01-17', '0'),
(573, '2404:c0:1c20::4df:277f', '2024-01-17', '0'),
(574, '2600:1900:2000:93::1:1900', '2024-01-17', '0'),
(575, '52.13.112.64', '2024-01-17', '0'),
(576, '3.140.243.188', '2024-01-17', '0'),
(577, '54.245.21.62', '2024-01-17', '0'),
(578, '54.174.62.142', '2024-01-17', '0'),
(579, '2404:c0:1c20::4de:c104', '2024-01-17', '0'),
(580, '144.217.135.237', '2024-01-17', '0'),
(581, '149.56.160.175', '2024-01-17', '0'),
(582, '2001:bc8:1201:1d:ba2a:72ff:fee1:1d32', '2024-01-17', '0'),
(583, '167.94.138.49', '2024-01-17', '0'),
(584, '162.142.125.10', '2024-01-18', '0'),
(585, '15.206.235.52', '2024-01-18', '0'),
(586, '2404:c0:1c10::1707:d499', '2024-01-18', '0'),
(587, '199.45.155.35', '2024-01-18', '0'),
(588, '40.77.167.54', '2024-01-18', '0'),
(589, '180.242.69.24', '2024-01-18', '0'),
(590, '110.50.80.198', '2024-01-18', '0'),
(591, '2a03:2880:22ff:7::face:b00c', '2024-01-18', '0'),
(592, '167.248.133.186', '2024-01-18', '0'),
(593, '167.94.146.52', '2024-01-18', '0'),
(594, '35.171.144.152', '2024-01-18', '0'),
(595, '199.45.154.19', '2024-01-18', '0'),
(596, '36.111.67.189', '2024-01-18', '0'),
(597, '2600:3c00::f03c:94ff:fe60:9574', '2024-01-18', '0'),
(598, '34.94.155.204', '2024-01-18', '0'),
(599, '89.104.111.93', '2024-01-18', '0'),
(600, '65.155.30.101', '2024-01-18', '0'),
(601, '45.90.60.224', '2024-01-18', '0'),
(602, '180.242.69.114', '2024-01-18', '0'),
(603, '188.166.156.158', '2024-01-18', '0'),
(604, '205.169.39.171', '2024-01-18', '0'),
(605, '124.220.24.137', '2024-01-18', '0'),
(606, '114.122.4.221', '2024-01-18', '0'),
(607, '114.10.64.35', '2024-01-18', '0'),
(608, '8.41.221.54', '2024-01-18', '0'),
(609, '8.41.221.48', '2024-01-18', '0'),
(610, '34.102.85.36', '2024-01-18', '0'),
(611, '34.174.197.98', '2024-01-18', '0'),
(612, '34.151.92.110', '2024-01-18', '0'),
(613, '34.118.33.243', '2024-01-18', '0'),
(614, '31.94.36.115', '2024-01-18', '0'),
(615, '84.17.42.48', '2024-01-18', '0'),
(616, '54.224.218.58', '2024-01-18', '0'),
(617, '54.152.88.128', '2024-01-18', '0'),
(618, '36.71.137.212', '2024-01-18', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_post`
--

CREATE TABLE `tb_post` (
  `cuid` int(11) NOT NULL,
  `slug` text NOT NULL,
  `title` text NOT NULL,
  `persen` text NOT NULL,
  `min_to` text NOT NULL,
  `satuan` int(2) NOT NULL,
  `max_bonus` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `author` text NOT NULL,
  `kategori` text NOT NULL,
  `created_date` date NOT NULL,
  `last_update` date NOT NULL,
  `user` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_post`
--

INSERT INTO `tb_post` (`cuid`, `slug`, `title`, `persen`, `min_to`, `satuan`, `max_bonus`, `image`, `content`, `author`, `kategori`, `created_date`, `last_update`, `user`, `status`) VALUES
(7, 'bonus-deposit-new-member-30-', 'BONUS DEPOSIT NEW MEMBER 30%', '30', '5', 0, 1000000, 'blog_20241601210910.png', '', 'anstorex', '0', '2024-01-16', '2024-01-16', 'anstorex', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ppplayer`
--

CREATE TABLE `tb_ppplayer` (
  `cuid` int(255) NOT NULL,
  `userID` int(255) NOT NULL,
  `externalPlayerId` text NOT NULL,
  `playerid` text NOT NULL,
  `token` text NOT NULL,
  `provider` text NOT NULL,
  `balance` text NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_ppplayer`
--

INSERT INTO `tb_ppplayer` (`cuid`, `userID`, `externalPlayerId`, `playerid`, `token`, `provider`, `balance`, `status`) VALUES
(1, 63, 'oubtestwl2g5p2', '0000000', '', 'PragmaticPlay', '0', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_provider`
--

CREATE TABLE `tb_provider` (
  `cuid` int(255) NOT NULL,
  `providerid` text NOT NULL,
  `slug` text NOT NULL,
  `providername` text NOT NULL,
  `jenis` int(11) NOT NULL COMMENT '1:slot,2:sports,3:casino,4:tembak ikan,5:e-games'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_provider`
--

INSERT INTO `tb_provider` (`cuid`, `providerid`, `slug`, `providername`, `jenis`) VALUES
(1, 'PragmaticPlay', 'pragmatic-play', 'Pragmatic Play', 1),
(2, 'Microgaming', 'microgaming', 'Microgaming', 1),
(3, 'habanero', 'habanero', 'Habanero', 1),
(4, 'Playtech', 'playtech', 'Playtech', 1),
(5, 'joker', 'joker-x', 'Joker X', 1),
(6, 'Spadegaming', 'spadegaming', 'Spadegaming', 1),
(7, 'playngo', 'play-n-go', 'Play N Go', 1),
(8, 'PGSoft', 'pg-soft', 'PG Soft', 1),
(9, 'CQ9', 'cq9-slot', 'CQ9 Slot', 1),
(10, 'ibcsports', 'ibc-sports', 'IBC Sports', 2),
(11, 'sbo', 'sbo-sports', 'SBO Sports', 2),
(12, 'ebet', 'ebet', 'EBET', 2),
(13, 'PragmaticPlay', 'pragmatic-live', 'Pragmatic Live', 3),
(14, 'evolution', 'evolution-gaming', 'Evolution Gaming', 3),
(15, 'ae', 'ae-sexy', 'AE Sexy', 3),
(16, 'MicroGaming', 'microgaming-live', 'Microgaming Live', 3),
(17, 'dreamgaming', 'dream-gaming', 'Dream Gaming', 3),
(18, 'Playtech', 'playtech-live', 'Playtech Live', 3),
(19, 'Microgaming', 'microgaming-fishing', 'Microgaming - Fishing', 4),
(20, 'CQ9', 'cq9-fishing', 'CQ9 - Fishing', 4),
(21, 'joker', 'joker-fishing', 'Joker - Fishing', 4),
(22, 'joker', 'joker-egames', 'Joker EGames', 5),
(23, 'PragmaticPlay', 'pragmatic-sports', 'Pragmatic Sports', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_seo`
--

CREATE TABLE `tb_seo` (
  `cuid` int(11) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'logo.webp',
  `instansi` text NOT NULL,
  `keyword` text NOT NULL,
  `deskripsi` text NOT NULL,
  `news` text NOT NULL,
  `coin` bigint(255) NOT NULL DEFAULT 0,
  `footer` longtext NOT NULL,
  `statusfooter` int(2) NOT NULL DEFAULT 1,
  `urlweb` text NOT NULL,
  `user` text NOT NULL,
  `date` datetime NOT NULL,
  `onoff` int(2) NOT NULL DEFAULT 0,
  `warnadasar` varchar(255) NOT NULL DEFAULT '#0B7DDA',
  `warnahover` varchar(255) NOT NULL DEFAULT '#0D47A1',
  `warnabg` varchar(255) NOT NULL DEFAULT '#030C30',
  `temautama` int(2) NOT NULL DEFAULT 1,
  `temafooter` int(2) NOT NULL DEFAULT 1,
  `minrtp` int(11) NOT NULL DEFAULT 65,
  `maxrtp` int(11) NOT NULL DEFAULT 98,
  `vemail` int(11) NOT NULL DEFAULT 0,
  `vrek` int(11) NOT NULL DEFAULT 0,
  `sinkdepo` int(11) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_seo`
--

INSERT INTO `tb_seo` (`cuid`, `image`, `instansi`, `keyword`, `deskripsi`, `news`, `coin`, `footer`, `statusfooter`, `urlweb`, `user`, `date`, `onoff`, `warnadasar`, `warnahover`, `warnabg`, `temautama`, `temafooter`, `minrtp`, `maxrtp`, `vemail`, `vrek`, `sinkdepo`) VALUES
(1, 'logo.png', 'SURGABET781', 'SURGABET781', 'SURGABET781| merupakan situs judi slot gacor online terbaik & terpercaya di Indonesia saat ini karena sering sekali memberikan banyak keuntungan seperti jackpot maxwin hari ini disetiap permainan slot yang tersedia.', 'SURGABET781| merupakan situs judi slot gacor online terbaik &amp; terpercaya di Indonesia saat ini karena sering sekali memberikan banyak keuntungan seperti jackpot maxwin hari ini disetiap permainan slot yang tersedia.', 1367889, '<p>Apakah Anda sedang mencari web slot terbaik dan terpercaya? Provider game slot online dari Anxiety Project adalah salah satu solusinya. Dengan multi server kami menyediakan platform game slot, casino live, dan togel online. Anda serta pemain game online lainnya tidak perlu khawatir tentang apapun. Sebagai situs dengan winrate tertinggi, slot gacor kami menawarkan berbagai layanan mulai dari deposit minimal Rp 20.000. Saat Anda bertaruh atau berpartisipasi dalam slot online di situs milik Anxiety Project, Anda mendapatkan peluang kemenangan lebih besar dari umumnya platform lain di Indonesia. Bahkan jika Anda terdaftar sebagai pemain atau petaruh, kami memiliki situs slot dengan RTP tercepat dan peluang jackpot termudah.</p>\r\n<p>Dengan situs slot Anxiety Project, Anda tidak akan kecewa karena dengan permainan judi online kami, ada banyak pilihan game slot dan casino yang dapat dimainkan. Pemain atau petaruh hanya membutuhkan deposit minimum, dan Anda dapat memainkan slot, casino, dan togel dari penyedia slot teratas seperti Pragmatic Play, PG Soft, Playstar dan Habanero, serta Toptrend Gaming lainnya. Situs slot baru dari Anxiety Project menawarkan berbagai jenis permainan mulai dari slot, casino, togel, sport, egames, dan fishing. Anda tidak perlu khawatir tentang keamanan. Kami dapat diandalkan sebagai portal slot online yang sempurna.</p>', 1, 'Maven+Pro', 'anstorex', '2020-01-10 20:55:37', 0, '#DC3545', '#AD1F2D', '#14455e', 1, 2, 90, 100, 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_slide`
--

CREATE TABLE `tb_slide` (
  `cuid` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `sort` int(11) NOT NULL,
  `user` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_slide`
--

INSERT INTO `tb_slide` (`cuid`, `image`, `deskripsi`, `sort`, `user`, `status`) VALUES
(22, 'slide_20240116205924.png', '', 1, 'mimintop', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_social`
--

CREATE TABLE `tb_social` (
  `cuid` int(11) NOT NULL,
  `facebook` text NOT NULL,
  `twitter` text NOT NULL,
  `googleplus` text NOT NULL,
  `instagram` text NOT NULL,
  `linkedin` text NOT NULL,
  `youtube` text NOT NULL,
  `date` datetime NOT NULL,
  `user` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_social`
--

INSERT INTO `tb_social` (`cuid`, `facebook`, `twitter`, `googleplus`, `instagram`, `linkedin`, `youtube`, `date`, `user`) VALUES
(1, 'https://www.facebook.com/username', 'https://www.twitter.com/username', '#', 'https://www.instagram.com/username', 'https://www.linkedin.com/company/username', 'https://www.youtube.com/c/username', '2023-07-26 04:01:26', 'mimintop');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_stat`
--

CREATE TABLE `tb_stat` (
  `cuid` int(11) NOT NULL,
  `ip` text NOT NULL,
  `date` date NOT NULL,
  `hits` int(11) NOT NULL,
  `page` text NOT NULL,
  `user` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_stat`
--

INSERT INTO `tb_stat` (`cuid`, `ip`, `date`, `hits`, `page`, `user`) VALUES
(1, '2404:c0:1c20::4cc:5526', '2024-01-16', 1, 'Daftar', 'anstorex'),
(2, '2404:c0:1c20::4cc:5526', '2024-01-16', 1, 'Masuk', 'anstorex'),
(3, '114.122.6.223', '2024-01-16', 1, 'Beranda', 'anstorex'),
(4, '114.122.6.223', '2024-01-16', 1, 'Beranda', 'anstorex'),
(5, '114.122.6.223', '2024-01-16', 1, 'Daftar', 'anstorex'),
(6, '114.122.6.223', '2024-01-16', 1, 'Daftar', 'anstorex'),
(7, '114.122.6.223', '2024-01-16', 1, 'Masuk', 'anstorex'),
(8, '114.122.6.223', '2024-01-16', 1, 'Beranda', 'anstorex'),
(9, '114.122.6.223', '2024-01-16', 1, 'Beranda', 'anstorex'),
(10, '114.122.6.223', '2024-01-16', 1, 'Beranda', 'anstorex'),
(11, '114.122.6.223', '2024-01-16', 1, 'Slot', 'anstorex'),
(12, '114.122.6.223', '2024-01-16', 1, 'Slot Lainnya', 'anstorex'),
(13, '114.122.6.223', '2024-01-16', 1, 'Slot', 'anstorex'),
(14, '114.122.6.223', '2024-01-16', 1, 'Slot', 'anstorex'),
(15, '114.122.6.223', '2024-01-16', 1, 'Slot Lainnya', 'anstorex'),
(16, '114.122.6.223', '2024-01-16', 1, 'Slot', 'anstorex'),
(17, '114.122.6.223', '2024-01-16', 1, 'Beranda', 'anstorex'),
(18, '2a02:4780:6:1258:0:c6e:d228:2', '2024-01-16', 1, 'Beranda', 'anstorex'),
(19, '52.16.245.145', '2024-01-16', 1, 'Beranda', 'anstorex'),
(20, '52.16.245.145', '2024-01-16', 1, 'Beranda', 'anstorex'),
(21, '52.16.245.145', '2024-01-16', 1, 'Beranda', 'anstorex'),
(22, '52.16.245.145', '2024-01-16', 1, 'Beranda', 'anstorex'),
(23, '52.16.245.145', '2024-01-16', 1, 'Beranda', 'anstorex'),
(24, '52.16.245.145', '2024-01-16', 1, 'Beranda', 'anstorex'),
(25, '154.28.229.249', '2024-01-16', 1, 'Beranda', 'anstorex'),
(26, '154.28.229.172', '2024-01-16', 1, 'Beranda', 'anstorex'),
(27, '193.17.44.106', '2024-01-16', 1, 'Beranda', 'anstorex'),
(28, '2a01:4f8:10a:2d6::2', '2024-01-16', 1, 'Beranda', 'anstorex'),
(29, '2a02:4780:6:1258:0:c6e:d228:2', '2024-01-16', 1, 'Beranda', 'anstorex'),
(30, '2404:c0:1c20::4cc:cacc', '2024-01-16', 1, 'Beranda', 'anstorex'),
(31, '114.122.5.199', '2024-01-16', 1, 'Beranda', 'anstorex'),
(32, '185.67.34.68', '2024-01-16', 1, 'Beranda', 'anstorex'),
(33, '133.242.174.119', '2024-01-16', 1, 'Beranda', 'anstorex'),
(34, '5.164.29.116', '2024-01-16', 1, 'Beranda', 'anstorex'),
(35, '185.67.34.68', '2024-01-16', 1, 'Beranda', 'anstorex'),
(36, '2a02:4780:6:1258:0:c6e:d228:2', '2024-01-16', 1, 'Beranda', 'anstorex'),
(37, '157.119.232.164', '2024-01-16', 1, 'Beranda', 'anstorex'),
(38, '64.74.160.211', '2024-01-16', 1, 'Beranda', 'anstorex'),
(39, '107.172.22.119', '2024-01-16', 1, 'Beranda', 'anstorex'),
(40, '2a02:4780:6:1258:0:c6e:d228:2', '2024-01-16', 1, 'Beranda', 'anstorex'),
(41, '2a02:4780:6:1258:0:c6e:d228:2', '2024-01-16', 1, 'Beranda', 'anstorex'),
(42, '131.153.240.162', '2024-01-16', 1, 'Beranda', 'anstorex'),
(43, '131.153.240.162', '2024-01-16', 1, 'Beranda', 'anstorex'),
(44, '131.153.143.50', '2024-01-16', 1, 'Beranda', 'anstorex'),
(45, '2600:3c03::f03c:94ff:fe60:ab98', '2024-01-16', 1, 'Beranda', 'anstorex'),
(46, '171.244.43.14', '2024-01-16', 1, 'Beranda', 'anstorex'),
(47, '2a02:4780:6:1258:0:c6e:d228:2', '2024-01-16', 1, 'Beranda', 'anstorex'),
(48, '2600:3c03::f03c:94ff:fe60:57a8', '2024-01-16', 1, 'Beranda', 'anstorex'),
(49, '104.166.80.239', '2024-01-16', 1, 'Beranda', 'anstorex'),
(50, '104.166.80.239', '2024-01-16', 1, 'Beranda', 'anstorex'),
(51, '104.166.80.5', '2024-01-16', 1, 'Beranda', 'anstorex'),
(52, '2a02:4780:6:1258:0:c6e:d228:2', '2024-01-16', 1, 'Beranda', 'anstorex'),
(53, '193.32.127.231', '2024-01-16', 1, 'Beranda', 'anstorex'),
(54, '2a02:4780:6:c0de::10', '2024-01-16', 1, 'Beranda', 'anstorex'),
(55, '185.213.154.213', '2024-01-16', 1, 'Beranda', 'anstorex'),
(56, '2a02:4780:6:1258:0:c6e:d228:2', '2024-01-16', 1, 'Beranda', 'anstorex'),
(57, '3.19.232.22', '2024-01-16', 1, 'Beranda', 'anstorex'),
(58, '209.127.104.237', '2024-01-16', 1, 'Beranda', 'anstorex'),
(59, '209.127.106.19', '2024-01-16', 1, 'Beranda', 'anstorex'),
(60, '2a02:4780:6:1258:0:c6e:d228:2', '2024-01-16', 1, 'Beranda', 'anstorex'),
(61, '2a02:4780:6:1258:0:c6e:d228:2', '2024-01-16', 1, 'Beranda', 'anstorex'),
(62, '2a02:4780:6:1258:0:c6e:d228:2', '2024-01-16', 1, 'Beranda', 'anstorex'),
(63, '47.251.14.232', '2024-01-16', 1, 'Beranda', 'anstorex'),
(64, '47.89.195.210', '2024-01-16', 1, 'Beranda', 'anstorex'),
(65, '47.88.90.156', '2024-01-16', 1, 'Beranda', 'anstorex'),
(66, '47.88.93.234', '2024-01-16', 1, 'Beranda', 'anstorex'),
(67, '47.251.13.32', '2024-01-16', 1, 'Beranda', 'anstorex'),
(68, '2a02:4780:6:1258:0:c6e:d228:2', '2024-01-16', 1, 'Beranda', 'anstorex'),
(69, '5.164.29.116', '2024-01-16', 1, 'Beranda', 'anstorex'),
(70, '2a02:4780:6:1258:0:c6e:d228:2', '2024-01-16', 1, 'Beranda', 'anstorex'),
(71, '149.56.150.232', '2024-01-16', 1, 'Beranda', 'anstorex'),
(72, '149.56.150.232', '2024-01-16', 1, 'Beranda', 'anstorex'),
(73, '149.56.150.232', '2024-01-16', 1, 'Contact', 'anstorex'),
(74, '149.56.150.232', '2024-01-16', 1, 'Ketentuan', 'anstorex'),
(75, '149.56.150.232', '2024-01-16', 1, 'Tentang Kami', 'anstorex'),
(76, '149.56.150.232', '2024-01-16', 1, 'Masuk', 'anstorex'),
(77, '149.56.150.232', '2024-01-16', 1, 'Slot', 'anstorex'),
(78, '149.56.150.232', '2024-01-16', 1, 'Daftar', 'anstorex'),
(79, '149.56.150.232', '2024-01-16', 1, 'Slot', 'anstorex'),
(80, '149.56.150.232', '2024-01-16', 1, 'Slot', 'anstorex'),
(81, '149.56.150.232', '2024-01-16', 1, 'Togel', 'anstorex'),
(82, '149.56.150.232', '2024-01-16', 1, 'Beranda', 'anstorex'),
(83, '144.217.135.199', '2024-01-16', 1, 'Beranda', 'anstorex'),
(84, '149.56.150.155', '2024-01-16', 1, 'Beranda', 'anstorex'),
(85, '2a02:4780:6:1258:0:c6e:d228:2', '2024-01-16', 1, 'Beranda', 'anstorex'),
(86, '2a02:4780:6:1258:0:c6e:d228:2', '2024-01-16', 1, 'Beranda', 'anstorex'),
(87, '43.135.149.154', '2024-01-16', 1, 'Beranda', 'anstorex'),
(88, '159.203.118.28', '2024-01-16', 1, 'Beranda', 'anstorex'),
(89, '2a02:4780:6:1258:0:c6e:d228:2', '2024-01-16', 1, 'Beranda', 'anstorex'),
(90, '3.132.212.254', '2024-01-16', 1, 'Beranda', 'anstorex'),
(91, '87.236.176.13', '2024-01-16', 1, 'Beranda', 'anstorex'),
(92, '45.90.62.175', '2024-01-16', 1, 'Beranda', 'anstorex'),
(93, '2a02:4780:6:1258:0:c6e:d228:2', '2024-01-16', 1, 'Beranda', 'anstorex'),
(94, '111.7.100.21', '2024-01-16', 1, 'Beranda', 'anstorex'),
(95, '111.7.100.22', '2024-01-16', 1, 'Beranda', 'anstorex'),
(96, '111.7.100.22', '2024-01-16', 1, 'Beranda', 'anstorex'),
(97, '162.19.25.94', '2024-01-16', 1, 'Beranda', 'anstorex'),
(98, '162.19.25.94', '2024-01-16', 1, 'Beranda', 'anstorex'),
(99, '162.19.25.94', '2024-01-16', 1, 'Beranda', 'anstorex'),
(100, '162.19.25.94', '2024-01-16', 1, 'Slot', 'anstorex'),
(101, '162.19.25.94', '2024-01-16', 1, 'Slot', 'anstorex'),
(102, '162.19.25.94', '2024-01-16', 1, 'Contact', 'anstorex'),
(103, '162.19.25.94', '2024-01-16', 1, 'Contact', 'anstorex'),
(104, '162.19.25.94', '2024-01-16', 1, 'Daftar', 'anstorex'),
(105, '162.19.25.94', '2024-01-16', 1, 'Daftar', 'anstorex'),
(106, '162.19.25.94', '2024-01-16', 1, 'Slot', 'anstorex'),
(107, '162.19.25.94', '2024-01-16', 1, 'Slot', 'anstorex'),
(108, '162.19.25.94', '2024-01-16', 1, 'Slot', 'anstorex'),
(109, '162.19.25.94', '2024-01-16', 1, 'Slot', 'anstorex'),
(110, '162.19.25.94', '2024-01-16', 1, 'Togel', 'anstorex'),
(111, '162.19.25.94', '2024-01-16', 1, 'Togel', 'anstorex'),
(112, '162.19.25.94', '2024-01-16', 1, 'Sport', 'anstorex'),
(113, '162.19.25.94', '2024-01-16', 1, 'Sport', 'anstorex'),
(114, '162.19.25.94', '2024-01-16', 1, 'EGames', 'anstorex'),
(115, '162.19.25.94', '2024-01-16', 1, 'EGames', 'anstorex'),
(116, '162.19.25.94', '2024-01-16', 1, 'Fishing', 'anstorex'),
(117, '162.19.25.94', '2024-01-16', 1, 'Fishing', 'anstorex'),
(118, '162.19.25.94', '2024-01-16', 1, 'Promo', 'anstorex'),
(119, '162.19.25.94', '2024-01-16', 1, 'Promo', 'anstorex'),
(120, '162.19.25.94', '2024-01-16', 1, 'Referral', 'anstorex'),
(121, '162.19.25.94', '2024-01-16', 1, 'Referral', 'anstorex'),
(122, '162.19.25.94', '2024-01-16', 1, 'Masuk', 'anstorex'),
(123, '162.19.25.94', '2024-01-16', 1, 'Masuk', 'anstorex'),
(124, '162.19.25.94', '2024-01-16', 1, 'Tentang Kami', 'anstorex'),
(125, '162.19.25.94', '2024-01-16', 1, 'Tentang Kami', 'anstorex'),
(126, '162.19.25.94', '2024-01-16', 1, 'Pertanyaan', 'anstorex'),
(127, '162.19.25.94', '2024-01-16', 1, 'Pertanyaan', 'anstorex'),
(128, '162.19.25.94', '2024-01-16', 1, 'Ketentuan', 'anstorex'),
(129, '162.19.25.94', '2024-01-16', 1, 'Ketentuan', 'anstorex'),
(130, '162.19.25.94', '2024-01-16', 1, 'Kebijakan', 'anstorex'),
(131, '162.19.25.94', '2024-01-16', 1, 'Kebijakan', 'anstorex'),
(132, '162.19.25.94', '2024-01-16', 1, 'RTP Slot Pragmatic', 'anstorex'),
(133, '162.19.25.94', '2024-01-16', 1, 'RTP Slot Pragmatic', 'anstorex'),
(134, '162.19.25.94', '2024-01-16', 1, 'Slot Lainnya', 'anstorex'),
(135, '162.19.25.94', '2024-01-16', 1, 'Slot Lainnya', 'anstorex'),
(136, '162.19.25.94', '2024-01-16', 1, 'Slot Lainnya', 'anstorex'),
(137, '162.19.25.94', '2024-01-16', 1, 'Slot Lainnya', 'anstorex'),
(138, '162.19.25.94', '2024-01-16', 1, 'Slot Lainnya', 'anstorex'),
(139, '162.19.25.94', '2024-01-16', 1, 'Slot Lainnya', 'anstorex'),
(140, '162.19.25.94', '2024-01-16', 1, 'Slot Lainnya', 'anstorex'),
(141, '162.19.25.94', '2024-01-16', 1, 'Slot Lainnya', 'anstorex'),
(142, '162.19.25.94', '2024-01-16', 1, 'Slot Lainnya', 'anstorex'),
(143, '162.19.25.94', '2024-01-16', 1, 'Slot Lainnya', 'anstorex'),
(144, '162.19.25.94', '2024-01-16', 1, 'Slot Lainnya', 'anstorex'),
(145, '162.19.25.94', '2024-01-16', 1, 'Slot Lainnya', 'anstorex'),
(146, '162.19.25.94', '2024-01-16', 1, 'Slot Lainnya', 'anstorex'),
(147, '162.19.25.94', '2024-01-16', 1, 'Slot Lainnya', 'anstorex'),
(148, '162.19.25.94', '2024-01-16', 1, 'Slot Lainnya', 'anstorex'),
(149, '162.19.25.94', '2024-01-16', 1, 'Slot Lainnya', 'anstorex'),
(150, '162.19.25.94', '2024-01-16', 1, 'Slot Lainnya', 'anstorex'),
(151, '162.19.25.94', '2024-01-16', 1, 'Slot Lainnya', 'anstorex'),
(152, '162.19.25.94', '2024-01-16', 1, 'Slot Lainnya', 'anstorex'),
(153, '162.19.25.94', '2024-01-16', 1, 'Slot Lainnya', 'anstorex'),
(154, '162.19.25.94', '2024-01-16', 1, 'Masuk', 'anstorex'),
(155, '162.19.25.94', '2024-01-16', 1, 'Masuk', 'anstorex'),
(156, '162.19.25.94', '2024-01-16', 1, 'Masuk', 'anstorex'),
(157, '162.19.25.94', '2024-01-16', 1, 'Masuk', 'anstorex'),
(158, '162.19.25.94', '2024-01-16', 1, 'Masuk', 'anstorex'),
(159, '162.19.25.94', '2024-01-16', 1, 'Masuk', 'anstorex'),
(160, '162.19.25.94', '2024-01-16', 1, 'Masuk', 'anstorex'),
(161, '162.19.25.94', '2024-01-16', 1, 'Masuk', 'anstorex'),
(162, '2a02:4780:6:1258:0:c6e:d228:2', '2024-01-16', 1, 'Beranda', 'anstorex'),
(163, '162.19.25.94', '2024-01-16', 1, 'Slot Lainnya', 'anstorex'),
(164, '162.19.25.94', '2024-01-16', 1, 'Slot Lainnya', 'anstorex'),
(165, '199.244.88.220', '2024-01-16', 1, 'Beranda', 'anstorex'),
(166, '162.19.25.94', '2024-01-16', 1, 'Slot Lainnya', 'anstorex'),
(167, '162.19.25.94', '2024-01-16', 1, 'Slot Lainnya', 'anstorex'),
(168, '162.19.25.94', '2024-01-16', 1, 'Sport', 'anstorex'),
(169, '162.19.25.94', '2024-01-16', 1, 'Sport', 'anstorex'),
(170, '162.19.25.94', '2024-01-16', 1, 'Lupa Password', 'anstorex'),
(171, '162.19.25.94', '2024-01-16', 1, 'Lupa Password', 'anstorex'),
(172, '162.19.25.94', '2024-01-16', 1, 'Beranda', 'anstorex'),
(173, '162.19.25.94', '2024-01-16', 1, 'Beranda', 'anstorex'),
(174, '162.19.25.94', '2024-01-16', 1, 'Beranda', 'anstorex'),
(175, '162.19.25.94', '2024-01-16', 1, 'Beranda', 'anstorex'),
(176, '123.60.68.42', '2024-01-16', 1, 'Beranda', 'anstorex'),
(177, '162.19.25.94', '2024-01-16', 1, 'Slot', 'anstorex'),
(178, '162.19.25.94', '2024-01-16', 1, 'Slot', 'anstorex'),
(179, '162.19.25.94', '2024-01-16', 1, 'Contact', 'anstorex'),
(180, '162.19.25.94', '2024-01-16', 1, 'Contact', 'anstorex'),
(181, '162.19.25.94', '2024-01-16', 1, 'Daftar', 'anstorex'),
(182, '162.19.25.94', '2024-01-16', 1, 'Daftar', 'anstorex'),
(183, '162.19.25.94', '2024-01-16', 1, 'Slot', 'anstorex'),
(184, '162.19.25.94', '2024-01-16', 1, 'Slot', 'anstorex'),
(185, '162.19.25.94', '2024-01-16', 1, 'Togel', 'anstorex'),
(186, '162.19.25.94', '2024-01-16', 1, 'Togel', 'anstorex'),
(187, '162.19.25.94', '2024-01-16', 1, 'Sport', 'anstorex'),
(188, '162.19.25.94', '2024-01-16', 1, 'Sport', 'anstorex'),
(189, '162.19.25.94', '2024-01-16', 1, 'EGames', 'anstorex'),
(190, '162.19.25.94', '2024-01-16', 1, 'EGames', 'anstorex'),
(191, '162.19.25.94', '2024-01-16', 1, 'Promo', 'anstorex'),
(192, '162.19.25.94', '2024-01-16', 1, 'Promo', 'anstorex'),
(193, '2a02:4780:6:1258:0:c6e:d228:2', '2024-01-16', 1, 'Beranda', 'anstorex'),
(194, '43.134.37.211', '2024-01-16', 1, 'Beranda', 'anstorex'),
(195, '162.19.25.94', '2024-01-16', 1, 'Referral', 'anstorex'),
(196, '162.19.25.94', '2024-01-16', 1, 'Referral', 'anstorex'),
(197, '2001:4ba0:cafe:c13::1', '2024-01-16', 1, 'Beranda', 'anstorex'),
(198, '2404:c0:1c20::4d1:37f4', '2024-01-16', 1, 'Beranda', 'anstorex'),
(199, '2a02:4780:6:1258:0:c6e:d228:2', '2024-01-16', 1, 'Beranda', 'anstorex'),
(200, '2404:c0:1c20::4d1:37f4', '2024-01-16', 1, 'Masuk', 'anstorex'),
(201, '2404:c0:1c20::4d1:37f4', '2024-01-16', 1, 'Beranda', 'anstorex'),
(202, '2404:c0:1c20::4d1:37f4', '2024-01-16', 1, 'Beranda', 'anstorex'),
(203, '114.122.7.91', '2024-01-16', 1, 'Masuk', 'anstorex'),
(204, '114.122.7.91', '2024-01-16', 1, 'Masuk', 'anstorex'),
(205, '114.122.7.91', '2024-01-16', 1, 'Masuk', 'anstorex'),
(206, '114.122.7.91', '2024-01-16', 1, 'Masuk', 'anstorex'),
(207, '114.122.7.91', '2024-01-16', 1, 'Masuk', 'anstorex'),
(208, '114.122.7.91', '2024-01-16', 1, 'Beranda', 'anstorex'),
(209, '114.122.7.91', '2024-01-16', 1, 'Masuk', 'anstorex'),
(210, '114.122.7.91', '2024-01-16', 1, 'Beranda', 'anstorex'),
(211, '114.122.7.91', '2024-01-16', 1, 'Togel', 'anstorex'),
(212, '114.122.7.91', '2024-01-16', 1, 'Beranda', 'anstorex'),
(213, '159.69.69.113', '2024-01-16', 1, 'Beranda', 'anstorex'),
(214, '87.236.176.22', '2024-01-16', 1, 'Beranda', 'anstorex'),
(215, '2404:c0:1c20::4d1:37f4', '2024-01-16', 1, 'Beranda', 'anstorex'),
(216, '2404:c0:1c10::16d1:ca38', '2024-01-16', 1, 'Beranda', 'anstorex'),
(217, '2404:c0:1c10::16d1:ca38', '2024-01-16', 1, 'Masuk', 'anstorex'),
(218, '2404:c0:1c10::16d1:ca38', '2024-01-16', 1, 'Beranda', 'anstorex'),
(219, '2404:c0:1c10::16d1:ca38', '2024-01-16', 1, 'Beranda', 'anstorex'),
(220, '2404:c0:1c20::4d1:37f4', '2024-01-16', 1, 'Beranda', 'anstorex'),
(221, '2404:c0:1c10::16d1:ca38', '2024-01-16', 1, 'Beranda', 'anstorex'),
(222, '2404:c0:1c10::16d1:ca38', '2024-01-16', 1, 'Beranda', 'anstorex'),
(223, '2404:c0:1c10::16d1:ca38', '2024-01-16', 1, 'Beranda', 'anstorex'),
(224, '2404:c0:1c10::16d1:ca38', '2024-01-16', 1, 'Beranda', 'anstorex'),
(225, '114.122.7.91', '2024-01-16', 1, 'Beranda', 'anstorex'),
(226, '114.122.7.91', '2024-01-16', 1, 'Masuk', 'anstorex'),
(227, '114.122.7.91', '2024-01-16', 1, 'Daftar', 'anstorex'),
(228, '114.122.7.91', '2024-01-16', 1, 'Beranda', 'anstorex'),
(229, '2404:c0:1c10::16d1:ca38', '2024-01-16', 1, 'Beranda', 'anstorex'),
(230, '2404:c0:1c10::16d1:ca38', '2024-01-16', 1, 'Beranda', 'anstorex'),
(231, '2404:c0:1c10::16d1:ca38', '2024-01-16', 1, 'Beranda', 'anstorex'),
(232, '2404:c0:1c10::16d1:ca38', '2024-01-16', 1, 'Beranda', 'anstorex'),
(233, '114.122.7.91', '2024-01-16', 1, 'Beranda', 'anstorex'),
(234, '114.122.7.91', '2024-01-16', 1, 'Beranda', 'anstorex'),
(235, '114.122.7.91', '2024-01-16', 1, 'Beranda', 'anstorex'),
(236, '2a02:4780:6:1258:0:c6e:d228:2', '2024-01-16', 1, 'Beranda', 'anstorex'),
(237, '114.122.7.91', '2024-01-16', 1, 'Beranda', 'anstorex'),
(238, '2404:c0:1c10::16d1:ca38', '2024-01-16', 1, 'Beranda', 'anstorex'),
(239, '2404:c0:1c10::16d1:ca38', '2024-01-16', 1, 'Masuk', 'anstorex'),
(240, '2404:c0:1c10::16d1:ca38', '2024-01-16', 1, 'Masuk', 'anstorex'),
(241, '2404:c0:1c10::16d1:ca38', '2024-01-16', 1, 'Beranda', 'anstorex'),
(242, '2404:c0:1c10::16d1:ca38', '2024-01-16', 1, 'Beranda', 'anstorex'),
(243, '2404:c0:1c10::16d1:ca38', '2024-01-16', 1, 'Beranda', 'anstorex'),
(244, '14.215.163.132', '2024-01-16', 1, 'Beranda', 'anstorex'),
(245, '2404:c0:1c10::16d1:ca38', '2024-01-16', 1, 'Masuk', 'anstorex'),
(246, '2404:c0:1c10::16d1:ca38', '2024-01-16', 1, 'Masuk', 'anstorex'),
(247, '2404:c0:1c10::16d1:ca38', '2024-01-16', 1, 'Masuk', 'anstorex'),
(248, '2404:c0:1c20::4d1:37f4', '2024-01-16', 1, 'Beranda', 'anstorex'),
(249, '114.122.5.223', '2024-01-16', 1, 'Masuk', 'anstorex'),
(250, '114.122.5.223', '2024-01-16', 1, 'Beranda', 'anstorex'),
(251, '114.122.5.223', '2024-01-16', 1, 'Beranda', 'anstorex'),
(252, '114.122.5.223', '2024-01-16', 1, 'Slot', 'anstorex'),
(253, '2404:c0:1c10::16d1:ca38', '2024-01-16', 1, 'Masuk', 'anstorex'),
(254, '2404:c0:1c10::16d1:ca38', '2024-01-16', 1, 'Masuk', 'anstorex'),
(255, '2404:c0:1c10::16d1:ca38', '2024-01-16', 1, 'Daftar', 'anstorex'),
(256, '114.122.5.223', '2024-01-16', 1, 'Slot Lainnya', 'anstorex'),
(257, '114.122.5.223', '2024-01-16', 1, 'Slot Lainnya', 'anstorex'),
(258, '2404:c0:1c10::16d1:ca38', '2024-01-16', 1, 'Masuk', 'anstorex'),
(259, '114.122.5.223', '2024-01-16', 1, 'Slot Lainnya', 'anstorex'),
(260, '2404:c0:1c10::16d1:ca38', '2024-01-16', 1, 'Beranda', 'anstorex'),
(261, '114.122.5.223', '2024-01-16', 1, 'Beranda', 'anstorex'),
(262, '114.122.5.223', '2024-01-16', 1, 'Beranda', 'anstorex'),
(263, '114.122.5.223', '2024-01-16', 1, 'Beranda', 'anstorex'),
(264, '114.122.5.223', '2024-01-16', 1, 'Beranda', 'anstorex'),
(265, '114.122.5.223', '2024-01-16', 1, 'Beranda', 'anstorex'),
(266, '114.122.5.223', '2024-01-16', 1, 'Masuk', 'anstorex'),
(267, '114.122.5.223', '2024-01-16', 1, 'Daftar', 'anstorex'),
(268, '114.122.5.223', '2024-01-16', 1, 'Masuk', 'anstorex'),
(269, '114.122.5.223', '2024-01-16', 1, 'Daftar', 'anstorex'),
(270, '114.122.5.223', '2024-01-16', 1, 'Masuk', 'anstorex'),
(271, '114.122.5.223', '2024-01-16', 1, 'Beranda', 'anstorex'),
(272, '114.122.5.223', '2024-01-16', 1, 'Beranda', 'anstorex'),
(273, '114.122.5.223', '2024-01-16', 1, 'Beranda', 'anstorex'),
(274, '114.122.5.223', '2024-01-16', 1, 'Beranda', 'anstorex'),
(275, '114.122.5.223', '2024-01-16', 1, 'RTP Slot Pragmatic', 'anstorex'),
(276, '114.122.5.223', '2024-01-16', 1, 'RTP Slot Pragmatic', 'anstorex'),
(277, '114.122.5.223', '2024-01-16', 1, 'RTP Slot Pragmatic', 'anstorex'),
(278, '2a02:4780:6:1258:0:c6e:d228:2', '2024-01-16', 1, 'Beranda', 'anstorex'),
(279, '114.122.5.223', '2024-01-16', 1, 'Beranda', 'anstorex'),
(280, '43.135.166.178', '2024-01-16', 1, 'Beranda', 'anstorex'),
(281, '114.122.5.223', '2024-01-16', 1, 'RTP Slot Pragmatic', 'anstorex'),
(282, '2404:c0:1c10::16d1:ca38', '2024-01-16', 1, 'Beranda', 'anstorex'),
(283, '114.122.5.223', '2024-01-16', 1, 'Beranda', 'anstorex'),
(284, '114.122.5.223', '2024-01-16', 1, 'Beranda', 'anstorex'),
(285, '2404:c0:1c10::16d1:ca38', '2024-01-16', 1, 'Slot', 'anstorex'),
(286, '2404:c0:1c10::16d1:ca38', '2024-01-16', 1, 'Slot Lainnya', 'anstorex'),
(287, '114.122.5.223', '2024-01-16', 1, 'Beranda', 'anstorex'),
(288, '2404:c0:1c10::16d1:ca38', '2024-01-16', 1, 'Beranda', 'anstorex'),
(289, '2404:c0:1c10::16d1:ca38', '2024-01-16', 1, 'RTP Slot Pragmatic', 'anstorex'),
(290, '114.122.5.223', '2024-01-16', 1, 'RTP Slot Pragmatic', 'anstorex'),
(291, '2404:c0:1c10::16d1:ca38', '2024-01-16', 1, 'Slot Lainnya', 'anstorex'),
(292, '114.122.5.223', '2024-01-16', 1, 'Beranda', 'anstorex'),
(293, '2404:c0:1c10::16d1:ca38', '2024-01-16', 1, 'RTP Slot Pragmatic', 'anstorex'),
(294, '114.5.144.197', '2024-01-16', 1, 'Beranda', 'anstorex'),
(295, '114.5.144.197', '2024-01-16', 1, 'Beranda', 'anstorex'),
(296, '114.5.144.197', '2024-01-16', 1, 'RTP Slot Pragmatic', 'anstorex'),
(297, '114.5.144.197', '2024-01-16', 1, 'RTP Slot Pragmatic', 'anstorex'),
(298, '2404:c0:1c20::4d1:37f4', '2024-01-16', 1, 'Beranda', 'anstorex'),
(299, '2404:c0:1c20::4d1:37f4', '2024-01-16', 1, 'RTP Slot Pragmatic', 'anstorex'),
(300, '123.60.68.42', '2024-01-16', 1, 'Beranda', 'anstorex'),
(301, '87.236.176.233', '2024-01-16', 1, 'Beranda', 'anstorex'),
(302, '2404:c0:1c20::4d1:37f4', '2024-01-16', 1, 'RTP Slot Pragmatic', 'anstorex'),
(303, '2404:c0:1c20::4d1:37f4', '2024-01-16', 1, 'RTP Slot Pragmatic', 'anstorex'),
(304, '2404:c0:1c10::16d1:ca38', '2024-01-16', 1, 'RTP Slot Pragmatic', 'anstorex'),
(305, '2404:c0:1c10::16d1:ca38', '2024-01-16', 1, 'RTP Slot Pragmatic', 'anstorex'),
(306, '114.122.5.223', '2024-01-16', 1, 'Masuk', 'anstorex'),
(307, '114.122.5.223', '2024-01-16', 1, 'Beranda', 'anstorex'),
(308, '114.122.5.223', '2024-01-16', 1, 'Slot', 'anstorex'),
(309, '114.122.5.223', '2024-01-16', 1, 'Slot Lainnya', 'anstorex'),
(310, '114.122.5.223', '2024-01-16', 1, 'Slot Lainnya', 'anstorex'),
(311, '2404:c0:1c20::4d1:37f4', '2024-01-16', 1, 'Beranda', 'anstorex'),
(312, '114.122.5.223', '2024-01-16', 1, 'Slot Lainnya', 'anstorex'),
(313, '114.122.5.223', '2024-01-16', 1, 'Beranda', 'anstorex'),
(314, '114.122.5.223', '2024-01-16', 1, 'Beranda', 'anstorex'),
(315, '114.122.5.223', '2024-01-16', 1, 'Masuk', 'anstorex'),
(316, '114.122.5.223', '2024-01-16', 1, 'Daftar', 'anstorex'),
(317, '114.122.5.223', '2024-01-16', 1, 'Masuk', 'anstorex'),
(318, '114.122.5.223', '2024-01-16', 1, 'Beranda', 'anstorex'),
(319, '114.122.5.223', '2024-01-16', 1, 'Slot', 'anstorex'),
(320, '114.122.5.223', '2024-01-16', 1, 'Slot Lainnya', 'anstorex'),
(321, '114.122.5.223', '2024-01-16', 1, 'Slot Lainnya', 'anstorex'),
(322, '114.122.5.223', '2024-01-16', 1, 'Slot Lainnya', 'anstorex'),
(323, '2404:c0:1c10::16d1:ca38', '2024-01-16', 1, 'Beranda', 'anstorex'),
(324, '2404:c0:1c10::16d1:ca38', '2024-01-16', 1, 'Togel', 'anstorex'),
(325, '2404:c0:1c10::16d1:ca38', '2024-01-16', 1, 'Togel', 'anstorex'),
(326, '2404:c0:1c20::4d1:37f4', '2024-01-16', 1, 'Beranda', 'anstorex'),
(327, '2404:c0:1c10::16d1:ca38', '2024-01-16', 1, 'Beranda', 'anstorex'),
(328, '2404:c0:1c10::16d1:ca38', '2024-01-16', 1, 'Slot', 'anstorex'),
(329, '2a02:4780:6:1258:0:c6e:d228:2', '2024-01-16', 1, 'Beranda', 'anstorex'),
(330, '114.122.7.127', '2024-01-16', 1, 'Masuk', 'anstorex'),
(331, '114.122.7.127', '2024-01-16', 1, 'Beranda', 'anstorex'),
(332, '114.122.7.127', '2024-01-16', 1, 'Togel', 'anstorex'),
(333, '94.139.58.68', '2024-01-16', 1, 'Beranda', 'anstorex'),
(334, '114.122.7.127', '2024-01-16', 1, 'Masuk', 'anstorex'),
(335, '114.122.7.127', '2024-01-16', 1, 'Beranda', 'anstorex'),
(336, '2404:c0:1c10::16d1:ca38', '2024-01-16', 1, 'Slot', 'anstorex'),
(337, '2404:c0:1c10::16d1:ca38', '2024-01-16', 1, 'Beranda', 'anstorex'),
(338, '2404:c0:1c10::16d1:ca38', '2024-01-16', 1, 'Masuk', 'anstorex'),
(339, '114.122.7.127', '2024-01-16', 1, 'Masuk', 'anstorex'),
(340, '2404:c0:1c10::16d1:ca38', '2024-01-16', 1, 'Beranda', 'anstorex'),
(341, '188.240.49.196', '2024-01-16', 1, 'Beranda', 'anstorex'),
(342, '2404:c0:1c20::4d9:5022', '2024-01-16', 1, 'Beranda', 'anstorex'),
(343, '114.122.7.127', '2024-01-16', 1, 'Daftar', 'anstorex'),
(344, '114.122.7.127', '2024-01-16', 1, 'Daftar', 'anstorex'),
(345, '2a02:4780:6:1258:0:c6e:d228:2', '2024-01-17', 1, 'Beranda', 'anstorex'),
(346, '3.94.171.0', '2024-01-17', 1, 'Beranda', 'anstorex'),
(347, '87.236.176.129', '2024-01-17', 1, 'Beranda', 'anstorex'),
(348, '114.122.7.127', '2024-01-17', 1, 'Masuk', 'anstorex'),
(349, '114.122.7.127', '2024-01-17', 1, 'Beranda', 'anstorex'),
(350, '114.122.7.127', '2024-01-17', 1, 'Beranda', 'anstorex'),
(351, '114.122.7.127', '2024-01-17', 1, 'Beranda', 'anstorex'),
(352, '114.122.7.127', '2024-01-17', 1, 'Slot', 'anstorex'),
(353, '114.122.7.127', '2024-01-17', 1, 'Slot Lainnya', 'anstorex'),
(354, '2404:c0:1c10::16d1:ca38', '2024-01-17', 1, 'Beranda', 'anstorex'),
(355, '2404:c0:1c10::16d1:ca38', '2024-01-17', 1, 'Masuk', 'anstorex'),
(356, '2404:c0:1c10::16d1:ca38', '2024-01-17', 1, 'Masuk', 'anstorex'),
(357, '2404:c0:1c10::16d1:ca38', '2024-01-17', 1, 'Masuk', 'anstorex'),
(358, '2404:c0:1c10::16d1:ca38', '2024-01-17', 1, 'Daftar', 'anstorex'),
(359, '2404:c0:1c10::16d1:ca38', '2024-01-17', 1, 'Daftar', 'anstorex'),
(360, '135.148.195.7', '2024-01-17', 1, 'Beranda', 'anstorex'),
(361, '114.122.7.127', '2024-01-17', 1, 'Slot Lainnya', 'anstorex'),
(362, '114.122.7.127', '2024-01-17', 1, 'Slot Lainnya', 'anstorex'),
(363, '114.122.7.127', '2024-01-17', 1, 'Slot Lainnya', 'anstorex'),
(364, '114.122.7.127', '2024-01-17', 1, 'Masuk', 'anstorex'),
(365, '114.122.7.127', '2024-01-17', 1, 'Daftar', 'anstorex'),
(366, '2404:c0:1c10::16d1:ca38', '2024-01-17', 1, 'Daftar', 'anstorex'),
(367, '114.122.7.127', '2024-01-17', 1, 'Daftar', 'anstorex'),
(368, '2404:c0:1c10::16d1:ca38', '2024-01-17', 1, 'Beranda', 'anstorex'),
(369, '2a02:4780:6:1258:0:c6e:d228:2', '2024-01-17', 1, 'Beranda', 'anstorex'),
(370, '43.134.37.211', '2024-01-17', 1, 'Beranda', 'anstorex'),
(371, '139.99.237.35', '2024-01-17', 1, 'Beranda', 'anstorex'),
(372, '139.99.237.35', '2024-01-17', 1, 'Beranda', 'anstorex'),
(373, '139.99.237.35', '2024-01-17', 1, 'Beranda', 'anstorex'),
(374, '139.99.237.35', '2024-01-17', 1, 'Beranda', 'anstorex'),
(375, '139.99.237.35', '2024-01-17', 1, 'Slot', 'anstorex'),
(376, '139.99.237.35', '2024-01-17', 1, 'Slot', 'anstorex'),
(377, '139.99.237.35', '2024-01-17', 1, 'Contact', 'anstorex'),
(378, '139.99.237.35', '2024-01-17', 1, 'Contact', 'anstorex'),
(379, '139.99.237.35', '2024-01-17', 1, 'Daftar', 'anstorex'),
(380, '139.99.237.35', '2024-01-17', 1, 'Daftar', 'anstorex'),
(381, '139.99.237.35', '2024-01-17', 1, 'Slot', 'anstorex'),
(382, '139.99.237.35', '2024-01-17', 1, 'Slot', 'anstorex'),
(383, '139.99.237.35', '2024-01-17', 1, 'Slot', 'anstorex'),
(384, '139.99.237.35', '2024-01-17', 1, 'Slot', 'anstorex'),
(385, '139.99.237.35', '2024-01-17', 1, 'Togel', 'anstorex'),
(386, '139.99.237.35', '2024-01-17', 1, 'Togel', 'anstorex'),
(387, '139.99.237.35', '2024-01-17', 1, 'Sport', 'anstorex'),
(388, '139.99.237.35', '2024-01-17', 1, 'Sport', 'anstorex'),
(389, '139.99.237.35', '2024-01-17', 1, 'EGames', 'anstorex'),
(390, '139.99.237.35', '2024-01-17', 1, 'EGames', 'anstorex'),
(391, '139.99.237.35', '2024-01-17', 1, 'Fishing', 'anstorex'),
(392, '139.99.237.35', '2024-01-17', 1, 'Fishing', 'anstorex'),
(393, '139.99.237.35', '2024-01-17', 1, 'Promo', 'anstorex'),
(394, '139.99.237.35', '2024-01-17', 1, 'Promo', 'anstorex'),
(395, '139.99.237.35', '2024-01-17', 1, 'Referral', 'anstorex'),
(396, '139.99.237.35', '2024-01-17', 1, 'Referral', 'anstorex'),
(397, '139.99.237.35', '2024-01-17', 1, 'Masuk', 'anstorex'),
(398, '139.99.237.35', '2024-01-17', 1, 'Masuk', 'anstorex'),
(399, '139.99.237.35', '2024-01-17', 1, 'Tentang Kami', 'anstorex'),
(400, '139.99.237.35', '2024-01-17', 1, 'Tentang Kami', 'anstorex'),
(401, '139.99.237.35', '2024-01-17', 1, 'Pertanyaan', 'anstorex'),
(402, '139.99.237.35', '2024-01-17', 1, 'Pertanyaan', 'anstorex'),
(403, '139.99.237.35', '2024-01-17', 1, 'Ketentuan', 'anstorex'),
(404, '139.99.237.35', '2024-01-17', 1, 'Ketentuan', 'anstorex'),
(405, '139.99.237.35', '2024-01-17', 1, 'Kebijakan', 'anstorex'),
(406, '139.99.237.35', '2024-01-17', 1, 'Kebijakan', 'anstorex'),
(407, '176.53.223.128', '2024-01-17', 1, 'Beranda', 'anstorex'),
(408, '139.99.237.35', '2024-01-17', 1, 'RTP Slot Pragmatic', 'anstorex'),
(409, '139.99.237.35', '2024-01-17', 1, 'RTP Slot Pragmatic', 'anstorex'),
(410, '139.99.237.35', '2024-01-17', 1, 'Slot Lainnya', 'anstorex'),
(411, '139.99.237.35', '2024-01-17', 1, 'Slot Lainnya', 'anstorex'),
(412, '139.99.237.35', '2024-01-17', 1, 'Beranda', 'anstorex'),
(413, '139.99.237.35', '2024-01-17', 1, 'Beranda', 'anstorex'),
(414, '139.99.237.35', '2024-01-17', 1, 'Slot', 'anstorex'),
(415, '139.99.237.35', '2024-01-17', 1, 'Slot', 'anstorex'),
(416, '139.99.237.35', '2024-01-17', 1, 'Contact', 'anstorex'),
(417, '139.99.237.35', '2024-01-17', 1, 'Contact', 'anstorex'),
(418, '139.99.237.35', '2024-01-17', 1, 'Daftar', 'anstorex'),
(419, '139.99.237.35', '2024-01-17', 1, 'Slot', 'anstorex'),
(420, '139.99.237.35', '2024-01-17', 1, 'Slot', 'anstorex'),
(421, '139.99.237.35', '2024-01-17', 1, 'Slot', 'anstorex'),
(422, '139.99.237.35', '2024-01-17', 1, 'Slot', 'anstorex'),
(423, '139.99.237.35', '2024-01-17', 1, 'Slot', 'anstorex'),
(424, '139.99.237.35', '2024-01-17', 1, 'Togel', 'anstorex'),
(425, '139.99.237.35', '2024-01-17', 1, 'Togel', 'anstorex'),
(426, '139.99.237.35', '2024-01-17', 1, 'Sport', 'anstorex'),
(427, '139.99.237.35', '2024-01-17', 1, 'Sport', 'anstorex'),
(428, '18.213.107.7', '2024-01-17', 1, 'Beranda', 'anstorex'),
(429, '139.99.237.35', '2024-01-17', 1, 'EGames', 'anstorex'),
(430, '139.99.237.35', '2024-01-17', 1, 'EGames', 'anstorex'),
(431, '139.99.237.35', '2024-01-17', 1, 'Fishing', 'anstorex'),
(432, '139.99.237.35', '2024-01-17', 1, 'Fishing', 'anstorex'),
(433, '103.139.48.235', '2024-01-17', 1, 'Beranda', 'anstorex'),
(434, '34.72.176.129', '2024-01-17', 1, 'Beranda', 'anstorex'),
(435, '34.122.147.229', '2024-01-17', 1, 'Beranda', 'anstorex'),
(436, '139.99.237.35', '2024-01-17', 1, 'Promo', 'anstorex'),
(437, '139.99.237.35', '2024-01-17', 1, 'Promo', 'anstorex'),
(438, '34.116.248.31', '2024-01-17', 1, 'Beranda', 'anstorex'),
(439, '34.116.248.31', '2024-01-17', 1, 'Beranda', 'anstorex'),
(440, '139.99.237.35', '2024-01-17', 1, 'Referral', 'anstorex'),
(441, '139.99.237.35', '2024-01-17', 1, 'Referral', 'anstorex'),
(442, '2a02:4780:6:1258:0:c6e:d228:2', '2024-01-17', 1, 'Beranda', 'anstorex'),
(443, '139.99.237.35', '2024-01-17', 1, 'Masuk', 'anstorex'),
(444, '139.99.237.35', '2024-01-17', 1, 'Masuk', 'anstorex'),
(445, '139.99.237.35', '2024-01-17', 1, 'Tentang Kami', 'anstorex'),
(446, '139.99.237.35', '2024-01-17', 1, 'Tentang Kami', 'anstorex'),
(447, '139.99.237.35', '2024-01-17', 1, 'Pertanyaan', 'anstorex'),
(448, '139.99.237.35', '2024-01-17', 1, 'Pertanyaan', 'anstorex'),
(449, '139.99.237.35', '2024-01-17', 1, 'Ketentuan', 'anstorex'),
(450, '139.99.237.35', '2024-01-17', 1, 'Ketentuan', 'anstorex'),
(451, '139.99.237.35', '2024-01-17', 1, 'RTP Slot Pragmatic', 'anstorex'),
(452, '139.99.237.35', '2024-01-17', 1, 'Slot Lainnya', 'anstorex'),
(453, '139.99.237.35', '2024-01-17', 1, 'Slot Lainnya', 'anstorex'),
(454, '139.99.237.35', '2024-01-17', 1, 'Slot Lainnya', 'anstorex'),
(455, '205.169.39.236', '2024-01-17', 1, 'Beranda', 'anstorex'),
(456, '114.122.10.79', '2024-01-17', 1, 'Beranda', 'anstorex'),
(457, '2a02:4780:6:1258:0:c6e:d228:2', '2024-01-17', 1, 'Beranda', 'anstorex'),
(458, '2a02:4780:6:1258:0:c6e:d228:2', '2024-01-17', 1, 'Beranda', 'anstorex'),
(459, '43.159.128.149', '2024-01-17', 1, 'Beranda', 'anstorex'),
(460, '183.129.153.157', '2024-01-17', 1, 'Beranda', 'anstorex'),
(461, '2a02:4780:6:1258:0:c6e:d228:2', '2024-01-17', 1, 'Beranda', 'anstorex'),
(462, '2404:c0:1c10::16de:dd1c', '2024-01-17', 1, 'Beranda', 'anstorex'),
(463, '18.232.127.136', '2024-01-17', 1, 'Beranda', 'anstorex'),
(464, '54.145.77.120', '2024-01-17', 1, 'Beranda', 'anstorex'),
(465, '2600:3c00::f03c:94ff:fe60:e1ec', '2024-01-17', 1, 'Beranda', 'anstorex'),
(466, '2a02:4780:6:1258:0:c6e:d228:2', '2024-01-17', 1, 'Beranda', 'anstorex'),
(467, '176.53.216.212', '2024-01-17', 1, 'Beranda', 'anstorex'),
(468, '123.60.68.42', '2024-01-17', 1, 'Beranda', 'anstorex'),
(469, '164.90.184.41', '2024-01-17', 1, 'Beranda', 'anstorex'),
(470, '2a02:4780:6:1258:0:c6e:d228:2', '2024-01-17', 1, 'Beranda', 'anstorex'),
(471, '43.133.66.151', '2024-01-17', 1, 'Beranda', 'anstorex'),
(472, '2a02:4780:6:c0de::10', '2024-01-17', 1, 'Beranda', 'anstorex'),
(473, '3.71.21.58', '2024-01-17', 1, 'Beranda', 'anstorex'),
(474, '193.36.118.219', '2024-01-17', 1, 'Beranda', 'anstorex'),
(475, '188.165.87.102', '2024-01-17', 1, 'Beranda', 'anstorex'),
(476, '2a02:4780:6:1258:0:c6e:d228:2', '2024-01-17', 1, 'Beranda', 'anstorex'),
(477, '129.226.158.26', '2024-01-17', 1, 'Beranda', 'anstorex'),
(478, '154.30.116.246', '2024-01-17', 1, 'Beranda', 'anstorex'),
(479, '3.71.21.58', '2024-01-17', 1, 'Beranda', 'anstorex'),
(480, '3.71.21.58', '2024-01-17', 1, 'Beranda', 'anstorex'),
(481, '92.17.137.103', '2024-01-17', 1, 'Beranda', 'anstorex'),
(482, '2404:c0:1c10::16e3:d664', '2024-01-17', 1, 'Beranda', 'anstorex'),
(483, '2404:c0:1c10::16e3:d664', '2024-01-17', 1, 'Masuk', 'anstorex'),
(484, '2404:c0:1c10::16e3:d664', '2024-01-17', 1, 'Beranda', 'anstorex'),
(485, '2404:c0:1c10::16e3:d664', '2024-01-17', 1, 'Togel', 'anstorex'),
(486, '2404:c0:1c10::16e3:d664', '2024-01-17', 1, 'Beranda', 'anstorex'),
(487, '2404:c0:1c10::16e3:d664', '2024-01-17', 1, 'RTP Slot Pragmatic', 'anstorex'),
(488, '2404:c0:1c10::16e3:d664', '2024-01-17', 1, 'Slot', 'anstorex'),
(489, '2404:c0:1c10::16e3:d664', '2024-01-17', 1, 'Slot Lainnya', 'anstorex'),
(490, '2404:c0:1c10::16e3:d664', '2024-01-17', 1, 'Slot Lainnya', 'anstorex'),
(491, '2404:c0:1c10::16e3:d664', '2024-01-17', 1, 'Slot Lainnya', 'anstorex'),
(492, '2404:c0:1c10::16e3:d664', '2024-01-17', 1, 'Sport', 'anstorex'),
(493, '2404:c0:1c10::16e3:d664', '2024-01-17', 1, 'EGames', 'anstorex'),
(494, '2404:c0:1c10::16e3:d664', '2024-01-17', 1, 'Fishing', 'anstorex'),
(495, '15.204.182.106', '2024-01-17', 1, 'Beranda', 'anstorex'),
(496, '2a02:4780:6:1258:0:c6e:d228:2', '2024-01-17', 1, 'Beranda', 'anstorex'),
(497, '43.131.62.4', '2024-01-17', 1, 'Beranda', 'anstorex'),
(498, '37.187.215.241', '2024-01-17', 1, 'Beranda', 'anstorex'),
(499, '2404:c0:1c10::16e3:d664', '2024-01-17', 1, 'Beranda', 'anstorex'),
(500, '15.204.182.106', '2024-01-17', 1, 'Beranda', 'anstorex'),
(501, '2a02:4780:6:1258:0:c6e:d228:2', '2024-01-17', 1, 'Beranda', 'anstorex'),
(502, '5.164.29.116', '2024-01-17', 1, 'Beranda', 'anstorex'),
(503, '2404:c0:1c10::16e3:d664', '2024-01-17', 1, 'Masuk', 'anstorex'),
(504, '2404:c0:1c10::16e3:d664', '2024-01-17', 1, 'Masuk', 'anstorex'),
(505, '2404:c0:1c10::16e3:d664', '2024-01-17', 1, 'Masuk', 'anstorex'),
(506, '2404:c0:1c10::16e3:d664', '2024-01-17', 1, 'Masuk', 'anstorex'),
(507, '2a02:4780:6:1258:0:c6e:d228:2', '2024-01-17', 1, 'Beranda', 'anstorex'),
(508, '2a01:4f8:1c1c:e9fa::1', '2024-01-17', 1, 'Beranda', 'anstorex'),
(509, '51.254.49.107', '2024-01-17', 1, 'Beranda', 'anstorex'),
(510, '8.138.110.149', '2024-01-17', 1, 'Beranda', 'anstorex'),
(511, '45.87.212.59', '2024-01-17', 1, 'Beranda', 'anstorex'),
(512, '185.253.96.13', '2024-01-17', 1, 'Beranda', 'anstorex'),
(513, '3.79.106.245', '2024-01-17', 1, 'Beranda', 'anstorex'),
(514, '146.190.13.187', '2024-01-17', 1, 'Beranda', 'anstorex'),
(515, '23.111.114.116', '2024-01-17', 1, 'Beranda', 'anstorex'),
(516, '2a02:4780:6:1258:0:c6e:d228:2', '2024-01-17', 1, 'Beranda', 'anstorex'),
(517, '37.187.215.253', '2024-01-17', 1, 'Beranda', 'anstorex'),
(518, '34.106.10.20', '2024-01-17', 1, 'Beranda', 'anstorex'),
(519, '34.106.10.20', '2024-01-17', 1, 'Beranda', 'anstorex'),
(520, '2a02:4780:6:1258:0:c6e:d228:2', '2024-01-17', 1, 'Beranda', 'anstorex'),
(521, '51.254.49.110', '2024-01-17', 1, 'Beranda', 'anstorex'),
(522, '114.122.10.79', '2024-01-17', 1, 'Beranda', 'anstorex'),
(523, '157.37.215.100', '2024-01-17', 1, 'Beranda', 'anstorex'),
(524, '35.90.52.181', '2024-01-17', 1, 'Beranda', 'anstorex'),
(525, '51.254.49.106', '2024-01-17', 1, 'Beranda', 'anstorex'),
(526, '2a02:4780:6:1258:0:c6e:d228:2', '2024-01-17', 1, 'Beranda', 'anstorex'),
(527, '51.195.232.197', '2024-01-17', 1, 'Beranda', 'anstorex'),
(528, '95.177.180.85', '2024-01-17', 1, 'Beranda', 'anstorex'),
(529, '95.177.180.85', '2024-01-17', 1, 'Beranda', 'anstorex'),
(530, '95.177.180.85', '2024-01-17', 1, 'Beranda', 'anstorex'),
(531, '37.187.215.246', '2024-01-17', 1, 'Beranda', 'anstorex'),
(532, '93.158.90.40', '2024-01-17', 1, 'Beranda', 'anstorex'),
(533, '123.187.240.242', '2024-01-17', 1, 'Beranda', 'anstorex'),
(534, '2a02:4780:6:1258:0:c6e:d228:2', '2024-01-17', 1, 'Beranda', 'anstorex'),
(535, '103.77.42.106', '2024-01-17', 1, 'Beranda', 'anstorex'),
(536, '18.201.254.237', '2024-01-17', 1, 'Beranda', 'anstorex'),
(537, '172.252.89.39', '2024-01-17', 1, 'Beranda', 'anstorex'),
(538, '2a02:4780:6:1258:0:c6e:d228:2', '2024-01-17', 1, 'Beranda', 'anstorex'),
(539, '89.104.101.243', '2024-01-17', 1, 'Beranda', 'anstorex'),
(540, '2a02:4780:6:1258:0:c6e:d228:2', '2024-01-17', 1, 'Beranda', 'anstorex'),
(541, '34.123.170.104', '2024-01-17', 1, 'Beranda', 'anstorex'),
(542, '34.72.176.129', '2024-01-17', 1, 'Beranda', 'anstorex'),
(543, '34.118.13.130', '2024-01-17', 1, 'Beranda', 'anstorex'),
(544, '204.217.147.121', '2024-01-17', 1, 'Beranda', 'anstorex'),
(545, '35.172.234.250', '2024-01-17', 1, 'Beranda', 'anstorex'),
(546, '44.200.17.54', '2024-01-17', 1, 'Beranda', 'anstorex'),
(547, '38.154.186.240', '2024-01-17', 1, 'Beranda', 'anstorex'),
(548, '191.102.187.210', '2024-01-17', 1, 'Beranda', 'anstorex'),
(549, '2a02:4780:6:1258:0:c6e:d228:2', '2024-01-17', 1, 'Beranda', 'anstorex'),
(550, '122.176.197.3', '2024-01-17', 1, 'Beranda', 'anstorex'),
(551, '2a01:4f8:10a:2d6::2', '2024-01-17', 1, 'Beranda', 'anstorex'),
(552, '34.102.115.168', '2024-01-17', 1, 'Beranda', 'anstorex'),
(553, '34.102.115.168', '2024-01-17', 1, 'Beranda', 'anstorex'),
(554, '2a02:4780:6:1258:0:c6e:d228:2', '2024-01-17', 1, 'Beranda', 'anstorex'),
(555, '43.153.93.68', '2024-01-17', 1, 'Beranda', 'anstorex'),
(556, '114.122.10.79', '2024-01-17', 1, 'Beranda', 'anstorex'),
(557, '114.122.10.79', '2024-01-17', 1, 'Beranda', 'anstorex'),
(558, '114.122.10.79', '2024-01-17', 1, 'Beranda', 'anstorex'),
(559, '114.122.10.79', '2024-01-17', 1, 'Beranda', 'anstorex'),
(560, '209.127.252.181', '2024-01-17', 1, 'Beranda', 'anstorex'),
(561, '2804:1e68:c221:724a:7140:c3ee:d21e:51e6', '2024-01-17', 1, 'Beranda', 'anstorex'),
(562, '2a02:4780:6:1258:0:c6e:d228:2', '2024-01-17', 1, 'Beranda', 'anstorex'),
(563, '122.180.191.197', '2024-01-17', 1, 'Contact', 'anstorex'),
(564, '123.60.68.42', '2024-01-17', 1, 'Beranda', 'anstorex'),
(565, '20.172.154.149', '2024-01-17', 1, 'Beranda', 'anstorex'),
(566, '2404:c0:1c20::4d6:bc6a', '2024-01-17', 1, 'Beranda', 'anstorex'),
(567, '2404:c0:1c20::4d6:bc6a', '2024-01-17', 1, 'Masuk', 'anstorex'),
(568, '2404:c0:1c20::4d6:bc6a', '2024-01-17', 1, 'Masuk', 'anstorex'),
(569, '2404:c0:1c20::4d6:bc6a', '2024-01-17', 1, 'Daftar', 'anstorex'),
(570, '2404:c0:1c20::4d6:bc6a', '2024-01-17', 1, 'Masuk', 'anstorex'),
(571, '20.172.154.149', '2024-01-17', 1, 'Beranda', 'anstorex'),
(572, '114.122.5.123', '2024-01-17', 1, 'Beranda', 'anstorex'),
(573, '114.122.5.123', '2024-01-17', 1, 'Beranda', 'anstorex'),
(574, '114.122.5.123', '2024-01-17', 1, 'Beranda', 'anstorex'),
(575, '114.122.5.123', '2024-01-17', 1, 'Beranda', 'anstorex'),
(576, '114.122.5.123', '2024-01-17', 1, 'Beranda', 'anstorex'),
(577, '114.122.4.147', '2024-01-17', 1, 'Beranda', 'anstorex'),
(578, '114.122.5.123', '2024-01-17', 1, 'Beranda', 'anstorex'),
(579, '114.122.5.123', '2024-01-17', 1, 'Beranda', 'anstorex'),
(580, '114.122.4.147', '2024-01-17', 1, 'Beranda', 'anstorex'),
(581, '114.122.5.123', '2024-01-17', 1, 'Beranda', 'anstorex'),
(582, '114.122.4.147', '2024-01-17', 1, 'Beranda', 'anstorex'),
(583, '114.122.4.147', '2024-01-17', 1, 'Beranda', 'anstorex'),
(584, '114.122.5.123', '2024-01-17', 1, 'Beranda', 'anstorex'),
(585, '114.122.5.123', '2024-01-17', 1, 'Beranda', 'anstorex'),
(586, '114.122.4.147', '2024-01-17', 1, 'Beranda', 'anstorex'),
(587, '114.122.5.123', '2024-01-17', 1, 'Beranda', 'anstorex'),
(588, '2a02:4780:6:1258:0:c6e:d228:2', '2024-01-17', 1, 'Beranda', 'anstorex'),
(589, '114.122.5.123', '2024-01-17', 1, 'Beranda', 'anstorex'),
(590, '114.122.5.123', '2024-01-17', 1, 'Beranda', 'anstorex'),
(591, '114.122.5.123', '2024-01-17', 1, 'Beranda', 'anstorex'),
(592, '114.122.5.123', '2024-01-17', 1, 'Beranda', 'anstorex'),
(593, '114.122.4.147', '2024-01-17', 1, 'Beranda', 'anstorex'),
(594, '114.122.4.147', '2024-01-17', 1, 'Beranda', 'anstorex'),
(595, '114.122.4.147', '2024-01-17', 1, 'Beranda', 'anstorex'),
(596, '114.122.5.123', '2024-01-17', 1, 'Beranda', 'anstorex'),
(597, '114.122.4.147', '2024-01-17', 1, 'Beranda', 'anstorex'),
(598, '114.122.4.147', '2024-01-17', 1, 'Beranda', 'anstorex'),
(599, '114.122.4.147', '2024-01-17', 1, 'Beranda', 'anstorex'),
(600, '114.122.5.123', '2024-01-17', 1, 'Beranda', 'anstorex'),
(601, '20.172.154.149', '2024-01-17', 1, 'Contact', 'anstorex'),
(602, '20.172.154.149', '2024-01-17', 1, 'Contact', 'anstorex'),
(603, '114.122.5.123', '2024-01-17', 1, 'Beranda', 'anstorex'),
(604, '114.122.5.123', '2024-01-17', 1, 'Beranda', 'anstorex'),
(605, '114.122.5.123', '2024-01-17', 1, 'Beranda', 'anstorex'),
(606, '2404:c0:1c20::4df:277f', '2024-01-17', 1, 'Beranda', 'anstorex'),
(607, '114.122.5.123', '2024-01-17', 1, 'Masuk', 'anstorex'),
(608, '114.122.5.123', '2024-01-17', 1, 'Beranda', 'anstorex'),
(609, '114.122.5.123', '2024-01-17', 1, 'Beranda', 'anstorex'),
(610, '114.122.5.123', '2024-01-17', 1, 'Slot', 'anstorex'),
(611, '114.122.5.123', '2024-01-17', 1, 'Slot Lainnya', 'anstorex'),
(612, '114.122.5.123', '2024-01-17', 1, 'Slot', 'anstorex'),
(613, '114.122.5.123', '2024-01-17', 1, 'Slot', 'anstorex'),
(614, '114.122.5.123', '2024-01-17', 1, 'Slot Lainnya', 'anstorex'),
(615, '114.122.5.123', '2024-01-17', 1, 'Slot Lainnya', 'anstorex'),
(616, '114.122.5.123', '2024-01-17', 1, 'Slot Lainnya', 'anstorex'),
(617, '114.122.5.123', '2024-01-17', 1, 'Slot Lainnya', 'anstorex'),
(618, '114.122.5.123', '2024-01-17', 1, 'Slot Lainnya', 'anstorex'),
(619, '114.122.5.123', '2024-01-17', 1, 'Slot', 'anstorex'),
(620, '114.122.5.123', '2024-01-17', 1, 'Slot', 'anstorex'),
(621, '114.122.5.123', '2024-01-17', 1, 'Slot', 'anstorex'),
(622, '114.122.5.123', '2024-01-17', 1, 'Slot', 'anstorex'),
(623, '114.122.5.123', '2024-01-17', 1, 'Slot', 'anstorex'),
(624, '114.122.5.123', '2024-01-17', 1, 'Slot', 'anstorex'),
(625, '2a02:4780:6:1258:0:c6e:d228:2', '2024-01-17', 1, 'Beranda', 'anstorex'),
(626, '170.106.101.31', '2024-01-17', 1, 'Beranda', 'anstorex'),
(627, '15.204.182.106', '2024-01-17', 1, 'Fishing', 'anstorex'),
(628, '2600:1900:2000:93::1:1900', '2024-01-17', 1, 'Beranda', 'anstorex'),
(629, '52.13.112.64', '2024-01-17', 1, 'Beranda', 'anstorex'),
(630, '3.140.243.188', '2024-01-17', 1, 'Beranda', 'anstorex'),
(631, '52.13.112.64', '2024-01-17', 1, 'Beranda', 'anstorex'),
(632, '54.245.21.62', '2024-01-17', 1, 'Beranda', 'anstorex'),
(633, '54.245.21.62', '2024-01-17', 1, 'Beranda', 'anstorex'),
(634, '2600:1900:2000:93::1:1900', '2024-01-17', 1, 'Beranda', 'anstorex'),
(635, '54.245.21.62', '2024-01-17', 1, 'Beranda', 'anstorex'),
(636, '54.245.21.62', '2024-01-17', 1, 'Slot', 'anstorex'),
(637, '54.245.21.62', '2024-01-17', 1, 'Contact', 'anstorex'),
(638, '54.245.21.62', '2024-01-17', 1, 'Daftar', 'anstorex'),
(639, '54.245.21.62', '2024-01-17', 1, 'Slot', 'anstorex'),
(640, '54.245.21.62', '2024-01-17', 1, 'Slot', 'anstorex'),
(641, '54.174.62.142', '2024-01-17', 1, 'Beranda', 'anstorex'),
(642, '54.245.21.62', '2024-01-17', 1, 'Togel', 'anstorex'),
(643, '54.245.21.62', '2024-01-17', 1, 'Beranda', 'anstorex'),
(644, '54.245.21.62', '2024-01-17', 1, 'Slot', 'anstorex'),
(645, '54.245.21.62', '2024-01-17', 1, 'Contact', 'anstorex'),
(646, '54.245.21.62', '2024-01-17', 1, 'Daftar', 'anstorex'),
(647, '54.245.21.62', '2024-01-17', 1, 'Slot', 'anstorex'),
(648, '54.245.21.62', '2024-01-17', 1, 'Slot', 'anstorex'),
(649, '54.245.21.62', '2024-01-17', 1, 'Togel', 'anstorex'),
(650, '2a02:4780:6:1258:0:c6e:d228:2', '2024-01-17', 1, 'Beranda', 'anstorex'),
(651, '2404:c0:1c20::4de:c104', '2024-01-17', 1, 'Beranda', 'anstorex'),
(652, '2409:40d2:1015:4fcc:2cd1:aa00:edd6:a307', '2024-01-17', 1, 'Contact', 'anstorex'),
(653, '144.217.135.237', '2024-01-17', 1, 'Beranda', 'anstorex'),
(654, '144.217.135.237', '2024-01-17', 1, 'Beranda', 'anstorex'),
(655, '144.217.135.237', '2024-01-17', 1, 'Contact', 'anstorex'),
(656, '144.217.135.237', '2024-01-17', 1, 'Ketentuan', 'anstorex'),
(657, '144.217.135.237', '2024-01-17', 1, 'Tentang Kami', 'anstorex'),
(658, '144.217.135.237', '2024-01-17', 1, 'Masuk', 'anstorex'),
(659, '144.217.135.237', '2024-01-17', 1, 'Slot', 'anstorex'),
(660, '144.217.135.237', '2024-01-17', 1, 'Daftar', 'anstorex'),
(661, '144.217.135.237', '2024-01-17', 1, 'Slot', 'anstorex'),
(662, '144.217.135.237', '2024-01-17', 1, 'Slot', 'anstorex'),
(663, '144.217.135.237', '2024-01-17', 1, 'Togel', 'anstorex'),
(664, '144.217.135.237', '2024-01-17', 1, 'Beranda', 'anstorex'),
(665, '149.56.160.175', '2024-01-17', 1, 'Beranda', 'anstorex'),
(666, '2001:bc8:1201:1d:ba2a:72ff:fee1:1d32', '2024-01-17', 1, 'Beranda', 'anstorex'),
(667, '167.94.138.49', '2024-01-17', 1, 'Beranda', 'anstorex'),
(668, '2a02:4780:6:1258:0:c6e:d228:2', '2024-01-18', 1, 'Beranda', 'anstorex'),
(669, '162.142.125.10', '2024-01-18', 1, 'Beranda', 'anstorex'),
(670, '15.206.235.52', '2024-01-18', 1, 'Beranda', 'anstorex'),
(671, '2404:c0:1c10::1707:d499', '2024-01-18', 1, 'Beranda', 'anstorex'),
(672, '199.45.155.35', '2024-01-18', 1, 'Beranda', 'anstorex'),
(673, '199.45.154.51', '2024-01-18', 1, 'Beranda', 'anstorex'),
(674, '199.45.154.51', '2024-01-18', 1, 'Beranda', 'anstorex'),
(675, '40.77.167.54', '2024-01-18', 1, 'Beranda', 'anstorex'),
(676, '52.167.144.24', '2024-01-18', 1, 'Masuk', 'anstorex'),
(677, '180.242.69.24', '2024-01-18', 1, 'Beranda', 'anstorex'),
(678, '110.50.80.198', '2024-01-18', 1, 'Beranda', 'anstorex'),
(679, '180.242.69.24', '2024-01-18', 1, 'Beranda', 'anstorex'),
(680, '180.242.69.24', '2024-01-18', 1, 'Slot', 'anstorex'),
(681, '180.242.69.24', '2024-01-18', 1, 'Slot', 'anstorex'),
(682, '180.242.69.24', '2024-01-18', 1, 'Beranda', 'anstorex'),
(683, '180.242.69.24', '2024-01-18', 1, 'Beranda', 'anstorex'),
(684, '180.242.69.24', '2024-01-18', 1, 'Togel', 'anstorex'),
(685, '180.242.69.24', '2024-01-18', 1, 'Beranda', 'anstorex'),
(686, '180.242.69.24', '2024-01-18', 1, 'Togel', 'anstorex'),
(687, '180.242.69.24', '2024-01-18', 1, 'Beranda', 'anstorex'),
(688, '43.153.110.177', '2024-01-18', 1, 'Beranda', 'anstorex'),
(689, '180.242.69.24', '2024-01-18', 1, 'Togel', 'anstorex'),
(690, '180.242.69.24', '2024-01-18', 1, 'Beranda', 'anstorex'),
(691, '180.242.69.24', '2024-01-18', 1, 'Togel', 'anstorex'),
(692, '180.242.69.24', '2024-01-18', 1, 'Beranda', 'anstorex'),
(693, '2404:c0:1c10::1707:d499', '2024-01-18', 1, 'Beranda', 'anstorex'),
(694, '2404:c0:1c10::1707:d499', '2024-01-18', 1, 'Masuk', 'anstorex'),
(695, '2404:c0:1c10::1707:d499', '2024-01-18', 1, 'Beranda', 'anstorex'),
(696, '2404:c0:1c10::1707:d499', '2024-01-18', 1, 'Togel', 'anstorex'),
(697, '180.242.69.24', '2024-01-18', 1, 'Beranda', 'anstorex'),
(698, '180.242.69.24', '2024-01-18', 1, 'Beranda', 'anstorex'),
(699, '180.242.69.24', '2024-01-18', 1, 'Togel', 'anstorex'),
(700, '114.122.5.123', '2024-01-18', 1, 'Beranda', 'anstorex'),
(701, '2a03:2880:22ff:7::face:b00c', '2024-01-18', 1, 'Beranda', 'anstorex'),
(702, '114.122.5.123', '2024-01-18', 1, 'Masuk', 'anstorex'),
(703, '114.122.5.123', '2024-01-18', 1, 'Masuk', 'anstorex'),
(704, '114.122.5.123', '2024-01-18', 1, 'Beranda', 'anstorex'),
(705, '114.122.5.123', '2024-01-18', 1, 'Masuk', 'anstorex'),
(706, '114.122.5.123', '2024-01-18', 1, 'Beranda', 'anstorex'),
(707, '114.122.5.123', '2024-01-18', 1, 'RTP Slot Pragmatic', 'anstorex'),
(708, '114.122.5.123', '2024-01-18', 1, 'RTP Slot Pragmatic', 'anstorex'),
(709, '114.122.5.123', '2024-01-18', 1, 'Beranda', 'anstorex'),
(710, '114.122.5.123', '2024-01-18', 1, 'Beranda', 'anstorex'),
(711, '114.122.10.79', '2024-01-18', 1, 'Beranda', 'anstorex'),
(712, '46.4.33.48', '2024-01-18', 1, 'Beranda', 'anstorex'),
(713, '114.122.10.79', '2024-01-18', 1, 'Beranda', 'anstorex'),
(714, '114.122.10.79', '2024-01-18', 1, 'Beranda', 'anstorex'),
(715, '167.248.133.186', '2024-01-18', 1, 'Beranda', 'anstorex'),
(716, '167.248.133.186', '2024-01-18', 1, 'Beranda', 'anstorex'),
(717, '167.94.146.52', '2024-01-18', 1, 'Beranda', 'anstorex'),
(718, '35.171.144.152', '2024-01-18', 1, 'Beranda', 'anstorex'),
(719, '35.171.144.152', '2024-01-18', 1, 'Beranda', 'anstorex'),
(720, '35.171.144.152', '2024-01-18', 1, 'Beranda', 'anstorex'),
(721, '199.45.154.19', '2024-01-18', 1, 'Beranda', 'anstorex'),
(722, '199.45.154.19', '2024-01-18', 1, 'Beranda', 'anstorex'),
(723, '170.106.159.160', '2024-01-18', 1, 'Beranda', 'anstorex'),
(724, '2404:c0:1c10::1707:d499', '2024-01-18', 1, 'Masuk', 'anstorex'),
(725, '36.111.67.189', '2024-01-18', 1, 'Beranda', 'anstorex'),
(726, '114.122.10.79', '2024-01-18', 1, 'Beranda', 'anstorex'),
(727, '2600:3c00::f03c:94ff:fe60:9574', '2024-01-18', 1, 'Beranda', 'anstorex'),
(728, '34.94.155.204', '2024-01-18', 1, 'Beranda', 'anstorex'),
(729, '34.94.155.204', '2024-01-18', 1, 'Beranda', 'anstorex'),
(730, '89.104.111.93', '2024-01-18', 1, 'Beranda', 'anstorex'),
(731, '65.155.30.101', '2024-01-18', 1, 'Beranda', 'anstorex'),
(732, '222.249.228.245', '2024-01-18', 1, 'Beranda', 'anstorex'),
(733, '195.201.41.238', '2024-01-18', 1, 'Beranda', 'anstorex'),
(734, '49.51.179.103', '2024-01-18', 1, 'Beranda', 'anstorex'),
(735, '2a02:4780:6:c0de::10', '2024-01-18', 1, 'Beranda', 'anstorex'),
(736, '45.90.60.224', '2024-01-18', 1, 'Beranda', 'anstorex'),
(737, '180.242.69.114', '2024-01-18', 1, 'Togel', 'anstorex'),
(738, '180.242.69.114', '2024-01-18', 1, 'Beranda', 'anstorex'),
(739, '180.242.69.114', '2024-01-18', 1, 'Beranda', 'anstorex'),
(740, '180.242.69.114', '2024-01-18', 1, 'Beranda', 'anstorex'),
(741, '180.242.69.114', '2024-01-18', 1, 'Togel', 'anstorex'),
(742, '180.242.69.114', '2024-01-18', 1, 'Beranda', 'anstorex'),
(743, '180.242.69.114', '2024-01-18', 1, 'Slot Lainnya', 'anstorex'),
(744, '180.242.69.114', '2024-01-18', 1, 'Slot Lainnya', 'anstorex'),
(745, '180.242.69.114', '2024-01-18', 1, 'Slot Lainnya', 'anstorex'),
(746, '180.242.69.114', '2024-01-18', 1, 'Beranda', 'anstorex'),
(747, '188.166.156.158', '2024-01-18', 1, 'Beranda', 'anstorex'),
(748, '129.226.158.26', '2024-01-18', 1, 'Beranda', 'anstorex'),
(749, '205.169.39.171', '2024-01-18', 1, 'Beranda', 'anstorex'),
(750, '124.220.24.137', '2024-01-18', 1, 'Beranda', 'anstorex'),
(751, '114.122.4.221', '2024-01-18', 1, 'Beranda', 'anstorex'),
(752, '114.122.4.221', '2024-01-18', 1, 'Beranda', 'anstorex'),
(753, '114.122.4.221', '2024-01-18', 1, 'Beranda', 'anstorex'),
(754, '114.10.64.35', '2024-01-18', 1, 'Beranda', 'anstorex'),
(755, '8.41.221.54', '2024-01-18', 1, 'Beranda', 'anstorex'),
(756, '8.41.221.48', '2024-01-18', 1, 'Beranda', 'anstorex'),
(757, '8.41.221.48', '2024-01-18', 1, 'Beranda', 'anstorex'),
(758, '114.10.64.35', '2024-01-18', 1, 'Slot', 'anstorex'),
(759, '34.102.85.36', '2024-01-18', 1, 'Beranda', 'anstorex'),
(760, '34.102.85.36', '2024-01-18', 1, 'Beranda', 'anstorex'),
(761, '43.159.129.209', '2024-01-18', 1, 'Beranda', 'anstorex'),
(762, '34.174.197.98', '2024-01-18', 1, 'Beranda', 'anstorex'),
(763, '34.174.197.98', '2024-01-18', 1, 'Beranda', 'anstorex'),
(764, '193.187.172.24', '2024-01-18', 1, 'Beranda', 'anstorex'),
(765, '34.151.92.110', '2024-01-18', 1, 'Beranda', 'anstorex'),
(766, '34.118.33.243', '2024-01-18', 1, 'Beranda', 'anstorex'),
(767, '34.116.248.31', '2024-01-18', 1, 'Beranda', 'anstorex'),
(768, '31.94.36.115', '2024-01-18', 1, 'Beranda', 'anstorex'),
(769, '84.17.42.48', '2024-01-18', 1, 'Beranda', 'anstorex'),
(770, '31.94.36.115', '2024-01-18', 1, 'Beranda', 'anstorex'),
(771, '84.17.42.48', '2024-01-18', 1, 'Beranda', 'anstorex'),
(772, '54.224.218.58', '2024-01-18', 1, 'Beranda', 'anstorex');
INSERT INTO `tb_stat` (`cuid`, `ip`, `date`, `hits`, `page`, `user`) VALUES
(773, '54.152.88.128', '2024-01-18', 1, 'Beranda', 'anstorex'),
(774, '44.234.19.83', '2024-01-18', 1, 'Beranda', 'anstorex'),
(775, '44.234.19.83', '2024-01-18', 1, 'Beranda', 'anstorex'),
(776, '44.234.19.83', '2024-01-18', 1, 'Beranda', 'anstorex'),
(777, '44.234.19.83', '2024-01-18', 1, 'Beranda', 'anstorex'),
(778, '36.71.137.212', '2024-01-18', 1, 'Beranda', 'anstorex');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_taruhan`
--

CREATE TABLE `tb_taruhan` (
  `cuid` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `gameid` int(11) NOT NULL,
  `code` text NOT NULL,
  `periode` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `tebak` text NOT NULL,
  `posisi` text NOT NULL,
  `nominal` int(11) NOT NULL,
  `menang` text NOT NULL,
  `diskon` text NOT NULL,
  `bayar` text NOT NULL,
  `jumlah` text NOT NULL,
  `keterangan` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_taruhan`
--

INSERT INTO `tb_taruhan` (`cuid`, `userID`, `pid`, `gameid`, `code`, `periode`, `created_date`, `tebak`, `posisi`, `nominal`, `menang`, `diskon`, `bayar`, `jumlah`, `keterangan`, `status`) VALUES
(1, 88, 10, 1, 'MDR', 6, '2024-01-16 22:45:19', '2213', '4D', 2000, '3000', '1320', '680', '6000000', '', 0),
(2, 88, 10, 1, 'MDR', 6, '2024-01-16 22:45:23', '2213', '4D', 2000, '3000', '1320', '680', '6000000', '', 0),
(3, 88, 10, 1, 'MDR', 6, '2024-01-16 22:48:55', '5413', '4D', 5000, '3000', '3300', '1700', '15000000', '', 0),
(4, 88, 1, 1, 'ATH', 8, '2024-01-17 08:16:17', '5213', '4D', 2000, '3000', '1320', '680', '6000000', '', 0),
(5, 88, 2, 1, 'CB', 2, '2024-01-18 01:11:06', '5213', '4D', 1000, '3000', '660', '340', '3000000', '', 0),
(6, 88, 5, 1, 'CH', 2, '2024-01-18 01:18:43', '2111', '4D', 10000, '3000', '6600', '3400', '30000000', '', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_testi`
--

CREATE TABLE `tb_testi` (
  `cuid` int(11) NOT NULL,
  `kd_transaksi` text NOT NULL,
  `produkID` int(11) NOT NULL,
  `full_name` text NOT NULL,
  `content` mediumtext NOT NULL,
  `date` datetime NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `userID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_token`
--

CREATE TABLE `tb_token` (
  `cuid` int(11) NOT NULL,
  `token` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_token`
--

INSERT INTO `tb_token` (`cuid`, `token`) VALUES
(1, 'e836ae81a7d84fd9d652888cedf074bb'),
(2, '789427a4c32947d8d2057ac6c794fb80'),
(3, 'e58d6f22c9299fb8f629a4e7ff0f375c'),
(4, '2e501705fb198615f8009f98da24a734'),
(5, '84c77dd172762313690ad5a2a8fbad86'),
(6, '0651abd3c9356b70f314534160a005da'),
(7, '3f4bdc73a52b1e574a2bf4f59260dd10'),
(8, '8c8d3cef1cb073cecbbdb0adee0e16dd'),
(9, '8ed551542ce2a3483fb35fd161ea8f9d'),
(10, '8354e1459ff1b3f9e9291c3cd834ae0f'),
(11, '0a369fd228cb86d01812d754437a970d'),
(12, 'b7a37a51ab2fa6e1ae54f52ab788adc1'),
(13, '80241626db2e5aadefe08dcf8432b525'),
(14, '3c1346319aa00ad0b14869ff49306558'),
(15, '2ef42181a06ba3dada2c1ec24f87d186'),
(16, '9bf7b12797c3368defe1a1895a0b3bee'),
(17, '6b878595dba347cf1ad705be8c2619df'),
(18, '90976a094840f1448efb856e3f6f3e7e'),
(19, 'f1fb216cb6fc949a78d35f3510e74187'),
(20, '4567c326deeea7be6e32f74ccdde9950'),
(21, '32c204222c94c735b7f876139fb0f1e0'),
(22, 'c6520e70d3e9c20197bc271d8e32beda'),
(23, '9954e39a4762753884433c0f6cd14111'),
(24, 'f239fe5e8dd9f1d34cda204106326479'),
(25, 'ab9e40048f265cb468e1296daeeda4b0'),
(26, 'd0a16db3b04444b114e33c20d7e7f7e0'),
(27, '301a40d26e41e9919031cd5e0a322d5f'),
(28, 'e229e4817da79142c4543d0d21c49e56'),
(29, '6cd88a5d5625010e6bb0df5dd6c485c4');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `cuid` int(11) NOT NULL,
  `kd_transaksi` varchar(16) NOT NULL,
  `date` datetime NOT NULL,
  `transaksi` text NOT NULL,
  `total` int(11) NOT NULL,
  `saldo` int(11) NOT NULL,
  `note` text NOT NULL,
  `gameid` text NOT NULL,
  `providerID` int(2) NOT NULL,
  `jenis` text NOT NULL COMMENT '1:Deposit,2:Withdraw,3:Refferal,4:Rabate,5:Transfer,6:TransferBack,7:Cashback,8:BonusNewMember,9:TaruhanTogel',
  `metode` text NOT NULL,
  `pay_from` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`cuid`, `kd_transaksi`, `date`, `transaksi`, `total`, `saldo`, `note`, `gameid`, `providerID`, `jenis`, `metode`, `pay_from`, `userID`, `status`) VALUES
(1, '202401164127', '2024-01-16 00:50:41', 'Top Up', 1000027, 0, 'no-photo.webp', '', 0, '1', '1', 2, 87, 1),
(2, '2024011657982', '2024-01-16 00:50:57', 'Referral', 10000, 0, 'Bonus Referral', '', 0, '3', '0', 87, 1, 1),
(3, '2024011604169', '2024-01-16 01:00:04', 'Penarikan', 990000, 0, 'DANA 082172114653 A/n Syah Erika', '', 0, '2', '2', 0, 87, 1),
(4, '202401164203', '2024-01-16 20:34:42', 'Top Up', 50003, 0, 'no-photo.webp', '', 0, '1', '4', 2, 87, 2),
(5, '202401162906', '2024-01-16 21:05:29', 'Top Up', 50006, 0, 'no-photo.webp', '1', 0, '1', '1', 2, 87, 1),
(6, '202401164105', '2024-01-16 21:06:41', 'Top Up', 50005, 0, 'no-photo.webp', '6', 0, '1', '1', 2, 87, 2),
(7, '202401163082', '2024-01-16 21:09:30', 'Top Up', 50082, 0, 'no-photo.webp', '7', 0, '1', '1', 2, 87, 1),
(8, '202401165369', '2024-01-16 21:10:53', 'Top Up', 50069, 0, 'no-photo.webp', '', 0, '1', '1', 2, 87, 2),
(9, '202401160845', '2024-01-16 21:36:08', 'Top Up', 50045, 0, 'no-photo.webp', '', 0, '1', '4', 2, 87, 2),
(10, '202401160082', '2024-01-16 21:56:00', 'Top Up', 50082, 0, 'no-photo.webp', '7', 0, '1', '3', 6, 89, 1),
(11, '2024011617147', '2024-01-16 21:56:17', 'Referral', 0, 0, 'Bonus Referral', '', 0, '3', '0', 89, 1, 1),
(12, '202401164841', '2024-01-16 22:30:48', 'Top Up', 50041, 0, 'no-photo.webp', '7', 0, '1', '1', 7, 90, 1),
(13, '2024011615734', '2024-01-16 22:31:15', 'Referral', 0, 0, 'Bonus Referral', '', 0, '3', '0', 90, 1, 1),
(14, '202401161162', '2024-01-16 22:42:11', 'Top Up', 50062, 0, 'no-photo.webp', '7', 0, '1', '4', 5, 88, 1),
(15, '2024011640719', '2024-01-16 22:42:40', 'Referral', 0, 0, 'Bonus Referral', '', 0, '3', '0', 88, 1, 1),
(16, '2024011619479', '2024-01-16 22:45:19', 'Taruhan', 680, 0, 'Taruhan 4D 2213', '', 9, '9', '0', 0, 88, 1),
(17, '2024011623386', '2024-01-16 22:45:23', 'Taruhan', 680, 0, 'Taruhan 4D 2213', '', 9, '9', '0', 0, 88, 1),
(18, '2024011655607', '2024-01-16 22:48:55', 'Taruhan', 1700, 0, 'Taruhan 4D 5413', '', 9, '9', '0', 0, 88, 1),
(19, '2024011633103', '2024-01-16 23:30:33', 'Penarikan', 65000, 0, 'DANA 082172114655 A/n Akun', '', 0, '2', '6', 0, 89, 2),
(20, '2024011657041', '2024-01-16 23:33:57', 'Penarikan', 50000, 0, 'DANA 09187171717171 A/n Testeran', '', 0, '2', '5', 0, 88, 2),
(21, '202401170008', '2024-01-17 00:28:00', 'Top Up', 100008, 0, 'no-photo.webp', '7', 0, '1', '4', 8, 91, 1),
(22, '2024011719614', '2024-01-17 00:28:19', 'Referral', 0, 0, 'Bonus Referral', '', 0, '3', '0', 91, 1, 1),
(23, '2024011739301', '2024-01-17 00:29:39', 'Penarikan', 130000, 0, 'DANA 082172114650 A/n Akun dana', '', 0, '2', '8', 0, 91, 2),
(24, '2024011717870', '2024-01-17 08:16:17', 'Taruhan', 680, 0, 'Taruhan 4D 5213', '', 9, '9', '0', 0, 88, 1),
(25, '202401174330', '2024-01-17 21:36:43', 'Top Up', 50030, 0, 'no-photo.webp', '', 0, '1', '14', 8, 91, 1),
(26, '2024011758251', '2024-01-17 21:58:58', 'Penarikan', 26000, 0, 'DANA 082172114650 A/n Akun dana', '', 0, '2', '8', 0, 91, 1),
(27, '2024011806475', '2024-01-18 01:11:06', 'Taruhan', 340, 0, 'Taruhan 4D 5213', '', 9, '9', '0', 0, 88, 1),
(28, '2024011843529', '2024-01-18 01:18:43', 'Taruhan', 3400, 0, 'Taruhan 4D 2111', '', 9, '9', '0', 0, 88, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tripay`
--

CREATE TABLE `tb_tripay` (
  `cuid` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `reference` text NOT NULL,
  `merchant_ref` text NOT NULL,
  `payment_method` text NOT NULL,
  `payment_name` text NOT NULL,
  `customer_email` text NOT NULL,
  `customer_phone` text NOT NULL,
  `amount` int(11) NOT NULL,
  `fee` int(11) NOT NULL,
  `amount_total` int(11) NOT NULL,
  `pay_code` text NOT NULL,
  `checkout_url` text NOT NULL,
  `status` text NOT NULL,
  `paid_time` datetime NOT NULL,
  `expired_time` datetime NOT NULL,
  `providerID` int(11) NOT NULL,
  `jenis_transaksi` int(11) NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tripayapi`
--

CREATE TABLE `tb_tripayapi` (
  `cuid` int(11) NOT NULL,
  `provider` text NOT NULL,
  `providerName` text NOT NULL,
  `api_key` text NOT NULL,
  `secret_key` text NOT NULL,
  `urlRequest` text NOT NULL,
  `urlResponse` text NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_tripayapi`
--

INSERT INTO `tb_tripayapi` (`cuid`, `provider`, `providerName`, `api_key`, `secret_key`, `urlRequest`, `urlResponse`, `status`) VALUES
(1, 'PragmaticPlay', 'Pragmatic Play', 'win88_win88', 'testKey', 'https://api.prerelease-env.biz/IntegrationService/v3/http/CasinoGameAPI', '', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_turnover`
--

CREATE TABLE `tb_turnover` (
  `cuid` int(255) NOT NULL,
  `userID` int(255) NOT NULL,
  `trxID` text NOT NULL,
  `depo` text NOT NULL,
  `bonus` text NOT NULL,
  `jmlh_to` int(3) NOT NULL,
  `total_to` int(11) NOT NULL,
  `sisa_to` int(11) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_turnover`
--

INSERT INTO `tb_turnover` (`cuid`, `userID`, `trxID`, `depo`, `bonus`, `jmlh_to`, `total_to`, `sisa_to`, `status`) VALUES
(1, 63, '202312313485', '50000', '25000', 10, 750000, 750000, 0),
(2, 65, '202401051505', '50000', '25000', 10, 750000, 750000, 1),
(3, 87, '202401162906', '50000', '15000', 5, 325000, 325000, 1),
(4, 87, '202401164105', '50000', '25000', 10, 750000, 750000, 0),
(5, 87, '202401163082', '50000', '15000', 5, 325000, 325000, 1),
(7, 90, '202401164841', '50000', '15000', 5, 325000, 325000, 1),
(8, 88, '202401161162', '50000', '15000', 5, 325000, 325000, 1),
(9, 91, '202401170008', '100000', '30000', 5, 650000, 650000, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `cuid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `extplayer` text NOT NULL,
  `user` text NOT NULL,
  `pass` varchar(100) NOT NULL,
  `token_id` int(11) DEFAULT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'avatar5.webp',
  `full_name` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_hp` text NOT NULL,
  `level` text NOT NULL,
  `pinTrx` varchar(255) NOT NULL,
  `reff` int(11) NOT NULL,
  `uplineID` int(255) NOT NULL,
  `join_date` datetime NOT NULL,
  `last_login` datetime NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`cuid`, `userid`, `extplayer`, `user`, `pass`, `token_id`, `image`, `full_name`, `email`, `no_hp`, `level`, `pinTrx`, `reff`, `uplineID`, `join_date`, `last_login`, `status`) VALUES
(1, 0, 'klwakama78157qo', 'akama781', '$2y$10$zPPnhA1D1tGMW3ZxKrPa9u89xqFGff76MNchmW4r6FWaTSkFumUCC', 25, 'avatar.webp', 'KONTOL', 'gakpecah25@office.com', '08126486254', 'superadmin', '', 0, 1, '2024-01-17 20:39:47', '2024-01-17 20:42:24', 1),
(91, 0, 'pyjawinpukimak2d15', 'awinpukimak', '$2y$10$dDMVLXRoobgTYsbR4c4sOOOmDnTpMK9WC2Dgm6/IkOGfNhUS1p2/e', 29, 'avatar.webp', 'Akun dana', 'awinnattaaaa@gmail.com', '87856369640', 'user', '', 0, 1, '2024-01-17 00:27:32', '2024-01-18 01:25:08', 1),
(90, 0, 'mndrusakkalimx1y', 'rusakkali', '$2y$10$dbhY6wshRfQeOEiKcZKMfOtJWpfM4TbZajqMKp8X/t7z1pFVjl0Fq', 14, 'avatar.webp', 'Akun dana', 'awinnattaa@gmail.com', '87856369641', 'user', '', 0, 1, '2024-01-16 22:30:10', '2024-01-16 22:30:19', 1),
(89, 0, 'wgbakunbaruhi9g', 'akunbaru', '$2y$10$GFd3SPqiGeonrIF3pXP.LOWkIbHmz55YwalWeoV25XFu1cRTqCyLO', 16, 'avatar.webp', 'Akun', 'awinnatta@gmail.com', '87856369647', 'user', '', 0, 1, '2024-01-16 21:55:02', '2024-01-16 23:31:49', 1),
(88, 0, 'uvmtesteranhbi5', 'testeran', '$2y$10$8IjFh4DOBDHbmjZrx1I0Suoi6FOK8bI7oFcR0iU7ulaVmqaSBtv6m', 28, 'avatar.webp', 'Testeran', 'jauauqbqk@gmail.com', '8848131315', 'user', '', 0, 1, '2024-01-16 21:50:24', '2024-01-18 01:18:00', 1),
(87, 0, 'ysvawinata5fg3', 'awinata', '$2y$10$BjDnt237Ry1YCTyY3EtOc.wFaWsKJB3tCLK6K6jALevv4xrDDI/b6', 13, 'avatar.webp', 'Syah Erika', 'awinnata@gmail.com', '87856369646', 'user', '', 0, 1, '2024-01-16 00:49:35', '2024-01-16 22:24:27', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_wprovider`
--

CREATE TABLE `tb_wprovider` (
  `cuid` int(11) NOT NULL,
  `code` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `type` varchar(10) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_wprovider`
--

INSERT INTO `tb_wprovider` (`cuid`, `code`, `name`, `type`, `status`) VALUES
(1, 'PRAGMATIC', 'Pragmatic Play', 'slot', 1),
(2, 'HABANERO', 'Habanero', 'slot', 1),
(3, 'BOOONGO', 'Booongo', 'slot', 1),
(4, 'PLAYSON', 'Playson', 'slot', 1),
(5, 'CQ9', 'CQ9', 'slot', 1),
(6, 'EVOPLAY', 'Evoplay', 'slot', 1),
(7, 'TOPTREND', 'TopTrend Gaming', 'slot', 1),
(8, 'DREAMTECH', 'DreamTech', 'slot', 1),
(9, 'PGSOFT', 'PG Soft', 'slot', 1),
(10, 'REELKINGDOM', 'Reel Kingdom', 'slot', 1),
(11, 'EZUGI', 'Ezugi', 'live', 1),
(12, 'EVOLUTION', 'Evolution', 'live', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`cuid`);

--
-- Indeks untuk tabel `tb_backup`
--
ALTER TABLE `tb_backup`
  ADD PRIMARY KEY (`cuid`);

--
-- Indeks untuk tabel `tb_balance`
--
ALTER TABLE `tb_balance`
  ADD PRIMARY KEY (`cuid`);

--
-- Indeks untuk tabel `tb_bank`
--
ALTER TABLE `tb_bank`
  ADD PRIMARY KEY (`cuid`);

--
-- Indeks untuk tabel `tb_banner`
--
ALTER TABLE `tb_banner`
  ADD PRIMARY KEY (`cuid`);

--
-- Indeks untuk tabel `tb_chat`
--
ALTER TABLE `tb_chat`
  ADD PRIMARY KEY (`cuid`);

--
-- Indeks untuk tabel `tb_chat_respon`
--
ALTER TABLE `tb_chat_respon`
  ADD PRIMARY KEY (`cuid`);

--
-- Indeks untuk tabel `tb_game`
--
ALTER TABLE `tb_game`
  ADD PRIMARY KEY (`cuid`);

--
-- Indeks untuk tabel `tb_gamelist`
--
ALTER TABLE `tb_gamelist`
  ADD PRIMARY KEY (`cuid`);

--
-- Indeks untuk tabel `tb_gamenew`
--
ALTER TABLE `tb_gamenew`
  ADD PRIMARY KEY (`cuid`);

--
-- Indeks untuk tabel `tb_konfirmasi`
--
ALTER TABLE `tb_konfirmasi`
  ADD PRIMARY KEY (`cuid`);

--
-- Indeks untuk tabel `tb_livechat`
--
ALTER TABLE `tb_livechat`
  ADD PRIMARY KEY (`cuid`);

--
-- Indeks untuk tabel `tb_notif`
--
ALTER TABLE `tb_notif`
  ADD PRIMARY KEY (`cuid`);

--
-- Indeks untuk tabel `tb_page`
--
ALTER TABLE `tb_page`
  ADD PRIMARY KEY (`cuid`);

--
-- Indeks untuk tabel `tb_pasaran`
--
ALTER TABLE `tb_pasaran`
  ADD PRIMARY KEY (`cuid`);

--
-- Indeks untuk tabel `tb_pasaran_result`
--
ALTER TABLE `tb_pasaran_result`
  ADD PRIMARY KEY (`cuid`);

--
-- Indeks untuk tabel `tb_periode`
--
ALTER TABLE `tb_periode`
  ADD PRIMARY KEY (`cuid`);

--
-- Indeks untuk tabel `tb_popup`
--
ALTER TABLE `tb_popup`
  ADD PRIMARY KEY (`cuid`);

--
-- Indeks untuk tabel `tb_post`
--
ALTER TABLE `tb_post`
  ADD PRIMARY KEY (`cuid`);

--
-- Indeks untuk tabel `tb_ppplayer`
--
ALTER TABLE `tb_ppplayer`
  ADD PRIMARY KEY (`cuid`);

--
-- Indeks untuk tabel `tb_provider`
--
ALTER TABLE `tb_provider`
  ADD PRIMARY KEY (`cuid`);

--
-- Indeks untuk tabel `tb_seo`
--
ALTER TABLE `tb_seo`
  ADD PRIMARY KEY (`cuid`);

--
-- Indeks untuk tabel `tb_slide`
--
ALTER TABLE `tb_slide`
  ADD PRIMARY KEY (`cuid`);

--
-- Indeks untuk tabel `tb_social`
--
ALTER TABLE `tb_social`
  ADD PRIMARY KEY (`cuid`);

--
-- Indeks untuk tabel `tb_stat`
--
ALTER TABLE `tb_stat`
  ADD PRIMARY KEY (`cuid`);

--
-- Indeks untuk tabel `tb_taruhan`
--
ALTER TABLE `tb_taruhan`
  ADD PRIMARY KEY (`cuid`);

--
-- Indeks untuk tabel `tb_testi`
--
ALTER TABLE `tb_testi`
  ADD PRIMARY KEY (`cuid`);

--
-- Indeks untuk tabel `tb_token`
--
ALTER TABLE `tb_token`
  ADD PRIMARY KEY (`cuid`);

--
-- Indeks untuk tabel `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`cuid`);

--
-- Indeks untuk tabel `tb_tripay`
--
ALTER TABLE `tb_tripay`
  ADD PRIMARY KEY (`cuid`);

--
-- Indeks untuk tabel `tb_tripayapi`
--
ALTER TABLE `tb_tripayapi`
  ADD PRIMARY KEY (`cuid`);

--
-- Indeks untuk tabel `tb_turnover`
--
ALTER TABLE `tb_turnover`
  ADD PRIMARY KEY (`cuid`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`cuid`);

--
-- Indeks untuk tabel `tb_wprovider`
--
ALTER TABLE `tb_wprovider`
  ADD PRIMARY KEY (`cuid`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `cuid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_backup`
--
ALTER TABLE `tb_backup`
  MODIFY `cuid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_balance`
--
ALTER TABLE `tb_balance`
  MODIFY `cuid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_bank`
--
ALTER TABLE `tb_bank`
  MODIFY `cuid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `tb_banner`
--
ALTER TABLE `tb_banner`
  MODIFY `cuid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_chat`
--
ALTER TABLE `tb_chat`
  MODIFY `cuid` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_chat_respon`
--
ALTER TABLE `tb_chat_respon`
  MODIFY `cuid` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_game`
--
ALTER TABLE `tb_game`
  MODIFY `cuid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT untuk tabel `tb_gamelist`
--
ALTER TABLE `tb_gamelist`
  MODIFY `cuid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1203;

--
-- AUTO_INCREMENT untuk tabel `tb_gamenew`
--
ALTER TABLE `tb_gamenew`
  MODIFY `cuid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3855;

--
-- AUTO_INCREMENT untuk tabel `tb_konfirmasi`
--
ALTER TABLE `tb_konfirmasi`
  MODIFY `cuid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_livechat`
--
ALTER TABLE `tb_livechat`
  MODIFY `cuid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_notif`
--
ALTER TABLE `tb_notif`
  MODIFY `cuid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_page`
--
ALTER TABLE `tb_page`
  MODIFY `cuid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_pasaran`
--
ALTER TABLE `tb_pasaran`
  MODIFY `cuid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_pasaran_result`
--
ALTER TABLE `tb_pasaran_result`
  MODIFY `cuid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=331;

--
-- AUTO_INCREMENT untuk tabel `tb_periode`
--
ALTER TABLE `tb_periode`
  MODIFY `cuid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tb_popup`
--
ALTER TABLE `tb_popup`
  MODIFY `cuid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=619;

--
-- AUTO_INCREMENT untuk tabel `tb_post`
--
ALTER TABLE `tb_post`
  MODIFY `cuid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_ppplayer`
--
ALTER TABLE `tb_ppplayer`
  MODIFY `cuid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_provider`
--
ALTER TABLE `tb_provider`
  MODIFY `cuid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `tb_seo`
--
ALTER TABLE `tb_seo`
  MODIFY `cuid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_slide`
--
ALTER TABLE `tb_slide`
  MODIFY `cuid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `tb_social`
--
ALTER TABLE `tb_social`
  MODIFY `cuid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_stat`
--
ALTER TABLE `tb_stat`
  MODIFY `cuid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=779;

--
-- AUTO_INCREMENT untuk tabel `tb_taruhan`
--
ALTER TABLE `tb_taruhan`
  MODIFY `cuid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_testi`
--
ALTER TABLE `tb_testi`
  MODIFY `cuid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_token`
--
ALTER TABLE `tb_token`
  MODIFY `cuid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `cuid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `tb_tripay`
--
ALTER TABLE `tb_tripay`
  MODIFY `cuid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_tripayapi`
--
ALTER TABLE `tb_tripayapi`
  MODIFY `cuid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_turnover`
--
ALTER TABLE `tb_turnover`
  MODIFY `cuid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `cuid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT untuk tabel `tb_wprovider`
--
ALTER TABLE `tb_wprovider`
  MODIFY `cuid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
