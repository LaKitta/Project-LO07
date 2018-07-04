<?php

class WBcharte {
	static function html_head($titre) {
		$resultat = "<!DOCTYPE html>\n";
		$resultat .= "<html>\n";
		$resultat .= "<head>\n";
		$resultat .= "<title>$titre</title>\n";
		$resultat .= "<meta charset='UTF-8'>\n";
		$resultat .= "<meta name='viewport' content='width=device-width, initial-scale=1.0'>\n";
		$resultat .= "<link href='css/footer.css' rel='stylesheet'>\n";
		$resultat .= "<link href='css/topnav.css' rel='stylesheet'>\n";
		$resultat .= "<link href='css/formulaire.css' rel='stylesheet'>\n";
		$resultat .= "<link href='css/accueil.css' rel='stylesheet'>\n";
		$resultat .= "<link href='https://fonts.googleapis.com/icon?family=Material+Icons' rel='stylesheet'>\n";
		$resultat .= "<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>\n";
		$resultat .= "<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>\n";
		$resultat .= "</head>\n";
		return $resultat;
	}

        

	static function html_topnav() {
		$resultat = "<div class='topnav'>\n";
		$resultat .= "<ul>\n";
		$resultat .= "<li><a href='infoservice.php' title=''>Infos Services</a></li>\n";
		$resultat .= "<li><a href='adopteunenounou.php' title=''>Administrateur</a></li>\n";
		$resultat .= "<div>\n";
		$resultat .= "<a href='adopteunenounou.php'>\n";
		$resultat .= "<span class='span-logo'>\n";
		$resultat .= "<img src='img/LogoAdopteUneNounou.png'>\n";
		$resultat .= "</span>\n";
		$resultat .= "</a>\n";
		$resultat .= "</div>\n";
		$resultat .= "</ul>\n";
		$resultat .= "</div>\n";			        
		return $resultat;
	}

	static function html_foot () {
		$resultat = "<section id='footer'>\n";
		$resultat .= "<div class='container'>\n";
		$resultat .= "<div class='row text-center text-xs-center text-sm-left text-md-left'>\n";
		$resultat .= "<div class='col-xs-12 col-sm-4 col-md-4'>\n";
		$resultat .= "<h5>Nicoux Simon</h5>\n";
		$resultat .= "</div>\n";
		$resultat .= "<div class='col-xs-12 col-sm-4 col-md-4'>\n";
		$resultat .= "<h5>Nous contacter</h5>\n";
		$resultat .= "</div>\n";
		$resultat .= "<div class='col-xs-12 col-sm-4 col-md-4'>\n";
		$resultat .= "<h5>Xu Gang</h5>\n";
		$resultat .= "</div>\n";
		$resultat .= "</div>\n";
		$resultat .= "<div class='row'>\n";
		$resultat .= "<div class='col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5'>\n";
		$resultat .= "<ul class='list-unstyled list-inline social text-center'>\n";
		$resultat .= "<li class='list-inline-item'><a href='javascript:void();'><i class='fa fa-facebook'></i></a></li>\n";
		$resultat .= "<li class='list-inline-item'><a href='javascript:void();'><i class='fa fa-twitter'></i></a></li>\n";
		$resultat .= "<li class='list-inline-item'><a href='javascript:void();'><i class='fa fa-instagram'></i></a></li>\n";
		$resultat .= "<li class='list-inline-item'><a href='javascript:void();'><i class='fa fa-google-plus'></i></a></li>\n";
		$resultat .= "<li class='list-inline-item'><a href='javascript:void();' target='_blank'><i class='fa fa-envelope'></i></a></li>\n";
		$resultat .= "</ul>\n";
		$resultat .= "</div>\n";
		$resultat .= "</hr>\n";
		$resultat .= "</div>\n";
  		$resultat .= "<div class='row'>\n";
		$resultat .= "<hr/>\n";
		$resultat .= "<div class='col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white'>\n";
		$resultat .= "<p>Création du site Adopte-Une-Nounou dans le cadre d'un projet étudiant <br>-->\n";
		$resultat .= "UV LO07 de l'Université de Technologie de Troyes.</p>\n";
		$resultat .= "</div>\n";
		$resultat .= "<hr/>\n";
		$resultat .= "<br><hr/>\n";
		$resultat .= "</div>\n";
		$resultat .= "</div>\n";
		$resultat .= "</section>\n";
		return $resultat;

	}
	
}