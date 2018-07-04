<?php

function userdefinition($email,$password){
    //judge whether a user exist
    require_once('dbconnect.php'); //connect to database
    $sql="SELECT * FROM users";
    $result=$mydb->query($sql);
    if ($result){
        while ($row = $result->fetch_assoc()){
            if ($row['email']==$email and $row['password']==$password){
                return $row;
                break; //quit inquire
            }
        }
    }
    $mydb->close();
}


//judge the identification of certain user. nounous, parent or administrator.
$loginer = userdefinition($_POST['email'],$_POST['password']);
if(isset($loginer)){
    if ($loginer['type']=='nounou'){
        $url="./nounou_profil.php";
    }
    elseif ($loginer['type']=='parent') {
        $url="./parent_profil.php";
    }
    elseif ($loginer['type']=='admin') {
        $url="./administrateur.php";   
    }
    //get in personal page by username
    $expire=time()+60*60*24;
    setcookie("email", $loginer['email'], $expire); //introduce to personal page
    Header("Location: $url"); 
}
else{
    echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."User does not exist！"."\"".")".";"."</script>";        
    echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."./adopteunenounou.php"."\""."</script>";
}


?>