<?php   
$db_host = "localhost";
$db_username = "1000253";
$db_pass = "abdulkalam";
$db_name = "1000253db2";

@mysql_connect("$db_host","$db_username","$db_pass") or die ("could not connect");
@mysql_select_db("$db_name") or die ("no database");




?>