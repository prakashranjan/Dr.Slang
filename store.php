<?php
include_once"mysql_connect.php";



$stform=$_POST['sform'];
$flform=$_POST['fform'];



$add=mysql_query("INSERT INTO fullforms (sform,fform) VALUES ('$stform','$flform')") ;

if($add)
echo"Input data is succeed <br/> <h3>Thanks for your HELP!!!!</h3>
<br/><em>want to enter more.... PRESS BACK BUTTON</em>"; 
 else
  echo"Input data is fail";






?>