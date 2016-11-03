<?php
/**
 * Created by IntelliJ IDEA.
 * User: pollen
 * Date: 28/10/2016
 * Time: 11:18
 */
$login = "eric";
$pwd = "eric";

if( isset($_POST['name'] ) && $_POST['pwd'] ) {
	if
	($login == $_POST['name']
		&& $pwd == $_POST['pwd']
	) {
		echo 'Bienvenue';
	} else {
		echo 'Mauvais enregistrement.';
	}
} else
{
		echo 'Pas de données soumises.';
}


?>
