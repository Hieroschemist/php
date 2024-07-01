<?php
include_once('../conf/conf.php');
include_once('../lib/main.php');


$controller = isset($_GET['controller']) ?  ucfirst($_GET['controller']) : 'Index';


$act = isset($_GET['action']) ? $_GET['action'] : 'index';
loadPage($controller,$act);

?>




