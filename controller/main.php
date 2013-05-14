<?php 

require 'model/dao/notnotDAO.php';

$ROOT_PATH = dirname(dirname(__FILE__));
$PROJECT_PATH = "notnotPHP";

session_start();

function root() {
    global $ROOT_PATH;
    
    require("$ROOT_PATH/views/root.php");
}

function result() {
    global $ROOT_PATH;
    
    require ("$ROOT_PATH/views/result.php");
}

?>
