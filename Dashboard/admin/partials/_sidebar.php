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
          <a class="nav-link" href="../index.php">
            <span class="menu-icon">
              <i class="mdi mdi-speedometer"></i>
            </span>
            <span class="menu-title">Acceuil</span>
          </a>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="extraction.php">
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
                  <li class="nav-item"> <a class="nav-link" href="../pages/gestionrdv.php">RDV Non Traité</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../pages/historiqueRdv.php">RDV Traité</a></li>
                </ul>
        </div>
        <li class="nav-item menu-items">
          <a class="nav-link" data-bs-toggle="collapse" aria-expanded="false" aria-controls="ui-basic1" href="#ui-basic1">
            <span class="menu-icon">
            <i class="mdi mdi-table-large"></i>
            </span>
            <span class="menu-title">Docs à archiver</span>
            <i class="menu-arrow"></i>
          </a>
        </li>
        <div class="collapse" id="ui-basic1">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="../pages/archiver.php">Archivage Non Traité</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../pages/historiqueArchi.php">Archivage Traité</a></li>
                </ul>
        </div>

        
      </ul>
</nav>