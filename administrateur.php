<?php 
require_once 'WBcharte.php';

//Entête (Head) 
echo WBcharte::html_head('AdopteUneNounou');

//Barre de Naviguation
echo WBcharte::html_topnav();

require_once('dbconnect.php');
      $sql1="select count(id_nounous) from nounous";
      $result=$mydb->query($sql1);
      $resul=$result->fetch_row();
      $number=$resul[0];
      $sql2="select sum(revenue) from service";
      $result2=$mydb->query($sql2);
      $resul2=$result2->fetch_row();
      $number2=$resul2[0];


?>

<body style="margin-top: 80px;">
	<div class="container">
        <header class="row">
          <div class="col-lg-12">
          	<p>Nombre de candidatures de nounous :</p>
          	<p>Nombre de nounous inscites : <?php echo $number; ?></p>
          	<p>Chiffre d'affaire :</p>
          	<ul>
          		<li>par mois :</li>
          		<li>par trimestre :</li>
          		<li>par année :<?php echo $number2; ?></li>
          	</ul>
          </div>
        </header>
    </div>


<form class="form-horizontal" method="post" action="./editstatus.php">
<fieldset>

<!-- Form Name -->
<div class="titreform">
  <p style="color: white;">Cherchez une nounou et modifier son status :</p>
</div>





<!-- nom -->
<div align="center">

 <!--<form id="form" name="form" method="post" action="./editstatus.php">
    <fieldset>
      
      <label for="username">Email:</label>
      <input type="email" id="email" name="email" required>
      <br>
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>
      <br>
      <input type="submit" class="btn btn-outline-primary login" value="Sign in">
      <input type="reset">
    </fieldset>
   </form>-->

    Entre le id de nounou:<input type="text" name="id" required>
    <br>
    <input type="radio" name="status" value="normal" checked="checked">Normal
    <br>
    <input type="radio" name="status" value="candidat" checked="checked">candidat 
    <br>
    <input type="radio" name="status" value="bloquer" checked="checked">bloquer  
    <br>
    <input type="submit">







</fieldset>
</form>

  <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <p class="titreform">Liste des nounou :</p>
            <!--list de nounous-->
            <?php
            require_once('dbconnect.php');
      $sql1="select * from nounous";
      $result=$mydb->query($sql1);

         
              echo "<table class='table' border='1'>";
              echo "<thead><tr>";
              echo "<th>ID_nounou</th>"; 
              echo "<th>Prénom</th>"; 
              echo "<th>Nom</th>"; 
              echo "<th>Age</th>"; 
              echo "<th>Status</th>"; 
              //echo "<th>Edit Status</th>";
              echo "</tr></thead>"; 
              echo "<tbody>";   
             while($temp = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                  echo "<tr>";
                  echo "<td>";
                  echo $temp['id_nounous'];
                  echo "</td>";
                  echo "<td>";
                  echo $temp['prenom'];
                  echo "</td>";
                  echo "<td>";
                  echo $temp['nom'];
                  echo "</td>";
                  echo "<td>";
                  echo $temp['age'];
                  echo "</td>";
                  echo "<td>";
                  echo $temp['status'];
                  echo "</td>";

            }
            echo "</tbody>"; 
            echo "</table>";
      ?>
          </div>
        </div>

        <div class="row" style="margin-bottom: 30px; margin-top: 20px;">
          <div class="col-lg-12">
            <p class="titreform">Information sur nounou :</p>
              

            
            
          </div>
        </div>
    </div>



</body>

<?php 

//Pied de page (foot)
echo WBcharte::html_foot();
 ?>



</html>