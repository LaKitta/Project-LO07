<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Parent</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

    <h3> Mes informations</h3> 
    <?php
    require_once('dbconnect.php');
    $sql="select * from parents where email = '$_COOKIE[email]'";
    $result=$mydb->query($sql);
      if ($result){
          $parent = $result->fetch_assoc();
      }
      else echo "no result";
      
      echo "<ul>";
      echo "<li>";
      echo "Nom de famille: ".$parent['nom_famille'];
      echo "</li>";
      echo "<li>";
                  echo "Ville: ".$parent['ville'];
                  echo "</li>";
                  echo "<li>";
                  echo "Email: ".$parent['email'];
                  echo "</li>";
                  echo "<li>";
                  echo "Portable: ".$parent['portable'];
                  echo "</li>";
                  echo "<li>";
                  echo "ID: ".$parent['id_parents'];
                  echo "</li>";
                  echo "</ul>";

                  ?>
                  <form>
                  <input type="button" value="Edit informations" onclick="window.location.href='./editparent.php'" />
                  </form>
<hr>
<h3>Mes enfants</h3>
<?php
      $sql1="select id_parents from parents where email='$_COOKIE[email]'";
      $result=$mydb->query($sql1);
      $row=$result->fetch_row();//get id_parent which is $row[0]
      $sql2= "SELECT * FROM enfant WHERE id_parent='$row[0]'";
      $result2=$mydb->query($sql2);
              echo "List des enfants :";
              echo "<table class='table' border='1'>";
              echo "<thead><tr>";
              echo "<th>ID_enfants</th>"; 
              echo "<th>Prénom des enfants</th>"; 
              echo "<th>Date de naissance</th>"; 
              echo "<th>Restrictions alimentaires</th>"; 
              echo "</tr></thead>"; 
              echo "<tbody>";   
             while($temp = mysqli_fetch_array($result2, MYSQLI_ASSOC)){
                  echo "<tr>";
                  echo "<td>";
                  echo $temp['id_enfant'];
                  echo "</td>";
                  echo "<td>";
                  echo $temp['prenom'];
                  echo "</td>";
                  echo "<td>";
                  echo $temp['date_de_naissance'];
                  echo "</td>";
                  echo "<td>";
                  echo $temp['restrictions_alimentaires'];
                  echo "</td>";
            }
            echo "</tbody>"; 
            echo "</table>";
      ?> 
      <form>
                  <input type="button" value="Ajouter un enfant" onclick="window.location.href='./editparent.php'" />
                  </form>
                  <hr>

<!--  <div class="parent_function" style="display:none" id="div2">
    <h3> Ajouter un(e) enfant</h3><br/>
    <form   method="post" name="form3" action = './ajouter_enfant.php'>
    <fieldset>
       
    <div class="form-group row">
    <label for="parents" class="col-sm-4 form-control-label">Votre login:</label>
    <div class="col-sm-8">
      <input type="text"  id="parents" name="parents" placeholder="Votre login">
    </div>
    </div>
    <div class="form-group row">
    <label for="prenom" class="col-sm-4 form-control-label">Prénom:</label>
    <div class="col-sm-8">
      <input type="text"  id="prenom" name="prenom" placeholder="prenom">
    </div>
    </div>
    <div class="form-group row">
    <label for="naissance" class="col-sm-4 form-control-label">Date du naissance:</label>
    <div class="col-sm-8">
      <input type="date" id="naissance" name="naissance" placeholder="date du naissance">
    </div>
    </div>
    <div class="form-group row ">
    <label for="ra" class="col-md-4 form-control-label  ">Restrictions alimentaires:</label>
    <div class="col-sm-8">
      <input type="text" id="ra"  name="ra"  placeholder="Restrictions alimentaires" required="required">
    </div></div>
   
    <div class="form-group ">
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="reset" class="btn btn-danger">Reset</button>
       
    </div>
    </fieldset>
    </form>
  </div>-->
