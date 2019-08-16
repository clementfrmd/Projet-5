<?php
  namespace App\Models;

  use App\Config\PDOManager;


  class UsersManager extends PDOManager
  {
    // Get user data
    public function getUser($username)
    {
      $sql = "SELECT id, username, password FROM users WHERE username = ?"; //Empêche injection SQL = requête paramétrée
      $req = $this->executeRequest($sql, array($username));
      $user = $req->fetch();

      return $user;
    }
  }
?>
