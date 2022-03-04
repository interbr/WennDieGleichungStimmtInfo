<?php
require __DIR__ . "/configuration.php";
$wennDieGleichungStimmt_pdo = new PDO("mysql:host=localhost:3306;dbname=wennDieGleichungStimmt", "wennDieGleiUser", $dbpw);

CREATE TABLE `7` (
 `id` int(100) NOT NULL AUTO_INCREMENT,
 `info` text NOT NULL,
 `lefthandSide` text NOT NULL,
 `request` varchar(4000) NOT NULL,
 `righthandSide` text NOT NULL,
 `ip` varchar(200) NOT NULL,
 `next` varchar(2) NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4