<h3>Mes service</h3>
<?php
error_reporting(0);
$sql="select * from service where id_parents = '$row[0]'";
$result=$mydb->query($sql);
  if ($result){
      $nounou = $result->fetch_all(MYSQLI_ASSOC);
  }
  echo "<table border='1'><tr>";
  echo "<td>service id</td>";
  echo "<td>revenue</td>";
  echo "<td>jour</td>";
  echo "<td>heure</td>";
  echo "<td>enfant</td>";
  echo "<td>type</td></tr>";
foreach ($nounou as $value) {
  echo "<tr>";
  echo "<td>".$value[id_contrat]."</td>";
  echo "<td>".$value[revenue]."</td>";
  echo "<td>".$value[jour]."</td>";
  echo "<td>".$value[heure]."</td>";
  echo "<td>".$value[list_enfant]."</td>";
  echo "<td>".$value[type]."</td>";
  echo "</tr>";
}
echo "</table>";
$mydb->close();
?>
<form>
<input type="button" value="Ajouter un service" onclick="window.location.href='./service.php'" />
</form>
<hr>

  <!--<div class="parent_function" id="filtrer_nounous">
  <form enctype="multipart/form-data" method="post" name="form1" action = 'filtrer_nounous.php'>
    <div class="form_left form_l1">
    <h2>Recherche floue</h2></div>
    <div class="Ville form_left form_l2">
        <label for="Ville">Ville:</label>
        <input type="text" id="Ville" name="Ville" placeholder="Enter Ville" style="width:200px;">
    </div>
    <div class="Email form_left form_l3">
        <label>Age:</label>
        <input type="number" id="Age min" name="min" placeholder="Age min" style="width:200px;">
    </div>
    <div class="Portable form_right form_l3">
        <input type="number" id="Age max" name="max" placeholder="Age max" style="width:200px;">
    </div>

    <div class="Language form_left form_l4">
        <input type="checkbox" name="Language[]" value="Francais">Français
		    <input type="checkbox" name="Language[]" value="Anglais">Anglais
		    <input type="checkbox" name="Language[]" value="Allemande">Allemande
		    <input type="checkbox" name="Language[]" value="Chinois">Chinois
    </div>    
 
    <div class="form_left form_l5">
      <label for="dd">Date debut:</label>
      <input type="date"  id="dd" name="dd" >
    </div>

    <div class="form_right form_l5">
      <label for="df">Date de fin:</label>
      <input type="date"  id="df" name="df" >
    </div>
    <div class="form_left form_l6">
      <h3>Recherche précise</h3>
    </div>
    <div class="Nom form_left form_l7">
        <label for="Nom">Nom:</label>
        <input type="text" id="Nom" name="Nom" placeholder="Enter Nom" style="width:200px;">
    </div>
    <div class="Prenom form_right form_l7">
        <label for="Prenom">Prenom:</label>
        <input type="text" id="Prenom" name="Prenom" placeholder="Enter Prenom" style="width:200px;">
    </div>
    <div class="form_left form_l8">
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="reset" class="btn btn-danger">Reset</button>
    </div>
  </form>
  </div>-->

  <div class="parent_function" style="display:none" id="mes_reser">

      <?php 
      function reservation(){
      $sql_sentence="select * from contrat where id_parents=".$_SESSION['id_utilisateur'].";";
      $DB_conn = mysqli_connect ('localhost','xugang','rOcbQ6wj','xugang');
      $DB_result = mysqli_query($DB_conn,$sql_sentence); 
     
      echo "<h3>Tous mes réservations</h3>";
      while( $contrat = mysqli_fetch_array ($DB_result,MYSQLI_ASSOC)){
         echo "<ul><li>";
         echo "ID: ".$contrat['id_contrat']."</li>";
         echo "<li>Type du contrat: ".$contrat['type']."</li>";
         echo "<li>Date début: ".$contrat['debut']."</li>";
         echo "<li>Date fin: ".$contrat['fin']."</li>";
         echo "<li>Heure: ".$contrat['heure']."h</li>";
         echo "<li>ID du nonnous: ".$contrat['id_nounous']."</li>";
         echo "<li>Nom du nonnous: ".$contrat['nom_n']."</li>";
         echo "<li>Prénom du nonnous: ".$contrat['prenom_n']."</li>";
         echo "<li>Prix total: ".$contrat['revenue']."EUR</li>";
         echo "<li>Évaluation: ".$contrat['evaluation']."</li>";
         echo "<li>Note: ".$contrat['note']."</li>";
         echo "</ul>";
         
        
         echo "List des enfants occupés:";
              echo "<table class='table '>";
              echo "<thead><tr>";
              echo "<th>ID_enfants</th>"; 
              echo "<th>Prénom des enfants</th>"; 
              echo "<th>Date de naissance</th>"; 
              echo "<th>Restrictions alimentaires</th>"; 
              echo "</tr></thead>"; 
              echo "<tbody>";   
              foreach (explode(",",$contrat['list_enfant']) as $enfant) {
                  $sql3= "SELECT * FROM `enfant` WHERE `id_enfant`= '".$enfant."'";
                  $DB_conn = mysqli_connect ('localhost','xugang','rOcbQ6wj','xugang');
                  $DB_result2 = mysqli_query($DB_conn,$sql3);  
                  while($temp2 = mysqli_fetch_array ($DB_result2,MYSQLI_ASSOC)){
                  
                  echo "<tr>";
                  echo "<td>";
                  echo $temp2['id_enfant'];
                  echo "</td>";
                  echo "<td>";
                  echo $temp2['prenom'];
                  echo "</td>";
                  echo "<td>";
                  echo $temp2['date_de_naissance'];
                  echo "</td>";
                  echo "<td>";
                  echo $temp2['restrictions_alimentaires'];
                  echo "</td>";

            }
              }
             
            echo "</tbody>"; 
            echo "</table>";
     }
    
      
      mysqli_close($DB_conn);
      }
      reservation();
      ?>
  </div>
  
  <div class="parent_function" style="display:none" id="evaluer" >
    <h3> Evaluer vos réservations</h3><br/>
    <form   method="post" name="form4" action = '#'>
    <fieldset> 
    <div class="form-group row">
      <label for="id_contrat" class="col-sm-4 form-control-label">ID contrat:</label>
      <div class="col-sm-8">
        <input type="text"  id="id_contrat" name="id_contrat" placeholder="id contrat">
      </div>
    </div>
    
    <div class="form-group row">
      <label for="note" class="col-sm-4 form-control-label">Note:</label>
      <div class="col-sm-8">
      <div class="rating">
        <input type="radio" id="star5" name="rating" value="5" hidden/>
        <label for="star5"></label>
        <input type="radio" id="star4" name="rating" value="4" hidden/>
        <label for="star4"></label>
        <input type="radio" id="star3" name="rating" value="3" hidden/>
        <label for="star3"></label>
        <input type="radio" id="star2" name="rating" value="2" hidden/>
        <label for="star2"></label>
        <input type="radio" id="star1" name="rating" value="1" hidden/>
        <label for="star1"></label>
      </div>
      </div>
    </div>

    <div class="form-group row">
      <label for="evaluation" class="col-sm-4 form-control-label">Votre évaluation:</label>
      <div class="col-sm-8">
      <textarea id="evaluation" name="evaluation" style="height:260px ;width: 400px;"></textarea>
      </div>
    </div>

    <div class="form-group ">
      <button type="submit" class="btn btn-primary">Submit</button>
      <button type="reset" class="btn btn-danger">Reset</button> 
    </div>
    </fieldset>
    </form>
    <?php  
        $id_parents= $_SESSION['id_parents'];
        function ajouter_evaluation(){
          global $_POST;
          global $id_parents;
          if(isset($_POST['rating']) and ($_POST['evaluation']!='') and ($_POST['id_contrat']!='')){
            $DB_conn = mysqli_connect ('localhost','xugang','rOcbQ6wj','xugang');
            $sql = "UPDATE `contrat` SET `note`= '".$_POST['rating']."',`evaluation`= '".str_replace("'", "''", $_POST['evaluation'])."' WHERE `id_contrat`='".$_POST['id_contrat']."'; ";
     
            $result = mysqli_query($DB_conn,$sql);  
            mysqli_close($DB_conn);
          }    
        }
        ajouter_evaluation();
    ?>
    </div>
</div>

</body>

</html>
