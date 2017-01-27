<?php 
require_once(__DIR__.'/vendor/autoload.php');
use League\Csv\Reader;


$reader = Reader::createFromPath(__DIR__.'/cs_figures.csv');
$keys = ['name', 'birthyear', 'title', 'role','picture', 'bio'];
$data = $reader->fetchAll();
foreach ($data as $key => $keys) {
 	//print_r($data[1][5]);
 	$data;
 	break;
 }
// print_r($reader);
 