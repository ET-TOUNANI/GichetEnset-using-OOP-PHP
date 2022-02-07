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
    <title>États de mes demandes</title>
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
              <h1 class="title mb-4 text-center">États de mes documents</h1>
            </div>
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Mes demandes d'extraction</h4>
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
                            $result = exeFunc("loadDocExt", $_SESSION['idEt']);
                            if (!mysqli_num_rows($result)) echo "Rien à voir ici";
                            else
                              while ($row = mysqli_fetch_assoc($result)) { ?>
                              <tr>
                                <td> <?=$row['IDDOC']?> </td>
                                <td> <?=$row['INTITULETYPE']?> </td>
                                <td> <?=longDate($row['DATEREDACTION'])?> </td>
                                <td>
                                <?php 
                                
                                if($row['IDDOC']==1){
                                
                                if($row['STATUS']==0){ 

                                    echo"<a href='../Document/inscrire.php'><div  class='badge badge-outline-success'>Prêt</div>";
                                   }else if($row['STATUS']==1){
                                   echo" <div class='badge badge-outline-warning'>En cours</div>";
                                   
                                   } else{

                                    echo" <div class='badge badge-outline-danger'>Refuser</div>";
                                   } 
                                  }

                                  else if($row['IDDOC']==2){
                                
                                    if($row['STATUS']==0){ 
    
                                        echo"<a href='../Document/School.php'><div  class='badge badge-outline-success'>Prêt</div>";
                                       }else if($row['STATUS']==1){
                                       echo" <div class='badge badge-outline-warning'>En cours</div>";
                                       
                                       } else{
    
                                        echo" <div class='badge badge-outline-danger'>Refuser</div>";
                                       } 
                                      }else{


                                        if($row['STATUS']==0){ 
    
                                          echo"<a href='#'><div  class='badge badge-outline-success'>Prêt</div>";
                                         }else if($row['STATUS']==1){
                                         echo" <div class='badge badge-outline-warning'>En cours</div>";
                                         
                                         } else{
      
                                          echo" <div class='badge badge-outline-danger'>Refuser</div>";
                                         }




                                      }

                                 








                                   ?>
                                  

                          </td>
                              </tr>
                            <?php } ?>
                          </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-7 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Mes documents déposés</h4>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th> Envoi N° </th>
                            <th> Objet </th>
                            <th> Date d'émission </th>
                            <th> État </th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php
                            $result = exeFunc("loadDocDepo", $_SESSION['idEt']);
                            if (!mysqli_num_rows($result)) echo "Rien à voir ici";
                            else
                              while ($row = mysqli_fetch_assoc($result)) { ?>
                          <tr>
                            <td> <?=$row['IDDOCDEPO']?> </td>
                            <td> <?=$row['LIBELLE']?> </td>
                            <td> <?=longDate($row['DATEDEPO'])?> </td>
                            <td>
                              <?php if($row['STATUS']==0){ ?>
                              <div class="badge badge-outline-success">Archivé</div>
                              <?php }else{?>
                                <div class="badge badge-outline-danger">En attente</div>
                              <?php }?>
                            </td>
                          </tr>
                          <?php } ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-5 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Mes RDVs</h4>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th> Pour le :</th>
                            <th> Horraire </th>
                            <th> Objet </th>
                            <th> État </th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php   
                          $result=exeFunc("loadRdvExt",$_SESSION['idEt']);
                          if(! mysqli_num_rows($result)) echo "Rien à voir ici";
                          else
                          while($row=mysqli_fetch_assoc($result)){ ?>
                          <tr>
                            <td> <?=shortDate($row['DATERDV'])?> </td>
                            <td> <?=$row['HEURERDV']?> </td>
                            <td> <?=oneWord($row['INTITULETYPERDV'])?>  </td>
                            <td>
                              <?php 
                              if($row['STATUS']==0){ 
                              echo"<div class='badge badge-outline-primary'>En cours</div>";
                              }else if($row['STATUS']==1){
                              echo"<div class='badge badge-outline-warning'>Rejeté</div>";
                                
                              }else{

                                echo"<div class='badge badge-outline-danger'>Rejeté</div>";

                              }
                                ?>
                            </td>
                          </tr>
                        <?php } ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              
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
  </body>
</html>
<?php 
        
        
    }
    else{
            header("location:../../../identifier.php");
        }
?>