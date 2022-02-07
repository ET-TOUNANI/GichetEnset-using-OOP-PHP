<?php
        session_name("etudiant");
        session_start();
            if(isset($_SESSION['email']) and isset($_SESSION['idEt'])){
               
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Déposer un document</title>
    <?php include("../partials/_headercomponents.html")?>
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
              <h1 class="title mb-4 text-center">Déposer un document</h1>
            </div>
            <?php if (isset($_SESSION['upMsg'])){
                echo '<div class="row"> 
                        <div class="alert" style="background-color: gray;">
							          <span class="closebtn" onclick="this.parentElement.style.display=`none`;">&times; </span> 
						              	'.$_SESSION['upMsg'].'
						            </div></div>';
                        unset($_SESSION['upMsg']);
                  }?>
            <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <form class="form-sample" action="upload.php" method="post" enctype="multipart/form-data" >
                      <?php include("../partials/_infos.php")?>
                      <div class="row">
                        <div class="col-md-12">
                        <p class="card-description"> Document à déposer</p>
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Type du document </label>
                            <div class="col-md-12 col-sm-9">
                              <select class="form-control" name="libelle">
                                <option value="Relevés des notes">Relevés des notes</option>
                                <option value="Dossier médical">Dossier médical</option>
                                <option value="Justificatif d'abscence">Justificatif d'abscence</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Télécharger </label>
                            <div class="col-md-12 col-sm-9">
                              <input type="file" name="doc" class="file-upload-default">
                              <div class="input-group col-xs-12">
                                <input type="file" class="form-control file-upload-info" placeholder="Télecharger mon document" name="fileToUpload">
                              </div>
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
    }
    else{
            header("location:../../../identifier.php");
        }
?>