<?php

namespace View\Structural\Navigation;

use View\Structural\IView;

class NavigationBarView implements IView {

	/**
	 * @var int
	 */
	private $navCount;

	/**
	 * @var array
	 */
	private $navLinks = [];

	public function getNavLinkCount() {
		return $this->navCount;
	}

	public function getNavLinks() {
		return $this->navLinks();
	}

	public function setNavLinks() {}

	public function addNavLink(IView $navLink) {
		if ($navLink instanceof IView) {
			array_push($this->navLinks, $navLink);
		}
	}

	public function removeNavLink(IView $navLink) {}

	public function render() {
		$navLinksRender = "";
		foreach($this->navLinks as $link) {
			$navLinksRender .= $link->render();
		}

		return "<ul class=\"nav-bar\">{$navLinksRender}</ul>";
	}
}