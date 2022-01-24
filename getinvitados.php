<?php

include_once 'conectar.php';
include_once 'conexion.php';

$sqli = ("SELECT * FROM mensajes");
$result = mysql_query($sqli);
$output = array();
while($row = mysql_fetch_assoc($result))
{
 $output[] = $row;
}
echo json_encode($output);
mysql_free_result($result);



?>