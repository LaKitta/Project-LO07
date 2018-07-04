<?php

require_once 'WBcharte.php';

//Entête (Head) 
echo WBcharte::html_head('AdopteUneNounou');

//Barre de Naviguation
echo WBcharte::html_topnav();


?>
<div class="container" style="margin-top:70px;">
  <div class="row">
    <div class="col-lg-12">
<?php 


        echo "<table class='table table-striped' border='1'>";
        echo "<thead>";
        echo "<tr>";  
        echo "<th>id_nounou</th>";
        echo "<th>Nom</th>";
        echo "<th>Prenom</th>";
        echo "<th>Age</th>";
        echo "<th>Note Moyen</th>";
        echo "<th>Langue</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        //table dynamique
    
           
            
            if ($_POST['dd']!='') {
                $sql="select * from nounous where date_debut<'$_POST[dd]'";
            } 
            if ($_POST['hd']!='') {
                $sql=$sql." and heure_debut<'$_POST[hd]'";
            } 
            //where langues REGEXP ".*francais.*chinois";
           
            /*if ($_POST['Language']!='') {
                $SQL_regex = ".*".implode(".*",$_POST['Language']);
                $sql=$sql." and langues REGEXP \"".$SQL_regex."\"";
            } */

        require_once('dbconnect.php');
        $result=$mydb->query($sql);


        if ($result){
            while($temp = mysqli_fetch_array ($result,MYSQLI_ASSOC)){
                print("<tr>");
                print("<td>".$temp["id_nounous"]."</td>");
                print("<td>".$temp["nom"]."</td>");
                print("<td>".$temp["prenom"]."</td>");
                print("<td>".$temp["age"]."</td>");
                print("<td>".$temp["notemoyen"]."</td>");
                print("<td>".$temp["langues"]."</td>");
                print("</tr>");
            }
        }
$mydb->close();
      //partie statique
      echo "</tbody>";
      echo "</table>"; 
    
?>
<form method="post" name="service" action ="./service3.php">
    <fieldset>
           <legend >Reserve un nounou par id</legend>
      <div class="Nom form_left form_l1">
          le id de nounou:
     <input type="number" name="id_nounou" style="width:200px;">
      </div>
      <div class="Ville form_left form_l2">
            combien heures:
          <input type="number" name="hour" style="width:200px;">
      </div>
      <div class="Ville form_left form_l2">
            combien enfants:
          <input type="number" name="enfants" style="width:200px;">
      </div>  
      <div class="Ville form_left form_l2">
            type de service:
          <input type="radio" name="type" value="babysit">babysit
          <input type="radio" name="type" value="langue">langue
          <input type="radio" name="type" value="reguliere">reguliere
      </div>  
      <div class="form_left form_l12">
          <button type="submit" class="btn btn-primary">Submit</button>
          <button type="reset" class="btn btn-danger">Reset</button>
      </div>
  </fieldset>
    </form>
    </div>
  </div>
</div>


<?php 
//Pied de page (foot)
echo WBcharte::html_foot(); 
?>

</html>