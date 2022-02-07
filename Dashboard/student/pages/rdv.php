<?php
session_name("etudiant");
session_start();
if (isset($_SESSION['email']) and isset($_SESSION['idEt'])) {

?>



    <!DOCTYPE html>
    <html lang="fr">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Réserver un rendez-vous</title>
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
                            <h1 class="title mb-4 text-center">Choisir une date & un horraire</h1>
                        </div>
                        <?php include("../partials/_calendar.php") ?>
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
    </body>

    </html>
<?php


} else {
    header("location:../../../identifier.php");
}
?>