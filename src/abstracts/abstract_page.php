<?
abstract class Abstract_Page {
    public $errors = array();

    function init() {
        $_SESSION["title"] = $this->set_page_name();
        $this->handleEvents();
        $this->show();
    }

    function form_open($params = "") {
        ?><form method="post"<?=$params?>><?
    }

    function form_close() {
        ?></form><?
    }

    function displayErrors($errors) {
        ob_start();
        ?>
        <!-- Modal -->
        <div class="modal fade" id="errorModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header bg-danger text-white">
                    <h5 class="modal-title">Hiba történt</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p><?=implode('<br />',$errors)?></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Bezárás</button>
                </div>
                </div>
            </div>
        </div>
        <?
        return ob_get_clean();
    }

    abstract function handleEvents();
    abstract function show();
    abstract function set_page_name();
}