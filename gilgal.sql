-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 14, 1999 at 09:48 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gilgal`
--

-- --------------------------------------------------------

--
-- Table structure for table `addinfo`
--

CREATE TABLE IF NOT EXISTS `addinfo` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `pid` int(20) NOT NULL,
  `table` varchar(100) NOT NULL,
  `qty` int(10) NOT NULL,
  `date` varchar(100) NOT NULL,
  `who` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `addinfo`
--

INSERT INTO `addinfo` (`id`, `pid`, `table`, `qty`, `date`, `who`) VALUES
(1, 7, 'edmark', 9, '14-01/2012', 'caleb bankole');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `pid` int(20) NOT NULL AUTO_INCREMENT,
  `product` varchar(300) NOT NULL,
  `quantity` int(10) NOT NULL,
  `product_code` varchar(50) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`pid`, `product`, `quantity`, `product_code`) VALUES
(1, 'TERMITE IN THE PRESIDENTIAL PALACE', 0, 'NNOVTF3KH'),
(2, 'HALLELUYAH BOOK', 0, 'D36JV6UNA'),
(3, 'CURE YOUR FAMILY', 0, '0FHZ376XM');

-- --------------------------------------------------------

--
-- Table structure for table `drclark`
--

CREATE TABLE IF NOT EXISTS `drclark` (
  `pid` int(20) NOT NULL AUTO_INCREMENT,
  `product` varchar(300) NOT NULL,
  `quantity` int(10) NOT NULL,
  `product_code` varchar(50) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `drclark`
--

INSERT INTO `drclark` (`pid`, `product`, `quantity`, `product_code`) VALUES
(1, 'MAGNESSIUM  BIG', 0, 'VTVQDEM'),
(2, 'UVA URSI', 0, 'K6UHE1B'),
(3, 'ORNITHINE', 0, '3DHUB57MJ'),
(4, 'ARGININE', 0, 'ONXQX5R3'),
(5, 'GINGER ROOT', 0, 'ZDISRJILR'),
(6, 'CLOVES ', 0, 'IJLS5QR'),
(7, 'SUPER W BLEND', 0, 'SEIBR64FK'),
(8, 'CASCARA SAGRADA', 0, 'UVAKAASZH'),
(9, 'NIACINAMIDE', 0, 'KQM54XKZK'),
(10, 'PARSLEY', 0, 'ABD7WNCYA'),
(11, 'AIRWAYS RESPIRATORY DEFENSE', 0, 'HHOU8KL82'),
(12, 'DIGESTIVE ENZYMES', 0, 'RS8J5L0HQ'),
(13, 'CHROMIUM', 0, 'FU5E8QTM'),
(14, 'BETAINE HCL', 0, 'C3F2M9J'),
(15, 'FENNEL SEED', 0, 'ISW39F14I'),
(16, 'BILBERRY', 0, '4TF12PT'),
(17, 'VEGETABLE GLYCERINE', 0, 'CSMV3R1K1'),
(18, 'BLACK CHERRY CONC', 0, 'MDI8OQYJ'),
(19, 'BE ACTIVE BALM', 0, 'J3DOVO7NN'),
(20, 'GOLDENROD', 0, 'CMJV2FMUM'),
(21, 'ORENGNO TOOTHPOWDER', 0, '4PBEO9R'),
(22, 'THORNE', 0, 'QD41OVBQ9'),
(23, 'BLACK WALNUT 4FL.OZ', 0, 'A0N46U7T'),
(24, 'BLACK WALNUT 2FL.OZ', 0, 'GKAT1CO4S'),
(25, 'VITAMIN D3', 0, 'R0KWWQVX6'),
(26, 'CERAMIC AERATOR', 0, '86C2UBROV'),
(27, 'LIVER SUPPORT TEA', 0, 'RUUI0B3K3'),
(28, 'VEGGIE WASH SANITIZER', 0, 'YJQ7LRG6F'),
(29, 'HYDROCHLORIC ACID', 0, 'IZIHIDC3Y'),
(30, 'VH C POWDER', 0, 'IFZ67SWY'),
(31, 'VH B2', 0, 'W9K9EF2VS'),
(32, 'ESSIAK TEA', 0, '8Q88LY84'),
(33, 'CINAMON POWDER', 0, 'ZIRXJ3S'),
(34, 'HYDRONGEA MARSHMALLOW & GRAVEL ROOT', 0, 'LPNUAUJF');

-- --------------------------------------------------------

--
-- Table structure for table `edmark`
--

CREATE TABLE IF NOT EXISTS `edmark` (
  `pid` int(20) NOT NULL AUTO_INCREMENT,
  `product` varchar(300) NOT NULL,
  `quantity` int(10) NOT NULL,
  `product_code` varchar(50) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `edmark`
--

INSERT INTO `edmark` (`pid`, `product`, `quantity`, `product_code`) VALUES
(1, 'M R T', 0, '2SMQILIXR'),
(2, 'SHAKE OFF', 0, '8A039XRJW'),
(3, 'SPLINA', 0, 'IZ13L71N9'),
(4, 'RED YEAST COFFEE', 0, '9SJQBQZKQ'),
(5, 'BUBBLE C', 0, 'XGXVX7JZY'),
(6, 'GENSENG COFFEE', 0, 'EZPFM6GDU'),
(7, 'BEAUTY PACK', 0, '39HBI29WO'),
(8, 'SLIM SWEET', 0, 'Q89U1QUE3'),
(9, 'SHAKER CUP', 0, 'P0S0JA4UT');

-- --------------------------------------------------------

--
-- Table structure for table `general`
--

CREATE TABLE IF NOT EXISTS `general` (
  `pid` int(20) NOT NULL AUTO_INCREMENT,
  `product` varchar(300) NOT NULL,
  `quantity` int(10) NOT NULL,
  `product_code` varchar(50) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `general`
--

INSERT INTO `general` (`pid`, `product`, `quantity`, `product_code`) VALUES
(1, 'S.A WILSONS FINE GRIND COFFEE (BIG)', 0, 'O16DX0LFH'),
(2, 'S.A WILSONS FINE GRIND COFFEE (SMALL)', 0, 'AX0805KQ5'),
(3, 'EPSOM SALT', 0, '8ZIZY3XSO'),
(4, 'ENEMA BAG', 0, 'QCEFYGNQG'),
(5, 'FLAX SEED [ORGANIC]', 0, 'VDAEPMW05'),
(6, 'CLAY', 0, 'K6CW9I0Q0'),
(7, 'CHACOAL', 0, 'F37266ZV'),
(8, 'AGNUS CASTUS [PMS RELIEF]', 0, 'C0VAJBKV7'),
(9, 'KELP [TIED]', 0, '24IPOM4W'),
(10, 'KLEEN WISE', 0, '6GK8684Q'),
(11, 'MUSHROOM', 0, '4QEZOOJYF'),
(12, 'COUSCOUS', 0, 'OVQ5TWD0Y'),
(13, 'ENGEVITA', 0, 'H7CHYZPY2'),
(14, 'PEPPER MINT', 0, '4SF5DK95V'),
(15, 'GREEN CLAY', 0, '6I63T3QZ1'),
(16, 'WHOLE BAY LEAVE', 0, 'DFHVXG43E'),
(17, 'SUN FLOWER SEED', 0, 'VYI3SZXV5'),
(18, 'PUMPKIN SEED', 0, 'WPH9TWB'),
(19, 'DILL SEEDS', 0, 'EQHGQBN20'),
(20, 'CINNAMON STICKS', 0, '09L4IHLFS'),
(21, 'RAISIN [BIG]', 0, '70ROXMKG'),
(22, 'WALNUT', 0, 'X5MYIU0MV'),
(23, 'ALMON SEED', 0, '5GV1ND2NH'),
(24, 'MEASURING SPOON', 0, 'WINZPR37M'),
(25, 'RAISIN [SMALL]', 0, 'F9NR3SL1X'),
(26, 'OREGANO', 0, 'RABR7Z2BI'),
(27, 'PARSLEY', 0, 'DCKCZU8FZ'),
(28, 'CELERY SEED', 0, 'KQ4D2F2BK'),
(29, 'CHILI POWDER', 0, '0KZ3JFZ1'),
(30, 'GROUND SAIGON SINNAMON', 0, 'F55CI9HXW'),
(31, 'CHOPPED ONIONS', 0, 'D5EAMFRRU'),
(32, 'EXTRA VIRGIN OLIVE OIL', 0, '22A5R9NT'),
(33, 'HIMALAYAN CRYSTAL BATH SALI', 0, '1FUTXHIFD'),
(34, 'QUAKER OAT', 0, '47LMXAKS2');

-- --------------------------------------------------------

--
-- Table structure for table `halleluyah`
--

CREATE TABLE IF NOT EXISTS `halleluyah` (
  `pid` int(20) NOT NULL AUTO_INCREMENT,
  `product` varchar(300) NOT NULL,
  `quantity` int(10) NOT NULL,
  `product_code` varchar(50) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `halleluyah`
--

INSERT INTO `halleluyah` (`pid`, `product`, `quantity`, `product_code`) VALUES
(1, 'DIGESTIVE ENZYME', 0, 'EASG3V90D'),
(2, 'VIT B6 B12', 0, '88PJIMSS'),
(3, 'CARROT JUICE MAX', 0, '4RHB0NDM3'),
(4, 'CARROT CAPSULE', 0, 'YRNF462O'),
(5, 'BEET MAX', 0, 'U5UGHHN1Y'),
(6, 'BARLEY MAX', 0, 'XVW5W7YXR'),
(7, 'FIBER CLEANCE', 0, 'STS9TG4T'),
(8, 'FIBER CLEANCE LEMON', 0, 'ECIXSHB5B'),
(9, 'WATER MAX', 0, 'R4ZR5KJ72'),
(10, 'CELTIC SEA SALT', 0, 'GOTHZJCZ'),
(11, 'FIBER CLEANCE [TIED]', 0, 'E91SGFS5P'),
(12, 'B-FLAX D', 0, '79ZLI1S58'),
(13, 'HALLELUYA CUP', 0, 'U80PQQUJT');

-- --------------------------------------------------------

--
-- Table structure for table `lodge_guest`
--

CREATE TABLE IF NOT EXISTS `lodge_guest` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(90) NOT NULL,
  `address` varchar(100) NOT NULL,
  `age` int(10) NOT NULL,
  `religion` varchar(50) NOT NULL,
  `condition` varchar(90) NOT NULL,
  `marital` varchar(100) NOT NULL,
  `spouse` varchar(100) NOT NULL,
  `spouse no` text NOT NULL,
  `garantor` varchar(100) NOT NULL,
  `day_spent` int(50) NOT NULL,
  `drugsb4` varchar(100) NOT NULL,
  `chemo` varchar(100) NOT NULL,
  `chemo_howmany` int(50) NOT NULL,
  `radiation` varchar(100) NOT NULL,
  `radiation_howmany` int(50) NOT NULL,
  `surgery` varchar(100) NOT NULL,
  `surgery_howmany` int(50) NOT NULL,
  `datereg` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `lodge_guest`
--


-- --------------------------------------------------------

--
-- Table structure for table `ng4l`
--

CREATE TABLE IF NOT EXISTS `ng4l` (
  `pid` int(20) NOT NULL AUTO_INCREMENT,
  `product` varchar(300) NOT NULL,
  `quantity` int(10) NOT NULL,
  `product_code` varchar(50) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=49 ;

--
-- Dumping data for table `ng4l`
--

INSERT INTO `ng4l` (`pid`, `product`, `quantity`, `product_code`) VALUES
(1, 'NS FIBRIN', 0, '1VSDYVNO'),
(2, 'OMEGA 3 EPA', 0, 'RTSZIHHNA'),
(3, 'ARTHRITIS J. FORMULAR', 0, '24ME6XXC2'),
(4, 'BEE POLLEN', 0, 'C8VW98A79'),
(5, 'MILK THISTLE', 0, 'WXULFPPLZ'),
(6, 'ODOORLESS GARLIC', 0, 'J4IE0FT7K'),
(7, 'MANGOSTEEN CAP', 0, '0Y1ARBRZ'),
(8, 'CHITOSAN PLUS', 0, '96PL19OGM'),
(9, 'ORGANIC FLAX SEED OIL', 0, 'I7QOZLHQE'),
(10, 'EVENING PRIMROSE', 0, 'EDFQM1R8J'),
(11, 'ALOE VERA CAP', 0, 'XGG3D36LF'),
(12, 'FIBRO CLEAR', 0, 'Q4QKLN9XB'),
(13, 'VITAMINE E', 0, 'FUE50WTS'),
(14, 'SELENIUM', 0, 'T1VLPXXDS'),
(15, 'VALERIAN PASSION', 0, '60DBY8L4'),
(16, 'DIABETES AND SYNDROME', 0, '8HB3UIMUZ'),
(17, 'NATURAL I FORCE PLUS', 0, '8RNKC1N7M'),
(18, 'GOJI JUICE', 0, '7XBCVZZH'),
(19, 'MANGOS TEEN JUICE', 0, 'HEI1HA1VY'),
(20, 'SUPPER ROYAL JELLY', 0, 'L0JZEKV1G'),
(21, 'BROMELA IN', 0, '5NBTBELC7'),
(22, 'MALE SPERM', 0, 'PKPVF4RPR'),
(23, 'SLIM AND BEATIFUL', 0, 'HJ0947KKT'),
(24, 'VITAL YEW', 0, 'S90VI0LQ'),
(25, 'BALANCED B', 0, 'JLE3LQWT1'),
(26, 'CO ENZYME Q-10', 0, '3N21V39PL'),
(27, 'VISSION SAVER', 0, 'ACTZYDFI'),
(28, 'HOODIAWITH GREEN TEA', 0, 'PYCJBXJFV'),
(29, 'TRUE FOOD C [SMALL]', 0, 'OZUC6NVQV'),
(30, 'TRUE FOOD C [BIG]', 0, 'AX8A6BYZL'),
(31, 'GRAPE SEED', 0, 'S9613S2'),
(32, 'GOJI BERRY CAP', 0, 'HRLHLK27'),
(33, 'ULTRAL MAN', 0, 'IW2FRYO'),
(34, 'ULTRAL WOMAN', 0, 'XZ29MWA8'),
(35, 'PROSTAL PLUS X', 0, 'X0XZ6X3BF'),
(36, 'HERIGUM ERINACEUS', 0, 'VDHS1IZ5G'),
(37, 'IONIC COLLOIDAL SILVER', 0, '7D2MUUBE'),
(38, 'NONI CAP', 0, '60X3DKNLM'),
(39, 'PROTEGE ENFANT', 0, 'BC96I7JW'),
(40, 'KOREAN GINSENG', 0, 'ZACMB5WNQ'),
(41, 'RED YEAST', 0, 'S5ZJJ0HMQ'),
(42, 'LECITHIN', 0, 'L8NTHLDWV'),
(43, 'AGARICUS B MURILL', 0, 'TCIY7DTA'),
(44, 'ECHINACEA', 0, 'FFPCNA5RP'),
(45, 'REISHI-GANODERMA', 0, 'C5KOMZX1'),
(46, 'ACIDOPHILUS', 0, 'Z9F7EPWF'),
(47, 'CORDYCEPS', 0, '13S1006JL'),
(48, 'ANTI-DIABETEES TEA', 0, 'HWMUDV68K');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(90) NOT NULL,
  `address` varchar(100) NOT NULL,
  `pnum` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `age` int(10) NOT NULL,
  `religion` varchar(50) NOT NULL,
  `condition` varchar(90) NOT NULL,
  `previous` varchar(100) NOT NULL,
  `how` varchar(100) NOT NULL,
  `why` varchar(100) NOT NULL,
  `date` varchar(30) NOT NULL,
  `reg_no` text NOT NULL,
  `remark` varchar(70) NOT NULL,
  `present` varchar(90) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `registration`
--


-- --------------------------------------------------------

--
-- Table structure for table `removeinfo`
--

CREATE TABLE IF NOT EXISTS `removeinfo` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `pid` int(20) NOT NULL,
  `table` varchar(100) NOT NULL,
  `qty` int(10) NOT NULL,
  `date` varchar(100) NOT NULL,
  `who` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `removeinfo`
--

INSERT INTO `removeinfo` (`id`, `pid`, `table`, `qty`, `date`, `who`) VALUES
(1, 7, 'edmark', 9, '14-01/2012', 'Joy Olojo Seun');
