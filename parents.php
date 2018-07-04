<?php
  session_start();
  $sql_sentence="select * from parents where id_parents=".$_SESSION['id_utilisateur'].";";
  $DB_conn = mysqli_connect ('localhost','xugang','rOcbQ6wj','xugang');
  $DB_result = mysqli_query($DB_conn,$sql_sentence); 
  if ($DB_result){
      $parents = mysqli_fetch_array ($DB_result,MYSQLI_ASSOC);
  }
  mysqli_close($DB_conn);
  //$_SESSION=$_SESSION+$parents;
  
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Chercher un nounous</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/self.js"></script>
    <style>
         .rating {
        font-size: 0;
        display: table;
    }

    .rating > label {
        color: #ddd;
        float: right;
    }

    .rating > label:before {
        padding: 5px;
        font-size: 24px;
        line-height: 1em;
        display: inline-block;
        content: "★";
    }

    .rating > input:checked ~ label,
    .rating:not(:checked) > label:hover,
    .rating:not(:checked) > label:hover ~ label {
        color: #FFD700;
    }

    .rating > input:checked ~ label:hover,
    .rating > label:hover ~ input:checked ~ label,
    .rating > input:checked ~ label:hover ~ label {
        opacity: 0.5;
    }
    </style>

    <!--
        http://localhost/LO07_projet/parents.php
    -->
</head>
<body>
<div class="container" id="A">
    <!-- Nav pills -->
    <ul class="nav nav-pills" role="tablist" id="navigation">
        <li class="nav-item">
          <a class="nav-link active" data-toggle="pill" href="#Introduction">Introduction</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="pill" href="#menu1">Menu 1</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="pill" href="#menu2">Menu 2</a>
        </li>
    </ul> 
    <!-- Tab panes -->
    <div class="tab-content">
        <div id="Introduction" class="container tab-pane active"><br>
            <p>
            Nounous & Moi a été fondée en 2018 et a été largement saluée par les clients depuis sa création. Permettre aux clients de sélectionner leurs nounous sans quitter leur domicile et effectuer les opérations
            </p>
        </div>
        <div id="menu1" class="container tab-pane fade"><br>
            <h3>Menu 1</h3>
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
        <div id="menu2" class="container tab-pane fade"><br>
            <h3>Menu 2</h3>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
        </div>
    </div>
    <a  href="http://localhost/LO07_projet/index.html"><img class='logo' src="img/logo.png"></a>
</div>

<div class="container" id="B">
    <img id='profil' src="<?php echo $_SESSION['photo'] ?>" style="width:120px;height:120px;">
    <div id="profil_info">
        <?php  echo "Bonjour, <br />".$_SESSION['login']."! parent";?>
    </div>
    <div id="accordion" class="panel_B">
          <div class="card" id="panel_compte">
            <div class="card-header">
              <a class="card-link B" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                Gerer mon compte
              </a>
            </div>
            <div id="collapseOne" class="collapse">
              <div class="card-block">
                <a class="B" href="#mes info" onclick="afficherC1('div1');">Mes informations</a></br>
                <a class="B" href="#ajouter enfant" onclick="afficherC1('div2');">Ajouter un(e) enfants</a>
              </div>
            </div>
          </div>

          <div class="card" id="panel_histoire">
            <div class="card-header">
              <a class="collapsed card-link B" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
              Chercher une nounous
            </a>
            </div>
            <div id="collapseTwo" class="collapse">
              <div class="card-block">
                <a class="B" href="#filtrer nounous" onclick="afficherC1('filtrer_nounous');">Filtrer nounous</a><br/>
    
              </div>
            </div>
          </div>

          <div class="card" id="panel_setting">
            <div class="card-header">
              <a class="collapsed card-link B" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                Mes réservations
              </a>
            </div>
            <div id="collapseThree" class="collapse">
              <div class="card-block">
                <a class="B" href="#mes reser" onclick="afficherC1('mes_reser');">Tous mes résercations</a><br/>
                <a class="B" href="#evaluation" onclick="afficherC1('evaluer');">Evaluer le nounous</a><br/>
              </div>
            </div>
          </div>
      </div>
</div>

<div class="container myform" id="C">
  <div  class="parent_function" style="display:none" id="div1">
    <h3> Mes informations</h3> 
    <?php
      
     $login=$_SESSION['login'];
      function list_enfant(){
      global $_POST;
      global $login;
      $DB_conn = mysqli_connect ('localhost','xugang','rOcbQ6wj','xugang');
      $sql1= "SELECT * FROM `parents` WHERE `login`= '".$login."'";
      $result=mysqli_query($DB_conn,$sql1);
      $sql2= "SELECT * FROM `enfant` WHERE `parents`= '".$login."'";
      $DB_result = mysqli_query($DB_conn,$sql2);  
      while($temp1 = mysqli_fetch_array ($result,MYSQLI_ASSOC)){
                  echo "<ul>";
                  echo "<li>";
                  echo "Login: ".$temp1['login'];
                  echo "</li>";
                  echo "<li>";
                  echo "Nom de famille: ".$temp1['nom_famille'];
                  echo "</li>";
                  echo "<li>";
                  echo "Ville: ".$temp1['ville'];
                  echo "</li>";
                  echo "<li>";
                  echo "Email: ".$temp1['email'];
                  echo "</li>";
                  echo "<li>";
                  echo "Portable: ".$temp1['portable'];
                  echo "</li>";
                  echo "<li>";
                  echo "ID: ".$temp1['id_parents'];
                  echo "</li>";
                  echo "</ul>";
            }
              echo "List des enfants :";
              echo "<table class='table '>";
              echo "<thead><tr>";
              echo "<th>ID_enfants</th>"; 
              echo "<th>Prénom des enfants</th>"; 
              echo "<th>Date de naissance</th>"; 
              echo "<th>Restrictions alimentaires</th>"; 
              echo "</tr></thead>"; 
              echo "<tbody>";   
             while($temp2 = mysqli_fetch_array ($DB_result,MYSQLI_ASSOC)){
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
            echo "</tbody>"; 
            echo "</table>";
        mysqli_close($DB_conn);
        }
        list_enfant();
      ?> 
  </div>
  <div class="parent_function" style="display:none" id="div2">
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
  </div>

  <div class="parent_function" id="filtrer_nounous">
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
  </div>

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
