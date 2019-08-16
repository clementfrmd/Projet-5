<!-- TITLE -->
<?php $title = "Connexion"; ?>

<!-- MAIN -->

<?php ob_start(); ?>
<!-- CONNECTION -->
<div class="contentLogin">
  <div class="login">
    <h2>Veuillez vous connecter pour accéder à l'espace administrateur.</h2>
    <form class="formConnexion" action="index.php?action=adminLogin" method="post">
      <fieldset>
        <legend>Connexion</legend>
        <!-- USERNAME -->
        <label for="username">Pseudo :</label>
        <input type="text" name="username" placeholder="Votre pseudo" required><br />
        <!-- PASSWORD -->
        <label for="password">Mot de passe :</label>
        <input type="password" name="password" placeholder="Votre mot de passe" required><br />

        <div class="button">
          <!-- VALIDATION BUTTON -->
          <button type="submit">Valider</button>
          <!-- DELATE BUTTON -->
          <button type="reset">Effacer</button>
        </div>
      </fieldset>
    </form>
    <!-- ERROR MESSAGE -->
    <p class="signal"><?= $errorLogin ?></p>
  </div>
</div>

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
