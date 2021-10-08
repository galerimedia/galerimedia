<?php
if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); 

$url0	= isset($_GET['cont']) ? $_GET['cont'] : null;
$url1	= isset($_GET['mod']) ? $_GET['mod'] : null;
$url2	= isset($_GET['act']) ? $_GET['act'] : null;
$url3	= isset($_GET['idx']) ? $_GET['idx'] : null;
$url4	= isset($_GET['var']) ? $_GET['var'] : null;
$url5	= isset($_GET['ext']) ? $_GET['ext'] : null;

require_once('config/main_config.php');

if ($url0 == 'gadmin')
	{ require_once('controllers/AdminController.php');}
else
	{ require_once('controllers/Controller.php'); }  		

?>
