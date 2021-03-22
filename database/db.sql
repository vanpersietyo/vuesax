/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 10.4.13-MariaDB : Database - test
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id_user` varchar(125) NOT NULL COMMENT 'username',
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_user` varchar(255) DEFAULT NULL COMMENT 'NAMA USER',
  `status_user` varchar(2) DEFAULT NULL COMMENT 'A=aktif, N=non aktif',
  `password` varchar(255) DEFAULT NULL COMMENT 'PASSWORD',
  `KD_OUTLET` int(11) DEFAULT NULL,
  `id_outlet` int(11) DEFAULT 1,
  `tgl_input` datetime DEFAULT NULL COMMENT 'TGL DIBUAT',
  `inputby` varchar(255) DEFAULT NULL COMMENT 'ID OPERATOR',
  `jabatan` varchar(255) DEFAULT 'KSR',
  `id_google` bigint(30) DEFAULT NULL,
  `email` varchar(125) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `nama_depan` varchar(50) DEFAULT NULL,
  `nama_belakang` varchar(50) DEFAULT NULL,
  `is_login_google` smallint(1) DEFAULT 0,
  `register_date` timestamp NULL DEFAULT current_timestamp(),
  `update_date` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `no_hp` varchar(20) DEFAULT NULL,
  `kelamin` enum('laki-laki','perempuan','lainnya') DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `token_psswd` varchar(125) DEFAULT NULL,
  `is_req_psswd` smallint(6) DEFAULT NULL,
  `time_req_psswd` timestamp NULL DEFAULT NULL,
  `exp_req_psswd` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_user`) USING BTREE,
  KEY `id` (`id`) USING BTREE,
  KEY `fk_id_outlet` (`id_outlet`) USING BTREE,
  CONSTRAINT `fk_id_outlet_user` FOREIGN KEY (`id_outlet`) REFERENCES `outlet` (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC COMMENT='MASTER USER';

/*Data for the table `user` */

insert  into `user`(`id_user`,`id`,`nama_user`,`status_user`,`password`,`KD_OUTLET`,`id_outlet`,`tgl_input`,`inputby`,`jabatan`,`id_google`,`email`,`foto`,`nama_depan`,`nama_belakang`,`is_login_google`,`register_date`,`update_date`,`no_hp`,`kelamin`,`tgl_lahir`,`token_psswd`,`is_req_psswd`,`time_req_psswd`,`exp_req_psswd`) values 
('admin',6,'admin','A','bismillah1',1,1,NULL,'SISTEM','ADM',NULL,NULL,NULL,NULL,NULL,0,'2020-08-01 12:57:17','2021-03-22 16:05:16',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
('izam',2,'izam','A','bismillah1',NULL,1,NULL,'SISTEM','SYS',NULL,NULL,NULL,NULL,NULL,0,'2020-07-28 13:20:27','2020-07-28 13:46:22',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
('kasir',5,'kasir','A','bismillah1',1,1,NULL,'SISTEM','KSR',NULL,NULL,NULL,NULL,NULL,0,'2020-09-01 04:50:54','2021-03-22 16:05:25',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
('SISTEM',1,'SISTEM','A','bismillah1',NULL,1,NULL,'SISTEM','SYS',NULL,NULL,NULL,NULL,NULL,0,'2021-01-01 13:20:27','2021-03-22 16:05:34',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
('tes',3,'tes','A','bismillah1',1,1,NULL,'SISTEM','SYS',NULL,NULL,NULL,NULL,NULL,0,'2020-10-01 04:50:54','2021-03-22 16:06:42',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
('vanpersietyo',4,'adhitya','A','bismillah1',1,1,NULL,'SISTEM','SYS',NULL,NULL,NULL,NULL,NULL,0,'2020-12-01 04:50:54','2021-03-22 16:05:39',NULL,NULL,NULL,NULL,NULL,NULL,NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
