<?php
require_once 'beautify-html.php';

$html = file_get_contents('http://www.google.com/search?q=cats');

$beautify = new Beautify_Html(array(
 	'indent_inner_html' => false,
 	'indent_char' => " ",
	'indent_size' => 2,
 	'wrap_line_length' => 32786,
 	'unformatted' => ['code', 'pre'],
 	'preserve_newlines' => false,
 	'max_preserve_newlines' => 32786,
	'indent_scripts'	=> 'normal', // keep|separate|normal
));

$start = microtime(true);
echo '<pre>'.htmlspecialchars( $beautify->beautify($html) ) . '</pre>';
var_dump(microtime(true)-$start);
