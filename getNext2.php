<?php
require __DIR__ . "/configuration/connection.php";
$checkLeftHandSideData = $_POST["requestLefthandSide"];
$requestReturnData = $_POST["requestReturn"];
$requestThree = $_POST["requestThree"];
$checkRequestreturnWithLefthandSideAndRequestAndInfo = $wennDieGleichungStimmt_pdo->query("SELECT `next` FROM `7` WHERE `lefthandSide` = '$checkLeftHandSideData' AND `request` LIKE '$requestReturnData' AND `info` = '$requestThree'")->fetch();
$nextRequest = $checkRequestreturnWithLefthandSideAndRequestAndInfo["next"];
$rowBothSidesSide= $wennDieGleichungStimmt_pdo->query("SELECT `lefthandSide`,`righthandSide` FROM `7` WHERE `id`='$nextRequest';")->fetch();
echo json_encode(array('lefthandSide' => $rowBothSidesSide["lefthandSide"],'righthandSide' => $rowBothSidesSide["righthandSide"]));
