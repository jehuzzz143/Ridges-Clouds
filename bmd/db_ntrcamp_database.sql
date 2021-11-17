

CREATE TABLE `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `appID` varchar(500) NOT NULL,
  `title` text DEFAULT NULL,
  `start_event` datetime NOT NULL,
  `end_event` datetime NOT NULL,
  `color` varchar(191) DEFAULT NULL,
  `text_color` varchar(191) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=269 DEFAULT CHARSET=utf8mb4;

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
INSERT INTO events VALUES("184","212","jehu, ombrog | Daytour | 1 | Pending","2021-09-30 10:09:00","2021-09-30 14:39:00","#000000","#FFFFFF");
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
INSERT INTO events VALUES("200","241","jehu, ombrog | Overnight  || C3   || Sunrise Breakfast  ||  Veranda ","2021-10-14 14:00:00","2021-10-15 12:00:00","#3498DB","#FDFEFE");
INSERT INTO events VALUES("201","244","leica, balayanto | Daytour | 1 | Pending","2021-10-15 07:10:00","2021-10-15 10:10:00","#000000","#FFFFFF");
INSERT INTO events VALUES("202","245","jehu, ombrog | Daytour | 2 | Pending","2021-10-14 07:10:00","2021-10-14 10:10:00","#000000","#FFFFFF");
INSERT INTO events VALUES("203","247","jehu, ombrog | Daytour | 2 | Completed","2021-11-01 07:11:00","2021-11-01 10:11:00","#000000","#FFFFFF");
INSERT INTO events VALUES("204","249","jehu, ombrog | Overnight |  C2  |  Sunrise Breakfast |   Veranda | Completed","2021-11-01 14:00:00","2021-11-02 12:00:00","#000000","#FFFFFF");
INSERT INTO events VALUES("205","248","jehu, ombrog | Overnight |   C1 | Completed","2021-11-01 14:00:00","2021-11-03 12:00:00","#000000","#FFFFFF");
INSERT INTO events VALUES("225","276","jehu, ombrog | Overnight |   C8 | Confirmed","2021-10-28 14:00:00","2021-10-29 12:00:00","#3498DB","#FDFEFE");
INSERT INTO events VALUES("222","CLOSE","Daytour CLOSE CAMP MAINTENANCE","2021-10-24 00:00:00","2021-10-25 00:00:00","#655656","#FFFFFF");
INSERT INTO events VALUES("223","273","jehu, ombrog | Overnight |  C5 |  Sunrise Breakfast |   Veranda | Confirmed","2021-10-28 14:00:00","2021-10-29 12:00:00","#3498DB","#FDFEFE");
INSERT INTO events VALUES("224","275","jehu, ombrog | Overnight |  C6 |  Sunrise Breakfast |   Veranda | Confirmed","2021-10-28 14:00:00","2021-10-29 12:00:00","#3498DB","#FDFEFE");
INSERT INTO events VALUES("226","281","jehu, ombrog | Daytour | 20 | Confirmed","2021-11-11 16:11:00","2021-11-11 19:11:00","#FF5733","white");
INSERT INTO events VALUES("227","279","jehu, ombrog | Daytour | 10 | Confirmed","2021-11-18 07:11:00","2021-11-18 10:11:00","#FF5733","white");
INSERT INTO events VALUES("228","293","jehu, ombrog | Overnight |   C1 | Confirmed","2021-11-06 14:00:00","2021-11-07 12:00:00","#3498DB","#FDFEFE");
INSERT INTO events VALUES("231","296","jehu, ombrog | Daytour | 5 | Confirmed","2021-11-27 07:11:00","2021-11-27 10:11:00","#FF5733","white");
INSERT INTO events VALUES("232","297","jehu, ombrog | Daytour | 5 | Confirmed","2021-11-27 07:11:00","2021-11-27 10:11:00","#FF5733","white");
INSERT INTO events VALUES("233","298","jehu, ombrog | Daytour | 5 | Confirmed","2021-12-07 10:00:00","2021-12-07 13:00:00","#FF5733","white");
INSERT INTO events VALUES("234","300","jehu, ombrog | Overnight |   C1  || C2  || C3 | Confirmed","2021-12-30 14:00:00","2022-01-02 12:00:00","#3498DB","#FDFEFE");
INSERT INTO events VALUES("235","301","jehu, ombrog | Overnight |   C1  || C2 | Confirmed","2021-12-15 14:00:00","2021-12-16 12:00:00","#3498DB","#FDFEFE");
INSERT INTO events VALUES("236","303","jehu, ombrog | Daytour | 10 | Confirmed","2021-12-22 10:12:00","2021-12-22 13:12:00","#FF5733","white");
INSERT INTO events VALUES("237","304","jehu, ombrog | Daytour | 10 | Confirmed","2021-12-15 13:12:00","2021-12-15 16:12:00","#FF5733","white");
INSERT INTO events VALUES("238","305","jehu, ombrog | Overnight |   C2 | Confirmed","2021-11-27 14:00:00","2021-11-28 12:00:00","#3498DB","#FDFEFE");
INSERT INTO events VALUES("239","306","jehu, ombrog | Daytour | 10 | Confirmed","2021-11-17 10:11:00","2021-11-17 13:11:00","#FF5733","white");
INSERT INTO events VALUES("240","307","jehu, ombrog | Daytour | 5 | Confirmed","2021-12-03 07:12:00","2021-12-03 10:12:00","#FF5733","white");
INSERT INTO events VALUES("241","302","jehu, ombrog | Overnight |   C4 | Confirmed","2022-02-02 14:00:00","2022-02-04 12:00:00","#3498DB","#FDFEFE");
INSERT INTO events VALUES("242","308","jehu, ombrog | Daytour | 5 | Confirmed","2021-11-26 07:11:00","2021-11-26 10:11:00","#FF5733","white");
INSERT INTO events VALUES("243","309","jehu, ombrog | Daytour | 10 | Confirmed","2021-12-15 10:12:00","2021-12-15 13:12:00","#FF5733","white");
INSERT INTO events VALUES("250","322","jehu, ombrog | Daytour | 5 | Confirmed","2021-11-30 07:11:00","2021-11-30 10:11:00","#FF5733","white");
INSERT INTO events VALUES("248","CLOSE","Overnight CLOSE CAMP MAINTENANCE","2021-11-25 14:00:00","2021-11-26 12:00:00","#655656","#FFFFFF");
INSERT INTO events VALUES("249","315","jehu, ombrog | Daytour | 5 | Confirmed","2021-11-30 07:11:00","2021-11-30 10:11:00","#FF5733","white");
INSERT INTO events VALUES("251","321","jehu, ombrog | Daytour | 1 | Confirmed","2021-11-30 07:11:00","2021-11-30 10:11:00","#FF5733","white");
INSERT INTO events VALUES("252","323","jehu, ombrog | Daytour | 5 | Confirmed","2021-11-30 07:11:00","2021-11-30 10:11:00","#FF5733","white");
INSERT INTO events VALUES("253","324","jehu, ombrog | Daytour | 1 | Confirmed","2021-11-30 07:11:00","2021-11-30 10:11:00","#FF5733","white");
INSERT INTO events VALUES("254","325","jehu, ombrog | Daytour | 5 | Confirmed","2021-11-30 07:11:00","2021-11-30 10:11:00","#FF5733","white");
INSERT INTO events VALUES("255","326","jehu, ombrog | Daytour | 5 | Confirmed","2021-11-30 07:11:00","2021-11-30 10:11:00","#FF5733","white");
INSERT INTO events VALUES("256","327","jehu, ombrog | Daytour | 5 | Confirmed","2021-11-30 07:11:00","2021-11-30 10:11:00","#FF5733","white");
INSERT INTO events VALUES("257","327","jehu, ombrog | Daytour | 5 | Confirmed","2021-11-30 07:11:00","2021-11-30 10:11:00","#FF5733","white");
INSERT INTO events VALUES("258","327","jehu, ombrog | Daytour | 5 | Confirmed","2021-11-30 07:11:00","2021-11-30 10:11:00","#FF5733","white");
INSERT INTO events VALUES("259","327","jehu, ombrog | Daytour | 5 | Confirmed","2021-11-30 07:11:00","2021-11-30 10:11:00","#FF5733","white");
INSERT INTO events VALUES("260","328","jehu, ombrog | Daytour | 5 | Confirmed","2021-11-30 07:11:00","2021-11-30 10:11:00","#FF5733","white");
INSERT INTO events VALUES("261","330","jehu, ombrog | Overnight |  C2 |  Sunrise Breakfast |   Veranda | Confirmed","2021-11-30 14:00:00","2021-12-01 12:00:00","#3498DB","#FDFEFE");
INSERT INTO events VALUES("262","331","jehu, ombrog | Daytour | 5 | Confirmed","2021-11-30 07:11:00","2021-11-30 10:11:00","#FF5733","white");
INSERT INTO events VALUES("263","335","jehu, ombrog | Overnight |   C4 | Confirmed","2021-12-30 14:00:00","2021-12-31 12:00:00","#3498DB","#FDFEFE");
INSERT INTO events VALUES("264","336","jehu, ombrog | Overnight |   C3 | Confirmed","2021-11-30 14:00:00","2021-12-01 12:00:00","#3498DB","#FDFEFE");
INSERT INTO events VALUES("265","337","jehu, ombrog | Overnight |   C7 | Confirmed","2021-11-30 14:00:00","2021-12-01 12:00:00","#3498DB","#FDFEFE");
INSERT INTO events VALUES("266","334","jehu, ombrog | Daytour | 5 | Confirmed","2021-12-31 07:12:00","2021-12-31 10:12:00","#FF5733","white");
INSERT INTO events VALUES("267","338","jehu, ombrog | Daytour | 1 | Confirmed","2021-12-02 07:12:00","2021-12-02 10:12:00","#FF5733","white");
INSERT INTO events VALUES("268","340","jehu, ombrog | Overnight |   C5 | Confirmed","2021-11-30 14:00:00","2021-12-01 12:00:00","#3498DB","#FDFEFE");



CREATE TABLE `pwdreset` (
  `pwdResetID` int(11) NOT NULL,
  `pwdResetEmail` text NOT NULL,
  `pwdResetSelector` text NOT NULL,
  `pwdResetToken` longtext NOT NULL,
  `pwdResetExpires` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO pwdreset VALUES("0","jeombrog@student.fatima.edu.ph","79c708fa51019847","$2y$10$loBvPzOTM8b3DOYe3KXPzOJRBDT4PnvZcmwEipkRyQSvvvLm6p8fu","1632892996");
INSERT INTO pwdreset VALUES("0","stevenmoran143@gmail.com","9caaf30b4cab93b9","$2y$10$SBS3BhARiyG97MXTi5YWruS66Xhira3YDTkBqkkDpDB0fzhC5R.0a","1632988738");
INSERT INTO pwdreset VALUES("0","jehuzzz143@gmail.com","3070481cda07f7e8","$2y$10$iOG6rzeGTTYdxuCS5XkPNey46BT6yImZqiP9jVWz3v3PNMROmFHXu","1632988748");
INSERT INTO pwdreset VALUES("0","Kazuto564@gmail.com","59309750e12569cd","$2y$10$11JoBsDc0VdghNN2rhXjw.YULrlBmVKqvKY3DQxzZSyi1fYP60nYa","1636619745");
INSERT INTO pwdreset VALUES("0","capstonefourth@gmail.com","21bb9cf57c55a5f4","$2y$10$6gocNwXsNZMpvGxRIUvE9.7a.gu1PFFvX6BTqT47/m55DxphucyMK","1637115482");



CREATE TABLE `tbl_announcement` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `header` varchar(500) NOT NULL,
  `Description` varchar(2000) NOT NULL,
  `start` datetime NOT NULL,
  `endd` datetime NOT NULL,
  `status` varchar(150) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

INSERT INTO tbl_announcement VALUES("11","close","zxczcxz","2021-10-06 14:49:00","2021-12-06 14:49:00","inactive");
INSERT INTO tbl_announcement VALUES("12","!! Updates on RaC operations while on MECQ up to 15October 2021!!   ","Due to inconsistent checkpoint requirements during MECQ, we accept WALK-IN guests who are able to pass thru checkpoints. Guests with APOR IDs or who are Rizal residents are usually allowed. Checkpoint operations are usually  from 7am-3pm along Marilaque Highway, just 5 mins before Ridges and Clouds.
","2021-10-09 18:23:00","2021-12-25 18:23:00","inactive");
INSERT INTO tbl_announcement VALUES("9","Medical Certification is requiredd","We are happy to announce that we are now allowed to re-open under MGCQ by virtue of the Certificate to Operate granted by the Department of Tourism to our establishment.","2021-09-16 19:04:00","2021-12-28 19:04:00","inactive");
INSERT INTO tbl_announcement VALUES("10","The camp is closed due to maintenance","The camp willnow having a dining area where we need to close the camp for a month for better service in the future","2021-09-17 19:07:00","2021-12-27 19:07:00","deleted");
INSERT INTO tbl_announcement VALUES("13","SAFETY AND HEALTH PROTOCOLS   ","• Only 18-65 years old are allowed <br>
• Pregnant women and persons with comorbities not allowed<br>
• No face mask No Entry<br>
• Social distancing and wearing of mask are strictly observed","2021-11-01 18:27:00","2021-12-25 18:27:00","active");
INSERT INTO tbl_announcement VALUES("14","Tanay LGU/DOT requirements:","1) Guests must be fully vaccinated <br>
2) Only 18-65 years old are allowed<br>
3) Pregnant women and individuals with health risk are not allowed","2021-11-01 04:15:00","2021-12-25 04:15:00","active");



CREATE TABLE `tbl_audit` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `UserID` varchar(100) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `Date_edit` date NOT NULL,
  `Name` varchar(100) NOT NULL,
  `type` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=451 DEFAULT CHARSET=utf8mb4;

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
INSERT INTO tbl_audit VALUES("244","CSTMR10","Confirm Overnight Booking ID: 241 ","2021-10-12","pol, garcia","booking");
INSERT INTO tbl_audit VALUES("245","CSTMR10","Update photo id: ","2021-10-12","pol, garciaa","Information");
INSERT INTO tbl_audit VALUES("246","CSTMR10","Create new promo code : QWERT","2021-10-12","pol, garciaa","system");
INSERT INTO tbl_audit VALUES("247","CSTMR10","Confirm Daytour Booking ID: 244 ","2021-10-12","pol, garciaa","booking");
INSERT INTO tbl_audit VALUES("248","CSTMR10","Finish Booking ID:  transaction","2021-10-12","pol, garciaa","booking");
INSERT INTO tbl_audit VALUES("249","CSTMR10","Export Database Copy","2021-10-12","pol, garciaa","System");
INSERT INTO tbl_audit VALUES("250","CSTMR10","Generate sales report from: 2021-09-01 to 2021-11-31","2021-10-12","pol, garciaa","System");
INSERT INTO tbl_audit VALUES("251","CSTMR10","disable promo code : PWD","2021-10-12","pol, garciaa","Information");
INSERT INTO tbl_audit VALUES("252","CSTMR10","Confirm Daytour Booking ID: 245 ","2021-10-13","pol, garciaa","booking");
INSERT INTO tbl_audit VALUES("253","CSTMR10","Finish Booking ID:  transaction","2021-10-13","pol, garciaa","booking");
INSERT INTO tbl_audit VALUES("254","CSTMR10","Archive Announcement ID: 9","2021-10-13","pol, garciaa","Information");
INSERT INTO tbl_audit VALUES("255","CSTMR10","Update  Standard Couple Cabana       accomodation Details","2021-10-13","pol, garciaa","Information");
INSERT INTO tbl_audit VALUES("256","CSTMR10","Added new photo in gallery","2021-10-13","pol, garciaa","Information");
INSERT INTO tbl_audit VALUES("257","CSTMR10","Update promo code : ZZZZ","2021-10-13","pol, garciaa","Information");
INSERT INTO tbl_audit VALUES("258","CSTMR10","Generate sales report from: 2021-09-01 to 2021-11-31","2021-10-13","pol, garciaa","System");
INSERT INTO tbl_audit VALUES("259","CSTMR10","Export Database Copy","2021-10-13","pol, garciaa","System");
INSERT INTO tbl_audit VALUES("260","CSTMR10","Decline Booking ID: 240 ","2021-10-19","Benjamin, Gandeza","booking");
INSERT INTO tbl_audit VALUES("261","CSTMR10","Decline Booking ID: 243 ","2021-10-19","Benjamin, Gandeza","booking");
INSERT INTO tbl_audit VALUES("262","CSTMR10","Decline Booking ID: 246 ","2021-10-19","Benjamin, Gandeza","booking");
INSERT INTO tbl_audit VALUES("263","CSTMR10","Confirm Daytour Booking ID: 247 ","2021-10-19","pol, garciaa","booking");
INSERT INTO tbl_audit VALUES("264","CSTMR10","Decline Booking ID: 242 ","2021-10-19","jehu, ombrog","booking");
INSERT INTO tbl_audit VALUES("265","CSTMR10","Confirm Overnight Booking ID: 249 ","2021-10-19","pol, garciaa","booking");
INSERT INTO tbl_audit VALUES("266","CSTMR10","Confirm Overnight Booking ID: 248 ","2021-10-19","pol, garciaa","booking");
INSERT INTO tbl_audit VALUES("267","CSTMR10","Finish Booking ID:  transaction","2021-10-19","pol, garciaa","booking");
INSERT INTO tbl_audit VALUES("268","CSTMR10","Finish Booking ID:  transaction","2021-10-19","pol, garciaa","booking");
INSERT INTO tbl_audit VALUES("269","CSTMR10","Finish Booking ID:  transaction","2021-10-19","pol, garciaa","booking");
INSERT INTO tbl_audit VALUES("270","CSTMR10","Update  Standard Couple Cabana accomodation Details","2021-10-20","pol, garciaa","Information");
INSERT INTO tbl_audit VALUES("271","CSTMR10","Update  DeLuxe Couple Cabana accomodation Details","2021-10-20","pol, garciaa","Information");
INSERT INTO tbl_audit VALUES("272","CSTMR10","Update  DeLuxe Couple Cabana accomodation Details","2021-10-20","pol, garciaa","Information");
INSERT INTO tbl_audit VALUES("273","CSTMR10","Update  DeLuxe Couple Cabana accomodation Details","2021-10-20","pol, garciaa","Information");
INSERT INTO tbl_audit VALUES("274","CSTMR10","Update  DeLuxeCouple Cabana accomodation Details","2021-10-20","pol, garciaa","Information");
INSERT INTO tbl_audit VALUES("275","CSTMR10","Update  DeLuxe Couple Cabana accomodation Details","2021-10-20","pol, garciaa","Information");
INSERT INTO tbl_audit VALUES("276","CSTMR10","Update  DeLuxeCouple Cabana accomodation Details","2021-10-20","pol, garciaa","Information");
INSERT INTO tbl_audit VALUES("277","CSTMR10","Update  DeLuxeCouple Cabana accomodation Details","2021-10-20","pol, garciaa","Information");
INSERT INTO tbl_audit VALUES("278","CSTMR10","Update  StandardCouple Cabana accomodation Details","2021-10-20","pol, garciaa","Information");
INSERT INTO tbl_audit VALUES("279","CSTMR10","Update  StandardCouple Cabana accomodation Details","2021-10-20","pol, garciaa","Information");
INSERT INTO tbl_audit VALUES("280","CSTMR10","Update  StandardCouple Cabana accomodation Details","2021-10-20","pol, garciaa","Information");
INSERT INTO tbl_audit VALUES("281","CSTMR10","Update  StandardCouple Cabana accomodation Details","2021-10-20","pol, garciaa","Information");
INSERT INTO tbl_audit VALUES("282","CSTMR10","Update  DeLuxe Couple Cabana accomodation Details","2021-10-20","pol, garciaa","Information");
INSERT INTO tbl_audit VALUES("283","CSTMR10","Update  StandardCoupleCabana accomodation Details","2021-10-20","pol, garciaa","Information");
INSERT INTO tbl_audit VALUES("284","CSTMR10","Update  Standard Couple Cabana accomodation Details","2021-10-20","pol, garciaa","Information");
INSERT INTO tbl_audit VALUES("285","CSTMR10","Update  DeLuxe Couple Cabana accomodation Details","2021-10-20","pol, garciaa","Information");
INSERT INTO tbl_audit VALUES("286","CSTMR10","Update  Standard Couple Cabana accomodation Details","2021-10-20","pol, garciaa","Information");
INSERT INTO tbl_audit VALUES("287","CSTMR10","Update  DeLuxe Couple Cabana accomodation Details","2021-10-20","pol, garciaa","Information");
INSERT INTO tbl_audit VALUES("288","CSTMR10","Update  Standard Couple Cabana accomodation Details","2021-10-20","pol, garciaa","Information");
INSERT INTO tbl_audit VALUES("289","CSTMR10","Update  DeLuxe Couple Cabana accomodation Details","2021-10-20","pol, garciaa","Information");
INSERT INTO tbl_audit VALUES("290","CSTMR10","Update  Standard Couple Cabana accomodation Details","2021-10-20","pol, garciaa","Information");
INSERT INTO tbl_audit VALUES("291","CSTMR10","Update  DeLuxe Couple Cabana accomodation Details","2021-10-20","pol, garciaa","Information");
INSERT INTO tbl_audit VALUES("292","CSTMR10","Update  Standard Couple Cabana   accomodation Details","2021-10-20","pol, garciaa","Information");
INSERT INTO tbl_audit VALUES("293","CSTMR10","Update  Twin Ifugao House  accomodation Details","2021-10-20","pol, garciaa","Information");
INSERT INTO tbl_audit VALUES("294","CSTMR10","Update  DeLuxe Couple Cabana  accomodation Details","2021-10-20","pol, garciaa","Information");
INSERT INTO tbl_audit VALUES("295","CSTMR10","Update  Standard Couple Cabana   accomodation Details","2021-10-20","pol, garciaa","Information");
INSERT INTO tbl_audit VALUES("296","CSTMR10","Update  DeLuxe Couple Cabana  accomodation Details","2021-10-20","pol, garciaa","Information");
INSERT INTO tbl_audit VALUES("297","CSTMR10","Update  Twin Ifugao House  accomodation Details","2021-10-20","pol, garciaa","Information");
INSERT INTO tbl_audit VALUES("298","CSTMR10","Update  Twin Ifugao House     accomodation Details","2021-10-20","pol, garciaa","Information");
INSERT INTO tbl_audit VALUES("299","CSTMR10","Update  DeLuxe Couple Cabana  accomodation Details","2021-10-20","pol, garciaa","Information");
INSERT INTO tbl_audit VALUES("300","CSTMR10","Update  DeLuxe Couple Cabana   accomodation Details","2021-10-20","pol, garciaa","Information");
INSERT INTO tbl_audit VALUES("301","CSTMR10","Update  Standard Couple Cabana  accomodation Details","2021-10-20","pol, garciaa","Information");
INSERT INTO tbl_audit VALUES("302","CSTMR10","Update  Standard Couple Cabana    accomodation Details","2021-10-20","pol, garciaa","Information");
INSERT INTO tbl_audit VALUES("303","CSTMR10","Update  Standard Couple Cabana  accomodation Details","2021-10-20","pol, garciaa","Information");
INSERT INTO tbl_audit VALUES("304","CSTMR10","Update  Standard Couple Cabana    accomodation Details","2021-10-20","pol, garciaa","Information");
INSERT INTO tbl_audit VALUES("305","CSTMR10","Update  DeLuxe Couple Cabana   accomodation Details","2021-10-20","pol, garciaa","Information");
INSERT INTO tbl_audit VALUES("306","CSTMR10","Update  DeLuxe Couple Cabana  accomodation Details","2021-10-20","pol, garciaa","Information");
INSERT INTO tbl_audit VALUES("307","CSTMR10","Update  DeLuxe Couple Cabana  accomodation Details","2021-10-20","pol, garciaa","Information");
INSERT INTO tbl_audit VALUES("308","CSTMR10","Update  DeLuxe Couple Cabana   accomodation Details","2021-10-20","pol, garciaa","Information");
INSERT INTO tbl_audit VALUES("309","CSTMR10","Update  Twin Ifugao House      accomodation Details","2021-10-20","pol, garciaa","Information");
INSERT INTO tbl_audit VALUES("310","CSTMR10","Update  DeLuxe Couple Cabana    accomodation Details","2021-10-20","pol, garciaa","Information");
INSERT INTO tbl_audit VALUES("311","CSTMR10","Update  DeLuxe Couple Cabana   accomodation Details","2021-10-20","pol, garciaa","Information");
INSERT INTO tbl_audit VALUES("312","CSTMR10","Update  DeLuxe Couple Cabana    accomodation Details","2021-10-20","pol, garciaa","Information");
INSERT INTO tbl_audit VALUES("313","CSTMR10","Update  DeLuxe Couple Cabana    accomodation Details","2021-10-20","pol, garciaa","Information");
INSERT INTO tbl_audit VALUES("314","CSTMR10","Update  DeLuxe Couple Cabana     accomodation Details","2021-10-20","pol, garciaa","Information");
INSERT INTO tbl_audit VALUES("315","CSTMR10","Update  Twin Ifugao House   accomodation Details","2021-10-20","pol, garciaa","Information");
INSERT INTO tbl_audit VALUES("316","CSTMR10","Update  DeLuxe Couple Cabana    accomodation Details","2021-10-20","pol, garciaa","Information");
INSERT INTO tbl_audit VALUES("317","CSTMR10","Update  Twin Ifugao House       accomodation Details","2021-10-20","pol, garciaa","Information");
INSERT INTO tbl_audit VALUES("318","CSTMR10","Update  DeLuxe Couple Cabana     accomodation Details","2021-10-20","pol, garciaa","Information");
INSERT INTO tbl_audit VALUES("319","CSTMR10","Update  DeLuxe Couple Cabana     accomodation Details","2021-10-20","pol, garciaa","Information");
INSERT INTO tbl_audit VALUES("320","CSTMR10","Update  Standard Couple Cabana  accomodation Details","2021-10-20","pol, garciaa","Information");
INSERT INTO tbl_audit VALUES("321","CSTMR10","Update  Standard Couple Cabana  accomodation Details","2021-10-20","pol, garciaa","Information");
INSERT INTO tbl_audit VALUES("322","CSTMR10","Update  Standard Couple Cabana  accomodation Details","2021-10-20","pol, garciaa","Information");
INSERT INTO tbl_audit VALUES("323","CSTMR10","Update  DeLuxe Couple Cabana  accomodation Details","2021-10-20","pol, garciaa","Information");
INSERT INTO tbl_audit VALUES("324","CSTMR10","Update  DeLuxe Couple Cabana  accomodation Details","2021-10-20","pol, garciaa","Information");
INSERT INTO tbl_audit VALUES("325","CSTMR10","Update  DeLuxe Couple Cabana  accomodation Details","2021-10-20","pol, garciaa","Information");
INSERT INTO tbl_audit VALUES("326","CSTMR10","Update  DeLuxe Couple Cabana  accomodation Details","2021-10-20","pol, garciaa","Information");
INSERT INTO tbl_audit VALUES("327","CSTMR10","Update  DeLuxe Couple Cabana  accomodation Details","2021-10-20","pol, garciaa","Information");
INSERT INTO tbl_audit VALUES("328","CSTMR10","Update  Twin Ifugao House  accomodation Details","2021-10-20","pol, garciaa","Information");
INSERT INTO tbl_audit VALUES("329","CSTMR10","Update  DeLuxe Couple Cabana  accomodation Details","2021-10-20","pol, garciaa","Information");
INSERT INTO tbl_audit VALUES("330","CSTMR10","Update  DeLuxe Couple Cabana  accomodation Details","2021-10-20","pol, garciaa","Information");
INSERT INTO tbl_audit VALUES("331","CSTMR10","Update  Twin Ifugao House  accomodation Details","2021-10-20","pol, garciaa","Information");
INSERT INTO tbl_audit VALUES("332","CSTMR10","Update  De Luxe Couple Cabana   accomodation Details","2021-10-20","pol, garciaa","Information");
INSERT INTO tbl_audit VALUES("333","CSTMR10","Update  De Luxe Couple Cabana   accomodation Details","2021-10-20","pol, garciaa","Information");
INSERT INTO tbl_audit VALUES("334","CSTMR10","Update  De Luxe Couple Cabana  accomodation Details","2021-10-20","pol, garciaa","Information");
INSERT INTO tbl_audit VALUES("335","CSTMR10","Update  De Luxe Couple Cabana  accomodation Details","2021-10-20","pol, garciaa","Information");
INSERT INTO tbl_audit VALUES("336","CSTMR10","Update  De Luxe Couple Cabana  accomodation Details","2021-10-20","pol, garciaa","Information");
INSERT INTO tbl_audit VALUES("337","CSTMR10","Delete photo id: 32","2021-10-20","pol, garciaa","Information");
INSERT INTO tbl_audit VALUES("338","CSTMR10","Delete close date from: 1970-01-01 to 1970-01-01","2021-10-22","pol, garciaa","booking");
INSERT INTO tbl_audit VALUES("339","CSTMR10","Declare Date Close from: 2021-11-01 to 2021-11-02 ","2021-10-22","pol, garciaa","booking");
INSERT INTO tbl_audit VALUES("340","CSTMR10","Update Closed Date id=217","2021-10-22","pol, garciaa","booking");
INSERT INTO tbl_audit VALUES("341","CSTMR10","Update Closed Date ID=217 to | 2021-11-03T00:00 to 2021-11-04T00:00","2021-10-22","pol, garciaa","booking");
INSERT INTO tbl_audit VALUES("342","CSTMR10","Update Closed Date ID=217 to | 2021-11-04 00:00 to 2021-11-05 00:00","2021-10-22","pol, garciaa","booking");
INSERT INTO tbl_audit VALUES("343","CSTMR10","Declare Date Close from: 2021-10-23 to 2021-10-25 ","2021-10-22","pol, garciaa","booking");
INSERT INTO tbl_audit VALUES("344","CSTMR10","Delete close date from: 1970-01-01 to 1970-01-01 ","2021-10-22","pol, garciaa","booking");
INSERT INTO tbl_audit VALUES("345","CSTMR10","Delete close date from: 1970-01-01 to 1970-01-01 ","2021-10-22","pol, garciaa","booking");
INSERT INTO tbl_audit VALUES("346","CSTMR10","Declare Daytour Date Close from: November 1st, 2021 02:00 pm to November 2nd, 2021 12:00 pm ","2021-10-22","pol, garciaa","booking");
INSERT INTO tbl_audit VALUES("347","CSTMR10","Update Closed Date ID:219 to | 2021-11-02 00:00 to 2021-11-03 00:00","2021-10-22","pol, garciaa","booking");
INSERT INTO tbl_audit VALUES("348","CSTMR10","Update Closed Date ID:219 from | November 3rd, 2021 12:00 am to November 4th, 2021 12:00 am","2021-10-22","pol, garciaa","booking");
INSERT INTO tbl_audit VALUES("349","CSTMR10","Delete close date from: 1970-01-01 to 1970-01-01 ","2021-10-22","pol, garciaa","booking");
INSERT INTO tbl_audit VALUES("350","CSTMR10","Declare Daytour Date Close from: October 23rd, 2021 02:00 pm to October 24th, 2021 12:00 pm ","2021-10-22","pol, garciaa","booking");
INSERT INTO tbl_audit VALUES("351","CSTMR10","Delete close date from: 1970-01-01 to 1970-01-01 ","2021-10-22","pol, garciaa","booking");
INSERT INTO tbl_audit VALUES("352","CSTMR10","Delete close date from: October 23rd, 2021 12:00 am to October 24th, 2021 12:00 am ","2021-10-22","pol, garciaa","booking");
INSERT INTO tbl_audit VALUES("353","CSTMR10","Declare Daytour Date Close from: October 23rd, 2021 02:00 pm to October 24th, 2021 12:00 pm ","2021-10-22","pol, garciaa","booking");
INSERT INTO tbl_audit VALUES("354","CSTMR10","Delete close date from: October 23rd, 2021 12:00 am to October 24th, 2021 12:00 am ","2021-10-22","pol, garciaa","booking");
INSERT INTO tbl_audit VALUES("355","CSTMR10","Declare Daytour Date Close from: October 24th, 2021 02:00 pm to October 25th, 2021 12:00 pm ","2021-10-22","pol, garciaa","booking");
INSERT INTO tbl_audit VALUES("356","CSTMR10","New Add Ons create titled:   ","2021-10-25","pol, garciaa","Information");
INSERT INTO tbl_audit VALUES("357","CSTMR10","New Add Ons created titled:  sample add ons ","2021-10-25","pol, garciaa","Information");
INSERT INTO tbl_audit VALUES("358","CSTMR10","Update Add Ons info of titled <u> Sample Sample </u>","2021-10-25","pol, garciaa","Information");
INSERT INTO tbl_audit VALUES("359","CSTMR10","Delete Add Ons info of <u> Sample Sample </u>","2021-10-25","pol, garciaa","Information");
INSERT INTO tbl_audit VALUES("360","CSTMR10","New Add Ons created titled: <u> bryan  </u>","2021-10-26","pol, garciaa","Information");
INSERT INTO tbl_audit VALUES("361","CSTMR10","Delete Add Ons titled: <u> bryan </u>","2021-10-26","pol, garciaa","Information");
INSERT INTO tbl_audit VALUES("362","CSTMR10","Disable Add Ons  titled: <u> Happy Birthday Banner </u>","2021-10-26","pol, garciaa","Information");
INSERT INTO tbl_audit VALUES("363","CSTMR10","Enabled Add Ons  titled: <u> Happy Birthday Banner </u>","2021-10-26","pol, garciaa","Information");
INSERT INTO tbl_audit VALUES("364","CSTMR10","Enabled Add Ons  titled: <u> Anniversary Banner </u>","2021-10-26","pol, garciaa","Information");
INSERT INTO tbl_audit VALUES("365","CSTMR10","Disabled Add Ons  titled: <u> Happy Birthday Banner </u>","2021-10-26","pol, garciaa","Information");
INSERT INTO tbl_audit VALUES("366","CSTMR10","Enabled Add Ons  titled: <u> Happy Birthday Banner </u>","2021-10-26","pol, garciaa","Information");
INSERT INTO tbl_audit VALUES("367","CSTMR10","Update Add Ons information of titled: <u> Happy Birthday Banner </u>","2021-10-26","pol, garciaa","Information");
INSERT INTO tbl_audit VALUES("368","CSTMR10","New Add Ons created titled: <u> axie </u>","2021-10-26","pol, garciaa","Information");
INSERT INTO tbl_audit VALUES("369","CSTMR10","Disabled Add Ons  titled: <u> axie </u>","2021-10-26","pol, garciaa","Information");
INSERT INTO tbl_audit VALUES("370","CSTMR10","Update Add Ons information of titled: <u> axie </u>","2021-10-26","pol, garciaa","Information");
INSERT INTO tbl_audit VALUES("371","CSTMR10","Enabled Add Ons  titled: <u> axie </u>","2021-10-26","pol, garciaa","Information");
INSERT INTO tbl_audit VALUES("372","CSTMR10","Update Add Ons information of titled: <u> axie </u>","2021-10-26","pol, garciaa","Information");
INSERT INTO tbl_audit VALUES("373","CSTMR10","Update Add Ons information of titled: <u> axie </u>","2021-10-26","pol, garciaa","Information");
INSERT INTO tbl_audit VALUES("374","CSTMR10","Update Add Ons information of titled: <u> Happy Birthday Banner </u>","2021-10-26","pol, garciaa","Information");
INSERT INTO tbl_audit VALUES("375","CSTMR10","Update Add Ons information of titled: <u> Happy Birthday Banner </u>","2021-10-26","pol, garciaa","Information");
INSERT INTO tbl_audit VALUES("376","CSTMR10","Update promo code : RNC10","2021-10-27","pol, garciaa","Information");
INSERT INTO tbl_audit VALUES("377","CSTMR10","Confirm Overnight Booking ID: 273 ","2021-10-27","pol, garciaa","booking");
INSERT INTO tbl_audit VALUES("378","CSTMR10","Confirm Overnight Booking ID: 275 ","2021-10-27","pol, garciaa","booking");
INSERT INTO tbl_audit VALUES("379","CSTMR10","Confirm Overnight Booking ID: 276 ","2021-10-27","pol, garciaa","booking");
INSERT INTO tbl_audit VALUES("380","CSTMR10","Decline Booking ID: 227 ","2021-11-01","jehu, ombrog","booking");
INSERT INTO tbl_audit VALUES("381","CSTMR10","Decline Booking ID: 226 ","2021-11-01","jehu, ombrog","booking");
INSERT INTO tbl_audit VALUES("382","CSTMR10","Decline Booking ID: 282 ","2021-11-01","jehu, ombrog","booking");
INSERT INTO tbl_audit VALUES("383","CSTMR10","Decline Booking ID: 274 ","2021-11-01","jehu, ombrog","booking");
INSERT INTO tbl_audit VALUES("384","CSTMR10","Decline Booking ID: 277 ","2021-11-01","jehu, ombrog","booking");
INSERT INTO tbl_audit VALUES("385","CSTMR10","Decline Booking ID: 278 ","2021-11-01","jehu, ombrog","booking");
INSERT INTO tbl_audit VALUES("386","CSTMR10","Decline Booking ID: 280 ","2021-11-01","jehu, ombrog","booking");
INSERT INTO tbl_audit VALUES("387","CSTMR10","Add new Announcement ","2021-11-01","pol, garciaa","announcement");
INSERT INTO tbl_audit VALUES("388","CSTMR10","Archive Announcement ID: 12","2021-11-01","pol, garciaa","Information");
INSERT INTO tbl_audit VALUES("389","CSTMR10","Recover Announcement ID: 13","2021-11-01","pol, garciaa","Information");
INSERT INTO tbl_audit VALUES("390","CSTMR10","Change Announcement ID: 13","2021-11-01","pol, garciaa","Information");
INSERT INTO tbl_audit VALUES("391","CSTMR10","Change Announcement ID: 13","2021-11-01","pol, garciaa","Information");
INSERT INTO tbl_audit VALUES("392","CSTMR10","Change Announcement ID: 13","2021-11-01","pol, garciaa","Information");
INSERT INTO tbl_audit VALUES("393","CSTMR10","Posted review of costumer named Bryan Dollentas - status to enable","2021-11-01","pol, garciaa","");
INSERT INTO tbl_audit VALUES("394","CSTMR10","Confirm Daytour Booking ID: 281 ","2021-11-01","pol, garciaa","booking");
INSERT INTO tbl_audit VALUES("395","CSTMR10","Decline Booking ID: 286 ","2021-11-02","jehu, ombrog","booking");
INSERT INTO tbl_audit VALUES("396","CSTMR10","Confirm Daytour Booking ID: 279 ","2021-11-02","pol, garciaa","booking");
INSERT INTO tbl_audit VALUES("397","CSTMR10","Confirm Overnight Booking ID: 293 ","2021-11-02","pol, garciaa","booking");
INSERT INTO tbl_audit VALUES("398","CSTMR10","Refund booking ID: 293 ","2021-11-02","pol, garciaa","booking");
INSERT INTO tbl_audit VALUES("399","CSTMR10","Confirm Daytour Booking ID: 294 ","2021-11-02","pol, garciaa","booking");
INSERT INTO tbl_audit VALUES("400","CSTMR10","Refund booking ID: 294 ","2021-11-02","pol, garciaa","booking");
INSERT INTO tbl_audit VALUES("401","CSTMR10","Confirm Daytour Booking ID: 295 ","2021-11-02","pol, garciaa","booking");
INSERT INTO tbl_audit VALUES("402","CSTMR10","Refund booking ID: 295 ","2021-11-02","pol, garciaa","booking");
INSERT INTO tbl_audit VALUES("403","CSTMR10","Confirm Daytour Booking ID: 296 ","2021-11-02","pol, garciaa","booking");
INSERT INTO tbl_audit VALUES("404","CSTMR10","Confirm Daytour Booking ID: 297 ","2021-11-03","pol, garciaa","booking");
INSERT INTO tbl_audit VALUES("405","CSTMR10","Added new photo in gallery","2021-11-03","pol, garciaa","Information");
INSERT INTO tbl_audit VALUES("406","CSTMR10","Added new photo in gallery","2021-11-03","pol, garciaa","Information");
INSERT INTO tbl_audit VALUES("407","CSTMR10","Confirm Daytour Booking ID: 298 ","2021-11-05","pol, garciaa","booking");
INSERT INTO tbl_audit VALUES("408","CSTMR10","Confirm Overnight Booking ID: 300 ","2021-11-05","pol, garciaa","booking");
INSERT INTO tbl_audit VALUES("409","CSTMR10","Confirm Overnight Booking ID: 301 ","2021-11-05","pol, garciaa","booking");
INSERT INTO tbl_audit VALUES("410","CSTMR25","Decline Booking ID: 299 ","2021-11-11","jehu, ombrog","booking");
INSERT INTO tbl_audit VALUES("411","CSTMR25","Confirm Daytour Booking ID: 303 ","2021-11-11","pol, garciaa","booking");
INSERT INTO tbl_audit VALUES("412","CSTMR25","Confirm Daytour Booking ID: 304 ","2021-11-11","pol, garciaa","booking");
INSERT INTO tbl_audit VALUES("413","CSTMR25","Confirm Overnight Booking ID: 305 ","2021-11-11","pol, garciaa","booking");
INSERT INTO tbl_audit VALUES("414","CSTMR25","Confirm Daytour Booking ID: 306 ","2021-11-11","pol, garciaa","booking");
INSERT INTO tbl_audit VALUES("415","CSTMR25","Confirm Daytour Booking ID: 307 ","2021-11-11","pol, garciaa","booking");
INSERT INTO tbl_audit VALUES("416","CSTMR25","Confirm Overnight Booking ID: 302 ","2021-11-11","pol, garciaa","booking");
INSERT INTO tbl_audit VALUES("417","CSTMR25","Confirm Daytour Booking ID: 308 ","2021-11-11","pol, garciaa","booking");
INSERT INTO tbl_audit VALUES("418","CSTMR25","Confirm Daytour Booking ID: 309 ","2021-11-11","pol, garciaa","booking");
INSERT INTO tbl_audit VALUES("419","CSTMR25","Confirm Daytour Booking ID: 310 ","2021-11-11","pol, garciaa","booking");
INSERT INTO tbl_audit VALUES("420","CSTMR25","Confirm Daytour Booking ID: 310 ","2021-11-11","pol, garciaa","booking");
INSERT INTO tbl_audit VALUES("421","CSTMR25","Confirm Daytour Booking ID: 311 ","2021-11-11","pol, garciaa","booking");
INSERT INTO tbl_audit VALUES("422","CSTMR25","Refund booking ID: 311 ","2021-11-11","pol, garciaa","booking");
INSERT INTO tbl_audit VALUES("423","CSTMR25","Refund booking ID: 310 ","2021-11-11","pol, garciaa","booking");
INSERT INTO tbl_audit VALUES("424","CSTMR10","add new room named as =zzzz zz ","2021-11-14","pol, garciaa","Information");
INSERT INTO tbl_audit VALUES("425","CSTMR10","Update  Twin Ifugao House accomodation Details","2021-11-14","pol, garciaa","Information");
INSERT INTO tbl_audit VALUES("426","CSTMR10","Update  Twin Ifugao House accomodation Details","2021-11-14","pol, garciaa","Information");
INSERT INTO tbl_audit VALUES("427","CSTMR10","Delete  zzzz zz   accomodation","2021-11-14","pol, garciaa","Information");
INSERT INTO tbl_audit VALUES("428","CSTMR10","Update  Standard Couple Cabana accomodation Details","2021-11-14","pol, garciaa","Information");
INSERT INTO tbl_audit VALUES("429","CSTMR10","add new room named as =zzzz ","2021-11-14","pol, garciaa","Information");
INSERT INTO tbl_audit VALUES("430","CSTMR10","Declare Overnight Date Close from: December 25th, 2021 02:00 pm to December 26th, 2021 12:00 pm ","2021-11-14","pol, garciaa","booking");
INSERT INTO tbl_audit VALUES("431","CSTMR10","Delete close date from: December 25th, 2021 02:00 pm to December 26th, 2021 12:00 pm ","2021-11-14","pol, garciaa","booking");
INSERT INTO tbl_audit VALUES("432","CSTMR10","Declare Overnight Date Close from: November 25th, 2021 02:00 pm to November 26th, 2021 12:00 pm ","2021-11-14","pol, garciaa","booking");
INSERT INTO tbl_audit VALUES("433","CSTMR25","Confirm Daytour Booking ID: 328 ","2021-11-16","pol, garciaa","booking");
INSERT INTO tbl_audit VALUES("434","CSTMR25","Decline Booking ID: 316 ","2021-11-16","jehu, ombrog","booking");
INSERT INTO tbl_audit VALUES("435","CSTMR25","Decline Booking ID: 329 ","2021-11-16","jehu, ombrog","booking");
INSERT INTO tbl_audit VALUES("436","CSTMR25","Confirm Overnight Booking ID: 330 ","2021-11-16","pol, garciaa","booking");
INSERT INTO tbl_audit VALUES("437","CSTMR25","Confirm Daytour Booking ID: 331 ","2021-11-16","pol, garciaa","booking");
INSERT INTO tbl_audit VALUES("438","CSTMR25","Decline Booking ID: 318 ","2021-11-16","jehu, ombrog","booking");
INSERT INTO tbl_audit VALUES("439","CSTMR25","Decline Booking ID: 317 ","2021-11-16","jehu, ombrog","booking");
INSERT INTO tbl_audit VALUES("440","CSTMR25","Decline Booking ID: 332 ","2021-11-16","jehu, ombrog","booking");
INSERT INTO tbl_audit VALUES("441","CSTMR25","Decline Booking ID: 333 ","2021-11-16","jehu, ombrog","booking");
INSERT INTO tbl_audit VALUES("442","CSTMR25","Confirm Overnight Booking ID: 335 ","2021-11-17","pol, garciaa","booking");
INSERT INTO tbl_audit VALUES("443","CSTMR25","Confirm Overnight Booking ID: 336 ","2021-11-17","pol, garciaa","booking");
INSERT INTO tbl_audit VALUES("444","CSTMR25","Confirm Overnight Booking ID: 337 ","2021-11-17","pol, garciaa","booking");
INSERT INTO tbl_audit VALUES("445","CSTMR25","Confirm Daytour Booking ID: 334 ","2021-11-17","pol, garciaa","booking");
INSERT INTO tbl_audit VALUES("446","CSTMR25","Confirm Daytour Booking ID: 338 ","2021-11-17","pol, garciaa","booking");
INSERT INTO tbl_audit VALUES("447","CSTMR25","Decline Booking ID: 339 ","2021-11-17","jehu, ombrog","booking");
INSERT INTO tbl_audit VALUES("448","CSTMR10","Remove costumer review of Bryan Dollentas - status to disabled","2021-11-17","pol, garciaa","");
INSERT INTO tbl_audit VALUES("449","CSTMR25","Confirm Overnight Booking ID: 340 ","2021-11-17","pol, garciaa","booking");
INSERT INTO tbl_audit VALUES("450","CSTMR10","Generate sales report from: 2021-09-01 to 2021-12-31","2021-11-17","pol, garciaa","System");



CREATE TABLE `tbl_booking` (
  `ID` int(250) NOT NULL AUTO_INCREMENT,
  `customerID` varchar(100) NOT NULL,
  `bpax` int(11) NOT NULL,
  `bname` varchar(100) NOT NULL,
  `btype` varchar(100) NOT NULL,
  `bdate` date NOT NULL,
  `broom` varchar(100) NOT NULL DEFAULT ' ',
  `btable_date` varchar(100) DEFAULT NULL,
  `btable_time` varchar(100) DEFAULT NULL,
  `datecategory` varchar(150) NOT NULL DEFAULT ' ',
  `btime_in` datetime NOT NULL,
  `btime_out` datetime NOT NULL,
  `bdaytourtime` varchar(100) DEFAULT ' ',
  `bprice` int(11) NOT NULL,
  `bdeposit` int(11) NOT NULL DEFAULT 0,
  `balance` float NOT NULL,
  `bstatus` varchar(100) NOT NULL,
  `regsdate` date DEFAULT NULL,
  `review` int(11) NOT NULL DEFAULT 0,
  `paymentPhoto` varchar(500) DEFAULT NULL,
  `promo_id` int(11) DEFAULT NULL,
  `notes` varchar(500) DEFAULT NULL,
  `add_ons` varchar(500) DEFAULT NULL,
  `refund` int(11) NOT NULL DEFAULT 0,
  `gcash` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=341 DEFAULT CHARSET=latin1;

INSERT INTO tbl_booking VALUES("176","CSTMR11","0","Bryan Dollentas","Overnight","2021-08-04"," || C1 ","","","","2021-08-04 14:00:00","2021-08-06 12:00:00","","3500","3500","0","Completed","","0","1.jpg","","","","0","");
INSERT INTO tbl_booking VALUES("179","CSTMR11","0","Bryan Dollentas","Overnight","2021-08-06"," || C1 ","","","","2021-08-06 14:00:00","2021-08-08 12:00:00","","3500","0","3500","Declined","","0","122222222.jpg","","","","0","");
INSERT INTO tbl_booking VALUES("180","CSTMR11","3","Bryan Dollentas","Overnight","2021-08-06"," || C2 ","","","","2021-08-06 14:00:00","2021-08-07 12:00:00","","4010","0","4010","Declined","","0","Gall (1).jpg","","","","0","");
INSERT INTO tbl_booking VALUES("181","CSTMR11","2"," Dollentas","Daytour","2021-08-05","","","","","2021-08-05 07:08:00","2021-08-05 10:08:00","07:00 am to 10:00 am","400","0","400","Declined","","0","","","","","0","");
INSERT INTO tbl_booking VALUES("182","CSTMR11","1"," Dollentas","Daytour","2021-08-07","","","","","2021-08-07 07:08:00","2021-08-07 10:08:00","07:00 am to 10:00 am","200","200","0","Completed","","1","198527104_209070164407119_5404744244341061790_n.jpg","","","","0","");
INSERT INTO tbl_booking VALUES("183","CSTMR11","3"," Dollentas","Daytour","2021-09-11","","","","","2021-09-11 10:09:00","2021-09-11 13:09:00","10:00 am to 13:00 pm","600","600","0","Completed","","1","selfie.jpg","","","","0","");
INSERT INTO tbl_booking VALUES("184","CSTMR11","3"," Dollentas","Daytour","2021-09-30","","","","","2021-09-30 10:09:00","2021-09-30 13:09:00","10:00 am to 13:00 pm","600","600","0","Completed","","1","","","","","0","");
INSERT INTO tbl_booking VALUES("185","CSTMR11","0"," Dollentas","Daytour","2021-09-16","","","","","2021-09-16 07:09:00","2021-09-16 10:09:00","07:00 am to 10:00 am","0","0","0","Declined","","0","","","","","0","");
INSERT INTO tbl_booking VALUES("186","CSTMR11","13","Bryan Dollentas","Daytour","2021-09-14","","","","","2021-09-14 13:09:00","2021-09-14 16:09:00","13:00 pm to 16:00 pm","2600","0","2600","Declined","","0","","","","","0","");
INSERT INTO tbl_booking VALUES("187","CSTMR11","17","Bryan Dollentas","Daytour","2021-09-17","","","","","2021-09-17 07:09:00","2021-09-17 10:09:00","07:00 am to 10:00 am","3400","0","3400","Declined","","0","","","","","0","");
INSERT INTO tbl_booking VALUES("188","CSTMR11","17","Bryan Dollentas","Daytour","2021-09-16","","","","","2021-09-16 07:09:00","2021-09-16 10:09:00","07:00 am to 10:00 am","3400","0","3400","Declined","","0","","","","","0","");
INSERT INTO tbl_booking VALUES("189","CSTMR11","12","Bryan Dollentas","Daytour","2021-09-16","","","","","2021-09-16 07:09:00","2021-09-16 10:09:00","07:00 am to 10:00 am","2400","0","2400","Declined","","0","","","","","0","");
INSERT INTO tbl_booking VALUES("190","CSTMR11","2","Bryan Dollentas","Overnight","2021-09-28"," || C1  || C2  || C3  || C4  || C5  || C6  || C7  || C8  || C9 ","","","","2021-09-28 14:00:00","2021-09-29 12:00:00","","39010","20000","19010","Confirmed","","0","","","","","0","");
INSERT INTO tbl_booking VALUES("191","CSTMR11","1","Bryan Dollentas","Overnight","2021-09-29"," || C1 "," ||  Veranda ","3am to 4pm"," || Sunrise Breakfast","2021-09-29 14:00:00","2021-09-30 12:00:00","","4500","4500","0","Completed","","0","","","","","0","");
INSERT INTO tbl_booking VALUES("192","CSTMR11","0","Bryan Dollentas","Overnight","2021-09-29"," || C2 ","","","","2021-09-29 14:00:00","2021-09-30 12:00:00","","3010","1500","1510","Confirmed","","0","","","","","0","");
INSERT INTO tbl_booking VALUES("202","CSTMR11","0","Bryan Dollentas","Overnight","2021-09-25"," || C2 ","","","","2021-09-25 14:00:00","2021-09-28 12:00:00","","2510","0","2510","Declined","","0","iPhone 7073.JPG","","","","0","");
INSERT INTO tbl_booking VALUES("231","CSTMR25","1","jehu ombrog","Daytour","2021-10-10","","","","","2021-10-10 13:10:00","2021-10-10 16:10:00","13:00 pm to 16:00 pm","200","100","100","Confirmed","","0","","","","","0","");
INSERT INTO tbl_booking VALUES("197","CSTMR11","1","Bryan Dollentas","Daytour","2021-09-18","","","","","2021-09-18 10:09:00","2021-09-18 13:09:00","10:00 am to 13:00 pm","200","0","200","Declined","","0","","","","","0","");
INSERT INTO tbl_booking VALUES("198","CSTMR11","1","Bryan Dollentas","Daytour","2021-09-18","","","","","2021-09-18 13:09:00","2021-09-18 16:09:00","13:00 pm to 16:00 pm","200","0","200","Declined","","0","","","","","0","");
INSERT INTO tbl_booking VALUES("199","CSTMR11","1","Bryan Dollentas","Daytour","2021-09-18","","","","","2021-09-18 13:09:00","2021-09-18 16:09:00","13:00 pm to 16:00 pm","200","0","200","Declined","","0","","","","","0","");
INSERT INTO tbl_booking VALUES("200","CSTMR11","1","Bryan Dollentas","Daytour","2021-09-18","","","","","2021-09-18 13:09:00","2021-09-18 16:09:00","13:00 pm to 16:00 pm","200","0","200","Declined","","0","","","","","0","");
INSERT INTO tbl_booking VALUES("201","CSTMR11","1","Bryan Dollentas","Daytour","2021-09-23","","","","","2021-09-23 13:09:00","2021-09-23 16:09:00","13:00 pm to 16:00 pm","200","0","200","Declined","","0","","","","","0","");
INSERT INTO tbl_booking VALUES("204","CSTMR11","0","Bryan Dollentas","Overnight","2021-09-23"," || C2 ","","","","2021-09-23 14:00:00","2021-09-24 12:00:00","","2510","0","2510","Declined","","0","","","","","0","");
INSERT INTO tbl_booking VALUES("227","CSTMR11","0","Bryan Dollentas","Overnight","2021-10-29"," || C7  || C8  || C9 ","","","","2021-10-29 14:00:00","2021-11-01 12:00:00","","18000","0","18000","Declined","","0","","","","","0","");
INSERT INTO tbl_booking VALUES("229","CSTMR25","1","jehu ombrog","Daytour","2021-10-12","","","","","2021-10-12 07:10:00","2021-10-12 10:10:00","07:00 am to 10:00 am","200","200","0","Completed","","0","postal back.jpg","","","","0","");
INSERT INTO tbl_booking VALUES("226","CSTMR11","0","Bryan Dollentas","Overnight","2021-10-28"," || C1  || C2  || C3 ","","","","2021-10-28 14:00:00","2021-10-31 12:00:00","","9010","0","9010","Declined","","0","","","","","0","");
INSERT INTO tbl_booking VALUES("209","CSTMR11","2","Bryan Dollentas","Daytour","2021-10-21","","","","","2021-10-21 10:10:00","2021-10-21 13:10:00","10:00 am to 13:00 pm","400","200","200","Confirmed","","0","","","","","0","");
INSERT INTO tbl_booking VALUES("210","CSTMR11","2","Bryan Dollentas","Daytour","2021-09-28","","","","","2021-09-28 07:09:00","2021-09-28 10:09:00","07:00 am to 10:00 am","300","200","100","Confirmed","","0","signs.jpg","11","","","0","");
INSERT INTO tbl_booking VALUES("211","CSTMR11","2","Bryan Dollentas","Daytour","2021-09-30","","","","","2021-09-30 13:09:00","2021-09-30 16:09:00","13:00 pm to 16:00 pm","200","100","100","Confirmed","","0","120192077_347771690007212_3896643654713269544_o.jpg","13","","","0","");
INSERT INTO tbl_booking VALUES("212","CSTMR25","1","jehu ombrog","Daytour","2021-09-30","","","","","2021-09-30 10:09:00","2021-09-30 13:09:00","10:00 am to 13:00 pm","200","200","0","Completed","","1","space-wallpaper-20082314170846.jpg","","","","0","");
INSERT INTO tbl_booking VALUES("232","CSTMR26","2","leica balayanto","Daytour","2021-10-11","","","","","2021-10-10 07:10:00","2021-10-11 10:10:00","07:00 am to 10:00 am","320","200","120","Confirmed","","0","ACT 3 P.E.jpg","18","","","0","");
INSERT INTO tbl_booking VALUES("223","CSTMR25","2","jehu ombrog","Daytour","2021-10-07","","","","","2021-10-07 07:10:00","2021-10-07 10:10:00","07:00 am to 10:00 am","400","200","200","Confirmed","","0","","","","","0","");
INSERT INTO tbl_booking VALUES("224","CSTMR11","2","Bryan Dollentas","Daytour","2021-10-06","","","","","2021-10-06 10:10:00","2021-10-06 13:10:00","10:00 am to 13:00 pm","320","320","0","Completed","","1","postal back.jpg","12","","","0","");
INSERT INTO tbl_booking VALUES("233","CSTMR26","1","leica balayanto","Daytour","2021-10-11","","","","","2021-10-11 07:10:00","2021-10-11 10:10:00","07:00 am to 10:00 am","200","200","0","Completed","","0","","","","","0","");
INSERT INTO tbl_booking VALUES("234","CSTMR26","0","leica balayanto","Overnight","2021-10-11"," || C9 ","","","","2021-10-11 14:00:00","2021-10-12 12:00:00","","8000","4000","4000","Confirmed","","0","postal back.jpg","","","","0","");
INSERT INTO tbl_booking VALUES("235","CSTMR26","1","leica balayanto","Daytour","2021-10-14","","","","","2021-10-14 07:10:00","2021-10-14 10:10:00","07:00 am to 10:00 am","200","400","100","Confirmed","","0","","","","","0","");
INSERT INTO tbl_booking VALUES("236","CSTMR25","1","jehu ombrog","Daytour","2021-10-11","","","","","2021-10-11 07:10:00","2021-10-11 10:10:00","07:00 am to 10:00 am","200","100","100","Confirmed","","0","","","","","0","");
INSERT INTO tbl_booking VALUES("237","CSTMR25","1","jehu ombrog","Daytour","2021-10-11","","","","","2021-10-11 10:10:00","2021-10-11 13:10:00","10:00 am to 13:00 pm","200","100","100","Confirmed","","0","","","","","0","");
INSERT INTO tbl_booking VALUES("238","CSTMR26","0","leica balayanto","Overnight","2021-10-11"," || C2 ","","","","2021-10-11 14:00:00","2021-10-12 12:00:00","","2510","1500","1010","Confirmed","","0","","","","","0","");
INSERT INTO tbl_booking VALUES("240","CSTMR25","1","jehu ombrog","Daytour","2021-10-15","","","","","2021-10-15 07:10:00","2021-10-15 10:10:00","07:00 am to 10:00 am","200","0","200","Declined","","0","flex_play.png","","","","0","");
INSERT INTO tbl_booking VALUES("241","CSTMR25","1","jehu ombrog","Overnight","2021-10-14"," || C3 "," ||  Veranda ","3am to 4pm"," || Sunrise Breakfast","2021-10-14 14:00:00","2021-10-15 12:00:00"," ","4000","1500","2500","Confirmed","","0","gcash.png","","","","0","");
INSERT INTO tbl_booking VALUES("242","CSTMR25","0","jehu ombrog","Overnight","2021-10-14"," || C2 ","",""," ","2021-10-14 14:00:00","2021-10-15 12:00:00"," ","3010","0","3010","Declined","","0","","","","","0","");
INSERT INTO tbl_booking VALUES("243","CSTMR25","1","jehu ombrog","Daytour","2021-10-14"," ","",""," ","2021-10-14 07:10:00","2021-10-14 10:10:00","07:00 am to 10:00 am","200","0","200","Declined","","0","","","","","0","");
INSERT INTO tbl_booking VALUES("244","CSTMR26","1","leica balayanto","Daytour","2021-10-15"," ","",""," ","2021-10-15 07:10:00","2021-10-15 10:10:00","07:00 am to 10:00 am","200","200","0","Completed","","1","sample.jpg","","","","0","");
INSERT INTO tbl_booking VALUES("245","CSTMR25","2","jehu ombrog","Daytour","2021-10-14"," ","",""," ","2021-10-14 07:10:00","2021-10-14 10:10:00","07:00 am to 10:00 am","320","320","0","Completed","","1","gcash.png","12","","","0","");
INSERT INTO tbl_booking VALUES("246","CSTMR28","2","Benjamin Gandeza","Daytour","2021-10-17"," ","",""," ","2021-10-17 07:10:00","2021-10-17 10:10:00","07:00 am to 10:00 am","400","0","400","Declined","","0","97c7b9b5700dd18aa7ee4c2f02ca9008.jpg","","","","0","");
INSERT INTO tbl_booking VALUES("247","CSTMR25","30","jehu ombrog","Daytour","2021-11-01"," ","",""," ","2021-11-01 07:11:00","2021-11-01 10:11:00","10:00 am to 13:00 pm","400","400","0","Completed","","0","","","","","0","");
INSERT INTO tbl_booking VALUES("248","CSTMR25","0","jehu ombrog","Overnight","2021-11-01"," || C1 ","",""," ","2021-11-01 14:00:00","2021-11-03 12:00:00"," ","3600","3600","0","Completed","","0","","","","","0","");
INSERT INTO tbl_booking VALUES("249","CSTMR25","1","jehu ombrog","Overnight","2021-11-01"," || C2 "," ||  Veranda ","3am to 4pm"," || Sunrise Breakfast","2021-11-01 14:00:00","2021-11-02 12:00:00"," ","3510","3510","0","Completed","","0","","","","","0","");
INSERT INTO tbl_booking VALUES("264","CLOSE","30"," ","Daytour","2021-10-24"," ","",""," ","2021-10-24 00:00:00","2021-10-25 00:00:00","07:00 am to 10:00 am 10:00 am to 13:00 pm 13:00 pm to 16:00 pm 16:00 pm to 19:00 pm","0","0","0","CLOSE","","0","","","","","0","");
INSERT INTO tbl_booking VALUES("273","CSTMR25","0","jehu ombrog","Overnight","2021-10-28"," || C5 "," ||  Veranda ","3am to 4pm"," || Sunrise Breakfast","2021-10-28 14:00:00","2021-10-29 12:00:00"," ","4160","2500","1660","Confirmed","","0","","",""," | Anniversary Banner","0","");
INSERT INTO tbl_booking VALUES("275","CSTMR25","3","jehu ombrog","Overnight","2021-10-28"," || C6 "," ||  Veranda ","3am to 4pm"," || Sunrise Breakfast","2021-10-28 14:00:00","2021-10-29 12:00:00"," ","7000","5000","2000","Confirmed","","0","3232.png","","1. Jehu Ombrog "," | axie","0","");
INSERT INTO tbl_booking VALUES("274","CSTMR25","1","jehu ombrog","Daytour","2021-10-28"," ","",""," ","2021-10-28 07:10:00","2021-10-28 10:10:00","07:00 am to 10:00 am","200","0","200","Declined","","0","3232.png","","1. Jehu Ombrog","","0","");
INSERT INTO tbl_booking VALUES("276","CSTMR25","0","jehu ombrog","Overnight","2021-10-28"," || C8 ","",""," ","2021-10-28 14:00:00","2021-10-29 12:00:00"," ","5000","2500","2500","Confirmed","","0","3232.png","","1. Jehu Encienzo Ombrog","","0","");
INSERT INTO tbl_booking VALUES("277","CSTMR25","1","jehu ombrog","Daytour","2021-11-18"," ","",""," ","2021-11-18 07:11:00","2021-11-18 10:11:00","07:00 am to 10:00 am","200","0","200","Declined","","0","","","","","0","");
INSERT INTO tbl_booking VALUES("278","CSTMR25","10","jehu ombrog","Daytour","2021-11-18"," ","",""," ","2021-11-18 07:11:00","2021-11-18 10:11:00","07:00 am to 10:00 am","2000","0","2000","Declined","","0","","","","","0","");
INSERT INTO tbl_booking VALUES("279","CSTMR25","10","jehu ombrog","Daytour","2021-11-18"," ","",""," ","2021-11-18 07:11:00","2021-11-18 10:11:00","07:00 am to 10:00 am","2000","1000","1000","Refund Request Approved","","0","","","","","500","");
INSERT INTO tbl_booking VALUES("294","CSTMR25","4","jehu ombrog","Daytour","2021-11-27"," ","",""," ","2021-11-27 07:11:00","2021-11-27 10:11:00","07:00 am to 10:00 am","800","400","0","Refund Request Approved","","0","","","","","200","");
INSERT INTO tbl_booking VALUES("293","CSTMR25","0","jehu ombrog","Overnight","2021-11-06"," || C1 ","",""," ","2021-11-06 14:00:00","2021-11-07 12:00:00"," ","3600","1300","2300","Refund Request Approved","","0","","","","","1150","");
INSERT INTO tbl_booking VALUES("295","CSTMR25","5","jehu ombrog","Daytour","2021-11-27"," ","",""," ","2021-11-27 07:11:00","2021-11-27 10:11:00","07:00 am to 10:00 am","1000","500","0","Refund Request Approved","","0","","","","","250","09212176584");
INSERT INTO tbl_booking VALUES("296","CSTMR25","5","jehu ombrog","Daytour","2021-11-27"," ","",""," ","2021-11-27 07:11:00","2021-11-27 10:11:00","07:00 am to 10:00 am","1000","500","500","Confirmed","","0","","","","","0","");
INSERT INTO tbl_booking VALUES("297","CSTMR25","5","jehu ombrog","Daytour","2021-11-27"," ","",""," ","2021-11-27 07:11:00","2021-11-27 10:11:00","07:00 am to 10:00 am","1000","500","500","Confirmed","","0","gcash.png","","1. Paulo Amedo<br>
2. Jehu Ombrog<br>
3. Bryan Dollentas<br>
4. Juls Lorenzo<br>
5. Steven Moran","","0","");
INSERT INTO tbl_booking VALUES("298","CSTMR25","30","jehu ombrog","Daytour","2021-12-07"," ","",""," ","2021-12-07 10:00:00","2021-12-07 13:00:00","10:00 am to 13:00 pm","1000","500","500","Confirmed","","0","","","","","0","");
INSERT INTO tbl_booking VALUES("299","CSTMR25","30","jehu ombrog","Daytour","2021-11-11"," ","",""," ","2021-11-11 07:00:00","2021-11-11 10:00:00","07:00 am to 10:00 am","200","0","200","Declined","","0","","","","","0","");
INSERT INTO tbl_booking VALUES("300","CSTMR25","0","jehu ombrog","Overnight","2021-12-30"," || C1  || C2  || C3 ","",""," ","2021-12-30 14:00:00","2022-01-02 12:00:00"," ","9110","5000","4110","Confirmed","","0","","","","","0","");
INSERT INTO tbl_booking VALUES("301","CSTMR25","0","jehu ombrog","Overnight","2021-12-15"," || C1  || C2 ","",""," ","2021-12-15 14:00:00","2021-12-16 12:00:00"," ","6110","3010","3100","Confirmed","","0","","","","","0","");
INSERT INTO tbl_booking VALUES("302","CSTMR25","0","jehu ombrog","Overnight","2022-02-02"," || C4 ","",""," ","2022-02-02 14:00:00","2022-02-04 12:00:00"," ","6000","3000","3000","Confirmed","","0","","","","","0","");
INSERT INTO tbl_booking VALUES("303","CSTMR25","10","jehu ombrog","Daytour","2021-12-22"," ","",""," ","2021-12-22 10:12:00","2021-12-22 13:12:00","10:00 am to 13:00 pm","2000","1000","1000","Confirmed","","0","","","","","0","");
INSERT INTO tbl_booking VALUES("304","CSTMR25","10","jehu ombrog","Daytour","2021-12-15"," ","",""," ","2021-12-15 13:12:00","2021-12-15 16:12:00","13:00 pm to 16:00 pm","2000","1000","1000","Confirmed","","0","","","","","0","");
INSERT INTO tbl_booking VALUES("305","CSTMR25","0","jehu ombrog","Overnight","2021-11-27"," || C2 ","",""," ","2021-11-27 14:00:00","2021-11-28 12:00:00"," ","2510","1000","1510","Confirmed","","0","","","","","0","");
INSERT INTO tbl_booking VALUES("306","CSTMR25","10","jehu ombrog","Daytour","2021-11-17"," ","",""," ","2021-11-17 10:11:00","2021-11-17 13:11:00","10:00 am to 13:00 pm","2000","1000","1000","Confirmed","","0","","","","","0","");
INSERT INTO tbl_booking VALUES("307","CSTMR25","5","jehu ombrog","Daytour","2021-12-03"," ","",""," ","2021-12-03 07:12:00","2021-12-03 10:12:00","07:00 am to 10:00 am","1000","500","500","Confirmed","","0","","","","","0","");
INSERT INTO tbl_booking VALUES("308","CSTMR25","5","jehu ombrog","Daytour","2021-11-26"," ","",""," ","2021-11-26 07:11:00","2021-11-26 10:11:00","07:00 am to 10:00 am","1000","500","500","Confirmed","","0","","","","","0","");
INSERT INTO tbl_booking VALUES("309","CSTMR25","10","jehu ombrog","Daytour","2021-12-15"," ","",""," ","2021-12-15 10:12:00","2021-12-15 13:12:00","10:00 am to 13:00 pm","2000","1000","1000","Confirmed","","0","","","","","0","");
INSERT INTO tbl_booking VALUES("310","CSTMR25","10","jehu ombrog","Daytour","2021-12-15"," ","",""," ","2021-12-15 10:12:00","2021-12-15 13:12:00","10:00 am to 13:00 pm","2000","2000","0","Refund Request Approved","","0","","","","","500","09212765842");
INSERT INTO tbl_booking VALUES("311","CSTMR25","1","jehu ombrog","Daytour","2021-12-15"," ","",""," ","2021-12-15 10:00:00","2021-12-15 13:00:00","10:00 am to 13:00 pm","200","100","0","Refund Request Approved","","0","","","","","50","09212765842");
INSERT INTO tbl_booking VALUES("315","CSTMR25","5","jehu ombrog","Daytour","2021-11-30"," ","",""," ","2021-11-30 07:11:00","2021-11-30 10:11:00","07:00 am to 10:00 am","500","250","250","Confirmed","","0","","13","","","0","");
INSERT INTO tbl_booking VALUES("316","CSTMR25","0","jehu ombrog","Overnight","2021-12-27"," || C1  || C2  || C3  || C4  || C5  || C6  || C7  || C8  || C9 ","",""," ","2021-12-27 14:00:00","2021-12-28 12:00:00"," ","38110","0","38110","Declined","","0","","","","","0","");
INSERT INTO tbl_booking VALUES("317","CSTMR25","0","jehu ombrog","Overnight","2021-11-30"," || C10 ","",""," ","2021-11-30 14:00:00","2021-12-01 12:00:00"," ","6000","0","6000","Declined","","0","","","","","0","");
INSERT INTO tbl_booking VALUES("318","CSTMR25","0","jehu ombrog","Overnight","2021-12-27"," || C10 ","",""," ","2021-12-27 14:00:00","2021-12-28 12:00:00"," ","6000","0","6000","Declined","","0","","","","","0","");
INSERT INTO tbl_booking VALUES("320","CLOSE","30"," ","Overnight","2021-11-25"," || C1  || C2  || C3  || C4  || C5  || C6  || C7  || C8  || C9  || C10 ","",""," ","2021-11-25 14:00:00","2021-11-26 12:00:00"," ","0","0","0","CLOSE","","0","","","","","0","");
INSERT INTO tbl_booking VALUES("321","CSTMR25","1","jehu ombrog","Daytour","2021-11-30"," ","",""," ","2021-11-30 07:11:00","2021-11-30 10:11:00","07:00 am to 10:00 am","200","100","100","Confirmed","","0","","","","","0","");
INSERT INTO tbl_booking VALUES("322","CSTMR25","5","jehu ombrog","Daytour","2021-11-30"," ","",""," ","2021-11-30 07:11:00","2021-11-30 10:11:00","07:00 am to 10:00 am","1000","500","500","Confirmed","","0","","","","","0","");
INSERT INTO tbl_booking VALUES("323","CSTMR25","5","jehu ombrog","Daytour","2021-11-30"," ","",""," ","2021-11-30 07:11:00","2021-11-30 10:11:00","07:00 am to 10:00 am","1000","500","500","Confirmed","","0","","","","","0","");
INSERT INTO tbl_booking VALUES("324","CSTMR25","1","jehu ombrog","Daytour","2021-11-30"," ","",""," ","2021-11-30 07:11:00","2021-11-30 10:11:00","07:00 am to 10:00 am","200","100","100","Confirmed","","0","","","","","0","");
INSERT INTO tbl_booking VALUES("325","CSTMR25","5","jehu ombrog","Daytour","2021-11-30"," ","",""," ","2021-11-30 07:11:00","2021-11-30 10:11:00","07:00 am to 10:00 am","1000","500","500","Confirmed","","0","","","","","0","");
INSERT INTO tbl_booking VALUES("326","CSTMR25","5","jehu ombrog","Daytour","2021-11-30"," ","",""," ","2021-11-30 07:11:00","2021-11-30 10:11:00","07:00 am to 10:00 am","1000","500","500","Confirmed","","0","","","","","0","");
INSERT INTO tbl_booking VALUES("327","CSTMR25","5","jehu ombrog","Daytour","2021-11-30"," ","",""," ","2021-11-30 07:11:00","2021-11-30 10:11:00","07:00 am to 10:00 am","1000","800","800","Confirmed","","0","","","","","0","");
INSERT INTO tbl_booking VALUES("328","CSTMR25","5","jehu ombrog","Daytour","2021-11-30"," ","",""," ","2021-11-30 07:11:00","2021-11-30 10:11:00","07:00 am to 10:00 am","1000","500","500","Confirmed","","0","","","","","0","");
INSERT INTO tbl_booking VALUES("331","CSTMR25","5","jehu ombrog","Daytour","2021-11-30"," ","",""," ","2021-11-30 07:11:00","2021-11-30 10:11:00","07:00 am to 10:00 am","1000","500","500","Confirmed","","0","","","","","0","");
INSERT INTO tbl_booking VALUES("330","CSTMR25","0","jehu ombrog","Overnight","2021-11-30"," || C2 "," ||  Veranda ","3am to 4pm"," || Sunrise Breakfast","2021-11-30 14:00:00","2021-12-01 12:00:00"," ","3710","2200","1510","Confirmed","","0","","",""," | Happy Birthday Banner","0","");
INSERT INTO tbl_booking VALUES("332","CSTMR25","5","jehu ombrog","Daytour","2021-11-30"," ","",""," ","2021-11-30 07:11:00","2021-11-30 10:11:00","07:00 am to 10:00 am","1000","0","1000","Declined","","0","","","","","0","");
INSERT INTO tbl_booking VALUES("333","CSTMR25","1","jehu ombrog","Daytour","2021-11-30"," ","",""," ","2021-11-30 07:11:00","2021-11-30 10:11:00","07:00 am to 10:00 am","200","0","200","Declined","","0","","","","","0","");
INSERT INTO tbl_booking VALUES("334","CSTMR25","5","jehu ombrog","Daytour","2021-12-31"," ","",""," ","2021-12-31 07:12:00","2021-12-31 10:12:00","07:00 am to 10:00 am","1000","500","500","Confirmed","","0","","","","","0","");
INSERT INTO tbl_booking VALUES("335","CSTMR25","0","jehu ombrog","Overnight","2021-12-30"," || C4 ","",""," ","2021-12-30 14:00:00","2021-12-31 12:00:00"," ","3000","1500","1500","Confirmed","","0","","","","","0","");
INSERT INTO tbl_booking VALUES("336","CSTMR25","0","jehu ombrog","Overnight","2021-11-30"," || C3 ","",""," ","2021-11-30 14:00:00","2021-12-01 12:00:00"," ","3000","1500","1500","Confirmed","","0","","","","","0","");
INSERT INTO tbl_booking VALUES("337","CSTMR25","0","jehu ombrog","Overnight","2021-11-30"," || C7 ","",""," ","2021-11-30 14:00:00","2021-12-01 12:00:00"," ","5000","2500","2500","Confirmed","","0","","","","","0","");
INSERT INTO tbl_booking VALUES("338","CSTMR25","1","jehu ombrog","Daytour","2021-12-02"," ","",""," ","2021-12-02 07:12:00","2021-12-02 10:12:00","07:00 am to 10:00 am","200","100","100","Confirmed","","0","","","","","0","");
INSERT INTO tbl_booking VALUES("339","CSTMR25","8","jehu ombrog","Daytour","2021-11-25"," ","",""," ","2021-11-25 10:11:00","2021-11-25 13:11:00","10:00 am to 13:00 pm","1600","0","1600","Declined","","0","","","","","0","");
INSERT INTO tbl_booking VALUES("340","CSTMR25","0","jehu ombrog","Overnight","2021-11-30"," || C5 ","",""," ","2021-11-30 14:00:00","2021-12-01 12:00:00"," ","4000","1500","2500","Confirmed","","0","gcash.png","","1. Jehu Ombrog","","0","");



CREATE TABLE `tbl_photo` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `photoname` varchar(500) NOT NULL,
  `category` int(11) NOT NULL,
  `description` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4;

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
INSERT INTO tbl_photo VALUES("33","32.jpg","1","");
INSERT INTO tbl_photo VALUES("34","246371872_618233639627681_5802724311731596288_n.jpg","1","");



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
) ENGINE=MyISAM AUTO_INCREMENT=65 DEFAULT CHARSET=utf8mb4;

INSERT INTO tbl_price VALUES("1","room","Standard Couple Cabana ","Small","","2","3600","","","Free breakfast for two","C1.jpg","0");
INSERT INTO tbl_price VALUES("2","room","Standard Couple Cabana ","Large","","2","3000","","","Free breakfast for two","C3.jpg","0");
INSERT INTO tbl_price VALUES("3","room","De Luxe Couple Cabana ","Small","","2","4000","","","Free breakfast for two","C5.jpg","0");
INSERT INTO tbl_price VALUES("4","room","De Luxe Couple Cabana ","Large","","2","5000","","","Free breakfast for two","C7.jpg","0");
INSERT INTO tbl_price VALUES("5","room","De Luxe Couple Cabana  ","","","Each","500","","","","","0");
INSERT INTO tbl_price VALUES("6","room","Twin Ifugao House","Large","","6","8000","","","With two rooms, living room, dining
room, own CR, and outdoor kitchen","C9.jpg","0");
INSERT INTO tbl_price VALUES("7","room","Twin Ifugao House","","","Each","510","","","Max of 10 excess pax","","0");
INSERT INTO tbl_price VALUES("8","date","Sunrise Breakfast","","6AM - 7AM","2","","1000","500","Choice of silog meal with brewed coffee (upgrade from breakfast for 2pax)","","0");
INSERT INTO tbl_price VALUES("9","date","Coffee Date","","1 hour only between 3pm-5pm","2","","700","400","Brewed Coffee and sandwiches/cookies","","0");
INSERT INTO tbl_price VALUES("10","date","Romantic Dinner","","1 hour only between 4pm to 7pm","2","","1500","1000","Choice of beef salpico, pork or chicken hamonado, Beef Chicken with mushroom or Chicken Curry **with rice, pasta, veggies and dessert. Optional: plus pluvium wine(600)","","0");
INSERT INTO tbl_price VALUES("11","other","Kawa Bath","","","","","","","500/Pax","","0");
INSERT INTO tbl_price VALUES("12","other","Mini Pool","","","","","","","TBC due to COVID19","","0");
INSERT INTO tbl_price VALUES("13","other","Massage","","","","","","","TBC due to COVID19","","0");
INSERT INTO tbl_price VALUES("14","other","Bonfire","","","","","","","300 (until 9PM only)","","0");
INSERT INTO tbl_price VALUES("34","room","Standard Couple Cabana","Small","","2","2510","","","Free breakfast for two","C2.jpg","0");
INSERT INTO tbl_price VALUES("35","room","Standard Couple Cabana ","Large","","2","3000","","","Free Break fast for two","C4.jpg","0");
INSERT INTO tbl_price VALUES("36","room","De Luxe Couple Cabana ","Small","","2","4000","","","Free Break Fast for Two","C6.jpg","0");
INSERT INTO tbl_price VALUES("37","room","De Luxe Couple Cabana  ","Large","","2","5000","","","Free Breakfast for Two","C8.jpg","0");
INSERT INTO tbl_price VALUES("43","other","tent ","","","","","","","mag tayo bahay bahayan","","0");
INSERT INTO tbl_price VALUES("56","Add Ons","Anniversary Banner","","","","700","","","","anniversary.jpg","0");
INSERT INTO tbl_price VALUES("62","Add Ons","axie","","","","1000","","","","3232.png","0");
INSERT INTO tbl_price VALUES("55","Add Ons","Happy Birthday Banner","","","","700","","","","happy anniversary.jpg","0");
INSERT INTO tbl_price VALUES("64","room","zzzz","Small","","5","2000","","","testing only","C10.jpg","0");



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
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4;

INSERT INTO tbl_promo VALUES("0","ZZZZ","couple promo ","20","% OFF","2021-10-21","94","inactive","Both");
INSERT INTO tbl_promo VALUES("7","QWERTY","Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.  ","500","off","2021-09-21","94","inactive","");
INSERT INTO tbl_promo VALUES("8","BRYANAD","zzzzzzzzzz zzzzzzzz zzzzzzzzzzzzzz zzzzzzzzzzzzzzzz zzzzzzz ","20","% OFF","2021-09-30","94","inactive","Daytour");
INSERT INTO tbl_promo VALUES("9","ZASDWEWQ","zasdsadsadwqewqasd asdasdqwe asd zxc asd qweasd zxcas qwe asdczxc sad qwe zxcz xcz  ","200","OFF","2021-09-19","94","inactive","");
INSERT INTO tbl_promo VALUES("10","MCDO50","zxczxc adas qwe  asd zczcasd qwe asd zxcas ewr xcvxcvsfdfg frt erdfg fdbcvb dfg retr bv ","500","% OFF","2021-09-26","94","inactive","Overnight");
INSERT INTO tbl_promo VALUES("11","DAY50","bawal ang bata ","100","OFF","2021-10-10","94","inactive","Daytour");
INSERT INTO tbl_promo VALUES("12","RNC10","family promo ","20","% OFF","2021-11-06","94","inactive","Both");
INSERT INTO tbl_promo VALUES("13","RNC1","Barkada promo ","50","% OFF","2021-11-30","94","active","Daytour");
INSERT INTO tbl_promo VALUES("14","QWERT","gamer coupon ","20","OFF","2021-11-06","94","inactive","Both");
INSERT INTO tbl_promo VALUES("15","DSDS","qewqeq ","20","OFF","2021-11-30","94","active","Overnight");
INSERT INTO tbl_promo VALUES("16","PRM30","happy independence day ","30","% OFF","2021-11-03","94","inactive","Overnight");
INSERT INTO tbl_promo VALUES("17","PRM30","new year promo ","30","% OFF","2021-11-05","94","inactive","Overnight");
INSERT INTO tbl_promo VALUES("18","PWD","PWD ","20","% OFF","2022-05-29","94","active","Both");
INSERT INTO tbl_promo VALUES("19","QWERT","zz ","20","% OFF","2021-10-20","94","inactive","Both");



CREATE TABLE `tbl_review` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `bookingID` int(11) NOT NULL,
  `costumerID` varchar(100) NOT NULL,
  `dateReview` date NOT NULL,
  `description` varchar(500) NOT NULL,
  `reviewPhoto` varchar(500) NOT NULL,
  `rate` int(11) NOT NULL,
  `status` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

INSERT INTO tbl_review VALUES("4","182"," CSTMR11","2021-08-04","Sobrang ganda ang linis ng kapaligiran at ang tahimik pa, sarap mag unwind kasama ang mga tropa! 100% recommended <3 <3","Gall (8).jpg","5","enable");
INSERT INTO tbl_review VALUES("5","183"," CSTMR11","2021-09-10","Ang ganda po ","589853e0bd10f467f923929dda39deae.jpg","5","disabled");
INSERT INTO tbl_review VALUES("6","184"," CSTMR11","2021-09-10","12312321321321321312","flex_play.png","2","disabled");
INSERT INTO tbl_review VALUES("7","212"," CSTMR25","2021-09-29","so beautiful","74323609_106104157507301_7733118711283843072_o.jpg","5","disabled");
INSERT INTO tbl_review VALUES("8","224"," CSTMR11","2021-10-06","ang ganda po ","space-wallpaper-20082314170846.jpg","5","enable");



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
  `Usergender` varchar(50) DEFAULT NULL,
  `Usertype` int(11) NOT NULL,
  `Usertwitter` varchar(250) DEFAULT NULL,
  `Userfbook` varchar(250) DEFAULT NULL,
  `Userinstagram` varchar(250) DEFAULT NULL,
  `Userregsdate` date DEFAULT NULL,
  `Userimage` varchar(500) DEFAULT NULL,
  `Userpwordnohash` varchar(500) NOT NULL,
  `Ustatus` int(11) DEFAULT NULL,
  `Uregsdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Ucode` int(200) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO tbl_user VALUES("CSTMR10","pol","garciaa","pol@gmail.com","639565658454","$2y$10$h9Hov17iRnyIALdjM..08.KxB6HcBx4D82ycg/DMUq0ylPGK4ifC2","1997-08-26","23","","3","https://twitter.com/","https://facebook.com","https://www.instagram.com/","","IMG_5153.JPG","Angpangetko","0","2021-10-13 09:46:41","0");
INSERT INTO tbl_user VALUES("CSTMR11","Bryan","Dollentas","kazuto564@gmail.com","639212763842","$2y$10$u3VTj5KIN/VHDSLrQmaz4uJ9QAvTQmlS2EnbVbG7UHPRwvl6wv7Om","1999-02-28","23","","1","","","","","IMG_5153.JPG","Angpangetko","0","2021-09-29 12:55:09","0");
INSERT INTO tbl_user VALUES("CSTMR20","Steven","Moran","Stevenmoran143@gmail.com","635485475896","$2y$10$46miuWX48mvjWOBXuTLa5.etawMumk2FQ8EpLHK2sdGdNSUmhVNJ2","1999-07-14","21","","2","","","","2021-06-07","IMG_5902.JPG","Angpangetko","0","2021-06-07 02:39:15","0");
INSERT INTO tbl_user VALUES("CSTMR26","leica","balayanto","leicsbalayanto@gmail.com","639175164433","$2y$10$2PiVf3MYZ22Q.hmzYiYlLuvC8WbWZ1doXFkvqzYp8/SBBqtUzODDG","1999-02-03","22","","1","","","","2021-10-10","","Angpangetko","0","2021-10-10 03:09:43","0");
INSERT INTO tbl_user VALUES("CSTMR22","Cyril","Samonte","Cyrilsamonte@gmail.com","635525458475","$2y$10$9lOccqtJbDxCZFbrBVaucOO8po3WBVqljhw26CyZqj4./WeD7IG52","2008-06-13","12","","2","","","","2021-06-07","243183450_1022369055184781_392505564361253291_n.png","Angpangetko","0","2021-10-06 11:34:46","0");
INSERT INTO tbl_user VALUES("CSTMR25","jehu","ombrog","capstonefourth@gmail.com","639212765842","$2y$10$gQ8Gi2VG8f0i8u/YxLOKU.kfbnRnw5J.L9rGEkBp9H66CctAQ.6x6","1999-10-19","21","","1","","","","2021-09-29","selfie.jpg","Angpogiko","0","2021-11-14 21:58:45","0");
INSERT INTO tbl_user VALUES("CSTMR24","cm","tadifa","cmtadifa@gmail.com","639515215487","$2y$10$Z8fNYWWkavEh09Enau0SyOvn.8kum7EhWh4CEG9Risty/XCku3hPq","1999-07-28","21","","1","","","","2021-06-26","IMG_1013.JPG","Angpangetko","0","2021-06-26 12:26:43","0");
INSERT INTO tbl_user VALUES("CSTMR27","jabez","ombrog","jabez@gmail.com","639584754875","$2y$10$Bqi8pdL..8tLSwxGnYdaS.XtEtJfmZ4QATw1QIw0OxkweFMaiQXgm","1998-03-15","23","","1","","","","2021-10-12","","Angpangetko","","2021-10-13 11:12:23","");
INSERT INTO tbl_user VALUES("CSTMR28","Benjamin","Gandeza","b.gandezasr@gmail.com","639158596398","$2y$10$GuE8xUSJ/IuvPOKmgkPU1.P7rTAGCZVGA.OvWSG6vtUMZJYJUnbLu","1995-06-14","26","","1","","","","2021-10-13","","Sample123","","2021-10-13 13:26:29","");
INSERT INTO tbl_user VALUES("CSTMR29","qwewqewq","qwewq","qwewqewq@gmail.com","639112765842","$2y$10$gYInHPyHuloiC6gfFezGuuG6JWns9.Xa98RD89vBbZW3L2mqpGSUK","2001-10-31","20","","1","","","","2021-11-11","","Angpangetko","","2021-11-11 16:57:55","");



CREATE TABLE `tbl_visitor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip_address` text NOT NULL,
  `visit_date` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

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
INSERT INTO tbl_visitor VALUES("13","112.200.230.137","2021-10-13 09:51:25");
INSERT INTO tbl_visitor VALUES("14","203.118.245.36","2021-10-13 13:14:33");
INSERT INTO tbl_visitor VALUES("15","112.202.154.26","2021-10-13 13:24:29");
INSERT INTO tbl_visitor VALUES("16","205.169.39.20","2021-10-13 15:26:06");

