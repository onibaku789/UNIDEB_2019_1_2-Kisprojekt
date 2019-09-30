<?
class Launcher {
    function launch() {
        session_start();
        
        $this->route();
        
        (new Template)->init();
    }
    
    protected function route() {
        $allowed_pages = array("main"=>true,"login"=>true,"register"=>true);
        if(!Authentication::getInstance()->isLogged() && $allowed_pages[$_GET["page"]] !== true ) {
          header("Location: /index.php?page=main");
        }
        if (isset($_SESSION["quiz_stat"]) && !isset($_GET["quiz_sorszam"])) {
          unset($_SESSION["quiz_stat"]);
        }
        if (Authentication::getInstance()->isLogged() && ($_GET["page"] == "login" || $_GET["page"] == "register")) {
            header("Location: index.php?page=main");
        }
    }

    
}