<?php

namespace Controller;

use View\Structural\Navigation;

class MainController {

	private $pageContent;

	public function renderPage() {
		$content = new \stdClass();

		$content->navigationBar = $this->renderNavigationBar();

		// include "../main.php";
		echo $content->navigationBar;
	}

	protected function renderNavigationBar() {
		$navigationBar = new Navigation\NavigationBar();
		$navigationBar->addNavLink(new Navigation\NavigationLink("foo", "http://bar.com"));
		$navigationBar->addNavLink(new Navigation\NavigationLink("foo", "http://bar.com"));
		return $navigationBar->render();
	}
}