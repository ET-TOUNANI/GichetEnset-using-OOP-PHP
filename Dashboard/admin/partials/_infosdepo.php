<?php
                            $result = exeFunc("getDeDepo", $_GET['id']);
                            if (mysqli_num_rows($result)){
                              $data = $result->fetch_assoc();
                            ?>                  
<p class="card-description"> Informations de l'étudiant</p>
<div class="row">
  <div class="col-md-6">
    <div class="form-group row">
      <label class="col-sm-3 col-form-label">Nom</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" readonly value="<?= $data['NOMETU'] ?> " />
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group row">
      <label class="col-sm-3 col-form-label">Prénom</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" readonly value="<?= $data['PRENOMETUD'] ?> " />
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-6">
    <div class="form-group row">
      <label class="col-sm-3 col-form-label">Filière</label>
      <div class="col-sm-9">
        <input class="form-control" readonly value="<?= $data['filiere'] ?>" />
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group row">
      <label class="col-sm-3 col-form-label">lien de fichier</label>
      <div class="col-sm-9">
        <a href="https://drive.google.com/file/d/1B9zK3WD1Rfe8v6giEeTe1RwaMLpugXXU/view?usp=sharing" >click me</a> 
      </div>
    </div>
  </div>
</div>
<div class="row">
       <div class="col-md-12">
              <p class="card-description">Document & Pièces jointes</p>
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Type du document </label>
                <input type="text" class="form-control" readonly value="<?= $data['LIBELLE'] ?>" />
              </div>      
        </div>
  

</div>
<?php
                            }
                        ?>