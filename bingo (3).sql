-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2020 at 03:47 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bingo`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_backoffice`
--

CREATE TABLE `admin_backoffice` (
  `id` int(11) NOT NULL,
  `username` varchar(90) NOT NULL,
  `type` varchar(130) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `country` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(30) NOT NULL DEFAULT 'Pending',
  `tx_address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_backoffice`
--

INSERT INTO `admin_backoffice` (`id`, `username`, `type`, `pass`, `country`, `date`, `status`, `tx_address`) VALUES
(1, 'sales_india@gmail.com', 'Sales', 'pass', 'India', '2020-01-28 13:59:10', 'Pending', '0x4e5204c8035f2a014442fcbb382306d93ba511b51460452413e11dc3160ce0be'),
(2, 'admin_sales_alegeria@gmail.com', 'Sales Support', 'pass', 'Algeria', '2020-01-28 14:31:57', 'Approved', '0x829bd824b016326a401d083b33d092293333a830'),
(3, 'operations.afg@bingo.com', 'Operations', 'pass', 'Afghanistan', '2020-01-28 13:59:08', 'Approved', '0x179d320439694ef62357db33e8328d812e1cdb47'),
(4, 'it.australia@bingo.com', 'Information Technology (IT)', 'pass', 'Australia', '2020-01-28 13:59:06', 'Approved', '0x5a21618a9a1171cebf977f62f9d7143910e717d9e984ded5ee37fab2a6276ddf'),
(5, 'rogerver@gmail.com', 'Sales Support', '5e2efa19ad0ce', 'United States', '2020-01-28 13:38:05', 'Approved', '0x21ec7e839ba3616091eb6f421031186b1dd45c81'),
(6, 'operations.afg@bingo.com', 'Operations', 'pass', 'Afghanistan', '2020-01-28 13:59:11', 'Pending', '0x829bd824b016326a401d083b33d092293333a830'),
(7, 'finance.afg@bingo.com', 'Finance / Treasury', '5e2fb26a227d5', 'Afghanistan', '2020-01-28 13:59:09', 'Approved', 'HXQSNN9BWvwOCz2VY5Zo7C4QOf58SMgmJWAK1CuFwDP');

-- --------------------------------------------------------

--
-- Table structure for table `admin_roles`
--

CREATE TABLE `admin_roles` (
  `id` int(11) NOT NULL,
  `admin_role` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_roles`
--

INSERT INTO `admin_roles` (`id`, `admin_role`, `date`) VALUES
(1, 'Sales Support', '2020-01-28 06:45:17'),
(2, 'Sales', '2020-01-28 06:50:08'),
(3, 'Finance / Treasury', '2020-01-28 06:50:14'),
(4, 'Operations', '2020-01-28 06:50:24'),
(5, 'Marketing Analytics', '2020-01-28 06:50:31'),
(6, 'Information Technology (IT)', '2020-01-28 06:50:38');

-- --------------------------------------------------------

--
-- Table structure for table `business_partners`
--

CREATE TABLE `business_partners` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `internal_id` varchar(25) NOT NULL,
  `tax_id` varchar(25) NOT NULL,
  `creation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(20) NOT NULL,
  `business_type` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `kyc_documents` varchar(100) NOT NULL DEFAULT 'No Documents',
  `address` text NOT NULL,
  `contact_info` text NOT NULL,
  `email` varchar(60) NOT NULL,
  `partner_type` varchar(20) NOT NULL,
  `country` varchar(50) NOT NULL DEFAULT 'Domanican Republic',
  `tx_address` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `business_partners`
--

INSERT INTO `business_partners` (`id`, `name`, `internal_id`, `tax_id`, `creation_date`, `status`, `business_type`, `city`, `kyc_documents`, `address`, `contact_info`, `email`, `partner_type`, `country`, `tx_address`) VALUES
(1, 'Wallmarts', '91362', '1234567890', '2020-01-28 03:47:50', 'Pending', 'FMCG', 'Raipur', 'No Documents', 'India', 'House No. C-110, Beside Narmada Dairy, Near Ganesh Mandir, Nagar Nigam Colony, Agrasen Chowk Raipur, Chhattisgarh-492001, India', 'Kishan Sharma ', 'Wholesaler', 'India', '0xac817cfbbdf827cb6a2e172338cabe0d16609d94f47ab749b1a93e4ccbde3938'),
(2, 'ICICI Bank India', '492001', '4532352', '2020-01-28 03:47:54', 'Pending', 'Bank', 'Raipur', 'No Documents', 'India', 'Agrasen Chowk Samta Colony\r\nSamta Colony', 'Agrasen Chowk Samta Colony\r\nSamta Colony', 'FIE', '', '0xbb9bc244d798123fde783fcc1c72d3bb8c189413'),
(3, 'Pepsico Internationals', '91362', '1234567890', '2020-01-28 03:48:17', 'Pending', 'Beverages', 'California', 'No Documents', 'United Arab Emirates', '2891 VENEZIA IN\r\nTHOUSAND OAKS', 'Greater Nioda', 'Wholesaler', '', '0x7f712270b45f052429f974f36f0c04dd470719366459271026d01bdf9acbf27f'),
(4, 'Adidas International', '91362', '1234567890', '2020-01-28 03:48:25', 'Pending', 'Appereal', 'Messachusets', 'No Documents', 'United States', '2891 VENEZIA IN\r\nTHOUSAND OAKS', 'Adidas International', 'Wholesaler', '', '0x71d149141329ed4cb2ec30a572e7496c7f4dff4d'),
(5, 'Subway Internationals', '91362', '342343', '2020-01-28 03:48:49', 'Pending', 'FMCG', 'Munich', 'No Documents', 'Germany', 'Agrasen Chowk Samta Colony\r\nSamta Colony', 'Germany there is', 'Wholesaler', '', '0xbb9bc244d798123fde783fcc1c72d3bb8c189413'),
(6, 'Banco Dominicano del Progreso', '91362', '45636', '2020-01-28 03:48:58', 'Pending', 'Bank', 'Texas', 'No Documents', 'Dominican Republic', 'Av. John F. Kennedy, Santo Domingo 10413, Dominican Republic', 'Av. John F. Kennedy, Santo Domingo 10413, Dominican Republic', 'FIE', '', '0x7f712270b45f052429f974f36f0c04dd470719366459271026d01bdf9acbf27f'),
(7, 'Scotiabank República Dominicana', '91362', '12348777', '2020-01-28 13:28:25', 'Approved', 'Bank', 'Amreli', 'No Documents', 'Dominican Republic', 'Revisa nuestros videos para ayudarle a completar distintas transacciones paso a paso.', 'Revisa nuestros videos para ayudarle a completar distintas t', 'FIE', '', '0xbb9bc244d798123fde783fcc1c72d3bb8c189413'),
(8, 'Red Bull Enterprises', '91362', '452245', '2020-01-28 03:49:25', 'Pending', 'Beverage', 'Munic', 'No Documents', 'American Samoa', '2891 VENEZIA IN\r\nTHOUSAND OAKS', 'Some Demo Information', 'Wholesaler', '', '0x6f2737333ab153682de969af54efb5c5bac308678c6f74c7a64c68f8ec3f8133'),
(9, 'Nike Appereals', '91362', '46456456', '2020-01-28 03:49:33', 'Pending', 'Clothings', 'Delhi', 'No Documents', 'India', 'New Delhi, Meena Bazaar', 'Kishan Sharma is the demo Data', 'Wholesaler', '', '0x71d149141329ed4cb2ec30a572e7496c7f4dff4d'),
(10, 'Puma Internationals', '91362', '46456456', '2020-01-28 13:29:55', 'Approved', 'Clothings', 'Delhi', 'No Documents', 'India', 'New Delhi, Meena Bazaar', 'Kishan Sharma is the demo Data', 'Wholesaler', '', '0xbf4ed7b27f1d666546e30d74d50d173d20bca754'),
(11, 'Freto Lays', '91362', '46456456', '2020-01-28 03:50:01', 'Pending', 'Clothings', 'Delhi', 'No Documents', 'Guam', 'New Delhi, Meena Bazaar', 'Kishan Sharma is the demo Data', 'Wholesaler', '', '0xd3dd15dc982533becd46fab4fdffa5401510d4e980967dabccb0639df4b376be'),
(12, 'Domanica Inc', '91362', '46456456', '2020-01-28 03:50:13', 'Pending', 'Delta', 'Delhi', 'No Documents', 'French Southern Territories', 'New Delhi, Meena Bazaar', 'Kishan Sharma is the demo Data', 'Wholesaler', '', '0x08711d3b02c8758f2fb3ab4e80228418a7f8e39c'),
(13, 'Issue Issuer', '91362', '46456456', '2020-01-28 13:38:57', 'Pending', 'HDD/CAS', 'Delhi', 'No Documents', 'French Southern Territories', 'New Delhi, Meena Bazaar', 'Kishan Sharma is the demo Data', 'Wholesaler', '', '0xd3b02c8758f2fb3ab4e80228418a7f8e39c'),
(14, 'TUSHI SOMOSA', '91362', '452245', '2020-01-28 03:50:43', 'Pending', 'Food', 'Munic', 'No Documents', 'American Samoa', '2891 VENEZIA IN\r\nTHOUSAND OAKS', 'Some Demo Information', 'Wholesaler', '', '0x054656d8d4ab800bab8907cd665904d6148ca1bf19f73557681f4308d8c60a06'),
(15, 'Della Rubic', '91362', '452245', '2020-01-28 03:50:56', 'Pending', 'Shoes', 'Munic', 'No Documents', 'American Samoa', '2891 VENEZIA IN\r\nTHOUSAND OAKS', 'Some Demo Information', 'Wholesaler', '', '0x71d149141329ed4cb2ec30a572e7496c7f4dff4d'),
(16, 'Apple Inc', '91362', '452245', '2020-01-28 03:50:59', 'Pending', 'Computers', 'Munic', 'No Documents', 'American Samoa', '2891 VENEZIA IN\r\nTHOUSAND OAKS', 'Some Demo Information', 'Wholesaler', '', '0x08711d3b02c8758f2fb3ab4e80228418a7f8e39c'),
(17, 'Kolar Gold Fields', '91362', '452245', '2020-01-28 03:51:29', 'Pending', 'Gold/Metals', 'Munic', 'No Documents', 'American Samoa', '2891 VENEZIA IN\r\nTHOUSAND OAKS', 'Some Demo Information', 'Wholesaler', '', '0x5c40eF6f527f4FbA68368774E6130cE6515123f2'),
(18, 'KITe inc', '91362', '1234567890', '2020-01-28 03:51:45', 'Approved', 'Catpops Technobiz', 'Raipur', 'No Documents', 'India', 'Agrasen Chowk Samta Colony\r\nSamta Colony', 'nvcgfbhdgf', 'Wholesaler', 'Domanican Republic', '0x62c2F07E7cbf92e5A577940332968c47641D0CE6'),
(19, 'Cardinal Goods', 'j820i210i', '0928301203', '2020-01-28 03:51:47', 'Pending', 'FMCG', 'New York', 'No Documents', 'United States', '55 E, Queens, New York, USA 82739', '+1 650 398 6909', 'Wholesaler', 'Domanican Republic', '0x353a972cd1a250dbc351405779b5230e8ce4b268'),
(20, 'Dellos Internationals', '91362', '1454564564', '2020-01-28 13:38:58', 'Approved', 'Beverages', 'Raipur ', 'No Documents', 'Afghanistan', 'Antonio International', 'Antonio International', 'Wholesaler', 'Domanican Republic', '0xfdsnpyYPex9Nur9uzpUMC8XjzdyVZh6YJnoTre5IjGT'),
(21, 'Dominos Pizza', '91362', '1454564564', '2020-01-28 13:38:55', 'Pending', 'Beverages', 'Raipur ', 'No Documents', 'Afghanistan', 'Antonio International', 'Antonio International', 'Wholesaler', 'Domanican Republic', '0x3p8TAZ4gNm31T6Z4tNfXxFy9Wb1JrlfAr0ETJ1iPcH4'),
(22, 'Santoshi Enterprises', '546543645', '67856785', '2020-01-28 14:37:07', 'Approved', 'fdgdfgdf', 'gfdgdfgd', 'No Documents', 'Afghanistan', 'dfgdfg', 'dfsgfdgdfgfd', 'Wholesaler', 'Domanican Republic', '0xzBg6AXNsq6PK5c5kTwQDzookxJMo3n38FrnEofDESFY');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` int(11) NOT NULL,
  `country` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Approved',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `country`, `status`, `date`) VALUES
(1, 'Afghanistan', 'Approved', '2020-01-28 13:52:21'),
(2, 'Albania', 'Approved', '2020-01-28 13:52:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_backoffice`
--
ALTER TABLE `admin_backoffice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_roles`
--
ALTER TABLE `admin_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `business_partners`
--
ALTER TABLE `business_partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_backoffice`
--
ALTER TABLE `admin_backoffice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `admin_roles`
--
ALTER TABLE `admin_roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `business_partners`
--
ALTER TABLE `business_partners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
