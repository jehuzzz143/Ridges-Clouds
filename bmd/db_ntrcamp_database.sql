

CREATE TABLE `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `appID` varchar(500) NOT NULL,
  `title` text DEFAULT NULL,
  `start_event` datetime NOT NULL,
  `end_event` datetime NOT NULL,
  `color` varchar(191) DEFAULT NULL,
  `text_color` varchar(191) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=200 DEFAULT CHARSET=utf8mb4;

INSERT INTO events VALUES("174","182","Bryan, Dollentas | Daytour | 1 | Pending","2021-08-07 07:08:00","2021-08-07 10:08:00","#000000","#FFFFFF");
INSERT INTO events VALUES("175","176","Bryan, Dollentas | Overnight |  || C1 ","2021-08-04 14:00:00","2021-08-06 12:00:00","#000000","#FFFFFF");
INSERT INTO events VALUES("176","183","Bryan, Dollentas | Daytour | 3 | Pending","2021-09-11 10:09:00","2021-09-11 13:09:00","#000000","#FFFFFF");
INSERT INTO events VALUES("177","184","Bryan, Dollentas | Daytour | 3 | Pending","2021-09-30 10:09:00","2021-09-30 13:09:00","#000000","#FFFFFF");
INSERT INTO events VALUES("178","190","Bryan, Dollentas | Overnight |  || C1  || C2  || C3  || C4  || C5  || C6  || C7  || C8  || C9 ","2021-09-28 14:00:00","2021-09-29 12:00:00","#3498DB","#FDFEFE");
INSERT INTO events VALUES("179","191","Bryan, Dollentas | Overnight  || C1   || Sunrise Breakfast  ||  Veranda ","2021-09-29 14:00:00","2021-09-30 12:00:00","#000000","#FFFFFF");
INSERT INTO events VALUES("180","192","Bryan, Dollentas | Overnight |  || C2 ","2021-09-29 14:00:00","2021-09-30 12:00:00","#3498DB","#FDFEFE");
INSERT INTO events VALUES("181","209","Bryan, Dollentas | Daytour | 2 | Pending","2021-10-21 10:10:00","2021-10-21 13:10:00","#FF5733","white");
INSERT INTO events VALUES("182","210","Bryan, Dollentas | Daytour | 2 | Pending","2021-09-28 07:09:00","2021-09-28 10:09:00","#FF5733","white");
INSERT INTO events VALUES("183","211","Bryan, Dollentas | Daytour | 2 | Pending","2021-09-30 13:09:00","2021-09-30 16:09:00","#FF5733","white");
INSERT INTO events VALUES("184","212","jehu, ombrog | Daytour | 1 | Pending","2021-09-30 10:09:00","2021-09-30 13:09:00","#000000","#FFFFFF");
INSERT INTO events VALUES("185","224","Bryan, Dollentas | Daytour | 2 | Pending","2021-10-06 10:10:00","2021-10-06 13:10:00","#000000","#FFFFFF");
INSERT INTO events VALUES("186","229","jehu, ombrog | Daytour | 1 | Pending","2021-10-12 07:10:00","2021-10-12 10:10:00","#000000","#FFFFFF");
INSERT INTO events VALUES("187","231","jehu, ombrog | Daytour | 1 | Pending","2021-10-10 13:10:00","2021-10-10 16:10:00","#FF5733","white");
INSERT INTO events VALUES("188","223","jehu, ombrog | Daytour | 2 | Pending","2021-10-07 07:10:00","2021-10-07 10:10:00","#FF5733","white");
INSERT INTO events VALUES("189","232","leica, balayanto | Daytour | 2 | Pending","2021-10-11 07:10:00","2021-10-11 10:10:00","#FF5733","white");
INSERT INTO events VALUES("190","233","leica, balayanto | Daytour | 1 | Pending","2021-10-11 07:10:00","2021-10-11 10:10:00","#000000","#FFFFFF");
INSERT INTO events VALUES("191","233","leica, balayanto | Daytour | 1 | Pending","2021-10-11 07:10:00","2021-10-11 10:10:00","#000000","#FFFFFF");
INSERT INTO events VALUES("192","234","leica, balayanto | Overnight |  || C9 ","2021-10-11 14:00:00","2021-10-12 12:00:00","#3498DB","#FDFEFE");
INSERT INTO events VALUES("193","235","leica, balayanto | Daytour | 1 | Pending","2021-10-14 07:10:00","2021-10-14 10:10:00","#FF5733","white");
INSERT INTO events VALUES("194","235","leica, balayanto | Daytour | 1 | Pending","2021-10-14 07:10:00","2021-10-14 10:10:00","#FF5733","white");
INSERT INTO events VALUES("195","235","leica, balayanto | Daytour | 1 | Pending","2021-10-14 07:10:00","2021-10-14 10:10:00","#FF5733","white");
INSERT INTO events VALUES("196","235","leica, balayanto | Daytour | 1 | Pending","2021-10-14 07:10:00","2021-10-14 10:10:00","#FF5733","white");
INSERT INTO events VALUES("197","236","jehu, ombrog | Daytour | 1 | Pending","2021-10-11 07:10:00","2021-10-11 10:10:00","#FF5733","white");
INSERT INTO events VALUES("198","237","jehu, ombrog | Daytour | 1 | Pending","2021-10-11 10:10:00","2021-10-11 13:10:00","#FF5733","white");
INSERT INTO events VALUES("199","238","leica, balayanto | Overnight |  || C2 ","2021-10-11 14:00:00","2021-10-12 12:00:00","#3498DB","#FDFEFE");



CREATE TABLE `pwdreset` (
  `pwdResetID` int(11) NOT NULL,
  `pwdResetEmail` text NOT NULL,
  `pwdResetSelector` text NOT NULL,
  `pwdResetToken` longtext NOT NULL,
  `pwdResetExpires` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO pwdreset VALUES("0","jeombrog@student.fatima.edu.ph","79c708fa51019847","$2y$10$loBvPzOTM8b3DOYe3KXPzOJRBDT4PnvZcmwEipkRyQSvvvLm6p8fu","1632892996");
INSERT INTO pwdreset VALUES("0","kazuto564@gmail.com","fb6ada99c55d093b","$2y$10$a3S.BzC.eZVXq7c.PaRRE./aco3L2vjkQH3asc5yoiiTCqKHPrjL6","1632893115");
INSERT INTO pwdreset VALUES("0","stevenmoran143@gmail.com","9caaf30b4cab93b9","$2y$10$SBS3BhARiyG97MXTi5YWruS66Xhira3YDTkBqkkDpDB0fzhC5R.0a","1632988738");
INSERT INTO pwdreset VALUES("0","jehuzzz143@gmail.com","3070481cda07f7e8","$2y$10$iOG6rzeGTTYdxuCS5XkPNey46BT6yImZqiP9jVWz3v3PNMROmFHXu","1632988748");



CREATE TABLE `tbl_announcement` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `header` varchar(500) NOT NULL,
  `Description` varchar(2000) NOT NULL,
  `start` datetime NOT NULL,
  `endd` datetime NOT NULL,
  `status` varchar(150) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

INSERT INTO tbl_announcement VALUES("11","close","zxczcxz","2021-10-06 14:49:00","2021-12-06 14:49:00","inactive");
INSERT INTO tbl_announcement VALUES("12","!! Updates on RaC operations while on MECQ up to 15October 2021!!   ","Due to inconsistent checkpoint requirements during MECQ, we accept WALK-IN guests who are able to pass thru checkpoints. Guests with APOR IDs or who are Rizal residents are usually allowed. Checkpoint operations are usually  from 7am-3pm along Marilaque Highway, just 5 mins before Ridges and Clouds.
","2021-10-09 18:23:00","2021-12-25 18:23:00","active");
INSERT INTO tbl_announcement VALUES("9","Medical Certification is requiredd","We are happy to announce that we are now allowed to re-open under MGCQ by virtue of the Certificate to Operate granted by the Department of Tourism to our establishment.","2021-09-16 19:04:00","2021-12-28 19:04:00","active");
INSERT INTO tbl_announcement VALUES("10","The camp is closed due to maintenance","The camp willnow having a dining area where we need to close the camp for a month for better service in the future","2021-09-17 19:07:00","2021-12-27 19:07:00","deleted");
INSERT INTO tbl_announcement VALUES("13","SAFETY AND HEALTH PROTOCOLS","• Only 18-65 years old are allowed <BR>
• Pregnant women and persons with comorbities not allowed<BR>
• No face mask No Entry<br>
• Social distancing and wearing of mask are strictly observed<br>
","2021-10-09 18:27:00","2021-12-25 18:27:00","inactive");



CREATE TABLE `tbl_audit` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `UserID` varchar(100) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `Date_edit` date NOT NULL,
  `Name` varchar(100) NOT NULL,
  `type` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=249 DEFAULT CHARSET=utf8mb4;

INSERT INTO tbl_audit VALUES("135","CSTMR22","update review ID: 4 status to disabled","2021-10-06","Cyril, Samonte","");
INSERT INTO tbl_audit VALUES("134","CSTMR22","Posted review of '","2021-10-06","Cyril, Samonte","");
INSERT INTO tbl_audit VALUES("133","CSTMR22","update review ID: 4 status to disabled","2021-10-06","Cyril, Samonte","");
INSERT INTO tbl_audit VALUES("132","CSTMR22","Posted review of '","2021-10-06","Cyril, Samonte","");
INSERT INTO tbl_audit VALUES("131","CSTMR22","update review ID: 5 status to disabled","2021-10-06","Cyril, Samonte","");
INSERT INTO tbl_audit VALUES("130","CSTMR22","Posted review of ","2021-10-06","Cyril, Samonte","");
INSERT INTO tbl_audit VALUES("129","CSTMR22","update review ID: 6 status to disabled","2021-10-06","Cyril, Samonte","");
INSERT INTO tbl_audit VALUES("128","CSTMR22","Posted review of ","2021-10-06","Cyril, Samonte","");
INSERT INTO tbl_audit VALUES("120","CSTMR10","Update  Standard Couple Cabana accomodation Details","2021-10-06","pol, garcia","Information");
INSERT INTO tbl_audit VALUES("119","CSTMR10","update review ID: 5 status to disabled","2021-10-06","pol, garcia","");
INSERT INTO tbl_audit VALUES("118","CSTMR10","update review ID: 7 status to enable","2021-10-06","pol, garcia","");
INSERT INTO tbl_audit VALUES("117","CSTMR10","Generate sales report from: 2021-01-01 to 2021-12-31","2021-10-03","pol, garcia","System");
INSERT INTO tbl_audit VALUES("116","CSTMR10","Generate sales report from: 2021-09-01 to 2021-10-31","2021-10-02","pol, garcia","System");
INSERT INTO tbl_audit VALUES("115","CSTMR10","Generate sales report from: 2021-01-01 to 2021-12-31","2021-10-02","pol, garcia","System");
INSERT INTO tbl_audit VALUES("109","CSTMR10","Delete photo id: 25 ","2021-10-01","pol, garcia","Information");
INSERT INTO tbl_audit VALUES("108","CSTMR10","Added new photo in gallery: ","2021-10-01","pol, garcia","Information");
INSERT INTO tbl_audit VALUES("107","CSTMR10","Update promo code : RNC10","2021-10-01","pol, garcia","Information");
INSERT INTO tbl_audit VALUES("106","CSTMR10","disable promo code : DAY50","2021-10-01","pol, garcia","system");
INSERT INTO tbl_audit VALUES("105","CSTMR10","Create new promo code : PRM30","2021-10-01","pol, garcia","system");
INSERT INTO tbl_audit VALUES("104","CSTMR10","Generate sales report from: 2021-02-01 to 2021-11-31","2021-10-01","pol, garcia","system");
INSERT INTO tbl_audit VALUES("103","CSTMR10","Export Database Copy","2021-10-01","pol, garcia","system");
INSERT INTO tbl_audit VALUES("56","CSTMR10","Decline Booking ID: 198 ","2021-09-22","Bryan, Dollentas","Booking");
INSERT INTO tbl_audit VALUES("57","CSTMR10","Confirm Overnight Booking ID: 190 ","2021-09-22","Bryan, Dollentas","Booking");
INSERT INTO tbl_audit VALUES("58","CSTMR10","Decline Booking ID: 199 ","2021-09-22","Bryan, Dollentas","Booking");
INSERT INTO tbl_audit VALUES("59","CSTMR10","Confirm Overnight Booking ID: 191 ","2021-09-22","Bryan, Dollentas","Booking");
INSERT INTO tbl_audit VALUES("114","CSTMR10","Generate sales report from: 2021-01-01 to 2021-12-31","2021-10-02","pol, garcia","System");
INSERT INTO tbl_audit VALUES("63","CSTMR10","Announce ID: 9 Updated","2021-09-22","pol, garcia","Information");
INSERT INTO tbl_audit VALUES("64","CSTMR10","Delete Announcement ID: 10","2021-09-22","pol, garcia","Information");
INSERT INTO tbl_audit VALUES("65","CSTMR10","Archive Announcement ID: 9","2021-09-22","pol, garcia","Information");
INSERT INTO tbl_audit VALUES("66","CSTMR10","Recover Announcement ID: 9","2021-09-22","pol, garcia","Information");
INSERT INTO tbl_audit VALUES("67","CSTMR20","Confirm Overnight Booking ID: 192 ","2021-09-22","Steven, Moran","Booking");
INSERT INTO tbl_audit VALUES("102","CSTMR10","Generate sales report from: 2021-02-01 to 2021-11-31","2021-10-01","pol, garcia","system");
INSERT INTO tbl_audit VALUES("101","CSTMR10","Generate sales report from: 2021-01-01 to 2021-12-31","2021-10-01","pol, garcia","system");
INSERT INTO tbl_audit VALUES("71","CSTMR10","Confirm Daytour Booking ID: 209 ","2021-09-27","pol, garcia","Booking");
INSERT INTO tbl_audit VALUES("72","CSTMR10","Decline Booking ID: 202 ","2021-09-27","Bryan, Dollentas","Booking");
INSERT INTO tbl_audit VALUES("73","CSTMR10","Decline Booking ID: 204 ","2021-09-27","Bryan, Dollentas","Booking");
INSERT INTO tbl_audit VALUES("74","CSTMR10","Confirm Daytour Booking ID: 210 ","2021-09-27","pol, garcia","Booking");
INSERT INTO tbl_audit VALUES("75","CSTMR10","Confirm Daytour Booking ID: 211 ","2021-09-27","pol, garcia","Booking");
INSERT INTO tbl_audit VALUES("76","CSTMR10","Confirm Daytour Booking ID: 212 ","2021-09-29","pol, garcia","Booking");
INSERT INTO tbl_audit VALUES("77","CSTMR10","Finish Booking ID:  transaction","2021-09-29","pol, garcia","Booking");
INSERT INTO tbl_audit VALUES("113","CSTMR10","Generate sales report from: 2021-01-01 to 2021-12-31","2021-10-02","pol, garcia","System");
INSERT INTO tbl_audit VALUES("112","CSTMR10","Generate sales report from: 2021-01-01 to 2021-12-31","2021-10-02","pol, garcia","System");
INSERT INTO tbl_audit VALUES("111","CSTMR10","Generate sales report from: 2021-01-01 to 2021-12-31","2021-10-02","pol, garcia","System");
INSERT INTO tbl_audit VALUES("84","CSTMR10","Confirm Overnight Booking ID:  ","2021-10-01","pol, garcia","system");
INSERT INTO tbl_audit VALUES("110","CSTMR10","Generate sales report from: 2021-01-01 to 2021-12-31","2021-10-02","pol, garcia","System");
INSERT INTO tbl_audit VALUES("86","CSTMR10","Generate sales report from: 2021-06-01 to 2021-11-31","2021-10-01","pol, garcia","system");
INSERT INTO tbl_audit VALUES("87","CSTMR10","Generate sales report from: 2021-09-01 to 2021-10-31","2021-10-01","pol, garcia","system");
INSERT INTO tbl_audit VALUES("88","CSTMR10","Generate sales report from: 2021-09-01 to 2021-10-31","2021-10-01","pol, garcia","system");
INSERT INTO tbl_audit VALUES("89","CSTMR10","Generate sales report from: 2021-09-01 to 2021-10-31","2021-10-01","pol, garcia","system");
INSERT INTO tbl_audit VALUES("90","CSTMR10","Generate sales report from: 2021-09-01 to 2021-10-31","2021-10-01","pol, garcia","system");
INSERT INTO tbl_audit VALUES("91","CSTMR10","Generate sales report from: 2021-09-01 to 2021-10-31","2021-10-01","pol, garcia","system");
INSERT INTO tbl_audit VALUES("92","CSTMR10","Generate sales report from: 2021-09-01 to 2021-10-31","2021-10-01","pol, garcia","system");
INSERT INTO tbl_audit VALUES("93","CSTMR10","Generate sales report from: 2021-09-01 to 2021-10-31","2021-10-01","pol, garcia","system");
INSERT INTO tbl_audit VALUES("127","CSTMR22","update review ID: 6 status to disabled","2021-10-06","Cyril, Samonte","");
INSERT INTO tbl_audit VALUES("126","CSTMR22","Posted review of ","2021-10-06","Cyril, Samonte","");
INSERT INTO tbl_audit VALUES("125","CSTMR22","update review ID: 6 status to disabled","2021-10-06","Cyril, Samonte","");
INSERT INTO tbl_audit VALUES("124","CSTMR22","Posted review of ","2021-10-06","Cyril, Samonte","");
INSERT INTO tbl_audit VALUES("123","CSTMR22","update review ID: 5 status to disabled","2021-10-06","Cyril, Samonte","");
INSERT INTO tbl_audit VALUES("122","CSTMR22","Posted review of  ","2021-10-06","Cyril, Samonte","");
INSERT INTO tbl_audit VALUES("121","CSTMR22","update review ID: 5 status to enable","2021-10-06","Cyril, Samonte","");
INSERT INTO tbl_audit VALUES("136","CSTMR22","Posted review of '","2021-10-06","Cyril, Samonte","");
INSERT INTO tbl_audit VALUES("137","CSTMR22","update review ID: 4 status to disabled","2021-10-06","Cyril, Samonte","");
INSERT INTO tbl_audit VALUES("138","CSTMR22","Posted review of ","2021-10-06","Cyril, Samonte","");
INSERT INTO tbl_audit VALUES("139","CSTMR22","update review ID: 4 status to disabled","2021-10-06","Cyril, Samonte","");
INSERT INTO tbl_audit VALUES("140","CSTMR22","Posted review of ","2021-10-06","Cyril, Samonte","");
INSERT INTO tbl_audit VALUES("141","CSTMR22","update review ID: 4 status to disabled","2021-10-06","Cyril, Samonte","");
INSERT INTO tbl_audit VALUES("142","CSTMR22","Posted review of ","2021-10-06","Cyril, Samonte","");
INSERT INTO tbl_audit VALUES("143","CSTMR22","update review ID: 4 status to disabled","2021-10-06","Cyril, Samonte","");
INSERT INTO tbl_audit VALUES("144","CSTMR22","Posted review of ","2021-10-06","Cyril, Samonte","");
INSERT INTO tbl_audit VALUES("145","CSTMR22","update review ID: 4 status to disabled","2021-10-06","Cyril, Samonte","");
INSERT INTO tbl_audit VALUES("146","CSTMR22","Posted review of ","2021-10-06","Cyril, Samonte","");
INSERT INTO tbl_audit VALUES("147","CSTMR22","update review ID: 4 status to disabled","2021-10-06","Cyril, Samonte","");
INSERT INTO tbl_audit VALUES("148","CSTMR22","Posted review of ","2021-10-06","Cyril, Samonte","");
INSERT INTO tbl_audit VALUES("149","CSTMR22","update review ID: 4 status to disabled","2021-10-06","Cyril, Samonte","");
INSERT INTO tbl_audit VALUES("150","CSTMR22","Posted review of ","2021-10-06","Cyril, Samonte","");
INSERT INTO tbl_audit VALUES("151","CSTMR22","update review ID: 4 status to disabled","2021-10-06","Cyril, Samonte","");
INSERT INTO tbl_audit VALUES("152","CSTMR22","Posted review of ","2021-10-06","Cyril, Samonte","");
INSERT INTO tbl_audit VALUES("153","CSTMR22","update review ID: 4 status to disabled","2021-10-06","Cyril, Samonte","");
INSERT INTO tbl_audit VALUES("154","CSTMR22","Posted review of ","2021-10-06","Cyril, Samonte","");
INSERT INTO tbl_audit VALUES("155","CSTMR22","update review ID: 4 status to disabled","2021-10-06","Cyril, Samonte","");
INSERT INTO tbl_audit VALUES("156","CSTMR22","Posted review of ","2021-10-06","Cyril, Samonte","");
INSERT INTO tbl_audit VALUES("157","CSTMR22","update review ID: 4 status to disabled","2021-10-06","Cyril, Samonte","");
INSERT INTO tbl_audit VALUES("158","CSTMR22","Posted review of ","2021-10-06","Cyril, Samonte","");
INSERT INTO tbl_audit VALUES("159","CSTMR22","update review ID: 4 status to disabled","2021-10-06","Cyril, Samonte","");
INSERT INTO tbl_audit VALUES("160","CSTMR22","Posted review of ","2021-10-06","Cyril, Samonte","");
INSERT INTO tbl_audit VALUES("161","CSTMR22","update review ID: 4 status to disabled","2021-10-06","Cyril, Samonte","");
INSERT INTO tbl_audit VALUES("162","CSTMR22","update review ID: 4 status to disabled","2021-10-06","Cyril, Samonte","");
INSERT INTO tbl_audit VALUES("163","CSTMR22","Posted review of Bryan","2021-10-06","Cyril, Samonte","");
INSERT INTO tbl_audit VALUES("164","CSTMR22","Remove costumer review of Bryan Dollentas - status to disabled","2021-10-06","Cyril, Samonte","");
INSERT INTO tbl_audit VALUES("165","CSTMR22","Posted review of costumer named Bryan Dollentas - status to enable","2021-10-06","Cyril, Samonte","");
INSERT INTO tbl_audit VALUES("166","CSTMR10","Remove costumer review of jehu ombrog - status to disabled","2021-10-06","pol, garcia","");
INSERT INTO tbl_audit VALUES("167","CSTMR10","Posted review of costumer named jehu ombrog - status to enable","2021-10-06","pol, garcia","");
INSERT INTO tbl_audit VALUES("168","CSTMR10","Confirm Daytour Booking ID: 224 ","2021-10-06","pol, garcia","booking");
INSERT INTO tbl_audit VALUES("169","CSTMR10","Finish Booking ID:  transaction","2021-10-06","pol, garcia","booking");
INSERT INTO tbl_audit VALUES("170","CSTMR10","Archive Announcement ID: 9","2021-10-06","pol, garcia","Information");
INSERT INTO tbl_audit VALUES("171","CSTMR10","Add new Announcement ","2021-10-06","pol, garcia","announcement");
INSERT INTO tbl_audit VALUES("172","CSTMR10","Delete photo id: 14","2021-10-06","pol, garcia","Information");
INSERT INTO tbl_audit VALUES("173","CSTMR10","Update promo code : RNC10","2021-10-06","pol, garcia","Information");
INSERT INTO tbl_audit VALUES("174","CSTMR10","Generate sales report from: 2021-09-01 to 2021-11-31","2021-10-06","pol, garcia","System");
INSERT INTO tbl_audit VALUES("175","CSTMR10","Export Database Copy","2021-10-06","pol, garcia","System");
INSERT INTO tbl_audit VALUES("176","CSTMR10","Remove costumer review of Bryan Dollentas - status to disabled","2021-10-07","pol, garcia","");
INSERT INTO tbl_audit VALUES("177","CSTMR10","Posted review of costumer named Bryan Dollentas - status to enable","2021-10-07","pol, garcia","");
INSERT INTO tbl_audit VALUES("178","CSTMR10","Archive Announcement ID: 11","2021-10-09","pol, garcia","Information");
INSERT INTO tbl_audit VALUES("179","CSTMR10","Add new Announcement ","2021-10-09","pol, garcia","announcement");
INSERT INTO tbl_audit VALUES("180","CSTMR10","Change Announcement ID: 12","2021-10-09","pol, garcia","Information");
INSERT INTO tbl_audit VALUES("181","CSTMR10","Change Announcement ID: 12","2021-10-09","pol, garcia","Information");
INSERT INTO tbl_audit VALUES("182","CSTMR10","Add new Announcement ","2021-10-09","pol, garcia","announcement");
INSERT INTO tbl_audit VALUES("183","CSTMR10","Change Announcement ID: 12","2021-10-09","pol, garcia","Information");
INSERT INTO tbl_audit VALUES("184","CSTMR10","Confirm Daytour Booking ID: 229 ","2021-10-09","pol, garcia","booking");
INSERT INTO tbl_audit VALUES("185","CSTMR10","Finish Booking ID:  transaction","2021-10-09","pol, garcia","booking");
INSERT INTO tbl_audit VALUES("186","CSTMR10","Confirm Daytour Booking ID: 231 ","2021-10-09","pol, garcia","booking");
INSERT INTO tbl_audit VALUES("187","CSTMR10","Export Database Copy","2021-10-09","pol, garcia","System");
INSERT INTO tbl_audit VALUES("188","CSTMR10","Generate sales report from: 2021-09-01 to 2021-11-31","2021-10-09","pol, garcia","System");
INSERT INTO tbl_audit VALUES("189","CSTMR10","Confirm Daytour Booking ID: 223 ","2021-10-09","pol, garcia","booking");
INSERT INTO tbl_audit VALUES("190","CSTMR10","Remove costumer review of Bryan Dollentas - status to disabled","2021-10-09","pol, garcia","");
INSERT INTO tbl_audit VALUES("191","CSTMR10","Remove costumer review of Bryan Dollentas - status to disabled","2021-10-09","pol, garcia","");
INSERT INTO tbl_audit VALUES("192","CSTMR10","Remove costumer review of jehu ombrog - status to disabled","2021-10-09","pol, garcia","");
INSERT INTO tbl_audit VALUES("193","CSTMR10","Archive Announcement ID: 13","2021-10-10","pol, garcia","Information");
INSERT INTO tbl_audit VALUES("194","CSTMR10","Posted review of costumer named jehu ombrog - status to enable","2021-10-10","pol, garcia","");
INSERT INTO tbl_audit VALUES("195","CSTMR10","Update promo code : RNC10","2021-10-10","pol, garcia","Information");
INSERT INTO tbl_audit VALUES("196","CSTMR10","Create new promo code : PWD","2021-10-10","pol, garcia","system");
INSERT INTO tbl_audit VALUES("197","CSTMR10","Update promo code : PWD","2021-10-10","pol, garcia","Information");
INSERT INTO tbl_audit VALUES("198","CSTMR10","Confirm Daytour Booking ID: 232 ","2021-10-10","pol, garcia","booking");
INSERT INTO tbl_audit VALUES("199","CSTMR10","Confirm Daytour Booking ID: 233 ","2021-10-10","pol, garcia","booking");
INSERT INTO tbl_audit VALUES("200","CSTMR10","Finish Booking ID:  transaction","2021-10-10","pol, garcia","booking");
INSERT INTO tbl_audit VALUES("201","CSTMR10","Confirm Overnight Booking ID: 234 ","2021-10-10","pol, garcia","booking");
INSERT INTO tbl_audit VALUES("202","CSTMR10","Generate sales report from: 2021-09-01 to 2021-11-31","2021-10-10","pol, garcia","System");
INSERT INTO tbl_audit VALUES("203","CSTMR10","Export Database Copy","2021-10-10","pol, garcia","System");
INSERT INTO tbl_audit VALUES("204","CSTMR10","add new aminities named as =tent  ","2021-10-10","pol, garcia","Information");
INSERT INTO tbl_audit VALUES("205","CSTMR10","Confirm Daytour Booking ID: 237 ","2021-10-10","pol, garcia","booking");
INSERT INTO tbl_audit VALUES("206","CSTMR10","Delete photo id: 15","2021-10-11","pol, garcia","Information");
INSERT INTO tbl_audit VALUES("207","CSTMR10","Delete photo id: 17","2021-10-11","pol, garcia","Information");
INSERT INTO tbl_audit VALUES("208","CSTMR10","Delete photo id: 18","2021-10-11","pol, garcia","Information");
INSERT INTO tbl_audit VALUES("209","CSTMR10","Delete photo id: 19","2021-10-11","pol, garcia","Information");
INSERT INTO tbl_audit VALUES("210","CSTMR10","Delete photo id: 20","2021-10-11","pol, garcia","Information");
INSERT INTO tbl_audit VALUES("211","CSTMR10","Delete photo id: 23","2021-10-11","pol, garcia","Information");
INSERT INTO tbl_audit VALUES("212","CSTMR10","Added new photo in gallery","2021-10-11","pol, garcia","Information");
INSERT INTO tbl_audit VALUES("213","CSTMR10","Added new photo in gallery","2021-10-11","pol, garcia","Information");
INSERT INTO tbl_audit VALUES("214","CSTMR10","Added new photo in gallery","2021-10-11","pol, garcia","Information");
INSERT INTO tbl_audit VALUES("215","CSTMR10","Delete photo id: 21","2021-10-11","pol, garcia","Information");
INSERT INTO tbl_audit VALUES("216","CSTMR10","Added new photo in gallery","2021-10-11","pol, garcia","Information");
INSERT INTO tbl_audit VALUES("217","CSTMR10","Added new photo in gallery","2021-10-11","pol, garcia","Information");
INSERT INTO tbl_audit VALUES("218","CSTMR10","Delete photo id: 30","2021-10-11","pol, garcia","Information");
INSERT INTO tbl_audit VALUES("219","CSTMR10","Delete photo id: 29","2021-10-11","pol, garcia","Information");
INSERT INTO tbl_audit VALUES("220","CSTMR10","Added new photo in gallery","2021-10-11","pol, garcia","Information");
INSERT INTO tbl_audit VALUES("221","CSTMR10","Delete photo id: 27","2021-10-11","pol, garcia","Information");
INSERT INTO tbl_audit VALUES("222","CSTMR10","Recover Announcement ID: 9","2021-10-11","pol, garcia","Information");
INSERT INTO tbl_audit VALUES("223","CSTMR10","Delete photo id: 13","2021-10-11","pol, garcia","Information");
INSERT INTO tbl_audit VALUES("224","CSTMR10","Update photo id: ","2021-10-12","pol, garcia","Information");
INSERT INTO tbl_audit VALUES("225","CSTMR10","Update photo id: ","2021-10-12","pol, garcia","Information");
INSERT INTO tbl_audit VALUES("226","CSTMR10","Update photo id: ","2021-10-12","pol, garcia","Information");
INSERT INTO tbl_audit VALUES("227","CSTMR10","Update photo id: ","2021-10-12","pol, garcia","Information");
INSERT INTO tbl_audit VALUES("228","CSTMR10","Update photo id: ","2021-10-12","pol, garcia","Information");
INSERT INTO tbl_audit VALUES("229","CSTMR10","Update photo id: ","2021-10-12","pol, garcia","Information");
INSERT INTO tbl_audit VALUES("230","CSTMR10","Update  Standard Couple Cabana    accomodation Details","2021-10-12","pol, garcia","Information");
INSERT INTO tbl_audit VALUES("231","CSTMR10","Update  Standard Couple Cabana     accomodation Details","2021-10-12","pol, garcia","Information");
INSERT INTO tbl_audit VALUES("232","CSTMR10","Update  Standard Couple Cabana  accomodation Details","2021-10-12","pol, garcia","Information");
INSERT INTO tbl_audit VALUES("233","CSTMR10","Update  Standard Couple Cabana  accomodation Details","2021-10-12","pol, garcia","Information");
INSERT INTO tbl_audit VALUES("234","CSTMR10","Update  Standard Couple Cabana      accomodation Details","2021-10-12","pol, garcia","Information");
INSERT INTO tbl_audit VALUES("235","CSTMR10","Update  Standard Couple Cabana   accomodation Details","2021-10-12","pol, garcia","Information");
INSERT INTO tbl_audit VALUES("236","CSTMR10","Update  Standard Couple Cabana   accomodation Details","2021-10-12","pol, garcia","Information");
INSERT INTO tbl_audit VALUES("237","CSTMR10","Update  Standard Couple Cabana  accomodation Details","2021-10-12","pol, garcia","Information");
INSERT INTO tbl_audit VALUES("238","CSTMR10","Update  Standard Couple Cabana   accomodation Details","2021-10-12","pol, garcia","Information");
INSERT INTO tbl_audit VALUES("239","CSTMR10","Update  De Luxe Couple Cabana  accomodation Details","2021-10-12","pol, garcia","Information");
INSERT INTO tbl_audit VALUES("240","CSTMR10","Update  De Luxe Couple Cabana  accomodation Details","2021-10-12","pol, garcia","Information");
INSERT INTO tbl_audit VALUES("241","CSTMR10","Update  De Luxe Couple Cabana  accomodation Details","2021-10-12","pol, garcia","Information");
INSERT INTO tbl_audit VALUES("242","CSTMR10","Update  De Luxe Couple Cabana  accomodation Details","2021-10-12","pol, garcia","Information");
INSERT INTO tbl_audit VALUES("243","CSTMR10","Update  Twin Ifugao House   accomodation Details","2021-10-12","pol, garcia","Information");
INSERT INTO tbl_audit VALUES("244","CSTMR10","Remove costumer review of Bryan Dollentas - status to disabled","2021-10-13","pol, garcia","");
INSERT INTO tbl_audit VALUES("245","CSTMR10","Posted review of costumer named Bryan Dollentas - status to enable","2021-10-18","pol, garcia","");
INSERT INTO tbl_audit VALUES("246","CSTMR10","Remove costumer review of Bryan Dollentas - status to disabled","2021-10-18","pol, garcia","");
INSERT INTO tbl_audit VALUES("247","CSTMR10","Posted review of costumer named Bryan Dollentas - status to enable","2021-10-18","pol, garcia","");
INSERT INTO tbl_audit VALUES("248","CSTMR10","Update promo code : RNC10","2021-10-18","pol, garcia","Information");



CREATE TABLE `tbl_booking` (
  `ID` int(250) NOT NULL AUTO_INCREMENT,
  `customerID` varchar(100) NOT NULL,
  `bpax` int(11) NOT NULL,
  `bname` varchar(100) NOT NULL,
  `btype` varchar(100) NOT NULL,
  `bdate` date NOT NULL,
  `broom` varchar(100) NOT NULL,
  `btable_date` varchar(100) NOT NULL,
  `btable_time` varchar(100) NOT NULL,
  `datecategory` varchar(150) NOT NULL,
  `btime_in` datetime NOT NULL,
  `btime_out` datetime NOT NULL,
  `bdaytourtime` varchar(100) NOT NULL,
  `bprice` int(11) NOT NULL,
  `bdeposit` int(11) NOT NULL,
  `balance` float NOT NULL,
  `bstatus` varchar(100) NOT NULL,
  `regsdate` date DEFAULT NULL,
  `review` int(11) NOT NULL,
  `paymentPhoto` varchar(500) NOT NULL,
  `promo_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=241 DEFAULT CHARSET=latin1;

