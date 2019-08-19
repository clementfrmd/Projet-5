<?php
  namespace App\Controllers;

  use App\Models\UsersManager;
  use App\Models\ArticlesManager;
  use App\Models\CommentsManager;
  use App\Models\Articles;
  use App\Views\View;

  class UsersController
  {
    private $users;


    public function __construct()
    {
      $this->users = new UsersManager;
      $this->article = new ArticlesManager;
      $this->comments = new CommentsManager;
    }


    // Home Administration
    public function homeAdmin()
    {
      // Show all articles titles
      $articles = $this->article->getArticlesList();
      // Show reported comments
      $reportComments = $this->comments->getReport();

      // viewAdminHome
      $view = new View("AdminHome");
      $view->generateView(array('articlesList' => $articles, 'comments' => $reportComments));
    }


    // Show add Articles
    public function addArticleView()
    {
      // List of titles
      $articles = $this->article->getArticlesList();

      // viewAddArticle
      $view = new View("AddArticle");
      $view->generateView(array('articlesList' => $articles));
    }


    // Username and password authentication
    public function login($username, $password)
    {
      // Get Username
      $user = $this->users->getUser($username);

      // Password verification
      $checkPassword = password_verify($password, $user['password']);
      // Log if paswword correct
      if ($checkPassword) {
        $_SESSION['id'] = $user['id'];
        $_SESSION['username'] = $user['username'];

        // Show home administration
        $this->homeAdmin();
      }
      // Else show error message
      else {
        $errorLogin = "Votre identifiant ou votre mot de passe est incorrect";
        require('../app/Views/viewLogin.php');
      }
    }


    // Deconnection
    public function disconnect()
    {
      $_SESSION = array();
      session_destroy();

      // Deleting connexion cookies
      setcookie('login', '');
      setcookie('pass_hache', '');
    }


    // Delete comments
    public function eraseComment($id)
    {
      $this->comments->deleteComment($id);
      // Shows home administration
      $this->homeAdmin();
    }


    // Shows article to modify
    public function articleAdmin($articleId)
    {
      // Get article
      $article = $this->article->getArticle($articleId);
      // Get comments
      $comments = $this->comments->getComments($articleId);
      // Get articles titles
      $articlesList = $this->article->getArticlesList();

      // viewArticleAdmin
      $view = new View("ArticleAdmin");
      $view->generateView(array('article' => $article, 'comments' => $comments, 'articlesList' => $articlesList));
    }


    // Add an article
   public function newArticle($title, $content, $statut)
    {
     $this->article->addArticle($title, $content, $statut);
     header("Location: index.php");
   }


    // Modify an article
    public function changeArticle($title, $content, $statut, $id)
    {
      $this->article->updateArticle($title, $content, $statut, $id);

     header("Location: index.php?action=articleAdmin&id=".$id);
    }


    // Delete article
    public function eraseArticle($id)
    {
      $this->article->deleteArticle($id);
      // Return to home administration
      $this->homeAdmin();
    }
  }
?>
