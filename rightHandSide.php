<?php
require __DIR__ . "/configuration/connection.php";
$rowRightHandSide= $wennDieGleichungStimmt_pdo->query("SELECT `righthandSide` FROM `7` WHERE id=1")->fetch();
echo $rowRightHandSide["righthandSide"];
$wennDieGleichungStimmt_pdo = null;