INSERT INTO tbl_booking VALUES("176","CSTMR11","0","Bryan Dollentas","Overnight","2021-08-04"," || C1 ","","","","2021-08-04 14:00:00","2021-08-06 12:00:00","","3500","3500","0","Completed","","0","1.jpg","");
INSERT INTO tbl_booking VALUES("179","CSTMR11","0","Bryan Dollentas","Overnight","2021-08-06"," || C1 ","","","","2021-08-06 14:00:00","2021-08-08 12:00:00","","3500","0","3500","Declined","","0","122222222.jpg","");
INSERT INTO tbl_booking VALUES("180","CSTMR11","3","Bryan Dollentas","Overnight","2021-08-06"," || C2 ","","","","2021-08-06 14:00:00","2021-08-07 12:00:00","","4010","0","4010","Declined","","0","Gall (1).jpg","");
INSERT INTO tbl_booking VALUES("181","CSTMR11","2"," Dollentas","Daytour","2021-08-05","","","","","2021-08-05 07:08:00","2021-08-05 10:08:00","07:00 am to 10:00 am","400","0","400","Declined","","0","","");
INSERT INTO tbl_booking VALUES("182","CSTMR11","1"," Dollentas","Daytour","2021-08-07","","","","","2021-08-07 07:08:00","2021-08-07 10:08:00","07:00 am to 10:00 am","200","200","0","Completed","","1","198527104_209070164407119_5404744244341061790_n.jpg","");
INSERT INTO tbl_booking VALUES("183","CSTMR11","3"," Dollentas","Daytour","2021-09-11","","","","","2021-09-11 10:09:00","2021-09-11 13:09:00","10:00 am to 13:00 pm","600","600","0","Completed","","1","selfie.jpg","");
INSERT INTO tbl_booking VALUES("184","CSTMR11","3"," Dollentas","Daytour","2021-09-30","","","","","2021-09-30 10:09:00","2021-09-30 13:09:00","10:00 am to 13:00 pm","600","600","0","Completed","","1","","");
INSERT INTO tbl_booking VALUES("185","CSTMR11","0"," Dollentas","Daytour","2021-09-16","","","","","2021-09-16 07:09:00","2021-09-16 10:09:00","07:00 am to 10:00 am","0","0","0","Declined","","0","","");
INSERT INTO tbl_booking VALUES("186","CSTMR11","13","Bryan Dollentas","Daytour","2021-09-14","","","","","2021-09-14 13:09:00","2021-09-14 16:09:00","13:00 pm to 16:00 pm","2600","0","2600","Declined","","0","","");
INSERT INTO tbl_booking VALUES("187","CSTMR11","17","Bryan Dollentas","Daytour","2021-09-17","","","","","2021-09-17 07:09:00","2021-09-17 10:09:00","07:00 am to 10:00 am","3400","0","3400","Declined","","0","","");
INSERT INTO tbl_booking VALUES("188","CSTMR11","17","Bryan Dollentas","Daytour","2021-09-16","","","","","2021-09-16 07:09:00","2021-09-16 10:09:00","07:00 am to 10:00 am","3400","0","3400","Declined","","0","","");
INSERT INTO tbl_booking VALUES("189","CSTMR11","12","Bryan Dollentas","Daytour","2021-09-16","","","","","2021-09-16 07:09:00","2021-09-16 10:09:00","07:00 am to 10:00 am","2400","0","2400","Declined","","0","","");
INSERT INTO tbl_booking VALUES("190","CSTMR11","2","Bryan Dollentas","Overnight","2021-09-28"," || C1  || C2  || C3  || C4  || C5  || C6  || C7  || C8  || C9 ","","","","2021-09-28 14:00:00","2021-09-29 12:00:00","","39010","20000","19010","Confirmed","","0","","");
INSERT INTO tbl_booking VALUES("191","CSTMR11","1","Bryan Dollentas","Overnight","2021-09-29"," || C1 "," ||  Veranda ","3am to 4pm"," || Sunrise Breakfast","2021-09-29 14:00:00","2021-09-30 12:00:00","","4500","4500","0","Completed","","0","","");
INSERT INTO tbl_booking VALUES("192","CSTMR11","0","Bryan Dollentas","Overnight","2021-09-29"," || C2 ","","","","2021-09-29 14:00:00","2021-09-30 12:00:00","","3010","1500","1510","Confirmed","","0","","");
INSERT INTO tbl_booking VALUES("202","CSTMR11","0","Bryan Dollentas","Overnight","2021-09-25"," || C2 ","","","","2021-09-25 14:00:00","2021-09-28 12:00:00","","2510","0","2510","Declined","","0","iPhone 7073.JPG","");
INSERT INTO tbl_booking VALUES("231","CSTMR25","1","jehu ombrog","Daytour","2021-10-10","","","","","2021-10-10 13:10:00","2021-10-10 16:10:00","13:00 pm to 16:00 pm","200","100","100","Confirmed","","0","","");
INSERT INTO tbl_booking VALUES("230","CSTMR25","0","jehu ombrog","Overnight","2021-10-10"," || C1 ","","","","2021-10-10 14:00:00","2021-10-11 12:00:00","","3500","0","3500","Pending","","0","","");
INSERT INTO tbl_booking VALUES("197","CSTMR11","1","Bryan Dollentas","Daytour","2021-09-18","","","","","2021-09-18 10:09:00","2021-09-18 13:09:00","10:00 am to 13:00 pm","200","0","200","Declined","","0","","");
INSERT INTO tbl_booking VALUES("198","CSTMR11","1","Bryan Dollentas","Daytour","2021-09-18","","","","","2021-09-18 13:09:00","2021-09-18 16:09:00","13:00 pm to 16:00 pm","200","0","200","Declined","","0","","");
INSERT INTO tbl_booking VALUES("199","CSTMR11","1","Bryan Dollentas","Daytour","2021-09-18","","","","","2021-09-18 13:09:00","2021-09-18 16:09:00","13:00 pm to 16:00 pm","200","0","200","Declined","","0","","");
INSERT INTO tbl_booking VALUES("200","CSTMR11","1","Bryan Dollentas","Daytour","2021-09-18","","","","","2021-09-18 13:09:00","2021-09-18 16:09:00","13:00 pm to 16:00 pm","200","0","200","Declined","","0","","");
INSERT INTO tbl_booking VALUES("201","CSTMR11","1","Bryan Dollentas","Daytour","2021-09-23","","","","","2021-09-23 13:09:00","2021-09-23 16:09:00","13:00 pm to 16:00 pm","200","0","200","Declined","","0","","");
INSERT INTO tbl_booking VALUES("204","CSTMR11","0","Bryan Dollentas","Overnight","2021-09-23"," || C2 ","","","","2021-09-23 14:00:00","2021-09-24 12:00:00","","2510","0","2510","Declined","","0","","");
INSERT INTO tbl_booking VALUES("227","CSTMR11","0","Bryan Dollentas","Overnight","2021-10-29"," || C7  || C8  || C9 ","","","","2021-10-29 14:00:00","2021-11-01 12:00:00","","18000","0","18000","Pending","","0","","");
INSERT INTO tbl_booking VALUES("228","CSTMR25","0","jehu ombrog","Overnight","2021-10-29"," || C4  || C5 ","","","","2021-10-29 14:00:00","2021-10-30 12:00:00","","7000","0","7000","Pending","","0","postal back.jpg","");
INSERT INTO tbl_booking VALUES("229","CSTMR25","1","jehu ombrog","Daytour","2021-10-12","","","","","2021-10-12 07:10:00","2021-10-12 10:10:00","07:00 am to 10:00 am","200","200","0","Completed","","0","postal back.jpg","");
INSERT INTO tbl_booking VALUES("226","CSTMR11","0","Bryan Dollentas","Overnight","2021-10-28"," || C1  || C2  || C3 ","","","","2021-10-28 14:00:00","2021-10-31 12:00:00","","9010","0","9010","Pending","","0","","");
INSERT INTO tbl_booking VALUES("209","CSTMR11","2","Bryan Dollentas","Daytour","2021-10-21","","","","","2021-10-21 10:10:00","2021-10-21 13:10:00","10:00 am to 13:00 pm","400","200","200","Confirmed","","0","","");
INSERT INTO tbl_booking VALUES("210","CSTMR11","2","Bryan Dollentas","Daytour","2021-09-28","","","","","2021-09-28 07:09:00","2021-09-28 10:09:00","07:00 am to 10:00 am","300","200","100","Confirmed","","0","signs.jpg","11");
INSERT INTO tbl_booking VALUES("211","CSTMR11","2","Bryan Dollentas","Daytour","2021-09-30","","","","","2021-09-30 13:09:00","2021-09-30 16:09:00","13:00 pm to 16:00 pm","200","100","100","Confirmed","","0","120192077_347771690007212_3896643654713269544_o.jpg","13");
INSERT INTO tbl_booking VALUES("212","CSTMR25","1","jehu ombrog","Daytour","2021-09-30","","","","","2021-09-30 10:09:00","2021-09-30 13:09:00","10:00 am to 13:00 pm","200","200","0","Completed","","1","space-wallpaper-20082314170846.jpg","");
INSERT INTO tbl_booking VALUES("232","CSTMR26","2","leica balayanto","Daytour","2021-10-11","","","","","2021-10-10 07:10:00","2021-10-11 10:10:00","07:00 am to 10:00 am","320","200","120","Confirmed","","0","ACT 3 P.E.jpg","18");
INSERT INTO tbl_booking VALUES("220","CSTMR25","0","jehu ombrog","Overnight","2021-10-07"," || C2 ","","","","2021-10-07 14:00:00","2021-10-08 12:00:00","","2510","0","2510","Pending","","0","","");
INSERT INTO tbl_booking VALUES("221","CSTMR25","0","jehu ombrog","Overnight","2021-10-07"," || C9 ","","","","2021-10-07 14:00:00","2021-10-08 12:00:00","","8000","0","8000","Pending","","0","","");
INSERT INTO tbl_booking VALUES("222","CSTMR25","0","jehu ombrog","Overnight","2021-10-07"," || C1  || C3 "," || View Deck ","3am to 4pm"," || ","2021-10-07 14:00:00","2021-10-08 12:00:00","","7500","0","7500","Pending","","0","","");
INSERT INTO tbl_booking VALUES("223","CSTMR25","2","jehu ombrog","Daytour","2021-10-07","","","","","2021-10-07 07:10:00","2021-10-07 10:10:00","07:00 am to 10:00 am","400","200","200","Confirmed","","0","","");
INSERT INTO tbl_booking VALUES("224","CSTMR11","2","Bryan Dollentas","Daytour","2021-10-06","","","","","2021-10-06 10:10:00","2021-10-06 13:10:00","10:00 am to 13:00 pm","320","320","0","Completed","","1","postal back.jpg","12");
INSERT INTO tbl_booking VALUES("233","CSTMR26","1","leica balayanto","Daytour","2021-10-11","","","","","2021-10-11 07:10:00","2021-10-11 10:10:00","07:00 am to 10:00 am","200","200","0","Completed","","0","","");
INSERT INTO tbl_booking VALUES("234","CSTMR26","0","leica balayanto","Overnight","2021-10-11"," || C9 ","","","","2021-10-11 14:00:00","2021-10-12 12:00:00","","8000","4000","4000","Confirmed","","0","postal back.jpg","");
INSERT INTO tbl_booking VALUES("235","CSTMR26","1","leica balayanto","Daytour","2021-10-14","","","","","2021-10-14 07:10:00","2021-10-14 10:10:00","07:00 am to 10:00 am","200","400","100","Confirmed","","0","","");
INSERT INTO tbl_booking VALUES("236","CSTMR25","1","jehu ombrog","Daytour","2021-10-11","","","","","2021-10-11 07:10:00","2021-10-11 10:10:00","07:00 am to 10:00 am","200","100","100","Confirmed","","0","","");
INSERT INTO tbl_booking VALUES("237","CSTMR25","1","jehu ombrog","Daytour","2021-10-11","","","","","2021-10-11 10:10:00","2021-10-11 13:10:00","10:00 am to 13:00 pm","200","100","100","Confirmed","","0","","");
INSERT INTO tbl_booking VALUES("238","CSTMR26","0","leica balayanto","Overnight","2021-10-11"," || C2 ","","","","2021-10-11 14:00:00","2021-10-12 12:00:00","","2510","1500","1010","Confirmed","","0","","");
INSERT INTO tbl_booking VALUES("239","CSTMR25","0","jehu ombrog","Overnight","2021-10-22"," || C2 "," ||  Veranda ","3am to 4pm"," || Sunrise Breakfast","2021-10-22 14:00:00","2021-10-23 12:00:00","","3010","0","3010","Pending","","0","postal back.jpg","");
INSERT INTO tbl_booking VALUES("240","CSTMR25","1","jehu ombrog","Daytour","2021-10-15","","","","","2021-10-15 07:10:00","2021-10-15 10:10:00","07:00 am to 10:00 am","200","0","200","Pending","","0","flex_play.png","");



