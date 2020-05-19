<?php include("inc/header.inc.php"); ?>

<?php
if (!empty ($_POST["Supprimer"])) {
    $requeteSQL = "DELETE FROM experience WHERE id_experience = $_GET[id]";
    $result = $pdo->exec($requeteSQL);
    echo $result . ' Une experience a été supprimée<br>';
    header("Location: admin.php");
}
?>

<?php $result = $pdo->query("SELECT * FROM experience WHERE id_experience = $_GET[id]");
      $experience = $result->fetch(PDO::FETCH_OBJ);?>
<section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="experience">
    <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
        <div class="resume-content">
        <h3 class="mb-0"><?php echo $experience->emploi; ?></h3>
        <div class="subheading mb-3"><?php echo $experience->training;?>
        </div>
        <p><?php echo $experience->information;?></p>
        <form method="POST" action="" enctype='multipart/form-data'>
            <input type="submit" class="btn btn-primary" name="Supprimer" value="Supprimer">
        </form>
        </div>
        <div class="resume-date text-md-right">
    <span class="text-primary"><?php echo $experience->date_experience?></span>

        </div>
    </div>
</section>

