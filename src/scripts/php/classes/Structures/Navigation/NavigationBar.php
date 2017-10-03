<?php

namespace Structures\Navigation;

class NavigationBar implements IRenderable {

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

	public function addNavLink(IRenderable $navLink) {
		if ($navLink instanceof IRenderable) {
			array_push($this->navLinks, $navLink);
		}
	}

	public function removeNavLink(IRenderable $navLink) {}

	public function render() {
		$navLinksRender = "";
		foreach($this->navLinks as $link) {
			$navLinksRender .= $link->render();
		}

		return "<ul class=\"nav-bar\">{$navLinksRender}</ul>";
	}
}