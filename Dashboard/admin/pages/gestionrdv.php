
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
    <title>Déposer un document</title>
    <?php include("../partials/_headercomponents.html");
    require('../data/function.php');
    ?>
    <link rel="stylesheet" type="text/css" href="../assets/css/jquery.dataTable.min.css">
    	<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script>
       
       $(document).ready(function () {
    $.noConflict();
    var table = $('#example').DataTable();
});
    </script> 




<style>
tr td:hover {
  outline: none;
  box-shadow: none;
}
td a {
  width: 100%;
  display: block;
}
td a:hover {
  outline: none;
  box-shadow: none;
}


#example tr 
{
    text-align: center; 
    vertical-align: middle;
}

#example td 
{
    text-align: center; 
    vertical-align: middle;
}

</style>







  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:../partials/_sidebar.html -->
      <?php include("../partials/_sidebar.php")?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../partials/_navbar.html -->
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <h1 class="title mb-4 text-center">Gestion des RDV</h1>
            </div>
            <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="table-responsive">
                  <table id="example" class="table">
        <thead id="hh">
            <tr>
                <th>IDRDV</th>
                <th>NOM & PRENOM</th>
                <th>Demande de </th>
                <th>Date</th>
                <th>Heur</th>
                <th>STATUS</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        <?php
                            $result = exeFunc("GetRdv", $_SESSION['admin']);
                            if (mysqli_num_rows($result)){
                              while ($data = mysqli_fetch_assoc($result)) {
                      ?>
                        <tr>
                          <td> <?= $data['IDRDV'] ?>  </td>
                          <td> <?= $data['NOMETU']?> <?= $data['PRENOMETUD']?> </td>
                          <td> <?= $data['INTITULETYPERDV']?> </td>
                          <td> <?= $data['DATERDV']?> </td>
                          <td> <?= $data['HEURERDV']?> </td>
                           <?php
                          
                          
                          
                          if(intval($data['STATUS'])==0) {echo "<td >Nouveau</td>";
                          }else if(intval($data['STATUS'])==0){
                            echo "<td>Accepter</td>";


                          }else{
                            echo "<td>Refuser</td>";



                          }
                          
                          
                          
                          
                          
                          
                          
                          ?> 
                          <td>
                            <a href="detailsRDV.php?id=<?= $data['IDRDV']?> "><div class="badge badge-outline-warning">Voir plus</div></a>
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