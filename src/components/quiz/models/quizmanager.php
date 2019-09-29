<?
class QuizManager {
  private static $instance = null;
  
  private function __construct() {}
  
  public static function getInstance() {
      if(self::$instance === null) {
          self::$instance = new self;
      }
      return self::$instance;
  }
  function createQuiz($quiz_name,$description, $quiz_points, array $quiz_questions) {
    if(empty($quiz_name)) $errors[] = "QUIZ_NAME_IS_EMPTY";
    if(empty($description)) $errors[] = "DESCRIPTION_IS_EMPTY";
    if(empty($quiz_points)) $errors[] = "QUIZ_POINTS_FIELD_IS_EMPTY";
    
    if(!empty($errors)) return $errors;
    
    $quiz_insert = Database::getInstance()->makeQuery("INSERT INTO quizes(name,description, points)
                                                        VALUES ('".$quiz_name."','".$description."','".$quiz_points."')");
    $quiz_id = Database::getInstance()->getLastId();

    foreach($quiz_questions as $question) {
      $question_insert = Database::getInstance()->makeQuery("INSERT INTO questions(question, quiz_id)
                                                                VALUES('".$question["question"]."','".$quiz_id."')");
      $question_id = Database::getInstance()->getLastId();
      foreach($question["answers"] as $index=>$answer) {
        if(strlen($answer) == 0) continue;
        
        $answer_insert = Database::getInstance()->makeQuery("INSERT INTO answers(valasz, question_id, jo_valasz)
                                                                VALUES('".$answer."','".$question_id."','".(($question["jo_valasz"]["on"]==$index)?1:0)."')");
        
        $quiz_question_answer_insert = Database::getInstance()->makeQuery("INSERT INTO quiz_question_answer(quiz_id, answer_id, question_id)
                                                                          VALUES('".$quiz_id."','".Database::getInstance()->getLastId()."','".$question_id."')");
      }
    }
    return true;
  }
  
  function quizDoneByUser($quiz_id, $user_id) {
    Database::getInstance()->makeQuery("INSERT INTO done_quizes(quiz_id, user_id)
                                        VALUES('".$quiz_id."','".$user_id."')");
  }
}