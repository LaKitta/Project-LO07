<?php 
require_once 'WBcharte.php';

//Entête (Head) 
echo WBcharte::html_head('AdopteUneNounou');

//Barre de Naviguation
echo WBcharte::html_topnav();
?>



<!-- Page d'accueil -->

<body>
  <section class="fancy-monk" style="background-image: url('img/accueil.png');">
      <div class="container">
        <div class="row"  style="margin-top: 50px;">
          <div class="col-lg-8 col-lg-push-2  titre"><h1><strong>Bienvenue sur<br> Adopte-une-nounou !</strong></h1></div>
        </div>
        <br><br><br>

        <!-- Form Connection -->
        <div class="row">
          <div class="col-lg-8 col-lg-push-2 ">
            <form class="form-horizontal" id="form" name="form" method="post" action="./login.php">
              <fieldset>
                <div class="titreform">
                  <p>Entrez vos identifiants : <hr/></p>
                </div>

<!-- E-mail -->
                <div class="form-group debutform">
                  <label class="col-md-4 control-label" for="email"></label>
                  <div class="col-md-4">
                    <div class="input-group">
                      <span class="input-group-addon">@</span>
                      <input id="email" name="email" class="form-control" placeholder="email" type="text" required="">
                    </div>
                  </div>
                </div>


<!-- Mot de passe -->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="password"></label>
                  <div class="col-md-4">
                    <input id="password" name="password" type="password" placeholder="mot de passe" class="form-control input-md" required="">
                  </div>
                </div>


<!-- Valider -->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="submit"></label>
                  <div class="col-md-4">
                    <button id="submit" name="submit" class="btn btn-success" value="Sign in">Connection</button>
                  </div>
                </div>
                <input type="reset" class="btn btn-info">

              </fieldset>
            </form>
          </div>  
        </div>
        <div class="row" style="margin-top: 20px;">
          <div class="col-md-4 col-lg-push-4">
            <h2 class="titreform">Vous n'avez pas de compte ?</h2>
               <form>
                 <input type="button" class="btn btn-warning" value="Créer un compte" onclick="window.location.href='./registerfront.php'">
               </form>    
          </div>
        </div>

<!-- Fin Form Connection -->  


    </div>       
  </section>
</body>


<?php 
//Pied de page (foot)
echo WBcharte::html_foot(); 
?>



</html>