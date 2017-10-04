<?php

define("APP_DIRECTORY", "../../app");
define("CLASS_DIRECTORY", "../../src/scripts/lib/classes");

require_once APP_DIRECTORY . "/Bootstrap/Bootstrap.php";

$bootstrap = new \Bootstrap\Bootstrap($_SERVER);
$bootstrap->fireOff();
?>