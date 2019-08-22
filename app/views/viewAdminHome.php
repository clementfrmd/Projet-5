<!-- Title -->
<?php $this->title = "Accueil administration" ?>

<!-- MAIN -->

<aside class="aside">
  <div class="menuAside">
    <h2>Gérer les articles</h2>
    <ul>
      <li><a href="index.php?action=addArticleView"><i class="fas fa-folder-plus"></i> Ajouter un article</a></li>

      <!-- LIST OF ARTICLES -->
      <?php foreach ($articlesList as $articleList): ?>
        <li><a href="<?= "index.php?action=articleAdmin&id=" . $articleList['id'] ?>">
          <?php if (!$articleList['statut']): ?>
            <i class="fas fa-pencil-alt"></i>
          <?php endif; ?><?= $articleList['title'] ?></a>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</aside>


<div class="content">
<h3>Changer le mot de passe :</h3>
  <!-- Link to password modification -->
  <p class="comments">Pour modifier votre mot de passe <a
    href ="index.php?action=password">cliquez ici</a></p>
  <h3>Gestion des commentaires signalés :</h3>
  <div class="comments">
    <!-- SHOW REPORTED COMMENTS -->
    <?php foreach ($comments as $comment): ?>
      <!-- COMMENT MODIFICATION SYSTEM -->
      <form class="formReport" action="index.php?action=updateComment" method="post">
        <fieldset class="report">

          <!-- AUTHOR AND DATE -->
          <legend><b><?= $comment['username'] ?></b> a commenté :</legend>

          <time class="headerRoport">le <?= $comment['dateCom_fr'] ?></time>

          <!-- COMMENT CONTENT -->
          <textarea name="txtReportCom" id="textReportCom" rows="8" cols="80"><?= $comment['comment'] ?></textarea>

          <div>
            <!-- VALIDATION BUTTON -->
            <button type="submit">Valider</button>
            <!-- CANCELLING BUTTON -->
            <button type="submit" formaction="index.php?action=deleteComment&id=<?= $comment['id'] ?>">Supprimer</button>
          </div>

          <!-- VALUES -->
          <input type="hidden" name="idArticle" value="<?= $comment['articleId'] ?>" />
          <input type="hidden" name="idComment" value="<?= $comment['id'] ?>" />
          <input type="hidden" name="username" value="<?= $comment['username'] ?>" />
        </fieldset>
      </form>
    <?php endforeach; ?>
  </div>
</div>
