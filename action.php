<?php

const GOODLOGIN = "GentilLutin";
const GOODPASSWORD = "Kangourou";

function displayConnexionFail()
{
	echo('Connexion fail.');
}

function checkConnexion()
{
	sleep(1);
	$connexion = false;
	if (isset($_POST['login']) && isset($_POST['password']))
	{
		if (($_POST['login'] == GOODLOGIN) && ($_POST['password'] == GOODPASSWORD))
			$connexion = true;
	}

	return ($connexion);
}

$connexionOK = checkConnexion();
if ($connexionOK)
{
	?>
	Inspecteur Gadget (Inspector Gadget) est une série télévisée d'animation en 86 épisodes de 22 minutes créée en 1983 par Bruno Bianchi, Andy Heyward (en) et Jean Chalopin.

Coproduction américano-franco-nippo-canadienne, c'est Andy Heyward qui a proposé le premier l'idée d'un inspecteur muni de gadgets, Bruno Bianchi a dessiné le personnage de Gadget et Jean Chalopin a produit la série, grâce à sa société DIC Entertainment.

Aux États-Unis, la série a sa première mondiale le 4 décembre 1982 sur les cinq stations de Field Communications: WFLD-TV 32 Chicago, WKBS-TV 48 Philadelphie, KBHK-TV 44 San Francisco, WLVI-TV 56 Boston et WKBD-TV 50 Detroit. Le pilote a diffusé ce jour-là et, en septembre 1983, la première saison des 65 épisodes a commencé à être diffusée. Le dernier de cette saison était une version du pilote avec certains des dialogues modifiés pour refléter la moustache de Gadget.

En France, la saison 1 a été diffusée en France en épisodes de 5 minutes du lundi au samedi à 19h50 du 22 octobre 19831 au 12 octobre 19842, puis en épisodes de 26 minutes chaque dimanche du 1er juillet 19843 dans l'émission FR3 Jeunesse sur FR3. Redifusion du 12 janvier 19864 au 23 janvier 19875. Diffusion de la saison 2 à partir de 19876 sur FR3. Rediffusion en 1991 dans le Club Dorothée sur TF1 puis en 1996 sur Canal J, depuis 2007 sur Gulli, depuis le 12 mai 2008 sur France 3, depuis octobre 2008 sur Mangas et sur France 5 dans l'émission Ludo en 2010. Au Québec, la série a été diffusée à partir du 1er avril 1984 sur Premier Choix-TVEC / Super Écran, puis en clair à partir du 1er septembre 1988 sur Canal Famille, et rediffusé en septembre 2008 sur Télétoon Rétro.

Le 11 juin 2013, Télétoon Canada annonce la production de 26 nouveaux épisodes de 11 minutes en images de synthèse prévue pour 20157. Ce sont finalement 52 épisodes qui sont réalisés et diffusés sur France 3 à partir de la rentrée 20158 en France
	<?php
}
else
{
	displayConnexionFail();
}
