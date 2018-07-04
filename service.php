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
      <form method="post" name="service" action ="./service2.php">
    <fieldset>
           <legend >Chercher un nounou par mot-clef</legend>
      <div class="Nom form_left form_l1">
          Date debut:
          <input type="date" name="dd" style="width:200px;">
      </div>
      <div class="Ville form_left form_l2">
            Heure debut:
          <input type="number" name="hd" style="width:200px;">
      </div>
      <div class="Portable form_right form_l3">
Language:
<div class="Language" form_left form_l7">
        <input type="radio" name="lang" value="Arabe">Arabe
    <input type="radio" name="lang" value="Anglais">Anglais
    <input type="radio" name="lang" value="Allemande">Allemande
        <input type="radio" name="lang" value="Chinois">Chinois
        <input type="radio" name="lang" value="Italien">Italien
    </div>    
    Jour:
<div class="Jour" form_left form_l7">
        <input type="checkbox" name="jour[]" value="Lundi">Lundi
        <input type="checkbox" name="jour[]" value="Mardi">Mardi
        <input type="checkbox" name="jour[]" value="Mercredi">Mercredi
        <input type="checkbox" name="jour[]" value="Jeudi">Jeudi
        <input type="checkbox" name="jour[]" value="Vendredi">Vendredi
        <input type="checkbox" name="jour[]" value="Samedi">Samedi
        <input type="checkbox" name="jour[]" value="Dimanche">Dimanche

    </div>   
      
      <div class="form_left form_l12" style="margin-top: 25px;">
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