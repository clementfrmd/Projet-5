<!-- TITLE -->
<?php $this->title = "Billet simple pour l'Alaska"; ?>

<!-- MAIN -->

<aside class="aside">
  <div class="menuAside">
    <h2><a href="index.php">Liste des chapitres</h2>
    <ul>
      <!-- List of articles -->
      <?php foreach ($articlesList as $articleList): ?>
        <?php if ($articleList['statut']): ?>
        <li><a href="<?= "index.php?action=article&id=" . $articleList['id'] ?>">
          <?= $articleList['title'] ?></a>
        </li>
        <?php endif; ?>
      <?php endforeach; ?>
    </ul>
    <?php if ($page>0){ ?>
    <a href="index.php?page=<?php echo ($page-1); ?>">Précédent</a>
    <?php } ?>
    <a href="index.php?page=<?php echo ($page+1); ?>">Suivant</a>
  </div>
</aside>


<!-- Get Last 3 articles -->
<div class="content">
<div class="w3-container w3-center w3-animate-zoom">
  <h2><i class="far fa-file-alt"></i> Derniers chapitres :</h2>
  <?php foreach ($articles as $article): ?>
    <article class="articles">
      <header>
        <!-- Article Titles -->
        <a href="<?= "index.php?action=article&id=" . $article['id'] ?>">
          <h3 class="articleTitle"><?= $article['title'] ?></h3>
        </a>
        <!-- Date -->
        <time>Ajouté le : <?= $article['dateArt_fr'] ?></time>
      </header>
      <!-- Articles -->
      <p><?= $article['preview'] ?></p>
      <a class="readMore" href="<?= "index.php?action=article&id=" . $article['id'] ?>">[Lire la suite...]</a>
    </article>
    <hr />
  <?php endforeach; ?>
</div>
</div>
