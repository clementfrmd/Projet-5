<!-- Title -->
<?php $this->title = "Modifier un chapitre" ?>

<!-- MAIN -->

<aside class="aside">
  <div class="menuAside">
    <h2>Gérer les chapitres</h2>
    <ul>
      <!-- Add Article -->
      <li><a href="index.php?action=addArticleView"><i class="fas fa-plus"></i> Ajouter un chapitre</a></li>
      <!-- List of articles -->
      <?php foreach ($articlesList as $articleList): ?>
        <li><a href="<?= "index.php?action=articleAdmin&id=" . $articleList['id'] ?>">
          <?php if (!$articleList['statut']): ?>
            <i class="fas fa-bell signal"></i>
          <?php endif; ?><?= $articleList['title'] ?></a>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</aside>

<!-- ARTICLE -->
<div class="content">
  <article class="articles">
    <h2 class="articleTitle">Gestion du chapitre : <?= $article['title'] ?></h2>
    <?php if (!$article['statut']): ?>
      <p class="signal"><i class="fas fa-exclamation"></i> Ce chapitre n'a pas encore été publié.</p>
    <?php endif; ?>
    <!-- Article Modification -->
    <form action="index.php?action=updateArticle&statut=1" method="post">

      <!-- Title and date -->
      <p>
        <label for="title">Entrez votre titre :</label>
        <input type="text" name="title" value= "<?= $article['title'] ?>" required>
      </p>

      <!-- Article content -->
      <textarea name="txtContent" id="mytextarea"><?= $article['content']?></textarea>

      <!-- Validation button -->
<br/>
      <button type="submit">Publier</button>
      <button type="submit" formaction="index.php?action=updateArticle&statut=0">Enregistrer</button>
      <!-- Delete button -->
      <button type="submit" formaction="index.php?action=deleteArticle&id=<?= $article['id'] ?>">Supprimer</button>

      <!-- ID to send -->
      <input type="hidden" name="idArticle" value="<?= $article['id'] ?>">
    </form>
  </article>
</div>
