<?php
session_name("etudiant");
session_start();
require('../data/function.php');
if (!testSession()) {
    header("location:../../../identifier.php");
}
if (isset($_POST["submit"])) {
    $idEtu=$_SESSION['idEt'];
    $typeDoc=$_POST['libelle'];
    $date = date('Y-m-d', time());
    $taille=$_FILES['fileToUpload']['size'];
    $target_dir = "../data/uploads/";
    $target_file = $target_dir . basename($_SESSION['idEt'] . "-" . $_POST['libelle'].".".explode('.', $_FILES['fileToUpload']['name'])[1]);
    $uploadOk = 1;
    $docType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    if ($_FILES["fileToUpload"]["size"] > 500000) {
        $msg="Votre fichier est trop large";
        $uploadOk = 0;
    }
    if (
        $docType != "pdf" && $docType != "png" && $docType != "jpeg"
        && $docType != "jpg"
    ) {
        $msg = "Fichier doit être au format .pdf, .jpg ou .png";
        $uploadOk = 0;
    }
    if ($uploadOk != 0) {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            $sql="INSERT INTO documentdepose VALUES (NULL,\"$idEtu\",\"$date\",\"$typeDoc\",1,$taille,\"$target_file\")";
            include(getConnFile());
            mysqli_query($conex,$sql);
            $msg = "Votre fichier est envoyé.";
        } else {
            $msg = "Une erreur est survenue lors de l'envoi! Veuillez réessayer!";
        }
    }

    $_SESSION['upMsg']=$msg;
    header("location:deposer.php");
}
