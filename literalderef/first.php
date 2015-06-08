<?php

print "Inovae"[2] . "\n";

call_user_func(array(
  'abc' => function() {
    print "shh...\n";
    sleep(1);
  },
)['abc']);
