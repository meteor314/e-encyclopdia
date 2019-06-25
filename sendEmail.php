<?php
/*session_start();
require('php/connect.php');






            require 'email/class.phpmailer.php';
			require 'email/class.smtp.php';
			$mail = new PHPMailer;

			$mail->CharSet = 'UTF-8';

			$sql="SELECT email FROM member";

			foreach ($db->query($sql) as $row) {
				$mail->AddAddress($row['email']);
			  print_r($row['email']);
			}

			//$mail->setFrom($row['email']);
			$mail->AddEmbeddedImage('logo.png', 'logo_2u');
			$txt = '
				<div style=" background:#eee;" align="center"> <br />
				
					<div  style="font-family : freemono; width: 350px; background-color: white; padding: 5px; ;">
						<h1  style="color: white; background: #242943; width: 100%; text-align: center; height: 120px;"> Mise en ligne de notre site web.</h1> <br /> 
						<img src="cid:logo_2u" alt="Le logo du site e-encyclopedia" width="180px">
						<hr />
					
						Nous venons de mettre en ligne notre site web. <a href="https://e-encyclopedia.000webhostapp.com/"> visitez le site web </a>. <br/> <br />
						Cependant certains bugs persistent et nous sommes en train de  déployer une mise à jour pour corriger le dysfonctionnement. Mais en attendant tous les membres inscrits sur notre site c\'est-à-dire vous, et vous pouvez désormais visiter notre site web. 
						<br /> <br />
						Nous vous annoçons également que nous avons mis à jour notre politique de confidentialité. <br /> 
						Dans le cadre de son activité et pour les besoins de la fourniture des Services, e-encyclopedia est amenée à collecter et traiter les données à caractère personnel de ses utilisateurs.

						La présente politique de confidentialité, mise en place par ce site, a vocation à fournir aux Utilisateurs une information synthétique et globale sur les traitements de données à caractère personnel opérés par SendinBlue.

						e-encyclopedia accorde une importance particulière au respect de la vie privée des Utilisateurs et de la confidentialité de leurs données personnelles, et s’engage ainsi à traiter les données dans le respect des lois et règlementations applicables, et notamment la Loi n° 78-17 du 6 janvier 1978 relative à l’informatique, aux fichiers et aux libertés (ci-après la “Loi Informatique et Liberté”), et le Règlement (UE) 2016/679 du Parlement européen et du Conseil du 27 avril 2016 relatif à la protection des personnes physiques à l\’égard du traitement des données à caractère personnel et à la libre circulation de ces données (ci-après le “RGPD”). Pour plus d\'information <a href="https://e-encyclopedia.000webhostapp.com/assets/cgu.html" > cliquez-ici </a>

						<br /> <br /> Enfin si vous êtes un développeur n\'hésitez pas à nous aider le code source est disponible sur notre compte github <a href="https://github.com/m-meteor/project/""> Cliquez-ici </a>
												  <br /> <br /> 

						Toute l\'equipe vous souhaite la bienvenue. Nous esperons vous revoir tres vite.  <br/> 
						<b> <i>	Cordialement Administrateur. </b> </i>
						<p style="color: white; background: #242943; width: 100%; text-align: center; height: 110px;">  
						<i> Pour toutes questions n\'hesitez pas a nous contacter, sur ce mail  <b>shawonshoot@gmail.com.</b> Nous sommes a votre ecoute. </i>
					</div>  <br />
			   
			    </div>
				
				';
			//

			$mail->Subject = 'e-encylopedia | Mis en ligne de notre site web';
			$mail->Body = $txt;

			$mail->isHTML(true);
			$mail->IsSMTP();
			$mail->SMTPSecure = 'ssl';
			$mail->Host = 'ssl://smtp.gmail.com';
			$mail->SMTPAuth = true;
			$mail->Port = 465;
			//existing gmail address as user name
			$mail->Username = 'shawonshoot@gmail.com';

			//Set the password of  gmail address here
			$mail->Password = '#@25802580';

			if(!$mail->send()) {
			  	$error =  'Email is not sent.  PLease try again! <br />';
			  	$error =  'Email error: ' . $mail->ErrorInfo;
		      	//$error = $db->prepare("DELETE FROM member WHERE email = ?" );
		      	//$error->execute(array($email) );
			} else {
			  $error =  'Email has been sent. ';    
	           // $updateText = $db->prepare("UPDATE member SET token = 3 WHERE email = ?");
	            //$updateText->execute(array($email) );
			}


/* send email */