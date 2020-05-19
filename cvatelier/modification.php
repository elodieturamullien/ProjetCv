<?php include("inc/header.inc.php"); ?>

<?php

if (!empty($_POST)) {

    $_POST["emploi"] = htmlentities($_POST["emploi"], ENT_QUOTES);
    $_POST["training"] = htmlentities($_POST["training"], ENT_QUOTES);
    $_POST["information"] = htmlentities($_POST["information"], ENT_QUOTES);
    $_POST["date_experience"] = htmlentities($_POST["date_experience"], ENT_QUOTES);

    $requeteSQL = "UPDATE experience SET emploi ='$_POST[emploi]', training ='$_POST[training]', information ='$_POST[information]', date_experience ='$_POST[date_experience]' WHERE id_experience = $_GET[id]";
    $result = $pdo->exec($requeteSQL);
    echo $result . ' Une experience a été enregistrée<br>';
    header("Location: admin.php");
}

?>


<div class="starter-template">  

    <form method="POST" action="" enctype='multipart/form-data'>

    <div class="form-group">
            <label for="emploi"><br><b>Nom de l'experience</b></label>
            <input type="texte" class="form-control" placeholder="Entrer le nom de l'experience" id="emploi" name="emploi">
        </div>

        <div class="form-group">
            <label for="training"><b>Formation acquise ou en cours</b></label>
            <input type="texte" class="form-control" placeholder="Entrer le nom de la formation" id="training" name="training">
        </div>

        <div class="form-group">
            <label for="information"><b>Information</b></label>
            <textarea rows="5" class="form-control" placeholder="Informations complémentaires" id="information" name="information"></textarea>
        </div>

        <div class="form-group">
            <label for="date_experience"><b>Date</b></label>
            <input type="texte" placeholder='2020-05-19' class="form-control" id="date_experience" name="date_experience">
        </div>

        <button type="submit" class="btn btn-primary">Enregistrer</button>
    
    </form>