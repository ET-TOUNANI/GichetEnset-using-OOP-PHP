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
    <title>Document D'inscription</title>
    <style>

.container {
    display: flex;
    height:100px;
}
.box {
    width: 20%;
  
   
}
#center {
background-image: url("Logo.png");   
background-size: contain;
background-repeat: no-repeat;

background-position: center;
width: 60%;
} 
#center1 {
text-align:center;
width: 60%;
} 

.title{

    text-align: center;
    margin: auto;
  width: 50%;

  padding: 10px;
}
</style>

  </head>






  <body>
    <div class="container">
    <div class="box">
    <p>
ROYAUME DU MAROC<br>
Universite Hassan ll de Casablanca<br>
Ecole Normale Superieur de l Enseignement -Technique<br>
Mohammedia<br>
Service des Affaires Estudiantines
<hr>
</p>
    </div>
    <div class="box" id="center">
       
    </div>
    <div class="box">
    <p>
    المملكة المغربية <br>
جامعة الحسن الثاني بالدار البيضاء<br>
المدرسة العليا لأساتذة التعليم التقني - المحمدية<br><br>
<br>مصلحة الشؤون الطلابية
<hr>
</p>
    </div>
</div>

      <div class="title">
           <h1>ATTESTATION DE SCOLARITE</h1>
        </div>
      <div>
          <p>
              Le Directeur de l'Ecole Normale Supérieure de l'Enseignement Technique-<br>
              Mohmmedia atteste que l'étudiant :<br>
              Monsieur XXXXXXXXXXXXXXXXXXXX <br><br>
              Numéro de la carte d'identité nationale :XXXXXXXXX<br><br>
              Code national de l'étudiant : xxxxxxxxxxxxxxx<br><br>
              Né le xxxxxxxxxx à xxxxxxxx(MAROC)<br><br>
              Est regulierement inscrit a la Ecole Normale Superieure de l Enseignement Technique-<br>
              Mohammedia pour l annee universitaire xxxxxxxx<br><br>
              Diplome:xxxxxxxx<br><br>
        </div>
        
     


<hr>
<div class="container">
    <div class="box">
    <p>
Adresse :
</p>
    </div>
    <div class="box" id="center1">
     <p>  Bd Hassan II BP 159 Mohammedia        </p><br>
     <p>Tel:0523322220 FAX:0523322546</p>
    </div>
    <div class="box">
    <p>
    :   العنوان 
</p>
    </div>
</div>

<hr>
<div class="title">
           <p>Le present document n est pas delivre qu en un seul exemplaire.</p>
           <p>il apparient a l etudiant d en faire des photocopies certifiees conformes.</p>
        </div>


  </body>
</html>
<?php 
        
        
    }
    else{
            header("location:../../../identifier.php");
        }
?>