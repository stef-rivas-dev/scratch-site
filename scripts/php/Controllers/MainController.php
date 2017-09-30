<?php

namespace Controllers;

use Structures\Navigation;

class MainController {

	private $pageContent;

	public function renderPage() {
		$content = new \stdClass();

		$content->something = "somethingggg";

		include "./main.php";
	}
}