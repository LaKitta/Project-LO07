<?php
require_once 'WBcharte.php';

//Entête (Head) 
echo WBcharte::html_head('AdopteUneNounou');

//Barre de Naviguation
echo WBcharte::html_topnav();
?>


<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Edit information</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<div class="container myform" id="C" style="margin-top: 80px;">
  <form enctype="multipart/form-data" method="post" name="form1" action ='./editparent2.php'>
  <fieldset>
         <legend class="titreform">Edit vos infomations</legend>
    <div class="Nom form_left form_l1">
        <label for="Nom"></label>
        <input type="text" id="Nom" name="Nom" placeholder="Enter Nom" style="width:200px;" required="required">
    </div>
    <div class="Ville form_left form_l2">
        <label for="Ville"></label>
        <input type="text" id="Ville" name="Ville" placeholder="Enter Ville" style="width:200px;" required="required">
    </div>
    <div class="Portable form_right form_l3">
        <label for="Portable"></label>
        <input type="number" id="Portable" name="Portable" placeholder="Portable" style="width:200px;" required="required">
    </div><hr>
    <div class="form_left form_l12" style="">
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="reset" class="btn btn-danger">Reset</button>
    </div>
</fieldset>
  </form>
</div>

  <!--Declare disponibility-->

  <div class="container myform" id="C" style="margin-top: 40px;">
  <form role="form" action="editenfant.php" method="post">
            <fieldset>
                <legend class="titreform">Ajouter un enfant</legend>
                <div class="form-group row">
                    <label for="Nom" class="col-sm-2 form-control-label">Prénom de l'enfant :</label>
                    <div class="col-sm-8">
                    <input type="text" id="Nom" name="Nom" placeholder="Prénom" style="width:200px;" required="required">
                </div></div>
                <div class="form-group row">
                    <label for="naissance" class="col-sm-2 form-control-label">Date naissance:</label>
                    <div class="col-sm-8">
                    <input type="date"  id="naissance" name="naissance" > 
                </div></div>
                <div class="alimentaire form_left form_l10">
                    <label for="alimentaire"><hr>alimentaire:</label><br/>
                    <textarea id="alimentaire" name="alimentaire" style="width: 570px;"></textarea>
                </div><hr>
                <div class="form-group ">
                  <button type="submit" class="btn btn-primary ">Submit</button>
                  <button type="reset" class="btn btn-danger">Reset</button>
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