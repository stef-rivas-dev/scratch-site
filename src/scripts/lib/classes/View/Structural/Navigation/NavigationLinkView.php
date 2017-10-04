<?php

namespace View\Structural\Navigation;

use View\Structural\IView;

class NavigationLinkView implements IView {

	/**
	 * @var string
	 */
	private $text;

	/**
	 * @var string
	 */
	private $destination;

	public function __construct($text = '', $dest = '') {
		$this->text = $text;
		$this->destination = $dest;
	}

	public function render() {
		return "<li class=\"nav-link\"><a href=\"{$this->destination}\">{$this->text}</a></li>";
	}
}