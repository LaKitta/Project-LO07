<?php
require_once('dbconnect.php');

$sql1="select id_nounous from nounous where email='$_COOKIE[email]'";
$result=$mydb->query($sql1);
$row=$result->fetch_row();//get id_nounou which is $row[0]

$sql="select * from nounous where email = '$_COOKIE[email]'";
$result=$mydb->query($sql);
  if ($result){
      $nounou = $result->fetch_assoc();
  }
  else echo "no result";
?>

<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard Nounou</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
  
<body>
<div class="container myform" id="C"> 
    <h3>Mes informations</h3>
    <img id='profil' src="<?php echo $nounou['photo'] ?>" style="width:120px;height:120px;">
    <?php
    echo "<ul>";
      echo "<li>";
      echo "Nom de famille: ".$nounou['nom'];
      echo "</li>";
      echo "<li>";
      echo "Prénom: ".$nounou['prenom'];
      echo "</li>";
      echo "<li>";
      echo "Age: ".$nounou['age'];
      echo "</li>";
      echo "<li>";
      echo "Ville: ".$nounou['ville'];
      echo "</li>";
      echo "<li>";
      echo "Situation: ".$nounou['status'];
      echo "</li>";
      echo "<li>";
      echo "Email: ".$nounou['email'];
      echo "</li>";
      echo "<li>";
      echo "Portable: ".$nounou['portable'];
      echo "</li>";
      echo "<li>";
      echo "Langues: ".$nounou['langues'];
      echo "</li>";
      echo "<li>";
      echo "Mes expériences: ".$nounou['experience'];
      echo "</li>";
      echo "</ul>";
      ?>
  </div>
  <form>
<input type="button" value="Edit informations" onclick="window.location.href='./editnounou.html'" />
</form>
  <hr>
  <h3>Mes disponibilite</h3>
  <?php
  echo "Date: From ".$nounou['date_debut']."to ".$nounou['date_fin'];
  echo "<br>";
  echo "Hours: From ".$nounou['heure_debut']."to ".$nounou['heure_fin'];
  echo "<br>";
  echo "Les jours: weekday ".$nounou['jour'];
  ?>
    <form>
<input type="button" value="Edit disponibilite" onclick="window.location.href='./editnounou.html'" />
</form>
<hr>

<!---MEs services-->

<h3>Mes services</h3>
<table border="1">
<tr>
<td>service id</td>
<td>revenue</td>
<td>jour</td>
<td>heure</td>
<td>enfant</td>
<td>type</td>
</tr>
<?php
error_reporting(0);
$sql="select * from service where id_nounous = '$row[0]'";
$result=$mydb->query($sql);
  if ($result){
      $nounou2 = $result->fetch_all(MYSQLI_ASSOC);
  }
  $mydb->close();

foreach ($nounou2 as $value) {
  echo "<tr>";
  echo "<td>".$value[id_contrat]."</td>";
  echo "<td>".$value[revenue]."</td>";
  echo "<td>".$value[jour]."</td>";
  echo "<td>".$value[heure]."</td>";
  echo "<td>".$value[list_enfant]."</td>";
  echo "<td>".$value[type]."</td>";
  echo "</tr>";
}
$mydb->close();
?>
</table>
</body>
</html>