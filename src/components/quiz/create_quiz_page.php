<?
class Create_Quiz_Page extends Abstract_Page {
  function handleEvents() {
    if(isset($_POST["add_question"])) {
      $_POST["answer"] = array("answers" => $_POST["answer"]);
      $_POST["answer"]["jo_valasz"] = $_POST["jo_valasz"]["on"];
      $_POST["answer"]["question"] = $_POST["question"];
      $_POST["answer"]["jo_valasz"] = $_POST["jo_valasz"];
      if($_POST["answer"]["jo_valasz"] == null) $this->errors[] = "SOLUTION_IS_NULL";
      if(empty($_POST["answer"]["question"])) $this->errors[] = "QUESTION_IS_NULL";
      if(empty($_POST["answer"]["answers"])) $this->errors[] = "ANSWERS_ARE_NULL";
      //$jo_valasz_id = $_POST["jo_valasz"]["on"];
      //var_dump($jo_valasz_id);
      if($_POST["answer"]["answers"][$jo_valasz_id] === "") $this->errors[] = "SOLUTION_IS_NOT_ATTACHED_TO_ANSWER";
      
      if(!empty($this->errors)) {
        echo $this->displayErrors($this->errors);
        return;
      }
      $_SESSION["created_questions"][] = $_POST["answer"];
      unset($_POST["answer"]);
    }
    
    if(isset($_POST["tovabb"])) {
        if(($this->errors = QuizManager::getInstance()->createQuiz($_POST["quiz_name"],$_POST["quiz_description"],$_POST["quiz_points"], $_SESSION["created_questions"])) === true) {
          header("Location: /index.php?page=quiz_list");
          unset($_SESSION["created_questions"]);
        } else {
          echo $this->displayErrors($this->errors);
        }

    }
    
    if(isset($_POST["torles"])) {
      Database::getInstance()->makeQuery("DELETE FROM quizes");
      Database::getInstance()->makeQuery("DELETE FROM quiz_question_answer");
      Database::getInstance()->makeQuery("DELETE FROM answers");
      Database::getInstance()->makeQuery("DELETE FROM questions");
      echo "k";
    }
    
    if(isset($_POST["reset"])) {
      unset($_SESSION["created_questions"]);
    }
    
    
  }
  
  function show() {
    $this->form_open();
    $valasz_valtozo = 0;

    ?>
    <div class="container">
      <p class="h2">Új kvíz létrehozása</p>
      <hr>
      <div class="row w-md-25 mx-auto my-2">
        <div class="col-6">
          Kvíz neve:
        </div>
        <div class="col-6">
          <input type="text" name="quiz_name" placeholder="Kvíz neve" value="<?=$_POST["quiz_name"]?>"/>
        </div>
      </div>
      <div class="row w-md-25 mx-auto my-2">
        <div class="col-6">
          Rövid leírás: 
        </div>
        <div class="col-6">
          <textarea name="quiz_description"/><?=$_POST["quiz_description"]?></textarea>
        </div>
      </div>
      <div class="row w-md-25 mx-auto my-2">  
        <div class="col-6">
          Pontszám:
        </div>
        <div class="col-6">
            <input type="number" name="quiz_points" placeholder="Pontszám"/ value="<?=$_POST["quiz_points"]?>">
        </div>
      </div>
      <p class="h3">Új kérdés</p>
      <div class="mx-auto my-2">  
        <div class="" id="question_0" style="position: relative;">
          <div class="row">
            <div class="col-4">
              <input type="text" name="question" placeholder="Kérdés" class="my-3" value="<?=$_POST["answer"]["question"]?>" >
              <?
              foreach($_POST["answer"]["answers"] as $answer) { 
                ?>
                <input type="text" name="answer[]" placeholder="Válasz" value="<?=$answer?>">
                <input type='radio' name='jo_valasz[on]' value="<?=$valasz_valtozo?>" <?=$valasz_valtozo==$_POST["jo_valasz"]["on"] ? "checked" : "" ?> />
                <? 
                $valasz_valtozo++;
              }
              ?>
              <button type="button" id="plus_valasz" style="position: absolute; right: 0; top: 0;">+</button>
            </div>
          </div>
          
          <input type="submit" class="btn btn-secondary my-5" name="add_question" value="Kérdés hozzáadása">
          <p class="h3">Már meglévő kérdések</p>
          <div class="row">
          <? 
          foreach($_SESSION["created_questions"] as $index => $question) { 
            ?>
            <div class="col-4">
              <?=$question["question"]?>
              <?
              foreach($question["answers"] as $index=>$answer) {
                ?>
                <div class="d-block <?=$question["jo_valasz"]["on"] == $index ? "bg-success" : "bg-danger"?>">
                  <p class="my-1"><?=$answer?></p>
                </div>
                <?
              }
              ?>
            </div>
            <? 
          } 
          ?>
          <div class="row">
          <!--<button type="button" id="plus_answer" style="position:absolute; right: 0;">+</button>-->
        </div>
      </div>
      <div class="m-2">
        <!--<button type="button" id="plus_question" style="position:absolute; right: 0;">+</button>-->
        <input type="submit" class="btn btn-primary" name="tovabb" value="Mentés">
        <input type="submit" class="btn btn-warning" name="reset" value="Kvíz kérdések törlése">
        <?if($_SESSION["id"] == 8) {?>
          <input type="submit" class="btn btn-danger" name="torles" value="Táblák törlése">
        <?}?>
      </div>
    </div>
    
    <script>
    let valasz_counter = 0;
    $("#plus_valasz").click(function () {
      $("#plus_valasz").before("<br>\
      <input type='text' name='answer[]' placeholder='Válasz'>\
      <input type='radio' name='jo_valasz[on]' value='"+valasz_counter+"'/>\
      ");
      valasz_counter++;
    });
                    
    </script>
    <?
    $this->form_close();
  }
  
  function set_page_name() {
  
  }
}