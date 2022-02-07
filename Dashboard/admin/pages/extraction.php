<?php
session_name("admin");
session_start();
if (isset($_SESSION['admin'])) {
  ?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>États de mes demandes</title>
  <?php include("../partials/_headercomponents.html") ;
  require('../data/function.php');
  ?>
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
            <h1 class="title mb-4 text-center">Demandes d'extraction en attente</h1>
          </div>
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Attestations d'inscription</h4>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th> Demande N° </th>
                          <th> Etudiant</th>
                          <th> Filière</th>
                          <th> </th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                            $result = exeFunc("getDocx",1);
                            if (mysqli_num_rows($result)){
                              while ($data = mysqli_fetch_assoc($result)) {
                      ?>
                        <tr>
                          <td> <?= $data['IDDOC'] ?>  </td>
                          <td> <?= $data['NOMETU']?> <?= $data['PRENOMETUD']?> </td>
                          <td> <?= $data['filiere']?> </td>
                          <td>
                            <a href="details.php?id=<?= $data['IDDOC']?> "><div class="badge badge-outline-warning">Voir plus</div></a>
                          </td>
                        </tr>

                        <?php
                            }
                          }    
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Relevés des notes</h4>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th> Demande N° </th>
                          <th> Etudiant</th>
                          <th> Filière</th>
                          <th> </th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                            $result = exeFunc("getDocx",3);
                            if (mysqli_num_rows($result)){
                              while ($data = mysqli_fetch_assoc($result)) {
                      ?>
                        <tr>
                          <td> <?= $data['IDDOC'] ?>  </td>
                          <td> <?= $data['NOMETU']?> <?= $data['PRENOMETUD']?> </td>
                          <td> <?= $data['filiere']?> </td>
                          <td>
                            <a href="details.php?id=<?= $data['IDDOC']?> "><div class="badge badge-outline-warning">Voir plus</div></a>
                          </td>
                        </tr>

                        <?php
                            }
                          }    
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Attestation de scolarité</h4>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th> Demande N° </th>
                          <th> Etudiant</th>
                          <th> Filière</th>
                          <th> </th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                            $result = exeFunc("getDocx",2);
                            if (mysqli_num_rows($result)){
                              while ($data = mysqli_fetch_assoc($result)) {
                      ?>
                        <tr>
                          <td> <?= $data['IDDOC'] ?>  </td>
                          <td> <?= $data['NOMETU']?> <?= $data['PRENOMETUD']?> </td>
                          <td> <?= $data['filiere']?> </td>
                          <td>
                            <a href="details.php?id=<?= $data['IDDOC']?> "><div class="badge badge-outline-warning">Voir plus</div></a>
                          </td>
                        </tr>

                        <?php
                            }
                          }    
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Document X</h4>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th> Demande N° </th>
                          <th> Etudiant</th>
                          <th> Filière</th>
                          <th> </th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                            $result = exeFunc("getDocx",4);
                            if (mysqli_num_rows($result)){
                              while ($data = mysqli_fetch_assoc($result)) {
                      ?>
                        <tr>
                          <td> <?= $data['IDDOC'] ?>  </td>
                          <td> <?= $data['NOMETU']?> <?= $data['PRENOMETUD']?> </td>
                          <td> <?= $data['filiere']?> </td>
                          <td>
                            <a href="details.php?id=<?= $data['IDDOC']?> "><div class="badge badge-outline-warning">Voir plus</div></a>
                          </td>
                        </tr>

                        <?php
                            }
                          }    
                        ?>
                      </tbody>
                    </table>
                  </div>
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