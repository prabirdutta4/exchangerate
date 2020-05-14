/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.5-10.1.38-MariaDB : Database - sonimexchangerate
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`sonimexchangerate` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `sonimexchangerate`;

/*Table structure for table `country` */

DROP TABLE IF EXISTS `country`;

CREATE TABLE `country` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `iso` char(2) NOT NULL,
  `name` varchar(80) NOT NULL,
  `nicename` varchar(80) NOT NULL,
  `iso3` char(3) DEFAULT NULL,
  `numcode` smallint(6) DEFAULT NULL,
  `phonecode` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=240 DEFAULT CHARSET=latin1;

/*Data for the table `country` */

insert  into `country`(`id`,`iso`,`name`,`nicename`,`iso3`,`numcode`,`phonecode`) values (1,'AF','AFGHANISTAN','Afghanistan','AFG',4,93),(2,'AL','ALBANIA','Albania','ALB',8,355),(3,'DZ','ALGERIA','Algeria','DZA',12,213),(4,'AS','AMERICAN SAMOA','American Samoa','ASM',16,1684),(5,'AD','ANDORRA','Andorra','AND',20,376),(6,'AO','ANGOLA','Angola','AGO',24,244),(7,'AI','ANGUILLA','Anguilla','AIA',660,1264),(8,'AQ','ANTARCTICA','Antarctica',NULL,NULL,0),(9,'AG','ANTIGUA AND BARBUDA','Antigua and Barbuda','ATG',28,1268),(10,'AR','ARGENTINA','Argentina','ARG',32,54),(11,'AM','ARMENIA','Armenia','ARM',51,374),(12,'AW','ARUBA','Aruba','ABW',533,297),(13,'AU','AUSTRALIA','Australia','AUS',36,61),(14,'AT','AUSTRIA','Austria','AUT',40,43),(15,'AZ','AZERBAIJAN','Azerbaijan','AZE',31,994),(16,'BS','BAHAMAS','Bahamas','BHS',44,1242),(17,'BH','BAHRAIN','Bahrain','BHR',48,973),(18,'BD','BANGLADESH','Bangladesh','BGD',50,880),(19,'BB','BARBADOS','Barbados','BRB',52,1246),(20,'BY','BELARUS','Belarus','BLR',112,375),(21,'BE','BELGIUM','Belgium','BEL',56,32),(22,'BZ','BELIZE','Belize','BLZ',84,501),(23,'BJ','BENIN','Benin','BEN',204,229),(24,'BM','BERMUDA','Bermuda','BMU',60,1441),(25,'BT','BHUTAN','Bhutan','BTN',64,975),(26,'BO','BOLIVIA','Bolivia','BOL',68,591),(27,'BA','BOSNIA AND HERZEGOVINA','Bosnia and Herzegovina','BIH',70,387),(28,'BW','BOTSWANA','Botswana','BWA',72,267),(29,'BV','BOUVET ISLAND','Bouvet Island',NULL,NULL,0),(30,'BR','BRAZIL','Brazil','BRA',76,55),(31,'IO','BRITISH INDIAN OCEAN TERRITORY','British Indian Ocean Territory',NULL,NULL,246),(32,'BN','BRUNEI DARUSSALAM','Brunei Darussalam','BRN',96,673),(33,'BG','BULGARIA','Bulgaria','BGR',100,359),(34,'BF','BURKINA FASO','Burkina Faso','BFA',854,226),(35,'BI','BURUNDI','Burundi','BDI',108,257),(36,'KH','CAMBODIA','Cambodia','KHM',116,855),(37,'CM','CAMEROON','Cameroon','CMR',120,237),(38,'CA','CANADA','Canada','CAN',124,1),(39,'CV','CAPE VERDE','Cape Verde','CPV',132,238),(40,'KY','CAYMAN ISLANDS','Cayman Islands','CYM',136,1345),(41,'CF','CENTRAL AFRICAN REPUBLIC','Central African Republic','CAF',140,236),(42,'TD','CHAD','Chad','TCD',148,235),(43,'CL','CHILE','Chile','CHL',152,56),(44,'CN','CHINA','China','CHN',156,86),(45,'CX','CHRISTMAS ISLAND','Christmas Island',NULL,NULL,61),(46,'CC','COCOS (KEELING) ISLANDS','Cocos (Keeling) Islands',NULL,NULL,672),(47,'CO','COLOMBIA','Colombia','COL',170,57),(48,'KM','COMOROS','Comoros','COM',174,269),(49,'CG','CONGO','Congo','COG',178,242),(50,'CD','CONGO, THE DEMOCRATIC REPUBLIC OF THE','Congo, the Democratic Republic of the','COD',180,242),(51,'CK','COOK ISLANDS','Cook Islands','COK',184,682),(52,'CR','COSTA RICA','Costa Rica','CRI',188,506),(53,'CI','COTE D\'IVOIRE','Cote D\'Ivoire','CIV',384,225),(54,'HR','CROATIA','Croatia','HRV',191,385),(55,'CU','CUBA','Cuba','CUB',192,53),(56,'CY','CYPRUS','Cyprus','CYP',196,357),(57,'CZ','CZECH REPUBLIC','Czech Republic','CZE',203,420),(58,'DK','DENMARK','Denmark','DNK',208,45),(59,'DJ','DJIBOUTI','Djibouti','DJI',262,253),(60,'DM','DOMINICA','Dominica','DMA',212,1767),(61,'DO','DOMINICAN REPUBLIC','Dominican Republic','DOM',214,1809),(62,'EC','ECUADOR','Ecuador','ECU',218,593),(63,'EG','EGYPT','Egypt','EGY',818,20),(64,'SV','EL SALVADOR','El Salvador','SLV',222,503),(65,'GQ','EQUATORIAL GUINEA','Equatorial Guinea','GNQ',226,240),(66,'ER','ERITREA','Eritrea','ERI',232,291),(67,'EE','ESTONIA','Estonia','EST',233,372),(68,'ET','ETHIOPIA','Ethiopia','ETH',231,251),(69,'FK','FALKLAND ISLANDS (MALVINAS)','Falkland Islands (Malvinas)','FLK',238,500),(70,'FO','FAROE ISLANDS','Faroe Islands','FRO',234,298),(71,'FJ','FIJI','Fiji','FJI',242,679),(72,'FI','FINLAND','Finland','FIN',246,358),(73,'FR','FRANCE','France','FRA',250,33),(74,'GF','FRENCH GUIANA','French Guiana','GUF',254,594),(75,'PF','FRENCH POLYNESIA','French Polynesia','PYF',258,689),(76,'TF','FRENCH SOUTHERN TERRITORIES','French Southern Territories',NULL,NULL,0),(77,'GA','GABON','Gabon','GAB',266,241),(78,'GM','GAMBIA','Gambia','GMB',270,220),(79,'GE','GEORGIA','Georgia','GEO',268,995),(80,'DE','GERMANY','Germany','DEU',276,49),(81,'GH','GHANA','Ghana','GHA',288,233),(82,'GI','GIBRALTAR','Gibraltar','GIB',292,350),(83,'GR','GREECE','Greece','GRC',300,30),(84,'GL','GREENLAND','Greenland','GRL',304,299),(85,'GD','GRENADA','Grenada','GRD',308,1473),(86,'GP','GUADELOUPE','Guadeloupe','GLP',312,590),(87,'GU','GUAM','Guam','GUM',316,1671),(88,'GT','GUATEMALA','Guatemala','GTM',320,502),(89,'GN','GUINEA','Guinea','GIN',324,224),(90,'GW','GUINEA-BISSAU','Guinea-Bissau','GNB',624,245),(91,'GY','GUYANA','Guyana','GUY',328,592),(92,'HT','HAITI','Haiti','HTI',332,509),(93,'HM','HEARD ISLAND AND MCDONALD ISLANDS','Heard Island and Mcdonald Islands',NULL,NULL,0),(94,'VA','HOLY SEE (VATICAN CITY STATE)','Holy See (Vatican City State)','VAT',336,39),(95,'HN','HONDURAS','Honduras','HND',340,504),(96,'HK','HONG KONG','Hong Kong','HKG',344,852),(97,'HU','HUNGARY','Hungary','HUN',348,36),(98,'IS','ICELAND','Iceland','ISL',352,354),(99,'IN','INDIA','India','IND',356,91),(100,'ID','INDONESIA','Indonesia','IDN',360,62),(101,'IR','IRAN, ISLAMIC REPUBLIC OF','Iran, Islamic Republic of','IRN',364,98),(102,'IQ','IRAQ','Iraq','IRQ',368,964),(103,'IE','IRELAND','Ireland','IRL',372,353),(104,'IL','ISRAEL','Israel','ISR',376,972),(105,'IT','ITALY','Italy','ITA',380,39),(106,'JM','JAMAICA','Jamaica','JAM',388,1876),(107,'JP','JAPAN','Japan','JPN',392,81),(108,'JO','JORDAN','Jordan','JOR',400,962),(109,'KZ','KAZAKHSTAN','Kazakhstan','KAZ',398,7),(110,'KE','KENYA','Kenya','KEN',404,254),(111,'KI','KIRIBATI','Kiribati','KIR',296,686),(112,'KP','KOREA, DEMOCRATIC PEOPLE\'S REPUBLIC OF','Korea, Democratic People\'s Republic of','PRK',408,850),(113,'KR','KOREA, REPUBLIC OF','Korea, Republic of','KOR',410,82),(114,'KW','KUWAIT','Kuwait','KWT',414,965),(115,'KG','KYRGYZSTAN','Kyrgyzstan','KGZ',417,996),(116,'LA','LAO PEOPLE\'S DEMOCRATIC REPUBLIC','Lao People\'s Democratic Republic','LAO',418,856),(117,'LV','LATVIA','Latvia','LVA',428,371),(118,'LB','LEBANON','Lebanon','LBN',422,961),(119,'LS','LESOTHO','Lesotho','LSO',426,266),(120,'LR','LIBERIA','Liberia','LBR',430,231),(121,'LY','LIBYAN ARAB JAMAHIRIYA','Libyan Arab Jamahiriya','LBY',434,218),(122,'LI','LIECHTENSTEIN','Liechtenstein','LIE',438,423),(123,'LT','LITHUANIA','Lithuania','LTU',440,370),(124,'LU','LUXEMBOURG','Luxembourg','LUX',442,352),(125,'MO','MACAO','Macao','MAC',446,853),(126,'MK','MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF','Macedonia, the Former Yugoslav Republic of','MKD',807,389),(127,'MG','MADAGASCAR','Madagascar','MDG',450,261),(128,'MW','MALAWI','Malawi','MWI',454,265),(129,'MY','MALAYSIA','Malaysia','MYS',458,60),(130,'MV','MALDIVES','Maldives','MDV',462,960),(131,'ML','MALI','Mali','MLI',466,223),(132,'MT','MALTA','Malta','MLT',470,356),(133,'MH','MARSHALL ISLANDS','Marshall Islands','MHL',584,692),(134,'MQ','MARTINIQUE','Martinique','MTQ',474,596),(135,'MR','MAURITANIA','Mauritania','MRT',478,222),(136,'MU','MAURITIUS','Mauritius','MUS',480,230),(137,'YT','MAYOTTE','Mayotte',NULL,NULL,269),(138,'MX','MEXICO','Mexico','MEX',484,52),(139,'FM','MICRONESIA, FEDERATED STATES OF','Micronesia, Federated States of','FSM',583,691),(140,'MD','MOLDOVA, REPUBLIC OF','Moldova, Republic of','MDA',498,373),(141,'MC','MONACO','Monaco','MCO',492,377),(142,'MN','MONGOLIA','Mongolia','MNG',496,976),(143,'MS','MONTSERRAT','Montserrat','MSR',500,1664),(144,'MA','MOROCCO','Morocco','MAR',504,212),(145,'MZ','MOZAMBIQUE','Mozambique','MOZ',508,258),(146,'MM','MYANMAR','Myanmar','MMR',104,95),(147,'NA','NAMIBIA','Namibia','NAM',516,264),(148,'NR','NAURU','Nauru','NRU',520,674),(149,'NP','NEPAL','Nepal','NPL',524,977),(150,'NL','NETHERLANDS','Netherlands','NLD',528,31),(151,'AN','NETHERLANDS ANTILLES','Netherlands Antilles','ANT',530,599),(152,'NC','NEW CALEDONIA','New Caledonia','NCL',540,687),(153,'NZ','NEW ZEALAND','New Zealand','NZL',554,64),(154,'NI','NICARAGUA','Nicaragua','NIC',558,505),(155,'NE','NIGER','Niger','NER',562,227),(156,'NG','NIGERIA','Nigeria','NGA',566,234),(157,'NU','NIUE','Niue','NIU',570,683),(158,'NF','NORFOLK ISLAND','Norfolk Island','NFK',574,672),(159,'MP','NORTHERN MARIANA ISLANDS','Northern Mariana Islands','MNP',580,1670),(160,'NO','NORWAY','Norway','NOR',578,47),(161,'OM','OMAN','Oman','OMN',512,968),(162,'PK','PAKISTAN','Pakistan','PAK',586,92),(163,'PW','PALAU','Palau','PLW',585,680),(164,'PS','PALESTINIAN TERRITORY, OCCUPIED','Palestinian Territory, Occupied',NULL,NULL,970),(165,'PA','PANAMA','Panama','PAN',591,507),(166,'PG','PAPUA NEW GUINEA','Papua New Guinea','PNG',598,675),(167,'PY','PARAGUAY','Paraguay','PRY',600,595),(168,'PE','PERU','Peru','PER',604,51),(169,'PH','PHILIPPINES','Philippines','PHL',608,63),(170,'PN','PITCAIRN','Pitcairn','PCN',612,0),(171,'PL','POLAND','Poland','POL',616,48),(172,'PT','PORTUGAL','Portugal','PRT',620,351),(173,'PR','PUERTO RICO','Puerto Rico','PRI',630,1787),(174,'QA','QATAR','Qatar','QAT',634,974),(175,'RE','REUNION','Reunion','REU',638,262),(176,'RO','ROMANIA','Romania','ROM',642,40),(177,'RU','RUSSIAN FEDERATION','Russian Federation','RUS',643,70),(178,'RW','RWANDA','Rwanda','RWA',646,250),(179,'SH','SAINT HELENA','Saint Helena','SHN',654,290),(180,'KN','SAINT KITTS AND NEVIS','Saint Kitts and Nevis','KNA',659,1869),(181,'LC','SAINT LUCIA','Saint Lucia','LCA',662,1758),(182,'PM','SAINT PIERRE AND MIQUELON','Saint Pierre and Miquelon','SPM',666,508),(183,'VC','SAINT VINCENT AND THE GRENADINES','Saint Vincent and the Grenadines','VCT',670,1784),(184,'WS','SAMOA','Samoa','WSM',882,684),(185,'SM','SAN MARINO','San Marino','SMR',674,378),(186,'ST','SAO TOME AND PRINCIPE','Sao Tome and Principe','STP',678,239),(187,'SA','SAUDI ARABIA','Saudi Arabia','SAU',682,966),(188,'SN','SENEGAL','Senegal','SEN',686,221),(189,'CS','SERBIA AND MONTENEGRO','Serbia and Montenegro',NULL,NULL,381),(190,'SC','SEYCHELLES','Seychelles','SYC',690,248),(191,'SL','SIERRA LEONE','Sierra Leone','SLE',694,232),(192,'SG','SINGAPORE','Singapore','SGP',702,65),(193,'SK','SLOVAKIA','Slovakia','SVK',703,421),(194,'SI','SLOVENIA','Slovenia','SVN',705,386),(195,'SB','SOLOMON ISLANDS','Solomon Islands','SLB',90,677),(196,'SO','SOMALIA','Somalia','SOM',706,252),(197,'ZA','SOUTH AFRICA','South Africa','ZAF',710,27),(198,'GS','SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS','South Georgia and the South Sandwich Islands',NULL,NULL,0),(199,'ES','SPAIN','Spain','ESP',724,34),(200,'LK','SRI LANKA','Sri Lanka','LKA',144,94),(201,'SD','SUDAN','Sudan','SDN',736,249),(202,'SR','SURINAME','Suriname','SUR',740,597),(203,'SJ','SVALBARD AND JAN MAYEN','Svalbard and Jan Mayen','SJM',744,47),(204,'SZ','SWAZILAND','Swaziland','SWZ',748,268),(205,'SE','SWEDEN','Sweden','SWE',752,46),(206,'CH','SWITZERLAND','Switzerland','CHE',756,41),(207,'SY','SYRIAN ARAB REPUBLIC','Syrian Arab Republic','SYR',760,963),(208,'TW','TAIWAN, PROVINCE OF CHINA','Taiwan, Province of China','TWN',158,886),(209,'TJ','TAJIKISTAN','Tajikistan','TJK',762,992),(210,'TZ','TANZANIA, UNITED REPUBLIC OF','Tanzania, United Republic of','TZA',834,255),(211,'TH','THAILAND','Thailand','THA',764,66),(212,'TL','TIMOR-LESTE','Timor-Leste',NULL,NULL,670),(213,'TG','TOGO','Togo','TGO',768,228),(214,'TK','TOKELAU','Tokelau','TKL',772,690),(215,'TO','TONGA','Tonga','TON',776,676),(216,'TT','TRINIDAD AND TOBAGO','Trinidad and Tobago','TTO',780,1868),(217,'TN','TUNISIA','Tunisia','TUN',788,216),(218,'TR','TURKEY','Turkey','TUR',792,90),(219,'TM','TURKMENISTAN','Turkmenistan','TKM',795,7370),(220,'TC','TURKS AND CAICOS ISLANDS','Turks and Caicos Islands','TCA',796,1649),(221,'TV','TUVALU','Tuvalu','TUV',798,688),(222,'UG','UGANDA','Uganda','UGA',800,256),(223,'UA','UKRAINE','Ukraine','UKR',804,380),(224,'AE','UNITED ARAB EMIRATES','United Arab Emirates','ARE',784,971),(225,'GB','UNITED KINGDOM','United Kingdom','GBR',826,44),(226,'US','UNITED STATES','United States','USA',840,1),(227,'UM','UNITED STATES MINOR OUTLYING ISLANDS','United States Minor Outlying Islands',NULL,NULL,1),(228,'UY','URUGUAY','Uruguay','URY',858,598),(229,'UZ','UZBEKISTAN','Uzbekistan','UZB',860,998),(230,'VU','VANUATU','Vanuatu','VUT',548,678),(231,'VE','VENEZUELA','Venezuela','VEN',862,58),(232,'VN','VIET NAM','Viet Nam','VNM',704,84),(233,'VG','VIRGIN ISLANDS, BRITISH','Virgin Islands, British','VGB',92,1284),(234,'VI','VIRGIN ISLANDS, U.S.','Virgin Islands, U.s.','VIR',850,1340),(235,'WF','WALLIS AND FUTUNA','Wallis and Futuna','WLF',876,681),(236,'EH','WESTERN SAHARA','Western Sahara','ESH',732,212),(237,'YE','YEMEN','Yemen','YEM',887,967),(238,'ZM','ZAMBIA','Zambia','ZMB',894,260),(239,'ZW','ZIMBABWE','Zimbabwe','ZWE',716,263);

