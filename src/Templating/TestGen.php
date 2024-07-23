<?php

namespace Pdfgen\Templating;

class TestGen implements ITemplatable {

	public function __construct(
		private array $data
	)
	{}
	
	public function generate() : string
	{
		$page = Engine::parseTemplate("templates/test.phtml", ['test' => "hello", 'stuff' => ["one", "two", "three"]]);
		return $page;
	}
} 

