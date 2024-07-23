<?php

namespace Pdfgen;

use Pdfgen\Templating\ITemplatable;

class Pdfgen {

	public static function generate(ITemplatable $template)
	{
		$html = $template->generate();
		$tempId = uniqid();
		$inputPath = "/tmp/{$tempId}.html";
		$outputPath = "/tmp/{$tempId}.pdf";
		file_put_contents($inputPath, $html);
		$command = Pdfgen::generateCommandString($inputPath, $outputPath);
		shell_exec($command);
		//TODO - cleanup files in tmp
		return $outputPath;
	}

	private static function generateCommandString(string $input, string $output) : string {
		return "chromium --headless=new --disable-gpu --print-to-pdf={$output} --no-pdf-header-footer file://{$input}";
	}
}


