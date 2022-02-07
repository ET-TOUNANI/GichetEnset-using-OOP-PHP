<?php
session_name("etudiant");
session_start();
if (isset($_SESSION['email']) and isset($_SESSION['idEt'])) {

$cas1=0;

if(isset($_POST['submit'])){
    $cas1=1;
}


?>
    <!DOCTYPE html>
    <html lang="fr">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Déposer un document</title>
        <?php include("../partials/_headercomponents.html") ?>
    </head>

    <body>
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
                            <h1 class="title mb-4 text-center">Contactez-nous</h1>
                        </div>
                        <?php if ($cas1==1){
                echo '<div class="alert" style="background-color: green; width:320px;">
							<span class="closebtn" onclick="this.parentElement.style.display=`none`;">&times;</span> 
                            Bien envoyé ! 
						  </div>';}
                          
                                    
                                                  
                                      
                                      ?>
                        <div class="row">
                            <div class="col-12 grid-margin">
                                <div class="card">
                                    <div class="card-body">
                                        <form class="form-sample" id="sendemail" action="" method="post" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">Email</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" readonly value="<?= $_SESSION['email'] ?>" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">Sujet</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control"  required/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 ">
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">Votre message</label>
                                                        <div class="col-sm-9">
                                                            <textarea class="form-control h-100" form="sendemail" rows="3"  required/></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-4">
                                                <div class="col-md-12 ">
                                                    <button type="submit" name="submit" class="btn btn-primary me-2">Envoyer</button>
                                                    <a href="../index.php" class="btn btn-dark">Annuler</a>
                                                </div>
                                            </div>
                                        </form>
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

        <?php include("../partials/_injectedjs.html") ?>
        <script src="../assets/js/file-upload.js">
        </script>
    </body>

    </html>
<?php
} else {
    header("location:../../../identifier.php");
}
?>