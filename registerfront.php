<?php 
require_once 'WBcharte.php';

//S'occupe du <head> 
echo WBcharte::html_head('Formulaire Nounou');

//Barre de Naviguation
echo WBcharte::html_topnav();
?>


<body style="margin-top: 80px">

<!----------------------------------------------------------------------------------------------------------------------------------------->

<!-- Form Inscription -->

<form class="form-horizontal debutform" id="form" name="form" method="post" action="./register.php">
<fieldset>
<!-- Form Name -->
<div class="titreform">
  <p>Inscription<hr/></p>
</div>

<!-- Email -->
<div class="form-group debutform">
  <label class="col-md-4 control-label" for="email"></label>
  <div class="col-md-4">
  <input id="Email" name="email" type="text" placeholder="Email" class="form-control input-md" required> 
  </div>
</div>


<!-- Mot de passe -->
<div class="form-group">
  <label class="col-md-4 control-label" for="password"></label>
  <div class="col-md-4">
    <input id="password" name="password" type="password" placeholder="Mot de passe" class="form-control input-md" required>
  </div>
</div>

<!-- Mot de passe -->
<div class="form-group">
  <label class="col-md-4 control-label" for="password2"></label>
  <div class="col-md-4">
    <input id="password2" name="password2" type="password" placeholder="Réecrire mot de passe" class="form-control input-md" required>
  </div>
</div>


<!-- type -->
<div class="form-group">
  <label class="col-md-4 control-label" for="type">Vous êtes :</label>
  <div class="col-md-4">
      <input type="radio" name="type" value="parent" checked="checked">Parent
      <input type="radio" name="type" value="nounou">Nounou
  </div>
</div>
      

<!-- Valider -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-success" value="Join now">Register</button>
  </div>
</div>

</fieldset>
</form>
<br>

<!-- Fin Form Inscription -->

<!----------------------------------------------------------------------------------------------------------------------------------------->


<?php 
//Pied de page
echo WBcharte::html_foot();
 ?>

</html>
