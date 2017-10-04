<?php

namespace Controller;

class IndexController implements IController {

	public function indexAction($request) {
		echo "<h1>I am the CONTROLLER</h1>";
	}
}