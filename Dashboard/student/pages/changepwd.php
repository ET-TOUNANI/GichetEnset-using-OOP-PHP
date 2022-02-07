
<?php
        session_name("etudiant");
        session_start();
            if(isset($_SESSION['email']) and isset($_SESSION['idEt'])){
                $cas1=0;
                require('../../../connexion.php');
                if(isset($_POST['confirmer'])){
            $cas1=0;
                if(strcmp($_POST['pass2'],$_POST['pass3'] ) !== 0  || empty($_POST['pass2'])){
                    $cas1=1;
                }else{


                    $query="select * from etudiant where IDETUD='".$_SESSION['idEt']."' and PassEtud='".$_POST['pass1']."'";
                    $res1=$conex->query($query);
                    if ($res1->num_rows>0) {
                       
                        $query1="update etudiant set PassEtud='".$_POST['pass3']."' where IDETUD='".$_SESSION['idEt']."' ";
                        $res2=$conex->query($query1);
                     
                        $cas1=2;
                    }else{


                    
                        $cas1=3;

                    }

                }
                
                
            }







               
                $r="select * from etudiant where IDETUD='".$_SESSION['idEt']."'";
                $res=$conex->query($r);
                if ($res->num_rows>0) {
                $data=$res->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Changer le mot de passe</title>
    <?php include("../partials/_headercomponents.html") ?>

</head>

<body>
<form  method="POST" action="">
    <div class="container-scroller">
        <!-- partial:../partials/_sidebar.html -->
        <?php include("../partials/_sidebar.php") ?>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:../partials/_navbar.html -->
            <?php include("../partials/_navbar.php") ?>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <h1 class="title mb-4 text-center">Changer mon mot de passe</h1>
                    </div>
                    
                    <div class="col-12 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <form class="form-sample">
                                    <div class="row">
                                    
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Email</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="mail" class="form-control fixed" value="" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Ancien mot de passe</label>
                                                <div class="col-sm-9">
                                                    <input type="password" name="pass1"
                                                     class="form-control" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Nouveau mot de passe</label>
                                                <div class="col-sm-9">
                                                    <input type="password" name="pass2" class="form-control" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Confirmer le mot de passe</label>
                                                <div class="col-sm-9">
                                                    <input type="password" name="pass3" class="form-control" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row d-flex justify-content-center">
                                        <div class="col-md-2">
                                            <button type="submit"  name="confirmer" class="btn btn-primary me-2"  >Confirmer</button>
                                        </div>
                                    </div>
                                    <div class="row">
                     
                                <?php if ($cas1==1){
                echo '<div class="alert" style="background-color: red; width:320px;">
							<span class="closebtn" onclick="this.parentElement.style.display=`none`;">&times;</span> 
							Votre zone de mot de passe est vide  
						  </div>';}
                          if ($cas1==2){
                            echo '<div class="alert" style="background-color: green; width:320px;">
                                        <span class="closebtn" onclick="this.parentElement.style.display=`none`;">&times;</span> 
                                        Votre mot de passé est changé avec succès!
                                      </div>';}
                                      
                                      if ($cas1==3){
                                        echo '<div class="alert" style="background-color: red; width:320px;">
                                                    <span class="closebtn" onclick="this.parentElement.style.display=`none`;">&times;</span> 
                                                    Ancien mot de pass incorrect! Réessayez.
                                                  </div>';}
                                                  
                                      
                                      ?>
                           
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- content-wrapper ends -->
                <!-- partial:../partials/_footer.html -->
                <?php include("../partials/_footer.html") ?>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    </form>
    <?php include("../partials/_injectedjs.html") ?>










</body>

</html>
<?php 
        
        }
    }
    else{
            header("location:../../../identifier.php");
        }
    

?>