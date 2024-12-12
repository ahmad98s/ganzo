<?php
// Takes raw data from the request
$json = file_get_contents('php://input');

// Converts it into a JSON object
$data = json_decode($json);
var_dump($data);
?>