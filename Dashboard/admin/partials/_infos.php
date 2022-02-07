<?php
                            $result = exeFunc("getDeTET", $_GET['id']);
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
      <label class="col-sm-3 col-form-label">Sexe</label>
      <div class="col-sm-9">
        <select class="form-control" readonly value="<?= $data['SEXE'] ?> ">
          <option><?= $data['SEXE'] ?> </option>
        </select>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group row">
      <label class="col-sm-3 col-form-label">Date de naissance</label>
      <div class="col-sm-9">
        <input class="form-control" readonly value="<?= $data['DATENAISSANCE'] ?> " />
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-6">
    <div class="form-group row">
      <label class="col-sm-3 col-form-label">CINE</label>
      <div class="col-sm-9">
        <input class="form-control" value="<?= $data['CINE'] ?> " readonly />
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
      <label class="col-sm-3 col-form-label">Département </label>
      <div class="col-sm-9">
        <input class="form-control" readonly value="<?= $data['departement'] ?>" />
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-6">
    <div class="form-group row">
      <label class="col-sm-3 col-form-label">Adresse</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" readonly value="<?= $data['ADRESSE'] ?>" />
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group row">
      <label class="col-sm-3 col-form-label">Ville</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" readonly value="<?= $data['VILLE'] ?>" />
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-6">
    <div class="form-group row">
      <label class="col-sm-3 col-form-label">Pays</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" readonly value="<?= $data['PAYS'] ?>" />
      </div>
    </div>
  </div>

</div>
<div class="row">
                        <div class="col-md-12">
                        <p class="card-description">Document & Pièces jointes</p>
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Type du document </label>
                            <input type="text" class="form-control" readonly value="<?= $data['INTITULETYPE'] ?>" />
                          </div>
                        </div>
                      </div>
<?php
                            }
                        ?>