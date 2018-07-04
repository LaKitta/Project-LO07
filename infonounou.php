<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sign Up</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

</div>
<div class="container myform" id="C">
  <form enctype="multipart/form-data" method="post" name="form1" action = './inscription.php'>
  <fieldset>
      <legend>Edit vos informations</legend>
    <input type="hidden" name="identification" value="nounous">
    <div class="Nom form_left form_l1">
        <label for="Nom">Nom:</label>
        <input type="text" id="Nom" name="Nom" placeholder="Enter Nom" style="width:200px;" required="required">
    </div>
    <div class="Prenom form_right form_l1">
        <label for="Prenom">Prenom:</label>
        <input type="text" id="Prenom" name="Prenom" placeholder="Enter Prenom" style="width:200px;" required="required">
    </div>
    <div class="Ville form_left form_l2">
        <label for="Ville">Ville:</label>
        <input type="text" id="Ville" name="Ville" placeholder="Enter Ville" style="width:200px;" required="required">
    </div>
    <div class="Age form_right form_l2">
        <label for="Age">Age:</label>
        <input type="number" id="Age" name="Age" placeholder="Enter Age" style="width:200px;" required="required">
    </div>
    <div class="Email form_left form_l3">
        <label for="Email">Email:</label>
        <input type="email" id="Email" name="Email" placeholder="Enter Email" style="width:200px;" required="required">
    </div>
    <div class="Portable form_right form_l3">
        <label for="Portable">Portable:</label>
        <input type="number" id="Portable" name="Portable" placeholder="Portable" style="width:200px;" required="required">
    </div>

    <div class="Photo form_left form_l4">
        <label for="Photo">Photo:</label>
        <input type="file" id="Photo" name="file"><br/>
    </div>

    <div class="Portable form_left form_l5">
        <label for="Login">Login:</label>
        <input type="text" id="Login" name="Login" placeholder="Login" style="width:200px;" required="required">
    </div>
    <div class="Portable form_left form_l6">
        <label for="Mdp">Mot de passe:</label>
        <input type="password" id="Mdp" name="Mdp" placeholder="Mot de passe" style="width:200px;" required="required">
    </div>
    <div class="Portable form_right form_l6">
        <label for="Mdp_r">Répeter:</label>
        <input type="password" id="Mdp_r" name="Mdp_r" placeholder="Répeter mot de passe" style="width:200px;" required="required">
    </div>

    <div class="Language form_left form_l7">
        <input type="checkbox" name="Language[]" value="Francais">Français
		<input type="checkbox" name="Language[]" value="Anglais">Anglais
		<input type="checkbox" name="Language[]" value="Allemande">Allemande
		<input type="checkbox" name="Language[]" value="Chinois">Chinois
    </div>    

    <div class="Presentation form_left form_l8">
        <label for="Presentation">Presentation:</label><br/>
        <textarea id="Presentation" name="Presentation" style="width: 570px;"></textarea>
    </div>

    <div class="Expérience form_left form_l10">
        <label for="Expérience">Expérience:</label><br/>
        <textarea id="Expérience" name="Expérience" style="width: 570px;"></textarea>
    </div>
    <div class="form_left form_l12">
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="reset" class="btn btn-danger">Reset</button>
    </div>
</fieldset>
  </form>
</div>

  <form role="form" action="./disponibilite_action.php" method="post" name="dispo" >
            <fieldset>
                <legend >Edit vos disponibilités</legend>
                <div class="form-group row">
                <label for="hd" class="col-sm-4 form-control-label">Heure de début:</label>
                <div class="col-sm-8">
                <input type="number" max="18" min="8" step="2" id="hd" name="hd" placeholder="Heure"> h
                </div></div>
                <div class="form-group row">
                <label for="hf" class="col-sm-4 form-control-label">Heure de fin:</label>
                <div class="col-sm-8">
                <input type="number" max="20" min="10" step="2" id="hf" name="hf" placeholder="Heure"> h
                </div></div>
                <div class="form-group row">
                <label for="dd" class="col-sm-4 form-control-label">Date début:</label>
                <div class="col-sm-8">
                <input type="date"  id="dd" name="dd" > 
                </div></div>
                <div class="form-group row">
                <label for="df" class="col-sm-4 form-control-label">Date fin:</label>
                <div class="col-sm-8">
                <input type="date"  id="df" name="df" > 
                </div></div>
                <label for="jour" class=" form-control-label">Vos jours:</label>
                <ol >
                    <li><input type="checkbox"  id="jour[]" name="jour[]" value="8" /> tous les jours travaillés (Lu, Ma, Me, Je, Ve)</li>
                    <li><input type="checkbox"  id="jour[]" name="jour[]" value="9" /> tous les jours (lundi, .., dimanche)</li>
                    <li><input type="checkbox"  id="jour[]" name="jour[]" value="1" /> tous les lundi</li>
                    <li><input type="checkbox"  id="jour[]" name="jour[]" value="2" /> tous les mardi</li>
                    <li><input type="checkbox"  id="jour[]" name="jour[]" value="3" /> tous les mercredi</li>
                    <li><input type="checkbox"  id="jour[]" name="jour[]" value="4" /> tous les jeudi</li>
                    <li><input type="checkbox"  id="jour[]" name="jour[]" value="5" /> tous les vendredi</li>
                    <li><input type="checkbox"  id="jour[]" name="jour[]" value="6" /> tous les samedi</li>
                    <li><input type="checkbox"  id="jour[]" name="jour[]" value="7" /> tous les dimanche</li>
                </ol>
                <div class="form-group ">
                  <button type="submit" class="btn btn-primary ">Submit</button>
                  <button type="reset" class="btn btn-danger">Reset</button>
                </div>
            </fieldset>
        </form>

</body>
</html>