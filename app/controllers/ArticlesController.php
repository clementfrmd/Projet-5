<?php
  namespace App\Controllers;

  use App\Models\ArticlesManager;
  use App\Models\CommentsManager;
  use App\Models\Comments;
  // use App\Models\Articles;
  use App\Views\View;

  class ArticlesController
  {
    private $article;
    private $comments;


    public function __construct()
    {
      $this->article = new ArticlesManager;
      $this->comments = new CommentsManager;
    }


    // Show article and comments
    public function article($articleId)
    {
      // Push the article
      $article = $this->article->getArticle($articleId);
      if (!$article){
        $view = new View("Error");
        $view->generateView(array());
        return;
      }
      // Push the comments from the article
      $comments = $this->comments->getComments($articleId);
      // Show article's title
      $articlesList = $this->article->getArticlesList();

      // ViewArticle generation
      $view = new View("Article");
      $view->generateView(array('article' => $article, 'comments' => $comments, 'articlesList' => $articlesList));
    }


    // Add comments to the article
    public function commentArticle($articleId, $username, $comment)
    {
    $this->comments->addComment($articleId, $username, $comment);

      // Reload the article
      $this->article($articleId);
    }


    // Article modification function
    public function changeComment($articleId, $username, $comment, $report, $id)
    {
      $this->comments->updateComment($articleId, $username, $comment, $report, $id);
    }
    public function reportComment($id)
    {
      $this->comments->reportComment($id);
    }
  }
?>
