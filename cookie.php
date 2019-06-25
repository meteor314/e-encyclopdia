<?php
require('php/connect.php'); // connexion à notre base de donnée
if(empty($_SESSION['id']) AND !empty($_COOKIE['email']) AND !empty($_COOKIE['pwd'])) {

	$option = [
		'cost' => 11,
	];
	$pwd = password_hash(($_COOKIE['pwd']), PASSWORD_BCRYPT, $option);

	$request = $db->prepare("SELECT * FROM member WHERE email = ? ");
	$request->execute(array($_COOKIE['email']) ) ;

	//echo $pwd . "<br />" ;
	$userexist = $request->rowCount();
	if($userexist == 1)   { 
        $userinfo = $request->fetch();
    	//echo $userinfo['pwd'];
	    $_SESSION['id'] = $userinfo['id'];
	    if(password_verify($pwd, $userinfo['pwd'])) { // si le mot de passe sur le cookie est identique à celui de notre base de donnée
	    	header('Location:profil.php?id=' . $userinfo['id']);

	    }
	    	
	    }
}

?>
