
<?php
session_name("admin");
session_start();
if (isset($_SESSION['admin'])) {
  require('data/function.php');
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Guichet ENSET Mohammedia</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.theme.default.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="assets/css/style.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="assets/images/logo-mini.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo" href="index.php"><img src="assets/images/logo.png" alt="logo" /></a>
        <a class="sidebar-brand brand-logo-mini" href="index.php"><img src="assets/images/logo-mini.png" alt="logo" /></a>
      </div>
      <ul class="nav">
        <li class="nav-item profile">
          <div class="profile-desc">
            <div class="profile-pic">
              <div class="count-indicator">
                <img class="img-xs rounded-circle " src="assets/images/user.png" alt="">
                <span class="count bg-success"></span>
              </div>
              <div class="profile-name">
                <h5 class="mb-0 font-weight-normal">Administration</h5>
                <span>Service de scolarité</span>
              </div>
            </div>
            <a href="#" id="profile-dropdown" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
            <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
              <a href="#" onclick="logout(1)" class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-dark rounded-circle">
                    <i class="mdi mdi-logout text-danger"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <p class="preview-subject ellipsis mb-1 text-small" name="bye">Se Déconnnecter</button>
                </div>
              </a>
            </div>
          </div>
        </li>
        <li class="nav-item nav-category">
          <span class="nav-link">Navigation</span>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="index.php">
            <span class="menu-icon">
              <i class="mdi mdi-speedometer"></i>
            </span>
            <span class="menu-title">Acceuil</span>
          </a>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="pages/extraction.php">
            <span class="menu-icon">
              <i class="mdi mdi-laptop"></i>
            </span>
            <span class="menu-title">Docs à extraire</span>
          </a>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" data-bs-toggle="collapse" aria-expanded="false" aria-controls="ui-basic" href="#ui-basic" >
            <span class="menu-icon">
              <i class="mdi mdi-table-large"></i>
            </span>
            <span class="menu-title">Gestion des RDV</span>
            <i class="menu-arrow"></i>
          </a>
        </li>
        <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="pages/null">RDV a venir</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/null">RDV traite</a></li>
                </ul>
        </div>
        <li class="nav-item menu-items">
          <a class="nav-link" href="pages/archiver.php">
            <span class="menu-icon">
              <i class="mdi mdi-archive"></i>
            </span>
            <span class="menu-title">Docs à archiver</span>
          </a>
        </li>
      </ul>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
          <a class="navbar-brand brand-logo-mini" href="index.php"><img src="assets/images/logo-mini.png" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper flex-row d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item dropdown border-left">
              <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
                <i class="mdi mdi-bell"></i>
                <span class="count bg-danger"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                <h6 class="p-3 mb-0">Notifications</h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item" href="pages/extraction.php">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-bookmark-check text-success"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject mb-1">Une nouvelle demande !</p>
                    <p class="text-muted ellipsis mb-0">Demande n° 47</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" id="profileDropdown" href="#" data-bs-toggle="dropdown">
                <div class="navbar-profile">
                  <p class="mb-0 d-none d-sm-block navbar-profile-name">Service de scolarité</p>
                </div>
              </a>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-format-line-spacing"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-xl-4 col-sm-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-9">
                      <div class="d-flex align-items-center align-self-start">
                      <?php
                            $result = exeFunc("getNbDoc", $_SESSION['admin']);
                            if (mysqli_num_rows($result)){
                              $data = $result->fetch_assoc();
                            ?>
                        <h3 class="mb-0"><?= $data['nbr'] ?> </h3>
                        <?php
                            }
                        ?>
                      </div>
                    </div>
                    <div class="col-3">
                      <div class="icon icon-box-warning">
                        <span class="mdi mdi mdi-file-document icon-item"></span>
                      </div>
                    </div>
                  </div>
                  <h6 class="text-muted font-weight-normal">Documents en attente</h6>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-sm-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-9">
                      <div class="d-flex align-items-center align-self-start">
                      <?php
                            $result = exeFunc("getNbRdv", $_SESSION['admin']);
                            if (mysqli_num_rows($result)){
                              $data = $result->fetch_assoc();
                            ?>
                        <h3 class="mb-0"><?= $data['nbrrdv'] ?> </h3>
                        <?php
                            }
                        ?>
                      </div>
                    </div>
                    <div class="col-3">
                      <div class="icon icon-box-success">
                        <span class="mdi mdi-calendar-blank icon-item"></span>
                      </div>
                    </div>
                  </div>
                  <h6 class="text-muted font-weight-normal">RDV aujourd'hui</h6>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-sm-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-9">
                      <div class="d-flex align-items-center align-self-start">
                      <?php
                            $result = exeFunc("getNbDocAr", $_SESSION['admin']);
                            if (mysqli_num_rows($result)){
                              $data = $result->fetch_assoc();
                            ?>
                        <h3 class="mb-0"><?= $data['nbrDoArch'] ?> </h3>
                        <?php
                            }
                        ?>
                      </div>
                    </div>
                    <div class="col-3">
                      <div class="icon icon-box-danger">
                        <span class="mdi mdi-archive icon-item"></span>
                      </div>
                    </div>
                  </div>
                  <h6 class="text-muted font-weight-normal">Documents à archiver</h6>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-row justify-content-between ">
                    <h4 class="card-title mb-4">Rendez-vous d'aujourd'hui</h4>
                  </div>
                  
                      <?php
                            $result = exeFunc("getRdvE", $_SESSION['admin']);
                            if (mysqli_num_rows($result)){
                              while ($data = mysqli_fetch_assoc($result)) {
                      ?>
                      <div class="row">
                        <div class="col-12">
                          <div class="preview-list">
                            <div class="preview-item border-top">
                              <div class="preview-item-content d-sm-flex flex-grow">
                                <div class="flex-grow">
                                  <h6 class="preview-subject"><?= $data['prenom'] ?>  <?= $data['nom'] ?> </script>
                                  </h6>
                                  <p class="text-muted"><?= $data['filiere'] ?>  | <?= $data['raison'] ?> </p>
                                </div>
                                <div class="me-auto text-sm-right pt-2 pt-sm-0">
                                  <p class="text-muted"><?= $data['horaire'] ?> </p>
                                </div>
                              </div>
                            </div>
                            </div>
                            </div>
                          </div>
                            <?php
                              }
                            }
                        ?>
                      
                </div>
              </div>
            </div>
            <div class="col-md-8 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Demandes d'extraction en attente</h4>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th> Demande N° </th>
                          <th> Type du document </th>
                          <th> Date d'émission </th>
                          <th> État </th>
                        </tr>
                      </thead>
                      <tbody>

                      <?php
                            $result = exeFunc("getDemEx", $_SESSION['admin']);
                            if (mysqli_num_rows($result)){
                              while ($data = mysqli_fetch_assoc($result)) {
                      ?>
                        <tr>
                          <td> <?= $data['IDDOC'] ?>  </td>
                          <td> <?= $data['INTITULETYPE']?> </td>
                          <td> <?= $data['DATEREDACTION']?> </td>
                          <td>
                            <a href="pages/details.php?id=<?= $data['IDDOC']?> "><div class="badge badge-outline-warning">Voir plus</div></a>
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
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Mini-projet en base de données | Année universitaire : 2021-2022</span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="assets/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
  <script src="assets/js/jquery.cookie.js" type="text/javascript"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="assets/js/off-canvas.js"></script>
  <script src="assets/js/hoverable-collapse.js"></script>
  <script src="assets/js/misc.js"></script>
  <script src="assets/js/settings.js"></script>
  <script src="assets/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page -->
  <script src="assets/js/dashboard.js"></script>
  <!-- End custom js for this page -->
</body>

</html>

<?php
} else {
  header("location:../../index.php");
}
?>