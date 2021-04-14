<?php

require 'vendor/autoload.php';
use Michelf\Markdown;

$my_text= "hello **word**";

$my_html = Markdown::defaultTransform($my_text);

echo $my_html;