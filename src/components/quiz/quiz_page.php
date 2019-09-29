<?
class Quiz_Page extends Abstract_Page {
    function handleEvents() {
        if(isset($_POST["start_quiz"])) {
            $quiz = new Quiz($_GET["quiz_sorszam"]);
            $_SESSION["quiz_stat"]["question_container"] = $quiz->getQuizQuestions();
            $_SESSION["quiz_stat"]["question"] = array_shift($_SESSION["quiz_stat"]["question_container"]);
            $_SESSION["quiz_stat"]["id"] = $_GET["quiz_sorszam"];
            $_SESSION["quiz_stat"]["points"] = $quiz->getQuizPoints();
            $_SESSION["quiz_stat"]["jo_valasz_counter"] = 0.0;
            $_SESSION["quiz_stat"]["osszes_valasz"] = 0;
        }
        
        if(isset($_POST["back_to_quiz_list"])) {
            header("Location: /index.php?page=quiz_list");
        }
        
        if(isset($_POST["next_question"])) {
            if(!isset($_POST["answer"])) {
                echo "Nem válaszotttál kérdést báttya";
                return;
            } else {
              $_SESSION["quiz_stat"]["osszes_valasz"]++;
              $answer = new Answer($_POST["answer"]);
              if($answer->getAnswerSolution()) {
                $_SESSION["quiz_stat"]["jo_valasz_counter"]++;
              }
            }
            if(count($_SESSION["quiz_stat"]["question_container"]) > 0) {
                $_SESSION["quiz_stat"]["question"] = array_shift($_SESSION["quiz_stat"]["question_container"]);
            } else {
                unset($_SESSION["quiz_stat"]["question"]);
                //debug
                echo "<pre>";
                var_dump($_SESSION["quiz_stat"]["osszes_valasz"]);
                echo "</pre>";
                if(($_SESSION["quiz_stat"]["jo_valasz_counter"]/$_SESSION["quiz_stat"]["osszes_valasz"])*100 > 80) {
                  $this->showResult($_SESSION["quiz_stat"], true);
                  QuizManager::getInstance()->quizDoneByUser($_SESSION["quiz_stat"]["id"], $_SESSION["id"]);
                  $user = new User($_SESSION["id"]);
                  $user->addPoints($_SESSION["quiz_stat"]["quiz_points"]);
                  //header("Location: /index.php?page=quiz_list");
                } else {
                  $this->showResult($_SESSION["quiz_stat"], false);
                }
                unset($_SESSION["quiz_stat"]);
            }
        }
        
        if(isset($_POST["add_quiz"])) {
          QuizManager::getInstance()->createQuiz("tesztQuiz","rovid_leiras", 10, array(
                                                                                  array(
                                                                                    "question"=>"Mizu?"
                                                                                    , "answers" => array(
                                                                                      array(
                                                                                      "valasz"=>"Semmi különös"
                                                                                      ,"jo_valasz"=>false)))));
        }
    }
    
    function show() {
        $quiz = new Quiz($_GET["quiz_sorszam"]);
        
        $this->form_open();

        ?><input type="submit" name="add_quiz"/><?
        if(!isset($_SESSION["quiz_stat"])) {
        ?>
        <div class="container w-md-25 text-center mt-5 bg-light p-3">
            <h1><?=$quiz->getQuizName()?></h1>
            <hr>
            <p><?=$quiz->getQuizLDescription()?></p>
            <input type="submit" class="btn btn-primary mx-2" name="start_quiz" value="Kvíz kezdése">
            <input type="submit" class="btn btn-secondary mx-2" name="back_to_quiz_list" value="Vissza a kvízekhez">
        </div>
        <?
        } else {
            ?>
            <div class="container text-center w-md-25 bg-secondary p-5 border border-rounded">
                <h3 class="text-white mb-5"><?=$_SESSION["quiz_stat"]["question"]["question"]?></h3>
                <?

                foreach($_SESSION["quiz_stat"]["question"]["answers"] as $answer) {
                ?>
                    <div class="my-2 p-1 mx-auto" style="width: fit-content">
                        <input type="radio" id="<?=$answer["id"]?>" name="answer" class="" value="<?=$answer["id"]?>">
                        <label for="<?=$answer["id"]?>" class="btn btn-primary"  style="margin-bottom: 0"">
                            <?=$answer["valasz"]?>
                        </label>
                    </div>
                <?
                }
                ?>
                <div class="mt-5">
                  <input type="submit" name="exit_quiz" value="Befejezés" class="btn btn-danger float-left">
                  <input type="submit" name="next_question" value="Következő kérdés" class="btn btn-success float-right">
                </div>
            </div>
            <?
        }
        $this->form_close();
        
    }
    
    function showResult($quiz_stat, $state) {

      ?>
        <!-- Modal -->
        <div class="modal fade" id="errorModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header <?=$state ? "bg-success" : "bg-danger"?> text-white">
                    <h5 class="modal-title"><?=$state ? "Sikeres kvíz!" : "Sikertelen kvíz!"?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <h3><?=number_format(($quiz_stat["jo_valasz_counter"]/$quiz_stat["osszes_valasz"])*100,0) ?>%</h3>
                    <? if($state) { ?>
                    <p class="h5">
                    Gratulálunk!<br>
                    Jutalmad<br>
                     <?=$quiz_stat["points"]?> pont
                    </p>
                    <? } else { ?>
                    <p class="h5">
                    Sajnos ezúttal nem sikerült!<br>
                    De ne csüggedj, megpróbálhatod újra!<br>
                    </p>
                    <? } ?>
                </div>
                <div class="modal-footer">
                    <?
                    if($state) { 
                      ?>
                      <a href="/index.php?page=quiz_list" class="btn btn-secondary"">Vissza a kvízlistához.</a>
                      <?
                    } else {
                      ?>
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Bezárás</button>
                      <?
                    }
                    ?>
                </div>
                </div>
            </div>
        </div>
      <?
    }
    
    function set_page_name() {
        return "Kvíz";
    }
}