<?php

require "model/dao/notnotDAO.php";

$ROOT_PATH = dirname(dirname(__FILE__));
$PROJECT_PATH = "notnotPHP";

function root() {
    global $ROOT_PATH;
    $data = NotNotDAO::getAll();
    require("$ROOT_PATH/views/root.php");
}

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    root();
}

?>
