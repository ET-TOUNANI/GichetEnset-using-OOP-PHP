<?php
//Database stuff
function testSession(){
  return isset($_SESSION['email']) AND isset($_SESSION['idEt']);
}
function getConnFile(){
    if(file_exists ( "../../connexion.php"))
        $file="../../connexion.php";
    else
        $file="../../../connexion.php";
    return $file;
}
function functions($type,$id){
    $sql["user"]="select NOMETU, PRENOMETUD, filiere from etudiant LEFT JOIN filiere ON etudiant.idFiliere=filiere.idFiliere where IDETUD=\"$id\"";
    $sql["userData"]="SELECT NOMETU,PRENOMETUD,SEXE,DATENAISSANCE,CINE, IDETUD, filiere, idDepartement, ADRESSE, VILLE, PAYS FROM etudiant LEFT JOIN filiere ON etudiant.idFiliere=filiere.idFiliere WHERE IDETUD=\"$id\"";
    $sql["loadRdv"]="SELECT DATERDV, INTITULETYPERDV, `HEURERDV` FROM rdv LEFT JOIN typerdv ON rdv.`IDTYPERDV`=typerdv.`IDTYPERDV` WHERE `STATUS`=0 AND IDETUD=\"$id\" LIMIT 3";
    $sql["loadRdvExt"]="SELECT DATERDV, INTITULETYPERDV, `HEURERDV`,`STATUS` FROM rdv LEFT JOIN typerdv ON rdv.`IDTYPERDV`=typerdv.`IDTYPERDV` WHERE IDETUD=\"$id\"";
    $sql["loadDoc"]="SELECT IDDOC,INTITULETYPE, DATEREDACTION, STATUS FROM documentextrait LEFT JOIN typedocument ON documentextrait.IDTYPEDOC=typedocument.IDTYPEDOC WHERE IDETUD=\"$id\" ORDER BY IDDOC LIMIT 3";
    $sql["loadDocExt"]="SELECT IDDOC,INTITULETYPE, DATEREDACTION, STATUS FROM documentextrait LEFT JOIN typedocument ON documentextrait.IDTYPEDOC=typedocument.IDTYPEDOC WHERE IDETUD=\"$id\" ORDER BY IDDOC";
    $sql["loadDocDepo"]="SELECT IDDOCDEPO, LIBELLE, STATUS, DATEDEPO FROM documentdepose WHERE IDETUD=\"$id\""; 
    $sql["getLastDocReady"]="SELECT IDDOC FROM documentextrait WHERE IDETUD=\"$id\" AND STATUS=0 ORDER BY DATEREDACTION DESC LIMIT 2";
    $sql["getDocList"]="SELECT * FROM typedocument";
    return $sql[$type];
}
//exeFunc("loadDoc",$_SESSION['idEt'])
function exeFunc($type,$id){
    include(getConnFile());
    $result = mysqli_query($conex, functions($type,$id));
    return $result;
}

//Formats
function oneWord($str){
    return explode(" ",$str)[0];
}
function shortDate($date){
    $dateArr=explode("-",$date);
    return $dateArr[2]."/".$dateArr[1];
}
function longDate($date){
    //french format (I HATE FRENCH!!!)
    $dateArr=explode("-",$date);
    return $dateArr[2]."/".$dateArr[1]."/".$dateArr[0];
}
function sqlDateToHTML($date){
    $dateArr=explode("-",$date);
    $sYear=$dateArr[0];
    switch (intval($dateArr[1])) {
        case 1:
            $sMonth = "Janvier";
            break;
          case 2:
            $sMonth = "Fevrier";
            break;
          case 3:
            $sMonth = "Mars";
            break;
          case 4:
            $sMonth = "Avril";
            break;
          case 5:
            $sMonth = "Mai";
            break;
          case 6:
            $sMonth = "Juin";
            break;
          case 7:
            $sMonth = "Juillet";
            break;
          case 8:
            $sMonth = "Août";
            break;
          case 9:
            $sMonth = "Septembre";
            break;
          case 10:
            $sMonth = "Octobre";
            break;
          case 11:
            $sMonth = "Novembre";
            break;
          case 12:
            $sMonth = "Decembre";
            break;
        }
    $sDay=$dateArr[2];
    return $sDay." ".$sMonth." ".$sYear;
}
?>