<?
class Answer {
  private $id;
  
  function __construct($id) {
    $this->id = $id;
  }
  
  function getAnswerSolution() {
    return Database::getInstance()->makeQuery("SELECT jo_valasz FROM answers WHERE id = '".$this->id."'")->fetch_assoc()["jo_valasz"];
  }
}