<?php
require __DIR__ . "/configuration/connection.php";
$requestReturn = $_POST['requestReturn'];
$requestReturnLefthandSide = $_POST['requestLefthandSide'];
$info = $wennDieGleichungStimmt_pdo->query("SELECT `info` FROM `7` WHERE `lefthandSide` = '$requestReturnLefthandSide' AND `request` LIKE '$requestReturn'")->fetch();
echo json_encode(array('info' => $info['info']));
