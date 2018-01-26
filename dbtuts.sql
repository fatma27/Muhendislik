

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";




--
-- Veritabanı: `dbtuts`
--
CREATE DATABASE IF NOT EXISTS `dbtuts` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `dbtuts`;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(5) NOT NULL AUTO_INCREMENT,
  `kullanici_adi` varchar(25) CHARACTER SET latin5 NOT NULL,
  `kullanici_soyadi` varchar(25) CHARACTER SET latin5 NOT NULL,
  `kullanici_sehri` varchar(25) CHARACTER SET latin5 NOT NULL,
  `kullanici_dgmtrh` varchar(50) CHARACTER SET latin5 NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=6 ;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`user_id`, `kullanici_adi`, `kullanici_soyadi`, `kullanici_sehri`, `kullanici_dgmtrh`) VALUES
(3, 'Fatma', 'Doner', 'Gaziantep', '1995'),
(4, 'Merve', 'Karabulut', 'Tavsanli', '1996'),
(5, 'Zafer', 'Serin', 'Konya', '1995');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
