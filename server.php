<?php

// read json file and decode
$albums = json_decode(file_get_contents(__DIR__ .  '/albums.json'));

// sets the HTTP header to indicate that the content being sent is in JSON format
header('Content-Type: application/json');
// Converts the PHP variable $albums into a JSON-formatted string
echo json_encode($albums);
