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
      $view = new View("Home");
      $view->generateView(array('articles' => $articles, 'articlesList' => $articlesList, 'page' => $page ));
    }

    // Control page 'infocrypto'
    public function infocrypto($coinId, $coinName){
      require "../app/Libs/ApiDetail.php"; // bon chemin
      // viewHome generation function
      $view = new View("Info");
      $titrePage = "Prix et Infos $coinName ($coinId)";
      $view->generateView(array('Isymbol' => $coinId , 'Nom' => $coinName, 'titrePage' => $titrePage, 'Qcoin' => $Qcoin, 'Qcoin2' => $Qcoin2));
    }
  }
?>
