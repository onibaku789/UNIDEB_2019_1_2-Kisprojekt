<?
class Authentication {
    private static $instance = null;

    private function __construct() {}
    
    public static function getInstance() {
        if(self::$instance === null) {
            self::$instance = new self;
        }
        return self::$instance;
    }

    function authenticate($username, $password) {
        $users = Database::getInstance()->makeQuery("SELECT id,points,password FROM users WHERE username = '".$username."'");
        $user_data = $users->fetch_assoc();
        //var_dump($hash_password);
        if($users->num_rows > 0) { 
            if(password_verify($password, $user_data["password"])) {
                $_SESSION["id"] = $user_data["id"];
                $_SESSION["points"] = $user_data["points"];
                return true;
            } else {
                $errors[] = "INVALID_PASSWORD";
            }
        } else {
            $errors[] = "INVALID_USERNAME";
        }
        return $errors;
    }
    
    function createNewUser($username, $password, $password_validate, $email) {
        if($password !== $password_validate) $errors[] = "PASSWORDS_ARE_NOT_MATCH";
        if(!preg_match('@[A-Z]@', $password) || !preg_match('@[a-z]@', $password) || !preg_match('@[0-9]@', $password)) $errors[] = "PASSWORD_REQUIRES_CHARACTERS";
        if(strlen($password) < 6) $errors[] = "PASSWORD_IS_TOO_SHORT";
        if(strlen($password) > 64) $errors[] = "PASSWORD_IS_TOO_LONG";
        if(strlen($username) < 3) $errors[] = "USERNAME_IS_TOO_SHORT";
        if(strlen(password) > 32) $errors[] = "USERNAME_IS_TOO_LONG";
        $unique_username = Database::getInstance()->makeQuery("SELECT id FROM users WHERE username = '".$username."'");
        if($unique_username->num_rows > 0) $errors[] = "USERNAME_MUST_BE_UNIQUE";
        
        if(!empty($errors)) return $errors;
        
        $newUser = Database::getInstance()->makeQuery("INSERT INTO users(username, password, email)
                                                        VALUES('".$username."','".password_hash($password, PASSWORD_DEFAULT )."', '".$email."')");
        
        return true;
    }
    
    function logoutUser() {
        session_destroy();
    }
    
    function isLogged() {
        return $_SESSION["logged"];
    }
}