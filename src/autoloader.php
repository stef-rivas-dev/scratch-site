<?php

$file_list = [];
function file_search($extension, $start_loc) {
	global $file_list;
	$length = strlen($extension) * -1;

	if (isset($start_loc)) {
		chdir($start_loc);
	}

	$items = glob("*", GLOB_MARK);
	foreach ($items as $item) {
		if (substr($item, -1) === '/') {
			chdir($item);
			file_search($extension);
		} else if (substr($item, $length) === $extension) {
			array_push($file_list, getcwd() . '/' . $item);
		}
	}
	chdir("../");
}

// @file_search(".php", "../");

// echo "<pre>";
// foreach ($file_list as $file) {
// 	var_dump($file); echo "<br/>";
// 	include_once $file;
// }
// echo "</pre>";


/*************************
Messing with spl_autoload
*************************/

function auto_loader($class) {
	include "test.php";
	var_dump($class);
	echo "<br/>";
}