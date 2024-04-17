<?php

$json_string = file_get_contents('dischi.json');

$list = json_decode($json_string);
var_dump($json_string);


// Modifica Dati


header('Content-type: application/json');

echo json_encode($list);