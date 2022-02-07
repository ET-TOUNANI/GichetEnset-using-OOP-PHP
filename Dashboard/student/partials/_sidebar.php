<?php
            if(isset($_SESSION['email']) and isset($_SESSION['idEt'])){
            require_once('../data/function.php');
              $result = exeFunc("user", $_SESSION['idEt']);
              if ($result->num_rows > 0) {
                $data = $result->fetch_assoc();
?>
<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
    <a class="sidebar-brand brand-logo" href="../index.php"><img src="../assets/images/logo.png" alt="logo" /></a>
    <a class="sidebar-brand brand-logo-mini" href="../index.php"><img src="../assets/images/logo-mini.png" alt="logo" /></a>
  </div>
  <ul class="nav">
    <li class="nav-item profile">
      <div class="profile-desc">
        <div class="profile-pic">
          <div class="count-indicator">
            <img class="img-xs rounded-circle " src="../assets/images/user.png" alt="">
            <span class="count bg-success"></span>
          </div>
          <div class="profile-name">
            <h5 class="mb-0 font-weight-normal"><?=$data['NOMETU'].' '.$data['PRENOMETUD']?></h5>
            <span><?=$data['filiere']?></span>
          </div>
        </div>
        <a href="#" id="profile-dropdown" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
        <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
          <a href="changepwd.php" class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <div class="preview-icon bg-dark rounded-circle">
                <i class="mdi mdi-onepassword  text-info"></i>
              </div>
            </div>
            <div class="preview-item-content">
              <p class="preview-subject ellipsis mb-1 text-small">Changer le mot de passe</p>
            </div>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" onclick="logout(2)" class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <div class="preview-icon bg-dark rounded-circle">
                <i class="mdi mdi-logout text-danger"></i>
              </div>
            </div>
            <div class="preview-item-content">
              <p class="preview-subject ellipsis mb-1 text-small">Se déconnecter</p>
            </div>
          </a>
        </div>
      </div>
    </li>
    <li class="nav-item nav-category">
      <span class="nav-link">Navigation</span>
    </li>
    <li class="nav-item menu-items">
      <a class="nav-link" href="../index.php">
        <span class="menu-icon">
          <i class="mdi mdi-speedometer"></i>
        </span>
        <span class="menu-title">Acceuil</span>
      </a>
    </li>
    <li class="nav-item menu-items">
      <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
        <span class="menu-icon">
          <i class="mdi mdi-laptop"></i>
        </span>
        <span class="menu-title">Services étudiant</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-basic">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="extraire.php">Extraire un document</a></li>
          <li class="nav-item"> <a class="nav-link" href="rdv.php">Réserver un rendez-vous</a></li>
          <li class="nav-item"> <a class="nav-link" href="deposer.php">Déposer un document</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item menu-items">
      <a class="nav-link" href="status.php">
        <span class="menu-icon">
          <i class="mdi mdi-table-large"></i>
        </span>
        <span class="menu-title">États</span>
      </a>
    </li>
    <li class="nav-item menu-items">
      <a class="nav-link" href="contact.php">
        <span class="menu-icon">
          <i class="mdi mdi-contacts"></i>
        </span>
        <span class="menu-title">Contactez-nous</span>
      </a>
    </li>
  </ul>
</nav>
<?php 
        
        }
    }
    else{
            header("location:../../../identifier.php");
        }
?>
