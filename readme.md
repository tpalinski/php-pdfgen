# php-pdfgen
Utility used for generating pdf files based on html templates in php

## Usage
There are 2 main parts of this application - main generator class [Pdfgen.php](./Pdfgen.php) and [ITemplatable instances](./Templating/ITemplatable.php);

### Pdfgen
This class is responsible for actual generation of pdf files. Use Pdfgen::generate() to generate pdf based on the provided template and retrieve the path of the saved file.

### ITemplatable
Interface implemented by all templates, used for generating html dynamically based on user data. Implement it in your own custom template;
