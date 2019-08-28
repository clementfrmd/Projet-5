<?php
  namespace App\Controllers;

  use App\Models\ArticlesManager;
  use App\Views\View;


  class HomeController
  {
    private $article;


    public function __construct()
    {
      $this->article = new ArticlesManager;
    }


    // Home page view
    public function home()
    {
      $page = 0;
      if (isset($_GET["page"]) && !empty($_GET["page"]) && is_numeric($_GET["page"])){
        $page = intval($_GET["page"]);
      }
      // Get the last 3 articles
      $articles = $this->article->getArticles();
      // Get article's titles
      $articlesList = $this->article->getArticlesList($page);
      // viewHome generation function
      $view = new View("News");
      $view->generateView(array('articles' => $articles, 'articlesList' => $articlesList, 'page' => $page ));
    }
  }
?>
