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
    <title>Extraire un document</title>
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
              <h1 class="title mb-4 text-center">Extraire un document</h1>
            </div>
            <?php if (isset($_GET['success'])){
                echo '<div class="row"> 
                        <div class="alert" style="background-color: green;">
							          <span class="closebtn" onclick="this.parentElement.style.display=`none`;">&times; </span> 
						              	Demande envoyée! 
						            </div></div>';
                        unset($_GET['success']);
                  }?>
            <div class="row">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <form class="form-sample" method="post" action="docrequest.php">
                      <?php include("../partials/_infos.php") ?>
                      <div class="row">
                        <div class="col-md-12">
                          <p class="card-description"> Document à extraire</p>
                          <div class="form-group row">
                            <div class="col-md-12 col-sm-9">
                              <select class="form-control" name="typeDoc">
                                <?php $result = exeFunc("getDocList", null);
                                if (!mysqli_num_rows($result)) echo "Rien à voir ici";
                                else
                                  while ($row = mysqli_fetch_assoc($result)) { ?>
                                  <option value="<?= $row["IDTYPEDOC"] ?>"><?= $row["INTITULETYPE"] ?></option>
                                <?php } ?>
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row mt-4">
                        <div class="col-md-12 ">
                          <button type="submit" name="submit" class="btn btn-primary me-2">Demander</button>
                          <a href="../index.php" class="btn btn-dark" >Annuler</a>
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
  </body>

  </html>
<?php


} else {
  header("location:../../../identifier.php");
}
?>