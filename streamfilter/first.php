<?php
$a = fopen("php://filter/write=string.strip_tags/resource=php://output", "w");
var_dump($a);

fwrite($a, "<a>huh</a>");
fclose($a);

// others php://stdin, php://stdout and php://stderr, php://input, php://output, php://fd, php://memory and php://temp 
