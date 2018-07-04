<?php
error_reporting(0);

require_once('dbconnect.php');

$sql1="select id_parents from parents where email='$_COOKIE[email]'";
$result=$mydb->query($sql1);
$row=$result->fetch_row();//get id_parent which is $row[0]





    $sql = "Insert enfant set id_parent='$row[0]', prenom='$_POST[Nom]', date_de_naissance='$_POST[naissance]', restrictions_alimentaires='$_POST[alimentaire]'";
        
    if ($mydb->query($sql) === TRUE) {
    	$mydb->close();
        echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."Success!"."\"".")".";"."</script>";
    	echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."./parent_profil.php"."\""."</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $mydb->error;
    }
    
    $mydb->close();

?>
