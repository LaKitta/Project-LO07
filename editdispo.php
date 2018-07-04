<?php
require_once('dbconnect.php');

$sql1="select id_nounous from nounous where email='$_COOKIE[email]'";
$result=$mydb->query($sql1);
$row=$result->fetch_row();//get id_nounou which is $row[0]

$jour=implode(',',$_POST[jour]);

    $sql = "UPDATE nounous set date_debut='$_POST[dd]', date_fin='$_POST[df]', heure_debut='$_POST[hd]', heure_fin='$_POST[hf]', jour='$jour' where id_nounous='$row[0]'";
        
    if ($mydb->query($sql) === TRUE) {
        echo "Success";
    } else {
        echo "Error: " . $sql . "<br>" . $mydb->error;
    }
    
    $mydb->close();

    echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."Success!"."\"".")".";"."</script>";
    echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."./nounou_profil.php"."\""."</script>";
    
    ?>