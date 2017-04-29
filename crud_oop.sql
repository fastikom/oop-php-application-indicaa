-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 29. April 2017 jam 01:12
-- Versi Server: 5.1.41
-- Versi PHP: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `crud_oop`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `biodata`
--

CREATE TABLE IF NOT EXISTS `biodata` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nim` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tmpt_lahir` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data untuk tabel `biodata`
--

INSERT IGNORE INTO `biodata` (`id`, `nim`, `nama`, `email`, `tmpt_lahir`) VALUES
(8, 45345, 'fgrfg', '', 'dfgdfg'),
(9, 234523, 'dfwf', '', 'sadfsdf'),
(10, 2345, 'wret', '', 'wtfwert'),
(12, 6756, 'tgryhty', '', 'fsfd@efg.com'),
(13, 56, 'errter', 'ftgyhrth@fghh.yhjuty', 'fgdfg'),
(14, 2345, 'tygrefgh', '', 'fsfd@efg.com'),
(15, 67656456, 'fghfgh', 'aku121234@efg.com', 'sdfsdf');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
