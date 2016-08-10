<?php

/*
* Note: Tesseract for Mac is installed via Homebrew
* To get tesseract directory , run `brew info tesseract` on terminal
*/

require __DIR__ . '/vendor/autoload.php';
?>
<img src="qbf.png" />
<?php

echo (new TesseractOCR(__DIR__ . '/qbf.png'))->executable('/usr/local/Cellar/tesseract/3.04.01_1/bin/tesseract')->run();
