-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: May 05, 2015 at 05:26 AM
-- Server version: 5.5.34
-- PHP Version: 5.5.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `woodburyFlea`
--

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `section` varchar(60) NOT NULL,
  `content` text NOT NULL,
  `created` datetime NOT NULL,
  `niceName` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `section`, `content`, `created`, `niceName`) VALUES
(9, 'frontPage_top', '<h3>Come check out the Woodbury Flea Market!</h3>\r\n              <h4>Come shop at The Woodbury Antiques and Flea Market on Saturday morning from 7:30 am until 2:00 pm. Free admission and free parking! Pets are not allowed.</h4>\r\n              <h4>To become a vendor Contact Us or just drive in at 6:30 AM any Saturday or 7:30 AM on Sunday  and you will be given a space (23x20) to set up your table(s). The fee for saturday is $30 and the fee for Sunday (beginning in March) is $10. Reduced rates apply to vendors who need more than one space.\r\n              </h4>\r\n              <h4>For more information please call: (203) 263-6217, email:<a href="mailto:thenewwoodburyfleamarket@gmail.com">thenewwoodburyfleamarket@gmail.com</a>, or <a href="https://www.facebook.com/pages/Woodbury-Antiques-Flea-Market/194628543955095">like us on Facebook!</a></h4>', '2015-05-02 00:00:00', 'Front Page Top'),
(10, 'announce_title', 'The Farmer''s Market is Coming in July!\r\n', '2015-05-03 04:08:30', 'Announcement Title'),
(11, 'about', '  <p>They offer a variety of merchandise for sale with an emphasis on early items and antiques. Plants and flowers are available,and also,fresh,local fruits and vegetables when in season.The market is open every Saturday year round, and Sunday from march to end of November.</h2>\r\n						<p>This year we added a farmers market featuring produce and fruits grown in CT.The market operates from June until October </h2>\r\n\r\n						<p>Vendors can drive to their assigned spaces and set up their tables at 6:30 am. Reservations are not required, walk-ins are welcome, but you may call us to let us know you are coming at: (203) 263-6217. Ask management for special rates.</p>\r\n\r\n						<p>Customers are invited after 7:30 A.M. We offer ample parking around the restaurant. Parking attendents are available to assist you. Admission is FREE.Pets are not allowed</p>\r\n\r\n						<p>This is a continuation of the old Woodbury Antiques and Flea market from around the corner (Route 6 & Middle Quarter Road), that had been in business for over forty years. Don and Diane Heavens owned and operated the market until they sold their property in 2008.</p>\r\n\r\n						<p>The Market is easily accessible from I-84 and it is one and one- half hours away from NY City. The nearest airports are Oxford and Danbury. The Market is located at the bottom of Sherman Hill Road near the intersection of routes 6 and 64.</p>\r\n\r\n						<p>Woodbury is known for its old houses, antique shops and restaurants. Visitors come from all over every weekend, especially from New York.</p>', '2015-05-03 04:08:30', 'About Section'),
(12, 'gus', '<p>Gus Kaloidis had been in the restaurant business in Woodbury for almost forty years, until he sold his restaurant (Elenni’s/ Woodbury Pizza Castle) seven years ago. The Flea Market is his latest venture and he is very happy to be back in business in Woodbury serving the public.</p>\r\n\r\n						<p>Gus is a former airline pilot and his passion has always been flying. He has been a resident of Woodbury for forty years and is a member of the Woodbury Lions Club. He runs the flea market with his wife Anne and his three children, Vasilios, Chrysanthe and Maria Eleni.</p>', '2015-05-03 04:11:24', 'About Gus'),
(13, 'announce_content', 'ome to the Farmer''s market, starting July 12th Sunday 10:00am - 2:00pm', '2015-05-04 22:34:35', 'Announcement Content'),
(14, 'directions', 'We are easily accessible from I84 and Route 8!', '2015-05-04 23:24:27', 'Directions');