CREATE TABLE `tbl_photo` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `photoname` varchar(500) NOT NULL,
  `category` int(11) NOT NULL,
  `description` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4;

INSERT INTO tbl_photo VALUES("2","Gall (1).jpg","1","");
INSERT INTO tbl_photo VALUES("3","Gall (2).jpg","1","");
INSERT INTO tbl_photo VALUES("4","Gall (3).jpg","1","");
INSERT INTO tbl_photo VALUES("5","Gall (4).jpg","1","");
INSERT INTO tbl_photo VALUES("6","Gall (5).jpg","1","");
INSERT INTO tbl_photo VALUES("7","Gall (6).jpg","1","");
INSERT INTO tbl_photo VALUES("8","Gall (7).jpg","1","");
INSERT INTO tbl_photo VALUES("9","Gall (8).jpg","1","");
INSERT INTO tbl_photo VALUES("10","Gall (9).jpg","1","");
INSERT INTO tbl_photo VALUES("11","Gall (10).jpg","1","dsdsds");
INSERT INTO tbl_photo VALUES("12","Gall (11).jpg","1","juls");
INSERT INTO tbl_photo VALUES("26","144471192_444489167002130_7562133926244138582_n.jpg","2","  Surprise your husband (or wife) with a camping date experience! Make up your bed with crisp, brownies and coffee to make your dating experience more memorable.");
INSERT INTO tbl_photo VALUES("28","125306896_390425969075117_657423807408911188_n.jpg","2","Grabbing the perfect photo of a rainbow can be few and far between, But with Ridges and Clouds will help you to see one often. All you have to do is grab your camera and get a photo before it fades away. ");
INSERT INTO tbl_photo VALUES("31","186540329_510378623746517_8380644808479828123_n.jpg","2","With us, we will help you experience the simple standard life with our cabana houses. you will surely enjoy the beauty of nature without signal and wifi.");



