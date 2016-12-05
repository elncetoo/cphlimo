-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Dec 05, 2016 at 02:51 PM
-- Server version: 10.0.28-MariaDB
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `creartiv_auth`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(250) NOT NULL DEFAULT '',
  `password` varchar(200) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(1, 'admin@admin.com', '$2y$10$tiMS2takQBQwSGwaDxSGNO2RiitS/GhvWjKpJA/JKIMDeLr2z7SLm'),
(2, 'email123@email.com', '$2y$10$9OOFy5W.Vz0VapyS5U.ZqujRiXnklh48Nhc3qGfdSKxLbXRH3i87m'),
(3, 'admin', '$2y$10$BU7MfUPtjeDjS8Qm6Rl2qOnIPVJa1o/qrbLCY5IWHrpXWpIX6oP0S'),
(4, 'admin', '$2y$10$81N6GyGYgVmb1xfScQBQh.0NODeFs0TarpsU3PwLnsOreUBntwURC'),
(5, 'elince_too@abv.bg', '$2y$10$GrA37mJqPJkn2xW/Sd7sU.lUKOAdvMsMEm8GJ3roW3llMtcnx1Fdm'),
(6, 'sabhdbj@abv.bg', '$2y$10$P6CG3V/0VB03aNC1wmBUn.Ge.63ynjnw9gaqRCRP.GPxpONvwDJBC'),
(7, 'gasuhbj@abv.bg', '$2y$10$lLYPwBMqMwon2mtgG2ZFXO/XKoQNkNfjEjKPEDm2JaW8msiwTVFdi'),
(8, 'lala@abv.bg', '$2y$10$429uAO4t9Rbr0pF3a.8sluBnrsutFr6oCSEEH7sOVNyl9G6NhPkA.'),
(9, 'tthis@gmail.com', '$2y$10$KPr6iafBNvJQUGiJnuTnIewUpqeLTTAd/Bh8ev.F2b2VsWvGa0Tau'),
(10, 'jdoe@jdoe.com', '$2y$10$7X7qi/Dn.NP8xvmwXILFce/zEKQbbOnI3rZujQIXEdIcKHczF3HZq'),
(11, 'jdoe@jdoe.com', '$2y$10$RtR1klgfcc7TXwNQbCO7qeXqJcpw3GGIUk3PaAcu2tTOK6YV/i2X.'),
(12, 'jdoe@jdoe.com', '$2y$10$/MRaB74MYg5pb1hBs7/Dy.ajN9ifrfM4XABUgnFp32jMiPOy7PaHS'),
(13, 'jdoe@jdoe.com', '$2y$10$otbvqSqB8Wuup33mNXxVBOqPu2LPl310OwNjNmoZogd7j7.8qxeKi'),
(14, 'jdoe@jdoe.com', '$2y$10$GtPPAmsaOXSNeAyd9jvw3eHf1p8IIoQcRdfvvef1hrcGfgCGO2KTy'),
(15, 'jdoe@jdoe.com', '$2y$10$ALpVDgq9yeGhs.pgG8QyHu9rMKWUQg5Gc.lwxlmFEahUTFKnEX3lO'),
(16, 'jdoe@jdoe.com', '$2y$10$vaEwtM1USCVA6BY71EqLJeEdufn0bHFSsgv3qR9HxXrt/y/A/cjP.'),
(17, 'nnn@mmm.com', '$2y$10$Y0XUxfEf33K5qMRM8reJgOWrnfhR9dlq1NEF9gM2676TijyeNgQpC'),
(18, 'x@x.dk', '$2y$10$ssmMaargJ2GQtzK4wmLnG.H3rkh7h4gNkjVwHVILFrhiH9J2K0dEu'),
(19, 'jdoe@jdoe.com', '$2y$10$yDWuUS6OiZ3GoASi9KrzpeS6Pjfwxtx836BbAs/2W7hnUFsjuMggq'),
(20, 'svilena_koleva@yahoo.com', '$2y$10$/VJulg0qwv6o5om9nS.EmOb152suXe3DXltG71/BBikxdie5Jmefu');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
