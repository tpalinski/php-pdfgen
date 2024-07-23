<?php

namespace Pdfgen\Templating;

class TestGen implements ITemplatable {

	public function __construct(
		private array $data
	)
	{}
	
	public function generate() : string
	{
		$page = "
		<head>
			<title> Faktura </title>
		</head>
		<body>
			{$this->data['test']}
		</body>
		";
		return $page;
	}
} 

