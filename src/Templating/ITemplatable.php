<?php

namespace Pdfgen\Templating;

// Top level interface used for generating invoices in html form
interface ITemplatable {
	public function generate() : string;
}
