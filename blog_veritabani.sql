-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 18 Ara 2022, 11:18:41
-- Sunucu sürümü: 10.4.10-MariaDB
-- PHP Sürümü: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `blog_veritabani`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ders`
--

DROP TABLE IF EXISTS `ders`;
CREATE TABLE IF NOT EXISTS `ders` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `DERS_AD` varchar(50) NOT NULL,
  `DERS_OGRETMEN` varchar(100) NOT NULL,
  `DERS_SAAT` time NOT NULL,
  `DERS_GUNU` varchar(10) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `ders`
--

INSERT INTO `ders` (`ID`, `DERS_AD`, `DERS_OGRETMEN`, `DERS_SAAT`, `DERS_GUNU`) VALUES
(1, 'Web Programlama', 'Murat Karakoyun', '13:00:00', 'Perşembe'),
(2, 'İşletim Sistemleri', 'Mehmet Hacıbeyoğlu', '09:00:00', 'Salı');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `konu`
--

DROP TABLE IF EXISTS `konu`;
CREATE TABLE IF NOT EXISTS `konu` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `KONU` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `konu`
--

INSERT INTO `konu` (`ID`, `KONU`) VALUES
(1, 'Bilimsel'),
(2, 'Teknoloji'),
(3, 'Tarih'),
(4, 'Ekonomi'),
(5, 'Edebiyat'),
(6, 'Coğrafya'),
(7, 'Spor'),
(8, 'Siyaset'),
(9, 'Diğer');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

DROP TABLE IF EXISTS `kullanicilar`;
CREATE TABLE IF NOT EXISTS `kullanicilar` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `KULLANICI_ADI` varchar(50) NOT NULL,
  `PAROLA` varchar(50) NOT NULL,
  `AD_SOYAD` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`ID`, `KULLANICI_ADI`, `PAROLA`, `AD_SOYAD`) VALUES
(1, 'hasan', '12345', 'Hasan Ceyhan');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `makale`
--

DROP TABLE IF EXISTS `makale`;
CREATE TABLE IF NOT EXISTS `makale` (
  `MAKALE_ID` int(20) NOT NULL AUTO_INCREMENT,
  `MAKALE_AD` varchar(100) NOT NULL,
  `MAKALE_ICERIK` longtext NOT NULL,
  `MAKALE_YAZAR` varchar(100) NOT NULL,
  `MAKALE_KONU` varchar(50) NOT NULL,
  `MAKALE_TARIH` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`MAKALE_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `makale`
--

INSERT INTO `makale` (`MAKALE_ID`, `MAKALE_AD`, `MAKALE_ICERIK`, `MAKALE_YAZAR`, `MAKALE_KONU`, `MAKALE_TARIH`) VALUES
(1, 'DENEME', 'DENEME', 'Hasan Ceyhan', 'Bilimsel', '2022-12-18 14:10:53'),
(2, 'Yeni makale', 'Ekonomik makale içeriği \r\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Fuga quas sapiente inventore consectetur non nostrum quasi aliquid nisi sequi cumque est nesciunt placeat accusantium dolorem explicabo, sint eius porro provident repudiandae assumenda atque rerum tempora odit ullam. Ipsum, neque. Unde beatae necessitatibus officiis, temporibus laboriosam ea ratione consectetur quis voluptate dolores amet molestiae delectus dolor iure exercitationem quaerat labore inventore laudantium numquam ut molestias hic nobis aliquam eum. Labore, odit consectetur. Reprehenderit libero culpa quisquam. Illum, nam sed non expedita quae veniam sint, in libero, fuga quia molestias eligendi distinctio incidunt hic optio illo eum dolorum quibusdam veritatis suscipit iure impedit autem dolore adipisci! Itaque fuga modi quidem fugit nulla culpa dignissimos, velit, eaque in nobis quaerat pariatur unde obcaecati? Quia possimus similique aperiam mollitia. Temporibus voluptates eos quis atque architecto ea minima labore quisquam ipsum natus, fugiat distinctio officia quo praesentium, dolorem alias explicabo consectetur, reiciendis ', 'Hasan Ceyhan', 'Ekonomi', '2022-12-18 14:17:47');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yorum`
--

DROP TABLE IF EXISTS `yorum`;
CREATE TABLE IF NOT EXISTS `yorum` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `MAKALE_ID` int(11) NOT NULL,
  `YORUM_AD` varchar(50) NOT NULL,
  `YORUM` longtext NOT NULL,
  `YORUM_TARIH` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `yorum`
--

INSERT INTO `yorum` (`ID`, `MAKALE_ID`, `YORUM_AD`, `YORUM`, `YORUM_TARIH`) VALUES
(1, 1, 'Denem yorum', 'deneme bir yorum yapıldı', '2022-12-18 14:14:33'),
(2, 2, 'Hasan Ceyhan', 'Güzel bi makale !', '2022-12-18 14:18:10');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
