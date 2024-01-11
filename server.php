<?php

// read json file and decode

$albums = json_decode(file_get_contents(__DIR__ .  '/albums.json'));

var_dump($albums);
