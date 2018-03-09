-- phpMyAdmin SQL Dump
-- version 3.3.9.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 14, 2012 at 03:00 PM
-- Server version: 5.5.9
-- PHP Version: 5.3.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `content`
--

INSERT INTO `content` VALUES(1, 'topFrontPage', '<br>\r\n				<br>\r\n				      <div class="jumbotron">\r\n        <h1>Welcome</h1>\r\n		<hr>\r\n        <p class="lead">\r\n		Come shop at The New Woodbury Flea Market, Saturday mornings at beginning at 7:30!<br>\r\n		To become a vender, <a href="#">Contact Us</a> and make a reservation.<br>\r\n		FEE: $3533.00<br>\r\n\r\n		For more information please phone: (203) 263-6217  or  email: thenewwoodburyfleamarket@gmail.com<br>\r\n      </p></div>						', '2012-11-13 20:55:30');
INSERT INTO `content` VALUES(2, 'secondSection', '<br>\r\n				<div class="row-fluid marketing">\r\n    <div class="span6">\r\n      <h4><i class="icon-home"></i> General Info</h4>\r\n      <address>\r\n		<strong>The Woodbury Flea Market</strong><br>\r\n			Address: 44 Sherman Hill Road (RT64)<br> \r\n			Woodbury CT, 0679888<br>\r\n			<abbr title="phone" reservations:="" (203)="" 263="" -="" 6217<="" p="">\r\n	  </abbr></address>\r\n	  <address>\r\n	  	<strong>Gus Kaloidis, The Woodbury Flea Market</strong><br>\r\n	  	<a href="mailto:thenewwoodburyfleamarket@gmail.com">Contact Us</a>\r\n	  </address>\r\n    </div>\r\n    <div class="span6">\r\n          <h4><i class="icon-shopping-cart"></i> About The Market</h4>\r\n          <p>Gus and Anne Kaloidis took over the market in 2008, and have been running it as a family business ever since... <a href="./about.php"><small>more</small></a>\r\n		</p>\r\n          <h4><i class="icon-user"></i> About the Owner</h4>\r\n          <p>Gus Kaloidis has been in the restaurant business for almost forty years, until he sold his last restaurant (Elenni''s) three years ago... <a href="./gus.php"><small>more</small></a></p>\r\n    </div>\r\n  </div>			', '2012-11-14 00:32:27');
INSERT INTO `content` VALUES(5, 'gus', '<h1>About the Owner</h1>\r\n<p>Gus Kaloidis had been in the restaurant business for almost forty years, until he sold his last restaurant (Eleni’s/ Woodbury Pizza Castle) five years ago. The Flea Market is his last venture and he is very happy to be back in business in Woodbury serving the public.</p>\r\n\r\n<p>Gus is a former airline pilot and his passion has always been flying. He has been a resident of Woodbury for forty years and is a member of the Woodbury Lions Club. He runs the flea market with his wife Anne and his three children, Vas, Chrysanthe and Maria Eleni.</p>', '2012-11-14 14:50:14');
INSERT INTO `content` VALUES(6, 'about', '<h1>About the market</h1>\r\n<p>Gus and Anne Kaloidis took over the old Woodbury Antiques and Flea Market in 2008 and have been running it as a family business ever since.  We offer a variety of items for sale, with an emphasis on early items and antiques. Plants and flowers are also available. The market is open every Saturday year round.</p>\r\n\r\n<p>Vendors can set up their tables at 6:30 am. Reservations can be made by phoning (203) 263-6217. Walk-ins are also welcome.</P>\r\n\r\n<p>Customers are invited after 7:30 A.M. We offer ample parking around the restaurant.  Parking attendents are available to assist you.  Admission is FREE.</p>\r\n\r\n<p>This is a continuation of the old Woodbury Antiques and flea market from around the corner (Route 6 & Middle Quarter Road), that had been in business for over forty years. Don and Diane Heavens owned and operated the market until they sold their property in 2008.</P>\r\n\r\n<p>The Market is easily accessible from I-84 and it is one and one- half hours away from NY City. The nearest airports are Oxford and Danbury. The Market is located at the bottom of Sherman Hill Road near the intersection of routs 6 and 64.</p>\r\n\r\n<p>Woodbury is known for it’s old houses, antique shops and restaurants. Visitors come from all over every weekend, especially from New York.</P>', '2012-11-14 14:52:49');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(60) NOT NULL,
  `content` text NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` VALUES(1, 'Coming this spring: Red Cross Disaster Booth ', '<br>\r\n					Anyone who would like to spotlight their business and/or a not for profit organization please contact us and you will receive a space!				', '2012-11-14 00:50:45');
INSERT INTO `posts` VALUES(4, 'Some title', 'Some news', '2012-11-14 14:48:51');
