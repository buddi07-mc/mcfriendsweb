<?php

$core_path = dirname(__FILE__);

if (empty($GET['page']) || in_array("{$_GET['page']}page.inc.php", scandir('{$core_path}/pages')) == false){
	header('HTTP/1.1 404 Not Found');
	header('Location: index.php?page=404');
	
	die();
}

$include_file = "{$core_path}/pages/{$_GET['page']}.page.inc.php";

?>