<?php

$json_in = file_get_contents('http://doy.tech/loadavg/');

$json = json_decode($json_in, true);

echo json_encode($json, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);