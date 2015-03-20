<?php

$my_host = 'localhost';
$my_user = 'root';
$my_pass = '';
$my_db = 'a_database';

$my_result;

mysql_connect($my_host, $my_user, $my_pass) or die("not connected to database");

mysql_select_db($my_db)or die("not connected to database");

//update
$my_query = "UPDATE account SET gender= 'female' WHERE gender = 'male'" ;
mysql_query($my_query) or die("update the table failed");

echo "done";


?>