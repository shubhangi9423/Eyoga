-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2016 at 06:32 AM
-- Server version: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `eyoga`
--

-- --------------------------------------------------------

--
-- Table structure for table `addcart`
--

CREATE TABLE IF NOT EXISTS `addcart` (
`cartid` int(11) NOT NULL,
  `clid` int(11) NOT NULL,
  `emailid` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `addcart`
--

INSERT INTO `addcart` (`cartid`, `clid`, `emailid`) VALUES
(1, 29, 'shub@gmail.com'),
(2, 29, 'shub@gmail.com'),
(3, 26, 'shub@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `asana`
--

CREATE TABLE IF NOT EXISTS `asana` (
`aid` int(11) NOT NULL,
  `aname` varchar(15) NOT NULL,
  `male` int(11) NOT NULL,
  `female` int(11) NOT NULL,
  `morning` int(11) NOT NULL,
  `evening` int(11) NOT NULL,
  `disease` varchar(15) NOT NULL,
  `image` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL,
  `scontent` varchar(15) NOT NULL,
  `lcontent` varchar(500) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `asana`
--

INSERT INTO `asana` (`aid`, `aname`, `male`, `female`, `morning`, `evening`, `disease`, `image`, `video`, `scontent`, `lcontent`) VALUES
(6, 'Anandabalasana', 1, 1, 1, 0, 'joints pain', 'Ananda-Balasana.jpg', 'uploads/videos/video1.mp4', '<p><strong>Happ', '<p><strong>Happy Baby asana of &nbsp;yoga for beginners also. This yoga asana provides an excellent stretch for the hip joints, which can get stiff from too much sitting. This pose is mentally calming while physically stimulating which makes it an perfect exercise for a day when we have a lot on our schedule. This pose will elongate the lower back and allow the hips to stretch. It is one of the basic yoga asanas and easy to do.</strong></p>\r\n'),
(7, 'Ardha-halasana', 1, 1, 1, 1, 'indigestion', 'Ardha-Halasana.jpg', 'uploads/videos/video3.mp4', '<p><strong>Half', '<p><strong>Half Plough Pose is similar to Uttanpadasana which is good for improving the functions of abdominal organs. It stimulates abdominal organs very fast and cures constipation and indigestion. It also reduces belly fats and tones the thigh and hip muscles overall abdominal muscles. It cures stomach disorders and improves digestion, appetite, removes gases and is useful to cure arthritis and lumbar spondylitis.</strong></p>\r\n'),
(8, 'Badhha-Konasana', 0, 1, 1, 1, 'nerve pain', 'baddha-konasana.jpg', 'uploads/videos/video6.mp4', '<p><strong>This', '<p><strong>This pose of yoga for beginners helps to open up the hips and ease sciatica discomfort that can be made worse by sitting for long periods. The sciatic nerve starts in the lower back and runs down both leg, and sciatic nerve pain can occur when the nerve is somehow compressed. Long commutes and sitting for long periods of time exacerbates it.</strong></p>\r\n\r\n<p><br />\r\n&nbsp;</p>\r\n'),
(9, 'Balasana', 0, 1, 1, 0, 'blood pessure', 'balasana.jpg', 'uploads/videos/video6.mp4', '<p><strong>This', '<p><strong>This asana is very simple yet calming pose which we can do in bed too. It is an excellent yoga exercise for those suffering from back pain as it stretches and relaxes the spine. It also stretches and strengthens muscle of hips, thighs and ankles. Pregnant women and those suffering from high blood pressure should avoid doing Balasana.</strong></p>\r\n'),
(10, 'Dhanurasana', 1, 0, 1, 1, 'poor blood circ', 'Dhanurasana.jpg', 'uploads/videos/video3.mp4', '<p><strong>Dhan', '<p><strong>Dhanurasana is very effective in weight loss program. this yoga pose helps in reducing the belly fat very easily. It strengthens the ankles, thighs, groins, chest and abdominal organs and spinal cord. This yoga posture improves the functions of kidney, pancreas, liver, small and big intestine. It also acts as a stress reliever and gives flexibility to the back. It improves the function of digestion and removes gases.</strong></p>\r\n'),
(11, 'Garudasana', 1, 1, 0, 1, 'back pain', 'garudasan2.jpg', 'uploads/videos/video3.mp4', '<p><strong>This', '<p><strong>This asana helps in relaxing and it also an excellent way to increase side-to-side spinal flexibility. With regular practice of this asana every day one can relieve pain in the lower belly and lower back.</strong></p>\r\n'),
(12, 'Balasana', 0, 1, 1, 0, 'blood pessure', 'balasana.jpg', 'uploads/videos/video6.mp4', '<p><strong>This', '<p><strong>This asana is very simple yet calming pose which we can do in bed too. It is an excellent yoga exercise for those suffering from back pain as it stretches and relaxes the spine. It also stretches and strengthens muscle of hips, thighs and ankles. Pregnant women and those suffering from high blood pressure should avoid doing Balasana.</strong></p>\r\n'),
(13, 'Garudasana2', 1, 0, 0, 1, 'extra fat', 'Dhanurasana.jpg', 'uploads/videos/video6.mp4', '<p><strong>This', '<p><strong>This asana may look like a lot of twist and turnings exercise but it is not that hard to perform. With regular practice of this asana it helps in reducing extra fats in the thighs &amp; arms. It also improves the balance of our body.</strong></p>\r\n'),
(14, 'Halasana', 0, 1, 0, 1, 'menopause', 'halasana.jpg', 'uploads/videos/video1.mp4', '<p><strong>Hala', '<p><strong>Halasana is also known as Plough pose which strengthens our back muscles and gives flexibility. It cures indigestion and constipation as well as reduces stress. It stimulates the abdominal organs and cure abdominal problems. People suffering from diabetes should do this regularly. It helps to make spinal cord strong and flexible, strengthens the abdominal muscles, reduces stress, and cures the symptoms of menopause.</strong></p>\r\n\r\n<p><strong>&nbsp;Halasana&nbsp;</strong></p>\r\n'),
(15, 'Kapalbharati', 1, 1, 1, 0, 'acidity', 'kalapabathi.jpg', 'uploads/videos/video3.mp4', '<p><strong>Kapa', '<p><strong>Kapalbhati pranayama is the most recommended breathing exercise which cures our stomach disorder completely and loses weight. Practicing 5 minutes kapalbhati pranayama regularly removes the toxins and increases metabolism. It also cures constipation, acidity, diabetes, Asthma and all kinds of Respiratory troubles, sinus and even hair loss. It is very effective in weight loss (mainly belly fats). &nbsp;This is superb yogasana.</strong></p>\r\n'),
(16, 'Manjarasan', 1, 0, 1, 0, 'poor blood circ', 'marjariasana.jpg', 'uploads/videos/video3.mp4', '<p><strong>This', '<p><strong>This cat pose yoga asana is an excellent stretch in yoga workout. It produces flexibility in our spine and releases us from back pain. It improves our blood circulation and digestion power. It is one of the best yoga postures and &nbsp;also tones our abdomen and helps in relaxing our mind.</strong></p>\r\n'),
(17, 'Ardha matsyendr', 1, 1, 1, 0, 'diabetics', 'MatsyendrasanaHalf.jpg', 'uploads/videos/video3.mp4', '<p><strong>Ardh', '<p><strong>Ardha matsyendrasana increases oxygen supply to the lungs and increases the flexibility &amp; the functions of vertebrae of the spine. It also stretches the back muscles and spine and releases stiffness of hip joints. It is one of the best yogasanas which is also helpful in the treatment of diabetes, constipation, spinal problems, cervical spondylitis, and urinary tract disorder.</strong></p>\r\n'),
(18, 'Vajrasana', 1, 1, 0, 0, 'joints pain', 'Vajrasana.jpg', 'uploads/videos/video3.mp4', '<p><strong>Vajr', '<p><strong>Vajrasana is the simplest of all the asanas of yoga which can be practiced after lunch or dinner also. Vajrasana is also known as &lsquo;diamond pose&rsquo; which is best for practicing breathing exercises and meditation. Person suffering from joint pain should avoid this asana.</strong></p>\r\n\r\n<p><strong>This asana calms the mind and bring stability in mind, cures constipation, stomach disorder, acidity, and increases digestion process. Those suffering from gas problems can practice '),
(19, 'Uttansana', 0, 0, 1, 1, 'stress and anxi', 'Uttanasana.jpg', 'uploads/videos/video3.mp4', '<p><strong>Utta', '<p><strong>Uttanasana is a forward bending pose which relaxes us from stress and anxiety. And with the arm bind, this standing forward bend variation provides a deep shoulder stretch. By binding the hands, it also allows the arms to stretch and tighten the shoulders to relax. It also brings some blood back to the brain while giving a great stretch to the legs.</strong></p>\r\n'),
(20, 'Virabhadrasana', 1, 0, 0, 0, 'low concentrati', 'virabhadrasana.jpg', 'uploads/videos/video6.mp4', '<p><strong>This', '<p><strong>This pose looks like a soldier in the position of war so it is called as Virabhadrasana (Warrior Pose). It is an excellent exercise for pregnant women. It gives flexibility to the entire body and strengthens the legs, arms, lower back and tones the lower body. It also helps in increasing the stamina, concentration power and balance of our body. It relieves us from the pain during menstrual period.</strong></p>\r\n'),
(21, 'Natrajasana', 0, 1, 0, 0, 'weight loss', 'natarajasana.jpg', 'uploads/videos/video6.mp4', '<p><strong>Nata', '<p><strong>Nataraja Pose is also known as lord of dance pose as it resembles its posture. This pose helps to improve the balance of the body, concentration. It strengthens the muscles of hip, thighs and chest. It also helps in reducing weight and improves our posture and balance.</strong></p>\r\n'),
(22, 'Naukasana', 0, 0, 1, 0, 'diabetics', 'Naukasana.jpg', 'uploads/videos/video3.mp4', '<p><strong>This', '<p><strong>This asana is also called as boat yoga pose. Basically naukasana helps to strengthen the lungs, liver and pancreas. It also helps to increase the circulation of blood and maintain the sugar level. It strengthens the muscles of thigh, hips, necks and shoulder and helps in reducing belly fats. It also improves the function of kidney, thyroids and prostate glands.</strong></p>\r\n'),
(23, 'Paschimauttana', 0, 0, 0, 1, 'fat stomach', 'paschimottanasana.jpg', 'uploads/videos/video1.mp4', '<p><strong>Pasc', '<p><strong>Paschimauttana asana covers the stretching of the whole body from our head to heels. This asana is recommended especially for women after delivery to reduce belly fat and toning the abdominal pelvic organs. It strengthens the back muscles as well as very useful for increasing height. It stretches the spine and brings more flexibility in our body.</strong></p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tblcloth`
--

CREATE TABLE IF NOT EXISTS `tblcloth` (
`clid` int(11) NOT NULL,
  `male` int(11) NOT NULL,
  `female` int(11) NOT NULL,
  `cloth` varchar(30) NOT NULL,
  `cimage` varchar(50) NOT NULL,
  `cprice` varchar(20) NOT NULL,
  `cdprice` varchar(20) NOT NULL,
  `cquantity` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `tblcloth`
--

INSERT INTO `tblcloth` (`clid`, `male`, `female`, `cloth`, `cimage`, `cprice`, `cdprice`, `cquantity`) VALUES
(30, 1, 1, 'pant', 'images (14).jpg', '200', '40', '20'),
(31, 0, 1, 'tops', 'images (5).jpg', '400', '20', '20'),
(32, 1, 0, 'shirt', 'download (1).jpg', '5000', '50', '20'),
(33, 0, 1, 'shorts', 'images (16).jpg', '350', '40', '25'),
(34, 0, 1, 'yoga shorts', 'download (2).jpg', '450', '45', '20'),
(35, 0, 1, 'short black', 'download (3).jpg', '600', '54', '20'),
(36, 1, 0, 'suite', 'images (15).jpg', '700', '70', '55'),
(37, 1, 0, 'jacket', 'images (13).jpg', '500', '40', '30');

-- --------------------------------------------------------

--
-- Table structure for table `tblcomment`
--

CREATE TABLE IF NOT EXISTS `tblcomment` (
`cmid` int(11) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `comment` varchar(50) NOT NULL,
  `uemail` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `tblcomment`
--

INSERT INTO `tblcomment` (`cmid`, `uname`, `comment`, `uemail`) VALUES
(22, 'aaa', 'dddd', 'aaaa'),
(25, 'poo', 'awesome', 'pooja@gmail.com'),
(26, 'prerna', 'awesome', 'prerna@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tblcontact`
--

CREATE TABLE IF NOT EXISTS `tblcontact` (
`coid` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `uemail` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `comment` varchar(100) NOT NULL,
  `uimage` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tblcontact`
--

INSERT INTO `tblcontact` (`coid`, `username`, `uemail`, `mobile`, `comment`, `uimage`) VALUES
(9, 'Vidya', 'vidya@gmail.com', '9423520640', ' awosome', '3.jpg'),
(10, 'Nikita Ahirrao', 'nikita@gmail.com', '5647838732', ' I want the asanas on Weight gain', '5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbldisease`
--

CREATE TABLE IF NOT EXISTS `tbldisease` (
`did` int(11) NOT NULL,
  `dname` varchar(40) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `tbldisease`
--

INSERT INTO `tbldisease` (`did`, `dname`) VALUES
(6, 'joints pain'),
(7, 'back pain'),
(8, 'body pain'),
(9, 'asthma'),
(10, 'acidity'),
(11, 'blood pessure'),
(12, 'low concentration '),
(13, 'diabetics'),
(14, 'extra fat'),
(15, 'fat stomach'),
(16, 'indigestion'),
(17, 'insomnia'),
(18, 'nerve pain'),
(19, 'poor blood circulation'),
(20, 'weight loss'),
(21, 'spinal problems'),
(22, 'dark circle'),
(23, 'tension'),
(24, 'lack of balancing power'),
(25, 'menopause'),
(26, 'stress and anxiety');

-- --------------------------------------------------------

--
-- Table structure for table `tbldrink`
--

CREATE TABLE IF NOT EXISTS `tbldrink` (
`drid` int(11) NOT NULL,
  `drink` varchar(30) NOT NULL,
  `dimage` varchar(50) NOT NULL,
  `dprice` varchar(20) NOT NULL,
  `ddprice` varchar(20) NOT NULL,
  `dquantity` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `tbldrink`
--

INSERT INTO `tbldrink` (`drid`, `drink`, `dimage`, `dprice`, `ddprice`, `dquantity`) VALUES
(11, 'Coconut Water', 'coconut-water.jpg', '150', '22', '20'),
(12, 'Ginger fireball', 'ginger_fireball-300x256.jpg', '200', '30', '20'),
(13, 'kombucha', 'kombucha.jpg', '320', '20', '5'),
(15, 'lemon oasis', 'lemon-oasis.jpg', '90', '10', '10'),
(16, 'superberrykiwi', 'superberrykiwi.jpg', '120', '15', '20'),
(17, 'watermelon juice', 'wtrmln-wtr.jpg', '200', '30', '25'),
(18, 'spicygreens', 'spicygreens.jpg', '100', '15', '15'),
(19, 'plumrooibos', 'plum+rooibos.jpg', '200', '35', '20');

-- --------------------------------------------------------

--
-- Table structure for table `tblimage`
--

CREATE TABLE IF NOT EXISTS `tblimage` (
`iid` int(11) NOT NULL,
  `iname` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=71 ;

--
-- Dumping data for table `tblimage`
--

INSERT INTO `tblimage` (`iid`, `iname`) VALUES
(42, 'Ananda-Balasana.jpg'),
(43, 'Ardha-Halasana.jpg'),
(44, 'baddha-konasana.jpg'),
(45, 'balasana.jpg'),
(46, 'bridge-pose.jpg'),
(47, 'cobra-pose.jpg'),
(48, 'Dhanurasana.jpg'),
(49, 'garudasan2.jpg'),
(50, 'Garudasana1.jpg'),
(51, 'shirshasan.jpg'),
(52, 'kalapabathi.jpg'),
(53, 'marjariasana.jpg'),
(54, 'MatsyendrasanaHalf.jpg'),
(55, 'natarajasana.jpg'),
(56, 'Naukasana.jpg'),
(57, 'paschimottanasana.jpg'),
(58, 'Pavanmuktasana.jpg'),
(59, 'halasana.jpg'),
(60, 'shavasana.jpg'),
(61, 'sarvangsana.jpg'),
(62, 'slowneck.jpg'),
(63, 'Tadasana.jpg'),
(64, 'Trikonasana.jpg'),
(65, 'ushtrasana.jpg'),
(66, 'Uttanapadasana.jpg'),
(67, 'Uttanasana.jpg'),
(68, 'UttithaHastaPadangustana.jpg'),
(69, 'Vajrasana.jpg'),
(70, 'virabhadrasana.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbllogin`
--

CREATE TABLE IF NOT EXISTS `tbllogin` (
`adid` int(50) NOT NULL,
  `aemail` varchar(50) NOT NULL,
  `apass` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbllogin`
--

INSERT INTO `tbllogin` (`adid`, `aemail`, `apass`) VALUES
(2, 'shubhangiwani94@gmail.com', '9423520640');

-- --------------------------------------------------------

--
-- Table structure for table `tblmat`
--

CREATE TABLE IF NOT EXISTS `tblmat` (
`mtid` int(11) NOT NULL,
  `mat` varchar(30) NOT NULL,
  `mimage` varchar(50) NOT NULL,
  `mprice` varchar(20) NOT NULL,
  `mdprice` varchar(20) NOT NULL,
  `mquantity` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tblmat`
--

INSERT INTO `tblmat` (`mtid`, `mat`, `mimage`, `mprice`, `mdprice`, `mquantity`) VALUES
(7, 'cotton', 'images (13).jpg', '400', '20', '20'),
(8, 'hogiari', 'images (2).jpg', '700', '20', '50'),
(9, 'design', 'images (4).jpg', '600', '50', '30'),
(10, 'texture', 'images (15).jpg', '700', '90', '40');

-- --------------------------------------------------------

--
-- Table structure for table `tblnews`
--

CREATE TABLE IF NOT EXISTS `tblnews` (
`nid` int(50) NOT NULL,
  `ntitle` varchar(50) NOT NULL,
  `nimage` varchar(50) NOT NULL,
  `scontent` varchar(50) NOT NULL,
  `lcontent` varchar(500) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tblnews`
--

INSERT INTO `tblnews` (`nid`, `ntitle`, `nimage`, `scontent`, `lcontent`) VALUES
(2, ' Ram Mahesh, program director for yoga festival at', 'almora.jpg', '<p><strong>&nbsp;Summary: Ram Mahesh, program dire', '<p><strong>&nbsp;Summary: Ram Mahesh, program director for yoga festival at Almora told TOI, &quot;The process of registering international tourists who are interested in the Almora yoga festival have begun by Parmarth Niketan Ashram, which had around ten thousand yoga enthusiasts at the international yoga festival held in March this year at the ashram premises. DEHRADUN: It is for the first time that the state government is holding international yoga festival at Almora for two days on November '),
(3, '	Coming out of nowhere, Patanjali Ayurved is now I', 'patanjali.jpg', '<p><strong>Coming out of nowhere, Patanjali Ayurve', '<p><strong>Coming out of nowhere, Patanjali Ayurved is now India&rsquo;s fastest-growing consumer products brand. Established domestic and global competitors are unnerved by the rocketing sales of its wide range of staples, nutrition, cosmetics and personal care products.</strong></p>\r\n\r\n<p><strong>In the coming weeks, Patanjali will launch an instant noodles brand that it touts as wholesome and reasonably priced. The product is seen to counter food giant Nestle&rsquo;s prime brand and category '),
(4, 'Thailand-based global online global yoga platform,', 'yogatrail-large.jpg', '<p><strong>Thailand-based global online global yog', '<p><strong>Thailand-based global online global yoga platform, YogaTrail.com, is all poised to make an entry into the very birthplace of yoga, India. &nbsp; The company says that it is committed to the activation of their engagement in the country and hopes to significantly contribute to the Indian health market by providing an exclusive network to all the yoga enthusiasts. &nbsp; Started two years ago, YogaTrail connects yoga teachers and students, updates users on what&rsquo;s happening in the ');

-- --------------------------------------------------------

--
-- Table structure for table `tblregi`
--

CREATE TABLE IF NOT EXISTS `tblregi` (
`rid` int(11) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `uemail` varchar(50) NOT NULL,
  `upass` varchar(50) NOT NULL,
  `cpass` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tblregi`
--

INSERT INTO `tblregi` (`rid`, `uname`, `gender`, `uemail`, `upass`, `cpass`, `phone`) VALUES
(1, '', '', 'shubhangi', 'shubhangi', '', ''),
(2, '', '', 'shub@gmail.com', 'shub', '', ''),
(3, 'Roshani Bhamare', 'Female', 'rosh@gmail.com', 'roshani', 'roshani', '9860793874');

-- --------------------------------------------------------

--
-- Table structure for table `tblvideo`
--

CREATE TABLE IF NOT EXISTS `tblvideo` (
`vid` int(11) NOT NULL,
  `vname` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `tblvideo`
--

INSERT INTO `tblvideo` (`vid`, `vname`) VALUES
(11, 'uploads/videos/video1.mp4'),
(14, 'uploads/videos/video3.mp4'),
(17, 'uploads/videos/video6.mp4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addcart`
--
ALTER TABLE `addcart`
 ADD PRIMARY KEY (`cartid`);

--
-- Indexes for table `asana`
--
ALTER TABLE `asana`
 ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `tblcloth`
--
ALTER TABLE `tblcloth`
 ADD PRIMARY KEY (`clid`);

--
-- Indexes for table `tblcomment`
--
ALTER TABLE `tblcomment`
 ADD PRIMARY KEY (`cmid`);

--
-- Indexes for table `tblcontact`
--
ALTER TABLE `tblcontact`
 ADD PRIMARY KEY (`coid`);

--
-- Indexes for table `tbldisease`
--
ALTER TABLE `tbldisease`
 ADD PRIMARY KEY (`did`);

--
-- Indexes for table `tbldrink`
--
ALTER TABLE `tbldrink`
 ADD PRIMARY KEY (`drid`);

--
-- Indexes for table `tblimage`
--
ALTER TABLE `tblimage`
 ADD PRIMARY KEY (`iid`);

--
-- Indexes for table `tbllogin`
--
ALTER TABLE `tbllogin`
 ADD PRIMARY KEY (`adid`);

--
-- Indexes for table `tblmat`
--
ALTER TABLE `tblmat`
 ADD PRIMARY KEY (`mtid`);

--
-- Indexes for table `tblnews`
--
ALTER TABLE `tblnews`
 ADD PRIMARY KEY (`nid`);

--
-- Indexes for table `tblregi`
--
ALTER TABLE `tblregi`
 ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `tblvideo`
--
ALTER TABLE `tblvideo`
 ADD PRIMARY KEY (`vid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addcart`
--
ALTER TABLE `addcart`
MODIFY `cartid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `asana`
--
ALTER TABLE `asana`
MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `tblcloth`
--
ALTER TABLE `tblcloth`
MODIFY `clid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `tblcomment`
--
ALTER TABLE `tblcomment`
MODIFY `cmid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `tblcontact`
--
ALTER TABLE `tblcontact`
MODIFY `coid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tbldisease`
--
ALTER TABLE `tbldisease`
MODIFY `did` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `tbldrink`
--
ALTER TABLE `tbldrink`
MODIFY `drid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `tblimage`
--
ALTER TABLE `tblimage`
MODIFY `iid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=71;
--
-- AUTO_INCREMENT for table `tbllogin`
--
ALTER TABLE `tbllogin`
MODIFY `adid` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tblmat`
--
ALTER TABLE `tblmat`
MODIFY `mtid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tblnews`
--
ALTER TABLE `tblnews`
MODIFY `nid` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tblregi`
--
ALTER TABLE `tblregi`
MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tblvideo`
--
ALTER TABLE `tblvideo`
MODIFY `vid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
