<?php

require "vendor/autoload.php";

use SebastianBergmann\Timer\Timer;

$timer = new Timer;

$timer->start();

for($i=0;$i<100;$i++){
    echo rand(1,100). "<br>";
}
echo "tiempo:" .  $timer->stop();

?>