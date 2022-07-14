<?php

require 'vendor/autoload.php';
use iren\composer_lesson\Library;
use psr\log;

echo("<h1>Wellcome to the easy calculator written by php</h1> <hr>");

$library = new Library();
$library->library();

$log = new Log;