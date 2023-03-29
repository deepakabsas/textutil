<?php

/**
 * Created by Pangodream.
 * Date: 14/04/2019
 * Time: 19:03
 */

//Use composer autoload to load class files
require_once __DIR__ . "/../vendor/autoload.php";

//Required package/libraries
use Abhiabsas\Textutil\Counter;

$text = "Aequam memento rebus in arduis servare mentem";
$wordCount = Counter::countWords($text);
echo "The txt contains " . $wordCount . " word(s)\r\n";
