<?php
class User {
    private $id;

    public function __construct($id) {
        $this->id = $id;
    }

    function getTeamsId() {
        $q = Database::getInstance()->makeQuery("SELECT team_id FROM team_user WHERE user_id = '".$this->id."'");
        if($q->num_rows > 0) {
            while($rows = $q->fetch_assoc())
                $team_container[] = $rows["team_id"];
        }
        return isset($team_container) ? $team_container : array();
    }

    function getPermission() {
      return Database::getInstance()->makeQuery("SELECT permission_level FROM users WHERE id = '".$this->id."'")->fetch_assoc()["permission_level"];
    }

    function getName() {
        return Database::getInstance()->makeQuery("SELECT username FROM users WHERE id = '".$this->id."'")->fetch_assoc()["username"];
    }

    function addPoints($points) {
        $_SESSION["points"] += $points;
        return Database::getInstance()->makeQuery("UPDATE users SET points = points + ".$points." WHERE id = '".$this->id."'");;
    }
}
