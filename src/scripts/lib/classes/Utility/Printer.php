<?php

namespace Utility;

final class Printer {

	public static function prettyPrint($content) {
		echo "<pre>";
		print_r($content);
		echo "</pre>";
	}
}