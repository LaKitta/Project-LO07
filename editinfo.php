

<?php
require_once('dbconnect.php');

$sql1="select id_nounous from nounous where email='$_COOKIE[email]'";
$result=$mydb->query($sql1);
$row=$result->fetch_row();//get id_nounou which is $row[0]

if ((($_FILES["Photo"]["type"] == "image/gif")
|| ($_FILES["Photo"]["type"] == "image/jpeg")
|| ($_FILES["Photo"]["type"] == "image/pjpeg"))
&& ($_FILES["Photo"]["size"] < 200000))
  {
  if ($_FILES["Photo"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["Photo"]["error"] . "<br />";
    }
  else
    {
    //echo "Upload: " . $_FILES["Photo"]["name"] . "<br />";
    //echo "Type: " . $_FILES["Photo"]["type"] . "<br />";
    //echo "Size: " . ($_FILES["Photo"]["size"] / 1024) . " Kb<br />";
    //echo "Temp file: " . $_FILES["Photo"]["tmp_name"] . "<br />";

    if (file_exists("img/" . $_FILES["Photo"]["name"]))
      {
      echo $_FILES["Photo"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["Photo"]["tmp_name"],
      "img/" . $_FILES["Photo"]["name"]);
      echo "Stored in: " . "./img/" . $_FILES["Photo"]["name"];
      }
    }
  }
else
  {
  echo "Invalid file";
  }

  $photopath="./img/".$_FILES["Photo"]["name"];
  $lang=implode(',',$_POST[Language]);



    $sql = "UPDATE nounous set nom='$_POST[Nom]', prenom='$_POST[Prenom]', ville='$_POST[Ville]', age='$_POST[Age]', portable='$_POST[Portable]', photo='$photopath', langues='$lang', experience='$_POST[Experience]' where id_nounous='$row[0]'";
        
    if ($mydb->query($sql) === TRUE) {
        echo "Success";
    } else {
        echo "Error: " . $sql . "<br>" . $mydb->error;
    }
    
    $mydb->close();

    echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."Success!"."\"".")".";"."</script>";
    echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."./nounou_profil.php"."\""."</script>";

?>