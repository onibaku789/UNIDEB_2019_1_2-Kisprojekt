<?
class Quiz {
    private $id;
    
    function __construct($id) {
        $this->id = $id;
    }
    
    
    function getQuizName() {
        return Database::getInstance()->makeQuery("SELECT name FROM quizes WHERE id = '".$this->id."'")->fetch_assoc()["name"];
    }
    
    function getQuizLDescription() {
        return Database::getInstance()->makeQuery("SELECT description FROM quizes WHERE id = '".$this->id."'")->fetch_assoc()["description"];
    }
    
    function getQuizPoints() {
        return Database::getInstance()->makeQuery("SELECT points FROM quizes WHERE id = '".$this->id."'")->fetch_assoc()["points"];
    }
    
    function getQuizQuestions() {
        $result = array();
        $question_sql_ids = Database::getInstance()->makeQuery("SELECT question_id FROM quiz_question_answer WHERE quiz_id = '".$this->id."'");
        while($rows = $question_sql_ids->fetch_assoc()) {
            $question_ids[] = $rows["question_id"];
        }
        
        $question_ids = array_unique($question_ids);
        
        $question_list = Database::getInstance()->makeQuery("SELECT * FROM questions WHERE id in (".(implode(",",$question_ids)).")");
        while($rows = $question_list->fetch_assoc()) {
            $result[$rows["id"]] = $rows;
        }
        
        //var_dump($question_ids);
        foreach($question_ids as $question_id) {
            $answer_ids = array();
            $answer_sql_ids = Database::getInstance()->makeQuery("SELECT answer_id FROM quiz_question_answer WHERE question_id = '".$question_id."'");
            while($rows = $answer_sql_ids->fetch_assoc()) {
                $answer_ids[] = $rows["answer_id"];
            }
            
            //var_dump($answer_ids);
            
            $answer_list = Database::getInstance()->makeQuery("SELECT * FROM answers WHERE id in (".(implode(",",$answer_ids)).")");
            while($rows = $answer_list->fetch_assoc()) {
                $result[$question_id]["answers"][] = $rows;
            }
        }
        return $result;
    }
}