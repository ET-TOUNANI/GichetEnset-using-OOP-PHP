<?php

/****************pour l admin */
	define("ADMIN",     "admin@gmail.com");
	define("PASSADMIN",     "adminadmin");
/*for sign out destroy session*/
	if(isset($_POST['bye'])){ 
			session_name('etudiant');
			session_start();
			session_destroy();
	}
	if(isset($_POST['bye'])){ 
		session_name('admin');
		session_start();
		session_destroy();
}
/**************** */
	if(isset($_POST['connecter'])){
		require("connexion.php");
		$var= "select * from etudiant where EmailEtud='".$_POST['email']."' and PassEtud='".$_POST['pass']."'";
		$result=$conex->query($var);
		if ($result->num_rows>0) 
		{
			$data=$result->fetch_row();
			session_name("etudiant");
			session_start();
				  $_SESSION['email']=$data[5];
				  $_SESSION['idEt']=$data[0];
			header("Location:Dashboard/student/index.php");  
		}else{
			
			if($_POST['email']==ADMIN && $_POST['pass']==PASSADMIN){
				
				session_name("admin");
				session_start();
				$_SESSION['admin']="admin";
				header("Location:Dashboard/admin/index.php");  
			}else{
				//mot de passe incorrect 
				header("Location:identifier.php?echec=1"); 
			}
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
				
				<form class="login100-form validate-form" method="POST" action="">
				<img src="Dashboard\student\assets\images\logo.png" alt="IMG">
					<span class="login100-form-title">
						Authentification
					</span>
					<div class="wrap-input100 validate-input" data-validate = "Obligatoire">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Obligatoire">
						<input class="input100" type="password" name="pass" placeholder="Mot de passe">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="connecter">
							SE CONNECTER
						</button>
					</div>

					<div class="text-center p-t-12">
						<a class="txt1" href="forgotPassword.php">
							Mot de passe oublié ?
						</a>
					</div>
					<?php
						if(isset($_GET['echec'])){
							echo '<div class="alert">
							<span class="closebtn" onclick="this.parentElement.style.display=`none`;">&times;</span> 
							<strong>incorrect !</strong> Veuillez réessayer!
						  </div>';
						}else{
							echo '';
						}
					?>
					<?php
						if(isset($_GET['deja'])){
							echo '<div class="alert">
							<span class="closebtn" onclick="this.parentElement.style.display=`none`;">&times;</span> 
							Votre compte est déja activé! 
						  </div>';
						}else{
							echo '';
						}
					?>
					<?php
						if(isset($_GET['sent'])){
							echo '<div class="alert" style="background-color: blue;width:390px;">
							<span class="closebtn" onclick="this.parentElement.style.display=`none`;">&times;</span> 
							Mot de passe envoyer Chiquer <strong>votre Email</strong>
						  </div>';
						}else{
							echo '';
						}
					?>
					<?php
						if(isset($_GET['notFound'])){
							echo '<div class="alert" style="background-color: red;width:390px;">
							<span class="closebtn" onclick="this.parentElement.style.display=`none`;">&times;</span> 
							Erreur ! <strong>consulter votre Administration</strong>
						  </div>';
						}else{
							echo '';
						}
					?>
					<div class="text-center p-t-80">
						<a class="txt2 fs-24" href="activer.php">
							Activer votre compte.
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