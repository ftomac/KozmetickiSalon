<?php

$mysqli = new mysqli ('ucka.veleri.hr', 'ftomac', '11', 'ftomac');
if( $mysqli -> connect_error ) {
    die('Connect error: ' . $mysqli->connect_errno);
}

$dohvaceno = $mysqli->query("SELECT * FROM Podaci_o_terminima ORDER BY id DESC LIMIT 1");
$podaci = array();
while ($row = mysqli_fetch_assoc($dohvaceno))
{
    $podaci[] = $row;
}

echo json_encode($podaci);

?>


