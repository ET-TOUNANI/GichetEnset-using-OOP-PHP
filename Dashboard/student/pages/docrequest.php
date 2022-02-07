<?php
session_name("etudiant");
session_start();
require('../data/function.php');
if (!testSession()) {
    header("location:../../../identifier.php");
}
if(isset($_POST['submit'])){
    $date = date('Y-m-d', time());
    $idEtu=$_SESSION['idEt'];
    $typeDoc=$_POST['typeDoc'];
    include(getConnFile());
    mysqli_query($conex,"INSERT INTO documentextrait VALUES (NULL,\"$idEtu\",$typeDoc,\"$date\",1)");
    header("location:extraire.php?success=0");
}else{
    header("location:extraire.php");
}




