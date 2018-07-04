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
<link href='css/profilnounou.css' rel='stylesheet'>

<body style="margin-top: 70px;">
  <section class="background" style="background-image: url('img/background.png');">
  <div class="container">
    <div class="row">
      <div class="col-lg-12" style="margin-top: 25px;">
        <h1 class="titreform">Infos services</h1>
        <hr>
        <p>
        L'objectif de notre entreprise est que les parents trouve facilement les nounous qui leurs conviennent.</p>
        <p>Notre autre objectif est que les nounous se sentent à l'aise, et trouve facilement du travail, selon leurs disponibilité. Leur maitrise de langues étrangères peut également être mis en valeur.</p>
        <hr>
        <p>Nombre de nounous inscites : <?php echo $number; ?></p>       
      </div>      
    </div>    
  </div>    
  </section>
</body>

<?php 
//Pied de page (foot)
echo WBcharte::html_foot();
 ?>



</html>