CREATE TABLE `tbl_price` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(100) NOT NULL,
  `accomodation` varchar(100) NOT NULL,
  `size` varchar(100) NOT NULL,
  `time` varchar(200) NOT NULL,
  `pax` varchar(50) NOT NULL,
  `rate` varchar(100) NOT NULL,
  `viewrate` varchar(100) NOT NULL,
  `verandarate` varchar(100) NOT NULL,
  `notes` varchar(500) NOT NULL,
  `imagename` varchar(500) NOT NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb4;

INSERT INTO tbl_price VALUES("1","room","Standard Couple Cabana     ","Small","","2","3500","","","Free breakfast for two","C1.jpg","0");
INSERT INTO tbl_price VALUES("2","room","Standard Couple Cabana  ","Large","","2","3000","","","Free breakfast for two","C3.jpg","0");
INSERT INTO tbl_price VALUES("3","room","De Luxe Couple Cabana ","Small","","2","4000","","","Free breakfast for two","C5.jpg","0");
INSERT INTO tbl_price VALUES("4","room","De Luxe Couple Cabana ","Large","","2","5000","","","Free breakfast for two","C7.jpg","0");
INSERT INTO tbl_price VALUES("5","room","De Luxe Couple Cabana","","","Each","500","","","","","0");
INSERT INTO tbl_price VALUES("6","room","Twin Ifugao House  ","Large","","6","8000","","","With two rooms, living room, dining
room, own CR, and outdoor kitchen","C9.jpg","0");
INSERT INTO tbl_price VALUES("7","room","Twin Ifugao House ","","","Each","510","","","Max of 10 excess pax","","0");
INSERT INTO tbl_price VALUES("8","date","Sunrise Breakfast","","6AM - 7AM","2","","1000","500","Choice of silog meal with brewed coffee (upgrade from breakfast for 2pax)","","0");
INSERT INTO tbl_price VALUES("9","date","Coffee Date","","1 hour only between 3pm-5pm","2","","700","400","Brewed Coffee and sandwiches/cookies","","0");
INSERT INTO tbl_price VALUES("10","date","Romantic Dinner","","1 hour only between 4pm to 7pm","2","","1500","1000","Choice of beef salpico, pork or chicken hamonado, Beef Chicken with mushroom or Chicken Curry **with rice, pasta, veggies and dessert. Optional: plus pluvium wine(600)","","0");
INSERT INTO tbl_price VALUES("11","other","Kawa Bath","","","","","","","500/Pax","","0");
INSERT INTO tbl_price VALUES("12","other","Mini Pool","","","","","","","TBC due to COVID19","","0");
INSERT INTO tbl_price VALUES("13","other","Massage","","","","","","","TBC due to COVID19","","0");
INSERT INTO tbl_price VALUES("14","other","Bonfire","","","","","","","300 (until 9PM only)","","0");
INSERT INTO tbl_price VALUES("34","room","Standard Couple Cabana  ","Small","","2","2510","","","Free breakfast for two","C2.jpg","0");
INSERT INTO tbl_price VALUES("35","room","Standard Couple Cabana  ","Large","","2","3000","","","Free Break fast for two","C4.jpg","0");
INSERT INTO tbl_price VALUES("36","room","De Luxe Couple Cabana ","Small","","2","4000","","","Free Break Fast for Two","C6.jpg","0");
INSERT INTO tbl_price VALUES("37","room","De Luxe Couple Cabana ","Large","","2","5000","","","Free Breakfast for Two","C8.jpg","0");
INSERT INTO tbl_price VALUES("43","other","tent ","","","","","","","mag tayo bahay bahayan","","0");



CREATE TABLE `tbl_promo` (
  `promo_id` int(11) NOT NULL AUTO_INCREMENT,
  `promo_code` varchar(50) NOT NULL,
  `promo_description` varchar(500) NOT NULL,
  `promo_value` int(11) NOT NULL,
  `promo_value_type` varchar(10) NOT NULL,
  `promo_expiration` date NOT NULL,
  `promo_count` int(11) NOT NULL,
  `promo_status` varchar(50) NOT NULL,
  `promo_bookingtype` varchar(50) NOT NULL,
  PRIMARY KEY (`promo_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;

INSERT INTO tbl_promo VALUES("0","ZZZZ","couple promo ","20","%","2021-10-21","99","inactive","");
INSERT INTO tbl_promo VALUES("7","QWERTY","Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.  ","500","off","2021-09-21","99","inactive","");
INSERT INTO tbl_promo VALUES("8","BRYANAD","zzzzzzzzzz zzzzzzzz zzzzzzzzzzzzzz zzzzzzzzzzzzzzzz zzzzzzz ","20","% OFF","2021-09-30","99","inactive","Daytour");
INSERT INTO tbl_promo VALUES("9","ZASDWEWQ","zasdsadsadwqewqasd asdasdqwe asd zxc asd qweasd zxcas qwe asdczxc sad qwe zxcz xcz  ","200","OFF","2021-09-19","99","inactive","");
INSERT INTO tbl_promo VALUES("10","MCDO50","zxczxc adas qwe  asd zczcasd qwe asd zxcas ewr xcvxcvsfdfg frt erdfg fdbcvb dfg retr bv ","500","% OFF","2021-09-26","99","inactive","Overnight");
INSERT INTO tbl_promo VALUES("11","DAY50","bawal ang bata ","100","OFF","2021-10-10","99","inactive","Daytour");
INSERT INTO tbl_promo VALUES("12","RNC10","family promo ","20","% OFF","2021-11-06","55","active","Daytour");
INSERT INTO tbl_promo VALUES("13","RNC1","Barkada promo ","50","% OFF","2021-11-30","99","active","Daytour");
INSERT INTO tbl_promo VALUES("14","QWERT","gamer coupon ","20","OFF","2021-11-06","99","active","Both");
INSERT INTO tbl_promo VALUES("15","DSDS","qewqeq ","20","OFF","2021-11-30","99","inactive","Overnight");
INSERT INTO tbl_promo VALUES("16","PRM30","happy independence day ","30","% OFF","2021-11-03","99","inactive","Overnight");
INSERT INTO tbl_promo VALUES("17","PRM30","new year promo ","30","% OFF","2021-11-05","99","active","Overnight");
INSERT INTO tbl_promo VALUES("18","PWD","PWD ","20","% OFF","2022-05-29","99","active","Both");



CREATE TABLE `tbl_review` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `bookingID` int(11) NOT NULL,
  `costumerID` varchar(100) NOT NULL,
  `dateReview` date NOT NULL,
  `description` varchar(500) NOT NULL,
  `reviewPhoto` varchar(500) NOT NULL,
  `rate` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

INSERT INTO tbl_review VALUES("4","182"," CSTMR11","2021-08-04","Sobrang ganda ang linis ng kapaligiran at ang tahimik pa, sarap mag unwind kasama ang mga tropa! 100% recommended <3 <3","Gall (8).jpg","5","enable");
INSERT INTO tbl_review VALUES("5","183"," CSTMR11","2021-09-10","Ang ganda po ","589853e0bd10f467f923929dda39deae.jpg","5","disabled");
INSERT INTO tbl_review VALUES("6","184"," CSTMR11","2021-09-10","12312321321321321312","flex_play.png","2","disabled");
INSERT INTO tbl_review VALUES("7","212"," CSTMR25","2021-09-29","so beautiful","74323609_106104157507301_7733118711283843072_o.jpg","5","enable");
INSERT INTO tbl_review VALUES("8","224"," CSTMR11","2021-10-06","ang ganda po ","space-wallpaper-20082314170846.jpg","5","");



CREATE TABLE `tbl_room` (
  `ID` varchar(100) NOT NULL,
  `room` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;




CREATE TABLE `tbl_rules` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Category` varchar(250) NOT NULL,
  `rules` varchar(500) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=53 DEFAULT CHARSET=utf8mb4;

INSERT INTO tbl_rules VALUES("7","FAQs","     Bonfire is cold");
INSERT INTO tbl_rules VALUES("10","Day Tour","    Picture taking and walking trail only (Max of 10hours: No Dine In)");
INSERT INTO tbl_rules VALUES("11","Day Tour"," Hot Kawa and Romantic Date are exclusive for overnights guest");
INSERT INTO tbl_rules VALUES("12","Day Tour"," We cannot accomodate picnic daytour groups.");
INSERT INTO tbl_rules VALUES("17","Overnight","Use of barbeque pit is allowed in the kitchen areas only. Strictly no cooking in rooms and cabanas.");
INSERT INTO tbl_rules VALUES("18","Overnight"," Dining and kitchen areas are for use of overnight guest only");
INSERT INTO tbl_rules VALUES("19","Overnight"," Conserve water. Clean as you go");
INSERT INTO tbl_rules VALUES("20","Overnight"," No littering/vandalism/illegal activities");
INSERT INTO tbl_rules VALUES("21","Overnight","   Curfew Hours: 9pm-am. Observe silence at all time esp after 9pm. Gate is closed from 8pm-7am");
INSERT INTO tbl_rules VALUES("22","Overnight"," Camp management shall not be responsible for any physical injury, damage, loss of life or property inside the camp.");
INSERT INTO tbl_rules VALUES("23","Day Tour","Food service is also unavailable for daytour guest as restaurant is still under construction.");
INSERT INTO tbl_rules VALUES("24","Day Tour"," Meals can be pre-ordered before visit (or guest may bring their food)");
INSERT INTO tbl_rules VALUES("25","Day Tour","   User of kitchen area and barbecue pit is not allowed");
INSERT INTO tbl_rules VALUES("28","FAQs","   Prior booking is require with 50% DP upon reservation thru Gcash or Bank deposit");
INSERT INTO tbl_rules VALUES("29","FAQs"," Check in 2pm/Check out 12nnt");
INSERT INTO tbl_rules VALUES("30","FAQs"," Natural cool mountain air (no AC or Fans)");
INSERT INTO tbl_rules VALUES("31","FAQs"," Off-grid (no wifi/network signal in rooms");
INSERT INTO tbl_rules VALUES("32","FAQs"," No outlets (only solar lights)");
INSERT INTO tbl_rules VALUES("35","Overnight"," Strictly no smoking or vaping beyond parking. No drinking, No eating in rooms.");
INSERT INTO tbl_rules VALUES("36","Day Tour"," Pet must be on leash ");
INSERT INTO tbl_rules VALUES("52","FAQs"," asdasdsadsadsa");



CREATE TABLE `tbl_user` (
  `ID` varchar(250) NOT NULL,
  `Userfname` varchar(50) NOT NULL,
  `Userlname` varchar(50) NOT NULL,
  `Useremail` varchar(50) NOT NULL,
  `Userpnumber` varchar(50) NOT NULL,
  `Userpword` varchar(250) NOT NULL,
  `Userbday` date NOT NULL,
  `Userage` int(11) NOT NULL,
  `Usergender` varchar(50) NOT NULL,
  `Usertype` int(11) NOT NULL,
  `Usertwitter` varchar(250) NOT NULL,
  `Userfbook` varchar(250) NOT NULL,
  `Userinstagram` varchar(250) NOT NULL,
  `Userregsdate` date DEFAULT NULL,
  `Userimage` varchar(500) NOT NULL,
  `Userpwordnohash` varchar(500) NOT NULL,
  `Ustatus` int(11) NOT NULL,
  `Uregsdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Ucode` int(200) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO tbl_user VALUES("CSTMR10","pol","garcia","pol@gmail.com","639565658454","$2y$10$Yzk9GbDkwg3hlL7pm75x5u63RO9SQlipMSg4yILX7lPi1coryrpQG","1997-08-26","23","","3","https://twitter.com/","https://facebook.com","https://www.instagram.com/","","IMG_5153.JPG","Angpangetko","0","2021-06-07 02:29:04","0");
INSERT INTO tbl_user VALUES("CSTMR11","Bryan","Dollentas","kazuto564@gmail.com","639212763842","$2y$10$u3VTj5KIN/VHDSLrQmaz4uJ9QAvTQmlS2EnbVbG7UHPRwvl6wv7Om","1999-02-28","23","","1","","","","","IMG_5153.JPG","Angpangetko","0","2021-09-29 12:55:09","0");
INSERT INTO tbl_user VALUES("CSTMR20","Steven","Moran","Stevenmoran143@gmail.com","635485475896","$2y$10$46miuWX48mvjWOBXuTLa5.etawMumk2FQ8EpLHK2sdGdNSUmhVNJ2","1999-07-14","21","","2","","","","2021-06-07","IMG_5902.JPG","Angpangetko","0","2021-06-07 02:39:15","0");
INSERT INTO tbl_user VALUES("CSTMR26","leica","balayanto","leicsbalayanto@gmail.com","639175164433","$2y$10$2PiVf3MYZ22Q.hmzYiYlLuvC8WbWZ1doXFkvqzYp8/SBBqtUzODDG","1999-02-03","22","","1","","","","2021-10-10","","Angpangetko","0","2021-10-10 03:09:43","0");
INSERT INTO tbl_user VALUES("CSTMR22","Cyril","Samonte","Cyrilsamonte@gmail.com","635525458475","$2y$10$9lOccqtJbDxCZFbrBVaucOO8po3WBVqljhw26CyZqj4./WeD7IG52","2008-06-13","12","","2","","","","2021-06-07","243183450_1022369055184781_392505564361253291_n.png","Angpangetko","0","2021-10-06 11:34:46","0");
INSERT INTO tbl_user VALUES("CSTMR25","jehu","ombrog","capstonefourth@gmail.com","639212765842","$2y$10$lVus7I4AqljS6e8xGA45he8nMyF5Wulwaed6bVuPlUj7YZdJBW.MW","1999-10-19","21","","1","","","","2021-09-29","selfie.jpg","Angpogiko","0","2021-10-09 18:54:03","0");
INSERT INTO tbl_user VALUES("CSTMR24","cm","tadifa","cmtadifa@gmail.com","639515215487","$2y$10$Z8fNYWWkavEh09Enau0SyOvn.8kum7EhWh4CEG9Risty/XCku3hPq","1999-07-28","21","","1","","","","2021-06-26","IMG_1013.JPG","Angpangetko","0","2021-06-26 12:26:43","0");



CREATE TABLE `tbl_visitor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip_address` text NOT NULL,
  `visit_date` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

INSERT INTO tbl_visitor VALUES("1","12:12:12:12","2021-03-23 19:46:54");
INSERT INTO tbl_visitor VALUES("2","54:54:54","2021-03-23 19:59:00");
INSERT INTO tbl_visitor VALUES("3","54:54:54:34","2021-03-23 20:03:44");
INSERT INTO tbl_visitor VALUES("4","54:54:54:15","2021-03-23 20:04:27");
INSERT INTO tbl_visitor VALUES("5","::1","2021-03-23 20:04:48");
INSERT INTO tbl_visitor VALUES("6","54:54:54:88","2021-03-24 12:18:18");
INSERT INTO tbl_visitor VALUES("7","54:54:54:11","2021-03-24 19:30:07");
INSERT INTO tbl_visitor VALUES("8","54:54:54:555","2021-03-24 21:00:07");
INSERT INTO tbl_visitor VALUES("9","127.0.0.1","2021-05-01 21:16:27");
INSERT INTO tbl_visitor VALUES("10","152.32.99.205","2021-08-06 19:26:20");
INSERT INTO tbl_visitor VALUES("11","103.225.137.34","2021-09-08 08:08:32");
INSERT INTO tbl_visitor VALUES("12","45.124.59.38","2021-09-08 08:11:31");

