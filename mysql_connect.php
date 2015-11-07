<?php   
$db_host = "localhost";
$db_username = "*******";
$db_pass = "**********";
$db_name = "*********";

@mysql_connect("$db_host","$db_username","$db_pass") or die ("could not connect");
@mysql_select_db("$db_name") or die ("no database");




?>
