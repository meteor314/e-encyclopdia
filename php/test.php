<?php
require '../email/class.phpmailer.php';
require '../email/class.smtp.php';
$mail = new PHPMailer;
$mail->setFrom('shawonshoot@gmail.com');
$mail->AddEmbeddedImage('m.jpg', 'logo_2u');
$txt = '
	<div style=" background:#cccc;" align="center"> <br />
	
		<div  style="font-family : freemono; width: 350px; background-color: white; padding: 5px; ;">
			<h1  style="color: white; background: #242943; width: 100%; text-align: center; height: 120px;"> Merci de votre inscription sur notre site.</h1> <br /> 
			<img src="cid:logo_2u" alt="Le logo du site e-encyclopedia" width="180px">
			<hr />
			<br />
			<br />
			Il ne reste plus qu\'un dernier pas avant de pouvoir acceder a votre compte. <br /> 
			Alors sans plus attendre voici le lien qui vous permettera d\'activer votre compte. <br /><br /><br /><br />
			<a href="https://www.google.com/" style="color: white; background-color: #337ab7; width: 400px; padding: 15px; text-decoration: none;"> Cliquez-ici pour se connecter.</a> <br /> <br /> <br /> <br/>

			<b> Une fois inscrit(e)? </b> <br /> <br />
			Vous pouvez acceder a votre page de profil, interagir avec les autres membres, poster des articles et des commentaires. N\'hesitez pas a faire un petit tour sur votre page de profil pour personnaliser votre avatar, pseudo, de theme etc... 
			<br />
			<br />
			<br />
			Toute l\'equipe vous souhaite la bienvenue. Nous esperons vous voir tres vite.  <br/> <b> <i>
			Cordialemnet Administrateur. </b> </i>
			  <br /> <br /> <br /> 
			<p style="color: white; background: #242943; width: 100%; text-align: center; height: 110px;">  
			<i> Pour toutes questions n\'hesitez pas a nous contacter, sur ce mail  <b>shawonshoot@gmail.com.</b> Nous sommes a votre ecoute. </i>
		</div>  <br />
   
    </div>
	
	';
//$mail->addAddress('matheo.delenin@gmail.com');
$mail->addAddress("sakir112000@hotmail.com");
$mail->Subject = 'e-encylopedia - confirmation de votre compte.';
$mail->Body = $txt;

$mail->isHTML(true);
$mail->IsSMTP();
$mail->SMTPSecure = 'ssl';
$mail->Host = 'ssl://smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Port = 465;
//existing gmail address as user name
$mail->Username = 'shawonshoot@gmail.com';

//Set the password of your gmail address here
$mail->Password = '#@25802580';
if(!$mail->send()) {
  echo 'Email is not sent.';
  echo 'Email error: ' . $mail->ErrorInfo;
} else {
  echo 'Email has been sent.';
}
?>

<script type="text/javascript">
	//setInterval(location.reload(), 1000);
</script>