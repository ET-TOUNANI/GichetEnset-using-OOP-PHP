<?php
$result = exeFunc("userData", $_SESSION['idEt']);
$row = mysqli_fetch_assoc($result); ?>
<p class="card-description"> Mes informations</p>
<div class="row">
  <div class="col-md-6">
    <div class="form-group row">
      <label class="col-sm-3 col-form-label">Nom</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" readonly value="<?=$row['NOMETU']?>"/>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group row">
      <label class="col-sm-3 col-form-label">Prénom</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" readonly value="<?=$row['PRENOMETUD']?>"/>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-6">
    <div class="form-group row">
      <label class="col-sm-3 col-form-label">Sexe</label>
      <div class="col-sm-9">
        <select class="form-control" readonly value="<?=$row['SEXE']?>">
          <option><?=$row['SEXE']?></option>
        </select>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group row">
      <label class="col-sm-3 col-form-label">Date de naissance</label>
      <div class="col-sm-9">
        <input class="form-control" readonly value="<?=longDate($row['DATENAISSANCE'])?>"/>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-6">
    <div class="form-group row">
      <label class="col-sm-3 col-form-label">CINE</label>
      <div class="col-sm-9">
        <input class="form-control" value="<?=$row['CINE']?>" readonly />
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group row">
      <label class="col-sm-3 col-form-label">Appogé </label>
      <div class="col-sm-9">
        <input class="form-control" readonly value="<?=$row['IDETUD']?>" />
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-6">
    <div class="form-group row">
      <label class="col-sm-3 col-form-label">Filière</label>
      <div class="col-sm-9">
        <input class="form-control" readonly value="<?=$row['filiere']?>" />
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group row">
      <label class="col-sm-3 col-form-label">Département </label>
      <div class="col-sm-9">
        <input class="form-control" readonly value="<?=$row['idDepartement']?>"/>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-6">
    <div class="form-group row">
      <label class="col-sm-3 col-form-label">Adresse</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" readonly value="<?=$row['ADRESSE']?>"/>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group row">
      <label class="col-sm-3 col-form-label">Ville</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" readonly value="<?=$row['VILLE']?>"/>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-6">
    <div class="form-group row">
      <label class="col-sm-3 col-form-label">Pays</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" readonly value="<?=$row['PAYS']?>"/>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group row">
      <p class="text-muted">* Si vous remarquez une annomalie dans vos coordonnées, veuillez vous adrésser à l'administration le plus tôt possible.</p>
    </div>
  </div>
</div>