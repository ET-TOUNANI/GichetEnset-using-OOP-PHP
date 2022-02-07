<?php
       if(isset($_SESSION['email']) and isset($_SESSION['idEt'])){
           require_once('../data/function.php');
           $result=exeFunc("user",$_SESSION['idEt']);
           if ($result->num_rows>0) {
           $data=$result->fetch_assoc();
?>
<nav class="navbar p-0 fixed-top d-flex flex-row">
  <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
    <a class="navbar-brand brand-logo-mini" href="."><img src="../assets/images/logo-mini.png" alt="logo" /></a>
  </div>
  <div class="navbar-menu-wrapper flex-row d-flex align-items-stretch">
    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
      <span class="mdi mdi-menu"></span>
    </button>
    <ul class="navbar-nav navbar-nav-right">
      <li class="nav-item dropdown d-none d-lg-block">
        <a class="nav-link btn btn-success create-new-button" id="createbuttonDropdown" data-bs-toggle="dropdown" aria-expanded="false" href="#">+ Nouveau</a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="createbuttonDropdown">
          <a class="dropdown-item preview-item" href="extraire.php">
            <div class="preview-thumbnail">
              <div class="preview-icon bg-dark rounded-circle">
                <i class="mdi mdi-file-outline text-primary"></i>
              </div>
            </div>
            <div class="preview-item-content">
              <p class="preview-subject ellipsis mb-1">Extraire un document</p>
            </div>
          </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item preview-item" href="rdv.php">
            <div class="preview-thumbnail">
              <div class="preview-icon bg-dark rounded-circle">
                <i class="mdi mdi mdi-calendar text-warning"></i>
              </div>
            </div>
            <div class="preview-item-content">
              <p class="preview-subject ellipsis mb-1">Réserver un rendez-vous</p>
            </div>
          </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item preview-item" href="deposer.php">
            <div class="preview-thumbnail">
              <div class="preview-icon bg-dark rounded-circle">
                <i class="mdi mdi-cloud-upload text-info"></i>
              </div>
            </div>
            <div class="preview-item-content">
              <p class="preview-subject ellipsis mb-1">Déposer un document</p>
            </div>
          </a>
        </div>
      </li>
      <li class="nav-item dropdown border-left">
        <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
          <i class="mdi mdi-bell"></i>
          <span class="count bg-danger"></span>
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
          <h6 class="p-3 mb-0">Notifications</h6>
          <div class="dropdown-divider"></div>
          <?php 
          $result = exeFunc("getLastDocReady", $_SESSION['idEt']);
          if (!mysqli_num_rows($result)) echo "Rien à voir ici";
          else
            while ($row = mysqli_fetch_assoc($result)) { ?>
          <a class="dropdown-item preview-item" href="status.php">
            <div class="preview-thumbnail">
              <div class="preview-icon bg-dark rounded-circle">
                <i class="mdi mdi-bookmark-check text-success"></i>
              </div>
            </div>
            <div class="preview-item-content">
              <p class="preview-subject mb-1">Votre document est prêt !</p>
              <p class="text-muted ellipsis mb-0">Demande n° <?=$row['IDDOC']?> </p>
            </div>
          </a>
          <div class="dropdown-divider"></div>
          <?php }?>
         <!-- <a class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <div class="preview-icon bg-dark rounded-circle">
                <i class="mdi mdi-bookmark-remove text-danger"></i>
              </div>
            </div>
            <div class="preview-item-content">
              <p class="preview-subject mb-1">Votre RDV à été rejeté !</p>
              <p class="text-muted ellipsis mb-0">RDV n° XXXXX </p>
            </div>
          </a>
        </div> -->
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link" id="profileDropdown" href="#" data-bs-toggle="dropdown">
          <div class="navbar-profile">
            <img class="img-xs rounded-circle" src="../assets/images/user.png" alt="">
            <p class="mb-0 d-none d-sm-block navbar-profile-name"><?=$data['NOMETU'].' '.$data['PRENOMETUD']?></p>
          </div>
        </a>
      </li>
    </ul>
    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
      <span class="mdi mdi-format-line-spacing"></span>
    </button>
  </div>
</nav>
<?php 
        }
    }
    else{
            header("location:../../../identifier.php");
        }
?>