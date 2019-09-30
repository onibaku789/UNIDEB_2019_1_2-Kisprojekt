<?
class Main_Page extends Abstract_Page {
    function handleEvents() {
        if(isset($_POST["submit_logout"])) {
            Authentication::getInstance()->logoutUser();
            $_SESSION["logged"] = false;
        }
    }
    function show() {
        $this->form_open();
        if(Authentication::getInstance()->isLogged()) $this->showForUsers();
        else $this->showForGuests();
        $this->form_close();
    }
    
    function showForGuests() {
      ?>
        <div class="container text-center">
          <p class="display-4 p-5">Üdvözlünk az EasyPlanner weboldalán!</p>
          <p class="h5">
            Oldalunkon lehetőséged nyílik olyan kvízeket kitölteni, amelyek felmérik a tudásod különböző területeken, és a legjobb hír pedig hogy
            <p class="h2 text-uppercase">tudsz versenyezni másokkal!</p>
            Nincs más teendőd mint <a href="/index.php?page=register">regisztrálni</a>, ezután pedig már el is kezdheted a pontvadászatot!
          </p>
        </div>
      <?
    }
    
    function showForUsers() {
      $user = new User($_SESSION["id"]);
      ?>
        <div class="container text-center">
          <p class="display-4 p-5">Jó szórakozást kívánunk, <?=$user->getName()?>!</p>
        <div class="container text-center">
      <?
    }
    
    function set_page_name() {
        return "Kezdőlap";
    }
}