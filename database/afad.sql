-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 29, 2019 at 07:35 PM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `afad`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `idpengguna` varchar(20) NOT NULL,
  `katalaluan` varchar(20) NOT NULL,
  PRIMARY KEY (`idpengguna`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `aroma`
--

CREATE TABLE IF NOT EXISTS `aroma` (
  `idaroma` int(11) NOT NULL AUTO_INCREMENT,
  `aroma` varchar(100) NOT NULL,
  PRIMARY KEY (`idaroma`),
  UNIQUE KEY `aroma` (`aroma`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

-- --------------------------------------------------------

--
-- Table structure for table `belian`
--

CREATE TABLE IF NOT EXISTS `belian` (
  `idbelian` int(11) NOT NULL AUTO_INCREMENT,
  `pelanggan` int(11) NOT NULL,
  `tarikhbeli` date NOT NULL,
  `status` varchar(100) DEFAULT NULL,
  `trackingnumber` varchar(100) DEFAULT NULL,
  `resit` mediumblob,
  PRIMARY KEY (`idbelian`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=97 ;

-- --------------------------------------------------------

--
-- Table structure for table `detailbelian`
--

CREATE TABLE IF NOT EXISTS `detailbelian` (
  `iddetailbelian` int(11) NOT NULL AUTO_INCREMENT,
  `belian` int(11) NOT NULL,
  `produk` int(11) NOT NULL,
  `kuantiti` int(11) NOT NULL,
  PRIMARY KEY (`iddetailbelian`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=241 ;

-- --------------------------------------------------------

--
-- Table structure for table `harga`
--

CREATE TABLE IF NOT EXISTS `harga` (
  `idharga` int(11) NOT NULL AUTO_INCREMENT,
  `pelanggan30ml` decimal(10,2) NOT NULL,
  `pelanggan5ml` decimal(10,2) NOT NULL,
  `dropship30ml` decimal(10,2) NOT NULL,
  `dropship5ml` decimal(10,2) NOT NULL,
  `stokis30ml` decimal(10,2) NOT NULL,
  `stokis5ml` decimal(10,2) NOT NULL,
  PRIMARY KEY (`idharga`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `iklan`
--

CREATE TABLE IF NOT EXISTS `iklan` (
  `idiklan` int(11) NOT NULL AUTO_INCREMENT,
  `gambar1` mediumblob NOT NULL,
  `gambar2` mediumblob NOT NULL,
  `gambar3` mediumblob NOT NULL,
  `gambar4` mediumblob NOT NULL,
  `gambar5` mediumblob NOT NULL,
  PRIMARY KEY (`idiklan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Table structure for table `kospenghantaran`
--

CREATE TABLE IF NOT EXISTS `kospenghantaran` (
  `idkospenghantaran` int(11) NOT NULL AUTO_INCREMENT,
  `negeri` varchar(100) NOT NULL,
  `cas` decimal(10,2) NOT NULL,
  PRIMARY KEY (`idkospenghantaran`),
  UNIQUE KEY `negeri` (`negeri`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

-- --------------------------------------------------------

--
-- Table structure for table `pakej`
--

CREATE TABLE IF NOT EXISTS `pakej` (
  `idpakej` int(11) NOT NULL AUTO_INCREMENT,
  `harga` decimal(10,0) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `gambar` mediumblob NOT NULL,
  PRIMARY KEY (`idpakej`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

-- --------------------------------------------------------

--
-- Table structure for table `pekerja`
--

CREATE TABLE IF NOT EXISTS `pekerja` (
  `idpekerja` int(5) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `nokp` varchar(12) NOT NULL,
  `katalaluan` varchar(100) NOT NULL,
  `jawatan` varchar(50) NOT NULL,
  PRIMARY KEY (`idpekerja`),
  UNIQUE KEY `nokp` (`nokp`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE IF NOT EXISTS `pelanggan` (
  `idpelanggan` int(11) NOT NULL AUTO_INCREMENT,
  `idpengguna` varchar(50) NOT NULL,
  `katalaluan` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nokp` varchar(12) NOT NULL,
  `emel` varchar(100) NOT NULL,
  `notelefon` varchar(12) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `bandar` varchar(100) NOT NULL,
  `negeri` varchar(100) NOT NULL,
  `poskod` varchar(50) NOT NULL,
  `jantina` varchar(40) NOT NULL,
  `level` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `pakej` varchar(100) DEFAULT NULL,
  `resit` mediumblob,
  PRIMARY KEY (`idpelanggan`),
  UNIQUE KEY `idpengguna` (`idpengguna`),
  UNIQUE KEY `nokp` (`nokp`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE IF NOT EXISTS `produk` (
  `idproduk` int(11) NOT NULL AUTO_INCREMENT,
  `namaproduk` varchar(150) NOT NULL,
  `isipadu` varchar(50) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `gambar` mediumblob NOT NULL,
  `stokpelanggan` varchar(100) NOT NULL,
  `stokdropship` varchar(100) NOT NULL,
  `stokstokis` varchar(100) NOT NULL,
  `aroma1` varchar(50) NOT NULL,
  `aroma2` varchar(50) NOT NULL,
  `aroma3` varchar(50) NOT NULL,
  `aroma4` varchar(50) NOT NULL,
  `aroma5` varchar(50) NOT NULL,
  `aroma6` varchar(50) NOT NULL,
  PRIMARY KEY (`idproduk`),
  UNIQUE KEY `namaproduk` (`namaproduk`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=56 ;

-- --------------------------------------------------------

--
-- Table structure for table `stok`
--

CREATE TABLE IF NOT EXISTS `stok` (
  `idstok` int(11) NOT NULL AUTO_INCREMENT,
  `tarikhmasuk` date NOT NULL,
  PRIMARY KEY (`idstok`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
