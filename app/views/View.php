<?php
  namespace App\Views;

  class View
  {
    private $file;
    // Title view
    private $title;

    public function __construct($action)
    {
      // chosse file from action
      $this->file = "../App/Views/view" . $action . ".php";
    }

    // Generate view file
    public function generateFile($file, $data)
    {
      if (file_exists($file)) {
        extract($data);
        ob_start();
        require $file;
        return ob_get_clean();
      }
      else {
        throw new \Exception("Fichier " . $file . " introuvable");
      }
    }

    // Generate and get the vie
    public function generateView($data)
    {
      // Get the specific part of the view
      $content = $this->generateFile($this->file, $data);
      // Get template section
      $view = $this->generateFile("../App/Views/template.php", array("title" => $this->title, "content" => $content));
      echo $view;
    }
    }
?>