-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 08, 2019 at 05:08 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `website`
--

-- --------------------------------------------------------

--
-- Table structure for table `code`
--

CREATE TABLE `code` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `num` int(11) DEFAULT NULL,
  `code` varchar(45) DEFAULT NULL,
  `codebro` varchar(45) DEFAULT NULL,
  `dat` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `code`
--

INSERT INTO `code` (`id`, `name`, `mail`, `num`, `code`, `codebro`, `dat`) VALUES
(9, 'hello', 'hello@gmail.com', 1234567890, '123', '123', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `conformtablenow`
--

CREATE TABLE `conformtablenow` (
  `idconformtablenow` int(11) NOT NULL,
  `iduser` int(11) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `mail` varchar(45) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `finalamount` int(11) DEFAULT NULL,
  `paidamount` int(11) DEFAULT NULL,
  `refrenceno` varchar(45) DEFAULT NULL,
  `payingdate` date DEFAULT NULL,
  `chequenumber` int(11) DEFAULT NULL,
  `bankname` varchar(45) DEFAULT NULL,
  `descriptionpaying` varchar(45) DEFAULT NULL,
  `paymentmethod` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `confromchecknow`
--

CREATE TABLE `confromchecknow` (
  `id` int(11) NOT NULL,
  `iduser` varchar(45) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `phoneno` varchar(45) DEFAULT NULL,
  `finalv` varchar(45) DEFAULT NULL,
  `installementno` varchar(45) DEFAULT NULL,
  `dat` varchar(45) DEFAULT NULL,
  `amount` varchar(45) DEFAULT NULL,
  `des` varchar(45) DEFAULT NULL,
  `dueinstall` int(11) DEFAULT NULL,
  `mainint` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `confromoder`
--

CREATE TABLE `confromoder` (
  `idconfromoder` int(11) NOT NULL,
  `iduser` int(11) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `finalamount` int(11) DEFAULT NULL,
  `balance` int(11) DEFAULT NULL,
  `amountnow` int(11) DEFAULT NULL,
  `refrenceno` int(11) DEFAULT NULL,
  `paymenttype` varchar(45) DEFAULT NULL,
  `date` varchar(45) DEFAULT NULL,
  `cheque` int(11) DEFAULT NULL,
  `bankname` varchar(45) DEFAULT NULL,
  `des` varchar(45) DEFAULT NULL,
  `installment` int(11) DEFAULT NULL,
  `newdate` varchar(45) NOT NULL,
  `phonenum` int(11) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `customerregister`
--

CREATE TABLE `customerregister` (
  `cid` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `mobileno` varchar(45) DEFAULT NULL,
  `pwd` varchar(45) DEFAULT NULL,
  `confirmpassword` varchar(45) DEFAULT NULL,
  `message` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `desginerwork`
--

CREATE TABLE `desginerwork` (
  `iddesginerwork` int(11) NOT NULL,
  `iduser` int(11) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `work` varchar(45) DEFAULT NULL,
  `finalval` int(11) DEFAULT NULL,
  `data` varchar(45) DEFAULT NULL,
  `desginerworkcol` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `dueform`
--

CREATE TABLE `dueform` (
  `id` int(11) NOT NULL,
  `iduser` int(11) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `mail` varchar(45) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `finalamount` int(11) DEFAULT NULL,
  `dat` varchar(45) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `newdata` varchar(45) DEFAULT NULL,
  `newcomment` varchar(45) DEFAULT NULL,
  `intnum` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `empinvoice`
--

CREATE TABLE `empinvoice` (
  `slno` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `mobileno` varchar(45) DEFAULT NULL,
  `invoiceamount` varchar(45) DEFAULT NULL,
  `paidamt` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `referenceno` int(11) DEFAULT NULL,
  `balance` int(11) DEFAULT NULL,
  `2` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `username` varchar(50) NOT NULL,
  `password` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `mobile` varchar(45) DEFAULT NULL,
  `employeeid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `enquiries`
--

CREATE TABLE `enquiries` (
  `enquid` int(11) NOT NULL,
  `designtype` varchar(50) DEFAULT NULL,
  `custname` varchar(50) DEFAULT NULL,
  `custemail` varchar(60) DEFAULT NULL,
  `custmob` varchar(45) DEFAULT NULL,
  `custmessage` varchar(250) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `enquirylist`
--

CREATE TABLE `enquirylist` (
  `idenquirylist` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `mail` varchar(45) DEFAULT NULL,
  `dat` varchar(45) DEFAULT NULL,
  `comment` varchar(1000) DEFAULT NULL,
  `pname` varchar(45) DEFAULT NULL,
  `distance` varchar(45) DEFAULT NULL,
  `optradio` varchar(45) DEFAULT NULL,
  `design` varchar(45) DEFAULT NULL,
  `villa` varchar(45) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `aphone` varchar(45) DEFAULT NULL,
  `fdat` varchar(45) DEFAULT NULL,
  `delivery` varchar(45) DEFAULT NULL,
  `site` varchar(45) DEFAULT NULL,
  `img` varchar(45) DEFAULT NULL,
  `plots` varchar(45) DEFAULT NULL,
  `hdate` varchar(45) DEFAULT NULL,
  `scope` varchar(1000) DEFAULT NULL,
  `flooring` varchar(1000) DEFAULT NULL,
  `loose` varchar(1000) DEFAULT NULL,
  `metal` varchar(1000) DEFAULT NULL,
  `Kitchen` varchar(1000) DEFAULT NULL,
  `Bathroomfittings` varchar(1000) DEFAULT NULL,
  `Wardrobes` varchar(1000) DEFAULT NULL,
  `FloorMats` varchar(1000) DEFAULT NULL,
  `woodwork` varchar(1000) DEFAULT NULL,
  `pop` varchar(1000) DEFAULT NULL,
  `curtains` varchar(1000) DEFAULT NULL,
  `Lightings` varchar(1000) DEFAULT NULL,
  `electrical` varchar(1000) DEFAULT NULL,
  `requirements` varchar(1000) DEFAULT NULL,
  `category` varchar(1000) DEFAULT NULL,
  `addrequirment` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `enquiryone`
--

CREATE TABLE `enquiryone` (
  `idenquirylist` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `mail` varchar(45) DEFAULT NULL,
  `dat` date DEFAULT NULL,
  `comment` varchar(45) DEFAULT NULL,
  `pname` varchar(45) DEFAULT NULL,
  `distance` int(11) DEFAULT NULL,
  `optradio` varchar(45) DEFAULT NULL,
  `design` varchar(45) DEFAULT NULL,
  `villa` varchar(45) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `aphone` varchar(255) DEFAULT NULL,
  `fdat` date DEFAULT NULL,
  `delivery` date DEFAULT NULL,
  `site` varchar(45) DEFAULT NULL,
  `img` varchar(100) DEFAULT NULL,
  `plots` varchar(45) DEFAULT NULL,
  `hdate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `enquirytwo`
--

CREATE TABLE `enquirytwo` (
  `idenquirytwo` int(11) NOT NULL,
  `iduser` int(11) DEFAULT NULL,
  `scope` varchar(45) DEFAULT NULL,
  `flooring` varchar(45) DEFAULT NULL,
  `loose` varchar(45) DEFAULT NULL,
  `metal` varchar(45) DEFAULT NULL,
  `material` varchar(45) DEFAULT NULL,
  `quantity` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `enquirytwo`
--

INSERT INTO `enquirytwo` (`idenquirytwo`, `iduser`, `scope`, `flooring`, `loose`, `metal`, `material`, `quantity`) VALUES
(1, 5, '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE `file` (
  `id` int(11) NOT NULL,
  `file_name` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fileupload`
--

CREATE TABLE `fileupload` (
  `id` int(11) NOT NULL,
  `IMGTITLE` varchar(45) DEFAULT NULL,
  `IMGDESC` varchar(45) DEFAULT NULL,
  `IMGPATH` varchar(45) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `followupform`
--

CREATE TABLE `followupform` (
  `idfollowupform` int(11) NOT NULL,
  `iduser` int(11) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `mail` varchar(45) DEFAULT NULL,
  `sendquatation` varchar(45) DEFAULT NULL,
  `newdata` varchar(45) DEFAULT NULL,
  `newcomment` varchar(45) DEFAULT NULL,
  `comment` varchar(45) DEFAULT NULL,
  `dat` date DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `followupform`
--

INSERT INTO `followupform` (`idfollowupform`, `iduser`, `name`, `mail`, `sendquatation`, `newdata`, `newcomment`, `comment`, `dat`, `phone`) VALUES
(2, 2, ' test', 'test1@gmail.com', '', '', 'ssssssss', 'weeeeee', '2018-11-11', '8979879879');

-- --------------------------------------------------------

--
-- Table structure for table `fruits`
--

CREATE TABLE `fruits` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `getdata`
--

CREATE TABLE `getdata` (
  `id` int(11) NOT NULL,
  `nam` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `imageslider`
--

CREATE TABLE `imageslider` (
  `imgid` int(11) NOT NULL,
  `IMGDESC` varchar(255) DEFAULT NULL,
  `IMGPATH` varchar(255) DEFAULT NULL,
  `IMGTITLE` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `imageslider`
--

INSERT INTO `imageslider` (`imgid`, `IMGDESC`, `IMGPATH`, `IMGTITLE`) VALUES
(29, ' \r\nLiving & Resting', 'img_uploads/wide2.jpg', 'Hall'),
(36, ' \r\n', 'img_uploads/10.jpg', ''),
(38, ' \r\n', 'img_uploads/jyo1.jpg', 'RE'),
(39, ' \r\nreeee', 'img_uploads/jyo11.jpg', 'REY'),
(40, ' \r\n', 'img_uploads/6.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `materialcreate`
--

CREATE TABLE `materialcreate` (
  `idmt` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `num` int(11) DEFAULT NULL,
  `vname` varchar(45) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `mail` varchar(45) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `unit` varchar(45) DEFAULT NULL,
  `des` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `materialrecived`
--

CREATE TABLE `materialrecived` (
  `idmaterialrecived` int(11) NOT NULL,
  `iduser` int(11) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `mail` varchar(45) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `material` varchar(45) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `comment` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `materialrequired`
--

CREATE TABLE `materialrequired` (
  `idnew_table` int(11) NOT NULL,
  `iduser` int(11) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `mail` varchar(45) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `sno` int(11) DEFAULT NULL,
  `material` varchar(255) DEFAULT NULL,
  `Quantity` int(11) DEFAULT NULL,
  `date` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ourprocess`
--

CREATE TABLE `ourprocess` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `Description` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `payduecol`
--

CREATE TABLE `payduecol` (
  `idpayduecol` int(11) NOT NULL,
  `iduser` int(11) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `mail` varchar(45) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `finalamount` int(11) DEFAULT NULL,
  `paidamount` int(11) DEFAULT NULL,
  `refrenceno` int(11) DEFAULT NULL,
  `payingdate` varchar(45) DEFAULT NULL,
  `chequenumber` int(11) DEFAULT NULL,
  `bankname` varchar(45) DEFAULT NULL,
  `descriptionpaying` varchar(45) DEFAULT NULL,
  `paymentmethod` varchar(45) DEFAULT NULL,
  `dueamount` int(11) DEFAULT NULL,
  `intnum` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `payduecol`
--

INSERT INTO `payduecol` (`idpayduecol`, `iduser`, `name`, `mail`, `phone`, `finalamount`, `paidamount`, `refrenceno`, `payingdate`, `chequenumber`, `bankname`, `descriptionpaying`, `paymentmethod`, `dueamount`, `intnum`) VALUES
(3, 2, ' test', 'test1@gmail.com', '8979879879', 1000, 100, 211, '2018-11-10', 233, 'swq', 'cdsd', 'Cash', 400, 1);

-- --------------------------------------------------------

--
-- Table structure for table `po`
--

CREATE TABLE `po` (
  `id` int(11) NOT NULL,
  `Material` varchar(255) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Price` int(11) NOT NULL,
  `Tax` int(11) NOT NULL,
  `Vendor` varchar(255) NOT NULL,
  `Payment` varchar(11) NOT NULL,
  `Reason` varchar(255) NOT NULL,
  `Date` varchar(45) NOT NULL,
  `Comments` varchar(255) NOT NULL,
  `Changed` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `procurement`
--

CREATE TABLE `procurement` (
  `id` int(11) NOT NULL,
  `material` varchar(255) NOT NULL,
  `total` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `releas` int(11) NOT NULL,
  `date` varchar(45) NOT NULL,
  `balance` int(11) NOT NULL,
  `iduser` varchar(45) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `mail` varchar(45) DEFAULT NULL,
  `num` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `idproject` int(11) NOT NULL,
  `IMGDESC` varchar(250) DEFAULT NULL,
  `IMGPATH` varchar(255) DEFAULT NULL,
  `IMGTITLE` varchar(255) DEFAULT NULL,
  `PRJTYPE` varchar(45) DEFAULT NULL,
  `ITEMTYPE` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`idproject`, `IMGDESC`, `IMGPATH`, `IMGTITLE`, `PRJTYPE`, `ITEMTYPE`) VALUES
(4, '\r\n main entrance at the front of home', 'img_uploads/21.jpg', 'living place', 'OP', 'living-room'),
(5, ' kitchen\r\n', 'img_uploads/22.jpg', 'kitchen room', 'OP', 'kitchen-room'),
(6, ' \r\ndining room', 'img_uploads/23.jpg', 'dining room', 'OP', 'dining-room'),
(7, ' \r\nliving place', 'img_uploads/9.jpg', 'living place', 'FP', 'living-room'),
(8, ' \r\nkitchen room', 'img_uploads/24.jpg', 'kitchen room', 'FP', 'dining-room'),
(9, ' \r\nkitchen room', 'img_uploads/25.jpg', 'kitchen room', 'UP', 'kitchen-room'),
(10, ' Bed room\r\n', 'img_uploads/26.jpg', 'Bed room', 'OP', 'bed-room'),
(11, ' \r\nBed room', 'img_uploads/27.jpg', 'Bed room', 'UP', 'bed-room'),
(12, ' \r\ndfefef', 'img_uploads/Desert2.jpg', 'test', 'UP', 'living-room');

-- --------------------------------------------------------

--
-- Table structure for table `quotationtable`
--

CREATE TABLE `quotationtable` (
  `idquatation` int(11) NOT NULL,
  `iduser` int(11) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `mail` varchar(45) DEFAULT NULL,
  `number` varchar(45) DEFAULT NULL,
  `comment` varchar(45) DEFAULT NULL,
  `qua` varchar(45) DEFAULT NULL,
  `newdata` date DEFAULT NULL,
  `newcomment` varchar(45) DEFAULT NULL,
  `work` varchar(45) DEFAULT NULL,
  `upqua` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `sname` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `spass` varchar(255) NOT NULL,
  `mail` varchar(45) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `code` varchar(45) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `aphone` varchar(45) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `dat` date DEFAULT NULL,
  `qua` varchar(45) DEFAULT NULL,
  `gender` varchar(45) DEFAULT NULL,
  `role` varchar(45) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registermaterial`
--

CREATE TABLE `registermaterial` (
  `materialid` int(11) NOT NULL,
  `materialname` varchar(45) DEFAULT NULL,
  `mdes` varchar(45) DEFAULT NULL,
  `unit` varchar(45) DEFAULT NULL,
  `vdes` varchar(45) DEFAULT NULL,
  `vname` varchar(45) DEFAULT NULL,
  `vno` int(11) DEFAULT NULL,
  `vaddress` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `salesregistration`
--

CREATE TABLE `salesregistration` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `mobileno` varchar(45) DEFAULT NULL,
  `pwd` varchar(45) DEFAULT NULL,
  `address` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sess`
--

CREATE TABLE `sess` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `sname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stockup`
--

CREATE TABLE `stockup` (
  `idstockup` int(11) NOT NULL,
  `Material` varchar(45) DEFAULT NULL,
  `meas` int(11) DEFAULT NULL,
  `unit` varchar(45) DEFAULT NULL,
  `Price` varchar(45) DEFAULT NULL,
  `Tax` int(11) DEFAULT NULL,
  `Address` varchar(45) DEFAULT NULL,
  `Phone` varchar(45) DEFAULT NULL,
  `Vendor` varchar(45) DEFAULT NULL,
  `Email` varchar(45) DEFAULT NULL,
  `Date` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `sid` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `mobile` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `role` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `vregister`
--

CREATE TABLE `vregister` (
  `idvregister` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `mail` varchar(45) DEFAULT NULL,
  `dat` varchar(45) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `num` varchar(45) DEFAULT NULL,
  `aphone` varchar(45) DEFAULT NULL,
  `hdate` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `whatwedo`
--

CREATE TABLE `whatwedo` (
  `imgid` int(11) NOT NULL,
  `IMGDESC` varchar(255) DEFAULT NULL,
  `IMGPATH` varchar(255) DEFAULT NULL,
  `IMGTITLE` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `whatwedo`
--

INSERT INTO `whatwedo` (`imgid`, `IMGDESC`, `IMGPATH`, `IMGTITLE`) VALUES
(3, ' \r\nBed Room', 'img_uploads/in3.jpg', 'Bed Room'),
(4, ' \r\nLiving Area', 'img_uploads/in4.JPG', 'Living Area'),
(5, ' Kitchen', 'img_uploads/in5.jpg', 'Kitchen');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `code`
--
ALTER TABLE `code`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `conformtablenow`
--
ALTER TABLE `conformtablenow`
  ADD PRIMARY KEY (`idconformtablenow`);

--
-- Indexes for table `confromchecknow`
--
ALTER TABLE `confromchecknow`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `confromoder`
--
ALTER TABLE `confromoder`
  ADD PRIMARY KEY (`idconfromoder`);

--
-- Indexes for table `customerregister`
--
ALTER TABLE `customerregister`
  ADD PRIMARY KEY (`cid`),
  ADD UNIQUE KEY `mobileno` (`mobileno`);

--
-- Indexes for table `desginerwork`
--
ALTER TABLE `desginerwork`
  ADD PRIMARY KEY (`iddesginerwork`);

--
-- Indexes for table `dueform`
--
ALTER TABLE `dueform`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `empinvoice`
--
ALTER TABLE `empinvoice`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employeeid`);

--
-- Indexes for table `enquiries`
--
ALTER TABLE `enquiries`
  ADD PRIMARY KEY (`enquid`);

--
-- Indexes for table `enquirylist`
--
ALTER TABLE `enquirylist`
  ADD PRIMARY KEY (`idenquirylist`);

--
-- Indexes for table `enquiryone`
--
ALTER TABLE `enquiryone`
  ADD PRIMARY KEY (`idenquirylist`);

--
-- Indexes for table `enquirytwo`
--
ALTER TABLE `enquirytwo`
  ADD PRIMARY KEY (`idenquirytwo`);

--
-- Indexes for table `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fileupload`
--
ALTER TABLE `fileupload`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `followupform`
--
ALTER TABLE `followupform`
  ADD PRIMARY KEY (`idfollowupform`);

--
-- Indexes for table `fruits`
--
ALTER TABLE `fruits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `getdata`
--
ALTER TABLE `getdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `imageslider`
--
ALTER TABLE `imageslider`
  ADD PRIMARY KEY (`imgid`);

--
-- Indexes for table `materialcreate`
--
ALTER TABLE `materialcreate`
  ADD PRIMARY KEY (`idmt`);

--
-- Indexes for table `materialrecived`
--
ALTER TABLE `materialrecived`
  ADD PRIMARY KEY (`idmaterialrecived`);

--
-- Indexes for table `materialrequired`
--
ALTER TABLE `materialrequired`
  ADD PRIMARY KEY (`idnew_table`);

--
-- Indexes for table `ourprocess`
--
ALTER TABLE `ourprocess`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payduecol`
--
ALTER TABLE `payduecol`
  ADD PRIMARY KEY (`idpayduecol`);

--
-- Indexes for table `po`
--
ALTER TABLE `po`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `procurement`
--
ALTER TABLE `procurement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`idproject`);

--
-- Indexes for table `quotationtable`
--
ALTER TABLE `quotationtable`
  ADD PRIMARY KEY (`idquatation`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registermaterial`
--
ALTER TABLE `registermaterial`
  ADD PRIMARY KEY (`materialid`);

--
-- Indexes for table `salesregistration`
--
ALTER TABLE `salesregistration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sess`
--
ALTER TABLE `sess`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stockup`
--
ALTER TABLE `stockup`
  ADD PRIMARY KEY (`idstockup`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `vregister`
--
ALTER TABLE `vregister`
  ADD PRIMARY KEY (`idvregister`);

--
-- Indexes for table `whatwedo`
--
ALTER TABLE `whatwedo`
  ADD PRIMARY KEY (`imgid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `code`
--
ALTER TABLE `code`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `conformtablenow`
--
ALTER TABLE `conformtablenow`
  MODIFY `idconformtablenow` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `confromchecknow`
--
ALTER TABLE `confromchecknow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `confromoder`
--
ALTER TABLE `confromoder`
  MODIFY `idconfromoder` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customerregister`
--
ALTER TABLE `customerregister`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=166;

--
-- AUTO_INCREMENT for table `desginerwork`
--
ALTER TABLE `desginerwork`
  MODIFY `iddesginerwork` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dueform`
--
ALTER TABLE `dueform`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `empinvoice`
--
ALTER TABLE `empinvoice`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `employeeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1010;

--
-- AUTO_INCREMENT for table `enquiries`
--
ALTER TABLE `enquiries`
  MODIFY `enquid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `enquirylist`
--
ALTER TABLE `enquirylist`
  MODIFY `idenquirylist` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `enquiryone`
--
ALTER TABLE `enquiryone`
  MODIFY `idenquirylist` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `enquirytwo`
--
ALTER TABLE `enquirytwo`
  MODIFY `idenquirytwo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `file`
--
ALTER TABLE `file`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fileupload`
--
ALTER TABLE `fileupload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `followupform`
--
ALTER TABLE `followupform`
  MODIFY `idfollowupform` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `fruits`
--
ALTER TABLE `fruits`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `getdata`
--
ALTER TABLE `getdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `imageslider`
--
ALTER TABLE `imageslider`
  MODIFY `imgid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `materialcreate`
--
ALTER TABLE `materialcreate`
  MODIFY `idmt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `materialrecived`
--
ALTER TABLE `materialrecived`
  MODIFY `idmaterialrecived` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `materialrequired`
--
ALTER TABLE `materialrequired`
  MODIFY `idnew_table` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ourprocess`
--
ALTER TABLE `ourprocess`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payduecol`
--
ALTER TABLE `payduecol`
  MODIFY `idpayduecol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `po`
--
ALTER TABLE `po`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `procurement`
--
ALTER TABLE `procurement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `idproject` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `quotationtable`
--
ALTER TABLE `quotationtable`
  MODIFY `idquatation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `registermaterial`
--
ALTER TABLE `registermaterial`
  MODIFY `materialid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `salesregistration`
--
ALTER TABLE `salesregistration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sess`
--
ALTER TABLE `sess`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stockup`
--
ALTER TABLE `stockup`
  MODIFY `idstockup` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vregister`
--
ALTER TABLE `vregister`
  MODIFY `idvregister` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `whatwedo`
--
ALTER TABLE `whatwedo`
  MODIFY `imgid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
