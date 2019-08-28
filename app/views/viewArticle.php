<!-- TITRE DE LA PAGE -->
<?php $this->title = $article['title']; ?>

<!-- MAIN -->

<aside class="aside">
  <div class="menuAside">
    <h2>Liste des articles</h2>
    <ul>
      <!-- LIST OF ARTICLES -->
      <?php foreach ($articlesList as $articleList): ?>
        <?php if ($articleList['statut']): ?>
        <li><a href="<?= "index.php?action=article&id=" . $articleList['id'] ?>">
          <?= $articleList['title'] ?></a>
        </li>
        <?php endif; ?>
      <?php endforeach; ?>
    </ul>
  </div>
</aside>


<!-- ASHOWS ARTICLE -->
<div class="content">
  <article class="articles">
    <!-- TITLES AND DATE OF ADDING -->
    <header>
      <h2 class="articleTitle"><i class="fas fa-book"></i> <?= $article['title'] ?></h2>
      <time><?= $article['dateArt_fr'] ?></time>
    </header>

    <!-- CONTENT -->
    <p><?= $article['content'] ?></p>
  </article>

  <div class="comments">
    <h3><i class="far fa-comment-dots"></i> Commentaires des articles : <?= $article['title'] ?></h3>

    <!-- ADD COMMENT -->
    <form class="formComment" action="index.php?action=addComment" method="post">
      <fieldset class="addComment">
        <legend>Ajouter un commentaire</legend>

        <!-- AUTHOR OF COMMENT -->
        <input type="text" name="username" id="username" placeholder="Votre pseudo" required /><br />

        <!-- CONTENT OF COMMENT -->
        <textarea name="txtComment" id="txtComment" rows="8" cols="80" placeholder="Votre commentaire" required></textarea><br />

        <!-- VALIDATION BUTTON -->
        <div>
          <button type="submit">Commenter</button>
          <button type="reset">Effacer</button>
        </div>
        <!-- ID -->
        <input type="hidden" name="idArticle" value="<?= $article['id'] ?>" />
      </fieldset>
    </form>


    <!-- SHOWS COMMENTS -->
    <div class="commentsList">
      <?php foreach ($comments as $comment): ?>
      <fieldset class="reportComment">
            <!-- USERNAME AND DATE -->
            <legend><b><?= $comment['username'] ?></b> a commenté :</legend>

            <div class="headerReport">
              <time>le <?= $comment['dateCom_fr'] ?></time>
              <!-- SHOWS BUTTON FOR REPORT -->
              <?php if (!$comment['report']) { ?>
                <!-- REPORT BUTTON -->
            <a href="index.php?action=reportComment&idComment=<?=$comment['id']?>&idArticle=<?=$comment['articleId']?>">Signaler</a>
              <?php } else {
                  echo "<i class='signal'>Ce commentaire a été signalé</i>";
                }
              ?>
            </div>
            <!-- SHOWS COMMENT -->
            <p><?= $comment['comment'] ?></p>
          </fieldset>
      <?php endforeach; ?>
    </div>
  </div>
</div>
