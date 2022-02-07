<?php
session_name("admin");
session_start();
if (isset($_SESSION['admin'])) {
  require('../../../connexion.php');
  $cas1=0;
  if(isset($_POST['Accepter'])){

                    $query="update rdv set STATUS=1  where IDRDV='".$_GET['id']."' ";
                    $res1=$conex->query($query);
                    $cas1=1;

  }
  if(isset($_POST['Rejeter'])){

    $query="update rdv set STATUS=2  where IDRDV='".$_GET['id']."' ";
    $res1=$conex->query($query);
    $cas1=2;

}




  ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Déposer un document</title>
    <?php include("../partials/_headercomponents.html");
    require('../data/function.php');
    ?>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:../partials/_sidebar.html -->
      <?php include("../partials/_sidebar.php")?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../partials/_navbar.html -->
        <?php include("../partials/_navbar.php")?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <h1 class="title mb-4 text-center">Détails de la demande</h1>
            </div>
            <?php if ($cas1==1){
                echo '<div class="alert" style="background-color: green; width:320px;">
							<span class="closebtn" onclick="this.parentElement.style.display=`none`;">&times;</span> 
              Confirmation avec succès! 
						  </div>';}
                          if ($cas1==2){
                            echo '<div class="alert" style="background-color: green; width:320px;">
                                        <span class="closebtn" onclick="this.parentElement.style.display=`none`;">&times;</span> 
                                        Rejet avec succès!
                                      </div>';}
                                      
                                    
                                                  
                                      
                                      ?>
            <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <form class="form-sample" action="" method="post" enctype="multipart/form-data" >
                      <?php include("../partials/_infosRDV.php")?>
                      <div class="row mt-4">
                      <div class="col-md-12 ">
                        <button type="submit" name="Accepter" class="btn btn-primary me-2">Confirmer</button>
                        <button type="submit" name="Rejeter" class="btn btn-danger me-2">Rejeter</button>
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
          <?php include("../partials/_footer.html")?>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    
   <?php include("../partials/_injectedjs.html")?>
   <script src="../assets/js/file-upload.js">
  </script>
  </body>
</html>
<?php
} else {
  header("location:../../../identifier.php");
}
?>