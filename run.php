<?php

use Pdfgen\Pdfgen;
use Pdfgen\Templating\TestGen;

require 'vendor/autoload.php';

// Just a bootstrap file for testing
$template = new TestGen(["test" => "Hello world"]);
Pdfgen::generate($template);
