-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 13 Ara 2020, 16:11:59
-- Sunucu sürümü: 10.4.14-MariaDB
-- PHP Sürümü: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `itp_vt`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tbl_391565`
--

CREATE TABLE `tbl_391565` (
  `id` int(11) NOT NULL,
  `ad` varchar(500) COLLATE utf8mb4_turkish_ci NOT NULL,
  `alan` varchar(500) COLLATE utf8mb4_turkish_ci NOT NULL,
  `yazar` varchar(500) COLLATE utf8mb4_turkish_ci NOT NULL,
  `yayin_evi` varchar(500) COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `tbl_391565`
--

INSERT INTO `tbl_391565` (`id`, `ad`, `alan`, `yazar`, `yayin_evi`) VALUES
(1, 'Büyük Atlas', 'Eğitim', 'Faik Sabri DURAN', 'Kanat Kanaay Yayın'),
(2, 'Cumhuriyet Tarihi', 'Tarih', 'K. Ekrem UYKUCU', 'Kervan'),
(3, 'doga kitabı', 'doga', 'taylor', 'maya');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `tbl_391565`
--
ALTER TABLE `tbl_391565`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `tbl_391565`
--
ALTER TABLE `tbl_391565`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
