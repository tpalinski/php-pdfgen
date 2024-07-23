<?php

namespace Pdfgen\Templating;

class Engine {
	public static function parseTemplate(string $path, array $symbols = []) {
		extract($symbols);
		ob_start();
		include($path);
		$res = ob_get_clean();
		return $res;
	}
}
