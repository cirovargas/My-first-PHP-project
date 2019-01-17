<?php

$host = "localhost";
$user = "root";
$senha = "";
$dbname = "classea";

mysql_connect($host,$user,$senha) or die (mysql_error());

mysql_select_db($dbname) or die (mysql_error());

?>