<!-- TITLE -->
<?php $title = "Modifier le mot de passe"; ?>

<!-- MAIN -->

<?php ob_start(); ?>
<!-- CONNECTION FORM -->
<div class="contentLogin">
  <div class="login">
    <h2>Entrez votre nouveau mot de passe.</h2>
    <form class="formConnexion" action="index.php?action=adminPassword" method="post">
      <fieldset>
        <legend>Connexion</legend>
        <!-- USERNAM -->
        <label for="username">Bonjour <?= $_SESSION['username'] ?></label>
        <input type="hidden" name="username" value="<?= $_SESSION['username'] ?>" required><br />
        <!-- NEW PASSWORD -->
        <label for="password1">Nouveau MDP :</label>
        <input type="password" name="password1" placeholder="Votre mot de passe" required><br />
        <!-- CONFIRMATION -->
        <label for="password2">Confirmez MDP :</label>
        <input type="password" name="password2" placeholder="Confirmez votre mot de passe" required><br />

        <div class="button">
          <!-- VALIDATION BUTTON -->
          <button type="submit">Valider</button>
          <!-- RESET BUTTON -->
          <button type="reset">Effacer</button>
        </div>
      </fieldset>
    </form>
    <!-- ERROR LOGIN -->
    <p class="signal"><?= $errorLogin ?></p>
  </div>
</div>

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
