-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Apr 2022 pada 18.09
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mitix`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `film`
--

CREATE TABLE `film` (
  `id` int(11) NOT NULL,
  `nama_film` varchar(100) NOT NULL,
  `desc_film` text NOT NULL,
  `url_foto` varchar(100) NOT NULL,
  `link_trailer` text NOT NULL,
  `category` varchar(100) NOT NULL,
  `sutradara` varchar(100) NOT NULL,
  `aktor` varchar(100) NOT NULL,
  `tgl_rilis` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `film`
--

INSERT INTO `film` (`id`, `nama_film`, `desc_film`, `url_foto`, `link_trailer`, `category`, `sutradara`, `aktor`, `tgl_rilis`) VALUES
(5, 'JUJUTSU KAISEN 0', '<h1 style=\"margin-top: 20px; color: rgb(33, 37, 41); font-family: calibri; margin-left: 0px;\"><span style=\"font-weight: bolder;\">JUJUTSU KAISEN 0</span></h1><br style=\"font-family: calibri;\"><div class=\"info_box\" style=\"font-family: calibri;\"><p class=\"label_info\" style=\"width: 100px; min-width: 100px; display: inline-block; vertical-align: middle;\">Jenis Film &nbsp;</p>&nbsp;<span class=\"sep\" style=\"vertical-align: middle; display: inline-block;\"><p>:</p></span>&nbsp;<p class=\"info_value\" style=\"width: 542.656px; display: inline-block; vertical-align: middle;\">Animation</p></div><div class=\"info_box\" style=\"font-family: calibri;\"><p class=\"label_info\" style=\"width: 100px; min-width: 100px; display: inline-block; vertical-align: middle;\">Produser &nbsp;&nbsp;</p>&nbsp;<span class=\"sep\" style=\"vertical-align: middle; display: inline-block;\"><p>:</p></span>&nbsp;<p class=\"info_value\" style=\"width: 542.656px; display: inline-block; vertical-align: middle;\">Keisuke Seshita</p></div><div class=\"info_box\" style=\"font-family: calibri;\"><p class=\"label_info\" style=\"width: 100px; min-width: 100px; display: inline-block; vertical-align: middle;\">Sutradara &nbsp;</p>&nbsp;<span class=\"sep\" style=\"vertical-align: middle; display: inline-block;\"><p>:</p></span>&nbsp;<p class=\"info_value\" style=\"width: 542.656px; display: inline-block; vertical-align: middle;\">Sunghoo Park</p></div><div class=\"info_box\" style=\"font-family: calibri;\"><p class=\"label_info\" style=\"width: 100px; min-width: 100px; display: inline-block; vertical-align: middle;\">Penulis &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>&nbsp;<span class=\"sep\" style=\"vertical-align: middle; display: inline-block;\"><p>:</p></span>&nbsp;<p class=\"info_value\" style=\"width: 542.656px; display: inline-block; vertical-align: middle;\">Hiroshi Seko</p></div><div class=\"info_box\" style=\"font-family: calibri;\"><p class=\"label_info\" style=\"width: 100px; min-width: 100px; display: inline-block; vertical-align: middle;\">Produksi &nbsp;&nbsp;&nbsp;</p>&nbsp;<span class=\"sep\" style=\"vertical-align: middle; display: inline-block;\"><p>:</p></span>&nbsp;<p class=\"info_value\" style=\"width: 542.656px; display: inline-block; vertical-align: middle;\">MAPPA Studios</p></div><div class=\"info_box\" style=\"font-family: calibri;\"><p class=\"label_info\" style=\"width: 100px; min-width: 100px; display: inline-block; vertical-align: middle;\">Casts &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>&nbsp;<span class=\"sep\" style=\"vertical-align: middle; display: inline-block;\"><p>:</p></span>&nbsp;<p class=\"info_value\" style=\"width: 542.656px; display: inline-block; vertical-align: middle;\">Megumi Ogata, Kana Hanazawa, Mikako Komatsu, Koki Uchiyama, Tomokazu Seki, Yuichi Nakamura, Takahiro Sakurai</p></div><div class=\"info_box\" style=\"font-family: calibri;\"><h1 class=\"label_info\" ;=\"\" style=\"font-size: 20pt; width: 100px; min-width: 100px; display: inline-block; vertical-align: middle;\">SINOPSIS</h1><br><p class=\"info_value\" ;=\"\" style=\"width: 775.227px; display: inline-block; vertical-align: middle;\">Yuta Okkotsu adalah seorang siswa SMA penyendiri yang mengalami masalah besar—teman masa kecilnya, Rika telah menjelma menjadi roh kutukan yang enggan lepas darinya. Karena Rika bukanlah roh kutukan biasa, keberadaan Yuta mendapat perhatian dari Satoru Gojo, seorang pengajar di SMA Jujutsu, sekolah bagi para pelajar ilmu gaib berlatih memerangi kutukan. Gojo meyakinkan Yuta untuk masuk sekolahnya, namun cukupkah pelajaran yang diperoleh Yuta ketika tiba waktunya harus berhadapan dengan kutukan yang mengikutinya?</p></div>', 'http://localhost/MITIX/images/jujutsu.jpg', '<iframe width=\"1280\" height=\"720\" src=\"https://www.youtube.com/embed/eGSL-l95VXw\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; a', 'now_showing', '', '', '2022-04-19'),
(7, 'MORBIUS', '<h1 style=\"margin-top: 20px; color: rgb(33, 37, 41); font-family: calibri; margin-left: 0px;\"><span style=\"font-weight: bolder;\">MORBIUS</span></h1><h1 style=\"margin-top: 20px; margin-left: 0px;\"><br style=\"font-family: calibri; font-size: 16px;\"><div class=\"info_box\" style=\"font-family: calibri; font-size: 16px;\"><p class=\"label_info\" style=\"width: 100px; min-width: 100px; display: inline-block; vertical-align: middle;\">Jenis Film &nbsp;</p>&nbsp;<span class=\"sep\" style=\"vertical-align: middle; display: inline-block;\"><p>:</p></span>&nbsp;<p class=\"info_value\" style=\"width: 542.638px; display: inline-block; vertical-align: middle;\">Action, Adventure, Drama</p></div><div class=\"info_box\" style=\"font-family: calibri; font-size: 16px;\"><p class=\"label_info\" style=\"width: 100px; min-width: 100px; display: inline-block; vertical-align: middle;\">Produser &nbsp;&nbsp;</p>&nbsp;<span class=\"sep\" style=\"vertical-align: middle; display: inline-block;\"><p>:</p></span>&nbsp;<p class=\"info_value\" style=\"width: 542.638px; display: inline-block; vertical-align: middle;\">Avi Arad, Lucas Foster, Matt Tolmach</p></div><div class=\"info_box\" style=\"font-family: calibri; font-size: 16px;\"><p class=\"label_info\" style=\"width: 100px; min-width: 100px; display: inline-block; vertical-align: middle;\">Sutradara &nbsp;</p>&nbsp;<span class=\"sep\" style=\"vertical-align: middle; display: inline-block;\"><p>:</p></span>&nbsp;<p class=\"info_value\" style=\"width: 542.638px; display: inline-block; vertical-align: middle;\">Daniel Espinosa</p></div><div class=\"info_box\" style=\"font-family: calibri; font-size: 16px;\"><p class=\"label_info\" style=\"width: 100px; min-width: 100px; display: inline-block; vertical-align: middle;\">Penulis &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>&nbsp;<span class=\"sep\" style=\"vertical-align: middle; display: inline-block;\"><p>:</p></span>&nbsp;<p class=\"info_value\" style=\"width: 542.638px; display: inline-block; vertical-align: middle;\">Matt Sazama, Burk Sharpless, Art Marcum, Matt Holloway</p></div><div class=\"info_box\" style=\"font-family: calibri; font-size: 16px;\"><p class=\"label_info\" style=\"width: 100px; min-width: 100px; display: inline-block; vertical-align: middle;\">Produksi &nbsp;&nbsp;&nbsp;</p>&nbsp;<span class=\"sep\" style=\"vertical-align: middle; display: inline-block;\"><p>:</p></span>&nbsp;<p class=\"info_value\" style=\"width: 542.638px; display: inline-block; vertical-align: middle;\">Columbia Pictures</p></div><div class=\"info_box\" style=\"font-family: calibri; font-size: 16px;\"><p class=\"label_info\" style=\"width: 100px; min-width: 100px; display: inline-block; vertical-align: middle;\">Casts &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>&nbsp;<span class=\"sep\" style=\"vertical-align: middle; display: inline-block;\"><p>:</p></span>&nbsp;<p class=\"info_value\" style=\"width: 542.638px; display: inline-block; vertical-align: middle;\">Jared Leto, Matt Smith, Adria Arjona, Jared Harris, Al Madrigal, Tyrese Gibson</p></div></h1><h1 class=\"label_info\" ;=\"\" style=\"font-size: 20pt; width: 100px; min-width: 100px; display: inline-block; vertical-align: middle;\">SINOPSIS</h1><h1 style=\"margin-top: 20px; margin-left: 0px;\"><div class=\"info_box\" style=\"font-family: calibri; font-size: 16px;\"><br><p class=\"info_value\" ;=\"\" style=\"width: 775.2px; display: inline-block; vertical-align: middle;\">Ahli biokimia Michael Morbius (Jared Leto) mencoba menyembuhkan dirinya sendiri dari penyakit darah langka, namun secara tidak sengaja ia menginfeksi tubuhnya dan berubah jadi mahluk yang menyerupai vampir.</p></div></h1>', 'http://localhost/MITIX/images/morbius.jpg', '<iframe width=\"885\" height=\"498\" src=\"https://www.youtube.com/embed/oZ6iiRrz1SY\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; au', 'now_showing', '', '', '2022-04-19'),
(15, 'THE LOST CITY', '<span style=\"font-weight: bolder; color: inherit; font-family: inherit; font-size: 2.5rem;\">THE LOST CITY</span><span style=\"font-family: calibri;\"><br></span><div class=\"film_info\" style=\"width: 775.2px; display: inline-block; vertical-align: top; margin: 35px auto; font-family: calibri;\"><br><div class=\"info_box\" style=\"\"><p class=\"label_info\" style=\"width: 100px; min-width: 100px; display: inline-block; vertical-align: middle;\">Jenis Film &nbsp;</p>&nbsp;<span class=\"sep\" style=\"vertical-align: middle; display: inline-block;\"><p>:</p></span>&nbsp;<p class=\"info_value\" style=\"width: 542.638px; display: inline-block; vertical-align: middle;\">Action, Adventure, Comedy</p></div><div class=\"info_box\" style=\"\"><p class=\"label_info\" style=\"width: 100px; min-width: 100px; display: inline-block; vertical-align: middle;\">Produser &nbsp;&nbsp;</p>&nbsp;<span class=\"sep\" style=\"vertical-align: middle; display: inline-block;\"><p>:</p></span>&nbsp;<p class=\"info_value\" style=\"width: 542.638px; display: inline-block; vertical-align: middle;\">Sandra Bullock, Liza Chasin, Seth Gordon</p></div><div class=\"info_box\" style=\"\"><p class=\"label_info\" style=\"width: 100px; min-width: 100px; display: inline-block; vertical-align: middle;\">Sutradara &nbsp;</p>&nbsp;<span class=\"sep\" style=\"vertical-align: middle; display: inline-block;\"><p>:</p></span>&nbsp;<p class=\"info_value\" style=\"width: 542.638px; display: inline-block; vertical-align: middle;\">Aaron Nee, Adam Nee</p></div><div class=\"info_box\" style=\"\"><p class=\"label_info\" style=\"width: 100px; min-width: 100px; display: inline-block; vertical-align: middle;\">Penulis &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>&nbsp;<span class=\"sep\" style=\"vertical-align: middle; display: inline-block;\"><p>:</p></span>&nbsp;<p class=\"info_value\" style=\"width: 542.638px; display: inline-block; vertical-align: middle;\">Oren Uziel, Dana Fox, Adam Nee, Aaron Nee</p></div><div class=\"info_box\" style=\"\"><p class=\"label_info\" style=\"width: 100px; min-width: 100px; display: inline-block; vertical-align: middle;\">Produksi &nbsp;&nbsp;&nbsp;</p>&nbsp;<span class=\"sep\" style=\"vertical-align: middle; display: inline-block;\"><p>:</p></span>&nbsp;<p class=\"info_value\" style=\"width: 542.638px; display: inline-block; vertical-align: middle;\">Paramount Pictures</p></div><div class=\"info_box\" style=\"\"><p class=\"label_info\" style=\"width: 100px; min-width: 100px; display: inline-block; vertical-align: middle;\">Casts &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>&nbsp;<span class=\"sep\" style=\"vertical-align: middle; display: inline-block;\"><p>:</p></span>&nbsp;<p class=\"info_value\" style=\"width: 542.638px; display: inline-block; vertical-align: middle;\">Sandra Bullock, Channing Tatum, Daniel Radcliffe, Brad Pitt, Patti Harrison, Oscar Nunez, Raymond Lee, Da Vine Joy Randolph, Thomas Forbes-Johnson</p></div><div class=\"info_box\" style=\"\"><h1 class=\"label_info\" ;=\"\" style=\"font-size: 20pt; width: 100px; min-width: 100px; display: inline-block; vertical-align: middle;\">SINOPSIS</h1><br><p class=\"info_value\" ;=\"\" style=\"width: 775.2px; display: inline-block; vertical-align: middle;\">Loretta Sage seorang penulis novel romantis yang suka menyendiri, namun kehidupanya berubah ketika melakukan tur buku dengan lan model tampan yang menjadi cover novel terbarunya.mereka terseret dalam upaya penculikan yang membuat mereka berdua berada dalam petualangan yang tidak terduga di sebuah hutan.</p></div></div>', 'http://localhost/MITIX/images/lostcity.jpg', '<iframe width=\"885\" height=\"498\" src=\"https://www.youtube.com/embed/nfKO9rYDmE8\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'now_showing', '', '', '2022-04-22'),
(16, 'UMMA', '                                    <strong>                                    <strong>                                    <strong>                                    <strong><h1 style=\"margin-top: 20px; color: rgb(33, 37, 41); font-family: calibri; margin-left: 0px;\"><span style=\"font-weight: bolder;\">UMMA</span></h1><br style=\"font-family: calibri;\"><div class=\"info_box\" style=\"font-family: calibri;\"><p class=\"label_info\" style=\"width: 100px; min-width: 100px; display: inline-block; vertical-align: middle;\">Jenis Film  </p> <span class=\"sep\" style=\"vertical-align: middle; display: inline-block;\"><p>:</p></span> <p class=\"info_value\" style=\"width: 542.638px; display: inline-block; vertical-align: middle;\">Horror</p></div><div class=\"info_box\" style=\"font-family: calibri;\"><p class=\"label_info\" style=\"width: 100px; min-width: 100px; display: inline-block; vertical-align: middle;\">Produser   </p> <span class=\"sep\" style=\"vertical-align: middle; display: inline-block;\"><p>:</p></span> <p class=\"info_value\" style=\"width: 542.638px; display: inline-block; vertical-align: middle;\">Zainab Azizi, Sam Raimi</p></div><div class=\"info_box\" style=\"font-family: calibri;\"><p class=\"label_info\" style=\"width: 100px; min-width: 100px; display: inline-block; vertical-align: middle;\">Sutradara  </p> <span class=\"sep\" style=\"vertical-align: middle; display: inline-block;\"><p>:</p></span> <p class=\"info_value\" style=\"width: 542.638px; display: inline-block; vertical-align: middle;\">Iris K. Shim</p></div><div class=\"info_box\" style=\"font-family: calibri;\"><p class=\"label_info\" style=\"width: 100px; min-width: 100px; display: inline-block; vertical-align: middle;\">Penulis       </p> <span class=\"sep\" style=\"vertical-align: middle; display: inline-block;\"><p>:</p></span> <p class=\"info_value\" style=\"width: 542.638px; display: inline-block; vertical-align: middle;\">Iris K. Shim</p></div><div class=\"info_box\" style=\"font-family: calibri;\"><p class=\"label_info\" style=\"width: 100px; min-width: 100px; display: inline-block; vertical-align: middle;\">Produksi    </p> <span class=\"sep\" style=\"vertical-align: middle; display: inline-block;\"><p>:</p></span> <p class=\"info_value\" style=\"width: 542.638px; display: inline-block; vertical-align: middle;\">Columbia Pictures</p></div><div class=\"info_box\" style=\"font-family: calibri;\"><p class=\"label_info\" style=\"width: 100px; min-width: 100px; display: inline-block; vertical-align: middle;\">Casts          </p> <span class=\"sep\" style=\"vertical-align: middle; display: inline-block;\"><p>:</p></span> <p class=\"info_value\" style=\"width: 542.638px; display: inline-block; vertical-align: middle;\">Sandra Oh, Odeya Rush, Dermot Mulroney, Fivel Stewart, Tom Yi, Danielle K. Golden, MeeWha Alana Lee, Hana Marie Kim, Mark Kirksey</p></div><div class=\"info_box\" style=\"font-family: calibri;\"><h1 class=\"label_info\" ;=\"\" style=\"font-size: 20pt; width: 100px; min-width: 100px; display: inline-block; vertical-align: middle;\">SINOPSIS</h1><br><p class=\"info_value\" ;=\"\" style=\"width: 775.2px; display: inline-block; vertical-align: middle;\">Amanda dan putrinya menjalani kehidupan yang tenang di sebuah peternakan Amerika, tetapi ketika abu jenazah ibunya tiba dari Korea, Amanda dihantui oleh ketakutan yang mencekam.</p></div></strong>\r\n                                </strong>\r\n                                </strong>\r\n                                </strong>\r\n                                ', 'http://localhost/MITIX/images/umma.jpg', '<iframe width=\"885\" height=\"498\" src=\"https://www.youtube.com/embed/QQdXvvtu-iI\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'now_showing', '', '', '2022-04-22'),
(17, 'UNCHARTED', '<span style=\"font-weight: bolder; color: inherit; font-family: inherit; font-size: 2.5rem;\">UNCHARTED</span><span style=\"font-family: calibri;\"><br></span><div class=\"film_info\" style=\"width: 775.2px; display: inline-block; vertical-align: top; margin: 35px auto; font-family: calibri;\"><br><div class=\"info_box\" style=\"\"><p class=\"label_info\" style=\"width: 100px; min-width: 100px; display: inline-block; vertical-align: middle;\">Jenis Film &nbsp;</p>&nbsp;<span class=\"sep\" style=\"vertical-align: middle; display: inline-block;\"><p>:</p></span>&nbsp;<p class=\"info_value\" style=\"width: 542.638px; display: inline-block; vertical-align: middle;\">Action, Adventure</p></div><div class=\"info_box\" style=\"\"><p class=\"label_info\" style=\"width: 100px; min-width: 100px; display: inline-block; vertical-align: middle;\">Produser &nbsp;&nbsp;</p>&nbsp;<span class=\"sep\" style=\"vertical-align: middle; display: inline-block;\"><p>:</p></span>&nbsp;<p class=\"info_value\" style=\"width: 542.638px; display: inline-block; vertical-align: middle;\">Ari Arad, Alex Gartner, Charles Roven</p></div><div class=\"info_box\" style=\"\"><p class=\"label_info\" style=\"width: 100px; min-width: 100px; display: inline-block; vertical-align: middle;\">Sutradara &nbsp;</p>&nbsp;<span class=\"sep\" style=\"vertical-align: middle; display: inline-block;\"><p>:</p></span>&nbsp;<p class=\"info_value\" style=\"width: 542.638px; display: inline-block; vertical-align: middle;\">Ruben Fleischer</p></div><div class=\"info_box\" style=\"\"><p class=\"label_info\" style=\"width: 100px; min-width: 100px; display: inline-block; vertical-align: middle;\">Penulis &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>&nbsp;<span class=\"sep\" style=\"vertical-align: middle; display: inline-block;\"><p>:</p></span>&nbsp;<p class=\"info_value\" style=\"width: 542.638px; display: inline-block; vertical-align: middle;\">Art Marcum, Rafe Judkins, Matt Holloway</p></div><div class=\"info_box\" style=\"\"><p class=\"label_info\" style=\"width: 100px; min-width: 100px; display: inline-block; vertical-align: middle;\">Produksi &nbsp;&nbsp;&nbsp;</p>&nbsp;<span class=\"sep\" style=\"vertical-align: middle; display: inline-block;\"><p>:</p></span>&nbsp;<p class=\"info_value\" style=\"width: 542.638px; display: inline-block; vertical-align: middle;\">Columbia Pictures</p></div><div class=\"info_box\" style=\"\"><p class=\"label_info\" style=\"width: 100px; min-width: 100px; display: inline-block; vertical-align: middle;\">Casts &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>&nbsp;<span class=\"sep\" style=\"vertical-align: middle; display: inline-block;\"><p>:</p></span>&nbsp;<p class=\"info_value\" style=\"width: 542.638px; display: inline-block; vertical-align: middle;\">Tom Holland, Sophia Ali, Mark Wahlberg, Tati Gabrielle, Antonio Banderas, Patricia Meeden, Sarah Petrick</p></div><div class=\"info_box\" style=\"\"><h1 class=\"label_info\" ;=\"\" style=\"font-size: 20pt; width: 100px; min-width: 100px; display: inline-block; vertical-align: middle;\">SINOPSIS</h1><br><p class=\"info_value\" ;=\"\" style=\"width: 775.2px; display: inline-block; vertical-align: middle;\">Nathan Drake (Tom Holland) adalah seorang bartender yang pintar. Ia mengaku sebagai keturunan dari penjelajah kenamaan asal Inggris bernama Sir Francis Drake.Bersama Viktor Sulivan (Mark Wahlberg) ia mengarungi lautan untuk mencari harta karun terbesar yang tidak pernah ditemukan dan mencari petunjuk kakaknya yang hilang.</p></div></div>', 'http://localhost/MITIX/images/uncharted.jpg', '<iframe width=\"885\" height=\"498\" src=\"https://www.youtube.com/embed/eHp3MbsCbMg\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'now_showing', '', '', '2022-04-22'),
(19, 'CONTRACTOR', '<span style=\"font-weight: bolder; color: inherit; font-family: inherit; font-size: 2.5rem;\">CONTRACTOR</span><span style=\"font-family: calibri;\"><br></span><div class=\"film_info\" style=\"width: 775.2px; display: inline-block; vertical-align: top; margin: 35px auto; font-family: calibri;\"><br><div class=\"info_box\" style=\"\"><p class=\"label_info\" style=\"width: 100px; min-width: 100px; display: inline-block; vertical-align: middle;\">Jenis Film &nbsp;</p>&nbsp;<span class=\"sep\" style=\"vertical-align: middle; display: inline-block;\"><p>:</p></span>&nbsp;<p class=\"info_value\" style=\"width: 542.638px; display: inline-block; vertical-align: middle;\">Action, Thriller</p></div><div class=\"info_box\" style=\"\"><p class=\"label_info\" style=\"width: 100px; min-width: 100px; display: inline-block; vertical-align: middle;\">Produser &nbsp;&nbsp;</p>&nbsp;<span class=\"sep\" style=\"vertical-align: middle; display: inline-block;\"><p>:</p></span>&nbsp;<p class=\"info_value\" style=\"width: 542.638px; display: inline-block; vertical-align: middle;\">Josh Bratman, Chris Pine, Robert Simonds, Jake Carter</p></div><div class=\"info_box\" style=\"\"><p class=\"label_info\" style=\"width: 100px; min-width: 100px; display: inline-block; vertical-align: middle;\">Sutradara &nbsp;</p>&nbsp;<span class=\"sep\" style=\"vertical-align: middle; display: inline-block;\"><p>:</p></span>&nbsp;<p class=\"info_value\" style=\"width: 542.638px; display: inline-block; vertical-align: middle;\">Tarik Saleh</p></div><div class=\"info_box\" style=\"\"><p class=\"label_info\" style=\"width: 100px; min-width: 100px; display: inline-block; vertical-align: middle;\">Penulis &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>&nbsp;<span class=\"sep\" style=\"vertical-align: middle; display: inline-block;\"><p>:</p></span>&nbsp;<p class=\"info_value\" style=\"width: 542.638px; display: inline-block; vertical-align: middle;\">J.P. Davis</p></div><div class=\"info_box\" style=\"\"><p class=\"label_info\" style=\"width: 100px; min-width: 100px; display: inline-block; vertical-align: middle;\">Produksi &nbsp;&nbsp;&nbsp;</p>&nbsp;<span class=\"sep\" style=\"vertical-align: middle; display: inline-block;\"><p>:</p></span>&nbsp;<p class=\"info_value\" style=\"width: 542.638px; display: inline-block; vertical-align: middle;\">STX Films</p></div><div class=\"info_box\" style=\"\"><p class=\"label_info\" style=\"width: 100px; min-width: 100px; display: inline-block; vertical-align: middle;\">Casts &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>&nbsp;<span class=\"sep\" style=\"vertical-align: middle; display: inline-block;\"><p>:</p></span>&nbsp;<p class=\"info_value\" style=\"width: 542.638px; display: inline-block; vertical-align: middle;\">Chris Pine, Gillian Jacobs, Ben Foster, Kiefer Sutherland, Eddie Marsan, Florian Munteanu, Nina Hoss, Tait Fletcher, Fares Fares, JD Pardo, Alexej Manvelov, Tyner Rushing</p></div><div class=\"info_box\" style=\"\"><h1 class=\"label_info\" ;=\"\" style=\"font-size: 20pt; width: 100px; min-width: 100px; display: inline-block; vertical-align: middle;\">SINOPSIS</h1><br><p class=\"info_value\" ;=\"\" style=\"width: 775.2px; display: inline-block; vertical-align: middle;\">James Harper (Pine), yang secara tidak sengaja diberhentikan dari U.S. Army Special Forces, bergabung dengan organisasi kontraktor swasta bersama sahabatnya (Foster), demi menafkahi keluarganya. Mereka berdua berada di bawah komando sesama veteran (Sutherland). Menjalani misi rahasia di luar negaranya, Harper harus menghindari orang-orang yang mencoba membunuhnya saat kembali menuju ke rumah.</p></div></div>', 'http://localhost/MITIX/images/contractor.jpg', '<iframe width=\"885\" height=\"498\" src=\"https://www.youtube.com/embed/e7glvM8Xh0w\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'coming_soon', '', '', '2022-04-22'),
(20, 'KKN di Desa Penari', '<span style=\"font-weight: bolder; color: inherit; font-family: inherit; font-size: 2.5rem;\">KKN di Desa Penari</span><span style=\"font-family: calibri;\"><br></span><div class=\"film_info\" style=\"width: 775.2px; display: inline-block; vertical-align: top; margin: 35px auto; font-family: calibri;\"><br><div class=\"info_box\" style=\"\"><p class=\"label_info\" style=\"width: 100px; min-width: 100px; display: inline-block; vertical-align: middle;\">Jenis Film &nbsp;</p>&nbsp;<span class=\"sep\" style=\"vertical-align: middle; display: inline-block;\"><p>:</p></span>&nbsp;<p class=\"info_value\" style=\"width: 542.638px; display: inline-block; vertical-align: middle;\">Horror</p></div><div class=\"info_box\" style=\"\"><p class=\"label_info\" style=\"width: 100px; min-width: 100px; display: inline-block; vertical-align: middle;\">Produser &nbsp;&nbsp;</p>&nbsp;<span class=\"sep\" style=\"vertical-align: middle; display: inline-block;\"><p>:</p></span>&nbsp;<p class=\"info_value\" style=\"width: 542.638px; display: inline-block; vertical-align: middle;\">Manoj Punjabi</p></div><div class=\"info_box\" style=\"\"><p class=\"label_info\" style=\"width: 100px; min-width: 100px; display: inline-block; vertical-align: middle;\">Sutradara &nbsp;</p>&nbsp;<span class=\"sep\" style=\"vertical-align: middle; display: inline-block;\"><p>:</p></span>&nbsp;<p class=\"info_value\" style=\"width: 542.638px; display: inline-block; vertical-align: middle;\">Awi Suryadi</p></div><div class=\"info_box\" style=\"\"><p class=\"label_info\" style=\"width: 100px; min-width: 100px; display: inline-block; vertical-align: middle;\">Penulis &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>&nbsp;<span class=\"sep\" style=\"vertical-align: middle; display: inline-block;\"><p>:</p></span>&nbsp;<p class=\"info_value\" style=\"width: 542.638px; display: inline-block; vertical-align: middle;\">Lele Laila, Gerald Mamahit</p></div><div class=\"info_box\" style=\"\"><p class=\"label_info\" style=\"width: 100px; min-width: 100px; display: inline-block; vertical-align: middle;\">Produksi &nbsp;&nbsp;&nbsp;</p>&nbsp;<span class=\"sep\" style=\"vertical-align: middle; display: inline-block;\"><p>:</p></span>&nbsp;<p class=\"info_value\" style=\"width: 542.638px; display: inline-block; vertical-align: middle;\">MD Pictures, Pic House Films</p></div><div class=\"info_box\" style=\"\"><p class=\"label_info\" style=\"width: 100px; min-width: 100px; display: inline-block; vertical-align: middle;\">Casts &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>&nbsp;<span class=\"sep\" style=\"vertical-align: middle; display: inline-block;\"><p>:</p></span>&nbsp;<p class=\"info_value\" style=\"width: 542.638px; display: inline-block; vertical-align: middle;\">Tissa Biani, Adinda Thomas, Achmad Megantara, Aghniny Haque, Calvin Jeremy, M Fajar Nugraha, Kiki Narendra, Aulia Sarah, Aty Cancer, Diding Boneng, Dewi Sri, Andri Mashadi Trinugraha</p></div><div class=\"info_box\" style=\"\"><h1 class=\"label_info\" ;=\"\" style=\"font-size: 20pt; width: 100px; min-width: 100px; display: inline-block; vertical-align: middle;\">SINOPSIS</h1><br><p class=\"info_value\" ;=\"\" style=\"width: 775.2px; display: inline-block; vertical-align: middle;\">Seorang laki-laki yang dikenal dengan sebutan Simpleman, mendapatkan sebuah kisah menyeramkan. Berawal dari 5 mahasiswa yang harus melaksanakan KKN di sebuah desa terpencil, Nur (Tissa Biani), Widya ( Adinda Thomas), Ayu (Aghniny Haque), Bima (Achmad Megantara), Anton (Calvin Jeremy) dan Wahyu ( M. Fajar Nugraga) tidak pernah menyangka kalau desa yang mereka pilih ternyata bukanlah desa biasa. Pak Prabu (Kiki Narendra)sang kepala desa memperingatkan mereka untuk tidak melewati batas gapura terlarang, sebuah gapura yang menuju tapak tilas. Tempat misterius itu mungkin ada hubungannya dengan sosok penari cantik yang mulai menganggu Nur dan juga Widya. Satu persatu mulai merasakan keanehan desa tersebut. Bima pun mulai berubah sikap. Proker KKN mereka berantakan, tampaknya penghuni ghaib desa tersebut tidak menyukai mereka. Nur akhirnya menemukan fakta mencengangkan bahwa salah satu dari mereka melanggar aturan yang paling fatal di desa tersebut. Teror sosok penari misterius semakin menyeramkan, mereka mencoba meminta bantuan Mbah Buyut (Diding Boneng) dukun setempat, namun sudah terlambat, mereka terancam tidak akan bisa pulang dengan selamat dari desa yang dikenal dengan sebutan desa penari itu.</p></div></div>', 'http://localhost/MITIX/images/KKN.jpg', '<iframe width=\"1046\" height=\"392\" src=\"https://www.youtube.com/embed/jtDRXPTZT-M\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'coming_soon', '', '', '2022-04-22'),
(21, 'Sonic the Hedgehog 2', '<span style=\"font-weight: bolder; color: inherit; font-family: inherit; font-size: 2.5rem;\">Sonic the Hedgehog 2</span><span style=\"font-family: calibri;\"><br></span><div class=\"film_info\" style=\"width: 775.2px; display: inline-block; vertical-align: top; margin: 35px auto; font-family: calibri;\"><br><div class=\"info_box\" style=\"\"><p class=\"label_info\" style=\"width: 100px; min-width: 100px; display: inline-block; vertical-align: middle;\">Jenis Film &nbsp;</p>&nbsp;<span class=\"sep\" style=\"vertical-align: middle; display: inline-block;\"><p>:</p></span>&nbsp;<p class=\"info_value\" style=\"width: 542.638px; display: inline-block; vertical-align: middle;\">Action, Adventure, Comedy</p></div><div class=\"info_box\" style=\"\"><p class=\"label_info\" style=\"width: 100px; min-width: 100px; display: inline-block; vertical-align: middle;\">Produser &nbsp;&nbsp;</p>&nbsp;<span class=\"sep\" style=\"vertical-align: middle; display: inline-block;\"><p>:</p></span>&nbsp;<p class=\"info_value\" style=\"width: 542.638px; display: inline-block; vertical-align: middle;\">Action, Adventure, Comedy</p></div><div class=\"info_box\" style=\"\"><p class=\"label_info\" style=\"width: 100px; min-width: 100px; display: inline-block; vertical-align: middle;\">Sutradara &nbsp;</p>&nbsp;<span class=\"sep\" style=\"vertical-align: middle; display: inline-block;\"><p>:</p></span>&nbsp;<p class=\"info_value\" style=\"width: 542.638px; display: inline-block; vertical-align: middle;\">Jeff Fowler</p></div><div class=\"info_box\" style=\"\"><p class=\"label_info\" style=\"width: 100px; min-width: 100px; display: inline-block; vertical-align: middle;\">Penulis &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>&nbsp;<span class=\"sep\" style=\"vertical-align: middle; display: inline-block;\"><p>:</p></span>&nbsp;<p class=\"info_value\" style=\"width: 542.638px; display: inline-block; vertical-align: middle;\">Jeff Fowler</p></div><div class=\"info_box\" style=\"\"><p class=\"label_info\" style=\"width: 100px; min-width: 100px; display: inline-block; vertical-align: middle;\">Produksi &nbsp;&nbsp;&nbsp;</p>&nbsp;<span class=\"sep\" style=\"vertical-align: middle; display: inline-block;\"><p>:</p></span>&nbsp;<p class=\"info_value\" style=\"width: 542.638px; display: inline-block; vertical-align: middle;\">Paramount Pictures</p></div><div class=\"info_box\" style=\"\"><p class=\"label_info\" style=\"width: 100px; min-width: 100px; display: inline-block; vertical-align: middle;\">Casts &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>&nbsp;<span class=\"sep\" style=\"vertical-align: middle; display: inline-block;\"><p>:</p></span>&nbsp;<p class=\"info_value\" style=\"width: 542.638px; display: inline-block; vertical-align: middle;\">Ben Schwartz, Idris Elba, Colleen O Shaughnessey, Jim Carrey, James Marsden, Tika Sumpter, Natasha Rothwell, Shemar Moore, Adam Pally, Lee Majdoub</p></div><div class=\"info_box\" style=\"\"><h1 class=\"label_info\" ;=\"\" style=\"font-size: 20pt; width: 100px; min-width: 100px; display: inline-block; vertical-align: middle;\">SINOPSIS</h1><br><p class=\"info_value\" ;=\"\" style=\"width: 775.2px; display: inline-block; vertical-align: middle;\">Mengisahkan petualangan Sonic saat ia belajar tentang kompleksitas kehidupan di bumi bersama manusia sahabat barunya, Tom Wachowski. Sonic dan Tom bersatu untuk menghentikan si jahat Dr. Robotnik yang ingin menangkap Sonic dan menggunakan kekuatan istimewanya untuk menguasai dunia.</p></div></div>', 'http://localhost/MITIX/images/sonic.jpg', '<iframe width=\"885\" height=\"498\" src=\"https://www.youtube.com/embed/47r8FXYZWNU\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'coming_soon', '', '', '2022-04-22'),
(22, 'Gara-gara Warisan', '<h1 style=\"margin-top: 20px; color: rgb(33, 37, 41); font-family: calibri; margin-left: 0px;\"><span style=\"font-weight: bolder;\">Gara-gara Warisan</span></h1><br style=\"font-family: calibri;\"><div class=\"info_box\" style=\"font-family: calibri;\"><p class=\"label_info\" style=\"width: 100px; min-width: 100px; display: inline-block; vertical-align: middle;\">Jenis Film &nbsp;</p>&nbsp;<span class=\"sep\" style=\"vertical-align: middle; display: inline-block;\"><p>:</p></span>&nbsp;<p class=\"info_value\" style=\"width: 542.638px; display: inline-block; vertical-align: middle;\">Drama, Comedy</p></div><div class=\"info_box\" style=\"font-family: calibri;\"><p class=\"label_info\" style=\"width: 100px; min-width: 100px; display: inline-block; vertical-align: middle;\">Produser &nbsp;&nbsp;</p>&nbsp;<span class=\"sep\" style=\"vertical-align: middle; display: inline-block;\"><p>:</p></span>&nbsp;<p class=\"info_value\" style=\"width: 542.638px; display: inline-block; vertical-align: middle;\">Ernest Prakasa, Chand Parwez Servia</p></div><div class=\"info_box\" style=\"font-family: calibri;\"><p class=\"label_info\" style=\"width: 100px; min-width: 100px; display: inline-block; vertical-align: middle;\">Sutradara &nbsp;</p>&nbsp;<span class=\"sep\" style=\"vertical-align: middle; display: inline-block;\"><p>:</p></span>&nbsp;<p class=\"info_value\" style=\"width: 542.638px; display: inline-block; vertical-align: middle;\">Muhadkly Acho</p></div><div class=\"info_box\" style=\"font-family: calibri;\"><p class=\"label_info\" style=\"width: 100px; min-width: 100px; display: inline-block; vertical-align: middle;\">Penulis &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>&nbsp;<span class=\"sep\" style=\"vertical-align: middle; display: inline-block;\"><p>:</p></span>&nbsp;<p class=\"info_value\" style=\"width: 542.638px; display: inline-block; vertical-align: middle;\">Muhadkly Acho</p></div><div class=\"info_box\" style=\"font-family: calibri;\"><p class=\"label_info\" style=\"width: 100px; min-width: 100px; display: inline-block; vertical-align: middle;\">Produksi &nbsp;&nbsp;&nbsp;</p>&nbsp;<span class=\"sep\" style=\"vertical-align: middle; display: inline-block;\"><p>:</p></span>&nbsp;<p class=\"info_value\" style=\"width: 542.638px; display: inline-block; vertical-align: middle;\">Starvision</p></div><div class=\"info_box\" style=\"font-family: calibri;\"><p class=\"label_info\" style=\"width: 100px; min-width: 100px; display: inline-block; vertical-align: middle;\">Casts &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>&nbsp;<span class=\"sep\" style=\"vertical-align: middle; display: inline-block;\"><p>:</p></span>&nbsp;<p class=\"info_value\" style=\"width: 542.638px; display: inline-block; vertical-align: middle;\">Oka Antara, Indah Permatasari, Ge Pamungkas, Yayu Unru, Ira Wibowo, Ernest Prakasa, Sheila Dara, Lukman Sardi, Lydia Kandou, Aci Resti, Lolox, Ence Bagus, Dicky Difie, Tanta Ginting, Hesti Purwadinata</p></div><div class=\"info_box\" style=\"font-family: calibri;\"><h1 class=\"label_info\" ;=\"\" style=\"font-size: 20pt; width: 100px; min-width: 100px; display: inline-block; vertical-align: middle;\">SINOPSIS</h1><br><p class=\"info_value\" ;=\"\" style=\"width: 775.2px; display: inline-block; vertical-align: middle;\">Tiga bersaudara yang tidak pernah akur terpaksa bersaing memperebutkan warisan berupa sebuah guest house milik Dahlan (Yayu Unru), ayah mereka. Adam (Oka Antara), anak sulung yang menyalahkan sikap keras ayahnya untuk kegagalan-kegagalan hidupnya. Laras (Indah Permatasari), anak tengah yang berjiwa independen dan idealis. Dan Dicky (Ge Pamungkas), anak bungsu kesayangan ayahnya yang dimanja sejak kecil dan tumbuh sebagai pemuda yang bengal. Siapakah yang akan menjadi ahli waris pilihan? Perseteruan, dengki, dan dendam-dendam masa lalu, semua terungkap, GARA-GARA WARISAN.</p></div>', 'http://localhost/MITIX/images/warisan.jpg', '<iframe width=\"944\" height=\"498\" src=\"https://www.youtube.com/embed/bgrJaKR9w-A\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'coming_soon', '', '', '2022-04-22'),
(23, 'Fantastic Beasts', '<span style=\"font-weight: bolder; color: inherit; font-family: inherit; font-size: 2.5rem;\">Fantastic Beasts: The Secrets of Dumbledore</span><span style=\"font-family: calibri;\"><br></span><div class=\"film_info\" style=\"width: 775.2px; display: inline-block; vertical-align: top; margin: 35px auto; font-family: calibri;\"><br><div class=\"info_box\" style=\"\"><p class=\"label_info\" style=\"width: 100px; min-width: 100px; display: inline-block; vertical-align: middle;\">Jenis Film &nbsp;</p>&nbsp;<span class=\"sep\" style=\"vertical-align: middle; display: inline-block;\"><p>:</p></span>&nbsp;<p class=\"info_value\" style=\"width: 542.638px; display: inline-block; vertical-align: middle;\">Adventure, Family, Fantasy</p></div><div class=\"info_box\" style=\"\"><p class=\"label_info\" style=\"width: 100px; min-width: 100px; display: inline-block; vertical-align: middle;\">Produser &nbsp;&nbsp;</p>&nbsp;<span class=\"sep\" style=\"vertical-align: middle; display: inline-block;\"><p>:</p></span>&nbsp;<p class=\"info_value\" style=\"width: 542.638px; display: inline-block; vertical-align: middle;\">David Heyman, Steve Kloves, Tim Lewis, J.K. Rowling, Lionel Wigram/p&gt;</p></div><div class=\"info_box\" style=\"\"><p class=\"label_info\" style=\"width: 100px; min-width: 100px; display: inline-block; vertical-align: middle;\">Sutradara &nbsp;</p>&nbsp;<span class=\"sep\" style=\"vertical-align: middle; display: inline-block;\"><p>:</p></span>&nbsp;<p class=\"info_value\" style=\"width: 542.638px; display: inline-block; vertical-align: middle;\">David Yates</p></div><div class=\"info_box\" style=\"\"><p class=\"label_info\" style=\"width: 100px; min-width: 100px; display: inline-block; vertical-align: middle;\">Penulis &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>&nbsp;<span class=\"sep\" style=\"vertical-align: middle; display: inline-block;\"><p>:</p></span>&nbsp;<p class=\"info_value\" style=\"width: 542.638px; display: inline-block; vertical-align: middle;\">J.K. Rowling, Steve Kloves</p></div><div class=\"info_box\" style=\"\"><p class=\"label_info\" style=\"width: 100px; min-width: 100px; display: inline-block; vertical-align: middle;\">Produksi &nbsp;&nbsp;&nbsp;</p>&nbsp;<span class=\"sep\" style=\"vertical-align: middle; display: inline-block;\"><p>:</p></span>&nbsp;<p class=\"info_value\" style=\"width: 542.638px; display: inline-block; vertical-align: middle;\">Warner Bros. Pictures</p></div><div class=\"info_box\" style=\"\"><p class=\"label_info\" style=\"width: 100px; min-width: 100px; display: inline-block; vertical-align: middle;\">Casts &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>&nbsp;<span class=\"sep\" style=\"vertical-align: middle; display: inline-block;\"><p>:</p></span>&nbsp;<p class=\"info_value\" style=\"width: 542.638px; display: inline-block; vertical-align: middle;\">Jude Law, Eddie Redmayne, Mads Mikkelsen, Dan Fogler, Katherine Waterston, Ezra Miller, Alison Sudol, Callum Turner, Jessica Williams, Poppy Corby-Tuech</p></div><div class=\"info_box\" style=\"\"><h1 class=\"label_info\" ;=\"\" style=\"font-size: 20pt; width: 100px; min-width: 100px; display: inline-block; vertical-align: middle;\">SINOPSIS</h1><br><p class=\"info_value\" ;=\"\" style=\"width: 775.2px; display: inline-block; vertical-align: middle;\">Seri ketiga dari Fantastic Beasts and Where to Find Them kali ini akan mengisahkan petualangan Newt Scamander (Eddie Redmayne) yang mendapat tugas dari Albus Dumbledore (Jude Law) memimpin kelompok penyihir dan seorang muggle dalam misi berbahaya untuk menghentikan penyihir gelap, Gellert Grindelwald.</p></div></div>', 'http://localhost/MITIX/images/fantastic.jpg', '<iframe width=\"885\" height=\"498\" src=\"https://www.youtube.com/embed/Y9dr2zw-TXQ\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'coming_soon', '', '', '2022-04-22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwalpenayangan`
--

