<?php 
require_once 'WBcharte.php';

//Entête (Head) 
echo WBcharte::html_head('AdopteUneNounou');

//Barre de Naviguation
echo WBcharte::html_topnav();
?>


<link href='css/profilenounou.css' rel='stylesheet'>

<body>
<section>
  <header class="site-header col-lg-12" style="margin-top: 25px;"></header>
  <div class="cover-photo" style="background-image: url('img/accueil.png');"></div>
    <div class="container">
      <div class="row">
          <div class="col-lg-2 user-info left-col body">
            <div class="profile-avatar">
               <div class="inner" style='background-image: url(http://placekitten.com/220/220);'></div>
            </div>
            <h1>Willabelle Ong</h1>
            <h2>Enthusiast</h2>
            <div class="meta">
              <p><i class="fa fa-fw fa-map-marker"></i> Australia</p>
              <p><i class="fa fa-fw fa-link"></i> paledivision.com</p>
              <p><i class="fa fa-fw fa-clock-o"></i> Joined Dec 26, 2008</p>
            </div>
          </div>
          <div class="col-lg-8">
            <nav class="profile-nav">
             <ul>
              <li class="active">Activity</li>
              <li>Looks</li>
              <li>Hyped</li>
              <li>Loved</li>
              <li>Collections</li>
             </ul>
            </nav>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <h1><strong>Choisissez votre disponibilité !</strong></h1>
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