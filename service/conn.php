<?php
require("config.php");

$db_data= config::getAll('config_db');

$HOST = $db_data['HOST'];
$USERNAME = $db_data['USERNAME'];
$PASSWORD = $db_data['PASSWORD'];
$DBNAME = $db_data['DBNAME'];
$CHARSET = $db_data['CHARSET'];

$link = mysqli_connect($HOST,$USERNAME,$PASSWORD,$DBNAME); 
mysqli_query($link ,"set names ".$CHARSET);

?>