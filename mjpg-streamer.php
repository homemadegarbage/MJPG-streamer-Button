<?php
$action = $_GET['action'];
$result = `/パス/mjpg-streamer_$action 2>&1`;
echo $result, PHP_EOL;