/*Table structure for table `currencies` */

DROP TABLE IF EXISTS `currencies`;

CREATE TABLE `currencies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `country` varchar(100) DEFAULT NULL,
  `currency` varchar(100) DEFAULT NULL,
  `code` varchar(25) DEFAULT NULL,
  `symbol` varchar(25) DEFAULT NULL,
  `thousand_separator` varchar(10) DEFAULT NULL,
  `decimal_separator` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=132 DEFAULT CHARSET=utf8;

/*Data for the table `currencies` */

insert  into `currencies`(`id`,`country`,`currency`,`code`,`symbol`,`thousand_separator`,`decimal_separator`) values (1,'Albania','Leke','ALL','Lek',',','.'),(2,'America','Dollars','USD','$',',','.'),(3,'Afghanistan','Afghanis','AF','؋',',','.'),(4,'Argentina','Pesos','ARS','$',',','.'),(5,'Aruba','Guilders','AWG','ƒ',',','.'),(6,'Australia','Dollars','AUD','$',',','.'),(7,'Azerbaijan','New Manats','AZ','ман',',','.'),(8,'Bahamas','Dollars','BSD','$',',','.'),(9,'Barbados','Dollars','BBD','$',',','.'),(10,'Belarus','Rubles','BYR','p.',',','.'),(11,'Belgium','Euro','EUR','€',',','.'),(12,'Beliz','Dollars','BZD','BZ$',',','.'),(13,'Bermuda','Dollars','BMD','$',',','.'),(14,'Bolivia','Bolivianos','BOB','$b',',','.'),(15,'Bosnia and Herzegovina','Convertible Marka','BAM','KM',',','.'),(16,'Botswana','Pula\'s','BWP','P',',','.'),(17,'Bulgaria','Leva','BG','лв',',','.'),(18,'Brazil','Reais','BRL','R$',',','.'),(19,'Britain (United Kingdom)','Pounds','GBP','£',',','.'),(20,'Brunei Darussalam','Dollars','BND','$',',','.'),(21,'Cambodia','Riels','KHR','៛',',','.'),(22,'Canada','Dollars','CAD','$',',','.'),(23,'Cayman Islands','Dollars','KYD','$',',','.'),(24,'Chile','Pesos','CLP','$',',','.'),(25,'China','Yuan Renminbi','CNY','¥',',','.'),(26,'Colombia','Pesos','COP','$',',','.'),(27,'Costa Rica','Colón','CRC','₡',',','.'),(28,'Croatia','Kuna','HRK','kn',',','.'),(29,'Cuba','Pesos','CUP','₱',',','.'),(30,'Cyprus','Euro','EUR','€',',','.'),(31,'Czech Republic','Koruny','CZK','Kč',',','.'),(32,'Denmark','Kroner','DKK','kr',',','.'),(33,'Dominican Republic','Pesos','DOP ','RD$',',','.'),(34,'East Caribbean','Dollars','XCD','$',',','.'),(35,'Egypt','Pounds','EGP','£',',','.'),(36,'El Salvador','Colones','SVC','$',',','.'),(37,'England (United Kingdom)','Pounds','GBP','£',',','.'),(38,'Euro','Euro','EUR','€',',','.'),(39,'Falkland Islands','Pounds','FKP','£',',','.'),(40,'Fiji','Dollars','FJD','$',',','.'),(41,'France','Euro','EUR','€',',','.'),(42,'Ghana','Cedis','GHC','¢',',','.'),(43,'Gibraltar','Pounds','GIP','£',',','.'),(44,'Greece','Euro','EUR','€',',','.'),(45,'Guatemala','Quetzales','GTQ','Q',',','.'),(46,'Guernsey','Pounds','GGP','£',',','.'),(47,'Guyana','Dollars','GYD','$',',','.'),(48,'Holland (Netherlands)','Euro','EUR','€',',','.'),(49,'Honduras','Lempiras','HNL','L',',','.'),(50,'Hong Kong','Dollars','HKD','$',',','.'),(51,'Hungary','Forint','HUF','Ft',',','.'),(52,'Iceland','Kronur','ISK','kr',',','.'),(53,'India','Rupees','INR','Rp',',','.'),(54,'Indonesia','Rupiahs','IDR','Rp',',','.'),(55,'Iran','Rials','IRR','﷼',',','.'),(56,'Ireland','Euro','EUR','€',',','.'),(57,'Isle of Man','Pounds','IMP','£',',','.'),(58,'Israel','New Shekels','ILS','₪',',','.'),(59,'Italy','Euro','EUR','€',',','.'),(60,'Jamaica','Dollars','JMD','J$',',','.'),(61,'Japan','Yen','JPY','¥',',','.'),(62,'Jersey','Pounds','JEP','£',',','.'),(63,'Kazakhstan','Tenge','KZT','лв',',','.'),(64,'Korea (North)','Won','KPW','₩',',','.'),(65,'Korea (South)','Won','KRW','₩',',','.'),(66,'Kyrgyzstan','Soms','KGS','лв',',','.'),(67,'Laos','Kips','LAK','₭',',','.'),(68,'Latvia','Lati','LVL','Ls',',','.'),(69,'Lebanon','Pounds','LBP','£',',','.'),(70,'Liberia','Dollars','LRD','$',',','.'),(71,'Liechtenstein','Switzerland Francs','CHF','CHF',',','.'),(72,'Lithuania','Litai','LTL','Lt',',','.'),(73,'Luxembourg','Euro','EUR','€',',','.'),(74,'Macedonia','Denars','MKD','ден',',','.'),(75,'Malaysia','Ringgits','MYR','RM',',','.'),(76,'Malta','Euro','EUR','€',',','.'),(77,'Mauritius','Rupees','MUR','₨',',','.'),(78,'Mexico','Pesos','MX','$',',','.'),(79,'Mongolia','Tugriks','MNT','₮',',','.'),(80,'Mozambique','Meticais','MZ','MT',',','.'),(81,'Namibia','Dollars','NAD','$',',','.'),(82,'Nepal','Rupees','NPR','₨',',','.'),(83,'Netherlands Antilles','Guilders','ANG','ƒ',',','.'),(84,'Netherlands','Euro','EUR','€',',','.'),(85,'New Zealand','Dollars','NZD','$',',','.'),(86,'Nicaragua','Cordobas','NIO','C$',',','.'),(87,'Nigeria','Nairas','NG','₦',',','.'),(88,'North Korea','Won','KPW','₩',',','.'),(89,'Norway','Krone','NOK','kr',',','.'),(90,'Oman','Rials','OMR','﷼',',','.'),(91,'Pakistan','Rupees','PKR','₨',',','.'),(92,'Panama','Balboa','PAB','B/.',',','.'),(93,'Paraguay','Guarani','PYG','Gs',',','.'),(94,'Peru','Nuevos Soles','PE','S/.',',','.'),(95,'Philippines','Pesos','PHP','Php',',','.'),(96,'Poland','Zlotych','PL','zł',',','.'),(97,'Qatar','Rials','QAR','﷼',',','.'),(98,'Romania','New Lei','RO','lei',',','.'),(99,'Russia','Rubles','RUB','руб',',','.'),(100,'Saint Helena','Pounds','SHP','£',',','.'),(101,'Saudi Arabia','Riyals','SAR','﷼',',','.'),(102,'Serbia','Dinars','RSD','Дин.',',','.'),(103,'Seychelles','Rupees','SCR','₨',',','.'),(104,'Singapore','Dollars','SGD','$',',','.'),(105,'Slovenia','Euro','EUR','€',',','.'),(106,'Solomon Islands','Dollars','SBD','$',',','.'),(107,'Somalia','Shillings','SOS','S',',','.'),(108,'South Africa','Rand','ZAR','R',',','.'),(109,'South Korea','Won','KRW','₩',',','.'),(110,'Spain','Euro','EUR','€',',','.'),(111,'Sri Lanka','Rupees','LKR','₨',',','.'),(112,'Sweden','Kronor','SEK','kr',',','.'),(113,'Switzerland','Francs','CHF','CHF',',','.'),(114,'Suriname','Dollars','SRD','$',',','.'),(115,'Syria','Pounds','SYP','£',',','.'),(116,'Taiwan','New Dollars','TWD','NT$',',','.'),(117,'Thailand','Baht','THB','฿',',','.'),(118,'Trinidad and Tobago','Dollars','TTD','TT$',',','.'),(119,'Turkey','Lira','TRY','TL',',','.'),(120,'Turkey','Liras','TRL','£',',','.'),(121,'Tuvalu','Dollars','TVD','$',',','.'),(122,'Ukraine','Hryvnia','UAH','₴',',','.'),(123,'United Kingdom','Pounds','GBP','£',',','.'),(124,'United States of America','Dollars','USD','$',',','.'),(125,'Uruguay','Pesos','UYU','$U',',','.'),(126,'Uzbekistan','Sums','UZS','лв',',','.'),(127,'Vatican City','Euro','EUR','€',',','.'),(128,'Venezuela','Bolivares Fuertes','VEF','Bs',',','.'),(129,'Vietnam','Dong','VND','₫',',','.'),(130,'Yemen','Rials','YER','﷼',',','.'),(131,'Zimbabwe','Zimbabwe Dollars','ZWD','Z$',',','.');

/*Table structure for table `currency_rates` */

DROP TABLE IF EXISTS `currency_rates`;

CREATE TABLE `currency_rates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `from_country` varchar(151) DEFAULT NULL,
  `to_country` varchar(151) DEFAULT NULL,
  `from_currency` varchar(50) DEFAULT NULL,
  `to_currency` varchar(50) DEFAULT NULL,
  `rate` decimal(10,2) DEFAULT NULL,
  `created_date` timestamp NULL DEFAULT NULL,
  `updated_date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `currency_rates` */

insert  into `currency_rates`(`id`,`from_country`,`to_country`,`from_currency`,`to_currency`,`rate`,`created_date`,`updated_date`) values (2,'Australia','India','AUD','INR',48.58,'2020-05-12 11:21:14','2020-05-12 11:21:14'),(3,'United States of America','India','USD','INR',76.10,'2020-05-12 11:21:17','2020-05-12 11:21:17');

/*Table structure for table `favorites` */

DROP TABLE IF EXISTS `favorites`;

CREATE TABLE `favorites` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `from_country` varchar(191) DEFAULT NULL,
  `to_country` varchar(191) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `favorites` */

insert  into `favorites`(`id`,`from_country`,`to_country`,`user_id`,`created_date`,`updated_date`) values (1,'United States of America','India',72,'2020-05-13 16:06:39','0000-00-00 00:00:00'),(2,'India','United States of America',72,'2020-05-13 21:05:23','0000-00-00 00:00:00'),(3,'Australia','India',72,'2020-05-14 16:22:13','0000-00-00 00:00:00');

/*Table structure for table `languages` */

DROP TABLE IF EXISTS `languages`;

CREATE TABLE `languages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `foldername` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `languagename` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `flag_image` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

