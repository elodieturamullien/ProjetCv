<?php include("inc/header.inc.php"); ?>

<?php

if (!empty($_POST["Enregistrer"])) {

    $_POST["emploi"] = htmlentities($_POST["emploi"], ENT_QUOTES);
    $_POST["training"] = htmlentities($_POST["training"], ENT_QUOTES);
    $_POST["information"] = htmlentities($_POST["information"], ENT_QUOTES);
    $_POST["date_experience"] = htmlentities($_POST["date_experience"], ENT_QUOTES);

    $requeteSQL = "INSERT INTO experience (emploi, training, information, date_experience)";
    $requeteSQL .= " VALUE ('$_POST[emploi]', '$_POST[training]', '$_POST[information]', '$_POST[date_experience]')";
    $result = $pdo->exec($requeteSQL);
    echo $result . ' Une experience a été enregistrée<br>';

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

        <input type="submit" class="btn btn-primary" name="Enregistrer" value="Enregistrer">

    </form>

    <?php
    $result = $pdo->query("SELECT * FROM experience ORDER BY date_experience DESC");
    while ($experience = $result->fetch(PDO::FETCH_OBJ)) { ?>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"><?php echo $experience->emploi; ?></h5> 
                <p><?php echo $experience->training; ?></p>
                <a href="modification.php?id=<?php echo $experience->id_experience; ?>" class="btn btn-primary">Modification</a>
                <form method="POST">
                <a href="supp.php?id=<?php echo $experience->id_experience; ?>" class="btn btn-primary">Suppression</a>
                </form>
            </div>
        </div>  
    <?php 
    }
    ?>


</div>
