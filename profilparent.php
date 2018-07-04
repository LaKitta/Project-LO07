<?php 
require_once 'WBcharte.php';

//Entête (Head) 
echo WBcharte::html_head('AdopteUneNounou');

//Barre de Naviguation
echo WBcharte::html_topnav();
?>

<link href='css/profilparent.css' rel='stylesheet'>

<body>
<section class="liste-enfant" style="background-image: url('img/enfants.png');">
<div class="container">
	<div class="row">
  	<div class="col-lg-10 col-lg-push-1 titreform titreprofil">
  		<p>Liste de vos enfants</p>
  	</div>
  </div>
  <div class="row" style="margin-top: 20px;">
  	<div class="col-lg-3 enfant">
  		<ul>
  			<li>Nom</li>
  			<li>Age</li>
  			<li>Restrictions alimentaires</li>
  		</ul>	
  	</div>
  	<div class="col-lg-3 enfant">
  		<ul>
  			<li>Nom</li>
  			<li>Age</li>
  			<li>Restrictions alimentaires</li>
  		</ul>	
  	</div>
  	<div class="col-lg-3 enfant">
  		<ul>
  			<li>Nom</li>
  			<li>Age</li>
  			<li>Restrictions alimentaires</li>
  		</ul>	
  	</div>
  </div>
</div>
</section>




<!-- Form nouvel enfant -->
<div class="container">
	<form class="form-horizontal debutform" method="get">
<fieldset>
	<div class="col-lg-10 col-lg-push-1 titreform">
  <p>Nouvel enfant ? </p>
</div>
  		<!-- Prenom -->
<div class="form-group" style="margin-top: 80px;">
  <label class="col-md-4 control-label" for="Prenom"></label>  
  <div class="col-md-4">
  <input id="prenom" name="prenom" type="text" placeholder="Prenom" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Age -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Age"></label>  
  <div class="col-md-4">
  <input id="age" name="age" type="text" placeholder="Age" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Alimentaire -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Alimentaire"></label>  
  <div class="col-md-4">
  <input id="alimentaire" name="alimentaire" type="text" placeholder="Alimentaire" class="form-control input-md" required="">
    
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


<!-- Form nouvel garde -->
<div class="container">
	<form class="form-horizontal debutform" method="get">
<fieldset>
	<div class="col-lg-10 col-lg-push-1 titreform">
  <p>Demander une nounou pour cette semaine </p>
</div>

<!-- choix enfants -->
<div class="form-group">
  <label class="col-md-4 control-label" for="enfant">Pour ?</label>
  <div class="col-md-4">
    <label class="checkbox-inline" for="enfant-0">
      <input type="checkbox" name="enfant" id="enfant-0" value="1">
      Enfant 1
    </label>
    <label class="checkbox-inline" for="enfant-1">
      <input type="checkbox" name="enfant" id="enfant-1" value="2">
      Enfant 2
    </label>
    <label class="checkbox-inline" for="enfant-2">
      <input type="checkbox" name="enfant" id="enfant-2" value="3">
      Enfant 3
    </label>
  </div>
</div>

<!-- jour -->
<div class="form-group">
  <label class="col-md-4 control-label" for="jour">Jour</label>
  <div class="col-md-2">
    <select id="jour" name="jour" class="form-control">
      <option value="1">lundi</option>
      <option value="2">mardi</option>
      <option value="3">mercredi</option>
      <option value="4">jeudi</option>
      <option value="5">vendredi</option>
      <option value="6">samedi</option>
      <option value="7">dimanche</option>
    </select>
  </div>
</div>

<!-- Heure début -->
<div class="form-group">
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

<!-- toutes les semaines -->
<div class="form-group">
  <label class="col-md-4 control-label" for="semaine">Toutes les semaines ?</label>
  <div class="col-md-4">
    <label class="checkbox-inline" for="semaine-0">
      <input type="checkbox" name="semaine" id="semaine-0" value="1">
      Oui
    </label>
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


<!-- Form garde par langue -->
<div class="container">
	<form class="form-horizontal debutform" method="get">
<fieldset>
	<div class="col-lg-10 col-lg-push-1 titreform">
  <p>Chercher une nounou par langue parlée </p>
</div>


<!-- choix enfants -->
<div class="form-group">
  <label class="col-md-4 control-label" for="enfant">Pour ?</label>
  <div class="col-md-4">
    <label class="checkbox-inline" for="enfant-0">
      <input type="checkbox" name="enfant" id="enfant-0" value="1">
      Enfant 1
    </label>
    <label class="checkbox-inline" for="enfant-1">
      <input type="checkbox" name="enfant" id="enfant-1" value="2">
      Enfant 2
    </label>
    <label class="checkbox-inline" for="enfant-2">
      <input type="checkbox" name="enfant" id="enfant-2" value="3">
      Enfant 3
    </label>
  </div>
</div>

<!-- Langue -->
<div class="form-group">
  <label class="col-md-4 control-label" for="langue">Langue</label>
  <div class="col-md-2">
    <select id="langue" name="langue" class="form-control">
      <option value="anglais">anglais</option>
      <option value="espagnol">espagnol</option>
      <option value="portugais">portugais</option>
      <option value="allemand">allemand</option>
      <option value="italien">italien</option>
      <option value="chinois">chinois</option>
      <option value="japonais">japonais</option>
      <option value="arabe">arabe</option>
    </select>
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

<!-- Vos gardes -->
<section class="liste-garde" style="background-image: url('img/garde.png');">
<div class="container">
	<div class="row">
  	<div class="col-lg-10 col-lg-push-1 titreform titreprofil">
  		<p style="color: white">Liste de vos gardes demandées</p>
  	</div>
  </div>
  <div class="row" style="margin-top: 20px;">
  	<div class="col-lg-3 enfant">
  		<ul>
  			<li>Jour</li>
  			<li>Heure de début</li>
  			<li>Heure de fin</li>
  		</ul>
		<form class="form-horizontal debutform" method="get">
		<fieldset>
		<div class="form-group">
		  <label class="col-md-4 control-label" for="submit"></label>
	 	 <div class="col-md-4">
	 	   <button id="submit" name="submit" class="btn btn-success">Réalisée</button>
	 	 </div>
		</div>

		</fieldset>
		</form>	
 	</div>

  	<div class="col-lg-3 enfant">
  		<ul>
  			<li>Jour</li>
  			<li>Heure de début</li>
  			<li>Heure de fin</li>
	  	</ul>
	  	<form class="form-horizontal debutform" method="get">
		<fieldset>
		<div class="form-group">
		  <label class="col-md-4 control-label" for="submit"></label>
		  <div class="col-md-4">
			<button id="submit" name="submit" class="btn btn-success">Réalisée</button>
		  </div>
		</div>

		</fieldset>
		</form>	
	</div>

  	<div class="col-lg-3 enfant">
  		<ul>
  			<li>Jour</li>
  			<li>Heure de début</li>
  			<li>Heure de fin</li>
  		</ul>
  		<form class="form-horizontal debutform" method="get">
		<fieldset>
		<div class="form-group">
		  <label class="col-md-4 control-label" for="submit"></label>
		  <div class="col-md-4">
		    <button id="submit" name="submit" class="btn btn-success">Réalisée</button>
		  </div>
		</div>

		</fieldset>
		</form>	
  	</div>
</div>
</section>

</body>

<?php 
//Pied de page
echo WBcharte::html_foot();
 ?>



</html>