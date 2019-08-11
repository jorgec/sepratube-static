<?php

    $url = $_GET['v'];
    $date = new DateTime();

    $log = $date->format('Y-m-d H:i:s') . ',' . $url;
    $f = file_put_contents('logs.txt', $log.PHP_EOL , FILE_APPEND | LOCK_EX);
