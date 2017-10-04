<?php

namespace Bootstrap;

use Utility\Printer;
use Bootstrap\Autoloader;

class Bootstrap {

	public $serverInfo;

	public function __construct($serverInfo) {
		include_once CLASS_DIRECTORY . "/Utility/Printer.php";
		Printer::prettyPrint($serverInfo);

		$this->serverInfo = $serverInfo;
	}

	public function fireOff() {
		require_once APP_DIRECTORY . "/Bootstrap/Autoloader.php";

		$autoloader = Autoloader::getInstance();
		$autoloader->register();

		// test
		$obj = new \Controller\IndexController();
		$obj->indexAction($this->serverInfo);
		$obj = new \Model\UserModel();
		$obj->find($this->serverInfo);
		$obj = new \View\Structural\Navigation\NavigationLinkView("I'm the VIEW", "http://scratch-site:8080");
		echo $obj->render();
	}
}