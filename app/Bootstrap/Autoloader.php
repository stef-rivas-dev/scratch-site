<?php

namespace Bootstrap;

class Autoloader {

	private static $singleton;

	private function __construct() {}

	public static function getInstance() {
		if (!isset(self::$singleton)) {
			self::$singleton = new self();
		}
		
		return self::$singleton;
	}

	public function register() {
		spl_autoload_extensions(".php, .inc");
		spl_autoload_register([$this, "loadClass"]);
	}

	public function loadClass($fullyQualified) {

		// Normalize path
		$fullyQualified = trim($fullyQualified, "\\");
		$qualified = strtolower($fullyQualified);

		$namespaces = explode("\\", $qualified);

		// Capture the end of the string up to the length of 'controller'
		$searchStr = substr($namespaces[count($namespaces)-1], -10);

		if (strpos($searchStr, "model") !== FALSE) {
			$this->loadModel($fullyQualified);
		} else if (strpos($searchStr, "view") !== FALSE) {
			$this->loadView($fullyQualified);
		} else if (strpos($searchStr, "controller") !== FALSE) {
			$this->loadController($fullyQualified);
		}
	}

	protected function loadModel($qualified) {
		include CLASS_DIRECTORY . '/' . str_replace("\\", '/', $qualified) . ".php";
	}

	protected function loadView($qualified) {
		include CLASS_DIRECTORY . '/' . str_replace("\\", '/', $qualified) . ".php";
	}

	protected function loadController($qualified) {
		include CLASS_DIRECTORY . '/' . str_replace("\\", '/', $qualified) . ".php";
	}

	public function fileSearch($extension = '', $loc = '') {
		global $file_list;

		if (!isset($file_list)) {
			$file_list = [];
		}

		$length = strlen($extension) * -1;

		if (isset($start_loc)) {
			chdir($start_loc);
		}

		$items = glob("*", GLOB_MARK);
		foreach ($items as $item) {
			if (substr($item, -1) === '/') {
				chdir($item);
				Autoloader::file_search($extension);
			} else if (substr($item, $length) === $extension) {
				array_push($file_list, getcwd() . '/' . $item);
			}
		}
		chdir("../");
	}
}