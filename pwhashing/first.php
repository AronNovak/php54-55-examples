<?php

$h = password_hash('secret', PASSWORD_BCRYPT, ['cost' => 16]);
print_r(password_get_info($h));
$handle = fopen("php://stdin", "r");
$line = fgets($handle);
print password_verify(trim($line), $h);