/*Data for the table `languages` */

insert  into `languages`(`id`,`foldername`,`languagename`,`description`,`flag_image`,`created_at`,`updated_at`) values (1,'en','English','English','america.png','2016-08-15 15:56:26','2016-08-15 15:56:26'),(22,'bn','bengali','Bangla','1475429828.png','2016-10-02 17:07:08','2016-10-02 17:07:08');

/*Table structure for table `messages` */

DROP TABLE IF EXISTS `messages`;

CREATE TABLE `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `receiver_id` int(11) unsigned NOT NULL,
  `sender_id` int(11) unsigned NOT NULL,
  `replay_id` int(11) unsigned NOT NULL,
  `subject` text CHARACTER SET utf8,
  `description` text CHARACTER SET utf8,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `uid` (`receiver_id`),
  KEY `FK_message_user_2` (`sender_id`),
  CONSTRAINT `FK_message_users` FOREIGN KEY (`receiver_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_message_users_2` FOREIGN KEY (`sender_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

/*Data for the table `messages` */

insert  into `messages`(`id`,`receiver_id`,`sender_id`,`replay_id`,`subject`,`description`,`created_at`,`updated_at`,`status`) values (1,68,61,0,'dsds','ddsd','2016-12-24 15:33:59','2016-12-24 15:33:59',0),(2,61,68,0,'trtrt','trtrtrt','2016-12-28 14:27:29','2016-12-28 14:27:29',0),(3,68,68,0,'trtrt','trtrtrt','2016-12-28 14:27:29','2016-12-28 14:27:29',1);

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`migration`,`batch`) values ('2014_10_12_000000_create_users_table',1),('2014_10_12_100000_create_password_resets_table',1),('2015_01_15_105324_create_roles_table',1),('2015_01_15_114412_create_role_user_table',1),('2015_01_26_115212_create_permissions_table',1),('2015_01_26_115523_create_permission_role_table',1),('2015_02_09_132439_create_permission_user_table',1),('2016_10_12_45785540_create_country_table',1);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `password_resets` */

