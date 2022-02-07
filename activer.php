<?php
if (isset($_POST['activer'])) {
	require 'phpMailler/PHPMailerAutoload.php';
	require("connexion.php");
	require('generatePass.php');
	$emailNotFound = "select count(EmailEtud) from etudiant where EmailEtud='" . $_POST['email'] . "'";
	$res = $conex->query($emailNotFound);
	$dFound = $res->fetch_row();
	if ($dFound[0] != 0) {
		$var = "select * from etudiant where EmailEtud='" . $_POST['email'] . "' and statutCmp='false'";
		$result = $conex->query($var);
		if ($result->num_rows > 0) {
			$data = $result->fetch_row();
			$pass = randomPassword();
			$mail = new PHPMailer;
			$mail->isSMTP();
			$mail->Host = 'smtp.gmail.com';
			$mail->Port = 587;
			$mail->SMTPAuth = true;
			$mail->SMTPSecure = 'tls';
			$mail->Username = 'abdoettounani2001@gmail.com';
			$mail->Password = 'tounani2001.';
			$mail->setFrom('abdoettounani2001@gmail.com', 'GUICHET D\'ENSET ');

			$mail->addAddress('' . $_POST['email'] . '');
			$mail->addReplyTo('abdoettounani2001@gmail.com');
			$mail->isHTML(true);
			$mail->Subject = 'Activation de compte';
			$mail->Body = '<p >Bonjour ' . $data[2] . ',<br> Votre compte a été activer voila votre Mot de passe  :<span style="color:green;font-weight:bold"> ' . $pass . ' </span> <br>Cordiales salutations.</p> <br><br><br><br><hr><hr>GROUPE de la GUICHET D\'ENSET <hr><hr>'; //ajouter link apres ebergement
			if (!$mail->send()) {
				echo "L'operation est non effectue veuillez ressayer !";
			} else {
				$tr = true;
				$NewPass = "UPDATE etudiant SET PassEtud ='" . $pass . "' ,statutCmp='" . $tr . "' WHERE IDETUD ='" . $data[0] . "' ";
				$conex->query($NewPass);
				header("Location:identifier.php?sent=2");
			}
		} else {
			//deja activer 
			header("Location:identifier.php?deja=1");
		}
	} else {
		//consulter votre administration
		header("Location:identifier.php?notFound=1");
	}
}
?>


<!DOCTYPE html>
<html lang="fr">

<head>
	<title>Guichet ENSET</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php include("components/injectcss.html") ?>
</head>

<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" method="POST" action="">
					<img src="Dashboard\student\assets\images\logo.png" alt="IMG">
					<span class="login100-form-title">
						Activer le compte
					</span>
					<div class="wrap-input100 validate-input" data-validate="Obligatoire">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="activer">
							ACTIVER
						</button>
					</div>
					<div class="text-center p-t-136">
						<a class="txt2 fs-20" href="identifier.php">
							Retour à l'authentification
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	<?php include("components/injectjs.html") ?>
</body>

</html>