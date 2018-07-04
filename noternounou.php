<?php 
require_once 'WBcharte.php';

//Entête (Head) 
echo WBcharte::html_head('AdopteUneNounou');

//Barre de Naviguation
echo WBcharte::html_topnav();
?>

<!-- Noter une nounou -->

<body style="margin-top: 80px;">



<!-- Form noter nounou -->
<div class="container">
	<form class="form-horizontal debutform" method="get">
<fieldset>
	<div class="col-lg-10 col-lg-push-1 titreform">
  <p>Comment s'est passé la garde de votre(vos) enfant(s) ?</p>
</div>

<!-- Heure début -->
<div class="form-group" style="margin-top: 80px;">
  <label class="col-md-4 control-label" for="heuredébut">Heure de début</label>
  <div class="col-md-2">
    <select id="heuredébut" name="heuredébut" class="form-control">
      <option value="0">0h</option>
      <option value="1">1h</option>
      <option value="2">2h</option>
      <option value="3">3h</option>
      <option value="4">4h</option>
      <option value="5">5h</option>
      <option value="6">6h</option>
      <option value="7">7h</option>
      <option value="8">8h</option>
      <option value="9">9h</option>
      <option value="10">10h</option>
      <option value="11">11h</option>
      <option value="12">12h</option>
      <option value="13">13h</option>
      <option value="14">14h</option>
      <option value="15">15h</option>
      <option value="16">16h</option>
      <option value="17">17h</option>
      <option value="18">18h</option>
      <option value="19">19h</option>
      <option value="20">20h</option>
      <option value="21">21h</option>
      <option value="22">22h</option>
      <option value="23">23h</option>
    </select>
  </div>
</div>

<!-- Heure fin -->
<div class="form-group">
  <label class="col-md-4 control-label" for="heurefin">Heure de fin</label>
  <div class="col-md-2">
    <select id="heurefin" name="heurefin" class="form-control">
      <option value="1">1h</option>
      <option value="2">2h</option>
      <option value="3">3h</option>
      <option value="4">4h</option>
      <option value="5">5h</option>
      <option value="6">6h</option>
      <option value="7">7h</option>
      <option value="8">8h</option>
      <option value="9">9h</option>
      <option value="10">10h</option>
      <option value="11">11h</option>
      <option value="12">12h</option>
      <option value="13">13h</option>
      <option value="14">14h</option>
      <option value="15">15h</option>
      <option value="16">16h</option>
      <option value="17">17h</option>
      <option value="18">18h</option>
      <option value="19">19h</option>
      <option value="20">20h</option>
      <option value="21">21h</option>
      <option value="22">22h</option>
      <option value="23">23h</option>
      <option value="24">24h</option>
    </select>
  </div>
</div>


<!-- Note -->
<div class="form-group">
  <label class="col-md-4 control-label" for="note">Donnez une note ! </label>
  <div class="col-md-1">
    <select id="note" name="note" class="form-control">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
    </select>
    <div class="col-md-2">
    	<span class='span-logo'>
			<img src='img/biberon.png'>
		</span>
    </div>
    
  </div>
</div>


<!-- Présentation -->
<div class="form-group">
  <label class="col-md-4 control-label" for="appreciation">Appréciation générale</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="appreciation" name="appreciation" placeholder="Comment c'est passée la garde ?"></textarea>
  </div>
</div>


<!-- Valider -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-success">Valider</button>
  </div>
</div>

</fieldset>
</form>
</div>





</body>

<?php 
//Pied de page (foot)
echo WBcharte::html_foot();
 ?>



</html>