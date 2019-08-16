<?php
  namespace App\Models;

  use App\Config\PDOManager;


  class CommentsManager extends PDOManager
  {
    // Get comments from article
    public function getComments($articleId)
    {
      $sql = "SELECT id, articleId, username, comment, DATE_FORMAT(dateCom, '%d/%m/%Y à %Hh%imin%ss') AS dateCom_fr, report FROM comments WHERE articleId = ? ORDER BY dateCom DESC";

      $comments = $this->executeRequest($sql, array($articleId));

      return $comments;
    }

    // Get reported comments
    public function getReport()
    {
      $sql = "SELECT id, articleId, username, comment, DATE_FORMAT(dateCom, '%d/%m/%Y à %Hh%imin%ss') AS dateCom_fr, report FROM comments WHERE report = 1";

      $reportComments = $this->executeRequest($sql);

      return $reportComments;
    }

    // Add comments
    public function addComment($articleId, $username, $comment)
    {
      $sql = "INSERT INTO comments(articleId, username, comment, dateCom, report) VALUES(?,?,?,NOW(), 0)";
      $newComment = $this->executeRequest($sql, array($articleId, $username, $comment));

      return $newComment;
    }

    // Modify comments
    public function updateComment($articleId, $username, $comment, $report, $id)
    {
      $sql = "UPDATE comments SET articleId = ?, username = ?, comment = ?, report = ? WHERE id = ?";
      $newComment = $this->executeRequest($sql, array($articleId, $username, $comment, $report, $id));

      return $newComment;
    }
public function reportComment($id)
{
  $sql = "UPDATE comments SET report = 1 WHERE id = ?";
      $newComment = $this->executeRequest($sql, array($id));

      return $newComment;
}
    // Delete comments
    public function deleteComment($id)
    {
      $sql = "DELETE FROM comments WHERE id = ?";
      $this->executeRequest($sql, array($id));
    }
  }
?>
