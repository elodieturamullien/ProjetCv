<?php include("inc/header.inc.php"); ?>

<hr class="m-0">

<section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="about">
    <form action="admin.php" method="POST">
        <h1 class="mb-0">Connexion</h1>
        <label><b>Nom d'utilisateur</b></label>
        <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required><br>

        <label><b>Mot de passe</b></label>
        <input type="text" placeholder="Entrer le mot de passe" name="password" required><br>

        <input type="submit" id='submit' value='ENTRER' >
        <?php
        if(isset($_GET['erreur'])){
            $err = $_GET['erreur'];
            if($err==1 || $err==2)
                echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
        }
        ?>
    </form>
</section>