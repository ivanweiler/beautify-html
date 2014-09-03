Beautify Html
=============

Beautify_Html is (almost) direct PHP port of [beautify-html.js](https://github.com/beautify-web/js-beautify/blob/56fac25c86e352d67e6250966695e617d58e92d8/js/lib/beautify-html.js), part of [JS Beautifier](https://github.com/beautify-web/js-beautify/) project.
It indents HTML code, making it beautiful.

Done for fun, no profit, MIT license.

## Usage

```
$html = '<ul><li>Html</li><li>to</li><li>indent</li></ul>';
$beautify = new Beautify_Html(array(
  'indent_inner_html' => false,
  'indent_char' => " ",
  'indent_size' => 2,
  'wrap_line_length' => 32786,
  'unformatted' => ['code', 'pre'],
  'preserve_newlines' => false,
  'max_preserve_newlines' => 32786,
  'indent_scripts'	=> 'normal' // keep|separate|normal
));

echo $beautify->beautify($html);

```
All options are optional.
