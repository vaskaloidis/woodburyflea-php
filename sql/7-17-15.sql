-- MySQL dump 10.13  Distrib 5.5.43, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: woodburyflea
-- ------------------------------------------------------
-- Server version	5.5.43-0ubuntu0.14.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `content`
--

DROP TABLE IF EXISTS `content`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `content` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `section` varchar(60) NOT NULL,
  `content` text NOT NULL,
  `created` datetime NOT NULL,
  `niceName` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `content`
--

LOCK TABLES `content` WRITE;
/*!40000 ALTER TABLE `content` DISABLE KEYS */;
INSERT INTO `content` VALUES (9,'frontPage_top','<br>\r\n                <h3>Come check out the Woodbury Flea Market!</h3>\r\n              <h4>Come shop at The Woodbury Antiques and Flea Market on Saturday morning from 7:30 am until 2:00 pm. Free admission and free parking! Pets are not allowed.</h4>\r\n              <h4>To become a vendor Contact Us or just drive in at 6:30 AM any Saturday or 7:30 AM on Sunday  and you will be given a space (23x20) to set up your table(s). The fee for saturday is $30 and the fee for Sunday (beginning in March) is $10. Reduced rates apply to vendors who need more than one space.\r\n              </h4><div>We are tseting with \" and this ` and this \' ~~~ (*^&amp;(*^*&amp;(*&amp;^(&amp;*%*T</div>\r\n              <h4>For more information please call: (203) 263-6217, email:<a href=\"mailto:thenewwoodburyfleamarket@gmail.com\">thenewwoodburyfleamarket@gmail.com</a>, or <a href=\"https://www.facebook.com/pages/Woodbury-Antiques-Flea-Market/194628543955095\">like us on Facebook!</a></h4>			','2015-05-02 00:00:00','Front Page Top'),(10,'announce_title','<br>\r\n                The Woodbury Farmer\'s Market is Here','2015-05-03 04:08:30','Announcement Title'),(11,'about','\r\n<p>Gus and Anne Kaloidis took over the old Woodbury Antiques and Flea Market in 2008 and have been running it as a family business ever since. We feature over 40 dealers offering a variety of merchandise for sale with an emphasis on early items and antiques. Plants and flowers are available,and also,fresh,local fruits and vegetables when in season.The market is open every Saturday year round, and Sunday from march to end of November.\r\n						</p><p>This year we added a farmers market featuring produce and fruits grown in CT.The market operates from JuLy until October \r\n\r\n						</p><p>Vendors can drive to their assigned spaces and set up their tables at 6:30 am. Reservations are not required, walk-ins are welcome, but you may call us to let us know you are coming at: (203) 263-6217. Ask management for special rates.</p>\r\n\r\n						<p>Customers are invited after 7:30 A.M. We offer ample parking around the restaurant. Parking attendents are available to assist you. Admission is FREE and handicap parking is also available .Pets are not allowed.</p>\r\n\r\n						<p>This is a continuation of the old Woodbury Antiques and Flea market from around the corner (Route 6 & Middle Quarter Road), that had been in business for over forty years. Don and Diane Heavens owned and operated the market until they sold their property in 2007.</p>\r\n\r\n						<p>The Market is easily accessible from I-84 and it is one and one- half hours away from NY City. The nearest airports are Oxford and Danbury. The Market is located at the bottom of Sherman Hill Road near the intersection of routes 6 and 64.</p>\r\n\r\n						<p>Woodbury is known for its old houses, antique shops and restaurants. Visitors come from all over every weekend, especially from New York.</p>																								','2015-05-03 04:08:30','About Section'),(12,'gus','<p>Gus Kaloidis had been in the restaurant business in Woodbury for forty years, until he sold his restaurant (Elenni\'s/ Woodbury Pizza Castle) Â in 2006. The Flea Market is his latest venture and he is very happy to be back in business in Woodbury serving the public.</p>\r\n\r\n						<p>Gus is a former airline pilot and his passion has always been flying. He has been a resident of Woodbury for over forty years and is a member of the Woodbury Lions Club. He runs the flea market with his wife Anne and his three children, Vas, Chrysanthe and Maria Eleni.</p>															','2015-05-03 04:11:24','About Gus'),(13,'announce_content','<br>\r\n                Come to the Farmer\'s market, starting July 12th Sunday 10:00am - 2:00pm!															<div><br></div><div><br></div><div>Plants,flowers and produce are now available at the market on Saturdays!Check it out,you will love it.!!</div>','2015-05-04 22:34:35','Announcement Content'),(14,'directions','','2015-05-04 23:24:27','Directions'),(15,'foot_date_1','13MAR','2015-07-17 00:00:00','Footer - Date - First'),(16,'foot_date_2','16APR','2015-07-17 00:00:00','Footer - Date - Second'),(17,'foot_date_3','17JUL','2015-07-17 00:00:00','Footer - Date - Third'),(18,'foot_title_1','The Farmer\'s Market','2015-07-17 00:00:00','Footer - Title - First'),(19,'foot_title_2','Farmer\'s Market Opened!','2015-07-17 00:00:00','Footer - Title - Second'),(20,'foot_title_3','Beautiful Weather','2015-07-17 00:00:00','Footer - Title - Third'),(21,'foot_content_1','The Farmer\'s market Starts July 12th, every Sunday 10am - 2pm! We hope to see you there!','2015-07-17 00:00:00','Footer - Content - First'),(22,'foot_content_2','The Farmer\'s Market is now Open!!','2015-07-17 00:00:00','Footer - Content - Second'),(23,'foot_content_3','It has been beautiful weather at the farmer\'s market! Come check us out this gorgeous weekend!','2015-07-17 00:00:00','Footer - Content - Third'),(24,'foot_about','We are located in Woodbury CT, at the bottom of Sherman Hill Rd. Feel fee to stop by on Saturday\'s from 7am - 1pm','2015-07-17 00:00:00','Footer - About Us');
/*!40000 ALTER TABLE `content` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-07-17 21:17:01
