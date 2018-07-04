<?php
require_once('dbconnect.php');
echo "lol";

$sql1="select id_nounous from nounous where email='$_COOKIE[email]'";
$result=$mydb->query($sql1);
$row=$result->fetch_row();//get id_nounou which is $row[0]
echo $row[0];

$sql2="select * from nounous where email = '$_COOKIE[email]'";
$result=$mydb->query($sql2);
print_r($result);
  if ($result){
      $nounou = $result->fetch_assoc();
  }
  else echo "no result";
print_r($nounou);
  

?>