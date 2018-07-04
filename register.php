<?php
require_once('dbconnect.php');

if($mydb){
    //check connection to database
    
    if(isset($_POST["submit"])){
        //get values from register table
        $email=$_POST["email"];
        $password1=$_POST["password"];
        $password2=$_POST["password2"];
        $type=$_POST["type"];
        if($password1==$password2){
            //check whther password correct
            $sql="select count(*) from users where email="."'"."$email"."'";
            $result=$mydb->query($sql);
            $row=$result->fetch_row();
            $resu=$row[0];
            if($resu==1){
                //check if this email is unique
                echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."User already exist!"."\"".")".";"."</script>";
                echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."./register.html"."\""."</script>";
                exit;
            }
        
            //insert values to datatable
            $sql="insert into users (password, type, email) values('$password1', '$type', '$email')";
            $mydb->query($sql);

            $sql1="select id_parents from parents where email='$_COOKIE[email]'";
            $result1=$mydb->query($sql1);
            $row=$result1->fetch_row();//get id_nounou which is $row[0]
         
            //register in table parent or nounou
            if($type=='parent'){
                $query="INSERT INTO parents (id_parents, email) VALUES('$row[0]', '$email')";
            } else{   
                $query="INSERT INTO nounous (id_nounous, email) VALUES('$row[0]', '$email')";

               
            }
          
            $result2=$mydb->query($query);
            if($result2) {
            echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."Success!"."\"".")".";"."</script>";
            $mydb->close();
            echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."./adopteunenounou.php"."\""."</script>";
            }

        
    
           
 
            //echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."./index.html"."\""."</script>";
        }
        else
        {
            echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."Password Inconsistent！"."\"".")".";"."</script>";
            echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."./registerfront.php"."\""."</script>";
        }
    }
}
?>