
<?php
session_start();
$login= $_SESSION['login'];
 function declarer_dispo(){
     global $_POST;
     global $login;
     $jour=implode(",",$_POST['jour']);
     
     $DB_conn = mysqli_connect ('localhost','xugang','rOcbQ6wj','xugang');
        $sql = "UPDATE `nounous` SET `heure_debut`= '".$_POST['hd']."',`heure_fin`= '".$_POST['hf']."',`date_debut`= '".$_POST['dd']."',`date_fin`= '".$_POST['df']."',`jour`= '".$jour."' WHERE `login`='".$login."' ";
        echo $sql;
        $result = mysqli_query($DB_conn,$sql);  
        echo "<br/>";
        echo 'Déclarer vos disponibilités succes !';        
        mysqli_close($DB_conn);
    }
 declarer_dispo();
 echo "<p>";
 echo "<input type='button' name='back' value='Renter' onclick='javascript:history.go(-1)' />"
 
?>
