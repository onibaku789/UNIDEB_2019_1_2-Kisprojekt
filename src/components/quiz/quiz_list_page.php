<?
class Quiz_List_Page extends Abstract_Page {
    function handleEvents() {
    
    }
    
    function show() {
        $this->form_open();
        
        ?>
        <table class="container table table-bordered table-hover">
            <thead>
                <tr>
                    <td>Kvíz neve</td>
                    <td>Pontszám</td>
                </tr>
            </thead>
            <tbody>
                <?
                foreach($this->getUndonedQuizList() as $quiz) {
                    ?><tr>
                      <td><?=$quiz["name"]?></td>
                      <td><?=$quiz["points"]?></td>
                      <td><a href="/index.php?page=quiz&quiz_sorszam=<?=$quiz["id"]?>">Kvíz kezdése</a></td>
                    </tr><?
                }
                
                foreach($this->getDoneQuizList() as $quiz) {
                  ?><tr class="bg-success text-white">
                    <td><?=$quiz["name"]?></td>
                    <td><?=$quiz["points"]?></td>
                    <td>Ezt a kvízt már kitöltötted</a>
                  </tr><?
                }
                ?>
            </tbody>
        </table>
        <?
        
        if($_SESSION["id"] == 8 || $_SESSION["id"] == 7 || $_SESSION["id"] == 6) {
          ?><a href="/index.php?page=create_quiz" class="btn btn-primary" style="position:fixed; bottom: 0;">Új kvíz létrehozása</a><?
        }
        $this->form_close();
    }
    
    function getUndonedQuizList() {
        $quiz_doned_by_user = Database::getInstance()->makeQuery("SELECT quiz_id FROM done_quizes WHERE user_id = '".$_SESSION["id"]."'");
        while($rows = $quiz_doned_by_user->fetch_assoc()) {
            $quizes_id_list[] = $rows["quiz_id"];
        }
        
        if($quiz_doned_by_user->num_rows === 0) $quizes_id_list = array(-1);
        
        $quiz_list = Database::getInstance()->makeQuery("SELECT * FROM quizes WHERE id not in (".(implode(",",$quizes_id_list)).")");
        while($rows = $quiz_list->fetch_assoc()) {
            $quizes[] = $rows;
        }
        
        return $quizes;
    }
    
    function getDoneQuizList() {
            $quiz_doned_by_user = Database::getInstance()->makeQuery("SELECT quiz_id FROM done_quizes WHERE user_id = '".$_SESSION["id"]."'");
        while($rows = $quiz_doned_by_user->fetch_assoc()) {
            $quizes_id_list[] = $rows["quiz_id"];
        }
        
        if($quiz_doned_by_user->num_rows === 0) $quizes_id_list = array(-1);
        
        $quiz_list = Database::getInstance()->makeQuery("SELECT * FROM quizes WHERE id in (".(implode(",",$quizes_id_list)).")");
        while($rows = $quiz_list->fetch_assoc()) {
            $quizes[] = $rows;
        }
        
        return $quizes;
    }
    
    function set_page_name() {
        return "Kvíz lista";
    }
}