<?
class Leaderboard_Page extends Abstract_Page {
  function handleEvents() {
  
  }
  
  function show() {
    
    ?>
      <table class="container table table-hover">
        <thead>
          <tr>
            <td>#</td>
            <td>Név</td>
            <td>Pontszám</td>
          </tr>
        </thead>
        <tbody>
          <?
            $leadercolors = array("gold","silver","#cd7f32");
            foreach($this->getAllUsers() as $index=>$user) {
              ?>
              <tr style="background: <?=$leadercolors[$index]?>">
                <td><?=$index+1?></td>
                <td><?=$user["username"]?></td>
                <td><?=$user["points"]?></td>
              </tr>
              <?
            }
          ?>
        </tbody>
      </table>
    <?
  }
  
  function getAllUsers() {
    $sql = Database::getInstance()->makeQuery("SELECT points, username FROM users WHERE points > 0 ORDER BY points DESC, username ASC");
    while($rows = $sql->fetch_assoc()) {
      $temp[] = $rows;
    }
    return $temp;
  }
  
  function set_page_name() {
  
  }
}