insert  into `password_resets`(`email`,`token`,`created_at`) values ('prabir.d06@gmail.com','$2y$10$.FvJDApk.ttCR1RmqCKo1.cRoZh6jGReZrCTdULei8kTHHykuytz2','2020-05-13 15:32:54');

/*Table structure for table `permission_role` */

DROP TABLE IF EXISTS `permission_role`;

CREATE TABLE `permission_role` (
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `permission_role_role_id_foreign` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `permission_role` */

insert  into `permission_role`(`permission_id`,`role_id`) values (1,1),(2,1),(3,1),(4,1),(5,1),(7,1),(7,2),(8,1),(9,2);

/*Table structure for table `permissions` */

DROP TABLE IF EXISTS `permissions`;

CREATE TABLE `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `removable` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `permissions` */

insert  into `permissions`(`id`,`name`,`display_name`,`description`,`removable`,`created_at`,`updated_at`) values (1,'users.manage','Manage Users','Manage users and their sessions.',0,'2016-06-18 03:28:04','2016-06-18 03:28:04'),(2,'languages.languages','Language manage','View languages',0,'2016-06-18 03:28:04','2016-09-24 14:58:12'),(3,'roles.manage','Manage Roles','Manage system roles.',0,'2016-06-18 03:28:04','2016-06-18 03:28:04'),(4,'permissions.manage','Manage Permissions','Manage role permissions.',0,'2016-06-18 03:28:04','2016-06-18 03:28:04'),(5,'users.activity','Activity','View users activity',1,'2016-09-24 15:17:25','2016-09-24 15:17:25'),(7,'message.messages','Message','View inbox send message',0,'2016-06-18 03:28:04','2016-09-24 15:01:04'),(8,'settings.general','Settings','Update system settings.',0,'2016-06-18 03:28:04','2016-09-24 15:00:15'),(9,'exchangerate.search','ExchangeRate','User can search exchange rate',1,'2020-01-05 12:28:22','2020-05-12 18:51:42');

/*Table structure for table `role_user` */

DROP TABLE IF EXISTS `role_user`;

CREATE TABLE `role_user` (
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `role_user_role_id_foreign` (`role_id`),
  CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `role_user` */

insert  into `role_user`(`user_id`,`role_id`) values (61,1),(68,2),(72,2);

/*Table structure for table `roles` */

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `removable` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `roles` */

insert  into `roles`(`id`,`name`,`display_name`,`description`,`removable`,`created_at`,`updated_at`) values (1,'Admin','Admin','System administrator.',0,'2016-06-18 03:28:04','2016-06-18 03:28:04'),(2,'User','User','Default system user list.',0,'2016-06-18 03:28:04','2016-10-21 03:03:54');

/*Table structure for table `settings` */

DROP TABLE IF EXISTS `settings`;

CREATE TABLE `settings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `app_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `app_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `app_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `currency` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `remember_me` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `forget_password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `notify_signup` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `re_capcha` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

/*Data for the table `settings` */

insert  into `settings`(`id`,`app_name`,`app_title`,`app_email`,`phone`,`mobile`,`currency`,`remember_me`,`forget_password`,`notify_signup`,`re_capcha`,`logo`,`address`,`created_at`,`updated_at`) values (10,'Exchange Rate','Exchange Rate','support@sonim.com','01875767787','01875767787','$','ON','ON','OFF','OFF','logo.png','Amtali,Barguna','2016-09-02 01:08:54','2016-12-25 13:51:42');

/*Table structure for table `social_accounts` */

DROP TABLE IF EXISTS `social_accounts`;

CREATE TABLE `social_accounts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `provider` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `provider_user_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `social_logins_user_id_foreign` (`user_id`),
  CONSTRAINT `social_accounts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

/*Data for the table `social_accounts` */

/*Table structure for table `social_logins` */

DROP TABLE IF EXISTS `social_logins`;

CREATE TABLE `social_logins` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `provider` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `provider_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `social_logins_user_id_foreign` (`user_id`),
  CONSTRAINT `social_logins_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `social_logins` */

/*Table structure for table `user_activity` */

DROP TABLE IF EXISTS `user_activity`;

CREATE TABLE `user_activity` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `ip_address` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `user_agent` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `user_activity_user_id_foreign` (`user_id`),
  CONSTRAINT `user_activity_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

/*Data for the table `user_activity` */

insert  into `user_activity`(`id`,`description`,`user_id`,`ip_address`,`user_agent`,`created_at`,`updated_at`) values (1,'Permission Updated',61,'::1','Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.88 Safari/537.36','2020-01-05 17:58:22','2020-01-05 17:58:22'),(2,'Permission Updated',61,'::1','Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.88 Safari/537.36','2020-01-05 17:59:37','2020-01-05 17:59:37'),(3,'Roles wise permission Update',61,'::1','Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.88 Safari/537.36','2020-01-05 18:00:19','2020-01-05 18:00:19'),(4,'Change Photo.',72,'::1','Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Safari/537.36','2020-05-12 17:13:59','2020-05-12 17:13:59'),(5,'Change Photo.',72,'::1','Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Safari/537.36','2020-05-12 20:40:08','2020-05-12 20:40:08'),(6,'Change Photo.',72,'::1','Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Safari/537.36','2020-05-12 21:59:40','2020-05-12 21:59:40'),(7,'Change Photo.',72,'::1','Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Safari/537.36','2020-05-12 22:02:46','2020-05-12 22:02:46'),(8,'Change Photo.',72,'::1','Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Safari/537.36','2020-05-12 22:05:29','2020-05-12 22:05:29'),(9,'Change Document Image.',72,'::1','Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Safari/537.36','2020-05-12 22:24:07','2020-05-12 22:24:07'),(10,'Permission Updated',61,'::1','Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:76.0) Gecko/20100101 Firefox/76.0','2020-05-13 00:21:42','2020-05-13 00:21:42'),(11,'User Updated.',72,'::1','Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Safari/537.36','2020-05-13 21:13:33','2020-05-13 21:13:33'),(12,'User Updated.',72,'::1','Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Safari/537.36','2020-05-14 16:24:15','2020-05-14 16:24:15'),(13,'User Updated.',72,'::1','Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Safari/537.36','2020-05-14 16:24:30','2020-05-14 16:24:30'),(14,'Change Document Image.',72,'::1','Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Safari/537.36','2020-05-14 16:25:38','2020-05-14 16:25:38'),(15,'Change Photo.',72,'::1','Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Safari/537.36','2020-05-14 16:26:01','2020-05-14 16:26:01');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_of_birth` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `google` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `twitter` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `linkedin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `skype` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dribbble` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `document_img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_username_unique` (`username`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`first_name`,`last_name`,`username`,`email`,`password`,`address`,`phone`,`country`,`date_of_birth`,`role`,`status`,`gender`,`image`,`google`,`facebook`,`twitter`,`linkedin`,`skype`,`dribbble`,`remember_token`,`created_at`,`updated_at`,`document_img`) values (61,'Admin','123','admin123','admin@admin.com','$2y$10$q6LD3AumuSsQJv8dSfCTZe.R/1vqaxd2DBT6dXzsmgoHllg0VjlJ6','Test','admin@farazisoft.com','Bangladesh','2015-01-28','Admin','Active','Male','1480345486.png','https://www.google.com/','https://www.facebook.com/','https://twitter.com/','https://www.linkedin.com/','jewel_farazi','https://dribbble.com/','YQGSgdtTdz639Vd124jJDBmCOwyVZywuaQfF22sg0I8WkjdV2JEluHjVG1Dn','2016-10-22 17:33:26','2016-12-28 14:53:16',''),(68,'user','123','user123','user@user.com','$2y$10$NhdbCkl2Ir4K.gPkOf9ICegZw72LRkF5mTRiizpkVC6i.cx4cgCge','dsdd','user@farazisoft.com','Afghanistan','2016-09-28','User','Active','Male','1482937747.png','https://www.google.com/','https://www.facebook.com/','https://twitter.com/','https://www.linkedin.com/','jewel_farazi','https://dribbble.com/','N3xeIa0PQgD89z7l6Qd0pszo0QzCelhGBRY1JViqYWbGzcZJnZs6CnXxCf9D','2016-10-22 17:33:26','2016-12-28 14:44:45',''),(72,'demoUser','test','demoUser','prabir.d06@gmail.com','$2y$10$q6LD3AumuSsQJv8dSfCTZe.R/1vqaxd2DBT6dXzsmgoHllg0VjlJ6','Marathalli','908643333','India','02/06/1990','User','Active','Female','1589453761.png','','','','','','','uZf3lOn1zifiCRzWKzCRAqRdLfGHdMFcfm6Zwr3OjQSQUtqVUllcpBMpPeqH','2020-05-12 11:21:12','2020-05-14 10:56:01','image/demoUser/JKre2opz3qwGUF4Fm6Vr.jpg');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
