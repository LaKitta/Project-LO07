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

  require_once 'WBcharte.php';

//Entête (Head) 
echo WBcharte::html_head('AdopteUneNounou');

//Barre de Naviguation
echo WBcharte::html_topnav();
?>

<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard Nounou</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='css/profilnounou.css' rel='stylesheet'>
</head>
  
<body style="margin-top: 70px;">
<section class="background" style="background-image: url('img/background.png');">
<div class="container myform" id="C"> 
  <div class="row">
    <div class="col-lg-12" style="margin-bottom: 20px;">
      <h3 class="titreform">Mes informations</h3>
    </div>
    <div class="col-lg-6">
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
    <div class="col-lg-6">
      <img id='profil' src="<?php echo $nounou['photo'] ?>" style="width:240px;height:240px;">
    </div>
  </div>
  <div class="row">
     <div class="col-lg-2">
      <form>
      <input type="button" class="btn btn-warning" style="color: black;" value="Modifier informations" onclick="window.location.href='./editnounou.php'" />
    </form>
    </div>
  </div>   
  <div class="row" style="margin-top: 5px;">
    <div class="col-lg-12">
      <hr>
    <h3 class="titreform">Mes disponibilitées</h3>
      <?php
      echo "Disponible du ".$nounou['date_debut']." jusqu'au ".$nounou['date_fin'];
      echo "<br>";
      echo "Disponible de ".$nounou['heure_debut']." jusqu'à ".$nounou['heure_fin'];
      echo "<br>";
      echo "Mes jours régulier : ".$nounou['jour'];
      ?>
      <p style="font-size: 15px; margin-top: 20px;">1 = lundi; 2 = mardi ; 3 = mercredi ; 4 = jeudi ; 5 = vendredi ; 6 = samedi ; 7 = dimanche</p>
    </div>
    <div class="col-lg-2">
        <form>
          <input type="button" value="Modifier disponibilitées" class="btn btn-warning" onclick="window.location.href='./editnounou.php'" style="margin-top: 50px;color: black;" />
        </form>
    </div>  
  </div>
  <!---MEs services-->



  <div class="row" style="margin-top: 20px; margin-bottom: 50px;">
    <div class="col-lg-12">
      <h3 class="titreform">Mes services</h3>
    <table class="points_table" border="2">
      <thbody>
        <tr>
          <div class="row">
            <th class="col-xs-1">ID</th>
            <th class="col-xs-1">Revenu</th>
            <th class="col-xs-1">Jour</th>
            <th class="col-xs-1">Heure</th>
            <th class="col-xs-1">Enfant</th>
            <th class="col-xs-1">Type</th>
          </div>
        </tr>
      </thbody>
      <tbody class="points_table_scrollbar">
      <?php
      error_reporting(0);
      $sql="select * from service where id_nounous = '$row[0]'";
      $result=$mydb->query($sql);
        if ($result){
            $nounou2 = $result->fetch_all(MYSQLI_ASSOC);
        }
        $mydb->close();

      foreach ($nounou2 as $value) {
        echo "<tr class='even'>";
        echo "<td class='col-xs-2'>".$value[id_contrat]."</td>";
        echo "<td class='col-xs-2'>".$value[revenue]."</td>";
        echo "<td class='col-xs-2'>".$value[jour]."</td>";
        echo "<td class='col-xs-2'>".$value[heure]."</td>";
        echo "<td class='col-xs-2'>".$value[list_enfant]."</td>";
        echo "<td class='col-xs-2'>".$value[type]."</td>";
        echo "</tr>";
      }
      $mydb->close();
      ?>
      </tbody>
    </table>
    </div>
  </div>
  <div class="row"> 
   
  </div>
 </div>
</section>
</body>

<?php 
//Pied de page (foot)
echo WBcharte::html_foot(); 
?>

</html>