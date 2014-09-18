<?php

/**
 * Script to return server's _private_ ip address on Windows
 * Tested on Windows 7 SP1
 */

$ipconfig = shell_exec('ipconfig');

$match = preg_match('/(IPv4 Address\. \. \. \. \. \. \. \. \. \. \. :)\s(\d+\.\d+\.\d+\.\d+)/', $ipconfig, $matches);

echo "My IP address:";
echo '<br />';
echo $matches[2];
