

<?php

//Select nounou by id

error_reporting(0);

require_once('dbconnect.php'); //connect to database
echo $_POST[status];
echo $_POST[id];
    $sql="UPDATE nounous SET status='$_POST[status]' WHERE id_nounous='$_POST[id]'";
    $result=$mydb->query($sql);

    if($result) {echo "success";}
    else echo "failed";
    
    $mydb->close();

    echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."Success!"."\"".")".";"."</script>";
    echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."./administrateur.php"."\""."</script>";

    ?>
