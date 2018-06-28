<?php

require __DIR__ . '/vendor/autoload.php';

$loop = React\EventLoop\Factory::create();

$loop->addPeriodicTimer(1, function () {
   echo 'Tick' . PHP_EOL;
   $i = 1;
   while ($i <= 10) {
       sleep(1);
       $i++;
       echo 'loop' . PHP_EOL;
   }
});

$loop->run();