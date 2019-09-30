<?
class Template extends Abstract_Template {
    function handleEvents() {
        if(isset($_POST["submit_logout"])) {
            Authentication::getInstance()->logoutUser();
            header("Location: /index.php?page=main");
        }
    }
    
    function show() {
        ?>
        <html>
            <head>
                <title><?=$_SESSION["title"]." - EasyPlanner"?></title>
                <link rel="stylesheet" href="css/bootstrap.min.css">
                <link rel="stylesheet" href="css/all.min.css">
                <link rel="stylesheet" href="css/site.css">

                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

                <script src="js/jquery.min.js"></script>
            </head>
            <body>
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                  <a class="navbar-brand" href="/index.php?page=main">EasyPlanner</a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                      
                    </ul>
                    <?
                        $this->form_open();
                        if(Authentication::getInstance()->isLogged()) {
                            ?><input type="submit" id="logout" name="submit_logout" class="btn btn-secondary" value="kijelentkezés"><?
                            ?><!--<input type="submit" name="forward_team" class="btn btn-secondary mx-2" value="csapat">--><?
                            ?><a href="/index.php?page=quiz_list" class="btn btn-secondary mx-3">kvízek</a><?
                            ?><a href="/index.php?page=leaderboard" class="btn btn-secondary">ranglista</a><?
                        } else {
                            ?><a href="/index.php?page=login" class="btn btn-secondary">bejelentkezés</a><?
                        }
                        $this->form_close();
                    ?>
                  </div>
                </nav>
                <? if(Authentication::getInstance()->isLogged()) { ?>
                <div class="h3">
                  <i class="fab fa-product-hunt"></i>
                  <?=$_SESSION["points"]?>
                </div>
                <? } ?>
                <div class="content" style="color: #6c757d;">
                <?
                if(isset($_GET["page"]) && $_GET["page"] != "") {
                    if(class_exists($_GET["page"]."_Page") && method_exists($_GET["page"]."_Page", "init")) {
                        $class = $_GET["page"]."_Page";
                        (new $class)->init();
                    } else new Blank404;
                }    
                ?>
                <script src="js/bootstrap.min.js"></script>
                <script src="js/all.min.js"></script>
                <script>
                    $("#errorModal").modal("show");
                    $("#message").modal("show");
                </script>
                </div>
                <div class="footer">
                  <i class="fas fa-crown"></i> Powered by Taco's Kft @ 2019 
                </div>
            </body>
        </html>
        <?
    }
    
    function set_page_name() {
    }
}