<?php

require "model/dao/notnotDAO.php";

$ROOT_PATH = dirname(dirname(__FILE__));
$PROJECT_PATH = "notnotPHP";

session_start();

function root() {
    global $ROOT_PATH;
    $cours = NotNotDAO::getAll();
    error_log(print_r($cours, true));
    require("$ROOT_PATH/views/root.php");
}

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    root();
}

?>
