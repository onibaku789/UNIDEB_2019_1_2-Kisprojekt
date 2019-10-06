<?
class Admin_Page extends Abstract_Page {
  function handleEvents() {
    if(isset($_POST["submit_make_admin"])) {
      Database::getInstance()->makeQuery("UPDATE users SET permission_level = 1 WHERE id = '".$_POST["userid"]."'");
    }
    if(isset($_POST["submit_make_user"])) {
      Database::getInstance()->makeQuery("UPDATE users SET permission_level = 0 WHERE id = '".$_POST["userid"]."'");
    }
    
    if(isset($_POST["submit_make_developer"])) {
      Database::getInstance()->makeQuery("UPDATE users SET permission_level = 2 WHERE id = '".$_POST["userid"]."'");
    }
    
  }
  
  function getPermissionName($permission_level) {
    $nevek = array(
    "0" => "Felhasználó",
    "1" => "Admin",
    "2" => "Fejlesztő"
    );
    return $nevek[$permission_level];
  }
  
  function show() {
    $this->form_open();
    $user = new User($_SESSION["id"]);
    if($user->getPermission() === 0) header("Location: /index.php?page=main");
      ?>
      <div class="container">
          <div class="row">
              <div class="col-6">
                  <input type="text" id="felhasznalonev_input_box" class="form-control" name="username">
              </div>
          </div>
          <table id="mysweet_table" class="table table-hover">
              <thead>
                  <tr>
                      <th>Felhasználó neve</th>
                      
                      <th>Jogosultsága</th>
                      <th>Műveletek</th>
                  </tr>
              </thead>
              <tbody>
                  <?
                  
                  $q = Database::getInstance()->makeQuery("SELECT * FROM users WHERE username like '%".$_POST["username"]."%'");
                  if($q->num_rows > 0) {
                      while($rows = $q->fetch_assoc()) {
                          $felhasznalok[] = $rows;
                      }
                      foreach($felhasznalok as $felhasznalo) {
                          ?>
                              <tr>
                              <td><?=$felhasznalo["username"]?></td>
                              
                              <td><?=$this->getPermissionName($felhasznalo["permission_level"])?></td>
                              <td>
                              <?=($felhasznalo["permission_level"] > 0 && $user->getPermission() == 2 ? "<a onclick=\"submitlink('submit_make_user',".$felhasznalo['id'].")\" class=\"btn btn-primary text-white\">Felhasználóvá varázsolás</a>": "")?>
                              <?=($felhasznalo["permission_level"] < 1 && $user->getPermission() == 2 ? "<a onclick=\"submitlink('submit_make_admin',".$felhasznalo['id'].")\" class=\"btn btn-primary text-white\">Adminná varázsolás</a>": "")?>
                              <?=($felhasznalo["permission_level"] < 2 && $user->getName() == "laczaroli" ? "<a onclick=\"submitlink('submit_make_developer',".$felhasznalo['id'].")\" class=\"btn btn-primary text-white\">Fejlesztővé varázsolás</a>": "")?>
                              </td>
                              </tr>
                          <?
                      }
                  }
                  ?>
              </tbody>
          </table>
      </div>
      <script>
       function submitlink(submit_field, user_id) {
              var submit_data = {
                userid: user_id
              };
              submit_data[submit_field] = 'approved';
              $.ajax({
                  method:"POST",
                  data: submit_data,
                  success: function(data) {
                      $("#mysweet_table").html($(data).find("#mysweet_table").html());
                      console.log(data);
                  }
              });
          }
      $(document).ready(function() {
          $("#felhasznalonev_input_box").on("change paste keyup", function() {
              $.ajax({
                  method:"POST",
                  //dataType:"json",
                  data: $("form").serialize(),
                  success: function(data) {
                      //console.log(data);
                     $("#mysweet_table").html($(data).find("#mysweet_table").html());
                  },
                  error: function(error) {
                      
                  }
              });
          });
      });
      </script>
      <?
      $this->form_close();
  }
  
  function set_page_name() {
  
  }
}