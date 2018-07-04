<?php
error_reporting(0);

require_once('dbconnect.php');

$sql1="select id_parents from parents where email='$_COOKIE[email]'";
$result=$mydb->query($sql1);
$row=$result->fetch_row();//get id_nounou which is $row[0]





    $sql = "UPDATE parents set nom_famille='$_POST[Nom]', ville='$_POST[Ville]', portable='$_POST[Portable]' where id_parents='$row[0]'";
        
    if ($mydb->query($sql) === TRUE) {
        echo "Success";
    } else {
        echo "Error: " . $sql . "<br>" . $mydb->error;
    }
    
    $mydb->close();

    echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."Success!"."\"".")".";"."</script>";
    echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."./parent_profil.php"."\""."</script>";

?>
