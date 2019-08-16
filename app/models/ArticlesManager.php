<?php
  namespace App\Models;

  use App\Config\PDOManager;


  class ArticlesManager extends PDOManager
  {
    // Get last 3 articles
    public function getArticles()
    {
      $sql = "SELECT id, title, SUBSTRING(content, 1, 500) AS preview, DATE_FORMAT(dateArt, '%d/%m/%Y à %Hh%imin%ss') AS dateArt_fr, statut FROM articles WHERE statut = 1 ORDER BY dateArt DESC LIMIT 0, 3";
      $articles = $this->executeRequest($sql);

      return $articles;
    }

    // Get list of titles and articles
    public function getArticlesList($page = null)
    {
      $articlesList = null;
        if ($page === null)
        {
        $sql = "SELECT id, title, statut FROM articles";
        $articlesList = $this->executeRequest($sql);
      }
      else {
        $limit = $page*10;
       $sql = "SELECT id, title, statut FROM articles LIMIT ?, 10";
        //$sql = "SELECT id, title, statut FROM articles";
        $articlesList = $this->executeRequestInt($sql, $limit);

      }
      return $articlesList;
  }

    // Get articles with id
    public function getArticle($articleId)
    {
      $sql = "SELECT id, title, content, DATE_FORMAT(dateArt, '%d/%m/%Y à %Hh%imin%ss') AS dateArt_fr, statut FROM articles WHERE id = ?";

      $req = $this->executeRequest($sql, array($articleId));
      $article = $req->fetch();

      return $article;
    }

// Add article
    public function addArticle($title, $content, $statut)
    {
      $sql = "INSERT INTO articles(title, content, dateArt, statut) VALUES(?,?,NOW(),?)";
      $newArticle = $this->executeRequest($sql, array($title, $content, $statut));

      return $newArticle;
    }

    // Modify article
    public function updateArticle($title, $content, $statut, $id)
    {
      $sql = "UPDATE articles SET title = ?, content = ?, statut = ? WHERE id = ?";
      $newArticle = $this->executeRequest($sql, array($title, $content, $statut, $id));

      return $newArticle;
    }

    // EDelete article
    public function deleteArticle($id)
    {
      $sql = "DELETE FROM articles WHERE id = ?";
      $this->executeRequest($sql, array($id));
    }
  }
?>
