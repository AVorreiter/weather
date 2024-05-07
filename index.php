<?php
namespace avorreiter\weather;
require 'vendor/autoload.php';
use avorreiter\weather\Day;
use avorreiter\weather\History;


$tag1 = new Day('2024-05-30', 'sonnig');
$tag2 = new Day('2024-05-30', 'schön');

$history = new History($tag1);
$history->addToVerlauf($tag2);

foreach ($history->getVerlauf() as $item) {
    echo $item->getWeather()." ";
    echo $item->getTag()."</br>";
}
echo $history->getDay('2024-05-30');