CREATE TABLE `jadwalpenayangan` (
  `id` int(11) NOT NULL,
  `id_studio` varchar(100) NOT NULL,
  `id_film` varchar(100) NOT NULL,
  `jam_tayang` varchar(100) NOT NULL,
  `date` date DEFAULT NULL,
  `tiket_terbeli` varchar(100) NOT NULL,
  `tiket_tersedia` varchar(100) NOT NULL,
  `harga_tiket` varchar(100) NOT NULL,
  `kursi_terbeli` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jadwalpenayangan`
--

INSERT INTO `jadwalpenayangan` (`id`, `id_studio`, `id_film`, `jam_tayang`, `date`, `tiket_terbeli`, `tiket_tersedia`, `harga_tiket`, `kursi_terbeli`) VALUES
(1, '3', '1', '12:15', '2022-04-18', '0', '25', '35000', ''),
(2, '3', '1', '15:05', '2022-04-18', '0', '25', '35000', ''),
(3, '3', '1', '17:40', '2022-04-18', '0', '25', '35000', ''),
(6, '1', '1', '15:05', '2022-04-18', '0', '30', '35000', ''),
(7, '1', '1', '12:15', '2022-04-18', '0', '30', '35000', ''),
(8, '1', '1', '17:40', '2022-04-18', '0', '30', '35000', ''),
(9, '2', '1', '12:15', '2022-04-20', '0', '50', '35000', ''),
(10, '2', '1', '17:40', '2022-04-20', '0', '50', '35000', ''),
(11, '2', '1', '20:50', '2022-04-20', '0', '50', '35000', ''),
(12, '1', '5', '12:15', '2022-04-19', '0', '30', '35000', 'A1;A3;A5;'),
(13, '1', '5', '13:50', '2022-04-19', '0', '30', '35000', ''),
(14, '1', '5', '15:05', '2022-04-19', '0', '30', '35000', ''),
(15, '1', '5', '16:35', '2022-04-19', '0', '30', '35000', ''),
(16, '1', '5', '17:40', '2022-04-19', '0', '30', '35000', ''),
(17, '2', '5', '12:15', '2022-04-18', '0', '50', '35000', ''),
(18, '2', '5', '17:40', '2022-04-18', '2', '48', '35000', 'B3;B4;'),
(19, '2', '5', '19:30', '2022-04-18', '0', '50', '35000', ''),
(20, '1', '5', '12:15', '2022-04-20', '0', '30', '35000', ''),
(21, '1', '5', '16:35', '2022-04-20', '0', '30', '35000', ''),
(22, '1', '5', '20:50', '2022-04-20', '0', '30', '35000', 'C3;A1;A2;B1;B2;C4;C5;D4;D5;'),
(23, '1', '5', '12:15', '2022-04-21', '0', '30', '35000', ''),
(24, '1', '5', '17:40', '2022-04-21', '0', '30', '35000', ''),
(25, '1', '5', '00:10', '2022-04-21', '0', '30', '35000', ''),
(26, '9', '5', '12:15', '2022-04-20', '4', '66', '35000', 'D5;E6;A1;A2;'),
(27, '9', '5', '13:50', '2022-04-20', '0', '70', '35000', ''),
(28, '9', '5', '16:35', '2022-04-20', '21', '49', '35000', 'A1;D7;D8;A1;B1;B2;A1;A2;A4;A5;B8;C9;D10;C3;C4;F3;F4;F5;F6;F7;F8;G4;G5;G6;G7;E5;E6;D5;D6;C5;C6;E7;E8;E3;E4;G9;G10;'),
(29, '9', '5', '17:40', '2022-04-20', '0', '70', '35000', ''),
(30, '9', '5', '20:50', '2022-04-20', '6', '64', '35000', 'G9;G10;G4;G5;G6;G7;'),
(31, '1', '9', '12:15', '2022-04-24', '0', '30', '50000', ''),
(32, '1', '9', '13:50', '2022-04-24', '0', '30', '50000', ''),
(33, '1', '9', '17:40', '2022-04-24', '0', '30', '50000', ''),
(34, '1', '9', '22:20', '2022-04-24', '0', '30', '50000', ''),
(35, '1', '9', '00:10', '2022-04-24', '0', '30', '50000', ''),
(37, '9', '7', '13:50', '2022-04-24', '3', '67', '50000', 'A3;B4;C5;'),
(38, '9', '7', '16:35', '2022-04-24', '4', '66', '50000', 'B4;B5;A4;A5;'),
(39, '9', '7', '20:50', '2022-04-24', '3', '67', '50000', 'D4;D5;D6;'),
(40, '1', '7', '12:15', '2022-04-24', '0', '30', '50000', ''),
(41, '1', '7', '13:50', '2022-04-24', '0', '30', '50000', ''),
(42, '1', '7', '15:05', '2022-04-24', '0', '30', '50000', ''),
(43, '1', '7', '16:35', '2022-04-24', '0', '30', '50000', ''),
(44, '1', '7', '17:40', '2022-04-24', '0', '30', '50000', ''),
(45, '1', '7', '19:30', '2022-04-24', '0', '30', '50000', ''),
(46, '1', '7', '20:50', '2022-04-24', '0', '30', '50000', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lokasi`
--

CREATE TABLE `lokasi` (
  `id` int(11) NOT NULL,
  `nama_lokasi` varchar(40) NOT NULL,
  `wilayah` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `lokasi`
--

INSERT INTO `lokasi` (`id`, `nama_lokasi`, `wilayah`) VALUES
(1, 'CinemaXXI - Sun Plaza', 'Medan'),
(2, 'CinemaXXI - Senayan City', 'Jakarta'),
(3, 'CinemaXXI - Delipark', 'Medan'),
(4, 'CinemaXXI - Binjai Super Mall', 'Binjai'),
(0, 'CinemaXXI - Delipark', 'Bandung'),
(0, 'CinemaXXI - Kota Pula Mall', 'Surabaya'),
(0, 'CinemaXXI - BSM 2', 'Binjai'),
(0, 'CinemaXXI - Thamrin Plaza', 'Medan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian`
--

CREATE TABLE `pembelian` (
  `id` int(11) NOT NULL,
  `id_user` varchar(100) NOT NULL,
  `id_shows` varchar(100) NOT NULL,
  `detail_tiket` varchar(100) NOT NULL,
  `jlh_tiket` varchar(100) NOT NULL,
  `metode_pembayaran` varchar(100) NOT NULL,
  `verif_oleh` varchar(100) NOT NULL,
  `created_at` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pembelian`
--

INSERT INTO `pembelian` (`id`, `id_user`, `id_shows`, `detail_tiket`, `jlh_tiket`, `metode_pembayaran`, `verif_oleh`, `created_at`) VALUES
(1, '1', '30', 'G9;G10', '2', 'Ovo', '', '2022-04-19 10:18:03'),
(2, '1', '28', 'C3;C4;F3;F4;F5', '5', 'Ovo', '', '2022-04-19 10:24:33'),
(3, '1', '18', 'B3;B4', '2', 'Ovo', '', '2022-04-19 10:25:25'),
(4, '1', '26', 'A1;A2', '2', 'Ovo', '', '2022-04-19 10:29:20'),
(5, '2', '28', 'B8;C9;D10;C3', '4', 'Ovo', '', '2022-04-19 10:58:13'),
(6, '2', '36', 'A3;B3;C3', '3', 'Ovo', '', '2022-04-19 12:26:33'),
(7, '1', '38', 'A4,A5', '2', 'Ovo', '', '2022-04-19 13:48:55'),
(8, '1', '38', 'B4,B5', '2', 'Ovo', '', '2022-04-19 13:50:33'),
(9, '3', '39', 'D4,D5,D6', '3', 'Ovo', '', '2022-04-19 14:27:56'),
(10, '3', '28', 'A1,B1,B2', '3', 'Ovo', '', '2022-04-22 15:34:20'),
(11, '3', '26', 'D5,E6', '2', 'Ovo', '', '2022-04-22 15:36:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `studio`
--

CREATE TABLE `studio` (
  `id` int(11) NOT NULL,
  `id_lokasi` varchar(40) NOT NULL,
  `studio_no` varchar(40) NOT NULL,
  `pattern_kursi` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `studio`
--

INSERT INTO `studio` (`id`, `id_lokasi`, `studio_no`, `pattern_kursi`) VALUES
(1, '3', '1', '6;5'),
(2, '4', '1', '5;10'),
(9, '3', '2', '7;10'),
(13, '3', '3', '5;6'),
(14, '3', '4', '5;5');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `phonenumber` varchar(100) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `bulan` varchar(100) NOT NULL,
  `tahun` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `gender`, `phonenumber`, `tanggal`, `bulan`, `tahun`, `username`, `password`) VALUES
(1, 'Erick', 'Daniswara', 'erickdaniswara@gmail.com', 'pria', '081265086473', '1', 'Jan', '2022', 'erickdanz', 'ffba0d8f5318f4a546be08595220c44d90e0a32a'),
(2, 'Daniel', 'Shiffer', 'danielshiffer@gmail.com', 'pria', '081265087654', '1', 'May', '2003', 'daniel123', 'f700a6934e78cd908cb5665cd84f89318bfa2d43'),
(3, 'Elbert', 'Hutama', 'elberthutama@gmail.com', 'pria', '081265087652', '1', 'Nov', '2002', 'elbert', 'ce9789a470d4d84efc8bc1b1c17d151e01b861c2');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jadwalpenayangan`
--
ALTER TABLE `jadwalpenayangan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `studio`
--
ALTER TABLE `studio`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `film`
--
ALTER TABLE `film`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `jadwalpenayangan`
--
ALTER TABLE `jadwalpenayangan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `studio`
--
ALTER TABLE `studio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
