<?php
	if(isset($_POST['activer'])){
		require 'phpMailler/PHPMailerAutoload.php';
		require("connexion.php");
		$var= "select * from etudiant where EmailEtud='".$_POST['email']."' ";
		$result=$conex->query($var);
		if ($result->num_rows>0) 
		{
			$data=$result->fetch_row();
			// var_dump($data);
				  $mail= new PHPMailer;
				  $mail->isSMTP();
				  $mail->Host='smtp.gmail.com';
				  $mail->Port=587;
				  $mail->SMTPAuth=true;
				  $mail->SMTPSecure='tls';
				  $mail->Username='abdoettounani2001@gmail.com';
				  $mail->Password='tounani2001.';	
				  $mail->setFrom('abdoettounani2001@gmail.com','GUICHET D\'ENSET ');

				  $mail->addAddress(''.$_POST['email'].'');
				  $mail->addReplyTo('abdoettounani2001@gmail.com');
				  $mail->isHTML(true);
				  $mail->Subject='Mot de passe ';
				  $mail->Body='<p >Bonjour '.$data[2].',<br> votre Mot de passe est :<span style="color:green;font-weight:bold"> '.$data[6].' </span> <br>Cordiales salutations.</p> <br><br><br><br><hr><hr>GROUPE de la GUICHET D\'ENSET <hr><hr>';//ajouter link apres ebergement
				  if(!$mail->send()){
					  echo "L'operation est non effectue veuillez ressayer !";
				  }
				  else{
					  /******* regerder votre gmail*/
				  	header("Location:identifier.php?sent=2");  
				  }
				  
		}else{

			//deja activer 
			header("Location:identifier.php?echec=1");  
		}
	}
?>


<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Guichet ENSET</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php include("components/injectcss.html")?>
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" method="POST" action="" >
					<span class="login100-form-title">
					réinitialisation de votre mot de passe
					</span>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="activer">
							envoyer
						</button>
					</div>
					<div class="text-center p-t-136">
						<a class="txt2 fs-20" href="identifier.php">
							Retour à votre identification 
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<?php include("components/injectjs.html")?>

</body>
</html>